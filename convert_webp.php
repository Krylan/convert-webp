<?php
/*****
 * CONVERT WEBP
 * by Krylan
 *
 * ver 0.1
 * 
 * Small PHP script to create copies of JPG/PNG files in WebP format. 
 * Make your website lighter and more performant.
 *****/
 
/*** CONFIGURATION ***/
// EXECUTION TIME LIMIT
set_time_limit(30);
// SET RELATIVE PATH FOR CONVERSION
$startDirectory = 'img';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>WebP Converter 0.1</title>
<meta charset="UTF-8">
<style>
hr{ border:unset;border-top: 1px solid #AAA; }
ul{ padding:0;margin-top:40px; }
li{
	list-style:none;
	padding:2px 10px;
	font-family: monospace;
}
.label{
	border-radius:4px;
	padding:2px 5px;
	font-size: 10px;
}
.label.opening{
	border:1px solid #888;
	background-color:#999;
}
.label.done{
	border: 1px solid #BDC;
    background-color: #CED;
}
.label.omitted{
	border:1px solid #DDD;
	background-color:#EEE;
}
.label.error{
	border:1px solid #DCB;
	background-color:#EDC;
}
.in_progress{ position:fixed;top:0;left:0;right:0;padding:5px;background-color:#EEE;border-bottom:1px solid #DDD;font-family: monospace; }
</style>
</head>
<body onload="document.querySelector('.in_progress').style.display = 'none'">
<?php
$startDirectory = trim($startDirectory, '/');

$total_size = array('original' => 0, 'webp' => 0);
$file_count = array('done' => 0, 'omitted' => 0, 'error' => 0);

function filesize_formatted($size){
    $units = array( 'B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
    $power = $size > 0 ? floor(log($size, 1024)) : 0;
    return number_format($size / pow(1024, $power), 2, '.', ',') . ' ' . $units[$power];
}

function directoryIteration($directory){
	global $total_size, $file_count;
	$images = glob($directory . "/*.{jpg,png}", GLOB_BRACE);
	foreach($images as $filepath){
		$webp_filepath = $directory.'/'.pathinfo($filepath, PATHINFO_FILENAME).'.webp';
		if(mime_content_type($filepath) == 'image/jpeg'){
			if(!file_exists($webp_filepath)){
				$image = imagecreatefromjpeg($filepath);
				ob_start();
				imagejpeg($image,NULL,100);
				$cont = ob_get_contents();
				ob_end_clean();
				imagedestroy($image);
				$content =  imagecreatefromstring($cont);
				imagewebp($content, $webp_filepath);
				imagedestroy($content);
				echo '<li><span class="label done">DONE</span> '.$filepath.' ('.filesize_formatted(filesize($filepath)).' -> '.filesize_formatted(filesize($webp_filepath)).')</li>';
				$file_count['done']++;
			}else{
				echo '<li><span class="label omitted">OMITTED</span> '.$filepath.' ('.filesize_formatted(filesize($filepath)).' -> '.filesize_formatted(filesize($webp_filepath)).')</li>';
				$file_count['omitted']++;
			}
			$total_size['original'] += filesize($filepath);
			$total_size['webp'] += filesize($webp_filepath);
		}
		if(mime_content_type($filepath) == 'image/png'){
			if(extension_loaded('imagick')){
				if(!file_exists($webp_filepath)){
					$content = imagecreatefromstring(file_get_contents($filepath));
					$im = new Imagick($filepath);
					$im->writeImage($webp_filepath);
					echo '<li><span class="label done">DONE</span> '.$filepath.' ('.filesize_formatted(filesize($filepath)).' -> '.filesize_formatted(filesize($webp_filepath)).')</li>';
					$file_count['done']++;
				}else{
					echo '<li><span class="label omitted">OMITTED</span> '.$filepath.' ('.filesize_formatted(filesize($filepath)).' -> '.filesize_formatted(filesize($webp_filepath)).')</li>';
					$file_count['omitted']++;
				}
				$total_size['original'] += filesize($filepath);
				$total_size['webp'] += filesize($webp_filepath);
			}else{
				echo '<li><span class="label error">ERROR</span> '.$filepath.' (Imagick not installed) </li>';
				$file_count['error']++;
			}
		}
	}

	$dirs = glob($directory . '/*', GLOB_ONLYDIR);
	foreach($dirs as $dirpath) {
		echo '<li><span class="label opening">OPENING</span> '.$dirpath.'</li>';
		directoryIteration($dirpath);
	}
}

echo '<div class="in_progress">WORK IN PROGRESS... PLEASE WAIT</div>';
echo '<ul>';
echo '<li><span class="label opening">OPENING</span> '.$startDirectory.'</li>';
directoryIteration($startDirectory);
echo '<hr>';
echo '<li><b>STATUS: DONE</b></li>';
echo '<li>FILES <span class="label done">DONE</span>: '.$file_count['done'].'</li>';
echo '<li>FILES <span class="label omitted">OMITTED</span>: '.$file_count['omitted'].'</li>';
echo '<li>FILES <span class="label error">ERROR</span>: '.$file_count['error'].'</li>';
echo '<li>ORIGINAL TOTAL SIZE: '.filesize_formatted($total_size['original']).'</li>';
echo '<li>WEBP TOTAL SIZE: '.filesize_formatted($total_size['webp']).'</li>';
echo '</ul>';
?>
</body>
</html>
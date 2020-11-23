# WebP Converter
Small PHP script to create copies of JPG/PNG files in WebP format. Make your website lighter and more performant.

Most of the weight of an average website are images. You can take an advantage of new technologies of optimization and reduce this load. It will help not only your web server to be more efficient, but also help users with weaker Internet connection and, by the way, help an environment.

This script will find all JPG and PNG files in appointed folder (and its subfolders) and create a copy in WebP format – saving with the same name (except extension, of course) and in the same folder. This can save up to 70% of the size of original image, without losing much quality.

![WebP Converter Preview](/preview.jpg?raw=true "WebP Converter Preview")

## Requirements
* PHP
* Imagick extension (optional, for converting PNG->WebP)

## How to use
Download and copy the file convert_webp.php to your server. Open the script in the browser, then fill the form with relative path to folder you want to convert and additional options. The best is to use it few times on smaller folders (and check effects of conversion), rather than once on a big one.

Original image files will remain unchanged – script will make copy of them and save in the same folder, with the same name, but with \*.webp extension. If script will find already converted \*.webp file, it will be omitted by default (but can be changed in options to overwrite it instead).

Execution time limit is set to 30s and script will stop working after such time. You can raise the limit by editing (in text editor) beginning of the script, but it's recommended to stick with 30s.

To support webp files on your website, you can use following rule in your .htaccess file:
```
# WEBP ACCEPT
RewriteCond %{HTTP_ACCEPT} image/webp
RewriteCond %{DOCUMENT_ROOT}/$1.webp -f
RewriteRule (.+)\.(jpe?g|png)$ $1.webp [T=image/webp,E=accept:1]
```

It will serve \*.webp file if user's browser accepts it and when such file will be found in the same directory as original file – otherwise, it serves JPG/PNG. Remember, do not remove your original images.

## To do
* Clean and more consistent code
* More options

## Disclaimer
COVERED CODE IS PROVIDED UNDER THIS LICENSE ON AN "AS IS" BASIS, WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING, WITHOUT LIMITATION, WARRANTIES THAT THE COVERED CODE IS FREE OF DEFECTS, MERCHANTABLE, FIT FOR A PARTICULAR PURPOSE OR NON-INFRINGING. THE ENTIRE RISK AS TO THE QUALITY AND PERFORMANCE OF THE COVERED CODE IS WITH YOU. SHOULD ANY COVERED CODE PROVE DEFECTIVE IN ANY RESPECT, YOU (NOT THE INITIAL DEVELOPER OR ANY OTHER CONTRIBUTOR) ASSUME THE COST OF ANY NECESSARY SERVICING, REPAIR OR CORRECTION. THIS DISCLAIMER OF WARRANTY CONSTITUTES AN ESSENTIAL PART OF THIS LICENSE. NO USE OF ANY COVERED CODE IS AUTHORIZED HEREUNDER EXCEPT UNDER THIS DISCLAIMER.
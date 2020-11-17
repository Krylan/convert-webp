# convert-webp
Small PHP script to create copies of JPG/PNG files in WebP format. Make your website lighter and more performant.

## Requirements
* PHP
* Imagick extension (for converting PNG->WebP)

## How to use
Download and copy the file convert_webp.php to your server. Edit it with any text editing software and change $startDirectory value to the directory (relative path), where you want to start conversion (the script will also go through subdirectories, but not up), and then open the script in the browser. The best is to use it few times on smaller folders (and check effects of conversion), rather than once on a big one.

Original image files will remain unchanged – script will make copy of them and save in the same folder, with the same name, but with \*.webp extension. If script will find already converted \*.webp file, it will be omitted.

Execution time limit is set to 30s and script will stop working after such time. You could raise the limit, if server configuration lets to do this, but it's recommended to stick with 30s.

To support webp files on your website, you can use following rule in your .htaccess file:
```
# WEBP ACCEPT
RewriteCond %{HTTP_ACCEPT} image/webp
RewriteCond %{DOCUMENT_ROOT}/$1.webp -f
RewriteRule (.+)\.(jpe?g|png)$ $1.webp [T=image/webp,E=accept:1]
```

It will serve \*.webp file if user's browser accepts it and when such file will be found in the same directory as original file – otherwise, it serves JPG/PNG. Remember, do not remove your original images.

## To do
* Clean and consistent code
* GUI Mode
* More options

## Disclaimer
COVERED CODE IS PROVIDED UNDER THIS LICENSE ON AN "AS IS" BASIS, WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING, WITHOUT LIMITATION, WARRANTIES THAT THE COVERED CODE IS FREE OF DEFECTS, MERCHANTABLE, FIT FOR A PARTICULAR PURPOSE OR NON-INFRINGING. THE ENTIRE RISK AS TO THE QUALITY AND PERFORMANCE OF THE COVERED CODE IS WITH YOU. SHOULD ANY COVERED CODE PROVE DEFECTIVE IN ANY RESPECT, YOU (NOT THE INITIAL DEVELOPER OR ANY OTHER CONTRIBUTOR) ASSUME THE COST OF ANY NECESSARY SERVICING, REPAIR OR CORRECTION. THIS DISCLAIMER OF WARRANTY CONSTITUTES AN ESSENTIAL PART OF THIS LICENSE. NO USE OF ANY COVERED CODE IS AUTHORIZED HEREUNDER EXCEPT UNDER THIS DISCLAIMER.
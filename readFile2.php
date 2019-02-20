<?php
$filename = "images/php7.png";
$base64 = base64_encode(file_get_contents($filename));
$fileinfo = new finfo(FILEINFO_MIME_TYPE);
$mimetype = $fileinfo->file($filename);
$base64encode = "data:" . $mimetype . ";base64," . $base64;
?>

<a href="<?=$base64encode?>" target="_blank">Image</a>
<img src="<?=$base64encode?>">

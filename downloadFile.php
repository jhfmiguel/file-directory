<?php
$link = "https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png";
$dir = "images";
$content = file_get_contents($link);
$parse = parse_url($link);
$basename = basename($parse["path"]);
$file = fopen($dir . DIRECTORY_SEPARATOR . $basename, "w+");
fwrite($file, $content);
fclose($file);
?>

<img src="<?=$dir . DIRECTORY_SEPARATOR . $basename?>">

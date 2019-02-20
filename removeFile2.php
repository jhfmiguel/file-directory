<?php

//before, copy some images to the "images2" directory.
$dir = "images2";

if (!is_dir($dir)) {
	mkdir($dir);
}

foreach (scandir($dir) as $item) {
	if (!in_array($item, array(".", ".."))) {
		unlink($dir . "/" . $item);
	}
}

echo "$dir directory is empty.";

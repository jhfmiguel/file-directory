<?php
$name = "images";
if (!is_dir($name)) {
	mkdir($name);
	echo "$name directory created successfully.";
} else {
	echo "The directory already exists.";
}

<?php
$name = "images";
if (is_dir($name)) {
	rmdir($name);
	echo "Directory $name removed successfully.";
} else {
	echo "The directory $name does not exist.";
}

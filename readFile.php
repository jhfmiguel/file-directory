<?php
$filename = "csv/users.csv";

if (file_exists($filename)) {
	$file = fopen($filename, "r");
	$headers = explode(",", fgets($file));
	var_dump($headers);
}

<?php
require_once "config.php";
$sql = new Sql();
$users = $sql->select("SELECT * FROM tb_users ORDER BY deslogin");
$headers = array();

foreach ($users[0] as $key => $value) {
	array_push($headers, ucfirst($key));
}

$file = fopen("csv/users.csv", "w+");
fwrite($file, implode(",", $headers) . "\r\n");

foreach ($users as $row) {
	$data = array();
	foreach ($row as $key => $value) {
		array_push($data, $value);
	}
	fwrite($file, implode(",", $data) . "\r\n");
}

fclose($file);

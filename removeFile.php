<?php
$file = fopen("txt/test.txt", "w+");
fclose($file);
unlink("txt/test.txt");
echo "File removed successfully.";

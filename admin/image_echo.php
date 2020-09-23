<?php 
 
$filename = "/uploads/file.jpg"; 
$handle = fopen($filename, "rb"); 
$contents = fread($handle, filesize($filename)); 
fclose($handle); 
 
header("content-type: image/jpg"); 
 
echo $contents; 
 
 
?> 
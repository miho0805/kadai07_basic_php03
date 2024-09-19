<?php

$filePath = 'C:/xampp/img/img.jpg';

$name  = $_POST["name"];
$email = $_POST["email"];
$memo  = $_POST["memo"];
$c     = ",";
$str = $name.$c.$email.$c.$memo;  //aaaa,bbbb,cccc


$file = fopen("data.csv","a");
fwrite($file, $str."\n");
fclose($file);

header("Location: index.php");
exit;


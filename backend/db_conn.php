<?php

$sname= "localhost";
$unmae= "u958888159_andrebilly";
$password = "Apaajadeh10.";
$db_name = "u958888159_fitguru";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
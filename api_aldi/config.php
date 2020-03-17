<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "rest";

$con = mysqli_connect($host,$user,$pass,$db);
if(!$con){
die('galat');
}

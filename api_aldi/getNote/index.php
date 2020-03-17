<?php
require_once('../config.php');
	
	$sql = "select * from tb_note";
	$r = mysqli_query($con,$sql);
	$result = array();

	while($row = mysqli_fetch_array($r)){
	array_push($result,array(
	"id"=>$row['id'],
	"title"=>$row['title']
	));
	}
	
	header('Content-Type: application/json');
	echo json_encode(array('result'=>$result));
mysqli_close($con);
?>

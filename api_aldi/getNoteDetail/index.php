<?php
if(isset($_GET['query'])){
require_once('../config.php');
	
	$sql = "select * from tb_note where id=".$_GET['query'];
	$r = mysqli_query($con,$sql);
	$result = array();

	while($row = mysqli_fetch_array($r)){
	array_push($result,array(
	"id"=>$row['id'],
	"title"=>$row['title'],
	"descriptions"=>$row['descriptions']
	));
	}
	
	header('Content-Type: application/json');
	echo json_encode(array('result'=>$result));
mysqli_close($con);
}else{
header('Content-Type: application/json');
echo '{"result":[{"id": null,"title": null,"descriptions": null}]}';
}
?>

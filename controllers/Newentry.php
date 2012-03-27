<?php
	require_once("../classes/database.class.php");
	$db=new Database();
	$query="INSERT INTO Items VALUES( \"".$_POST['code']."\",\"".$_POST['name']."\",\"".$_POST['price']."\",\"".$_POST['tax']."\",\"".$_POST['qty']."\")";
	echo $query;
	$db->query($query);
	$db->close();
?>

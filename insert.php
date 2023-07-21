<?php
include 'connection.php';
if(isset($_POST['btn1']))
	$name=$_POST['txt1'];
	$email=$_POST['txt2'];
	$place=$_POST['txt3'];
	$doc=array("fullname"=>$name,"email"=>$email,"place"=>$place);
	$collection->insertOne($doc);
	echo "INSERTED";
	header("location:select.php");
?>
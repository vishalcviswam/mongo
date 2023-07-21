<?php
include 'connection.php';
if(isset($_POST['bt1']))
	$idd=$_POST['id'];
	$name=$_POST['txt1'];
	$email=$_POST['txt2'];
	$place=$_POST['txt3'];
	$collection->updateOne(['_id' => new MongoDB\BSON\ObjectID($idd)],['$set'=>['fullname'=>$name,'email'=>$email,'place'=>$place]]);
	header("location:select.php");
?>
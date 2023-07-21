<?php
include 'connection.php';
$id=$_GET['id'];
$result=$collection->findOne(['_id' => new MongoDB\BSON\ObjectID($id)]);
?>
<html>
<head>
<title>EDIT</title>
</head>
<body>
<form action="update.php" method="POST">
<center>
<h1>REGISTRATION FORM</h1>
<input type="hidden" name="id" value="<?php echo $id;?>">
<input type="text" name="txt1"  value="<?php echo $result['fullname'];?>"><br><br>
<input type="email" name="txt2" value="<?php echo $result['email'];?>"><br><br>
<input type="text" name="txt3" value="<?php echo $result['place'];?>"><br><br>
<input type="submit" name="bt1" value="UPDATE">
</center>
</form>
</body>
</html>
<?php
include 'connection.php';
?>
<html> 
<head>
<title>Registration</title>
</head>
<body>
<form action="insert.php" method="POST">
<center>
<h1>REGISTRATION FORM</h1>
<input type="text" name="txt1" placeholder="FULL NAME" required><br><br>
<input type="email" name="txt2" placeholder="EMAIL" required><br><br>
<input type="text" name="txt3" placeholder="PLACE" required><br><br>
<input type="submit" name="btn1" value="REGISTER">
<input type="submit" name="btn2" value="VIEW">
</center>
</form>
</body>
</html>
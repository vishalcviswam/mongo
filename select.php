<?php
include 'connection.php';
$result=$collection->find();
?>
<html>
<head>
<title>VIEW</title>
<!--<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>-->
</head>
<body>
<table id="customers">
<tr>
<th>NAME</th>
<th>EMAIL</th>
<th>PLACE</th>
<th>EDIT</th>
<th>DELETE</th>
</tr>
<?php
foreach ($result as $res)
{
?>
<tr>
<td><?php echo $res['fullname'];?></td>
<td><?php echo $res['email'];?></td>
<td><?php echo $res['place'];?></td>
<td><a href="<?php echo "edit.php?id=$res[_id]"?>">EDIT</a></td>
<td><a href="<?php echo "delete.php?id=$res[_id]"?>"onclick="return confirm('Are you sure you want to delete?')">DELETE</a></td>
</tr>
<?php
	}
?>
</table>
</body>
</html>
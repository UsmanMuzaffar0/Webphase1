<?php

session_start();
include("connection1.php");
$userprofile = $_SESSION['$user_name'];

if ($userprofile == true) 
{
	
}

else
{
	header('location:admin_login.php');
}



?>

<!DOCTYPE html>
<html>
<head>
	<title>admin_home</title>
</head>
<body>
<h1 style="text-align: center; color:red">DASHBOARD</h1><br>
<p style="text-align: center;"><a href="admin_logout.php">logout</a></p>
<hr>

<ul>
	<li><a href="add_category.php">add category</a></li>
	<li><a href="view_category.php">view category</a></li>
	<li>edit category</li>
	<li>delete category</li>


</ul>
</body>
</html>
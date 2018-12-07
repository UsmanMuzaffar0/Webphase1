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
	<li><a href="category.php">category</a></li>
	<li>items</li>
	<li>disable customers</li>
	<li>order logs</li>


</ul>
</body>
</html>
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


error_reporting(0);

	if ($_POST['submit']) 
	{
		$category_title = $_POST['category_title'];
		$category_description = $_POST['category_description'];
		$category_order = $_POST['category_order'];
		

		if ($category_title != "" && $category_title != "" && $category_order != "") 
		{
			$query = "INSERT INTO category (category_title,category_description,category_order) VALUES ('$category_title','$category_description','$category_order')";
			$data = mysqli_query($dbc,$query);
		}

		if ($data) 
		{
			//echo "<br>"."DATA INSERTED";
			echo '<script language="javascript">';
			echo 'alert("DATA INSERTED")';
			echo '</script>';
		}


		else
		{
			echo '<script language="javascript">';
			echo 'alert("PLEASE FILL ALL VALUES")';
			echo '</script>';
		}
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

<br>


<form action="add_category.php" method="post">
	
	CATEGORY TITLE:<input type="text" name="category_title"><br><br>
	CATEGORY DESCRIPTION:<br><textarea name="category_description" rows="4" cols="50">

	</textarea><br><br>
	CATEGORY SORT ORDER:<input type="text" name="category_order"><br><br>
	<input type="submit" name="submit" value="submit">


</form>


</body>
</html>
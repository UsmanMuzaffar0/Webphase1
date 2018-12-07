<?php

session_start();
include("connection1.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>admin panel</title>
</head>
<body>

<form action="admin_login.php" method="post">

	<table align="center">
		<tr>
		<th colspan="2"><h2 align="center">SHOPMATE LOGIN PANEL</h2></th>
		</tr>

		<tr>
			<td>USERNAME</td>
			<td><input type="text" name="username"></td>
		</tr>

		<tr>
			<td>PASSWORD</td>
			<td><input type="password" name="password"></td>
		</tr>
		<br>
		<br>
		<br>
		<tr>
			<br>
			<td align="center" colspan="2"><br><input type="submit" name="submit" value="submit"></td>
		</tr>

		<tr>
			<br>
			<td align="center" colspan="2"><br><a href="admin_new_password.php">forgot my password</a></td>
		</tr>

	</table>	
	

</form>


</body>
</html>


<?php

	if (isset($_POST['submit']))
	{
			$username = $_POST['username'];
			$password = $_POST['password'];


		if ($username != "" && $password != "") 
		{

			$username = $_POST['username'];
			$password = $_POST['password'];
			
			$query = "SELECT * FROM manager WHERE username ='$username' && password = '$password'";
 			$data = mysqli_query($dbc,$query);
 			$total = mysqli_num_rows($data);
 			//echo $total;

 			if ($total==1) 
 			{
 			   $_SESSION['$user_name'] = $username; 
			   header('location:admin_home.php');
 			}

 			else
 			{
 				//echo "username or password is incorrect";
 				echo '<script language="javascript">';
				echo 'alert("username or password is incorrect")';
				echo '</script>';
 			}
		}

		else
		{
			//echo "PLEASE FILL ALL FIELDS";
			echo '<script language="javascript">';
			echo 'alert("PLEASE FILL ALL FIELDS")';
			echo '</script>';

		}
	}



?>
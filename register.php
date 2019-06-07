<!-- <?php
// require_once 'dbconnect.php';
?> -->

<?php
$conn = mysqli_connect("localhost","root","","dhow");

if (isset($_GET['add2'])) {
	$username=$_POST['username'];
	$email=$_POST['email'];
	$phoneno=$_POST['pnumber'];
	$nationalid=$_POST['national'];
	$password=$_POST['password'];


	mysqli_query($conn,"INSERT INTO users (username, email, phoneno, nationalid, password) VALUES ('$username','$email','$phoneno','$nationalid','$password')");
	header("location:index.php"); 
}
else
{

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	<center>
		<div style=" background-color: #5F9EA0;width: 30%; align-items: center;">
			<form method="POST" action="register.php?add2=1" style="box-shadow: 5px 5px 10px black; width: 100%; background-color: white; padding: 14px;">
				<h2 style="background-color: grey;">Welcome: Please Register</h2>
				<table>
					<tr><td>Username: </td><td><input type="text" name="username" placeholder="Username" required=""></td></tr>
					<tr><td>Email: </td><td><input type="text" name="email" placeholder="Email" required=""></td></tr>
					<tr><td>Phone No.: </td><td><input type="text" name="pnumber" placeholder="0712345678" required=""></td></tr>
					<tr><td>National ID: </td><td><input type="text" name="national" placeholder="ID" required=""></td></tr>
					<tr><td>Password: </td><td><input type="password" name="password" placeholder="Ssh! Password" required=""></td></tr>
				</table>
				<button type="submit" name="submit2">Register</button>
				<p>You have an account? Please <a href="index.php">Login</a></p>
			</form>
		</div>
	</center>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Dhow Booking System</title>
</head>
<body>

	<center>
		<div style=" background-color: #5F9EA0;width: 30%; align-items: center;">
			<form action="dbconnect.php" method="POST" style="box-shadow: 5px 5px 10px black; width: 100%; background-color: white; padding: 14px;">
				<h2 style="background-color: grey;">Welcome to Coast Dhow boking system</h2>
				<table>
					<tr><td>Email: </td><td><input type="text" name="email" placeholder="Email" required=""></td></tr>
					<tr><td>Password: </td><td><input type="password" name="password" placeholder="Ssh! Password" required=""></td></tr>
				</table>
				<button type="submit" name="submit">Login</button>
				<p>You don't have an account? Please <a href="register.php">Register</a></p>
			</form>
		</div>
	</center>

</body>
</html>
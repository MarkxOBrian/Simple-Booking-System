<!DOCTYPE html>
<html>
<head>
	<title>Dhow Booking System</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>

<style type="text/css">
	a.button { 
    background-color: grey;
    border-radius: 5px 5px 5px 5px;
    color: #FFFFFF;
    display: inline-block;
    font-size: 13px;
    font-weight: bold;
    padding: 5px 20px;
    text-decoration: none;
    text-transform: uppercase;
    margin-top:15px;
}
a.button:hover {
	background-color: lightblue;
}
</style>

<body>

	<center>
		<div style=" background-color: #5F9EA0;width: 30%; align-items: center;">
			<?php
                if (isset($_SESSION['success_flash'])) {
                    echo '<div class="bg_success"><h4 class="text-success text-center">'.$_SESSION['success_flash'].'</h4></div>';
                    unset($_SESSION['success_flash']);
                }

                 if (isset($_SESSION['error_flash'])) {
                    echo '<div class="bg_danger"><h4 class="text-danger text-center">'.$_SESSION['error_flash'].'</h4></div>';
                    unset($_SESSION['error_flash']);
                }
            ?>
			<form action="dbconnect.php" method="POST" style="box-shadow: 5px 5px 10px black; width: 100%; background-color: white; padding: 14px;">
				<h3 style="background-color: grey; color: white;"> Dhow Booking Mangement System</h3>
				<h4>To login, Enter valid username and password</h4>
            	<table border="0">
            		<tr><td><hr></td><td><hr></td></tr>
                    <tr><td>Username: </td><td><input type="text" name="user" placeholder="Your Username" required /></td></tr>
                    <tr><td><hr></td><td><hr></td></tr>       
                    <tr><td>Password: </td><td><input type="password" name="pass" placeholder="Ssh!! Password" required /></td></tr>
                    <tr><td><hr></td><td><hr></td></tr>
            	</table>
            	<button type="submit" id="submit" name="submit">Login</button>
				<p>Know more about us 
            	<a href="indexmain.php" class="button">Home</a>
            	</p>
			</form>
		</div>
	</center>

</body>
</html>
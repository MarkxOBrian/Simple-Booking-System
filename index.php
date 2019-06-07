<!DOCTYPE html>
<html>
<head>
	<title>Dhow Booking System</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>

<style type="text/css">
	a.button { 
    background-color:grey;
    border-radius: 5px 5px 5px 5px;
    color: #FFFFFF;
    display: inline-block;
    font-size: 13px;
    font-weight;: bold;
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
		<div class="containerfluid" style=" background-color: #5F9EA0;width: 50%;">
			<form class="containerfluid" action="dbconnect.php" method="POST" style="box-shadow: 5px 5px 10px black; width: 100%; background-color: white; padding: 14px;">
				<h2 style="background-color: grey; color: white; font-family: Jazz LET;">Welcome to Dhow Booking Management System</h2>

				<img style="height: 325px; width: 650px" src="dhow1.jpg" >
				<hr>
				<p style="box-shadow: 5px 5px 10px black; border: 2px darkgrey; text-align: justify; padding: 14px;">Dhow Booking System is a computerized system used to store and retrieve information and conduct transactions related to cruise travel. The project is aimed at exposing the relevance and importance of Dhow Booking Systems. It is projected towards enhancing the relationship between customers and shipping agencies through the use of ARSs, and thereby making it convenient for the customers to book the dhows as when they require such that they can utilize the application to make reservations.</p>

				<a href="clientlog.php" class="button">User Login</a>
        		<a href="adminlog.php" class="button">Admin Login</a>
				
			</form>  
    </div>
		</div>
	</center>

</body>
</html>
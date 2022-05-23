<?php

$con = mysqli_connect('localhost', 'root', '');
if($con)
{
	echo "Connection succesfull";
}
else
{
	echo "Connection was not made";
}

mysqli_select_db($con, 'hotelbooking');

$purpose = $_POST['purpose'];
$hotel_type = $_POST['hotel-type'];
$desDescription = $_POST['desiredDescription'];
$date_from = $_POST['date_from'];
$date_to = $_POST['date_to'];

$name = $_POST['name'];
$email =$_POST['email'];
$phone = $_POST['phone'];
$suggestions = $_POST['suggestions'];

$query_1 = "insert into bookinginfo(purpose, hotelType, description, datefrom, dateto, name, email, phone, suggestions) values('$purpose', '$hotel_type', '$desDescription', '$date_from' , '$date_to' , '$name', '$email', '$phone', '$suggestions')";
echo $query_1;
mysqli_query($con, $query_1);


header("Location:index.php");

?>
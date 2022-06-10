<?php
// include 'common.php';
$email = mysqli_real_escape_string($con,$_POST['email']); 
$select_query = "SELECT email FROM users WHERE email='$email' ";
$select_result = mysqli_query($con,$select_query);
$rows=mysqli_num_rows($select_result);
if($rows > 0)
{
	echo 'User Already Exist!';
}
else{
	$name = mysqli_real_escape_string($con,$_POST['name']);
	$password = mysqli_real_escape_string($con,md5($_POST['pass']));
	$contact = mysqli_real_escape_string($con,$_POST['contact']);
	$city = mysqli_real_escape_string($con,$_POST['city']);
	$address = mysqli_real_escape_string($con,$_POST['address']);

	$insert_query = "INSERT INTO users(name, email, password, contact, city, address) VALUES ('$name', '$email', '$password', '$contact', '$city', '$address')";
	$insert_result = mysqli_query($con,$insert_query);
	echo 'Successfully Registered';
// 	header('location: login.php');
}
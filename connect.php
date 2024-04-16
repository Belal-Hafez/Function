<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$message = $_POST['message'];


$rec= "belalhafez8882@gmail.com";
$body= "$firstName $lastName \n$email\n$number\n$message";
mail($rec, "email", $body);

echo "message sent";


}



?>

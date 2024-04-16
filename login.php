
<?php 

$id = null;
$email = $_POST["email"];
$password = $_POST["password"];
$query = "SELECT * from users WHERE email = '$email'";
include("./db.php");


$result = mysqli_query($GLOBALS["connection"], $query);
$user = mysqli_fetch_row($result);
if ($user[2] != $password) {
    echo "Invalid credentitals.";
}
?>



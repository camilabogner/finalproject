   <?php
   $con = mysqli_connect('localhost','root', '');

   if($con) {
    echo "Connection Ssuccessful";
   }

   else{
    echo "Connection Failed";
   }

   mysqli_select_db ($con, 'photos4fun');


$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO users (name, phone, email, message) VALUES ('$name', '$phone', '$email', '$message')";

mysqli_query($con, $query);
header('location:contact.php');

   ?>
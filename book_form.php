<?php
include("dbconnect.php");

if(isset($_POST['submitButton'])){
$name =$_POST['name'];
$email =$_POST['email'];
$phone =$_POST['phone'];
$address =$_POST['address'];
$location =$_POST['location'];
$guests =$_POST['guests'];
$arrivals =$_POST['arrivals'];
$leaving =$_POST['leaving'];

$request ="INSERT INTO book_form(name,email,phone,address,location,guests,arrivals,leaving) values 
('$name','$email','$phone', '$address', '$location','$guests','$arrivals','$leaving') ";

mysqli_query($db,$request);

header('location:home.php');


}
else{
    echo 'something went wrong try again';
}
?>

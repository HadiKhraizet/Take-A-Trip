<?php
session_start();
include("dbconnect.php");
if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['password']; 
    $cpass=$_POST['cpassword'];

    $request = "INSERT INTO user_form(name, email, password, cpassword) VALUES
     ('$name','$email','$pass','$cpass')";
    mysqli_query($db, $request);

    header('location:login_form.php');
}
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    // User is logged in, don't show the registration form
    header('location:login_form.php');
  } 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Take A Trip - Registration</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/tatstyle.css">
    <link rel="icon" href="images/taticon.png">

</head>
<body>
<?php include 'nav.php'; ?>

<div class="heading" style="background:url(images/header-bg-3.jpg) no-repeat">
    <h1>book now</h1>
</div>

<h1 class="sign-heading" >register to view your bookings!</h1>

<section class="sign-in">
    <form id="myForm" onsubmit="return validateForm()" action="<?php $_SERVER['PHP_SELF']?>" method="POST">
    
    <label for="name">Name:</label>
      <input type="text" id="name" name="name" placeholder="enter your last name" required />

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="enter your email" required />

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="enter your password" required />

      <br><span id="passwordError" class="error"></span><br>

      <label for="confirmPassword">Confirm Password:</label>
      <input type="password" id="confirmPassword" name="cpassword" placeholder="confirm your password" required /><br>
      
      <br><span id="confirmPasswordError" class="error"></span><br>
      
      <input type="submit" name="submit" value="register now" class="btn">
      <h3 style=" margin-top: 10px; font-size: 20px;">already have an account? <a href="login_form.php">login now</a></h3>
        
    </form>
 </section>   




 <?php include 'footer.php'; ?>
 
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js/tatscript.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</body>
</html>
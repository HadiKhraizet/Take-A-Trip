<?php
session_start();
if(isset($_POST['email'] )&& isset($_POST['password'])){
include("dbconnect.php");

    $email=$_POST['email'];
    $pass=$_POST['password']; 
   
    $query =" SELECT * FROM user_form WHERE email = '$email' && password= '$pass' ";

    $result = mysqli_query($db, $query) or die(mysqli_error($db));
    $row = mysqli_fetch_array($result);

    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_array($result);
      $_SESSION['logged_in'] = true;
      $_SESSION["email"]=$email;
    }else{
        $error[]='incorrect email or password!';
    }
}
if(isset($_GET['logout'])&& ($_GET['logout']==1)){
    session_destroy();
    header("Location: ".$_SERVER['PHP_SELF']);
}
if(isset($_SESSION["email"])){
    include("book.php");
    echo "<a class='btn' href='".$_SERVER['PHP_SELF']."?logout=1'>Log Out</a>";
}else{


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Take A Trip - Log in</title>

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

<h1 class="sign-heading" >log in to view your bookings!</h1>

<section class="sign-in">
    <form id="myForm" action="<?php $_SERVER['PHP_SELF']?>" method="post">
    <?php
        if(isset($error)){
            foreach($error as $error){
                echo '<h3><span style=" margin: 10px 0;
                color: crimson;
                font-size: 25px;
                padding: 10px;">'.$error.'</span></h3>';
            };
        };
        
        ?>

       

        <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="enter your email" required />

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="enter your password" required />
      <br>
      <input type="submit" name="submit" value="login now" class="btn">
      <h3 style=" margin-top: 10px; font-size: 20px;">don't have an account? <a href="register_form.php">register now</a></h3>
        
    </form>
    </section>

    <?php include 'footer.php'; ?>
 
 <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
 <script src="js/tatscript.js" ></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 
 </body>
 </html>
 <?php } ?>
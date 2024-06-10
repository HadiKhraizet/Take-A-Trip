<?php 
@include 'conf.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Take A Trip - Book</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/tatstyle.css">
    <link rel="icon" href="images/taticon.png">

</head>
<body>
<?php include("nav.php");?>

<div class="heading" style="background:url(images/header-bg-3.jpg) no-repeat">
    <h1>book now</h1>
</div>

<h1 class="sign-heading" >book your trip!</h1>

<section class="sign-in">
    <form action="book_form.php" method="POST" action="<?php $_SERVER['PHP_SELF']?>"> 
      <table>
        <tr>
        <td><label for="name">Full Name:</label></td>
        <td><label for="email">Email:</label></td>
        </tr>

        <tr>
        <td><input type="text" id="name" name="name" placeholder="enter your name" required ></td>
        <td><input type="email" id="email" name="email" placeholder="enter your email" required /></td>
        </tr>

        <tr>
        <td><label for="phone">phone:</label></td>
        <td><label for="address">address:</label></td>
        </tr>

        <tr>
        <td><input type="number" id="phone" name="phone" placeholder="enter your number" required /></td>
        <td><input type="text" id="address" name="address" placeholder="enter your address" required /></td>
        </tr>

        <tr>
        <td><label for="location">where to:</label></td>
        <td><label for="guests">how many:</label></td>
        </tr>

        <tr>
        <td><input type="text" id="location" name="location" placeholder="place you want to visit" required /></td>
        <td><input type="number" id="guests" name="guests" placeholder="number of guests" required /></td>
        </tr>

        <tr>
        <td><label for="arrivals">arrivals:</label></td>
        <td><label for="leaving">leaving:</label></td>
        </tr>

        <tr>
        <td><input type="date" id="arrivals" name="arrivals" required /></td>
        <td><input type="date" id="leaving" name="leaving" required /></td><br>
        </tr>

        </table>

        
        <input type="submit" class="btn" onclick="displayMessage()" id="submitButton" name="submitButton" value="Submit" style="margin-top: 50px;"/>
        <?php 
  
  if(isset($_GET['logout'])&& ($_GET['logout']==1)){
    session_destroy();
    header("Location: ".$_SERVER['PHP_SELF']);
}
if(isset($_SESSION["email"])){
    echo "<a class='btn' href='".$_SERVER['PHP_SELF']."?logout=1'>Log Out</a>";
}
?>
    </form> 
 </section> 

 <?php include 'footer.php'; ?>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js/tatscript.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</body>
</html>
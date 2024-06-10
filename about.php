<?php
include("dbconnect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Take A Trip - About</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/tatstyle.css">
    <link rel="icon" href="images/taticon.png">

</head>
<body>
<?php include("nav.php"); ?>

<div class="heading" style="background:url(images/header-bg-1.jpg)no-repeat ">
    <h1>about us</h1>
</div>

<section class="about">
    <div class="image">
        <img src="images/about-img.jpg">
    </div>

    <div class="content">
        <h3>why choose us?</h3>
        <p>Welcome to our travel and exploration website! We are a team of passionate travel enthusiasts who believe that the world is a vast and beautiful place, meant to be explored and experienced.</p>
        <p>Our mission is to provide our visitors with the best travel and exploration resources available on the internet. We are committed to sharing our knowledge and expertise with you to help you plan the perfect trip, whether it's a weekend getaway or an extended journey around the world.</p>
        <div class="icons-container">
            <div class="icons">
                <i class="fas fa-map"></i>
                <span>top destinations</span>
            </div>
            <div class="icons">
                <i class="fas fa-hand-holding-usd"></i>
                <span>affordable price</span>
            </div>
            <div class="icons">
                <i class="fas fa-headset"></i>
                <span>24/7 guide services</span>
            </div>
        </div>
    </div>
</section>

<section class="reviews">
    <div class="swiper reviews-slider">
        <div class="swiper-wrapper">

            <?php
                $result=mysqli_query($db, "SELECT * FROM reviews");
                while($row = mysqli_fetch_assoc($result)){
                    $rid=$row['id'];
                    $rname=$row['name'];
                    $rimage=$row['image'];
                    $rreview=$row['review'];
                    echo ' 
                    <div class="swiper-slide slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <img src="'.$rimage.'">
                        <h3>'.$rname.'</h3>
                        <span>traveler</span>
                        <p>'.$rreview.'</p>
                    </div>';
                }
            ?>

        </div>
    </div>
</section>


<?php include 'footer.php'; ?>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js/tatscript.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</body>
</html>
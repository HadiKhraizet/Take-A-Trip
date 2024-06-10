<?php
include("dbconnect.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Take A Trip</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/tatstyle.css">
    <link rel="icon" href="images/taticon.png">

</head>
<body>
<?php include 'nav.php'; ?>

<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background: url(images/home-slider-1.jpg) no-repeat ">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>travel around the world</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>
            <div class="swiper-slide slide" style="background: url(images/home-slider-2.jpg)  no-repeat ">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>discover new places</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>
            <div class="swiper-slide slide" style="background: url(images/home-slider-3.jpg)  no-repeat ">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>make your tour worthwhile</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>

<section class="services">
    <h1 class="heading-title"> our services </h1>
    <div class="box-container">
        <div class="box">
            <img src="images/icon-1.png">
            <h3>adventure</h3>
        </div>

        <div class="box">
            <img src="images/icon-2.png">
            <h3>tour guide</h3>
        </div>

        <div class="box">
            <img src="images/icon-3.png">
            <h3>hiking</h3>
        </div>

        <div class="box">
            <img src="images/icon-4.png">
            <h3>camp fire</h3>
        </div>
        <div class="box">
            <img src="images/icon-5.png">
            <h3>off road</h3>
        </div>

        <div class="box">
            <img src="images/icon-6.png">
            <h3>camping</h3>
        </div>
    
    </div>
</section>

<section class="home-about">
    <div class="image">
        <img src="images/about-img.jpg" >
    </div>

    <div class="content">
        <h3>about us</h3>
        <p>Welcome to our travel and exploration website! We are a team of passionate travel enthusiasts who believe that the world is a vast and beautiful place, meant to be explored and experienced.</p>
        <a href="about.php" class="btn">read more</a>
    </div>
</section>

<section class="home-package">
    <h1 class="heading-title"> our packages </h1>
    <?php
     $result=mysqli_query($db, "SELECT * FROM category");
    ?>
    <div class="box-container">

        <?php
    $counter = 0;
    while($row = mysqli_fetch_assoc($result)){
        $cid=$row['id'];
        $cname=$row['name'];
        $cimage=$row['image'];
        $cdescription=$row['description'];
        echo ' <div class="box">
                <div class="images">
                    <img src="'. $cimage.'">
                </div>
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt" ></i><a style="color:black" href="trips.php?cid='.$cid.'"> '. $cname.'</a></h3>
                    <p>'.$cdescription.'</p>
                    <a href="trips.php?cid='.$cid.'" class="btn">discover more</a>
                </div>
            </div>';
        $counter++;
        if ($counter == 3) {
            break;
        }
    }
?>

    </div>

    <div class="load-more"><a href="package.php" class="btn">load more</a></div>
</section>

<section class="home-offer">
    <div class="content">
        <h3>up to 50% off</h3>
        <p>Unleash your inner adventurer with our exclusive tour offers, designed to take you on unforgettable journeys to the world's most stunning destinations!</p>
        <a href="register_form.php" class="btn">book now</a>
    </div>
</section>


<?php include 'footer.php'; ?>


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js/tatscript.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
</body>
</html>
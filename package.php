<?php
include("dbconnect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Take A Trip - Packages</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/tatstyle.css">
    <link rel="icon" href="images/taticon.png">

</head>
<body>
<?php include 'nav.php'; ?>

<div class="heading" style="background:url(images/header-bg-2.jpg) no-repeat ">
    <h1>packages</h1>
</div>





<section class="packages">
    <h1 class="heading-title">Discover Our Exciting Travel Packages</h1>
    <?php
     $result=mysqli_query($db, "SELECT * FROM category");
    ?>
    <div class="box-container">
    <?php
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
}        
?>
</div>
    <div class="load-more"><span href="package.php" class="btn">load more</span></div>

</section>

<?php include 'footer.php'; ?>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js/tatscript.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</body>
</html>
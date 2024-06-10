<?php
include("dbconnect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Take A Trip - Trips</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/tatstyle.css">
    <link rel="icon" href="images/taticon.png">

</head>
<body>
<?php include 'nav.php'; ?>

<div class="heading" style="background:url(images/header-bg-4.jpg) no-repeat ">
    <h1>trips</h1>
</div>



<?php
     $result=mysqli_query($db, "SELECT * FROM category WHERE id='".$_GET['cid'] . "'");
?>
    <div class="box-container">
        
    <?php
    
        while($row = mysqli_fetch_assoc($result)){
            $cname=$row['name'];
            echo'
<section class="packages">
    <h1 class="heading-title">Explore Popular Destinations in <span style="color:#1ebbce; text-transform:uppercase">'.$cname.'</span></h1>';

        }
    ?>
    <?php 
    if(isset($_GET['cid'])){
        $result = mysqli_query($db, "SELECT * FROM products WHERE catid = '" . $_GET['cid'] . "'"); 
       }
    ?>
    <div class="box-container">
        <?php 
        if(isset($_GET['cid'])){
            while($row = mysqli_fetch_assoc($result)){
                $pid=$row['id'];
                $pname=$row['name'];
                $pimage=$row['image'];
                $pdescription=$row['description'];
                $pnewprice=$row['newprice'];
                $poldprice=$row['oldprice'];
                echo '<div class="box">
                        <div class="images">
                            <img src="'. $pimage.'">
                        </div>
                        <div class="content">
                            <h3><i class="fas fa-map-marker-alt"></i><a style="color:black" href="trips-details.php?pid='.$pid.'"> '. $pname.'</a></h3>
                            <p>'.$pdescription.'</p>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="price">' .$pnewprice. '  <span>'.$poldprice.'</span></div>
                           <a href="trips-details.php?pid='.$pid.'" class="btn">view details</a>
                        </div>
                    </div>';
            }
        }
        ?>
    </div>
   
</section>

<?php include 'footer.php'; ?>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js/tatscript.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</body>
</html>
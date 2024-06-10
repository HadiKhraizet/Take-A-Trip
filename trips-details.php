<?php
include("dbconnect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Take A Trip - Trip Details</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/tatstyle.css">
    <link rel="icon" href="images/taticon.png">

</head>
<body>
<?php include 'nav.php'; ?>

<?php
if(isset($_GET['pid'])){
    $result=mysqli_query($db,"SELECT * FROM products WHERE id='".$_GET['pid'] . "'");
}

    while($row = mysqli_fetch_assoc($result)){
        $pid=$row['id'];
        $pname=$row['name'];
        $pimage=$row['image'];
        $pdescription=$row['description'];
        $pnewprice=$row['newprice'];
        $poldprice=$row['oldprice'];
        $pmap=$row['map'];
        $pdetails=$row['details'];
        echo'
<div class="heading" style="background:url('.$pimage.') no-repeat ">
    <h1>'.$pname.'</h1>
</div>

<section class="details">
  <div class="text">
    <h3>You are going to love <span style="color:#1ebbce; ">'.$pname.'</span></h3>
    <p>'.$pdetails.'<p>
  </div>
  <div class="right-section">
    <div class="map">
      <iframe src="'.$pmap.'"></iframe>
    </div>
    <div class="trip">
      <h3>details:</h3><br>
      <p><i class="fas fa-map-marker-alt" style="color:#1ebbce; "></i>  '.$pname.'</p>
      <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="far fa-star"></i>
  </div>
      <p>Price: <span style="color:#777; ">'.$pnewprice.'</span></p>
      <p>'.$pdescription.'</p>
      <a href="register_form.php" class="btn">book now</a>
    </div>
  </div>
</section>

    
';}
    ?>


    
<?php include 'footer.php'; ?>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js/tatscript.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</body>
</html>
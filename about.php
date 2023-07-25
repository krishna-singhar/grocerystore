<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="logoicon.jpeg">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="index.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Kirana is a low-cost online general store that gets items crosswise over classifications like grocery, natural products and vegetables, excellence and health, and meats and fish conveyed to your doorstep.

Browse more than 100 items at costs lower than markets each day!

Calendar conveyance according to your benefit.</p>
         <p>The world is evolving quickly, determined by various shopping propensities and always cutting-edge innovation for the customer. Grocery is the biggest of all retail portions and is moving on the web.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>Reliable , quick and hassle free groceries.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rani</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>Great service and excellent delivery. Not one item was missing and if there was a substitute then that was intimated via email. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Isha</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>My order was processed promptly, correctly picked and then packed with care. Grocery Online wrapped these in bubble wrap to ensure they arrived intact and unbroken. Full marks to Grocery Online!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rekha</h3>
      </div>

</section>

<section class="authors">
</section>





<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
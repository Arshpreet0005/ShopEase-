<?php

@include 'config.php';

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
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="">
         <h3>why choose us?</h3>
         <p><b>100% Organic:</b> Fresh, natural, and chemical-free products sourced directly from trusted farms.
<b>Sustainability:</b> Eco-friendly practices that support local farmers and the environment.
<b>Freshness Guaranteed:</b> Farm-to-table quality with every order.
<b>Wide Range:</b> Everything from fresh produce to organic meats at affordable prices.
<b>Convenience:</b> Easy shopping and doorstep delivery for a hassle-free experience.
<i><h2>Choose us for healthier living and a greener future!.</h2></i></p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>what we provide?</h3>
         <p><b>Fresh Organic Produce:</b> Handpicked fruits and vegetables straight from organic farms.
<b>Quality Meats & Seafood:</b> Ethically sourced chicken, mutton, fish, and more.
<b>Dairy & Eggs:</b> Farm-fresh, hormone-free dairy products and eggs.
<b>Pantry Staples:</b> Organic grains, pulses, spices, and essentials for your kitchen.
<b>Healthy Snacks:</b> Guilt-free options for every craving.
<b>Quick Delivery:</b> Freshness guaranteed, right to your doorstep.
<i><h2>We bring nature’s best to your home!</h2></i></p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>🌟 "Freshness and quality I can trust!"
I’ve been ordering from here for months, and the quality of their fruits, veggies, and meat is consistently excellent. The best part is knowing I’m feeding my family organic and chemical-free food.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>🌟 "Perfect for a healthy lifestyle!"
Switching to organic was the best decision I made, and this website makes it so easy. Their delivery is quick, and I’ve never been disappointed with the products.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>lisa rose</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>🌟 "A one-stop organic shop!"
From vegetables to pantry items, everything is fresh, organic, and fairly priced. Customer support has been amazing whenever I needed assistance. Highly recommend!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Roy Leon</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>🌟 "Sustainability done right!"
I love their eco-friendly packaging and commitment to supporting local farmers. Shopping here feels good for my health and the planet.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Alisa mana</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>🌟 "Reliable, affordable, and fresh!"
Finally, a website that offers true organic products at reasonable prices. Their meats are tender and delicious, and the veggies last longer than store-bought ones.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Liam stone</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>🌟 "High-quality products at affordable prices!"
I’ve tried many organic grocery stores, but this one stands out for its consistent quality. The prices are fair, and I love that they offer bulk options for my regular purchases. Highly recommended for anyone looking to switch to organic living.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Marin Kita</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>
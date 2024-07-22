<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Travel Dalam Negri</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script>
      $(document).ready(function(){
          $(".scroll-top").click(function() {
              $("html, body").animate({ 
                  scrollTop: 0 
              }, "slow");
              return false;
          });
      });
   </script>

</head>
<body>
<section class="header">

   <a href="home.php" class="logo"><img src="images/logo.jpg"></a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php" class="active">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
      <?php if(isset($_SESSION['user_id'])): ?>
         <a href="logout.php">logout (<?php echo $_SESSION['user_id']; ?>)</a>
      <?php else: ?>
         <a href="login.php">login</a>
         <a href="register.php">register</a>
      <?php endif; ?>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>
</section>
<div class="heading" style="background:url(images/header-bg-1.png) no-repeat">
   <h1>tentang kami</h1>
</div>
<section class="about">

   <div class="image">
      <img src="images/about-img.jpg" alt="">
   </div>
   <div class="content">
      <h3>kenapa memilih kami?</h3>
      <p> Amazing Tours adalah operator tur terbaik dan agen perjalanan di indonesia. Kami menyediakan Paket Tur, Pemesanan Hotel, dan layanan tur di indonesia. Temukan paket tur dalam negri dari indonesia dengan harga murah termasuk paket terbaik ... Paket Perjalanan | Paket Bulan Madu | Paket Tur</p>
      <p>Liburan yang luar biasa. Komunikasi sangat baik. Ramah dan mudah untuk diajak berurusan. (Sayangnya, transfer kembali ke bandara pada hari terakhir tidak termasuk)</p>
      <div class="icons-container">
         <div class="icons">
            <i class="fas fa-map"></i>
            <span>tujuan favorit</span>
         </div>
         <div class="icons">
            <i class="fas fa-headset"></i>
            <span>pelayanan servis 24/7</span>
         </div>
         <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>harga yang masuk akal</span>
         </div>
      </div>
   </div>

</section>

<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>

<section class="footer">
   <div class="box-container">
      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +62-8223-7147-003 </a>
         <a href="#"> <i class="fas fa-phone"></i> +62-821-9283-4459 </a>
         <a href="#"> <i class="fas fa-envelope"></i> traveldalamnegri@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> kendari, indonesia - 8809  </a>
      </div>
</section>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
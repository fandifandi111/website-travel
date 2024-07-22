<?php
session_start();
?>

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
<!-- header section starts  -->
<section class="header">
   <a href="home.php" class="logo"><img src="images/logo.jpg"></a>
   <nav class="navbar">
      <a href="home.php" class="active">home</a>
      <a href="about.php">about</a>
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
<!-- header section ends -->

<!-- home section starts  -->
<section class="home">
   <div class="swiper home-slider">
      <div class="swiper-wrapper">
         <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
            <div class="content">
               <span>cari, pesan, dan berangkat</span>
               <h3>FANDI TRAVEL AGENCY</h3>
               <a href="package.php" class="btn">lihat lebih</a>
            </div>
         </div>
   </div>
</section>

<!-- home about section starts  -->
<section class="home-about">
   <div class="image">
      <img src="images/about-img.jpg" alt="">
   </div>
   <div class="content">
      <h3>tentang kami</h3>
      <p> Amazing Tours adalah operator tur terbaik dan agen perjalanan di Indonesia. Kami menyediakan Paket Tur, Pemesanan Hotel, dan layanan tur di Indonesia. Temukan paket tur dalam negeri dari Indonesia dengan harga murah termasuk paket terbaik ... Paket Perjalanan | Paket Bulan Madu | Paket Tur</p>
      <p>Liburan yang luar biasa. Komunikasi sangat baik. Ramah dan mudah untuk diajak berurusan. (Sayangnya, transfer kembali ke bandara pada hari terakhir tidak termasuk)</p>
      <a href="about.php" class="btn">read more</a>
   </div>
</section>
<!-- home about section ends -->

<!-- home packages section starts  -->
<section class="home-packages">
   <h1 class="heading-title"> paket wisata </h1>
   <div class="box-container">
      <div class="box">
         <div class="image">
            <img src="images/img-1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Paket Tur Bali</h3>
            <p>Nikmati Liburan Anda Dengan paket Tour Yang murah!</p>
            <h2>Rp.12.000.000</h2>
            <a href="book.php" class="btn">booking sekarang</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Paket Tur Raja Ampat</h3>
            <p>Nikmati Liburan Anda Dengan paket Tour Yang murah!</p>
            <h2>Rp.15.000.000</h2>
            <a href="book.php" class="btn">booking sekarang</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-3.jpg" alt="">
         </div>
         <div class="content">
            <h3>Paket Tur Sumba</h3>
            <p>Nikmati Liburan Anda Dengan paket Tour Yang murah!</p>
            <h2>Rp.13.000.000</h2>
            <a href="book.php" class="btn">booking sekarang</a>
         </div>
      </div>
   </div>
   <div class="load-more"> <a href="package.php" class="btn">lihat lebih</a> </div>
</section>

<!-- home offer section ends -->

<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>
<!-- footer section starts  -->
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
<!-- footer section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>


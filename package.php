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
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php" class="active">package</a>
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

<div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
   <h1>paket Travel</h1>
</div>

<!-- packages section starts  -->

<section class="packages">

   <h1 class="heading-title">tempat wisata Favorit</h1>

   <div class="box-container">

   <div class="box">
   <div class="image">
      <img src="images/img-1.jpg" alt="">
   </div>
   <div class="content">
      <h3>Paket Tur Bali</h3>
      <p>Nikmati Liburan Anda dengan paket tur yang murah ke Bali! Bali dikenal sebagai destinasi pariwisata yang menawarkan keindahan alam yang memesona, kekayaan budaya yang mendalam, dan kehidupan malam yang seru. Pantai-pantai seperti Kuta, Seminyak, dan Jimbaran menawarkan pemandangan matahari terbenam yang memukau, sementara Ubud memikat dengan seni dan tradisi Bali yang autentik. Jangan lewatkan juga wisata spiritual di Pura Besakih atau pengalaman menantang di Gunung Batur.</p>
      <h2>Rp.12.000.000</h2>
      <a href="book.php" class="btn">Booking Sekarang</a>
   </div>
</div>

<div class="box">
   <div class="image">
      <img src="images/img-2.jpg" alt="">
   </div>
   <div class="content">
      <h3>Paket Tur Raja Ampat</h3>
      <p>Nikmati Liburan Anda dengan paket tur yang murah ke Raja Ampat! Terletak di Papua Barat, Raja Ampat adalah surga bagi para penyelam dengan keindahan bawah laut yang tak tertandingi. Kepulauan ini menawarkan terumbu karang yang spektakuler, beragam spesies laut yang langka, dan pantai-pantai yang tenang. Jika Anda mencari petualangan, jelajahi pulau-pulau terpencil dan nikmati keindahan alam yang masih alami.</p>
      <h2>Rp.15.000.000</h2>
      <a href="book.php" class="btn">Booking Sekarang</a>
   </div>
</div>

<div class="box">
   <div class="image">
      <img src="images/img-3.jpg" alt="">
   </div>
   <div class="content">
      <h3>Paket Tur Sumba</h3>
      <p>Nikmati Liburan Anda dengan paket tur yang murah ke Sumba! Sumba terkenal dengan keindahan pantai berpasir putih, desa-desa tradisional yang kaya budaya, dan atraksi unik seperti festival pasola. Pulau ini menawarkan pengalaman menunggang kuda Sumba yang terkenal serta keindahan alam yang masih alami.</p>
      <h2>Rp.13.000.000</h2>
      <a href="book.php" class="btn">Booking Sekarang</a>
   </div>
</div>

<div class="box">
   <div class="image">
      <img src="images/img-4.jpg" alt="">
   </div>
   <div class="content">
      <h3>Paket Tur Wakatobi</h3>
      <p>Nikmati Liburan Anda dengan paket tur yang murah ke Wakatobi! Wakatobi terkenal sebagai destinasi snorkeling dan diving terbaik di Indonesia dengan keanekaragaman hayati laut yang luar biasa. Jelajahi terumbu karang yang cantik dan nikmati keindahan bawah laut yang memukau di pulau-pulau seperti Wangi-Wangi, Kaledupa, Tomia, dan Binongko.</p>
      <h2>Rp.10.000.000</h2>
      <a href="book.php" class="btn">Booking Sekarang</a>
   </div>
</div>

<div class="box">
   <div class="image">
      <img src="images/img-5.jpg" alt="">
   </div>
   <div class="content">
      <h3>Paket Tur Lombok</h3>
      <p>Nikmati Liburan Anda dengan paket tur yang murah ke Lombok! Lombok menawarkan keindahan pantai pasir putih, air terjun yang menakjubkan, dan Gunung Rinjani yang menantang untuk pendakian. Pantai seperti Senggigi dan Kuta Lombok menawarkan kemewahan dan ketenangan untuk bersantai sambil menikmati pemandangan laut yang indah.</p>
      <h2>Rp.10.000.000</h2>
      <a href="book.php" class="btn">Booking Sekarang</a>
   </div>
</div>

<div class="box">
   <div class="image">
      <img src="images/img-6.jpg" alt="">
   </div>
   <div class="content">
      <h3>Paket Tur Bandung</h3>
      <p>Nikmati Liburan Anda dengan paket tur yang murah ke Bandung! Bandung dikenal dengan udaranya yang sejuk, alam pegunungan yang hijau, dan kekayaan budaya yang menarik. Kunjungi tempat-tempat seperti Tangkuban Perahu, Kawah Putih, dan Factory Outlet di Bandung untuk pengalaman berbelanja dan menjelajahi keindahan alam yang menyegarkan.</p>
      <h2>Rp.17.000.000</h2>
      <a href="book.php" class="btn">Booking Sekarang</a>
   </div>
</div>

<div class="box">
   <div class="image">
      <img src="images/img-7.jpg" alt="">
   </div>
   <div class="content">
      <h3>Paket Tur Surabaya</h3>
      <p>Nikmati Liburan Anda dengan paket tur yang murah ke Surabaya! Surabaya adalah kota metropolitan dengan sejarah panjang dan budaya yang kaya. Nikmati makanan khas Surabaya seperti sate klopo, rujak cingur, dan lontong balap, serta kunjungi tempat-tempat bersejarah seperti House of Sampoerna dan Taman Bungkul untuk menikmati suasana kota yang berbeda.</p>
      <h2>Rp.23.000.000</h2>
      <a href="book.php" class="btn">Booking Sekarang</a>
   </div>
</div>

<div class="box">
   <div class="image">
      <img src="images/img-8.jpg" alt="">
   </div>
   <div class="content">
      <h3>Paket Tur Batam</h3>
      <p>Nikmati Liburan Anda dengan paket tur yang murah ke Batam! Batam adalah destinasi wisata terkenal dengan pusat perbelanjaan, resor, dan golf yang menarik. Jelajahi keindahan alamnya di Pulau Galang dan Pulau Batam, serta nikmati aktivitas seperti spa dan golf di beberapa lapangan golf terbaik di Asia Tenggara.</p>
      <h2>Rp.16.500.000</h2>
      <a href="book.php" class="btn">Booking Sekarang</a>
   </div>
</div>

      <div class="box">
   <div class="image">
      <img src="images/img-9.jpg" alt="">
   </div>
   <div class="content">
      <h3>Paket Tur Jayapura</h3>
      <p>Nikmati Liburan Anda dengan paket tur yang murah ke Jayapura! Jayapura menawarkan pesona alam Papua yang belum terjamah dengan keindahan pantai yang memukau dan kekayaan budaya yang unik. Jelajahi danau-danau indah seperti Danau Sentani, nikmati panorama gunung-ganung yang menakjubkan, serta eksplorasi budaya lokal yang kaya dan menarik.</p>
      <h2>Rp.20.000.000</h2>
      <a href="book.php" class="btn">Booking Sekarang</a>
   </div>
</div>

<div class="box">
   <div class="image">
      <img src="images/img-10.jpg" alt="">
   </div>
   <div class="content">
      <h3>Paket Tur Jakarta</h3>
      <p>Nikmati Liburan Anda dengan paket tur yang murah ke Jakarta! Jakarta adalah ibu kota Indonesia yang menyajikan kontras antara kehidupan perkotaan yang sibuk dengan warisan budaya dan sejarah yang kaya. Jelajahi museum-museum menarik, pusat perbelanjaan terkenal seperti Plaza Indonesia dan Grand Indonesia, serta nikmati kuliner khas Jakarta seperti nasi uduk dan soto Betawi.</p>
      <h2>Rp.25.000.000</h2>
      <a href="book.php" class="btn">Booking Sekarang</a>
   </div>
</div>

<div class="box">
   <div class="image">
      <img src="images/img-11.jpg" alt="">
   </div>
   <div class="content">
      <h3>Paket Tur Makassar</h3>
      <p>Nikmati Liburan Anda dengan paket tur yang murah ke Makassar! Makassar adalah pintu gerbang ke Timur Indonesia dengan keindahan pantai yang menakjubkan dan budaya yang kaya. Jelajahi Benteng Rotterdam, nikmati kuliner khas Makassar seperti Coto Makassar dan Pallubasa, serta kunjungi Taman Losari untuk menikmati pemandangan sunset yang indah.</p>
      <h2>Rp.10.000.000</h2>
      <a href="book.php" class="btn">Booking Sekarang</a>
   </div>
</div>

<div class="box">
   <div class="image">
      <img src="images/img-12.jpg" alt="">
   </div>
   <div class="content">
      <h3>Paket Tur Kendari</h3>
      <p>Nikmati Liburan Anda dengan paket tur yang murah ke Kendari! Kendari adalah kota pantai yang menawarkan pesona alam bawah laut yang luar biasa dan kehidupan laut yang kaya. Nikmati aktivitas snorkeling atau diving di Pulau Hoga atau Pulau Sombori, serta eksplorasi keindahan alam Taman Nasional Wakatobi yang terkenal.</p>
      <h2>Rp.8.000.000</h2>
      <a href="book.php" class="btn">Booking Sekarang</a>
   </div>
   </div>

   <div class="load-more"><span class="btn">see more</span></div>
<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>

</section>

<!-- packages section ends -->
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
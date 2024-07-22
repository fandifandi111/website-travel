<?php session_start(); ?>

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

          <?php if (isset($_SESSION['print_data']) && !empty($_SESSION['print_data'])) { ?>
          window.print();
          <?php unset($_SESSION['print_data']); } ?>
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
      <a href="package.php">package</a>
      <a href="book.php" class="active">book</a>
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

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>book now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">book your trip!</h1>

   <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
      <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green;"><?php echo $_SESSION['success_message']; ?></div>
      <?php
      unset($_SESSION['success_message']);
   }
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Travel Dalam Negri - Booking</title>
   <link rel="stylesheet" href="css/style.css">
   <style>
      /* CSS lainnya jika diperlukan */
   </style>
</head>
<body>

<!-- Konten lainnya di halaman book.php -->

<form action="book_form.php" method="post" class="book-form">
   <div class="flex">
      <div class="inputBox">
         <span>Nama :</span>
         <input type="text" placeholder="Masukkan nama anda" name="name">
      </div>
      <div class="inputBox">
         <span>Email :</span>
         <input type="email" placeholder="Masukkan email anda" name="email">
      </div>
      <div class="inputBox">
         <span>No-telp :</span>
         <input type="number" placeholder="Masukkan nomor telepon anda" name="phone">
      </div>
      <div class="inputBox">
         <span>Alamat :</span>
         <input type="text" placeholder="Masukkan alamat anda" name="address">
      </div>
      <div class="inputBox">
         <span>Tujuan :</span>
         <select name="location" id="location">
            <option value="" disabled selected>Pilih tempat tujuan anda</option>
            <option value="Bali">Bali - Rp.12.000.000</option>
            <option value="Jakarta">Jakarta - Rp.25.000.000</option>
            <option value="Surabaya">Surabaya - Rp.23.000.000</option>
            <option value="Lombok">Lombok - Rp.10.000.000</option>
            <option value="Bandung">Bandung - Rp.17.000.000</option>
            <option value="Sumba">Sumba - Rp.13.000.000</option>
            <option value="Wakatobi">Wakatobi - Rp.10.000.000</option>
            <option value="Makassar">Makassar - Rp.10.000.000</option>
            <option value="Raja Ampat">Raja Ampat - Rp.15.000.000</option>
            <option value="Kendari">Kendari - Rp.8.000.000</option>
            <option value="Batam">Batam - Rp.16.500.000</option>
            <option value="Jayapura">Jayapura - Rp.20.000.000</option>
         </select>
      </div>
      <div class="inputBox">
         <span>Berapa banyak :</span>
         <input type="number" placeholder="Untuk berapa orang" name="guests">
      </div>
      <div class="inputBox">
         <span>Tiba :</span>
         <input type="date" name="arrivals">
      </div>
      <div class="inputBox">
         <span>Pulang :</span>
         <input type="date" name="leaving">
      </div>
   </div>

   <input type="submit" value="Submit" class="btn" name="send">
</form>

<!-- Footer atau bagian lainnya -->

<!-- Script JavaScript untuk mengambil jumlah pembayaran -->
<script>
   document.addEventListener("DOMContentLoaded", function() {
      var locationSelect = document.getElementById('location');
      var guestsInput = document.querySelector('input[name="guests"]');
      
      locationSelect.addEventListener('change', function() {
         var selectedOption = locationSelect.options[locationSelect.selectedIndex];
         var selectedValue = selectedOption.value;
         
         var amount = getAmount(selectedValue);
         
         // Menampilkan jumlah pembayaran
         alert("Jumlah Pembayaran: Rp. " + amount);
      });
      
      function getAmount(location) {
         switch (location) {
            case "Bali":
               return 12000000;
            case "Jakarta":
               return 25000000;
            case "Surabaya":
               return 23000000;
            case "Lombok":
               return 10000000;
            case "Bandung":
               return 17000000;
            case "Sumba":
               return 13000000;
            case "Wakatobi":
               return 10000000;
            case "Makassar":
               return 10000000;
            case "Raja Ampat":
               return 15000000;
            case "Kendari":
               return 8000000;
            case "Batam":
               return 16500000;
            case "Jayapura":
               return 20000000;
            default:
               return 0;
         }
      }
   });
</script>

</body>
</html>


<!-- booking section ends -->

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

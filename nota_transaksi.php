<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['user_id'])) {
    // Redirect ke halaman login jika belum login
    header("Location: login.php");
    exit();
}

// Ambil data pemesanan dari session
if (isset($_SESSION['booking_data'])) {
    $booking_data = $_SESSION['booking_data'];
} else {
    echo "No booking data found!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="nota.css">
   <title>Nota Transaksi</title>
</head>
<body>
<section class="nota-transaksi">
   <div class="container">
      <h2>Detail Pemesanan:</h2>
      <p><strong>Nama:</strong> <?php echo htmlspecialchars($booking_data['name']); ?></p>
      <p><strong>Email:</strong> <?php echo htmlspecialchars($booking_data['email']); ?></p>
      <p><strong>No. Telp:</strong> <?php echo htmlspecialchars($booking_data['phone']); ?></p>
      <p><strong>Alamat:</strong> <?php echo htmlspecialchars($booking_data['address']); ?></p>
      <p><strong>Tujuan:</strong> <?php echo htmlspecialchars($booking_data['location']); ?></p>
      <p><strong>Jumlah Orang:</strong> <?php echo htmlspecialchars($booking_data['guests']); ?></p>
      <p><strong>Tiba:</strong> <?php echo htmlspecialchars($booking_data['arrivals']); ?></p>
      <p><strong>Pulang:</strong> <?php echo htmlspecialchars($booking_data['leaving']); ?></p>
      <p><strong>Total Pembayaran:</strong> Rp. <?php echo number_format($booking_data['booking_amount'], 0, ',', '.'); ?></p>
   </div>
</section>

<!-- Tombol Cetak -->
<div style="text-align: center; margin-top: 20px;">
   <button onclick="printNota()" class="btn">Cetak Nota</button>
</div>

<!-- Script JavaScript untuk Cetak -->
<script>
   function printNota() {
      window.print();
   }
</script>

</body>
</html>

<?php
unset($_SESSION['booking_data']);
?>

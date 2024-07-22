<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['user_id'])) {
    // Redirect ke halaman login jika belum login
    header("Location: login.php");
    exit();
}

$conn = new mysqli('localhost', 'root', '', 'book_db'); // Ganti dengan kredensial yang benar

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    // Fungsi untuk mendapatkan jumlah pembayaran berdasarkan tujuan
    function getBookingAmount($location) {
        switch ($location) {
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

    // Hitung total pembayaran berdasarkan jumlah orang
    $booking_amount = getBookingAmount($location) * $guests;

    // Simpan data pemesanan ke dalam session
    $_SESSION['booking_data'] = [
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'address' => $address,
        'location' => $location,
        'guests' => $guests,
        'arrivals' => $arrivals,
        'leaving' => $leaving,
        'booking_amount' => $booking_amount // Simpan total pembayaran juga
    ];

    // Debug untuk memastikan data disimpan ke session
    if (isset($_SESSION['booking_data'])) {
        echo "Booking data saved to session.";
    } else {
        echo "Failed to save booking data to session.";
    }

    // Redirect ke halaman nota transaksi
    header("Location: nota_transaksi.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <title>Form Pemesanan</title>
</head>
<body>
   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="book-form">
      <div class="flex">
         <div class="inputBox">
            <span>Nama :</span>
            <input type="text" placeholder="Masukkan nama anda" name="name" required>
         </div>
         <div class="inputBox">
            <span>Email :</span>
            <input type="email" placeholder="Masukkan email anda" name="email" required>
         </div>
         <div class="inputBox">
            <span>No-telp :</span>
            <input type="number" placeholder="Masukkan nomor telepon anda" name="phone" required>
         </div>
         <div class="inputBox">
            <span>Alamat :</span>
            <input type="text" placeholder="Masukkan alamat anda" name="address" required>
         </div>
         <div class="inputBox">
            <span>Tujuan :</span>
            <select name="location" required>
                <option value="" disabled selected>Pilih tempat tujuan anda</option>
                <option value="Bali">Bali-Rp.12.000.000</option>
                <option value="Jakarta">Jakarta-Rp.25.000.000</option>
                <option value="Surabaya">Surabaya-Rp.23.000.000</option>
                <option value="Lombok">Lombok-Rp.10.000.000</option>
                <option value="Bandung">Bandung-Rp.17.000.000</option>
                <option value="Sumba">Sumba-Rp.13.000.000</option>
                <option value="Wakatobi">Wakatobi-Rp.10.000.000</option>
                <option value="Makassar">Makassar-Rp.10.000.000</
                <option value="Raja Ampat">Raja Ampat-Rp.15.000.000</option>
                <option value="Kendari">Kendari-Rp.8.000.000</option>
                <option value="Batam">Batam-Rp.16.500.000</option>
                <option value="Jayapura">Jayapura-Rp.20.000.000</option>
            </select>
         </div>
         <div class="inputBox">
            <span>Berapa Banyak :</span>
            <input type="number" placeholder="Untuk berapa orang" name="guests" required>
         </div>
         <div class="inputBox">
            <span>Tiba :</span>
            <input type="date" name="arrivals" required>
         </div>
         <div class="inputBox">
            <span>Pulang :</span>
            <input type="date" name="leaving" required>
         </div>
      </div>
      <input type="submit" value="Submit" class="btn" name="send">
   </form>
</body>
</html>

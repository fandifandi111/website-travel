<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'book_db'); // Ganti dengan kredensial yang benar

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $password);

    if ($stmt->execute()) {
        // Redirect ke halaman login setelah berhasil register
        header('Location: login.php');
        exit();
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
    }
    $stmt->close();
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>
   <link rel="stylesheet" href="log.css">
</head>
<body>
   <div class="form-container">
      <form action="register.php" method="post">
         <h3>Register</h3>
         <input type="email" name="email" required placeholder="Enter email">
         <input type="password" name="password" required placeholder="Enter password">
         <input type="submit" name="register" value="Register" class="form-btn">
         <p>Already have an account? <a href="login.php">Login</a></p>
      </form>
   </div>
</body>
</html>

<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'book_db'); // Ganti dengan kredensial yang benar

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['email'] = $email;
            // Redirect ke halaman home setelah berhasil login
            header('Location: home.php');
            exit();
        } else {
            echo "<script>alert('Invalid email or password');</script>";
        }
    } else {
        echo "<script>alert('Invalid email or password');</script>";
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
   <title>Login</title>
   <link rel="stylesheet" href="log.css">
</head>
<body>
   <div class="form-container">
      <form action="login.php" method="post">
         <h3>Login</h3>
         <input type="email" name="email" required placeholder="Enter email">
         <input type="password" name="password" required placeholder="Enter password">
         <input type="submit" name="login" value="Login" class="form-btn">
         <p>Don't have an account? <a href="register.php">Register</a></p>
      </form>
   </div>
</body>
</html>

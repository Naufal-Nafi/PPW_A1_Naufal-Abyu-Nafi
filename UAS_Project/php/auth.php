<?php
session_start();
// auth_process.php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_course";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $action = $_POST['action'];

    if ($action == 'signup') {
        $hashed_pass = password_hash($pass, PASSWORD_BCRYPT);

        $sql = "INSERT INTO user_accounts (username, email, password) VALUES ('$user', '$email', '$hashed_pass')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Sign up successful. Please login.'); window.location.href='auth.php';</script>";
        } else {
            echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
        }
    } elseif ($action == 'login') {
        $sql = "SELECT * FROM user_accounts WHERE email='$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($pass, $row['password'])) {
                $_SESSION['username'] = $row['username'];
                header("Location: welcome.php");
            } else {
                echo "<script>alert('Invalid password. Please try again.'); window.location.href='auth.php';</script>";
            }
        } else {
            echo "<script>alert('No user found. Please sign up.'); window.location.href='auth.php';</script>";
        }
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        <?php
        include "css/auth.css";
        include "css/style.css";
        ?>
    </style>
    <title>Authentication</title>
</head>

<body>

    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="login" data-aos="fade-down" data-aos-delay="400">
            <form class="form" method="post">
                <label for="chk" aria-hidden="true">Log in</label>
                <input class="input" type="text" name="username" placeholder="Username" required="">
                <input class="input" type="email" name="email" placeholder="Email" required>
                <input class="input" type="password" name="password" placeholder="Password" required>
                <button class="button" name="action" value="login">Log in</button>
                <h6>Doesn't have an account? <span><i class="bi bi-arrow-down-circle-fill"></i></span></h6>
            </form>
        </div>

        <div class="register">
            <form class="form" method="post">
                <label for="chk" aria-hidden="true">Sign Up</label>
                <input class="input" type="text" name="username" placeholder="Username" required="">
                <input class="input" type="email" name="email" placeholder="Email" required="">
                <input class="input" type="password" name="password" placeholder="Password" required="">
                <button class="button" name="action" value="signup">Sign Up</button>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>


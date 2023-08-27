<?php
include 'config/function.php';

error_reporting(0);
session_start();

/* ----------- LOGIN BIASA ---------- */
if (isset($_POST['submit'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $query = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
    $num_rows = mysqli_num_rows($query);
    $row = mysqli_fetch_array($query);
    $_SESSION['username'] = $row['username'];
    if ($num_rows > 0) {
        echo "
            <script>
                document.location = 'dashboard.php'
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Username atau Password salah');
                document.location = 'index.php'
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <rel="apple-touch-icon" sizes="180x180" href="/img/icon AL 180x180.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/icon AL 32x32.png"/>
    <link rel="icon" type="image/png" sizes="16x16" href="img/icon AL 16x16.png"/>
    <link rel="stylesheet" media="all" href="css/signin.css" />
    <title>Login Anak Lanang</title>
</head>
<body>
<div class="login">
        <div class="login-row">
            <div class="login-col">
            <a class="login-logo"><img src="img/A.png"/></a>
            <h1 class="login-title h1">Ayo Kelola <br />presensi anda <br />lebih menarik</h1>
                <div class="login-preview">
                    <img src="img/bg5.png">
                </div>
            </div>
            
            <div class="login-col">
                <form action="" method="post">
                    <div class="login-form">
                        <div class="login-stage h4">Sign in to Anak Lanang</div>
                        <div class="login-field">
                            <div class="field-label">Username</div>
                            <div class="field-wrap">
                                <input class="field-input" type="text" name="username" />
                            </div>
                        </div>
                        <div class="login-field">
                            <div class="field-label">Password</div>
                            <div class="field-wrap">
                                <input class="field-input" type="password" name="password" />
                            </div>
                        </div>
                        <button class="btn btn-primary btn-wide" type="submit" name="submit">Sign In</button>
                        <div class="login-flex">
                            <div class="login-text">Not a member?</div>
                            <a class="login-link" type="submit" name="signup" id="" onclick="goTo2()">Click here to
                                signup</a>
                        </div>
                    </div>
                </form>
            <div><script>
        function goTo2() {
            location.replace("signup.php");
        }

        function back() {
            location.replace("index.php");
        }
    </script>
</body>

</html>
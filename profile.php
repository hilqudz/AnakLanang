<?php
include 'config/function.php';

error_reporting(0);
session_start();

$username = $_SESSION['username'];
$query = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'") or die(mysqli_error($conn));
$row = mysqli_fetch_array($query);

if (isset($_POST['update'])) {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $password = $_POST['password'];
    $query = "UPDATE user SET fullname = '$fullname', username = '$username', email = '$email', no_hp = $no_hp, password = '$password' WHERE username = '$username'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    echo "
        <script type='text/javascript'>;
            alert('Update berhasil!');
            window.location = 'profile.php';
        </script>
    ";
}

if (empty($_SESSION['username'])) {
    echo '<script language="javascript">';
    echo 'alert("Maaf, anda belum login. Silakan login terlebih dahulu.")';
    header("Refresh:0; url=index.php");
    echo '</script>';
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Profile - Anak Lanang</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" media="all" href="css/presensi.css" />
    <link rel="stylesheet" media="all" href="css/input.css" />
    <link rel="stylesheet" href="css/navbar.css">
</head>

<body>
     <!-- NAVBAR -->
     <header>
        <div class="logo">AnakLanang</div>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <nav class="nav-bar">
            <ul>
                <li>
                    <a href="dashboard.php">Dashboard</a>
                </li>
                <li>
                    <a href="profile.php">Profile</a>
                </li>
                <li>
                    <a href="presensi.php">Presensi</a>
                </li>
                <li>
                    <a href="logout.php"class="active" onclick="return confirm('Apakah kamu yakin untuk keluar?');">Log Out</a>
                </li>
            </ul>
        </nav>
    </header>
            <div>
                <div class="presensi-container">
                    <div class="presensi-stage h5"><strong>Profil Pengguna</strong></div>
                    <form action="#" method="post">
                        <div>
                            <div class="input-row">
                                <div class="input-field">
                                    <div class="input-label">Nama Lengkap</div>
                                    <div><input type="text" name="fullname" id="fullname" required value="<?php echo $row['fullname']; ?>"></div>
                                </div>
                                <div class=" input-field">
                                    <div class="input-label">Username</div>
                                    <div><input style="pointer-events: none;" type="text" name="username" id="username" required value="<?php echo $row['username']; ?>"></div>
                                </div>
                            </div>
                            <div class="input-row">
                                <div class="input-field">
                                    <div class="input-label">Email</div>
                                    <div><input type="email" name="email" id="email" required value="<?php echo $row['email']; ?>"></div>
                                </div>
                                <div class=" input-field">
                                    <div class="input-label">No. Hp</div>
                                    <div><input type="number" name="no_hp" id="no_hp" required value="<?php echo $row['no_hp']; ?>"></div>
                                </div>
                            </div>
                            <div class="input-row">
                                <div class="input-field">
                                    <div class="input-label">Password</div>
                                    <div><input type="password" name="password" id="password" required value="<?php echo $row['password']; ?>"></div>
                                </div>
                            </div>
                            <div class="btn-right">
                                <button class="btn btn-primary" type="submit" name="update" value="">Simpan</button>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        hamburger = document.querySelector(".hamburger");
        hamburger.onclick = function() {
            navBar = document.querySelector(".nav-bar");
            navBar.classList.toggle("active"); 
        }
    </script>
</body>

</html>
<?php
include 'config/function.php';

error_reporting(0);
session_start();

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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <rel="apple-touch-icon" sizes="180x180" href="/img/icon AL 180x180.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/icon AL 32x32.png"/>
    <link rel="icon" type="image/png" sizes="16x16" href="img/icon AL 16x16.png"/>
    <link rel="stylesheet" href="dashboard.css" />
    <link rel="stylesheet" href="css/navbar.css">
    <title>Dashboard AnakLanang</title>
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

    <div class="page-container">
        <div class="banner">
            <div class="banner-container">
                <div class="banner-wrap">
                    <div class="banner-title h2">Dashboard</div>
                    <div class="banner-info h5">Look what you have made today!</div>
                </div>
                <div class="banner-preview"><img src="banner-dashboard.png" alt="" /></div>
            </div>
        </div>

        <!-- Widget -->
        <div class="widget">
            <div class="widget-item">
                <div class="widget-head">
                    <div class="widget-type">
                        <div class="widget-logo">
                            <img src="widget-hadir.png" alt="" />
                        </div>
                        <div class="widget-details">
                            <div class="widget-category">Hadir</div>
                        </div>
                    </div>
                </div>
                <div class="widget-body">
                    <div class="widget-line">
                        <div class="h4">30</div>
                    </div>
                </div>
            </div>
            <div class="widget-item">
                <div class="widget-head">
                    <div class="widget-type">
                        <div class="widget-logo">
                            <img src="widget-sakit.png" alt="" />
                        </div>
                        <div class="widget-details">
                            <div class="widget-category">Sakit</div>
                        </div>
                    </div>
                </div>
                <div class="widget-body">
                    <div class="widget-line">
                        <div class="h4">5</div>
                    </div>
                </div>
            </div>
            <div class="widget-item">
                <div class="widget-head">
                    <div class="widget-type">
                        <div class="widget-logo">
                            <img src="widget-izin.png" alt="" />
                        </div>
                        <div class="widget-details">
                            <div class="widget-category">Izin</div>
                        </div>
                    </div>
                </div>
                <div class="widget-body">
                    <div class="widget-line">
                        <div class="h4">4</div>
                    </div>
                </div>
            </div>
            <div class="widget-item">
                <div class="widget-head">
                    <div class="widget-type">
                        <div class="widget-logo">
                            <img src="widget-cuti.png" alt="" />
                        </div>
                        <div class="widget-details">
                            <div class="widget-category">Cuti</div>
                        </div>
                    </div>
                </div>
                <div class="widget-body">
                    <div class="widget-line">
                        <div class="h4">1</div>
                    </div>
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
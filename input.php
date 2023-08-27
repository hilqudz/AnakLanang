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

$presensi = query("SELECT * FROM presensi");

if (isset($_POST['tambah'])) {
    if (input($_POST) > 0) {
        echo "
            <script>
                alert('Presensi berhasil dimasukkan!');
                document.location.href = 'presensi.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Presensi gagal dimasukkan!');
                document.location.href = 'input.php';
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
    <link rel="stylesheet" media="all" href="css/presensi.css">
    <link rel="stylesheet" href="css/navbar.css">
    <title>Input Presensi Anak Lanang</title>
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
     
        <!-- Content -->
        <div class="presensi">
                <div class="presensi-container">
                    <div class="presensi-stage h5 mobile-show">Input Presensi</div>
                    <form action="" method="post">
                        <div class="input-fieldset">
                            <div class="input-row">
                                <div class="input-field">
                                    <div class="input-label">Nama presensi</div>
                                    <div class="input-wrap"><input type="text" name="nama" id="nama" required></div>
                                </div> 
                                <div class="input-field">
                                    <div class="input-label">Hari</div>
                                    <div class="input-wrap"><select type="text" name="hari" id="hari" required>
                                    <option value="Senin">Senin</option>
                                            <option value="Selasa">Selasa</option>
                                            <option value="Rabu">Rabu</option>
                                            <option value="Kamis">Kamis</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="input-row">
                                <div class="input-field">
                                    <div class="input-label">Tanggal</div>
                                    <div class="input-wrap"><input type="date" name="tanggal" id="tanggal" required>
                                    </div>
                                </div>
                                <div class="input-field">
                                    <div class="input-label">jam</div>
                                    <div class="input-wrap"><input type="time" name="jam" id="jam" required>
                                    </div>

                            
                            <div class="input-field">
                                    <div class="input-label">Tipe</div>
                                    <div class="input-wrap"><select name="tipe" value="tipe" id="tipe" required>
                                            <!-- <option value="none" selected disabled hidden>Select a type</option> -->
                                            <option value="Masuk">Masuk</option>
                                            <option value="Izin">Izin</option>
                                            <option value="Sakit">Sakit</option>
                                            <option value="Cuti">Cuti</option>
                                        </select>
                                    </div>
                            </div>
                            <div class="btn-right">
                                <button class="btn btn-secondary" type="submit" name="batal" value="batal" onclick="window.location.href='presensi.php'">Batal</button>
                                <button class=" btn btn-primary" type="submit" name="tambah" value="tambah">Tambah</button>
                            </div>
                        <div>
                    <form>
                <div>
            <div>
            <div>
    <div>    
    <script>
        document.getElementById("tipe").selectedIndex = -1;
    </script>
    </body>
</html>

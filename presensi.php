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
                alert('Data berhasil ditambahkan!');
                document.location.href = 'presensi.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan!');
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" media="all" href="css/presensi.css">
    <link rel="stylesheet" href="css/navbar.css">
    <title>Presensi Anak Lanang</title>
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
                    <div class="presensi-stage h5 mobile-show">Riwayat Presensi</div>
                    <table cellspacing="0" cellpadding="0">
                        <thead>
                            <th>No. </th>
                            <th>Nama Presensi</th>
                            <th>Hari</th>
                            <th>Tanggal</th>
                            <th>Jam</th>
                            <th>Tipe</th>
                            <th>Aksi</th>
                        </thead>
                        <?php $i = 1 ?>
                        <?php foreach ($presensi as $row) : ?>
                            <tbody>
                                <tr>
                                    <td data-label="No." class="index"><?= $i; ?></td>
                                    <td data-label="Nama" class="index"><?= $row["nama"]; ?></td>
                                    <td data-label="Amount" class="index"><?= $row["hari"]; ?></td>
                                    <td data-label="Date" class="index"><?= $row["tanggal"]; ?></td>
                                    <td data-label="Time" class="index"><?= $row["jam"]; ?></td>
                                    <td data-label="Type" class="index"><?= $row["tipe"]; ?></td>
                                    <td data-label="Action">
                                        <a class="button red" href="config/delete.php?id=<?= $row["id"]; ?>" onclick=" return confirm('Yakin ingin menghapus data?')"><img class="icon-action" src="img/delete.svg" alt=""></a>
                                    </td>
                                </tr>
                            </tbody>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </table>
                    <div class="btn-center">
                        <button class="btn btn-primary" onclick=" window.location.href='input.php'">Input Presensi</button>
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
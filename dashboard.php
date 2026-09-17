<?php
include 'includes/cek_session.php';
?>
<!DOCTYPE html>
<head>
    <title>Dashboard - Vaultline</title>
</head>
<body>
    <h1>Selamat Datang, <?php echo $_SESSION['nama_lengkap']; ?></h1>
    <p>Anda Login sebagai: <?php echo $_SESSION['role']; ?></p>

    <ul>
        <?php if($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'gudang') { ?>
        <li><a href="data
        }
    
</body>
</html>
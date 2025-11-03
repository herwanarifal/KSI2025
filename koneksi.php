<?php
// Koneksi ke database MySQL
 = "localhost";
 = "root";
 = "";
   = "kantin_db";

 = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi ke database berhasil!";
?>

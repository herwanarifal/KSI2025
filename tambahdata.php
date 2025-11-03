<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];

    $sql = "INSERT INTO mahasiswa (nama, nim) VALUES (\"$nama\", \"$nim\")";

    if (mysqli_query($koneksi, $sql)) {
        echo "Data berhasil ditambahkan.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
}
?>
<form method="POST">
    Nama: <input type="text" name="nama" required><br>
    NIM: <input type="text" name="nim" required><br>
    <input type="submit" value="Tambah Data">
</form>

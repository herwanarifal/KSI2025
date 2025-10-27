<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="#">KSI2025</a>
    </div>
  </nav>

  <!-- Content -->
  <div class="container my-5">
    <h2 class="text-center mb-4">Data Mahasiswa</h2>
    <?php
      $mahasiswa = [
        ["NIM" => "230101001", "Nama" => "Herwan Arifal", "Prodi" => "Teknik Informatika"],
        ["NIM" => "230101002", "Nama" => "Rifal", "Prodi" => "Sistem Informasi"],
        ["NIM" => "230101003", "Nama" => "Siti Aisyah", "Prodi" => "Teknologi Informasi"]
      ];
    ?>
    <table class="table table-bordered table-striped">
      <thead class="table-primary text-center">
        <tr>
          <th>No</th>
          <th>NIM</th>
          <th>Nama</th>
          <th>Program Studi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no=1; foreach($mahasiswa as $mhs): ?>
        <tr>
          <td><?= $no++ ?></td>
          <td><?= $mhs["NIM"] ?></td>
          <td><?= $mhs["Nama"] ?></td>
          <td><?= $mhs["Prodi"] ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <!-- Footer -->
  <footer class="bg-primary text-white text-center py-3">
    <p>&copy; 2025 KSI2025 | Data Mahasiswa</p>
  </footer>
</body>
</html>

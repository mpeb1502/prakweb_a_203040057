<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "prakweb_a_203040057_pw");

// ambil dari tabel buku query
$result = mysqli_query($conn, "SELECT * FROM buku");

// ubah data ke dalam array
// $row = mysqli_fetch_row($result); // array numerik
// $row = mysqli_fetch_assoc($result); // array associative
// $row = mysqli_fetch_array($result); // keduanya
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}
// tampung ke variabel buku
$bk = $rows;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buku</title>

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <h1 class="m-0">Daftar Buku</h1>

  <table class="table table-primary mb-0">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Judul Buku</th>
        <th scope="col">Penulis</th>
        <th scope="col">Gambar</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      <?php foreach ($bk as $rows) : ?>
        <tr>
          <th scope="row"><?= $rows["id_buku"]; ?></th>
          <td><?= $rows["judul_buku"]; ?></td>
          <td><?= $rows["penulis_buku"]; ?></td>
          <td><img src="assets/img/<?= $rows["gambar_buku"]; ?>" width="100" alt=""></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <script src="js/bootstrap.bundle.js"></script>
</body>

</html>
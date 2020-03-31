<?php
  // var_dump($detail);
  // die;
 ?>
<!DOCTYPE html>
<html>

<head>
  <title>Mahasiswa</title>
</head>

<body>
  <a href="<?= base_url('mahasiswa/index')?>">Kembali </a>
  <p> Nama : <?= $detail[0]['nama'] ?> </p>
  <p> NIM : <?= $detail[0]['nim'] ?> </p>
  <p> Alamat : <?= $detail[0]['alamat'] ?> </p>
</body>

</html>

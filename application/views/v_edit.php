<!DOCTYPE html>
<html>

<head>
  <title>Mahasiswa</title>
</head>

<body>
  <h3> Edit Mahasiswa </h3>
  <form action="<?php echo base_url(). 'mahasiswa/update_aksi/'.$mahasiswa[0]['id']?>" method="post">
    <input type="text" name="nama" value="<?=$mahasiswa[0]['nama'] ?>" placeholder="Masukkan Nama">
    <br/>
    <input type="text" name="nim" value="<?=$mahasiswa[0]['nim'] ?>" placeholder="Masukkan NIM">
    <br/>
    <textarea name="alamat"><?=$mahasiswa[0]['nama'] ?> </textarea>
    <br/>
    <button type="submit"> Update </button>
  </form>
</body>
</table>

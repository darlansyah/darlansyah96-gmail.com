<!DOCTYPE html>
<html>

<head>
  <title>Mahasiswa</title>
</head>

<body>

  <form action="<?php echo base_url(). 'mahasiswa/tambah_aksi'; ?>" method="post">
    <input type="text" name="nama" placeholder="Masukkan Nama">
    <br/>
    <input type="text" name="nim" placeholder="Masukkan NIM">
    <br/>
    <textarea name="alamat"> </textarea>
    <br/>
    <button type="submit"> Simpan </button>
  </form>
  <hr/>
  <table border="1">
    <tr>
      <th> No </th>
      <th> Nama</th>
      <th> NIM </th>
      <th> Alamat</th>
      <th> Aksi </th>
    </tr>
    <?php
    $no = 1;
    foreach ($mahasiswa as $mhs) : ?>
      <tr>
        <td>
          <?= $no++ ?>
        </td>
        <td>
          <?= $mhs['nama'] ?>
        </td>
        <td>
          <?= $mhs['nim'] ?>
        </td>
        <td>
          <?= $mhs['alamat'] ?>
        </td>
        <td>
             <a href="<?= base_url().'mahasiswa/edit/'.$mhs['id'] ?>"> Edit </a> ||
             <a href="<?= base_url().'mahasiswa/hapus/'.$mhs['id'] ?>"> Hapus </a>
          </td>
      </tr>
      <?php  endforeach ?>


  </table>

</body>

</html>

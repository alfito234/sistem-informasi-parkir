<?php

include '../connect.php';

$query = "SELECT checkIn, idPegawai, idKendaraan, nopol
          FROM transaksi";
$queryPgw ="SELECT * FROM pegawai";
$queryKdr ="SELECT * FROM kendaraan";
$queryInf ="SELECT * FROM infoparkir";
$result = mysqli_query($connect, $query);
$result1 = mysqli_query($connect, $queryPgw);
$result2 = mysqli_query($connect, $queryKdr);
$result3 = mysqli_query($connect, $queryInf);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="create.php" method="post">
    <table> 
      <tr>
        <td><label for="checkIn">Waktu Masuk</label></td>
        <td>:</td>
        <td><input type="time" name="checkIn" id="checkIn"></td>
      </tr>
      <tr>
        <td><label for="nopol">Plat Nomor</label></td>
        <td>:</td>
        <td><input type="text" name="nopol" id="nopolv"></td>
      </tr>
      <tr>
        <td>Pegawai</td>
        <td>:</td>
        <td>
        <select class="form-select" name="idPegawai">
          <option selected>Pilih Pegawai</option>
          <?php
            while($data_pgw=mysqli_fetch_array($result1)) {?>
            <?php
              echo '<option value="'.$data_pgw['idPegawai'].'">'.$data_pgw['nama'].'</option>';
            } ?>
        </select>
        </td>
      </tr>
      <tr>
        <td>Jenis Kendaraan</td>
        <td>:</td>
        <td>
        <select class="form-select" name="idKendaraan">
          <option selected>Pilih Kendaraan</option>
          <?php
            while($data_kdr=mysqli_fetch_array($result2)) {?>
            <?php
              echo '<option value="'.$data_kdr['idKendaraan'].'">'.$data_kdr['jenis'].'</option>';
            } ?>
        </select>
        </td>
      </tr>
      <tr>
        <td>Info Parkir Slot</td>
        <td>:</td>
        <td>
        <select class="form-select" name="idInfo">
          <option selected>Pilih Parkir Slot</option>
          <?php
            while($data_inf=mysqli_fetch_array($result3)) {?>
            <?php
              echo '<option value="'.$data_inf['idInfo'].'">'.$data_inf['parkirSlot'].'</option>';
            } ?>
        </select>
        </td>
      </tr>
      <tr>
        <td></td>
        <td><button class=" btn btn-primary" type="submit">Simpan</button></td>
        
      </tr>
    </table>
  </body>
</html>

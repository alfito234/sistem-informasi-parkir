<?php

include '../connect.php';

$query = "SELECT checkIn, idPegawai, idKendaraan, nopol
          FROM transaksi";
$result = mysqli_query($connect, $query);

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
        <td><label for="idPegawai">Id Pegawai</label></td>
        <td>:</td>
        <td><input type="text" name="idPegawai" id="idPegawai"></td>
      </tr>
      <tr>
        <td><label for="idKendaraan">Id Kendaraan</label></td>
        <td>:</td>
        <td><input type="text" name="idKendaraan" id="idKendaraan"></td>
      </tr>
      <tr>
        <td></td>
        <td><button class=" btn btn-primary" type="submit">Simpan</button></td>
        
      </tr>
    </table>
  </body>
</html>

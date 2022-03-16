<?php

include '../connect.php';

$query = "SELECT * FROM kendaraan";
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
          <td><label for="idKendaraan">ID Kendaraan</label></td>
          <td>:</td>
          <td><input type="text" name="idKendaraan" id="idKendaraan"></td>
      </tr>
      <tr>
          <td><label for="nopol">Plat Nomor</label></td>
          <td>:</td>
          <td><input type="text" name="nopol" id="nopol"></td>
      </tr>  
      <tr>
          <td><label for="jenis">Jenis</label></td>
          <td>:</td>
          <td>
            <input type="radio" id="jenis" name="jenis" value="Sepeda Motor">
            <label for="jenis">Sepeda Motor</label><br>
            <input type="radio" id="jenis" name="jenis" value="Mobil">
            <label for="jenis">Mobil</label><br>
            <input type="radio" id="jenis" name="jenis" value="Bis">
            <label for="jenis">Bis</label>
          </tr>  
      </tr>  
        <tr>
          <td></td>
          <td><button class=" btn btn-primary" type="submit">Simpan</button></td>
          
        </tr>
      </table>
  </body>
</html>

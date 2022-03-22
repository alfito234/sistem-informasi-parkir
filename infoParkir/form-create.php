<?php

include '../connect.php';

$query = "SELECT * FROM infoparkir";
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
          <td><label for="idInfo">ID Info</label></td>
          <td>:</td>
          <td><input type="text" name="idInfo" id="idInfo"></td>
      </tr>
      <tr>
          <td><label for="parkirSlot">Slot Parkir</label></td>
          <td>:</td>
          <td><input type="text" name="parkirSlot" id="parkirSlot"></td>
      </tr>
      <tr>
          <td><label for="jumlahKendaraan">Jumlah Kendaraan</label></td>
          <td>:</td>
          <td><input type="text" name="jumlahKendaraan" id="jumlahKendaraan"></td>
      </tr>   
        <tr>
          <td></td>
          <td><button class=" btn btn-primary" type="submit">Simpan</button></td>
          
        </tr>
      </table>
  </body>
</html>

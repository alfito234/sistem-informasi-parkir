<?php

include '../connect.php';

$query = "SELECT * FROM pegawai";
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
          <td><label for="idPegawai">ID Pegawai</label></td>
          <td>:</td>
          <td><input type="text" name="idPegawai" id="idPegawai"></td>
      </tr>
      <tr>
          <td><label for="nama">Nama Pegawai</label></td>
          <td>:</td>
          <td><input type="text" name="nama" id="nama"></td>
      </tr>  
        <tr>
          <td></td>
          <td><button class=" btn btn-primary" type="submit">Simpan</button></td>
          
        </tr>
      </table>
  </body>
</html>

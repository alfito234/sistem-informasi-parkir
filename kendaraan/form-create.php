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
          <td><label for="jenis">Jenis Kendaraan</label></td>
          <td>:</td>
          <td><input type="text" name="jenis" id="jenis"></td>
          </tr>  
      <tr>
          <td><label for="biaya">Biaya per Jam</label></td>
          <td>:</td>
          <td><input type="text" name="biaya" id="biaya"></td>
      </tr>  
      </tr>  
        <tr>
          <td></td>
          <td><button class=" btn btn-primary" type="submit">Simpan</button></td>
          
        </tr>
      </table>
  </body>
</html>

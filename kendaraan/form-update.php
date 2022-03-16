<?php

include '../connect.php';

$idKendaraan = $_GET['idKendaraan'];


$query = "SELECT * FROM kendaraan WHERE idKendaraan='$idKendaraan'";

$result = mysqli_query($connect, $query);

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="update.php" method="post">
      <table>
      <tr>
          <td><input type="hidden" name="idKendaraan" id="idKendaraan" value="<?php echo $row['idKendaraan']; ?>"></td>
      </tr>  
      <tr>
          <td><label for="nopol">Plat Nomor</label></td>
          <td>:</td>
          <td><input type="text" name="nopol" id="nopol" value="<?php echo $row['nopol']; ?>"></td>
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
    </form>

  </body>
</html>

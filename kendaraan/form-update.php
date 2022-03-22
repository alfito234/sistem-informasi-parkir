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
          <td><label for="jenis">Jenis</label></td>
          <td>:</td>
          <td><input type="text" name="jenis" id="jenis" value="<?php echo $row['jenis']; ?>"></td>
      </tr>
      <tr>
          <td><label for="biaya">Biaya per Jam</label></td>
          <td>:</td>
          <td><input type="text" name="biaya" id="biaya" value="<?php echo $row['biaya']; ?>"></td>
      </tr>
        <tr>
          <td></td>
          <td><button class=" btn btn-primary" type="submit">Simpan</button></td>
          
        </tr>
      </table>
    </form>

  </body>
</html>

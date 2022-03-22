<?php

include '../connect.php';

$idInfo = $_GET['idInfo'];


$query = "SELECT * FROM infoparkir WHERE idInfo='$idInfo'";

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
          <td><input type="hidden" name="idInfo" id="idInfo" value="<?php echo $row['idInfo']; ?>"></td>
      </tr>  
      <tr>
          <td><label for="parkirSlot">Slot Parkir</label></td>
          <td>:</td>
          <td><input type="text" name="parkirSlot" id="parkirSlot" value="<?php echo $row['parkirSlot']; ?>"></td>
      </tr>  
      <tr>
          <td><label for="jumlahKendaraan">Jumlah Kendaraan</label></td>
          <td>:</td>
          <td><input type="text" name="jumlahKendaraan" id="jumlahKendaraan" value="<?php echo $row['jumlahKendaraan']; ?>"></td>
      </tr>
        <tr>
          <td></td>
          <td><button class=" btn btn-primary" type="submit">Simpan</button></td>
          
        </tr>
      </table>
    </form>

  </body>
</html>

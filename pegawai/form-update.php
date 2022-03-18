<?php

include '../connect.php';

$idPegawai = $_GET['idPegawai'];


$query = "SELECT * FROM pegawai WHERE idPegawai='$idPegawai'";

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
          <td><input type="hidden" name="idPegawai" id="idPegawai" value="<?php echo $row['idPegawai']; ?>"></td>
      </tr>  
      <tr>
          <td><label for="nama">Nama Pegawai</label></td>
          <td>:</td>
          <td><input type="text" name="nama" id="nama" value="<?php echo $row['nama']; ?>"></td>
      </tr>
        <tr>
          <td></td>
          <td><button class=" btn btn-primary" type="submit">Simpan</button></td>
          
        </tr>
      </table>
    </form>

  </body>
</html>

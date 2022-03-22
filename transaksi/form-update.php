<?php

include '../connect.php';

$idTransaksi = $_GET['idTransaksi'];


$query = "SELECT * FROM transaksi WHERE idTransaksi='$idTransaksi'";

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
          <td><input type="hidden" name="idTransaksi" id="idTransaksi" value="<?php echo $row['idTransaksi']; ?>"></td>
        </tr>  
      <tr>
          <td><label for="checkIn">Waktu Masuk</label></td>
          <td>:</td>
          <td><input type="time" name="checkIn" id="checkIn" value="<?php echo $row['checkIn']; ?>"></td>
        </tr>
        <tr>
          <td><label for="checkOut">Waktu Keluar</label></td>
          <td>:</td>
          <td><input type="time" name="checkOut" id="checkOut" value="<?php echo $row['checkOut']; ?>"></td>
        </tr>
        <tr>
          <td><label for="tagihan">Tagihan</label></td>
          <td>:</td>
          <td><input type="text" name="tagihan" id="tagihan" value="<?php echo $row['tagihan']; ?>"></td>
        </tr>
        <tr>
          <td><label for="idPegawai">Id Pegawai</label></td>
          <td>:</td>
          <td><input type="text" name="idPegawai" id="idPegawai" value="<?php echo $row['idPegawai']; ?>"></td>
        </tr>
        <tr>
          <td><label for="idKendaraan">Id Kendaraan</label></td>
          <td>:</td>
          <td><input type="text" name="idKendaraan" id="idKendaraan" value="<?php echo $row['idKendaraan']; ?>"></td>
        </tr>
        <tr>
          <td><label for="idInfo">Id Info</label></td>
          <td>:</td>
          <td><input type="text" name="idInfo" id="idInfo" value="<?php echo $row['idInfo']; ?>"></td>
        </tr>
        <tr>
          <td><label for="nopol">Plat Nomor</label></td>
          <td>:</td>
          <td><input type="text" name="nopol" id="nopol" value="<?php echo $row['nopol']; ?>"></td>
        </tr>
        <tr>
          <td></td>
          <td><button class=" btn btn-primary" type="submit">Simpan</button></td>
          
        </tr>
      </table>
    </form>

  </body>
</html>

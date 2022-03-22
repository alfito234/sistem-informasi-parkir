<?php

include '../connect.php';

$idTransaksi = $_GET['idTransaksi'];


$query = "SELECT * FROM transaksi WHERE idTransaksi='$idTransaksi'";
$query2 = "SELECT kendaraan.jenis, kendaraan.biaya
          FROM transaksi
          JOIN kendaraan 
          ON transaksi.idKendaraan=kendaraan.idKendaraan";

$result = mysqli_query($connect, $query);
$infoKendaraan = mysqli_query($connect, $query2);

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="bayar.php" method="post">

      <table>
      <tr>
          <td><input type="hidden" name="idTransaksi" id="idTransaksi" value="<?php echo $row['idTransaksi']; ?>"></td>
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
          <td></td>
          <td><button class=" btn btn-primary" type="submit">Simpan</button></td>
          
        </tr>
      </table>
    </form>

  </body>
</html>

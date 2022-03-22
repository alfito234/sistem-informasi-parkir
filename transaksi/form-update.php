<?php

include '../connect.php';

$idTransaksi = $_GET['idTransaksi'];


$query = "SELECT * FROM transaksi WHERE idTransaksi='$idTransaksi'";
$queryPgw ="SELECT * FROM pegawai";
$queryKdr ="SELECT * FROM kendaraan";
$queryInf ="SELECT * FROM infoparkir";

$result = mysqli_query($connect, $query);
$result1 = mysqli_query($connect, $queryPgw);
$result2 = mysqli_query($connect, $queryKdr);
$result3 = mysqli_query($connect, $queryInf);

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
          <td>Pegawai</td>
          <td>:</td>
          <td>
          <select class="form-select" name="idPegawai">
            <option selected><?php echo $row['idPegawai'] ?></option>
            <?php
              while($data_pgw=mysqli_fetch_array($result1)) {?>
              <?php
                echo '<option value="'.$data_pgw['idPegawai'].'">'.$data_pgw['nama'].'</option>';
              } ?>
          </select>
          </td>
        </tr>
        <tr>
          <td>Jenis Kendaraan</td>
          <td>:</td>
          <td>
          <select class="form-select" name="idKendaraan">
            <option selected><?php echo $row['idKendaraan'] ?></option>
            <?php
              while($data_kdr=mysqli_fetch_array($result2)) {?>
              <?php
                echo '<option value="'.$data_kdr['idKendaraan'].'">'.$data_kdr['jenis'].'</option>';
              } ?>
          </select>
          </td>
        </tr>
        <tr>
          <td>Info Parkir Slot</td>
          <td>:</td>
          <td>
          <select class="form-select" name="idInfo">
            <option selected><?php echo $row['idInfo'] ?></option>
            <?php
              while($data_inf=mysqli_fetch_array($result3)) {?>
              <?php
                echo '<option value="'.$data_inf['idInfo'].'">'.$data_inf['parkirSlot'].'</option>';
              } ?>
          </select>
          </td>
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

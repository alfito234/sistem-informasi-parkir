<?php

include '../connect.php';

$idTransaksi = $_POST['idTransaksi'];
$checkIn = $_POST['checkIn'];
$checkOut = $_POST['checkOut'];
$tagihan = $_POST['tagihan'];
$idPegawai = $_POST['idPegawai'];
$idKendaraan = $_POST['idKendaraan'];
$idInfo = $_POST['idInfo'];
$nopol = $_POST['nopol'];

$query = "UPDATE transaksi SET idTransaksi='$idTransaksi', 
                 checkIn='$checkIn', 
                 checkOut='$checkOut',
                 tagihan = '$tagihan',
                 idPegawai='$idPegawai', 
                 idKendaraan='$idKendaraan',
                 idInfo='$idInfo',
                 nopol='$nopol'
where idTransaksi='$idTransaksi'";

$result = mysqli_query($connect, $query);
$num = mysqli_affected_rows($connect);


if ($num > 0) {
  echo "Berhasil ubah data <br>";
}
else {
  echo "Gagal ubah data <br>";
}

echo "<a href='../index.php'>Lihat data</a>";

?>

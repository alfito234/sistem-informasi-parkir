<?php

include '../connect.php';

$idTransaksi = $_POST['idTransaksi'];
$checkIn = $_POST['checkIn'];
$idPegawai = $_POST['idPegawai'];
$idKendaraan = $_POST['idKendaraan'];
$idInfo = $_POST['idInfo'];
$nopol = $_POST['nopol'];

$query = "INSERT INTO `transaksi` (`idTransaksi`, `checkIn`, `idPegawai`, `idKendaraan`, `idInfo`, `nopol`) 
VALUES ('$idTransaksi', '$checkIn', '$idPegawai', '$idKendaraan', '$idInfo', '$nopol');";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);

if($num > 0)
{
  echo "Berhasil tambah data <br>";
}
else
{
  echo "Gagal tambah data <br>";
}

echo "<a href='../index.php'>Lihat data</a>";

?>

<?php

include '../connect.php';

$checkIn = $_POST['checkIn'];
$idPegawai = $_POST['idPegawai'];
$idKendaraan = $_POST['idKendaraan'];
$nopol = $_POST['nopol'];

$query = "INSERT INTO `transaksi` (`checkIn`, `idPegawai`, `idKendaraan`, `idInfo`, `nopol`) 
VALUES ('$checkIn', '$idPegawai', '$idKendaraan', '$nopol');";

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

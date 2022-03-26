<?php

include '../connect.php';

$checkIn = $_POST['checkIn'];
$idPegawai = $_POST['idPegawai'];
$idKendaraan = $_POST['idKendaraan'];
$nopol = $_POST['nopol'];
$idInfo = $_POST['idInfo'];

$query1 = "INSERT INTO `transaksi` (`checkIn`, `idPegawai`, `idKendaraan`, `idInfo`, `nopol`) 
VALUES ('$checkIn', '$idPegawai', '$idKendaraan','$idInfo', '$nopol');";

$result = mysqli_query($connect, $query1);

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

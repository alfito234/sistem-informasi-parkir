<?php

include '../connect.php';

$idKendaraan = $_POST['idInfo'];
$nopol = $_POST['parkirSlot'];
$jenis = $_POST['jumlahKendaraan'];

$query = "INSERT INTO infoparkir(idInfo, parkirSlot, jumlahKendaraan) 
          VALUES('$idInfo','$parkirSlot','$jumlahKendaraan')";

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

<?php

include '../connect.php';

$idKendaraan = $_POST['idKendaraan'];
$nopol = $_POST['jenis'];
$jenis = $_POST['biaya'];

$query = "INSERT INTO kendaraan(idKendaraan, jenis, biaya) 
          VALUES('$idKendaraan','$jenis','$biaya')";

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

echo "<a href='read.php'>Lihat data</a>";

?>

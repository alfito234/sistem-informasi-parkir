<?php

include '../connect.php';

$idKendaraan = $_GET['idKendaraan'];
$query = "DELETE FROM kendaraan WHERE idKendaraan ='$idKendaraan'";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);

if($num > 0)
{
  echo "Berhasil hapus data <br>";
}
else
{
  echo "Gagal hapus data <br>";
}

echo "<a href='read.php'>Lihat data</a>";

?>

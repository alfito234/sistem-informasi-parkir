<?php

include '../connect.php';


$jenis = $_POST['jenis'];
$biaya = $_POST['biaya'];

$query = "INSERT INTO kendaraan(jenis, biaya) 
          VALUES('$jenis','$biaya')";

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

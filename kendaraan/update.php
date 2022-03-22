<?php

include '../connect.php';

$idKendaraan = $_POST['idKendaraan'];
$nopol = $_POST['nopol'];
$jenis = $_POST['jenis'];

$query = "UPDATE kendaraan SET idKendaraan='$idKendaraan', 
                 jenis='$jenis', 
                 biaya='$biaya'
where idKendaraan='$idKendaraan'";

$result = mysqli_query($connect, $query);
$num = mysqli_affected_rows($connect);


if ($num > 0) {
  echo "Berhasil ubah data <br>";
}
else {
  echo "Gagal ubah data <br>";
}

echo "<a href='read.php'>Lihat data</a>";

?>

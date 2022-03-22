<?php

include '../connect.php';

$idInfo = $_POST['idInfo'];
$parkirSlot = $_POST['parkirSlot'];
$jumlahKendaraan = $_POST['jumlahKendaraan'];

$query = "UPDATE infoparkir SET idInfo='$idInfo', 
                 parkirSlot='$parkirSlot', 
                 jumlahKendaraan='$jumlahKendaraan'
where idInfo='$idInfo'";

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

<?php

include '../connect.php';

$idPegawai = $_POST['idPegawai'];
$nama = $_POST['nama'];

$query = "UPDATE pegawai SET idPegawai='$idPegawai', 
                 nama='$nama'
where idPegawai='$idPegawai'";

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

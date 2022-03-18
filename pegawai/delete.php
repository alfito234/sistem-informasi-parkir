<?php

include '../connect.php';

$idPegawai = $_GET['idPegawai'];
$query = "DELETE FROM pegawai WHERE idPegawai ='$idPegawai'";

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

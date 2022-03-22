<?php

include '../connect.php';

$idTransaksi = $_GET['idTransaksi'];
$query = "DELETE FROM transaksi WHERE idTransaksi ='$idTransaksi'";

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

echo "<a href='../index.php'>Lihat data</a>";

?>

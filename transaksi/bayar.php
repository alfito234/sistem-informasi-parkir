<?php

include '../connect.php';

$idTransaksi = $_POST['idTransaksi'];
$checkOut = $_POST['checkOut'];
$tagihan = $_POST['tagihan'];

$query = "UPDATE transaksi SET idTransaksi='$idTransaksi', 
                 checkOut='$checkOut',
                 tagihan = '$tagihan'
where idTransaksi='$idTransaksi'";

$result = mysqli_query($connect, $query);
$num = mysqli_affected_rows($connect);


if ($num > 0) {
  echo "pembayaran berhasil";
}
else {
  echo "Gagal membayar <br>";
}

echo "<a href='../index.php'>Lihat data</a>";

?>

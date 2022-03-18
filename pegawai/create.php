<?php

include '../connect.php';

$idPegawai = $_POST['idPegawai'];
$nama = $_POST['nama'];

$query = "INSERT INTO pegawai(idPegawai, nama) 
          VALUES('$idPegawai','$nama')";

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

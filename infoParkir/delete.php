<?php

include '../connect.php';

$idInfo = $_GET['idInfo'];
$query = "DELETE FROM infoparkir WHERE idInfo ='$idInfo'";

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

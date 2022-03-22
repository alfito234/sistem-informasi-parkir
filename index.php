<?php

include 'connect.php';

$query = "SELECT transaksi.idTransaksi, transaksi.checkIn, transaksi.checkOut, transaksi.tagihan, transaksi.nopol, pegawai.nama, kendaraan.jenis, kendaraan.biaya, infoparkir.idinfo
          FROM transaksi 
          JOIN pegawai ON transaksi.idPegawai = pegawai.idPegawai
          JOIN kendaraan ON transaksi.idKendaraan = kendaraan.idKendaraan
          JOIN infoparkir ON transaksi.idinfo = infoparkir.idinfo
          ORDER BY idTransaksi ASC";

$result = mysqli_query($connect, $query);

$num = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      a:link, a:visited {
        background-color: #fdfdfd;
        color: brown;
        border: 1px solid brown;
        padding: 14px 25px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
      }

      a:hover, a:active {
        background-color: brown;
        color: #fdfdfd;
      }
      #tabel {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }

      #tabel td, #tabel th {
        border: 1px solid #ddd;
        padding: 8px;
      }

      #tabel tr:nth-child(even){background-color: #f2f2f2;}

      #tabel tr:hover {background-color: #ddd;}

      #tabel th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #3B3131;
        color: white;
      }
    </style>
  </head>
  <body>
  <a href="kendaraan/read.php">Data Kendaraan </a>
  <a href="infoparkir/read.php">Tabel Detail Parkiran </a>
    <table id="tabel">
      <tr>
        <th>Id Parkir</th>
        <th>Plat Nomor</th>
        <th>Jenis Kendaraan</th>
        <th>Waktu Masuk</th>
        <th>Waktu Keluar</th>
        <th>Tagihan</th>
        <th>Pegawai</th>
        <th>Action</th>
      </tr>
      <?php
      if ($num > 0)
      {
        $no = 1;
        while ($data = mysqli_fetch_assoc($result)) { ?>

        <tr>
          <td> <?php echo $data['idTransaksi'] ?> </td>
          <td> <?php echo $data['nopol'] ?> </td>
          <td> <?php echo $data['jenis'] ?> </td>
          <td> <?php echo $data['checkIn']?> </td>
          <td> 
            <?php
              if($data['checkOut'] == 00.00){
                echo "belum check out";
              }
              else{
                echo $data['checkOut'];
              }
            ?>
          </td>
          <td> 
            <?php
              if($data['tagihan'] == 0){
                echo "tagihan belum ada";
              }
              else{
                echo $data['tagihan'];
              }
            ?>
          </td>
          <td> <?php echo $data['nama']?> </td>
          <td>
            <a href="transaksi/form-update.php?idTransaksi=<?php echo $data['idTransaksi']; ?>">Edit </a> |
            <a href="transaksi/form-bayar.php?idTransaksi=<?php echo $data['idTransaksi']; ?>">Bayar </a> |
            <a href="transaksi/delete.php?idTransaksi=<?php echo $data['idTransaksi']; ?>" onclick="return confirm('Anda yakin ingin menghapus data?')"> Hapus </a>
          </td>
        </tr>

        <?php
        $no++;
        }
      }
      else
      {
        echo "<tr><td colspan = '7'> Tidak ada data </td></tr>";
      }
      ?>

    </table>
    
    <br>
    <a href="transaksi/form-create.php">Tambahkan Data   </a>
  </body>
</html>

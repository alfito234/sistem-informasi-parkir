<?php

include '../connect.php';

$query = "SELECT * 
          FROM infoparkir 
          ORDER BY idInfo ASC";

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
  <a href="../infoparkir/read.php">Home</a>
  <br>
    <table id="tabel">
      <tr>
        <th>Id Info</th>
        <th>Parkir Slot</th>
        <th>Jumlah Kendaraan</th>
      </tr>
      <?php
      if ($num > 0)
      {
           while ($data = mysqli_fetch_assoc($result)) { ?>
           <tr>
            <td> <?php echo $data['idInfo'] ?> </td>
            <td> <?php echo $data['parkirSlot'] ?> </td>
            <td> <?php echo $data['jumlahKendaraan'] ?> </td>
            <td>
            <a href="form-update.php?idInfo=<?php echo $data['idInfo']; ?>">Edit </a> |
            <a href="delete.php?idInfo=<?php echo $data['idInfo']; ?>" onclick="return confirm('Anda yakin ingin menghapus data?')"> Hapus </a>
          </td>
        </tr>
            <?php
            } 
      }
      else
      {
        echo "<tr><td colspan = '7'> Tidak ada data </td></tr>";
      }
      ?>

    </table><br>
  <a href="form-create.php">Tambahkan Data   </a>
  </body>
</html>

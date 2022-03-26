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
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Info Kendaraan</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
  </head>
  <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Sistem Parkir CPR</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                    <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a class="nav-link active" href="../index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                                Daftar Kendaraan
                            </a>
                            <a class="nav-link " href="../infoParkir/read.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-cubes"></i></div>
                                Info Parkir
                            </a>
                            <a class="nav-link " href="../kendaraan/read.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-cart-plus"></i></div>
                                Transaksi
                            </a>
                            <a class="nav-link" href="../pegawai/read.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-edit"></i></div>
                                Kelola Pegawai
                            </a>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                                Logout
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Info Parkir</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Data Parkir</li>
                        </ol>
                        

                        <!-- Button to Open the Modal -->
                        <button type="button" class="btn btn-info mb-4" data-toggle="modal" data-target="#myModal">
                            Tambahkan Data
                        </button>
                        <a href="../index.php">
                            <button type="button" class="btn btn-info mb-4" >
                            Home
                            </button>
                        </a>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Info Parkir
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                    <tr>
                                        <th>Id Info</th>
                                        <th>Parkir Slot</th>
                                        <th>Jumlah Kendaraan</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if ($num > 0)
                                    {
                                        while ($data = mysqli_fetch_assoc($result)) { ?>
                                        <tr>
                                          <td> <?php echo $data['idInfo'] ?> </td>
                                          <td> <?php echo $data['parkirSlot'] ?> </td>
                                          <td> <?php echo $data['jumlahKendaraan'] ?> </td>
                                          <td>
                                                <a href="form-update.php?idInfo=<?php echo $data['idInfo']; ?>"><button type="button" class="btn btn-warning"><i class="far fa-edit"></i></button></a> |
                                                <a href="delete.php?idInfo=<?php echo $data['idInfo']; ?>" onclick="return confirm('Anda yakin ingin menghapus data?')"><button type="button" class="btn btn-danger"><i class="fas fa-solid fa-trash"></i></button></a> 
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
                                    </tbody>
                                              
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>

      </body>
  </html>

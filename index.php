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
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Daftar Kendaraan</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
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
                            <a class="nav-link active" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                                Transaksi
                            </a>
                            <a class="nav-link " href="infoparkir/read.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-cubes"></i></div>
                                Info Parkir
                            </a>
                            <a class="nav-link " href="kendaraan/read.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-cart-plus"></i></div>
                                Daftar Kendaraan
                            </a>
                            <a class="nav-link" href="pegawai/read.php">
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
                        <h1 class="mt-4">Parkir</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Data Parkir</li>
                        </ol>
                        <!--<div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"> Jumlah Total Kendaraan :  </div>
                                </div>
                            </div>
                        </div>-->

                        <!-- Button to Open the Modal -->
                        <button type="button" class="btn btn-info mb-4" data-toggle="modal" data-target="#myModal">
                            Tambah Data Baru
                        </button>
                        <a href="infoparkir/read.php">
                            <button type="button" class="btn btn-info mb-4" >
                            Detail
                            </button>
                        </a>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Parkri
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
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
                                    </thead>
                                    <tbody>
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
                                                <a href="transaksi/form-update.php?idTransaksi=<?php echo $data['idTransaksi']; ?>"><button type="button" class="btn btn-warning"><i class="far fa-edit"></i></button></a> |
                                                <a href="transaksi/form-bayar.php?idTransaksi=<?php echo $data['idTransaksi']; ?>"><button type="button" class="btn btn-success"><i class="fas fa-money-check-alt"></i></button></a> |

                                                <a href="transaksi/delete.php?idTransaksi=<?php echo $data['idTransaksi']; ?>" onclick="return confirm('Anda yakin ingin menghapus data?')"><button type="button" class="btn btn-danger"><i class="fas fa-solid fa-trash"></i></button></a> 
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

                                            <td>
                                            </td>
                                        </tr>
                                                    </form>
                                                </div>
                                                </div>
                                            </div>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
            <!-- The Modal -->
            <div class="modal fade" id="myModal">
                <?php
                $query1 = "SELECT checkIn, idPegawai, idKendaraan, nopol
                FROM transaksi";
                $queryPgw ="SELECT * FROM pegawai";
                $queryKdr ="SELECT * FROM kendaraan";
                $queryInf ="SELECT * FROM infoparkir";
                $result = mysqli_query($connect, $query1);
                $result1 = mysqli_query($connect, $queryPgw);
                $result2 = mysqli_query($connect, $queryKdr);
                $result3 = mysqli_query($connect, $queryInf);
                ?>
                <div class="modal-dialog">
                <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Tambah Kendaraan Baru</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <form method="post" action="transaksi/create.php">
                <!-- Modal body -->
                <div class="modal-body">
                    <input type="time" name="checkIn" class="form-control" required>
                    <input type="text" name="nopol" class="form-control mt-2" placeholder="Masukkan Nomor Polisi" required>
                    <select class="form-control mt-2 form-select" name="idPegawai">
                        <option selected>Pilih Pegawai</option>
                        <?php
                            while($data_pgw=mysqli_fetch_array($result1)) {?>
                            <?php
                            echo '<option value="'.$data_pgw['idPegawai'].'">'.$data_pgw['nama'].'</option>';
                            } ?>
                    </select>
                    <select class="form-control mt-2 form-select" name="idKendaraan">
                        <option selected>Pilih Kendaraan</option>
                        <?php
                            while($data_kdr=mysqli_fetch_array($result2)) {?>
                            <?php
                            echo '<option value="'.$data_kdr['idKendaraan'].'">'.$data_kdr['jenis'].'</option>';
                            } ?>
                    </select>
                    <select class="form-control mt-2 form-select" name="idInfo">
                        <option selected>Pilih Parkir Slot</option>
                        <?php
                        while($data_inf=mysqli_fetch_array($result3)) {?>
                        <?php
                            echo '<option value="'.$data_inf['idInfo'].'">'.$data_inf['parkirSlot'].'</option>';
                        } ?>
                    </select>
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" name="tambahbarang">Submit</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

                </form>
            </div>
            </div>
        </div>
</html>

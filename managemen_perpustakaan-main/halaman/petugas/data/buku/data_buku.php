﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Buku | Petugas</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="../../../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../../../assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="../../../assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../../../assets/css/custom.css" rel="stylesheet" />
    <!-- TABLE STYLES-->
    <link href="../../../assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">
                Perpustakaan<h6>SMK Telkom Jakarta</h6>
                </a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><a href="../../logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="../../../assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a href="../../dashboard.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table fa-3x"></i>Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="active-menu" href="data_buku.php">Data Buku</a>
                            </li>            
                            <li>
                                <a href="../anggota/data_anggota.php">Data Anggota</a>
                            </li>
                            <li>
                                <a href="../petugas/data_petugas.php">Data Petugas</a>
                            </li>
                            <li>
                                <a href="../transaksi/transaksi_buku.php">Data Transaksi</a>
                            </li>
                    </li>
                </ul>
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Daftar Buku</h2>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                 <div class="panel panel-default">
                <div class="panel-heading">
                <a href="tambah_buku.php" class="btn btn-primary">+ Tambah Data Buku</a>
                </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Buku</th>
                                            <th>Kode Kategori Buku</th> 
                                            <th>Judul Buku</th>
                                            <th>Penulis Buku</th>
                                            <th>Penerbit Buku</th>
                                            <th>Tahun Terbit</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        
                                        include "../../../../koneksi.php"; // Menyertakan file koneksi database
                                        $no = 1;
                                        $ambil = mysqli_query($koneksi,"SELECT*FROM tab_buku");// Query untuk mengambil data dari tabel tab_buku
                                        while ($data = mysqli_fetch_array($ambil)) { //
                                            ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $data['kode_buku']; ?></td>
                                                <td><?php echo $data['kode_kategori_buku']; ?></td>
                                                <td><?php echo $data['judul_buku']; ?></td>
                                                <td><?php echo $data['penulis_buku']; ?></td>
                                                <td><?php echo $data['penerbit_buku']; ?></td>
                                                <td><?php echo $data['tahun_terbit']; ?></td>
                                                <td>
                                                    <a href="edit_buku.php?id=<?php echo $data['kode_buku']; ?>" class="btn btn-warning">Edit</a>
                                                    <a href="hapus_buku.php?id=<?php echo $data['kode_buku']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" class="btn btn-danger">Hapus</a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>                                        
                                    </tbody>                                                   
                                </table>
                                <a href="../laporan/laporan_buku.php" target="_blank" class="btn btn-success"><i class="fa fa-print"> Cetak </i></a>
                            </div>                           
                        </div>
                    </div>
                 <!-- /. ROW -->         
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../../../assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../../../assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../../../assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="../../../assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="../../../assets/js/morris/morris.js"></script>
    <!-- DATA TABLE SCRIPTS -->
    <script src="../../../assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="../../../assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script>
      $(document).ready(function () {
        $("#dataTables-example").dataTable();
      });
    </script>
      <!-- CUSTOM SCRIPTS -->
    <script src="../../../assets/js/custom.js"></script>
    
    
   
</body>
</html>

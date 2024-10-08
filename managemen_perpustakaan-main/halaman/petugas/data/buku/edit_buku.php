<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Buku | Petugas</title>
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
                     <h2>Ubah Data Buku</h2>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                <div class="panel panel-default">
                <div class="panel-heading">
                <h5>Silahkan mengubah data buku!</h5>
                </div>
                <?php
                include '../../../../koneksi.php';
                $ambil = mysqli_query($koneksi,"SELECT * FROM tab_buku WHERE kode_buku = '$_GET[id]'")or die(mysqli_error($koneksi));
                $data = mysqli_fetch_array($ambil);
                ?>
                <form role="form" action="update_buku.php" method="POST">
                    <div>
                    <input type="hidden" name="id" value="<?php echo $data['kode_buku'];?>">
                    </div>
                    <div class="form-group">
                        <label>Kode Buku</label>
                        <input class="form-control" name="kode_buku" value="<?php echo $data['kode_buku']; ?>" />
                    </div>
                    <div class="form-group">
                        <label>Kode Kategori Buku</label>
                        <input class="form-control" name="kode_kategori_buku" value="<?php echo $data['kode_kategori_buku']; ?>" />
                    </div>
                    <div class="form-group">
                        <label>Judul Buku</label>
                        <input class="form-control" name="judul_buku" value="<?php echo $data['judul_buku']; ?>" />
                    </div>
                    <div class="form-group">
                        <label>Penulis Buku</label>
                        <input class="form-control" name="penulis_buku" value="<?php echo $data['penulis_buku']; ?>" />
                    </div>
                    <div class="form-group">
                        <label>Penerbit Buku</label>
                        <input class="form-control" name="penerbit_buku" value="<?php echo $data['penerbit_buku']; ?>" />
                    </div>
                    <div class="form-group">
                        <label>Tahun Terbit</label>
                        <input class="form-control" name="tahun_terbit" value="<?php echo $data['tahun_terbit']; ?>" />
                    </div>
                        <a href="data_buku.php" class="btn btn-danger">Kembali</a>
                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">                       
                    </div>                                        
                </form>
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

﻿<?php
session_start();

if (!isset($_SESSION['username'])) {
    // Jika session 'username' tidak ada, arahkan ke halaman login
    header('Location: ../../login/masuk/index.php');
    exit();
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard | Petugas</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="../assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
    <!-- TABLE STYLES-->
    <link href="../assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
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
font-size: 16px;"><a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="../assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a class="active-menu"  href="dashboard.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table fa-3x"></i>Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="data/buku/data_buku.php">Data Buku</a>
                            </li>
                            <li>
                                <a href="data/anggota/data_anggota.php">Data Anggota</a>
                            </li>
                            <li>
                                <a href="data/petugas/data_petugas.php">Data Petugas</a>
                            </li>
                            <li>
                                <a href="data/transaksi/transaksi_buku.php">Data Transaksi</a>
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
                     <h2>Dashboard Petugas</h2>   
                        <h5>Selamat Datang, <?= $_SESSION['nama_petugas'] ?></h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                 <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <a href="data/buku/data_buku.php" class="fa fa-envelope-o" style="color: white;"></a>
                </span>
                <div class="text-box" >
                    <a href="data/buku/data_buku.php" style="color: black;" class="main-text">Data Buku</a>
                    <p class="text-muted">Daftar Buku</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <a href="data/anggota/data_anggota.php" class="fa fa-bell-o" style="color:white;"></a>
                </span>
                <div class="text-box" >
                    <a href="data/anggota/data_anggota.php" style="color:black;" class="main-text">Anggota</a>
                    <p class="text-muted">Daftar Anggota</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <a href="data/petugas/data_petugas.php" style="color:white;" class="fa fa-bars"></a>
                </span>
                <div class="text-box" >
                    <a href="data/petugas/data_petugas.php" style="color:black;" class="main-text">Petugas</a>
                    <p class="text-muted">Daftar Petugas</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <a href="data/transaksi/transaksi_buku.php" style="color:white;" class="fa fa-rocket"></a>
                </span>
                <div class="text-box" >
                    <a href="data/transaksi/transaksi_buku.php" style="color:black;" class="main-text">Transaksi</a>
                    <p class="text-muted">Daftar Transaksi</p>
                </div>
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
    <script src="../assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="../assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="../assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="../assets/js/custom.js"></script>
    <!-- DATA TABLE SCRIPTS -->
    <script src="../assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="../assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script>
      $(document).ready(function () {
        $("#dataTables-example").dataTable();
      });
    </script>
    
   
</body>
</html>

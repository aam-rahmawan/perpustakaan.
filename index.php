<?php
ob_start();
session_start();
require_once('config/+koneksi.php');
require_once('models/database.php');

$connection = new Database($host, $user, $pass, $database);


include "models/m_crud.php";
$DataBuku = new Buku($connection);
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Perpustakaan</title>

    <style type="text/css">

div.background {
  background: url(images/IT.png) repeat;
  border: 0px solid black;
}

div.transbox {
  background-color: #ffffff;
  border: 0px solid black;
  opacity: 0.6;
  filter: alpha(opacity=60); /* For IE8 and earlier */
}

    </style>

    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap1.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style4.css" rel="stylesheet" />
    <link href="assets/dataTables/datatables.min.css" rel="stylesheet">
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body onscroll="myFunction()">
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &nbsp;&nbsp;
                   Telp: (022) 6646537
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero">

        
            <div class="navbar-header">
               <div class="container">
                <a class="navbar-brand" href="?page=home">
                <img src="images/logo.png" width="150%;">
                    
                </a>

            </div>

            <div class="left-div">
                <div class="user-settings-wrapper">
                    <ul class="nav">

                        <li class="dropdown">
                           
                           
                        </li>


                    </ul>
                </div>
            </div>
          </div>
    </div>


     <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                          <li><a href="?page=home"><i class="topnav-icons fa fa-home"></i></a></li>
                             <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Tentang Kami <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                  <li><a href="?page=profil-yayasan"></i> Profil Yayasan</a></li>
                                  <li><a href="?page=profil-sekolah"></i> Profil Sekolah</a></li>
                                   <li><a href="?page=aturan-perpustakaan"></i> Aturan Perpustakaan</a></li>
                                   <li><a href="?page=visi-misi"></i> Visi,Misi & Moto </a></li>
                                </ul>
                              </li>
                               
                            <li><a href="?page=katalog">Katalog</a></li>
                            <?php
                            if(@$_SESSION['mytype']==''){  ?>
                            <li><a href="#" data-toggle="modal" data-target="#login"> Login</a></li>
                            <?php
                            }
                            ?>
                            <?php
                            if(@$_SESSION['mytype']=='petugas'){  ?>
                               <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Data
                                  <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                   <li><a href="?page=anggota"> Data Anggota </a></li>
                                   <li><a href="?page=buku"> Data Buku</a></li>
                                   <li><a href="?page=peminjaman"> Peminjaman Buku </a></li>
                                   <li><a href="?page=pengembalian"> Pengembalian Buku </a></li>
                                </ul>
                              </li>
                              <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Laporan 
                                  <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                   <li><a href="?page=laporan_anggota"> Data Anggota</a></li>
                                   <li><a href="?page=laporan_buku"> Data Buku </a></li>
                                   <li><a href="?page=laporan_perkategori"> Kategori Buku </a></li>
                                   <li><a href="?page=laporan_peminjaman"> Data Peminjaman </a></li>
                                   <li><a href="?page=laporan_pengembalian"> Data Pengembalian </a></li>
                                   <li><a href="?page=laporan_denda"> Data Denda </a></li>
                                </ul>
                              </li>
                               <?php
                               }
                               ?> 
                             <?php 
                              if(@$_SESSION['mytype']=='anggota'){ ?>
                            <li><a href="#" data-toggle="modal" data-target="#pinjam"> Peminjaman Buku </a></li>
                             <?php
                               }
                               ?> 
                            <?php 
                              if(@$_SESSION['mytype']=='anggota'){ ?>
                            <li class="dropdown user-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"> Selamat Datang <?php echo @$_SESSION['mysesi'] ?></i><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                              <li><a href="logout.php" onClick='return confirm("Apakah anda yakin akan keluar?")'> <i class="fa fa-power-off"></i> Log Out</a></li>
                               <?php
                               }
                               ?> 
                                 <?php 
                              if(@$_SESSION['mytype']=='petugas'){ ?>
                            <li class="dropdown user-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"> Selamat Datang <?php echo @$_SESSION['mysesi'] ?></i><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                              <li><a href="logout.php" onClick='return confirm("Apakah anda yakin akan keluar?")'><i class="fa fa-power-off"></i> Log Out</a></li>
                               <?php
                               }
                               ?> 
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php
    include 'login.php';
     ?>
     <?php
include "pinjam.php";
?>

                        <?php
                        if(@$_GET['page'] == 'home'){
                              include "view/home.php";
                        } else if(@$_GET['page'] == 'profil-yayasan'){
                              include "view/profil-yayasan.php";
                        } else if(@$_GET['page'] == 'profil-sekolah'){
                              include "view/profil-sekolah.php";
                        } else if(@$_GET['page'] == 'aturan-perpustakaan'){
                              include "view/aturan-perpustakaan.php";
                        } else if(@$_GET['page'] == 'visi-misi'){
                              include "view/visi-misi.php";
                        } else if(@$_GET['page'] == 'galeri'){
                              include "view/galeri.php";
                        } else if(@$_GET['page'] == 'katalog'){
                              include "view/katalog.php";

                    
                        } else if(@$_GET['page'] == 'anggota'){
                    if(@$_SESSION['mytype']=='petugas'){
                              include "view/anggota.php";
                     } else {
                    	echo "Anda Tidak Punya Hak Akses Halaman ini";
                    }
                        } else if(@$_GET['page'] == 'buku'){
                    if(@$_SESSION['mytype']=='petugas'){
                              include "view/buku.php";
                     } else {
                    	echo "Anda Tidak Punya Hak Akses Halaman ini";
                    }
                        } else if(@$_GET['page'] == 'peminjaman'){
                    if(@$_SESSION['mytype']=='petugas'){
                              include "view/peminjaman.php";
                    } else {
                    	echo "Anda Tidak Punya Hak Akses Halaman ini";
                    }
                        } else if(@$_GET['page'] == 'pengembalian'){
                    if(@$_SESSION['mytype']=='petugas'){
                              include "view/pengembalian.php";
                    } else {
                    	echo "Anda Tidak Punya Hak Akses Halaman ini";
                    }
                        } else if(@$_GET['page'] == 'laporan_anggota'){
                    if(@$_SESSION['mytype']=='petugas'){
                              include "report/laporan_anggota.php";
                     } else {
                    	echo "Anda Tidak Punya Hak Akses Halaman ini";
                    }
                        } else if(@$_GET['page'] == 'laporan_buku'){
                    if(@$_SESSION['mytype']=='petugas'){
                              include "report/laporan_buku.php";
                     } else {
                    	echo "Anda Tidak Punya Hak Akses Halaman ini";
                    }

                     } else if(@$_GET['page'] == 'laporan_perkategori'){
                    if(@$_SESSION['mytype']=='petugas'){
                              include "report/laporan_perkategori.php";
                     } else {
                      echo "Anda Tidak Punya Hak Akses Halaman ini";
                    }

                        } else if(@$_GET['page'] == 'laporan_peminjaman'){
                     if(@$_SESSION['mytype']=='petugas'){
                              include "report/laporan_peminjaman.php";
                     } else {
                    	echo "Anda Tidak Punya Hak Akses Halaman ini";
                    }
                        } else if(@$_GET['page'] == 'laporan_pengembalian'){
                     if(@$_SESSION['mytype']=='petugas'){
                              include "report/laporan_pengembalian.php";
                     } else {
                    	echo "Anda Tidak Punya Hak Akses Halaman ini";
                    } 
                        } else if(@$_GET['page'] == 'laporan_denda'){
                     if(@$_SESSION['mytype']=='petugas'){
                              include "report/laporan_denda.php";
                     } else {
                      echo "Anda Tidak Punya Hak Akses Halaman ini";
                    }

                        } else {include "view/home.php";
                        }
                        ?>

     <div id="pinjam" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button> 
              <h4 class="modal-title">Peminjaman Buku</h4>
      </div>
<form action="" method="POST" enctype="multipart/form-data">
  <div class="modal-body">
    <div class="form-group">
                    <label class="control-label" for="tanggal_pinjam">Tanggal Pinjam</label>
                    <input type="date" name="tanggal_pinjam" class="form-control" id="tanggal_pinjam" required>
    </div>
       <div class="form-group">
                    <label class="control-label" for="nama">Nama</label>
                    <input type="text"  name="nama" class="form-control" id="nama" value="<?php echo @$_SESSION['mysesi'] ?>" readonly>
        </div>
     <div class="form-group">
                    <label class="control-label" for="judul">Judul</label>
                    <?php
                    //$qry = "SELECT b.sinopsis, b.sinopsis FROM buku b WHERE sinopsis NOT IN (SELECT kategori FROM peminjaman WHERE status='1' AND nama='".$_SESSION['mysesi']."')  ";
                    $qry="SELECT d.sinopsis, d.sinopsis FROM (".$DataBuku->view_buku().") d WHERE sinopsis NOT IN (SELECT kategori FROM peminjaman WHERE status='1' AND nama='".$_SESSION['mysesi']."') AND d.jumlah > d.jmlbukupinjam";
                    echo cmbQuery('kategori','', $qry,'');

                    ?>
    </div>
    	<div class="form-group">
                    <label class="control-label" for="kelas">Kelas</label>
                    <select name="kelas" class="form-control" id="kelas" required>
                                            <option>Pilih Salah Satu</option>
                                            <option value="VII">VII</option>
                                            <option value="VIII">VIII</option>
                                            <option value="IX">IX</option>
                    </select>
      </div>
       <div class="form-group">
                    <label class="control-label" for="lama_pinjam">Lama Pinjam</label>
                    <input type="number" id="lama_pinjam" class="form-control" title="Min=1 max=7" name="lama_pinjam" min="1" max="7" required>
    </div>
   <div class="form-group">
                    <label class="control-label" for="status">Status</label>
                    <select name="status" class="form-control" id="status" readonly="readonly">
                                            <option value="1">Pinjam</option>
                                            
                    </select>
          </div>
          <div class="modal-footer">
                      <input type="submit" class="btn btn-success" name="tambah" value="Simpan">
          </div>
        </div>

</form>       
     </div>
   </div>
 </div>
</div>
</div>
</div>
</div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2018 Perpustakaan Sekolah Islam Terpadu Daarul Fikri, All Rights Reserved</a>
                </div>

            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/dataTables/datatables.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
       $('#datatables').DataTable();
    });

    </script>

<script type="text/javascript">
  $(document).ready(function(){   
    $('.form-checkbox').click(function(){
      if($(this).is(':checked')){
        $('#password').attr('type','text');
      }else{
        $('#password').attr('type','password');
      }
    });
  });
  </script>

  <script>
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
if (window.pageYOffset >= sticky) {
navbar.classList.add("sticky")
} else {
navbar.classList.remove("sticky");
}
}
</script>
</body>
</html>

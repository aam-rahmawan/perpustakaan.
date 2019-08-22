<?php

$bk = new Buku($connection);
?>
  <div class="container">
      <div id="page-wrapper">
        <div class="row">
          <div class="col-lg-12">

            <h1>Laporan Perkategori Buku <small></small></h1>
            <ol class="breadcrumb">
              <form action='index.php?page=laporan_perkategori' method='POST'">
                          <div class="col-md-2 col-sm-2 col-xs-2" align="center">Kategori
                              <select class="form-control" name="kategori">
                          <option>Cari Berdasarkan</option>
                          <option value="pengarang">Pengarang</option>
                          <option value="penerbit">Penerbit</option>
                          <option value="kategori">Judul</option>
                          </select></div> 
                          <div class="col-md-2 col-sm-2 col-xs-2" align="center">Pencarian
                         <input type="text" name="txtsearch">
                         </div> 
                        <br><input type="submit" class="btn btn-primary" value="Cari" id="cari" name="cari"></div>
           </div>

<?php
include 'config/koneksi_login.php';
$cari="";
  if (isset($_POST['cari'])) {
   $search = $_POST['txtsearch'];  
   $skripsi = $_POST['kategori']; 

   if($search!=""&& $skripsi !="") $cari.= "WHERE $skripsi LIKE '%$search%'";
 }
 ?>
<div class="table-responsive">
  <table class="table table-bordered table-hover table-striped" id="datatables">
      <tr align="center">
                <th align="center"><center>Kode Buku</center></th>
                <th align="center"><center>Judul</center></th>
                <th align="center"><center>Pengarang</center></th>
                <th align="center"><center>Penerbit</center></th>
                <th align="center"><center>Jumlah</center></th>   
      </tr>
 <?php
   $query = "SELECT * FROM buku $cari";
   $i=1;
   $result = mysqli_query($db, $query);
   if (!$result || mysqli_num_rows($result) == 0) {  
    echo '<p></p><p>Pencarian tidak ditemukan</p>';  
    } else {  
    echo '<p></p>';  
    while($data = mysqli_fetch_array($result)) {
      extract($data);  
      echo "<tr>";
      echo "<td align=center>".$kd_buku."</td>";
      echo "<td align=center>".$judul."</td>";
      echo "<td align=center>".$pengarang."</td>";
      echo "<td align=center>".$penerbit."</td>";
      echo "<td align=center>".$jumlah."</td>";
echo "</tr>";
     $i++;
      }
    }
   ?>
 </table>
 </form>
</ol>
    
         </form>        
     </div>
   </div>
 </div>

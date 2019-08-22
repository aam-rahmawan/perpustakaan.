<?php


$bk = new Buku($connection);
?>
<div class="content-wrapper">
        <div class="container">
      <div id="page-wrapper">

 <div class="row">
          <div class="col-lg-12">
           <center><h1><img src="images/Logo.jpg" width="90px;"> SISTEM INFORMASI PERPUSTAKAAN <img src="images/Logo.jpg" width="90px;"></h1></center>
            <ol class="breadcrumb">
              <li><a href=""><i class="icon-dashboard"></i></a></li>
            </ol>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
      <div class="table-responsive">
          <table class="table table-bordered table-hover table-striped" id="datatables">
              <thead>
              <tr>
                <tr>
                <th rowspan="2">Judul</th>
                <th rowspan="2">Isbn</th>
                <th rowspan="2">Pengarang</th>
                <th rowspan="2">Penerbit</th>
                <th rowspan="2">Jumlah</th>
                <th rowspan="2">Jumlah Pinjam</th>
                <th rowspan="2">Th Terbit</th>
                <th rowspan="2">Gambar</th>
                <th rowspan="2">Sinopsis</th>
                <th colspan="3"><center>Status Buku</center></th>
              </tr>
              <tr>
                <th>Baik</th>
                <th>Rusak</th>
                <th>Hilang</th>
              </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $tampil = $bk->tampil_buku();
                while($data = $tampil->fetch_object()) {
                ?>
                  <tr>
                  <td align="center"><?php echo $data->judul; ?></td>
                  <td align="center"><?php echo $data->isbn; ?></td>
                  <td align="center"><?php echo $data->pengarang; ?></td>
                  <td align="center"><?php echo $data->penerbit; ?></td>
                  <td align="center"><?php echo $data->jumlah; ?></td>
                  <td align="center"><?php echo $data->jmlbukupinjam; ?></td>
                  <td align="center"><?php echo $data->th_terbit; ?></td>
                  <td align="center">
                    <img src="images/<?php echo $data->gambar; ?>" width="80px"></td>
                  <td align="center"><?php echo $data->sinopsis; ?></td>
                  <td align="center"><?php echo $data->baik; ?></td>
                  <td align="center"><?php echo $data->rusak; ?></td>
                  <td align="center"><?php echo $data->hilang; ?></td>  
              </tr>
              <?php
               } ?>
           </tbody>
          </table>
      </div>
  </div>
    </div>
      </div><!-- /#page-wrapper -->
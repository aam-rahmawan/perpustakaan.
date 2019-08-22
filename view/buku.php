<?php


$bk = new Buku($connection);
if(@$_GET['act'] == '') {
?>
 <div class="container">
      <div id="page-wrapper">
  <div class="row">
          <div class="col-lg-12">
            <h1>Data Buku <small></small></h1>
            <ol class="breadcrumb">
              <li><i class="icon-dashboard"></i> Tampil Data</a></li>
            </ol>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
      <div class="table-responsive">
          <table class="table table-bordered table-hover table-striped" id="datatables">
              <thead>
              <tr>
                <th rowspan="2">NO</th>
                <th rowspan="2">Kode Buku</th>
                <th rowspan="2">Judul</th>
                <th rowspan="2">Isbn</th>
                <th rowspan="2">Pengarang</th>
                <th rowspan="2">Penerbit</th>
                <th rowspan="2">Halaman</th>
                <th rowspan="2">Jumlah</th>
                <th rowspan="2">Jumlah Pinjam</th>
                <th rowspan="2">Th Terbit</th>
                <th rowspan="2">Gambar</th>
                <th rowspan="2">Sinopsis</th>
                <th colspan="3"><center>Status Buku</center></th>
                <th rowspan="2">Opsi</th>
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
                  <td align="center"><?php echo $no++; ?></td>
                  <td align="center"><?php echo $data->kd_buku; ?></td>
                  <td align="center"><?php echo $data->judul; ?></td>
                  <td align="center"><?php echo $data->isbn; ?></td>
                  <td align="center"><?php echo $data->pengarang; ?></td>
                  <td align="center"><?php echo $data->penerbit; ?></td>
                  <td align="center"><?php echo $data->halaman; ?></td>
                  <td align="center"><?php echo $data->jumlah; ?></td>
                  <td align="center"><?php echo $data->jmlbukupinjam; ?></td>
                  <td align="center"><?php echo $data->th_terbit; ?></td>
                  <td align="center">
                    <img src="images/<?php echo $data->gambar; ?>" width="80px"></td>
                  <td align="center"><?php echo $data->sinopsis; ?></td>
                  <td align="center"><?php echo $data->baik; ?></td>
                  <td align="center"><?php echo $data->rusak; ?></td>
                  <td align="center"><?php echo $data->hilang; ?></td>  
                  <td>
                    <a id="editbtn" data-toggle="modal" data-target="#edit" data-id="<?php echo $data->id_buku; ?>" data-kode="<?php echo $data->kd_buku; ?>" data-judul="<?php echo $data->judul; ?>" data-isbn="<?php echo $data->isbn; ?>" data-pengarang="<?php echo $data->pengarang; ?>" data-penerbit="<?php echo $data->penerbit; ?>" data-halaman="<?php echo $data->halaman; ?>" data-jumlah="<?php echo $data->jumlah; ?>" data-terbit="<?php echo $data->th_terbit; ?>" data-gambar="<?php echo $data->gambar; ?>" data-sinopsis="<?php echo $data->sinopsis; ?>" data-b="<?php echo $data->baik; ?>" data-r="<?php echo $data->rusak; ?>" data-h="<?php echo $data->hilang; ?>">
                   <button class="btn btn-info btn-xs"><i class="fa fa-edit"></i> Edit</button></a>
                    <a href="?page=buku&act=del&id_buku=<?php echo $data->id_buku; ?>" onclick="return confirm('Yakin akan menghapus data ini? ')">
                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus</button>
                  </a>
                  </td>   
                           
              </tr>
              <?php
               } ?>
           </tbody>
          </table>
      </div>

      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah" style="margin-bottom: 5px;"><i class="fa fa-plus"></i>Tambah Data</button>

<div id="tambah" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button> 
              <h4 class="modal-title">Tambah Data Baru</h4>
      </div>
<form action="" method="POST" enctype="multipart/form-data">
  <div class="modal-body">
    <div class="form-group">
                    <label class="control-label" for="kd_buku">Kode Buku</label>
                    <input type="text" name="kd_buku" class="form-control" id="kd_buku" required>
    </div>
       <div class="form-group">
                    <label class="control-label" for="judul">Judul</label>
                    <input type="text" name="judul" class="form-control" id="judul" required>
        </div>
          <div class="form-group">
                    <label class="control-label" for="isbn">ISBN</label>
                    <input type="text" name="isbn" class="form-control" id="isbn" required>
    </div>
      <div class="form-group">
                    <label class="control-label" for="pengarang">Pengarang</label>
                    <input type="text" name="pengarang" class="form-control" id="pengarang" required>
    </div>
      <div class="form-group">
                    <label class="control-label" for="penerbit">Penerbit</label>
                    <input type="text" name="penerbit" class="form-control" id="penerbit" required>
    </div>
     <div class="form-group">
                    <label class="control-label" for="halaman">Halaman</label>
                    <input type="text" name="halaman" class="form-control" id="halaman" required>
    </div>
     <div class="form-group">
                    <label class="control-label" for="jumlah">Jumlah</label>
                    <input type="text" name="jumlah" class="form-control" id="jumlah" required>
    </div>
   
     <div class="form-group">
                    <label class="control-label" for="th_terbit">Th Terbit</label>
                    <select class="form-control" id="th_terbit" name="th_terbit">
                        <?php
                        $tahun = date("Y");
                        for ($i=$tahun-30; $i <=$tahun ; $i++) { 
                          echo '
                          <option value="'.$i.'">'.$i.'</option>

                          ';
                        }
                        ?>


                    </select>
    </div>
     <div class="form-group">
                    <label class="control-label" for="gambar">Gambar</label>
                    <input type="FILE" name="gambar" class="form-control" id="gambar" required>
    </div>
     <div class="form-group">
                    <label class="control-label" for="sinopsis">Sinopsis</label>
                    <input type="text" name="sinopsis" class="form-control" id="sinopsis" required>
    </div>
      <div class="form-group">
                    <label class="control-label" for="status_buku">Status Buku</label><br>
                    <input type="number" name="baik" id="baik" min="0" > Baik<br>
                    <input type="number" name="rusak" id="rusak" min="0" > Rusak<br>
                    <input type="number" name="hilang" id="hilang" min="0" > Hilang
    </div>
          <div class="modal-footer">
                      <button type="reset" class="btn btn-danger">Reset</button>
                      <input type="submit" class="btn btn-success" name="tambah" value="simpan">
          </div>
                 
     </div>
   </div>
 </div>
</div>
   </form> 
   <?php
   if(@$_POST['tambah']) {
    $kd_buku = $connection->conn->real_escape_string($_POST['kd_buku']);
    $judul = $connection->conn->real_escape_string($_POST['judul']);
    $isbn = $connection->conn->real_escape_string($_POST['isbn']);
    $pengarang = $connection->conn->real_escape_string($_POST['pengarang']);
    $penerbit = $connection->conn->real_escape_string($_POST['penerbit']);
    $halaman = $connection->conn->real_escape_string($_POST['halaman']);
    $jumlah = $connection->conn->real_escape_string($_POST['jumlah']);
    $th_terbit = $connection->conn->real_escape_string($_POST['th_terbit']);
    $sinopsis = $connection->conn->real_escape_string($_POST['sinopsis']);
    $baik = $connection->conn->real_escape_string($_POST['baik']);
    $rusak = $connection->conn->real_escape_string($_POST['rusak']);
    $hilang = $connection->conn->real_escape_string($_POST['hilang']);

    $extensi = explode(".", $_FILES['gambar']['name']);
    $gambar = "bk-".round(microtime(true)).".".end($extensi);
    $sumber = $_FILES['gambar']['tmp_name'];
    $upload = move_uploaded_file($sumber, "images/".$gambar);
    if($upload) {
      $bk->tambah_buku($kd_buku, $judul, $isbn, $pengarang, $penerbit, $halaman, $jumlah, $th_terbit, $gambar, $sinopsis, $baik, $rusak, $hilang);
      header("location: ?page=buku");
    } else {
      echo "<script>alert('Upload Gambar Gagal!')</script>";
    }
   }
   ?>


<div id="edit" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button> 
              <h4 class="modal-title">Edit Data Baru</h4>
      </div>
<form id="form" enctype="multipart/form-data">
  <div class="modal-body" id="modal-edit">
       <div class="form-group">
                    <label class="control-label" for="kd_buku">Kode Buku</label>
                     <input type="hidden" name="id_buku" class="form-control" id="id_buku">
                    <input type="text" name="kd_buku" class="form-control" id="kd_buku" required>
    </div>
       <div class="form-group">
                    <label class="control-label" for="judul">Judul</label>
                    <input type="text" name="judul" class="form-control" id="judul" required>
        </div>
          <div class="form-group">
                    <label class="control-label" for="isbn">ISBN</label>
                    <input type="text" name="isbn" class="form-control" id="isbn" required>
    </div>
      <div class="form-group">
                    <label class="control-label" for="pengarang">Pengarang</label>
                    <input type="text" name="pengarang" class="form-control" id="pengarang" required>
    </div>
    <div class="form-group">
                    <label class="control-label" for="penerbit">Penerbit</label>
                    <input type="text" name="penerbit" class="form-control" id="penerbit" required>
    </div>
     <div class="form-group">
                    <label class="control-label" for="halaman">Halaman</label>
                    <input type="text" name="halaman" class="form-control" id="halaman" required>
    </div>
     <div class="form-group">
                    <label class="control-label" for="jumlah">Jumlah</label>
                    <input type="text" name="jumlah" class="form-control" id="jumlah" required>
    </div>
     <div class="form-group">
                    <label class="control-label" for="th_terbit">Th Terbit</label>
                    <input type="text" name="th_terbit" class="form-control" id="th_terbit" required>
    </div>
     <div class="form-group">
                    <label class="control-label" for="gambar">Gambar</label>
                <div style="padding-bottom:5px">
                  <img src="" width="80px" id="pict">
                </div>
                    <input type="FILE" name="gambar" class="form-control" id="gambar" >
    </div>
     <div class="form-group">
                    <label class="control-label" for="sinopsis">Sinopsis</label>
                    <input type="text" name="sinopsis" class="form-control" id="sinopsis" required>
    </div>
     <div class="form-group">
               <label class="control-label" for="status_buku">Status Buku</label><br>
                    <input type="number" name="baik" id="baik" min="0" > Baik<br>
                    <input type="number" name="rusak" id="rusak" min="0" > Rusak<br>
                    <input type="number" name="hilang" id="hilang" min="0" > Hilang
    </div>
  </div> 
          <div class="modal-footer">
                      <input type="submit" class="btn btn-success" name="edit" value="simpan">
          </div>
                 
     </div>

   </form>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script type="text/javascript">
    $(document).on("click", "#editbtn", function(){
      var idpng = $(this).data('id');
      var kodepng = $(this).data('kode');
      var jdlpng = $(this).data('judul');
      var isbnpng = $(this).data('isbn');
      var prgpng = $(this).data('pengarang');
      var pngpng = $(this).data('penerbit');
      var hlmpng = $(this).data('halaman');
      var jmlpng = $(this).data('jumlah');
      var trbpng = $(this).data('terbit');
      var gmrpng = $(this).data('gambar');
      var snppng = $(this).data('sinopsis');
      var bpng = $(this).data('b');
      var rpng = $(this).data('r');
      var hpng = $(this).data('h');
      $("#modal-edit #id_buku").val(idpng);
      $("#modal-edit #kd_buku").val(kodepng);
      $("#modal-edit #judul").val(jdlpng);
      $("#modal-edit #isbn").val(isbnpng);
      $("#modal-edit #pengarang").val(prgpng);
      $("#modal-edit #penerbit").val(pngpng);
      $("#modal-edit #halaman").val(hlmpng);
      $("#modal-edit #jumlah").val(jmlpng);
      $("#modal-edit #th_terbit").val(trbpng);
      $("#modal-edit #sinopsis").val(snppng);
      $("#modal-edit #baik").val(bpng);
      $("#modal-edit #rusak").val(rpng);
      $("#modal-edit #hilang").val(hpng);

      $("#modal-edit #pict").attr("src", "images/"+gmrpng);

    })

    $(document).ready(function(e){
      $("#form").on ("submit", (function(e) {
        e.preventDefault();
        $.ajax({
          url : 'models/proses_edit_buku.php',
          type : 'POST',
          data : new FormData(this),
          contentType : false,
          cache : false,
          processData : false,
          success : function(msg) {
            $('.table').html(msg);
          }

        })

      }))

    })
    </script>
 </div>
  </div>
  </div>          
<?php
} else if(@$_GET['act'] == 'del') {
  $gambar = $bk->tampil_buku($_GET['id_buku'])->fetch_object()->gambar;
  unlink("images/".$gambar);

  $bk->hapus_buku($_GET['id_buku']); 
  header("location: ?page=buku");
}

?>
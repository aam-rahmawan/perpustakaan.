<?php

$agt = new Anggota($connection);
if(@$_GET['act'] == '') {
?>
        <div class="container">
      <div id="page-wrapper">
  <div class="row">
          <div class="col-lg-12">
            <h1>Data Anggota <small></small></h1>
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
                <th>NO</th>
                <th>Nis</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Username</th>
                <th>Password</th>
                <th>Status</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $tampil = $agt->tampil_anggota();
                while($data = $tampil->fetch_object()) {
                ?>
                  <tr>
                  <td align="center"><?php echo $no++; ?></td>
                  <td align="center"><?php echo $data->nis; ?></td>
                  <td align="center"><?php echo $data->nm_lengkap; ?></td>
                  <td align="center"><?php echo $data->kelas; ?></td>
                  <td align="center"><?php echo $data->tempat_lahir; ?></td>
                  <td align="center"><?php echo $data->tanggal_lahir; ?></td>
                  <td align="center"><?php echo $data->jenis_kelamin; ?></td>
                  <td align="center"><?php echo $data->alamat; ?></td>
                  <td align="center"><?php echo $data->username; ?></td>
                  <td align="center"><?php echo $data->password; ?></td>
                  <td align="center"><?php echo $data->status; ?></td>
                  <td>
                    <a id="editbr" data-toggle="modal" data-target="#edit" data-idd="<?php echo $data->id_anggota; ?>" data-nis="<?php echo $data->nis; ?>" data-nm="<?php echo $data->nm_lengkap; ?>" data-kelas="<?php echo $data->kelas; ?>" data-tempat="<?php echo $data->tempat_lahir; ?>" data-lahir="<?php echo $data->tanggal_lahir; ?>" data-jenis="<?php echo $data->jenis_kelamin; ?>" data-almt="<?php echo $data->alamat; ?>" data-user="<?php echo $data->username; ?>" data-pass="<?php echo $data->password; ?>">
                   <button class="btn btn-info btn-xs"><i class="fa fa-edit"></i> Edit</button></a>
                    <a href="?page=anggota&act=del&id_anggota=<?php echo $data->id_anggota; ?>" onclick="return confirm('Yakin akan menghapus data ini? ')">
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
                    <label class="control-label" for="nis">Nis</label>
                    <input type="text" name="nis" class="form-control" id="nis" required>
    </div>
       <div class="form-group">
                    <label class="control-label" for="nm_lengkap">Nama</label>
                    <input type="text" name="nm_lengkap" class="form-control" id="nm_lengkap" required>
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
                    <label class="control-label" for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" required>
    </div>
      <div class="form-group">
                    <label class="control-label" for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" required>
    </div>
     <div class="form-group">
                    <label class="control-label" for="jenis_kelamin">Jenis Kelamin</label>
                   <select name="jenis_kelamin" class="form-control" id="jenis_kelamin" required>
                                            <option>Pilih Salah Satu</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                    </select>
    </div>
     <div class="form-group">
                    <label class="control-label" for="alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" required>
    </div>
     <div class="form-group">
                    <label class="control-label" for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username" required>
    </div>
     <div class="form-group">
                    <label class="control-label" for="Password">Password</label>
                    <input type="text" name="password" class="form-control" id="password" title="Min 8 Character huruf dan angka kecil dan besar" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required>
    </div>
     <div class="form-group">
                    <label class="control-label" for="status">Status</label>
                    <select name="status" class="form-control" id="status" required>
                                            <option>Pilih Salah Satu</option>
                                            <option value="petugas">Petugas</option>
                                            <option value="anggota">Anggota</option>
                    </select>
    </div>
          <div class="modal-footer">
                      <button type="reset" class="btn btn-danger">Reset</button>
                      <input type="submit" class="btn btn-success" name="tambah" value="simpan">
          </div>
                 
     </div>
   </div>
 </div>
</div>
</div>
   </form> 
   <?php
   if(@$_POST['tambah']) {
   	$nis = $connection->conn->real_escape_string($_POST['nis']);
    $nm_lengkap = $connection->conn->real_escape_string($_POST['nm_lengkap']);
   	$kelas = $connection->conn->real_escape_string($_POST['kelas']);
   	$tempat_lahir = $connection->conn->real_escape_string($_POST['tempat_lahir']);
    $tanggal_lahir = $connection->conn->real_escape_string($_POST['tanggal_lahir']);
   	$jenis_kelamin = $connection->conn->real_escape_string($_POST['jenis_kelamin']);
   	$alamat = $connection->conn->real_escape_string($_POST['alamat']);
   	$username = $connection->conn->real_escape_string($_POST['username']);
   	$password = $connection->conn->real_escape_string($_POST['password']);
    $status = $connection->conn->real_escape_string($_POST['status']);
    	$agt->tambah_anggota($nis, $nm_lengkap, $kelas, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $alamat, $username, $password, $status);
    	header("location: ?page=anggota");
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
                    <label class="control-label" for="nis">Nis</label>
                    <input type="hidden" name="id_anggota" class="form-control" id="id_anggota" required>
                    <input type="text" name="nis" class="form-control" id="nis" required>
    </div>
       <div class="form-group">
                    <label class="control-label" for="nm_lengkap">Nama</label>
                    <input type="text" name="nm_lengkap" class="form-control" id="nm_lengkap" required>
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
                    <label class="control-label" for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" required>
    </div>
      <div class="form-group">
                    <label class="control-label" for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" required>
    </div>
     <div class="form-group">
                    <label class="control-label" for="jenis_kelamin">Jenis Kelamin</label>
                   <select name="jenis_kelamin" class="form-control" id="jenis_kelamin" required>
                                            <option>Pilih Salah Satu</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                    </select>
    </div>
     <div class="form-group">
                    <label class="control-label" for="alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" required>
    </div>
     <div class="form-group">
                    <label class="control-label" for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username" required>
    </div>
     <div class="form-group">
                    <label class="control-label" for="Password">Password</label>
                    <input type="text" name="password" class="form-control" id="password" title="Min 8 Character huruf dan angka kecil dan besar" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required>
    </div>
          <div class="modal-footer">
                      <input type="submit" class="btn btn-success" name="edit" value="simpan">
          </div>
                 
     </div>
   </div>
 </div>
</div>
</div>
   </form> 
</div>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script type="text/javascript">
    $(document).on("click", "#editbr", function(){
      var idagt = $(this).data('idd');
      var nisagt = $(this).data('nis');
      var nmagt = $(this).data('nm');
      var kls = $(this).data('kelas');
      var tmp = $(this).data('tempat');
      var lhr = $(this).data('lahir');
      var jns = $(this).data('jenis');
      var ala = $(this).data('almt');
      var ser = $(this).data('user');
      var pas = $(this).data('pass');

      $("#modal-edit #id_anggota").val(idagt);
      $("#modal-edit #nis").val(nisagt);
      $("#modal-edit #nm_lengkap").val(nmagt);
      $("#modal-edit #kelas").val(kls);
      $("#modal-edit #tempat_lahir").val(tmp);
      $("#modal-edit #tanggal_lahir").val(lhr);
      $("#modal-edit #jenis_kelamin").val(jns);
      $("#modal-edit #alamat").val(ala);
      $("#modal-edit #username").val(ser);
      $("#modal-edit #password").val(pas);


    })

    $(document).ready(function(e){
      $("#form").on ("submit", (function(e) {
        e.preventDefault();
        $.ajax({
          url : 'models/proses_edit_anggota.php',
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

<?php
} else if(@$_GET['act'] == 'del') {
  $agt->hapus_anggota($_GET['id_anggota']); 
  header("location: ?page=anggota");
}

?>
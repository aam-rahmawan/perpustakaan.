 <div id="login" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button> 
              <h4 class="modal-title"><center>LOGIN</center></h4>
      </div>
<form action="" method="POST" enctype="multipart/form-data">
  <div class="modal-body">
    <div class="form-group">
                          <label class="control-label" for="username">USERNAME</label>
                    <input type="text" name="username" class="form-control" id="username" required>

    </div>
       <div class="form-group">
                    <label class="control-label" for="password">PASSWORD</label><br>
                    <input type="password" name="password"  class="form-control" id="password" required>
        </div>
         <div class="form-group">
                   
                   <input type="checkbox" class="form-checkbox"> Show password
        </div>
    </div>
          <div class="modal-footer">
                      <input type="submit" class="btn btn-success" name="login" value="Login">
          </div>
</form>       
     </div>
   </div>
 </div>

 <?php
@$username=$_POST['username'];
@$password=$_POST['password'];
@$login=$_POST['login'];
if(isset($login)){
  include "config/koneksi_login.php";
  if ($db->connect_error) {
    echo "Failed to connect to MySQL: " . $db->connect_error;
  }
  $res = $db->query("SELECT * FROM t_login where username='$username' and password='$password'");
  $row = $res->fetch_assoc();
  $name = $row['nm_lengkap'];
  $user = $row['username'];
  $pass = $row['password'];
  $type = $row['status'];
  if($user==$username && $pass=$password){
    if($type=="petugas"){
      $_SESSION['mysesi']=$name;
      $_SESSION['mytype']=$type;
      echo "<script>window.location.assign('index.php')</script>";
    } else if($type=="anggota"){
      echo "<script>window.location.assign('index.php')</script>";
      $_SESSION['mysesi']=$name;
      $_SESSION['mytype']=$type;
    } else {

?>
<?php
    }
  } else{

?>
<div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                    Login Gagal, Silakan Coba Lagi!
</div>
<?php
  }
}
?>

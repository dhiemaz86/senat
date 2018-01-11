<?php
include "lib/config.php";           
include "lib/koneksi.php";

require_once('lib/DBClass.php');
require_once('models/m_kirim_lpj.php');



$kirim_lpj = new kirim_lpj();
$id = abs((int)$_GET['a']);
$data=$kirim_lpj->readKirim_lpj($id);


if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
    echo "<center>Untuk mengakses modul, Anda harus login <br>";
    echo "<a href=index.php><b>LOGIN</b></a></center>";
} else { 
  $user = $_SESSION['username'];
    $sqlUser = "select * from admin where user='".$_SESSION['username']."'";

  $kuerisqluser= mysqli_query($koneksi,"select * from admin where user='".$_SESSION['username']."'");
 
  $user = $_SESSION['username'];

 

  if(isset($_POST['kirim'])){ 
  
  
  
    $ekstensi_diperbolehkan = array('doc','docx');
      $lpj = $_FILES['file']['name'];
      $x = explode('.', $lpj);
      $ekstensi = strtolower(end($x));
      $ukuran = $_FILES['file']['size'];
      $file_tmp = $_FILES['file']['tmp_name'];

  $data['input_judul']= $_POST['in_judul'];
  $data['input_nomor']= $_POST['in_nomor'];
  $data['input_lpj']= $lpj;
  $data['input_deskripsi']= $_POST['in_deskripsi'];
  $data['input_status']= $_POST['status'];
    
if(empty($data)){
    exit('Data lpj tidak ditemukan');
  }
if (empty($lpj)) {
    echo'lpj kosong <br>';
  }
  else{
  if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 5044070){      
          move_uploaded_file($file_tmp, 'mimin/ARSIP/PROPOSAL/lpj_masuk/'.$user.'/'.$lpj);
          $query = mysql_query("INSERT INTO kirim_lpj VALUES(NULL, '$lpj')");
          
        }else{
          echo 'UKURAN FILE TERLALU BESAR';
        }
      }else{
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN! <br>';
      }
  }
  
  
    $tambah = $kirim_lpj->updater_lpj($_POST['in_id'], $data);
    echo "lpj Berhasil di Kirim!<br/><br />";
  }
  
$dt = $data[0];

  $id   =  "".$dt['id_lpj']." ";
  $md5id = md5($id);
  $token = md5(md5($id).md5('kata acak'));

?>

    


      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Manajemen
            <small>Admin</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">lpj Masuk</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
            <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Form Edit lpj</h3>
              </div>
			        <form class="form-horizontal" action="adminweb.php?module=edit_lpj&a=<?php echo $id?>&token=<?php echo $token; ?>" method="post"  enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Id lpj</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="in_id" readonly="true" value="<?php echo $dt['id_lpj'] ?>">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Judul</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control"  type="text" name="in_judul" value="<?php echo $dt['judul'] ?>">
                      </div>
                    </div>


                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">No Surat</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="in_nomor" value="<?php echo $dt['no_surat'] ?>">
                      </div>
                    </div>

                    

                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Deskripsi</label>
                      <div class="col-sm-10">
                        <textarea class="col-sm-12" name="in_deskripsi"><?php echo $dt['deskripsi'] ?></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">lpj</label>
                      <div class="col-sm-10">
                      <?php echo $dt['lpj'] ?>
                        <input type="file" class="form-control" id="email" name="file" value="<?php echo $dt['lpj'] ?>" placeholder="<?php echo $dt['lpj'] ?>">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Status</label>
              
                      <div class="col-sm-10">
                <select id="status" name="status" class="form-control">
                    <option value="0">Un Read</option>
                    <option value="2">Revisi</option>
                    <option value="3">Benar</option>
                   </select>
            </div>

                    
                      
                    

                  </div><!-- /.box-body -->
                  <div class="box-footer">

                    <button type="submit" name="kirim" class="btn btn-primary pull-right">Simpan</button>
                  </div><!-- /.box-footer -->
                </form>
			</div>
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php } ?>

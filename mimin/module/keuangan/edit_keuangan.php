<?php
include "lib/config.php";           
include "lib/koneksi.php";

require_once('lib/DBClass.php');
require_once('models/m_keuangan.php');



$keuangan = new keuangan();

$id = abs((int)$_GET['a']);
$data=$keuangan->readKeuangan($id);


if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
    echo "<center>Untuk mengakses modul, Anda harus login <br>";
    echo "<a href=index.php><b>LOGIN</b></a></center>";
} else { 
  $user = $_SESSION['username'];
    $sqlUser = "select * from admin where user='".$_SESSION['username']."'";

  $kuerisqluser= mysqli_query($koneksi,"select * from admin where user='".$_SESSION['username']."'");
 
  $user = $_SESSION['username'];

 

  if(isset($_POST['kirim'])){ 
  
  $id=$_POST['in_id'];
  
    
  $data['input_orma']= $_POST['in_orma'];
  $data['input_dana']= $_POST['in_dana'];
  $data['input_pengeluaran']= $_POST['in_pengeluaran'];
      
  
    $tambah = $keuangan->updateKeuangan($id, $data);
    echo "Keuangan Berhasil di Ubah!<br/><br />";

  }
  
$dt = $data[0];

  $id   =  "".$dt['id_keuangan']." ";
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
            <li class="active">Edit Keuangan</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
            <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Form Edit Keuangan</h3>
              </div>
			        <form class="form-horizontal" action="adminweb.php?module=edit_keuangan&a=<?php echo $id?>&token=<?php echo $token; ?>" method="post"  enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Id Keuangan</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="in_id" readonly="true" value="<?php echo $dt['id_keuangan'] ?>">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Orma</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control"  type="text" name="in_orma" value="<?php echo $dt['id_orma'] ?>">
                      </div>
                    </div>


                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Dana</label>
                      <div class="col-sm-10">
                        <input type="number" class="form-control" name="in_dana" value="<?php echo $dt['dana'] ?>">
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Pengeluaran</label>
                      <div class="col-sm-10">
                        <input type="number" class="form-control" name="in_pengeluaran" value="<?php echo $dt['pengeluaran'] ?>">
                      </div>
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

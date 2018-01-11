 <?php

if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
    echo "<center>Untuk mengakses modul, Anda harus login <br>";
    echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else { ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Manajemen
            <small>Client</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Hapus Berita</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
            <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Hapus Berita</h3>
              </div>


             
<?php 
include "../koneksi.php";
?>

<?php

$id_berita  = $_GET['id'];
$foto   = $_GET['filenya'];


if ($foto=="")
{
$query = mysql_query("delete from berita where id_berita='$id_berita'");

} else {
$query = mysql_query("delete from berita where gambar='$foto'");
unlink("gambar_berita/$_GET[filenya]");
}


if ($query){
echo"<script>alert('data berhasil di hapus...');
document.location.href='adminweb.php?module=berita'; </script>\n";
}
else
{echo"<script>alert('hapus gagal');
document.location.href='adminweb.php?module=berita'; </script>\n";}


?>

			</div>
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php } ?>

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
            <li class="active">Edit Client</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
            <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Form Edit Client</h3>
              </div>


              <?php
include "../koneksi.php";
include"config/fungsi_gambar.php";

$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];


$kategori   = $_POST['kategori'];
$judul_berita = $_POST['judul_berita'];
$tgl_agenda   = $_POST['tgl_agenda'];
$tgl_akhir    = $_POST['tgl_akhir'];
$isi_berita   = $_POST['isi_berita'];


if (empty ($kategori) or empty ($judul_berita) or empty($isi_berita) )
{
echo "<script>alert('data tidak boleh kosong');
document.location.href='adminweb.php?module=tambah_berita'; </script>\n"; exit ;
}


if (!empty($lokasi_file))
   {
    UploadFile($nama_file);

$query = mysql_query ('insert into berita (id_berita,id_kategori,judul_berita,tgl_agenda,tgl_akhir,isi_berita,tgl_input,gambar)values("","'.$kategori.'","'.$judul_berita.'","'.$tgl_agenda.'","'.$tgl_akhir.'","'.$isi_berita.'","'.date('Y-m-d').'","'.$nama_file.'")');
} else {
$query=mysql_query('insert into berita (id_kategori,judul_berita,tgl_agenda,tgl_akhir,isi_berita,tgl_input) values("'.$kategori.'","'.$judul_berita.'","'.$tgl_agenda.'","'.$tgl_akhir.'","'.$isi_berita.'","'.date('Y-m-d').'")');
}

if($query) {
echo "<script>alert('data berhasil disimpan');
document.location.href='adminweb.php?module=berita'; </script>\n";
}else{
echo "<script>alert('data gagal disimpan');
document.location.href='adminweb.php?module=tambah_berita'; </script>\n";
}
?>
			</div>
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php } ?>

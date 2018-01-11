<?php
	
	require_once('lib/DBClass.php');
	require_once('models/m_kontak.php');



  if(isset($_POST['kirim'])){ 
  $kontak = new kontak();
  
    $nama = $_POST['in_nama'];
    $nim = $_POST['in_nim'];
    $jabatan = $_POST['in_jabatan'];
    $kontak = $_POST['in_kontak'];
    

    $query = "Insert into kontak (id_kontak, nama, nim, jabatan, kontak)
			values('', '$nama', '$nim', '$jabatan', '$kontak')";

	$querySimpanKontak = mysqli_query($koneksi,$query);

    echo "Kontak berhasil di tambahkan!<br/><br />";
  }
	
?>

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Kontak
            <small>Senat</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
            <li class="active">Kontak Senat</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
            <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Kontak</h3>

				  <div class="box-tools">

                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>

                    </div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                


<h1>Tambah Kontak</h1>
<form action="adminweb.php?module=tambah_kontak" method="post" enctype="multipart/form-data">
  Nama:<br/>
  <input type="text" name="in_nama"><br/>
  Nim:<br/>
  <input type="text" name="in_nim"><br/>
  Jabatan:<br/>
  <input type="text" name="in_jabatan"><br/>
  Kontak:<br/>
  <input type="text" name="in_kontak"><br/>


  <input type="submit" name="kirim" value="simpan"><br/>
</form>



</div><!-- /.box-body-->

                <div class="box-footer">
                       </div><!-- /.box-footer -->
              </div><!-- /.box -->

            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
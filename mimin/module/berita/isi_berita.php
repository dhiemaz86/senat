<?php
// session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
   echo "<center>Untuk mengakses modul, Anda harus login <br>";
   echo "<a href=/index.php><b>LOGIN</b></a></center>";
} else { ?>
     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <section class="content-header">
         <h1>
           Manajemen
           <small>Berita</small>
         </h1>
         <ol class="breadcrumb">
           <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
           <li class="active">Berita</li>
         </ol>
       </section>

       <!-- Main content -->
       <section class="content">
         <!-- Info boxes -->
           <div class="row">
           <div class="col-xs-12">
             <div class="box">
               <div class="box-header">
                 <h3 class="box-title">Data Berita</h3>

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
                 
  
      <td align="left" bgcolor="#FFFFFF"><div align="center">BERITA
        </div>
       
<table id="table" class="table table-striped table-bordered" width="100%" cellspacing="0">
 
        
              <?php
include "../koneksi.php";

$query = "select * from kategori,berita 
where berita.id_kategori=kategori.id_kategori order by tgl_input desc ";
$sql = mysql_query($query);

?>
 <div class="box-footer">
            <a href="<?php echo $base_url; ?>adminweb.php?module=tambah_berita"><button class="btn btn-primary">Tambah Berita</button></a>
                 </div><!-- /.box-footer -->
             </div><!-- /.box -->

<table id="table" class="table table-striped table-bordered" width="100%" cellspacing="0">
<thead>
              <tr bgcolor="#B0B0B0">
                <th>NO</th>
                <th>Kategori</th>
                <th>judul</th>
                
                <th>Tgl input</th>
                
                <th>Gambar</th>
                <th>AKSI</th>
              </tr>
    </thead>
              <?php
$no=1;
while ($data=mysql_fetch_array($sql))
{
?>
              <tr bgcolor="#E4E4E4">
                <td><?php echo $no?></td>
                <td><?php echo $data['nama_kategori']; ?></td>
                <td><?php echo $data['judul_berita']; ?></td>
                <td><?php echo $data['tgl_input']; ?></td>
                <td><img style="height: 30px; "  src="gambar_berita/<?php echo $data['gambar']; ?>"></td>
                <td><a href="adminweb.php?module=hapus_berita&id=<?php echo $data['id_berita']; ?>" 
    onClick = "return confirm('Apakah Anda ingin mengapus data <?php echo $data['id_berita']; ?>?')"> Hapus </a> | <a href="adminweb.php?module=edit_berita&id=<?php echo $data['id_berita']; ?>" >Edit</a></td>
              </tr>
              <?php
$no++;
}
?>
            </table>
            <p></p></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
    </tr>
               </div><!-- /.box-body -->

           

           </div>
         </div>
       </section><!-- /.content -->
     </div><!-- /.content-wrapper -->
     <?php } ?>

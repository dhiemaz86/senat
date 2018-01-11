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

      </table></td>
      <td width="753" height="250" align="left" bgcolor="#FFFFFF"><div align="center">INPUT KATEGORI berita
        </div>
        <table width="755" border="0">
          <tr>
            <td width="27">&nbsp;</td>
            <td width="702">&nbsp;</td>
            <td width="10">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><p align="left">        
                <form enctype="multipart/form-data" method="post" action="update_berita.php?&id=<?php echo $_GET['id'] ?>">
                  <table width="701" border="0">
                    <?php
include'../koneksi.php';

$id = $_GET['id'];
$edit		= "select * from berita where id_berita=$id";
  $hasil	= mysql_query ($edit);
  $c		= mysql_fetch_array ($hasil);

?>
<?php
include'../koneksi.php';
$sql_kategori="select * from kategori order by id_kategori";
$kueri_kategori=mysql_query($sql_kategori) or die(mysql_error());


?>
                    <tr>
                      <td width="92"><small><strong>Kategori</strong></small></td>
                      <td width="10">:</td>
                      <td width="585"><select name="kategori">
                          <?php
 while (list($kode,$nama_status)=mysql_fetch_array($kueri_kategori))
   {
?>
                          <option  value="<?php echo $kode ?>"><?php echo $nama_status ?></option>
                          <?php
  }
?>
                      </select></td>
                    </tr>
                    <tr>
                      <td><small><strong>Judul</strong></small></td>
                      <td>:</td>
                      <td><input type="text" name="judul_berita" value="<?php echo $c['judul_berita']; ?>"></td>
                    </tr>
                    <tr>
                      <td><small><strong>isi artikel </strong></small></td>
                      <td>:</td>
                      <td><textarea name="isi_berita" cols="70" rows="30" id="isi_berita""></textarea></td>
                    </tr>
                   
                    <tr>
                      <td><small><strong>Gambar</strong></small></td>
                      <td>:</td>
                      <td><input type="file" name="fupload" id="nama_file" value="<?php echo $c['gambar']; ?>"></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td><input type="submit" name="Submit" value="Submit"></td>
                    </tr>
                  </table>
                </form>
                <p></p>
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
   
  </table>

</td>
    </tr>
               </div><!-- /.box-body -->

            <div class="box-footer">
            <a href="<?php echo $base_url; ?>adminweb.php?module=tambah_berita"><button class="btn btn-primary">Tambah Berita</button></a>
                 </div><!-- /.box-footer -->
             </div><!-- /.box -->

           </div>
         </div>
       </section><!-- /.content -->
     </div><!-- /.content-wrapper -->
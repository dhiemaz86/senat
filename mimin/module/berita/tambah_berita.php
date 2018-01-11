<script src="lib/jquery.min.js"></script>
<script src="lib/zebra_datepicker.js"></script>
<link rel="stylesheet" href="lib/css/default.css" />

<script>
    $(document).ready(function(){
        $('#tanggal').Zebra_DatePicker({
            format: 'Y-F-d',
            months : ['01','02','03','04','05','06','07','08','09','10','11','12'],
            days : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu'],
            days_abbr : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu']
        });
            $('#tanggala').Zebra_DatePicker({
            format: 'Y-F-d',
            months : ['01','02','03','04','05','06','07','08','09','10','11','12'],
            days : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu'],
            days_abbr : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu']
        });
    });
</script>


<?php
 //session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
    echo "<center>Untuk mengakses modul, Anda harus login <br>";
    echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else { ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Post
            <small>Berita</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tambah Berita</li>
          </ol>
        </section>

           <td width="753" height="250" align="left" bgcolor="#FFFFFF"><div align="center">
        </div>
        <table width="100%" border="0">
        <tr>
          <td width="27">&nbsp;</td>
          <td width="702">&nbsp;</td>
          <td width="10">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><p align="left"><form action="adminweb.php?module=proses_berita" method="post" enctype="multipart/form-data">
        <table width="100%" border="0">






<?php
include'../koneksi.php';
$sql_kategori="select * from kategori order by id_kategori";
$kueri_kategori=mysql_query($sql_kategori) or die(mysql_error());


?>
          <tr>
            <td width="92"><small><strong>Kategori</strong></small></td>
            <td width="10">:</td>
            <td width="267"><select name="kategori">
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
            <td><input type="text" name="judul_berita"></td>
          </tr>
           <tr>
            <td><small><strong>Tanggal Acara</strong></small></td>
            <td> : </td><td>
            <input type="text" name="tgl_agenda" id="tanggal"/><small><i>[Khusus Kategori Agenda]</i></small></td>
          </tr>
          <tr>
            <td><small><strong>Tanggal Akhir</strong></small></td>
      <td> : </td><td>
      <input type="text" name="tgl_akhir" id="tanggala"/><small><i>[Khusus Kategori Agenda]</i></small></td>
          </tr>



          <tr>
            <td><small><strong>isi artikel </strong></small></td>
            <td>:</td>
            <td><textarea name="isi_berita" cols="70" rows="10"></textarea></td>
          </tr>
         
          <tr>
            <td><small><strong>Gambar</strong></small></td>
            <td>:</td>
            <td><input type="file" name="fupload" id="nama_file"></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" name="Submit" value="Submit"></td>
          </tr>
        </table>
          </form></p>
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



       
			</div>
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php } ?>

<div class="row">
  <div class="col-md-3" style="background-color: #fff">
<div style="height: 100%; background-color: purple;">

<div>

   <!-- AWAL KALENDER -->


<script src="fullcalender/fullcalendar.min.js" type="text/javascript"></script>


      <div class="col-md-12 section-title panel">
        <div  style="width: 305px;"><a class="i-text">
            Kalender</a></span></div>
        </div>
<div  style="background-color: #fff">

<?php
function tanggal_sekarang($time=FALSE)
{
  date_default_timezone_set('Asia/Jakarta');
  $str_format='';
  if($time==FALSE)
  {
    $str_format= date("Y-m-d");
  }else{
    $str_format= date("Y-m-d H:i:s");
  }
  return $str_format;
}
?>
<script>

  $(document).ready(function() {
  
    $('#calendar').fullCalendar({
      theme:true,
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      defaultDate: '<?=tanggal_sekarang();?>',
      editable: true,
      eventLimit: true,
      events: {
        url: 'koneksi_kalender.php',        
      },
      loading: function(bool) {
        $('#loading').toggle(bool);
      }
    });
    
  });

</script>
<style>
  #calendar {
    max-width: 700px;
    margin: 0 auto;
  }
</style>
<div id='loading'>loading...</div>
<div id='calendar'></div>
</div>

   <!-- AKHIR KALENDER -->



 </div>
  </div>
  </div>  


<div class="col-md-6" style="background-color: #fff">  

<!-- AWAL BERITA -->


<?php

  require_once('lib/DBClass.php');
  require_once('models/m_berita.php');
?>
<div class=" col-md-12 left">
        <div class="col-md-12 section-title panel">
        <div class="pull-left"><a class="i-text">
            Berita</a></span></div>
        </div>
<?php  
  
 $batas=3;

if(empty($paging))
  {
  $posisi=0;
  $paging=1;
  }

else{
  $posisi=($paging-1) * $batas;
  }
$query=mysql_query("select * from berita 
order by id_berita desc  limit $posisi,$batas");


  while($r=mysql_fetch_array($query))

  

/*
$query=mysql_query("select * from berita 
order by id_berita desc  limit $posisi,$batas");
*/

{
  
  $idberita   =  "".$r['id_berita']." ";
  $md5id = md5($idberita);
  $token = md5(md5($idberita).md5('kata acak'));


   echo"<div class='punel panel-default' style='border=10px'>
            <div class='panel-body'>
                <div class='raw'>
          <div class='col-md-12'>
            <div class='berita'>
                               <div class='col-md-7'>
                  <div class='caption'>

        <h3><a class='b-text' href='readmore.php?id=$idberita&token=$token'>$r[judul_berita]</a></strong></h3>            
    <p>".substr($r['isi_berita'],0,150)." <br>
    </p>
                  </div> 
                </div>
          <div class='col-md-5'     style='text-align=right'>
                        <div id='wrapper' class='image-wrap'>
    <img style='height:160px;' class='img-responsive img-load-lazy' src='ngadimin/berita/foto/$r[gambar]'>

            </div>
          </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 ";
      
    } 
?>
      
    

<!-- AKHIR BERITA -->


  </div>


</div>


  <!-- Bagian KANAN-->    
  <div class="col-md-3" class="punel panel-default" style="background-color: #fff">

  <a class="section-title i-text col-md-12 panel">Agenda</a>   


 <?php 
   

echo '

<table  rules="rows" border="0" style="background-color: #fff;" class="col-md-12">
<tr>
<th col-md-6> <div id="gbl"> Waktu </div> </th>
<th col-md-6>Acara</th>
</tr>
<tr>';
 

   
$batas=10;

if(empty($paging))
  {
  $posisi=0;
  $paging=1;
  }

else{
  $posisi=($paging-1) * $batas;
  }
$query=mysql_query("select * from kategori,berita 
where berita.id_kategori=2=kategori.id_kategori order by id_berita desc  limit $posisi,$batas");
while($r=mysql_fetch_array($query))
 {
  $idberita   =  "".$r['id_berita']." ";
  $md5id = md5($idberita);
  $token = md5(md5($idberita).md5('kata acak'));

echo "
 <td style= padding:10px;>".$r['tgl_agenda']." <br></td>
 <td style= height:30px;><a href='readmore.php?id=$idberita&token=$token'>".$r['judul_berita']." <br></a><br> </td>
 </tr>";
 }
echo '</table>
</div> ';

?>
  
  <!-- AKHIR AGENDA -->


<!-- <table border="1">
  <tr>
    <td class="col-md-6">kiri banget yang panjang sekali</td>
    <td class="col-md-6">kanan</td>
  </tr>
</table> -->

  </div>



  
        </div>
   

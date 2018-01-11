<?php session_start(); ?>
<script src="lib/jquery.min.js"></script>
<script src="lib/zebra_datepicker.js"></script>
<link rel="stylesheet" href="lib/css/default.css" />

<?php
include "lib/config.php";     			
include "lib/koneksi.php";
	?>
<!DOCTYPE html>
<html>
<div class="panel" style="background-color: #592e5e;">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Senat Mahasiswa</title>		
		<link rel="shortcut icon" href="img/assets/cera.png"/>
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, 
		user-scalable=no" name="viewport">
		<!-- Bootstrap 3.3.5 -->
		
		<link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<!-- jvectormap -->
		<link rel="stylesheet" href="asset/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="asset/dist/css/AdminLTE.min.css">
		<!-- AdminLTE Skins. Choose a skin from the css/skins
		folder instead of downloading all of them to reduce the load. -->
		<link rel="stylesheet" href="asset/dist/css/skins/_all-skins.min.css">
	</head>


	<body class="hold-transition skin-purple sidebar-mini container" style="background-color: #592e5e;">
		<div class="wrapper">

			<header class="main-header">

				<!-- Logo -->
				<a href="home.php?module=home" class="logo"> 
				<b>Senat </b>Mahasiswa </a>

				<!-- Header Navbar: style can be found in header.less -->
				<nav class="navbar navbar-static-top" role="navigation">
					<!-- Sidebar toggle button-->
					
					<!-- Navbar Right Menu -->
					
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">


					
					</li>
					<li><a href="index.php"> Home</a></li>
                    <li><a href="home.php?module=profil"> Profil</a></li>
                    <li><a href="home.php?module=agenda">Agenda</a></li>
                    <li><a href="home.php?module=divisi"> Divisi</a></li>
                    <li><a href="home.php?module=struktursema">Strukutur Organisasi</a></li>
                    <li><a href="home.php?module=kontak"> Kontak</a></li>
                    <!-- search form 
					<li>
					<form action="#" method="get" class="nav">
					<input type="text" name="q" class="form-control" placeholder="Search...">
					<button type="submit" name="search" id="search-btn" class="btn btn-flat">
					<i class="fa fa-search"></i></button> 
					</form></li>
					<!-- /.search form -->
						</ul>
					</div>

				</nav>
			</header>


<div class="col-md-12" style="background-color: white;">

			<!-- MENU KIRI -->
<div style="padding-top:30px;">

			 <div class="col-md-3" style="background-color: none">
 <table align="center" width="100%" border="0px" valign="middle">
  <tr height="50px">
    <th colspan="3"> User </th>
  <tr>
  <tr>
    
  </tr>
</table>

                <div style="padding-right: 10px;">

<!-- StART PANEL LOGIN ORMA -->




    <head>

        <title>Senat Mahasiswa</title>
       
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
        <link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css" media="screen">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="screen">
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="jquery-ui.css" rel="stylesheet">

<!-- link kalender -->
<link href="fullcalender/lib/cupertino/jquery-ui.min.css" rel="stylesheet" type="text/css" />
<link href="fullcalender/fullcalendar.css" rel="stylesheet" type="text/css" />
<link href="fullcalender/fullcalendar.print.css" rel="stylesheet" type="text/css" media="print" />
<script src="fullcalender/lib/moment.min.js" type="text/javascript"></script>
<script src="fullcalender/lib/jquery.min.js" type="text/javascript"></script>
<script src="fullcalender/lib/jquery-ui.custom.min.js" type="text/javascript"></script>
<!-- end link kalender -->
    
    <style>
    
    
    
    
    
    
    
    
    
    
    </style>
    
    
    </head>
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>


  <link rel="shortcut icon" href="data/logo/favicon.ico" />
  
    <link rel="stylesheet" href="css/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" /> 

    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
        });
    </script>

<script language="javascript" type="text/javascript">
        /* Visit http://www.yaldex.com/ for full source code
and get more free JavaScript, CSS and DHTML scripts! */
        <!-- Begin
        var timerID = null;
        var timerRunning = false;
        function stopclock (){
            if(timerRunning)
                clearTimeout(timerID);
            timerRunning = false;
        }
        function showtime () {
            var now = new Date();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds()
            var timeValue = "" + ((hours >12) ? hours -12 :hours)
            if (timeValue == "0") timeValue = 12;
            timeValue += ((minutes < 10) ? ":0" : ":") + minutes
            timeValue += ((seconds < 10) ? ":0" : ":") + seconds
            timeValue += (hours >= 12) ? " P.M." : " A.M."
            document.clock.face.value = timeValue;
            timerID = setTimeout("showtime()",1000);
            timerRunning = true;
        }
        function startclock() {
            stopclock();
            showtime();
        }
        window.onload=startclock;
        // End -->
    </SCRIPT>

<?php

require_once('lib/DBClass.php');
ob_start();
if(isset($_SESSION['usernameku']))
    {
        $user = $_SESSION['usernameku'];
        
     
  include('koneksi.php');
    $sqlUser = "select * from orma where user='".$_SESSION['usernameku']."'";
    $sqlprofil = "select * from profil where nama_orma='".$_SESSION['usernameku']."'";
    $orma = mysql_fetch_array(mysql_query($sqlUser));
    $profil = mysql_fetch_array(mysql_query($sqlprofil));
    $id_orma =  "".$orma['id_orma']." ";
    $logo   =  "".$profil['logo']." ";
    $user = $_SESSION['usernameku'];



echo"
   <img id='profile-img' class='profile-img-card' style='width: 150px; height: 150px;'' src='data/logo_orma/$logo' />
";
echo'        
 <div>
          



<form>
         <center>';
  echo "<h4><p class='text-uppercase'><strong> $user <strong></p></h4> <br>";

echo'
                <a type="button" class="btn btn-primary" style="width:45%;"" href="orma.php?module=home">Dashboard</a>
               <a type="button" class="btn btn-primary" style="width:45%;"" href="orma.php?module=logout">Logout</a>
         </center>
              
               
</form> 

          

        </div>
 
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>';





    
 ?>




<?php 
}else{
    include('koneksi.php');
echo'
                <div style="padding-top:10px;">
           <form method="post" action="proses_login_orma.php" class="form-signin" style="height: 230px; border: 10px;">

   <img id="profile-img" class="profile-img-card" style="width: 50px; height: 50px;" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" name="user" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
                <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            </form>

        </div>
    </div>
 
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>';
}
?>

<!-- END PANEL LOGIN ORMA -->





                        <div style="border-bottom: 10px; border-color: red;">

 <table align="center" width="100%" border="1px" bgcolor="red" valign="middle">
  </tr>

</table>
                           

<!-- AWAL MENU ORMA -->

<html>
<head>
<meta name="author" content="Suckittrees">
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<div id='menu_ver'>
<ul>
   <li><img style="height: 50px; width: 50px;" src="data/logo/logoputih.png"><a href='orma.php?module=home'><span>Dashboard</span></a></li>
   <li><img style="height: 50px; width: 50px;" src="data/logo/logoputih.png"><a href='orma.php?module=kirim_proposal'><span>Kirim Proposal</span></a></li>
   <li><img style="height: 50px; width: 50px;" src="data/logo/logoputih.png"><a href='orma.php?module=kirim_lpj'><span>Kirim LPJ</span></a></li>
   <li><img style="height: 50px; width: 50px;" src="data/logo/logoputih.png"><a href='orma.php?module=keuangan'><span>Keuangan</span></a></li>
   <li><img style="height: 50px; width: 50px;" src="data/logo/logoputih.png"><a href='orma.php?module=data_proposal'><span>Data Proposal</span></a></li>
   <li><img style="height: 50px; width: 50px;" src="data/logo/logoputih.png"><a href='orma.php?module=data_lpj'><span>Data LPJ</span></a></li> 
   <li><img style="height: 50px; width: 50px;" src="data/logo/logoputih.png"><a href='orma.php?module=Keadministrasian'><span>Keadministrasian</span></a></li>
   <li><img style="height: 50px; width: 50px;" src="data/logo/logoputih.png"><a href='orma.php?module=kontak'><span>Kontak Sema</span></a></li>
   <li><img style="height: 50px; width: 50px;" src="data/logo/logoputih.png"><a href='orma.php?module=logout'><span>Keluar</span></a></li>
  
</ul>
</div>
</body>
</html>

<!-- AKHIR MENU ORMA -->
                       



                        </div>
          </div>
                          

                
                              

                            </div> <!-- end of menu kiri -->

						  	
			<!-- Left side column. contains the logo and sidebar -->
			
			<?php

            if ($_GET['module'] == 'home') {
                include "module/orma/index.php";

			} elseif ($_GET['module'] == 'profil') {
                include "module/home/profil.php";
            } elseif ($_GET['module'] == 'agenda') {
                include "module/home/agenda.php";
            } elseif ($_GET['module'] == 'divisi') {
                include "module/home/divisi.php";
            } elseif ($_GET['module'] == 'struktursema') {
                include "module/home/struktursema.php";

            } elseif ($_GET['module'] == 'logout') {
                include "module/orma/logout.php";
            } elseif ($_GET['module'] == 'profil_orma') {
                include "module/orma/profil_orma.php";
            } elseif ($_GET['module'] == 'update_profil') {
               include "module/orma/action_upd_profil.php";


			} elseif ($_GET['module'] == 'kirim_proposal') {
                include "module/orma/isi_kirim_proposal.php";
            } elseif ($_GET['module'] == 'tambah_proposal') {
                include "module/orma/isi_add_kirimproposal.php";
            } elseif ($_GET['module'] == 'edit_kirim_proposal') {
                include "module/orma/isi_edit_kirimproposal.php";
            } elseif ($_GET['module'] == 'download') {
                include "module/orma/download_kirimproposal.php";
            } elseif ($_GET['module'] == 'hapus_proposal') {
                include "module/orma/hapus_proposal.php";

			} elseif ($_GET['module'] == 'kirim_lpj') {
                include "module/orma/isi_kirim_lpj.php";
            } elseif ($_GET['module'] == 'tambah_lpj') {
                include "module/orma/isi_add_kirimlpj.php";
            } elseif ($_GET['module'] == 'edit_kirim_lpj') {
                include "module/orma/isi_edit_kirimlpj.php";
            } elseif ($_GET['module'] == 'download') {
                include "module/orma/download_kirimlpj.php";
            } elseif ($_GET['module'] == 'hapus_lpj') {
                include "module/orma/hapus_lpj.php";

            } elseif ($_GET['module'] == 'data_proposal') {
                include "module/orma/isi_data_proposal.php";
            } elseif ($_GET['module'] == 'tambah_data_proposal') {
                include "module/orma/isi_add_dataproposal.php";
            } elseif ($_GET['module'] == 'edit_data_proposal') {
                include "module/orma/isi_edit_dataproposal.php";
            } elseif ($_GET['module'] == 'download') {
                include "module/orma/download_dataroposal.php";
            } elseif ($_GET['module'] == 'hapus_dataproposal') {
                include "module/orma/hapus_dataproposal.php";

            } elseif ($_GET['module'] == 'data_lpj') {
                include "module/orma/isi_data_lpj.php";
            } elseif ($_GET['module'] == 'tambah_data_lpj') {
                include "module/orma/isi_add_datalpj.php";
            } elseif ($_GET['module'] == 'edit_data_lpj') {
                include "module/orma/isi_edit_datalpj.php";
            } elseif ($_GET['module'] == 'download') {
                include "module/orma/download_data.php";
            } elseif ($_GET['module'] == 'hapus_datalpj') {
                include "module/orma/hapus_datalpj.php";



            } elseif ($_GET['module'] == 'keuangan') {
                include "module/orma/isi_keuangan.php";
            } elseif ($_GET['module'] == 'Keadministrasian') {
                include "module/orma/isi_keadministrasian.php";
            } elseif ($_GET['module'] == 'kontak') {
                include "module/orma/isi_kontak.php";
            

			
			} elseif ($_GET['module'] == 'sales') {
                include "module/sales/sales.php";
            } elseif ($_GET['module'] == 'tambah_rekap') {
                include "module/rekap_order/form_tambah.php";
            } elseif ($_GET['module'] == 'edit_rekap') {
                include "module/rekap_order/form_edit.php";
            } elseif ($_GET['module'] == 'print_rekap') {
                include "module/rekap_order/print_rekap.php";
            } elseif ($_GET['module'] == 'search') {
                include "module/sales/form_cari.php";
            }

            else {
            	 include "module/orma/index.php";
            }
			?>



</div>
</div>

                        </div> <!--end of col-md-12-->
			   
			 <div id="footer" style="background-color: #50285d;">
     <center>Copyright@Senat Mahasiswa 2017 </center>  
     </div>
</div>  
			<!-- Control Sidebar -->

			<!-- Add the sidebar's background. This div must be placed
			immediately after the control sidebar -->
			<div class="control-sidebar-bg"></div>

		</div><!-- ./wrapper -->

		<!-- jQuery 2.1.4 -->
		<script src="asset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
		<!-- Bootstrap 3.3.5 -->
		<script src="asset/bootstrap/js/bootstrap.min.js"></script>
		<!-- FastClick -->
		<script src="asset/plugins/fastclick/fastclick.min.js"></script>
		<!-- AdminLTE App -->
		<script src="asset/dist/js/app.min.js"></script>
		<!-- Sparkline -->
		<script src="asset/plugins/sparkline/jquery.sparkline.min.js"></script>
		<!-- jvectormap -->
		<script src="asset/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
		<script src="asset/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
		<!-- SlimScroll 1.3.0 -->
		<script src="asset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
		<!-- ChartJS 1.0.1 -->
		<script src="asset/plugins/chartjs/Chart.min.js"></script>
		<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
		<script src="asset/dist/js/pages/dashboard2.js"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="asset/dist/js/demo.js"></script>

		<script type="text/javascript">
			
			function editPrice(a,b,c) {
				console.log({ a,b,c });
			}

		</script>

		<script type="text/javascript">

		  $('#newquotation').modal({
		  	backdrop:'static',
		    keyboard: false
		  });

		  $('#newquotation').modal('hide')
		  
		  <?php
		    if(isset($_SESSION['formData'])){
		    	if(array_key_exists('quotationNo', $_SESSION['formData']) ){
		      ?>
		      
		      	$('#newquotation').modal('show');

		      <?php
		  		}
		    }
		  ?>

		  <?php
		    if(isset($_SESSION['formDataUpdate'])){
		    	if(array_key_exists('quotationNo', $_SESSION['formDataUpdate'])){
		      ?>
		      
		      	$('#edit<?php echo $_SESSION['formDataUpdate']['sales_id']; ?>').modal('show');

		      <?php
		  		}
		    }
		  ?>
		  
			
		  <?php
		    if(isset($_SESSION['formDataUpdateQuotation'])){
		    	if(array_key_exists('quotationNo', $_SESSION['formDataUpdateQuotation']) || (trim($_SESSION['formDataUpdateQuotation']['sales_id']) !== '') ){
		      ?>
		      
		      	$('#edit<?php echo $_SESSION['formDataUpdateQuotation']['sales_id']; ?>').modal('show');

		      <?php
		  		}
		    }
		  ?>

		  <?php
		    if(isset($_SESSION['formDataQuotation'])){
		      ?>
		      
		      	$('#newquotation').modal('show');

		      <?php
		    }
		  ?>

		  <?php
		    if(isset($_SESSION['formDataUpdatePO'])){
		    	if(array_key_exists('sales_id', $_SESSION['formDataUpdatePO'])){
		      ?>
		      
		      	$('#po<?php echo $_SESSION['formDataUpdatePO']['sales_id']; ?>').modal('show');

		      <?php
		  		}
		    }
		  ?>
		 

		  function changValQuotation(a,b,c){
		  	var total = b*c;
		  	$('#totalQuotationListUpdate'+a).html(total);
		  }

		  function changValQuotationSaved(a,b,c){
		  	console.log({a,b,c})
		  	var total = b*c;
		  	$('#totalQuotationListSaved'+a).html(total);
		  }

		  /* get price and wty from select */
		  function setPriceQtyQuotation(el,a){
		  	console.log(a);

		  	$.ajax({
		  		url : 'module/sales/aksi_salesall.php',
		  		type : 'post',
		  		data : { aksi_getPriceQty : 'adajah', pp_id : a },
		  		success : function(data){
		  			console.log(data);
		  			// set value qty
		  			var td = el.parent();
		  			var tr = td.parent();

		  			tr.find('.qty').val(data.pp_qty);
		  			tr.find('.price').val(data.pp_price);
		  		}

		  	});
		  }
		</script>

	      <script type="text/javascript" src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
	      <script type="text/javascript">
	      

	        tinymce.init({
	          selector: '#artikel',
	          height: 500,
	          theme: 'modern',
	          plugins: [
	            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
	            'searchreplace wordcount visualblocks visualchars code fullscreen',
	            'insertdatetime media nonbreaking save table contextmenu directionality',
	            'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
	          ],
	          toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
	          toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
	          image_advtab: true
	         });


	      </script>

	</body>
</html>

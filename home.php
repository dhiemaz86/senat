<?php session_start(); ?>
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

		<link rel="stylesheet" href="asset/bootstrap/css/bootstrap.css">
		<!-- AdminLTE Skins. Choose a skin from the css/skins
		folder instead of downloading all of them to reduce the load. -->
		<link rel="stylesheet" href="asset/dist/css/skins/_all-skins.min.css">
	</head>


	<body class="hold-transition skin-purple sidebar-mini container" style="background-color: silver;" 
	>
		<div class="wrapper">

			<header class="main-header" style="background-color: #53176b;">

				<!-- Logo -->
				<a href="home.php?module=home" class="logo" style="color: white;"> 
				<b>Senat </b>Mahasiswa </a>

				<!-- Header Navbar: style can be found in header.less -->
				<nav class="navbar navbar-static-top" role="navigation" style="background-color: #601c7a; color: white;">
					<!-- Sidebar toggle button 
					"
					-->
					
					<!-- Navbar Right Menu -->
					
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">


					
					</li>
					<li><a href="home.php?module=home"> Home</a></li>
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
			

			<div class="col-md-12" style="background-color: #eeeeee">

				<div style="padding-top:30px;">
				  
							<div class="col-md-9">
					 	<!-- Wrapper untuk slides -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="data/images/ndass1.jpg" alt="slide1"> 
      </div>
      <div class="item">
        <img src="data/images/ndass3.jpg" alt="slide1"> 
      </div>
      <div class="item">
        <img src="data/images/ndass2.jpg" alt="slide1"> 
      </div>
      <div class="item">
        <img src="data/images/ndass3.jpg" alt="slide1"> 
      </div>

    </div>
    
      						</div>
      						</div>
					
							<div class="col-md-3" style="background-color: silver">

				<div style="padding-right: 10px;">

<!-- AWAL PANEL LOGIN ORMA -->
			

						


    <head>

        <title>Senat Mahasiswa</title>
       
        <link href="asset/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
        <link href="asset/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" media="screen">
        <link href="asset/bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="screen">
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
    <script src="asset/bootstrap/js/jquery.js" type="text/javascript"></script>
    <script src="asset/bootstrap/js/bootstrap.js" type="text/javascript"></script>


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

<div class="profile-img-card"></div>
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
   <center> <img id='profile-img' class='profile-img-card' style='width: 150px; height: 150px;'' src='data/logo_orma/$logo' /> </center>
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

          

        </div>  </div>
 
    <script src="assets/bootstrap/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>';





    
 ?>




<?php 
}else{
    include('koneksi.php');
echo'
                <div style="padding-top:10px;">
           <form method="post" action="home.php?module=login_orma" class="form-signin" style="height: 230px; border: 10px;">

   <center><img id="profile-img" class="profile-img-card" style="width: 50px; height: 50px;" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" /></center>
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
 
    <script src="assets/bootstrap/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>';
}
?>
				

<!-- AKHIR PANEL LOGIN ORMA -->



							</div>
				</div>	
				<hr width="100%" style="background-color:grey;">
						   
			<!-- Left side column. contains the logo and sidebar -->
			
			<?php

            if ($_GET['module'] == 'home') {
                include "module/home/index.php";

			} elseif ($_GET['module'] == 'profil') {
                include "module/home/profil.php";
            } elseif ($_GET['module'] == 'agenda') {
                include "module/home/agenda.php";
            } elseif ($_GET['module'] == 'divisi') {
                include "module/home/divisi.php";
            } elseif ($_GET['module'] == 'struktursema') {
                include "module/home/struktursema.php";
            } elseif ($_GET['module'] == 'kontak') {
                include "module/home/isi_kontak.php";
             } elseif ($_GET['module'] == 'berita') {
                include "module/home/isi_readmore.php";
            } elseif ($_GET['module'] == 'login_orma') {
                include "module/orma/proses_login_orma.php";
            } elseif ($_GET['module'] == 'aspirasi') {
                include "module/home/chat/proses.php";

            } elseif ($_GET['module'] == 'edit_user') {
               include "module/marketing_sales/edit_user.php";
            } elseif ($_GET['module'] == 'edit_user') {
               include "module/marketing_sales/edit_user.php";
           } elseif ($_GET['module'] == 'print_user') {
               include "module/marketing_sales/print_user.php";
           }

            else {
            	 include "module/home/index.php";
            }
			?>



</script>
</div>
			<div style="padding-top: 70px; background-color: #eeeeee"></div>  

			 <div id="footer" style="background-color: #50285d; color: white; height: 50px; padding-top: 15px;">
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


<link rel="stylesheet" href="dist/css/bootstrap.css" type="text/css"/>
<meta charset="utf-8">      

    <!-- some pretty fonts for this demo page - not required for the slider -->
    <link href='http://fonts.googleapis.com/css?family=Source+Code+Pro|Open+Sans:300' rel='stylesheet' type='text/css'> 

    <!-- demo.css contains additional styles used to set up this demo page - not required for the slider --> 
    <link rel="stylesheet" href="demo.css">

    <!-- load jQuery and the plugin -->
	<style>
.komentar {
    border: 1px solid #5cb85c;
	border-radius :4px;
    width: 500px;
    height: 300px;
    overflow: scroll;
}
</style>
	
    <script src="dist/js/jquery.validate.js"></script>
    <script>
    $(document).ready(function(){
        $("#formku").validate();
    });
    </script> 
    
    <style type="text/css">
    label.error {
        color: red;
        padding-left: .5em;
    }
    </style>
    
    <script type="text/javascript">
    x=0;
    $(document).ready(function(){
       $(".komentar").scroll(function(){
        $("span").text(x+=1);
       }); 
    });
    </script>


<center>
<form id="formku" method="post" action="home.php?module=aspirasi" onsubmit="return formCheck(this);" >
<table style="font-style: oblique; font-weight: bold;">
<tr>
<td width="150">Nama</td>
<td width="30">:</td>
<td width="550"><input type="text" name="nama" size="30" class="form-control" minlength="3" placeholder="Nama Anda" required /></td>
</tr>
<tr>
<td width="150">NIM</td>
<td width="30">:</td>
<td width="550"><input type="text" name="email" size="10" class="form-control" minlength="10" maxlength="10" placeholder="Masukan NIM" required-email /></td>
</tr>
<tr>
<td width="150">Komentar</td>
<td width="30">:</td>
<td width="550"><input name="komentar" placeholder="Isi Aspirasi" size="2500" class="form-control" minlength="3"></td>
</tr>
<tr>
<td width="150"></td>
<td width="30"></td>
<td width="550">
<button type="submit" class="btn btn-info btn-sm">Kirim <span class="glyphicon glyphicon-send"></span></button>
<button type="reset" class="btn btn-warning btn-sm">batal <span class="glyphicon glyphicon-refresh"></span></button>
</td>
</tr>
</table>
</form>
</center>

<script src="dist/js/bootstrap.js"></script>

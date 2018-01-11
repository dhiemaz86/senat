<link rel="stylesheet" href="../module/home/chat/dist/css/bootstrap.css" type="text/css"/>
<meta charset="utf-8">      

    <!-- some pretty fonts for this demo page - not required for the slider -->
    <link href='http://fonts.googleapis.com/css?family=Source+Code+Pro|Open+Sans:300' rel='stylesheet' type='text/css'> 

    <!-- demo.css contains additional styles used to set up this demo page - not required for the slider --> 
    <link rel="stylesheet" href="../module/home/chat/demo.css">

    <!-- load jQuery and the plugin -->
	<style>
.komentar {
    border: 1px solid #5cb85c;
	border-radius :4px;
    width: 100%;
    height: 300px;
    overflow: scroll;
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

<div class="komentar">
<?php
echo "<head><title>My Guest Book</title></head>";
$fp = fopen("../module/home/chat/guestbook.txt","r");
echo "<table border=0>";

while ($isi = fgets($fp,250))
{
$pisah = explode("|",$isi);
echo "<tr><td>$pisah[0], $pisah[1], $pisah[2]</td></tr>";
echo "<tr><td><font color=brown>$pisah[3]</font> ($pisah[4]), Menyuarakan</td></tr>";
echo "<tr><td>$pisah[5]<hr/></td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>";
}
echo "</table>"; 
?>
<script src="../module/home/chat/dist/js/bootstrap.js"></script>

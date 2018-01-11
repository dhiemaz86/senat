<?php
$file = "../module/home/chat/guestbook.txt";
$data = "";
$put = file_put_contents($file, $data);

if(isset($put)){
echo "Ok!";
echo "<script> window.location = 'adminweb.php?module=home'</script>";
}else{
echo "Failed";
echo "<script> window.location = 'adminweb.php?module=home'</script>";


}
?>
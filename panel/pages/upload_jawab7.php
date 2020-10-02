<?php
if(!isset($_COOKIE['beeuser']) && $_COOKIE['beelogin'] == "admin"){
  header("Location: login.php");
} //checking the cookies so the hacker cant injecting it without login first
include "../../config/server.php";
$uploaddir = '../../pictures/'; 
$namafile = basename($_FILES['uploadfile7']['name']);
$file = $uploaddir . basename($_FILES['uploadfile7']['name']); 
 if (move_uploaded_file($_FILES['uploadfile7']['tmp_name'], $file)) { 
//$sql = mysql_query("update cbt_admin set XLogo = '$namafile'");
  echo "success"; 
} else {
//	echo "error";
}

?>

<?php 



ob_start();
session_start();


if ($_SESSION["kul_ad"]) {
  header("Location:index.php");
}
else{
header("Location:login.php");


 ?>
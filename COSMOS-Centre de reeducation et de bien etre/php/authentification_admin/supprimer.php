<?php
include("../connection.php");
seConnecter();
$idR=$_GET['idR'];
$requete="DELETE FROM `pfc2a4`.`authentification` WHERE `authentification`.`id` = '$idR';";
if (mysql_query($requete))
 header("location:liste.php");
 
?>
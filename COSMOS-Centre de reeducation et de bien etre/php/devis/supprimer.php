<?php
include("../connection.php");
seConnecter();
$idR=$_GET['idR'];
$requete="DELETE FROM `devis` WHERE `id_devis`='$idR'";
if (mysql_query($requete))
   header("location:liste.php");
?>
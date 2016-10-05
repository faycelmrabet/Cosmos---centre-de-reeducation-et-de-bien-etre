<?php
include("../connection.php");
seConnecter();
$id_compte=$_GET['idR'];
$requete="DELETE FROM `inscription` WHERE `id_compte`='$id_compte'";
if (mysql_query($requete))
   header("location:liste.php");
?>
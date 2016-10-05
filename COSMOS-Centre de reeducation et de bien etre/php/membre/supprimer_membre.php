<?php
include("../connection.php");
seConnecter();
$id_supprimer=$_GET['idR'];
$requete="delete from `pfc2a4`.`membre` where id_membre='$id_supprimer'";
if (mysql_query($requete))
   header("location:liste.php");
?>
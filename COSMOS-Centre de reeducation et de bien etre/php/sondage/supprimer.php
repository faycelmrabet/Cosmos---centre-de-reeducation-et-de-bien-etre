<?php
include("../connection.php");
seConnecter();
$id_supprimer=$_GET['idR'];
$requete="DELETE FROM `pfc2a4`.`sondage_reponses` WHERE `sondage_reponses`.`id` = '$id_supprimer'";
if (mysql_query($requete))
header("location:liste.php");
?>
<?php
include("../connection.php");
seConnecter();
$id_supprimer=$_GET['idR'];
$requete="DELETE FROM `Avis` WHERE id_personne='$id_supprimer'";
if (mysql_query($requete))
   header("location:liste.php");
?>
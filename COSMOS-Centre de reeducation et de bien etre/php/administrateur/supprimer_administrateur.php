<?php
include("../connection.php");
seConnecter();
$id_asupprimer=$_GET['idR'];
$requete="delete from administrateur where id_administrateur='$id_asupprimer'";
if (mysql_query($requete))
   header("location:liste.php");
?>
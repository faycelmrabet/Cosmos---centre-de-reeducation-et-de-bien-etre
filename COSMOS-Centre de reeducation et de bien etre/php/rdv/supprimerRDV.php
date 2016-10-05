<?php
include("../connection.php");
seConnecter();

$idr=$_GET['idr'];

$requete="delete from `pfc2a4`.`rendez_vous` where id='$idr';";
if (mysql_query($requete))
header("location:liste1.php");

?>

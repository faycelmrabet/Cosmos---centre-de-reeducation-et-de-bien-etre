<?php
include("../connection.php");
seConnecter();

$categoriesR=$_POST['categories'];
$famillesR=$_POST['familles'];
if (isset ($_POST['Prestation1'])) $a=$_POST['Prestation1']." "; else $a="";
if (isset ($_POST['Prestation2'])) $b=$_POST['Prestation2']." "; else $b="";
$_POST['prestation']=$a.$b;
$prestationR=$_POST['prestation'];
$dureeR=$_POST['duree'];
$prixR=$_POST['prix'];
if (isset ($_POST['Prestataire1'])) $a=$_POST['Prestataire1']." "; else $a="";
if (isset ($_POST['Prestataire2'])) $b=$_POST['Prestataire2']." "; else $b="";
if (isset ($_POST['Prestataire3'])) $c=$_POST['Prestataire3']." "; else $c="";
if (isset ($_POST['Prestataire4'])) $d=$_POST['Prestataire4']." "; else $d="";
if (isset ($_POST['Prestataire4'])) $d=$_POST['Prestataire5']." "; else $e="";
$_POST['prestataire']=$a.$b.$c.$d.$e;
$prestataireR=$_POST['prestataire'];
$dateRDV = $_POST['s_date'];
$heureRDV = $_POST['A13'];
$idr=$_POST['id'];
$nomR=$_POST['name'];
echo $dateRDV;
echo '<br>';
echo $heureRDV;

$heures = array(
1 => '',
'08:00',
'08:15',
'08:30',
'08:45',
'09:00',
'09:15',
'09:30',
'09:45',
'10:00',
'10:15',
'10:30',
'10:45',
'11:00',
'11:15',
'11:30',
'11:45',
'12:00',
'12:15',
'12:30',
'12:45',
'13:00',
'13:15',
'13:30',
'13:45',
'14:00',
'14:15',
'14:30',
'14:45',
'15:00',
'15:15',
'15:30',
'15:45',
'16:00',
'16:15',
'16:30',
'16:45',
'17:00',
'17:15',
'17:30',
'17:45',
'18:00',
'18:15',
'18:30',
'18:45',
'19:30'
);
echo '<br>';
$heure_choisi = $heures[$heureRDV];
echo $heure_choisi;
$requete="UPDATE `rendez_vous` SET `id`='$idr',`nom`='$nomR',`categories`='$categoriesR',`familles`='$famillesR',
`prestation`='$prestationR',`prestataire`='$prestataireR',`duree`='$dureeR',`prix`='$prixR',`date_rdv`='$dateRDV',`heure_rdv`='$heure_choisi'  WHERE `pfc2a4`.`rendez_vous`.id='$idr'; ";

if (mysql_query($requete))
header ("location:liste.php");
else
	 echo "insertion KO";

?>

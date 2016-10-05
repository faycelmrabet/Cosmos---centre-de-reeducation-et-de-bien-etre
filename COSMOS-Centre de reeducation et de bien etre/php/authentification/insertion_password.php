<?php
include("../connection.php");
seConnecter();
if(isset($_POST['mail']))
{
$req="SELECT count(*) FROM `pfc2a4`.`inscription` WHERE  `mail` ='".$_POST['mail']."'";
$res=mysql_query($req);
if(mysql_result($res,0)==0)
{
		$nomR=$_POST['nom'];
		$loginR=$_POST['login'];
		$mailR=$_POST['mail'];
		$passwordR=$_POST['password'];
		$verif_passwordR=$_POST['verif'];
		
		
		
$requete="INSERT INTO  `pfc2a4`.`inscription` (
`Nom` ,
`id_compte` ,
`Login` ,
`mail` ,
`password` ,
`verif_password`
)
VALUES (
'$nomR', NULL ,  '$loginR',  '$mailR',  '$passwordR',  '$verif_passwordR'
);";
if(mysql_query($requete))
header("location:../../index-4.php");
else
echo "insertion KO";
}
else
{
header("location:../../inscription.php");
}
}
?>
<?php
		include("../connection.php");
	    seConnecter();
		
		 $nomR=$_POST['nom'];
		 $prenomR=$_POST['prenom'];
		 $telephoneR=$_POST['telephone'];
		 $adresseR=$_POST['adresse'];
		 $mailR=$_POST['mail'];
		
		
$requete="INSERT INTO `pfc2a4`.`administrateur` (
`id_administrateur` ,
`nom` ,
`prenom` ,
`telephone` ,
`adresse` ,
`mail`
)
VALUES (
NULL , '$nomR', '$prenomR', '$telephoneR', '$adresseR', '$mailR'
);";
  if(mysql_query($requete))
{
header("location:../../index-4-1.php");
}
else
echo "insertion KO";
?>
		
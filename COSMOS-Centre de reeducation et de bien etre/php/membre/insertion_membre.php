		<?php
		include("../connection.php");
	    seConnecter();
		
		$nomR=$_POST['nom'];
		$prenomR=$_POST['prenom'];
		$telephoneR=$_POST['telephone'];
		$adresseR=$_POST['adresse'];
		$mailR=$_POST['mail'];
		$messageR=$_POST['message'];
		
		
$requete="INSERT INTO `pfc2a4`.`membre` (
`id_membre` ,
`nom` ,
`prenom` ,
`telephone` ,
`adresse` ,
`mail` ,
`message`
)
VALUES (
NULL ,'$nomR','$prenomR','$telephoneR','$adresseR','$mailR','$messageR');";
  if(mysql_query($requete))
echo "insertion reussie";
else
echo "insertion KO";
	  ?>
		
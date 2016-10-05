		<?php
		include("../connection.php");
	    seConnecter();
		
		$nomR=$_POST['nom'];
		$prenomR=$_POST['prenom'];
		$objetR=$_POST['objet'];
		$messageR=$_POST['message'];
		
		
$requete="INSERT INTO  `pfc2a4`.`Avis` (
`id_personne` ,
`Nom` ,
`Prenom` ,
`Objet` ,
`Message`
)
VALUES (
NULL ,  '$nomR',  '$prenomR',  '$objetR',  '$messageR'
);";

  if(mysql_query($requete))
echo "insertion reussie";
else
echo "insertion KO";
	  ?>
		
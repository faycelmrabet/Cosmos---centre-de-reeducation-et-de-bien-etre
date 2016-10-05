		<?php
		include("../connection.php");
	    seConnecter();
		$prixR=$_POST['prix'];
		$tvaR=$_POST['tva'];
		
		
$requete="INSERT INTO  `pfc2a4`.`devis` (
`id_devis` ,
`id` ,
`prix` ,
`tva` ,
`net_a_payer`
)
VALUES (
NULL ,NULL,  '$prixR',  '$tvaR',net_a_payer
);";
  if(mysql_query($requete))
echo "insertion reussie";
else
echo "insertion KO";
	  ?>
		
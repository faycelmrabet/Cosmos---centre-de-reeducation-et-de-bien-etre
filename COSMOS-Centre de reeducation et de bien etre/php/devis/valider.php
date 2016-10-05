<?php
		include("../connection.php");
	    seConnecter();
		$id_devisR=$_POST['idR'];
		$idR=$_POST['id'];
		$prix=$_POST['prix'];
		$tva=$_POST['tva'];
		$net_a_payer=$_POST['net_a_payer'];
$requete="UPDATE  `pfc2a4`.`devis` SET  `id` =  '$idR',`prix` =  '$prix',
`tva` =  '$tva',`net_a_payer` =  '$net_a_payer' WHERE  `pfc2a4`.`devis`.`id_devis` ='$id_devisR';";
/*$requete="update devis join rendez_vous on rendez_vous.id=devis.id 
set '$prix'=devis.prix=rendez_vous.prix,'$net_a_payer'=devis.net_a_payer=devis.prix*devis.tva+devis.prix WHERE  `pfc2a4`.`devis`.`id_devis` ='$id_devisR';";*/

if(mysql_query($requete))
   {
   echo"Modification effectuée avec succés";
     header("location:modifier.php");
   
   }
   else
   echo "Modfication non aboutie";
?>

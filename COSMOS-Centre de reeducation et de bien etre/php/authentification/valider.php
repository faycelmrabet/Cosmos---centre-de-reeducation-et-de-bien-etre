<?php
include("../connection.php");
	    seConnecter();
		$idR=$_POST['id_compte'];
		$nomR=$_POST['nom'];
		$loginR=$_POST['login'];
		$mailR=$_POST['mail'];
		$passwordR=$_POST['password'];
		$verif_passwordR=$_POST['verif'];

$requete="UPDATE  `pfc2a4`.`inscription` SET  `Nom` =  '$nomR',
`Login` =  '$loginR',`mail` =  '$mailR',`password` =  '$passwordR',`verif_password` =  '$verif_passwordR' WHERE  `pfc2a4`.`inscription`.`id_compte` ='$idR';";


if(mysql_query($requete))
   {
   echo"Modification effectuée avec succés";
     header("location:modifier_compte.php");
   
   }
   else
      echo "Modfication non aboutie";
	  
?>

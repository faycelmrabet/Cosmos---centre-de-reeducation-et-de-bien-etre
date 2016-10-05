
<?php
include("../connection.php");
	    seConnecter();
		$idR=$_POST['idR'];
		$loginR=$_POST['login'];
		$passwordR=$_POST['password'];
	

$requete="UPDATE  `pfc2a4`.`authentification` SET  
`login` =  '$loginR',`password` =  '$passwordR' WHERE  `pfc2a4`.`authentification`.`id` ='$idR';";


if(mysql_query($requete))
   {
   echo"Modification effectuée avec succés";
     header("location:modifier.php");
   
   }
   else
      echo "Modfication non aboutie";
	  ?>
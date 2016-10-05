<?php
		include("../connection.php");
	    seConnecter();
		$idR=$_POST['id'];
		$question=$_POST['question'];
	
		


$requete="UPDATE  `pfc2a4`.`sondage_questions` SET  `question` =  '$question' WHERE  `sondage_questions`.`id` ='$idR'";


if(mysql_query($requete))
   {
   echo"Modification effectuée avec succés";
     header("location:modifier.php");
   
   }
   else
   echo "Modfication non aboutie";
?>

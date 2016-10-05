
<?php
		include("../connection.php");
	    seConnecter();
		$idR=$_POST['id'];
		$titre=$_POST['sujet'];
		$courriel=$_POST['newsletter'];
		if(isset($_POST['annee']) && isset($_POST['mois']) && isset($_POST['jour']))
		{
		$date = $_POST['annee'].'-'.$_POST['mois'].'-'.$_POST['jour'];
		}


$requete="UPDATE  `pfc2a4`.`newsletter` SET  `titre` =  '$titre',
`courriel` =  '$courriel',`date` =  '$date' WHERE  `pfc2a4`.`newsletter`.`id` ='$idR';";


if(mysql_query($requete))
   {
   echo"Modification effectuée avec succés";
     header("location:modifier.php");
   
   }
   else
   echo "Modfication non aboutie";
?>

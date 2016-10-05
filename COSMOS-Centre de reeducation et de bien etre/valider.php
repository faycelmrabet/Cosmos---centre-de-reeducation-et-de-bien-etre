<?php
include("php/connection.php");
seConnecter();
$cle = $_GET['cle'];
$req="SELECT cle,actif FROM `pfc2a4`.`inscription` where actif !=1";
$res=mysql_query($req); 
if($row =mysql_fetch_assoc($res))
{
$clebdd=$row['cle'];
$actif=$row['actif'];
}

if($actif==0) // Si ce n'est pas le cas on passe aux comparaisons
  {
     if($cle != $clebdd) // On compare nos deux clés	
       {
          // Si elles correspondent on active le compte !	
         
	
          // La requête qui va passer notre champ actif de 0 à 1
          $req2="UPDATE  `pfc2a4`.`inscription` SET  `actif` = 1 ";
		  if(mysql_query($req2))
			{
			 header("location:index.html");		
			}
       }
     else // Si les deux clés sont différentes on provoque une erreur...
       {
          echo "Erreur ! Votre compte ne peut être activé...";
       }
  }
	  ?>
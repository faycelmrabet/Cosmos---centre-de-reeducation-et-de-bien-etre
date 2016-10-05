
<?php
$idr=$_POST['id_administrateur'];
$nomR=$_POST['nom'];
$prenomR=$_POST['prenom'];
$telephoneR=$_POST['telephone'];
$adresseR=$_POST['adresse'];
$mailR=$_POST['mail'];



include("../connection.php");
seConnecter();


$requete="UPDATE  `pfc2a4`.`administrateur` SET  `nom` =  '$nomR',
`prenom` =  '$prenomR',
`telephone` =  '$telephoneR',
`adresse` =  '$adresseR',
`mail` =  '$mailR' WHERE  `administrateur`.`id_administrateur` ='$idr'";



if(mysql_query($requete))
   {
   echo"Modification effectuée avec succés";
     header("location:modifier_administrateur.php");
   
   }
   else
      echo "Modfication non aboutie";
	  ?>
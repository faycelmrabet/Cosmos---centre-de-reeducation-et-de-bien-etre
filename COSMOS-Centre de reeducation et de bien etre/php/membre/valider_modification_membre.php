
<?php
$idR=$_POST['id_membre'];
$nomR=$_POST['nom'];
$prenomR=$_POST['prenom'];
$telephoneR=$_POST['telephone'];
$adresseR=$_POST['adresse'];
$mailR=$_POST['mail'];
$messageR=$_POST['message'];


include("../connection.php");
seConnecter();


$requete="UPDATE  `pfc2a4`.`membre` SET  `nom` =  '$nomR',
`prenom` =  '$prenomR',
`telephone` =  '$telephoneR',
`adresse` =  '$adresseR',
`mail` =  '$mailR',
`message` =  '$messageR' WHERE  `pfc2a4`.`membre`.`id_membre` ='$idR';";


if(mysql_query($requete))
   {
   echo"Modification effectuée avec succés";
     header("location:modifier_membre.php");
   
   }
   else
      echo "Modfication non aboutie";
	  ?>

<?php
$idR=$_POST['id_personne'];
$nomR=$_POST['nom'];
$prenomR=$_POST['prenom'];
$objetR=$_POST['objet'];
$messageR=$_POST['message'];


include("../connection.php");
seConnecter();


$requete="UPDATE  `pfc2a4`.`avis` SET  `Nom` =  '$nomR',
`Prenom` =  '$prenomR',
`Objet` =  '$objetR',
`Message` =  '$messageR' WHERE  `pfc2a4`.`avis`.`id_personne` ='$idR';";


if(mysql_query($requete))
   {
   echo"Modification effectuée avec succés";
     header("location:modifier_avis.php");
   
   }
   else
      echo "Modfication non aboutie";
	  ?>
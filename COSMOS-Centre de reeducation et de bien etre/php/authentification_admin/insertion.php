	<?php
		include("../connection.php");
	    seConnecter();		
		$loginR=$_POST['login'];
		$passwordR=$_POST['password'];

		
		
		
$requete="INSERT INTO  `pfc2a4`.`authentification` (`id` ,
`login` ,
`password` )
VALUES (NULL ,'$loginR','$passwordR')";


  if(mysql_query($requete))
header("location:../../inscription_admin.php");
else
echo "insertion KO";
	  ?>
		
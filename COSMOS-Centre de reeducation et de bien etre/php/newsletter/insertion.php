<?php
		include("../connection.php");
	    seConnecter();
		$titre=$_POST['sujet'];
		$courriel=$_POST['newsletter'];
		if(isset($_POST['annee']) && isset($_POST['mois']) && isset($_POST['jour']))
		{
		$date = $_POST['annee'].'-'.$_POST['mois'].'-'.$_POST['jour'];
		}
		$query="INSERT INTO  `pfc2a4`.`newsletter` (`id` ,`titre` ,`courriel` ,`date`)VALUES (NULL ,  '$titre',  '$courriel',  '$date');";;
		if(mysql_query($query))
		header("location:newsletter.php");
		else
		echo "insertion KO";
?>
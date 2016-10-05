<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['l']) && isset($_SESSION['p']))
{
echo "Bonjour:<b>".$_SESSION['l']."";
?>
<html lang="en">
    <head>
    <title>Contacts</title>
    <meta charset="utf-8">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="icon" href="../../images/logo.png" type="../../image/x-icon">
    <link rel="shortcut icon" href="../../images/logo1.ico" type="../../image/x-icon" />
    <script src="../../js/jquery.js"></script>
    <script src="../../js/jquery-migrate-1.1.1.js"></script>
    <script src="../../js/bgstretcher.js"></script>
<script>
	$(function(){
      $('BODY').bgStretcher({
        images: ['../../images/slide-1.jpg','../../images/slide-2.jpg','../../images/slide-3.jpg'],
		imageWidth: 1600, 
		imageHeight: 964, 
		resizeProportionally:true,
			slideDirection: 'N',
			slideShowSpeed: 1000,
			transitionEffect: 'fade',
			sequenceMode: 'normal',		
			pagination: '#nav'
	
       });	
    });
	
	
</script>

   

    </head>
    <body>
<div class="extra-block"> 
      <div class="row-top">
    <div class="main">
          <ul class="list-soc">
		 <?php  echo "<span id=\"menu\"><li> <a href=\"../logout1.php\"> Se déconnecter? </a> </li></span>"; ?>
      </ul>
        </div>
  </div>
      
      
   <header>
    <div class="row-nav">
        <div class="main"> 
         <h1 class="logo"><a href="../../index0.php"><img alt="Eni Gma" src="../../images/logo.png"></a></h1>
        <nav>
			<ul class="menu">
            <li><a href="../../index0.php">Accueil</a></li>
            <li><a href="../../index-1.php">A propos</a></li>
            <li><a href="../../index-2.php">Services</a></li>
            <li><a href="../../index-3-1.php">Galeries</a></li>
            <li class="current"><a href="../../index-4.php">Contacts</a></li>	
			</ul>
        </nav>
        <div class="clear"></div>
      </div>
      </div>
  </header>
  
  
   <section id="content"><div class="ic"></div>  
    <div class="main-block">
    <div class="container_12">
         <div class="wrapper border-vert">
        <article class="grid_5">
		<span id="menu">
			<span class="tableaux">
			<fieldset >
			<legend>Sondage</legend>
			<?php
// on se connecte à notre base de données
include ("../connection.php");
seConnecter();

// on selectionne la question et l'id du sondage en cours
$sql = 'SELECT id, question FROM sondage_questions ORDER BY id DESC LIMIT 0,1';

// on lance la requête
$req = mysql_query ($sql) or die ('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());

// on récupère le résultat dans un tableau associatif
$data = mysql_fetch_array ($req);

// on libère l'espace mémoire alloué à cette requête

$nb_sondage = mysql_num_rows($req);
mysql_free_result ($req);

if ($nb_sondage == 0) {
	echo 'Aucun sondage.';
}
else {

	// on affiche la question
	echo stripslashes(htmlentities(trim($data['question']))),'<br />';

	// on déclare un tableau qui contiendra les réponses de notre sondage
	$tableau_reponses = array();

	// on déclare un tableau qui contiendra le nombre de réponse à chaque question
	$tableau_nb_reponses = array();

	// on selectionne les reponses de ce sondage
	$sql = 'SELECT reponse, nb_reponses FROM sondage_reponses WHERE id_sondage="'.$data['id'].'"';

	// on lance la requête
	$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());

	// on prépare notre boucle pour récupérer les différents choix possibles de réponses
	while ($data = mysql_fetch_array($req)) {
	// on place ces valeurs dans nos deux tableaux
	$tableau_reponses[] = $data['reponse'];
	$tableau_nb_reponses[] = $data['nb_reponses'];
	}

	// on libère l'espace mémoire alloué à cette requête
	mysql_free_result ($req);

	

	// on compte le nombre de réponses possible de notre sondage
	$nb_reponses_du_sondage = count ($tableau_reponses);

	// on compte le nombre total de réponses pour ce sondage
	$nb_total_reponse = array_sum ($tableau_nb_reponses);

	// on teste le nombre de vote
	if ($nb_total_reponse == 0) {
	// cas où personne n'a voté
	echo "Aucun vote pour l'instant";
	}
	else {
	// cas où quelqu'un a déjà voté
	for ($i = 0; $i < $nb_reponses_du_sondage; $i++) {
		// on affiche une réponse
		echo $tableau_reponses[$i];

		// on calcul le pourcentage de cette réponse
		$pourcentage = ($tableau_nb_reponses[$i] * 100) / $nb_total_reponse;

		// on arrondi ce calcul à un chiffre après la virgule
		$pourcentage = round ($pourcentage, 1);

		// on affiche le pourcentage
		echo ' ',$pourcentage,' %<br />';
	}

	// on affiche le nombre total de votes
	echo '<br /><br />Nombre de votes : ', $nb_total_reponse;
	}
}
?>
			</fieldset >
			</span>
		</span>
        
        </article>
		<article class="grid_5 prefix_2">
		<span class="tableaux1">
		<fieldset >
		<legend>Adresse Postal</legend>
		
         <div class="map">
        <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=Tunis+Centre,+Tunis,+Tunisia&amp;daddr=Manouba,+Tunis,+Tunisia&amp;hl=en&amp;geocode=FTR_MQIdjWabACnvUDcoEzT9EjEhkNUn4J9DYg%3BFWKkMQIddyGaAClRtpdpajL9EjGHVL84uUkZrg&amp;aq=0&amp;oq=manou&amp;sll=33.886917,9.537499&amp;sspn=10.425352,21.643066&amp;dirflg=r&amp;ttype=now&amp;noexp=0&amp;noal=0&amp;sort=def&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;start=0&amp;ll=36.807778,10.130502&amp;spn=0.05633,0.129136&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=d&amp;source=embed&amp;saddr=Tunis+Centre,+Tunis,+Tunisia&amp;daddr=Manouba,+Tunis,+Tunisia&amp;hl=en&amp;geocode=FTR_MQIdjWabACnvUDcoEzT9EjEhkNUn4J9DYg%3BFWKkMQIddyGaAClRtpdpajL9EjGHVL84uUkZrg&amp;aq=0&amp;oq=manou&amp;sll=33.886917,9.537499&amp;sspn=10.425352,21.643066&amp;dirflg=r&amp;ttype=now&amp;noexp=0&amp;noal=0&amp;sort=def&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;start=0&amp;ll=36.807778,10.130502&amp;spn=0.05633,0.129136" style="color:#0000FF;text-align:left"></a></small>
         </div>
         
                <dt>Cosmos.<br>
                1  Rue des Emirates arabes,<br>
                2010, Manouba.</dt>
                <dd> <span>Telephone:</span> +216 71 000 000 </dd>
                <dd> <span>FAX:</span> +216 71 000 001 </dd>          
         
		
        </fieldset>
		 </span>
             
         		
     </article>
      </div>
     </div>
  </div>  
 </section>   
 </div>
<div class="block"> 
      <footer>
	  
    <div class="mainaligncenter">
          <div class="privacy"> <a href="../../index-5.php" rel="nofollow">Politique privées</a> </div>
		  <ul class="list-soc">
        <li><a href="https://www.facebook.com/cosssssmooossss"><img alt="" src="../../images/soc-icon1.png"></a></li>
        <li><a href="https://twitter.com/cosmos_center"><img alt="" src="../../images/soc-icon2.png"></a></li>
		 <li><a href="http://www.youtube.com/channel/UCVzBnYhbrnQlBai0xeyztyQ"><img alt="" src="../../images/youtube-icon-out.png"></a></li>
      </ul>
        </div>
  </footer>
    </div>
</body>
<?php
} 
else
echo "vous n'etes pas autorise a acceder a cette page";
?>
</html>
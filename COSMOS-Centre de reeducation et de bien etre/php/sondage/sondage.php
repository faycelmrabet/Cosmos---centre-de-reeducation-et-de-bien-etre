<?php
// on teste si formulaire de vote a été validé
if (isset($_POST['go']) && $_POST['go']=='Vote') {
	if (!isset($_POST['choix']) || !isset($_POST['sondage_en_cours'])) {
	$erreur = 'Aucune réponse n\'a été choisie.';
	}
	// on teste si le visiteur a bien choisi une réponse avant d'avoir clické sur "Vote". On teste aussi si la variable $_POST['sondage_en_cours'] n'est pas vide
	if (empty($_POST['choix']) || empty($_POST['sondage_en_cours'])) {
	$erreur = 'Au moins un des champs est vide.';
	}
	else {
	// là le visiteur à choisi une réponse
	// on se connecte à notre base
	$base = mysql_connect ('localhost','root','');
	mysql_select_db ('pfc2a4',$base);

	// on prépare notre requête : on ajoute un vote pour la réponse choisie par le votant
	$sql ='UPDATE sondage_reponses SET nb_reponses = nb_reponses + 1 WHERE id_sondage="'.$_POST['sondage_en_cours'].'" AND id="'.$_POST['choix'].'"';

	// on lance la requête
	mysql_query ($sql) or die ('Erreur SQL !'.$sql2.'<br />'.mysql_error());


	$erreur = 'Merci d\'avoir voté :)';
	}
}
session_start();
if(isset($_SESSION['l']) && isset($_SESSION['p']))
{
echo "Bonjour:<b>".$_SESSION['l']."";
?>
<!DOCTYPE html>
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
            <li><a href="../index-6-1.php">Contact</a></li>	
			<li class="current"><a href="../../index-4.php">Membre</a></li>	
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
			include ("../connection.php");
			seConnecter();
// on prépare une requête pour sélectionner l'id et la question du dernier sondage (on sélectionne les questions, et on en prend qu'une (le LIMIT 0,1) et ce, dans un ordre décroissent (DESC), soit en fait, la dernière question posée).
$sql = 'SELECT id, question FROM sondage_questions ORDER BY id DESC LIMIT 0,1';

// on lance la requête
$req = mysql_query ($sql) or die ('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());

// on récupère le résultat dans un tableau associatif
$data = mysql_fetch_array ($req);

$nb_sondage = mysql_num_rows($req);

if ($nb_sondage == 0) {
	echo 'Aucun sondage.';
}
else {
	// on libère l'espace mémoire alloué à cette requête
	mysql_free_result ($req);

	// on affiche la question
	echo stripslashes(htmlentities(trim($data['question']))),'<br />';

	// on prepare l'affichage de notre formulaire permettant de voter
	echo '<form action = "sondage.php" method = "post">';

	// on prépare une requête permettant de sélectionner les réponses possibles se rapportant à ce même sondage
	$sql = 'SELECT id, reponse FROM sondage_reponses WHERE id_sondage="'.$data['id'].'"';

	// on lance la requête
	$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());

	// on prépare notre boucle pour afficher les différents choix possibles de réponses
	while ($donnees = mysql_fetch_array($req)) {
	// on affiche des boutons radio pour les différents choix de réponses possibles
	echo '<input type="radio" name="choix" value="' , $donnees['id'] , '"> ' , stripslashes(htmlentities(trim($donnees['reponse']))) , '<br />';
	}
	?>
	<input type = "hidden" name = "sondage_en_cours" value = "<?php echo $data['id']; ?>">
	<input type = "submit" name="go" value = "Vote">
	</form>
	<?php
}

// on libère l'espace mémoire alloué à cette requête
mysql_free_result ($req);

// on ferme la connection à notre base de données
mysql_close ();
?>
<br /><br />
<a href="sondage_reponses.php">Voir les résultats</a>
<?php
// on affiche les erreurs éventuelles
if (isset($erreur)) echo '<br /><br />',$erreur;
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
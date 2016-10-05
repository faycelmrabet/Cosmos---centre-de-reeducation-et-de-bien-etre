<?php
// on teste si l'utilisateur a validé le formulaire et qu'il cherche à insérer le sondage dans la base, et non à ajouter une réponse au sondage
if (isset($_POST['go']) && $_POST['go']=='Valider') {
	if (!isset($_POST['question']) || empty($_POST['question'])) {
	$erreur = 'Votre question est vide.';
	}
	else {
	// on va regarder si l'utilisateur n'a pas laissé un champ vide
	$valid_form = 1;
	for ($i=1; $i<=$_POST['nb_reponses']; $i++){
		$temp = "reponse_$i";
		if (isset($_POST[$temp])) $value=$_POST[$temp];
		if (empty($value)) $valid_form = 0;
	}
	if ($valid_form == 0) {
		$erreur = 'Au moins une de vos réponse est vide.';
	}
	else {
		// on se connecte à notre base de données
		include ("../connection.php");
		seConnecter();

		// on insère notre question
		$sql = 'INSERT INTO sondage_questions VALUES("","'.mysql_escape_string($_POST['question']).'")';
		mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());

		$id_sondage = mysql_insert_id();

		// on insère les réponses possibles à ce sondage
		for ($i=1; $i<=$_POST['nb_reponses']; $i++){
		$temp = "reponse_$i";
		if (isset($_POST[$temp])) $value=$_POST[$temp];

		$sql = 'INSERT INTO sondage_reponses VALUES("","'.$id_sondage.'","'.mysql_escape_string($value).'", "0")';
		mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());

		}
		// on redirige l'utilisateur à l'accueil du sondage
		header("location:sondage.php");
		exit();
	}
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
			<li class="current"><a href="../../index-4-1.php">Administrateur</a></li>	
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
        <form action="sondage_admin.php" method="post">		
			<fieldset >
			<legend>Sondage</legend>
			<table>
<tr>
<td><b>Question :</b></td>
<td><input type="text" name="question" value="<?php if (isset($_POST['question'])) echo stripslashes(htmlentities(trim($_POST['question']))); ?>"></td>
</tr>
<?php
// on teste si la variable $_POST['nb_reponses'] est définie ou pas. Si elle ne l'est pas, on la défini à 1 (un sondage aura au moins une reéponse possible :)
if (!isset($_POST['nb_reponses'])) $_POST['nb_reponses'] = 0;

// si l'utilisateur a clické sur 'Ajouter une réponse' on incrémente la variable $_POST['nb_reponses'], ce qui va nous permettre de rajouter un champ de type text (pour la nouvelle réponse possible) à notre formulaire
if (isset($_POST['go']) && $_POST['go']=='Ajouter une réponse') $_POST['nb_reponses']++;

for ($i=1; $i<=$_POST['nb_reponses']; $i++){
	$temp = "reponse_$i";
	if (isset($_POST[$temp])) $value=$_POST[$temp];
	echo '<tr><td><td><input type="text" name="reponse_'.$i.'" value="';
	if (isset($value)) echo stripslashes(htmlentities(trim($value)));
	echo '"</td></td></tr>';
	unset($value);
}

// on passe à notre formulaire le nombre de réponse au sondage
echo '<input type="hidden" name="nb_reponses" value="'.$_POST['nb_reponses'].'">';
echo '<tr><td><input type="submit" name="go" value="Ajouter une réponse"></td></tr>';
echo '<tr><td>&nbsp;</td></tr>';
echo '<tr><td><input type="submit" name="go" value="Valider"></td></tr>';

?>
</table>
</fieldset >
</form>

<?php
if (isset($erreur)) echo '<br /><br />',$erreur;
?>
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
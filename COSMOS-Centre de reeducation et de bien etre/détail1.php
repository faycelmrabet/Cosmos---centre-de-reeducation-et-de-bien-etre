<?php
session_start();
if(isset($_SESSION['l']) && isset($_SESSION['p']))
{
echo "Bonjour:<b>".$_SESSION['l']."";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <title>A propos</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="images/logo1.ico" type="image/x-icon" />
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/bgstretcher.js"></script>
    <script>
	$(function(){
      $('BODY').bgStretcher({
        images: ['images/slide-1.jpg','images/slide-2.jpg','images/slide-3.jpg'],
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
		<?php  echo "<li> <a href=\"php/logout1.php\"> Se déconnecter? </a> </li>"; ?>
	  </ul>
        </div>
  </div>
   
      
      <header>
    <div class="row-nav">
        <div class="main">
       <h1 class="logo"><a href="index0.php"><img alt="Eni Gma" src="images/logo.png"></a></h1> 
        <nav>
           <ul class="menu">
            <li><a href="index0.php">Accueil</a></li>
            <li><a href="index-1.php">A propos</a></li>
            <li class="current"><a href="index-2.php">Services</a></li>
            <li><a href="index-3-1.php">Galeries</a></li>
            <li><a href="php/index-6.php">Contacts</a></li>
          </ul>
        </nav>
        <div class="clear"></div>
      </div>
      </div>
  </header>
    <section id="content"><div class="ic"></div>
  
    <div class="main-block policy">
    <div class="main">
      <h1>Orthophoniste</h1>         
	  <h2>Champs d'intervention</h2>
		<h3>Les orthophonistes exercent à titre indépendant ou salarié dans différentes structures :</h3>
		<h4>
		<ul>
		<li>- en cabinet et éventuellement à domicile ;</li>
		<li>- dans les établissements de soins ou d'éducation spécialisés ;</li>
		<li>- dans les consultations pédiatriques ou médico-psychologiques ;</li>
		<li>- dans les hôpitaux et centres de rééducation médicalisés ;</li>
		<li>- dans les maisons de retraite, etc.</li>
		</ul>
		</h4>
		<p>
		L'intervention s'articule toujours en deux temps : une phase d'évaluation (bilan prescrit par un médecin), puis une phase de rééducation (traitement proprement dit). L'orthophoniste peut également guider les parents d'un jeune enfant, avant qu'il n'ait atteint l'âge minimum pour suivre une rééducation, il peut par exemple participer au diagnostic de surdité d'un bébé et accompagner la famille dans ses décisions.
		L'orthophonie s'appuie sur des stratégies rééducatives (qui visent à contrôler et/ou stimuler la fonction déficiente), mais aussi palliatives quand une récupération rapide n'est pas envisageable (ex : cahiers de communication, moyens informatiques dans les paralysies sévères). Ce travail s'envisage dans la durée (mois voire années) ; il ne sera rendu possible que par une relation de qualité et une motivation suffisante du patient et/ou de l'entourage familial.
		La variété des pathologies comme la vitesse d'évolution des connaissances rendent indispensable la formation continue des orthophonistes-logopèdes. Mais ces difficultés entraînent aussi des formes de spécialisation, notamment en ce qui concerne la prise en charge des handicaps les plus sévères.</p>	
     </div>
  </div>  
 </section> 
 
 </div>
<div class="block"> 
      <footer>
   <div class="mainaligncenter">
        <div class="privacy"><a href="index-5.php" rel="nofollow">Politique privée</a></strong></div>
		<ul class="list-soc">
        <li><a href="https://www.facebook.com/cosssssmooossss"><img alt="" src="images/soc-icon1.png"></a></li>
        <li><a href="https://twitter.com/cosmos_center"><img alt="" src="images/soc-icon2.png"></a></li>
		 <li><a href="http://www.youtube.com/channel/UCVzBnYhbrnQlBai0xeyztyQ"><img alt="" src="images/youtube-icon-out.png"></a></li>
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
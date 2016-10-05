<?php
session_start();
if(isset($_SESSION['l']) && isset($_SESSION['p']))
{
echo "Bonjour:<b>".$_SESSION['l']."";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Piscine de rééducation</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/logo1.ico" type="image/x-icon">
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
            <li class="current"><a href="index0.php">Accueil</a></li>
            <li><a href="index-1.php">A propos</a></li>
            <li><a href="index-2.php">Services</a></li>
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
      <h1>Piscine de rééducation et l'hydrothérapie</h1>         
	  <h4>Définition</h4>
		<p>L'hydrothérapie est un traitement thérapeutique par des therapeute diplomé basé sur l'emploi de l'eau en applications externes, locales ou globales, chaudes ou froides.</p>
	<h4>Les effets et intérêts de l'eau:</h4>		
        <p>L'intérêt principal est sans aucun doute celui découvert par Archimède.

«  Tout corps plongé dans un fluide déplace un volume égal à son volume...et reçoit une poussée verticale de bas en haut égale au poids du fluide déplacé. »

En pratique, cela signifie que nous nous sentons plus léger dans l'eau. Les mouvements sont donc plus facile à réaliser et surtout, réalisables dans de plus grandes amplitudes.</p>
<h4>
Les effets thérapeutiques 
</h4>
<h5>
Recherche de la mobilité articulaire :
</h5>
<p>
L'eau a pour effet de diminuer les raideurs et la douleur articulaire, la mobilisation devient alors plus facile.

Recherche de la force musculaire :

Lutte contre la résistance de l'eau au mouvement, avec ou sans matériel (palmes, planches, ...etc.). L'eau offre une résistance proportionnelle à la vitesse d'exécution du mouvement.

Amélioration fonctionnelle :

Recherche de la coordination (action de la chaleur sur la spasticité, intégration de la sensibilité proprioceptive et extéroceptive), remise en charge progressive et marche, la poussée hydrostatique diminuant le poids du corps à supporter.

Amélioration psychologique et physiologique.		 
</p>
       
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
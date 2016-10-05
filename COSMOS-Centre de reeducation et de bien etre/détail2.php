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
      <h1>Posturologie</h1>         
	  <h2>Description</h2>
		<h3>Le système tonique postural est composé des différents éléments suivants :</h3>
<p>des exocapteurs (capteurs sensoriels d'informations en provenance de l'extérieur du corps) qui délivrent au système nerveux central des messages qui permettent de nous situer par rapport à notre environnement (rétine, appareil auditif, tact) ;
des propriocepteurs (capteurs sensoriels d'informations en provenance de l'intérieur du corps) qui délivrent au système nerveux central des messages qui nous permettent de connaître les positions relatives des différents segments du corps les uns par rapport aux autres ;
les centres supérieurs qui intègrent les informations de ces capteurs et élaborent une réponse appropriée à chaque situation ;
des effecteurs, les muscles (en fait, seul le tonus musculaire est concerné).
Les syndromes cliniques engendrés par les différents dysfonctionnements du système tonique postural se classent en trois catégories :
les syndromes algiques, essentiellement de l'axe vertébral ;
les instabilités ;
les syndromes cognitifs (qui restent encore à démontrer).
Les signes cliniques sont divers et variés, mais peuvent être classés en signes cardinaux et signes accessoires. Mentionnons : douleurs vertébrales et articulaires, instabilités, pseudo-syndromes dépressifs.
La démarche pratique en posturologie consiste, au travers d'une analyse clinique et paraclinique rigoureuse du patient, à :
porter le diagnostic positif d'un syndrome postural, toujours fonctionnel ;
déterminer par divers tests cliniques le ou les types de capteurs en cause ;
faire une proposition thérapeutique pluridisciplinaire visant à modifier (restaurer) l'efficacité des capteurs et donc du système postural, après exclusion d'une pathologie non fonctionnelle par le médecin généraliste, spécialiste et posturologue .</p>	
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
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
            <li class="current"><a href="index-1.php">A propos</a></li>
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
    <div class="main-block">
    <div class="container_12">
          <div class="wrapper border-vert">
		    <article class="grid_5">
              <h1>Bienvenue </h1>
              <figure class="img-rounded"><img src="images/kinesitherapie.jpg" alt="" /> </figure>
              <p> La direction, l'équipe thérapeutique ainsi que l'ensemble du personnel de  vous souhaitent la bienvenue.</p>
			  <p>Notre centre est spécialisé dans le bien-être et la relaxation de chacun selon différentes méthodes. Composé d’une équipe de professionnels ayant chacun sa spécialité dans 
			  le secteur de la santé ou du bien-être,le Centre de reeducation vous propose un éventail de soins selon vos besoins et vos envies.</p> 
<h4>			  
<dl>Une équipe pluridisciplinaire est à votre service avec :
<li>Des masseurs-kinésithérapeutes </li>
<li>Un nutritionniste diététicien</li>
<li>Un ostéopathe</li>
<li>Des podologues</li>
</dl>
</h4>	
<p>Cette équipe nous permet une prise en charge globale et un suivi de nos patients.</p>



           </article>
         <article class="grid_3 prefix_2">
              <h1>Nos activités</h1>
              <ul class="list-services">
          
                  <figure class="img-rounded1"><img src="images/balnéothérapie.jpg" alt="" /> </figure>
                  <h4><a href="#">Balnéothérapie</a></h4>
				  <p>La rééducation en balnéo regroupe l’ensemble des techniques des rééducations actives ou passives réalisées sur un patient dans l’eau.</p>
                  
				  
				  <ul class="list">
                
              </ul>
          
            <li>
                 <figure class="img-rounded1"><img src="images/kinesitherapeute.jpg" alt="" /> </figure>
                  <h4><a href="#">Kinésithérapie</a></h4>
				  <p> La masso-kinésithérapie est l'application d'exercices basés sur des principes scientifiques adaptés au renforcement musculaire, à l'endurance et à 
				  la mobilité de personnes ayant des limitations fonctionnelles avec un besoin prolongé de conditionnement physique.</p>
                <ul class="list">
                
              </ul>
             </li>
          
        <a href="index-1-2.php" class="button">Détail</a></article>
      </div>
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
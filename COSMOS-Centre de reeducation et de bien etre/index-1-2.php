<?php
session_start();
if(isset($_SESSION['l']) && isset($_SESSION['p']))
{
echo "Bonjour:<b>".$_SESSION['l']."";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Détail</title>
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
              <h3>Nos activités </h3>
              
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
          

          <li>
                 <figure class="img-rounded1"><img src="images/Thalassothérapie 1.jpg" alt="" /> </figure>
                  <h4><a href="#">Thalassothérapie</a></h4>
				  <p> La thalassothérapie est une médecine douce qui a pour vocation de prévention avant tout. Elle élimine les toxines, elle améliore le système cardiaque et le système respiratoire, 
				  elle soulage les articulations, elle stimule la circulation veino-lymphatique et rend plus résistant aux infections microbiennes.</p>
                <ul class="list">
                
              </ul>
             </li>

          </article>
		  
         <article class="grid_3 prefix_2">
              <ul class="list-services">
                  <figure class="img-rounded1"><img src="images/maman-bebe.jpg" alt="" /> </figure>
                  <h4><a href="#">Soins Maman & Bébé</a></h4>
				  <p>Notre centre est spécialisé dans le traitement de pathologies parfois rencontrées par la maman et/ ou le bébé avant ou après l'accouchement..</p>
                  <ul class="list">
                
              </ul>
          
            <div class="wrapper border-vert">
          <article class="grid_5">
		 
              <h3>Nos spécialités</h3>
               <h6> Rhumatologie :</h6>
				  <p>  Arthroses vertébrales, Discopathies, Hernies discales, Arthrose des membres, Polyarthrites, Spondylarthrites, Algoneurodystrophie.</p>
                <h6>Traumatologie-Orthopédie :</h6> <p>Rééducation post-fractures, Entorses, Luxations, Rééducation des arthroplasties (hanches, genoux, épaules), Ligamentoplasties</p>
				<h6>Kinésithérapie respiratoire :</h6> <p>Aigue, Chronique.</p>
               <h6>Gériatrie : </h6><p>Reconditionnement à l’effort afin e maintenir l’autonomie des personnes âgées, Prévention des chutes, 
			   Rééducation des personnes âgées afin de les maintenir autonomes.</p>
               <h6> Pathologies Tendineuses : </h6><p>Notre centre vous propose une solution efficace pour lutter contre les tendinites et douleurs musculaires.</p>
				
				
				<ul class="list">
                
              </ul>
             
          </ul>
        </article>
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
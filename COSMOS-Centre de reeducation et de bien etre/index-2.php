<?php
session_start();
if(isset($_SESSION['l']) && isset($_SESSION['p']))
{
echo "Bonjour:<b>".$_SESSION['l']."";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Services</title>
   <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
	<link type="text/css" rel="stylesheet" href="css/style1.css" />	
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/logo1.ico" type="image/x-icon" />
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/bgstretcher.js"></script>
	<script type="text/javascript" src="js/jquery.pajinate.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
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
	<script type="text/javascript">
	$(document).ready(function(){
				$('#paging_container3').pajinate({
					items_per_page : 4,
					item_container_id : '.alt_content',
					nav_panel_id : '.alt_page_navigation'
					
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
  
    <div class="main-block">
    <div class="container_12">
          <div class="wrapper">
         <article class="grid_4">           
			  <div id="paging_container3" class="container">
				<h2>Nos services</h2>
				<div class="alt_page_navigation"></div>				
				<ul class="alt_content">
				<li>  <figure class="img-rounded img-indent"><img src="images/page3-image3.jpg" alt="" /> </figure></li>
                <li>
				<h4>Posturologie:</h4>
				<p>La posturologie est une méthode d'étude pluridisciplinaire de la posture, acte moteur automatique et inconscient qui permet à l'homme :
				d'adopter une position érigée ;
				de stabiliser cette position en statique ou en dynamique ;
				d'élaborer la connaissance spatiale du soi par rapport à son environnement.
				Elle est le fruit de la mise en jeu d'un système sensori-moteur multimodalitaire complexe.</p>          
				</li> 
			    <li><p><a href="détail2.php" class="button">Détails</a></p></li> 
				<li></li>
				<li> <figure class="img-rounded img-indent"><img src="images/page3-image1.jpg" alt="" /> </figure>
				
				</li> 
				<li class="entre">
				<h4>Médecine physique et de réadaptation</h4>
				<p>La médecine physique et de réadaptation (MPR) est une spécialité médicale orientée vers la récupération de capacités fonctionnelles et de qualité de vie des patients atteints de handicap, 
				congénital ou acquis, par accident par exemple. 
				Les médecins qui ont approfondi ces études, souvent appelés « médecins rééducateurs »1, « physiatres » ou « médecins physiques », 
				sont qualifiés en médecine physique et de réadaptation (MPR). 
				Les rééducateurs sont particulièrement spécialisés dans les techniques de récupération d'une fonction optimale, 
				particulièrement chez les sujets souffrant de lésion musculaire, ostéo-articulaire, cardio-respiratoire ou cérébrale 
				(par exemple après un accident vasculaire cérébral).</p></li> 
				<li><p><a href="détail.php" class="button">Détails</a></p></li>
				<li></li>	
				<li><figure class="img-rounded img-indent"><img src="images/page3-image2.jpg" alt="" /> </figure></li> 
				<li>
				 <h4>Orthophoniste:</h4>
				<p>L'orthophoniste (ortho : « correct », phonè : « voix ») 
				en France ou au Canada, est aussi appelé logopède (logos : « parole », paideia : « éducation ») 
				en Belgique ou logopédiste en Suisse. Le terme anglophone correspondant est (ang), ou encore speech and language pathologist, 
				souvent abrégés SLT et SLP. Ces professionnels sont en charge des troubles de communication liés à la voix, 
				à la parole et au langage oral et écrit. Leurs compétences peuvent être aussi sollicitées en matière de déglutition et de motricité bucco-faciale. 
				L'orthophonie est une discipline charnière, qui a un statut paramédical dans certains pays (France, Grande-Bretagne, Canada), 
				et plus proche de l'enseignement spécialisé dans d'autres (Allemagne).</p>   
				</li>
				<li><p><a href="détail1.php" class="button">Détails</a></p></li> 
				<li><p></p></li> 
				</ul>	
				</div>
         </article>
      </div>
     </div>
  </div>
 <section> 
  
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
	<script>
			$(document).ready(function(){
				$('.alt_content li:odd, .content > *:odd').css('background-color','transparent');
				$('.alt_content li:odd, .content > *:odd').css('height','400px');
			});
		</script>
</body>
<?php
} 
else
echo "vous n'etes pas autorise a acceder a cette page";
?>
</html>
<!DOCTYPE html>
<html lang="fr">
    <head>
    <title>Contacts</title>
    <meta charset="utf-8">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="images/logo1.ico" type="image/x-icon" />
	<script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/bgstretcher.js"></script>
	<script src="js/form2.js"></script>
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
            <li><a href="index-2.php">Services</a></li>
           <li><a href="gallerie-admin.php">Galeries</a></li>
            <li><a href="php/index-6-1.php">Contact</a></li>	
			<li ><a href="index-4-1.php">Administrateur</a></li>
			<li class="current"><a href="php/stat.php">Statistique</a></li>

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
        <span class="tableaux">
		<?php
session_start();
if(file_exists('compteur_visites.txt'))
{
        $compteur_f = fopen('compteur_visites.txt', 'r+');
        $compte = fgets($compteur_f);
}
else
{
        $compteur_f = fopen('compteur_visites.txt', 'a+');
        $compte = 0;
}
if(!isset($_SESSION['compteur_de_visite']))
{
        $_SESSION['compteur_de_visite'] = 'visite';
        $compte++;
        fseek($compteur_f, 0);
        fputs($compteur_f, $compte);
}
fclose($compteur_f);
echo '<strong>'.$compte.'</strong>  Nombre de visites: .';
?>
</span>
		<span class="tableaux">
	<fieldset >
	<legend>Statistique par mois</legend>
	<img src="php/stat.php?couleur=bleu" />
	


	</fieldset >	
		
		</span>	
        <span class="tableaux">
	
	<img src="" />
	


	
		
		</span>	
 	
		<br/><span class="tableaux">
	<fieldset >
	<br/><legend width="400px">Statistique par année</legend>
	

	<img src="php/statcercle.php" />
	


	</fieldset >	
		
		</span>	
		
        
		<br/>
		
		
	

	

	
     
      </div>
     </div>
  </div>  
 </section>   
 </div>
<div class="block"> 
      <footer>
	<div class="mainaligncenter">
        <div class="privacy"><a href="index-5.php" rel="nofollow">Politique privée</a></div>
		<ul class="list-soc">
        <li><a href="https://www.facebook.com/cosssssmooossss"><img alt="" src="images/soc-icon1.png"></a></li>
        <li><a href="https://twitter.com/cosmos_center"><img alt="" src="images/soc-icon2.png"></a></li>
		 <li><a href="http://www.youtube.com/channel/UCVzBnYhbrnQlBai0xeyztyQ"><img alt="" src="images/youtube-icon-out.png"></a></li>
      </ul>
        </div>
  </footer>
    </div>

</body>

</html>
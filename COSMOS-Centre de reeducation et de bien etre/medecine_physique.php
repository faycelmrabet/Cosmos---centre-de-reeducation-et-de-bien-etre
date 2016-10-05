<?php
session_start();
if(isset($_SESSION['l']) && isset($_SESSION['p']))
{
echo "Bonjour:<b>".$_SESSION['l']."";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Médecine physique</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/logo1.ico" type="image/x-icon" /><!--@oussama: icone-->
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
    <h1>Médecine physique</h1>         
	<p>La médecine physique et de réadaptation (MPR) est une spécialité médicale orientée vers la récupération de capacités fonctionnelles et de qualité de vie des patients atteints de handicap, congénital ou acquis, par accident par exemple. Les médecins qui ont approfondi ces études, souvent appelés « médecins rééducateurs »1, « physiatres » ou « médecins physiques », sont qualifiés en médecine physique et de réadaptation (MPR). Les rééducateurs sont particulièrement spécialisés dans les techniques de récupération d'une fonction optimale, particulièrement chez les sujets souffrant de lésion musculaire, ostéo-articulaire, cardio-respiratoire ou cérébrale (par exemple après un accident vasculaire cérébral).</p>	       
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
<?php
} 
else
echo "vous n'etes pas autorise a acceder a cette page";
?>
</html>
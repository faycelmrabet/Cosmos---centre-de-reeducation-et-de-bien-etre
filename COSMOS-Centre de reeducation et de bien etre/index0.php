<?php
session_start();
if(isset($_SESSION['l']) && isset($_SESSION['p']))
{
echo "Bonjour:<b>".$_SESSION['l']."";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Menu</title> 
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
<div class="extra-block1"> 
  <div class="row-top">
    <div class="main">
       <ul class="list-soc">
		<?php  echo "<li> <a href=\"php/logout1.php\"> Se déconnecter? </a> </li>"; ?>
      </ul>
     </div>
  </div>
      
      
        <div class="row-nav">
      <header>
          <div class="main">
        <h1 class="logo"><a href="index0.php"><img alt="cosmos" src="images/logo.png"></a></h1>
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
    
  </header>
  </div>
 </div>
<div class="block">
      <div class="nav-buttons">
      <div id="nav">&nbsp;</div>
      </div>
      <div class="row-1">
		<div class="container_12">
          <div class="wrapper">
			<article class="grid_4">
              <figure class="box-1"><img src="images/page1-image1.jpg" alt="" />
			  <figcaption>Piscine de rééducation <a href="piscine_de_reeducation.php"></a></figcaption>
              </figure>
            </article>
            <article class="grid_4">
              <figure class="box-1"><img src="images/page1-image2.jpg" alt="" />
              <figcaption>Médecine physique <a href="medecine_physique.php"></a></figcaption>
              </figure>
            </article>
            <article class="grid_4">
              <figure class="box-1"><img src="images/page1-image3.jpg" alt="" />
              <figcaption>Plateau de rééducation <a href="plateau_de_reeducation.php"></a></figcaption>
              </figure>
            </article>
          </div>
        </div>
      </div>
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
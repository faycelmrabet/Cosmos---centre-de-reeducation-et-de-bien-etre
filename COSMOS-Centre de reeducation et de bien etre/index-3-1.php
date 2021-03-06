<?php
session_start();
if(isset($_SESSION['l']) && isset($_SESSION['p']))
{
echo "Bonjour:<b>".$_SESSION['l']."";
?>

<html lang="en">
     <head>
    <title>Gallerie d'image du centre cosmos de rééducation: kinésithérapie,massage,rhumatologie,kiné-orthopédique,Thalassothérapie </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style2.css" type="text/css" media="screen" />
  	<link rel="stylesheet" href="css/slide.css" type="text/css" media="screen" />
     <link rel="icon" href="images/logo1.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/logo1.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/jquery.fancybox.css" >
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/bgstretcher.js"></script>
    <script src="js/jquery.elastislide.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
	
    <script>
	$(document).ready(function() {	
      $('BODY').bgStretcher({
        images: ['images/slide-1.jpg'],
		imageWidth: 1600, 
		imageHeight: 964, 
		resizeProportionally:true	
       });
	$('#carousel').elastislide({imageW :300,margin: 20,minItems: 3});   
	$('.magnifier').fancybox();   
		

	$(".view magnifier").hover(
	function(){$(this).find("img").stop().animate({opacity:0.5},"normal")},
	function(){$(this).find("img").stop().animate({opacity:1},"normal")})
	})  
	     	
    </script>
    </head>
    <body>
<div class="extra-block"> 
      <div class="row-top">
      <div class="main">
          <ul class="list-soc">
		<?php  echo "<li> <a href=\"../logout1.php\"> Se déconnecter? </a> </li>"; ?>
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
            <li class="current"><a href="index-3-1.php">Galeries</a></li>
            <li><a href="php/index-6.php">Contacts</a></li>
            </ul>
        </nav>
        <div class="clear"></div>
      </div>
      </div>
  </header>
    <section id="content"><div class="ic"></div>    
    <div class="main-block">
    <div class="main">
     <h3>Galeries</h3>
        
   <div id="carousel" class="es-carousel-wrapper ">
          <div class="es-carousel">
            <ul>
             <li>    
			 
              <figure class="img-rounded"><a  class="view magnifier"  data-fancybox-group="gallery" href="images/im1.jpg" width="300" height="420" title=""><img src="images/im1.jpg" alt="" /><span></span></a> </figure>   
              <figure class="img-rounded"> <a class="view magnifier"  data-fancybox-group="gallery"  href= "images/im2.jpg" title=""><img  src="images/im2.jpg" alt=""  border="0"/> <span></span></a></figure>  
			  </li>
              
              <li>             
              <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/kinesitherapeute.jpg" title=""><img src="images/kinesitherapeute.jpg" alt="kinesitherapeute" width="150" height="420" /><span></span></a> </figure>   
              <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/reeuducation.jpg" title=""><img src="images/reeuducation.jpg" alt="" width="150" height="150" border="0"/><span></span></a> </figure>  
              </li> 
              
              <li>             
              <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/rhumatologie.jpg" title=""><img src="images/rhumatologie.jpg" alt="rhumatologie" /><span></span></a> </figure>   
              <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/BALNEO.jpg" title=""><img src="images/BALNEO.jpg" alt="" /><span></span></a> </figure>  
              </li> 
             <li>                    
              <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/kine-orthopedique.jpg" width="320" height="120"title=""><img src="images/kine-orthopedique.jpg" alt=""  /><span></span></a> </figure>   
              <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/Thalassotherapie.jpg" title=""><img src="images/Thalassotherapie.jpg" alt="Thalassotherapie" /><span></span> </a></figure>  
              </li>
              
              <li>             
              <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/Thalassotherapie 1.jpg"  title=""><img src="images/Thalassotherapie 1.jpg" alt="" /><span></span></a> </figure>   
              <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/bebe.jpg" title=""><img src="images/bebe.jpg" alt="bébé" /><span></span></a> </figure>  
              </li>
			  <?php 
			include("php/connection.php");
             seConnecter();
			$requete=" select * from `pfc2a4`.`image` ";
			$resultat=mysql_query($requete) or die('Erreur SQL !'.$requete.'<br>'.mysql_error());
			while($chourouk=mysql_fetch_array($resultat)) 
			{  ?>
			<li><figure class="img-rounded"><a class="view magnifier" data-fancybox-group="gallery" href="<?php echo $chourouk['path']; ?>" title=""><img src="<?php echo $chourouk['path']; ?>" alt=""/><span></span></a></figure>   
             </li>
			<?php } ?>
            </ul>
          </div>
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
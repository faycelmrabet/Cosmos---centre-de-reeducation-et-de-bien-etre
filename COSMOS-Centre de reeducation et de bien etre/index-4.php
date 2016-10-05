<?php
session_start();
if(isset($_SESSION['l']) && isset($_SESSION['p']))
{
echo "Bonjour:<b>".$_SESSION['l']."";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Contacts</title>
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
            <li><a href="index-2.php">Services</a></li>
            <li><a href="index-3-1.php">Galeries</a></li>
            <li><a href="php/index-6.php">Contact</a></li>
			<li class="current"><a href="index-4.php">Membre</a></li>
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
		<span id="menu">
			<span class="tableaux">
			<fieldset >
			<legend>Newsletter</legend>
			<div><a href="php/newsletter/afficher_membre.php">Accéder au newsletter</a></div>
			</fieldset >
			</span>
			<br/><br/>
			<span class="tableaux">
			<fieldset >
			<legend>Sondage</legend>
			<div><a href="php/sondage/sondage.php">Accéder au sondage</a></div>
			</fieldset >
			</span>
			<br/><br/>
			<span class="tableaux">
			<fieldset >
			<legend>Rendez_vous</legend>
			<div><a href="rendez_vous.php">Accéder au rendez_vous</a></div>
			</fieldset >
			</span>
			<br/><br/>
			<span class="tableaux">
			<fieldset >
			<legend>Devis</legend>
			<div><a href="php/devis/afficher.php">Consulter Devis</a></div>
			</fieldset >
			</span>
		</span>
        
        </article>
		<article class="grid_5 prefix_2">
             
         
    <form method="post" action="php/membre/insertion_membre.php" name="form">
	   <span class="tableaux">
		<fieldset >
		<legend>Membre</legend>
	   <table width="2"> 		
		<tr>
		<td>
		Nom:
		</td>
		<td><label> <input type="text" name="nom" id="nom"/></label><br/><br/></td>
		</tr>
		<tr>
		<td>
        Prénom:
		</td>
		<td>
		<label> <input type="text" name="prenom" id="prenom"/></label><br/><br/>
		</td>
		</tr>
		<tr>
		<td>
		Téléphone:
		</td>
		<td>
		<label> <input type="text" name="telephone" id="telephone"/></label><br/><br/>
		</td>
		</tr>
		<tr>
		<td>
		Adresse:
		</td>
		<td>
		<label> <input type="text" name="adresse" id="adresse"/></label><br/><br/>
		</td>
		</tr>
		<tr>
		<td>
	    E-mail:
		</td>
		<td>
		<label> <input type="text" name="mail" id="mail"/></label><br/><br/>
		</td>
		</tr>
		<tr>
		<td>
		Message:
		</td>
		<td>
		<TEXTAREA name="message" id="message" rows=10 cols=30 ></TEXTAREA>
		</td>
		</tr>
		</table>
		</fieldset>
		 </span>
		 <br/>
		 <input type="button" value="ajouter" onclick="validation()"/>
        </form>
			
     </article>
      </div>
     </div>
  </div>  
 </section>   
 </div>
<div class="block"> 
      <footer>
	  
    <div class="mainaligncenter">
          <div class="privacy"> <a href="index-5.php" rel="nofollow">Politique privées</a> </div>
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
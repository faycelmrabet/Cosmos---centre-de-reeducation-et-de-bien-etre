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
    <script src="js/form7.js"></script>	
	<script >
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
            <li><a href="php/index-6-1.php">Contact</a></li>	
			<li class="current"><a href="index-4-1.php">Administrateur</a></li>
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
			<legend>Menu Login & Password</legend>
			<div><a href="inscription_admin.php">Ajouter login & password</a></div>
			<div><a href="php/authentification_admin/affiche.php">Afficher</a></div>
			<div><a href="php/authentification_admin/modifier.php">Modifier</a></div>
			<div><a href="php/authentification_admin/liste.php">Supprimer</a></div>
			</fieldset >
			</span>
			</span>
  
		
		
        </article>
		<article class="grid_5 prefix_2">
		<form method="post" action="php/authentification_admin/insertion.php" name="form7">
		<span class="tableaux">
		<fieldset >
		<legend>Inscription admin</legend>
		<table> 		
		<tr>
		<td>
        Login:
		</td>
		<td>
		<label> <input type="text" name="login" id="login"  placeholder="Saisir votre login"/></label><br/><br/>
		</td>
		</tr>	
		<tr>
		<td>
		password:
		</td>
		<td>
		<label> <input type="password" id="password" name="password" placeholder="Votre password"rows=8 cols=25/></label><br/><br/>
		</td>
		</tr>		
		</table>
		</fieldset>
		</span>
		<input type="button" value="Envoyer" onclick="validation()">
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

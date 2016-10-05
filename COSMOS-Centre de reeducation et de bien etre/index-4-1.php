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
			<legend>Menu</legend>
			<div><a href="index-4-1.php">Ajouter administrateur</a></div>
			<div><a href="php/administrateur/afficher_administrateur.php">Afficher la liste des administrateurs</a></div>	
			<div><a href="php/administrateur/modifier_administrateur.php">Modifier administrateur</a></div>	
			<div><a href="php/administrateur/supprimer_administrateur.php">Supprimer administrateur</a></div>
			</fieldset >
			</span>
			<br/>
			<span class="tableaux">
			<fieldset >
			<legend>Membre</legend>
			<div><a href="index-4.php">Ajouter membre</a></div>
			<div><a href="php/membre/afficher_membre.php">Afficher la liste des membres</a></div>	
			<div><a href="php/membre/modifier_membre.php">Modifier membre</a></div>	
			<div><a href="php/membre/supprimer_membre.php">Supprimer membre</a></div>
			</fieldset >
			</span>
			<br/>
			<span class="tableaux">
			<fieldset >
			<legend>Sondage</legend>
			<div><a href="php/sondage/sondage_admin.php">Accéder au sondage</a></div>
			<div><a href="php/sondage/afficher.php">Afficher le sondage</a></div>
			<div><a href="php/sondage/modifier.php">Modifier le sondage</a></div>
			<div><a href="php/sondage/liste.php">Supprimer le sondage</a></div>
			</fieldset >
			</span>
			<br/>
			<span class="tableaux">
			<fieldset >
			<legend>Newsletter</legend>
			<div><a href="php/newsletter/newsletter.php">Ajouter une newsletter</a></div>
			<div><a href="php/newsletter/afficher.php">Afficher newsletter</a></div>
			<div><a href="php/newsletter/modifier.php">Modifier une newsletter</a></div>
			<div><a href="php/newsletter/liste.php">Supprimer une newsletter</a></div>
			</fieldset >
			</span>
			<br/><br/>
			<span class="tableaux">
			<fieldset >
			<legend>Devis</legend>
			<div><a href="php/devis/ajouter.php">Ajouter devis</a></div>
			<div><a href="php/devis/afficher.php">Afficher devis</a></div>
			<div><a href="php/devis/modifier.php">Modifier devis</a></div>
			<div><a href="php/devis/liste.php">Supprimer devis</a></div>
			</fieldset >
			</span>
			<br/>
			<span class="tableaux">
			<fieldset >
			<legend>Rendez_vous</legend>
			<div><a href="php/rdv/liste.php">Afficher RDV</a></div>	
			<div><a href="php/rdv/liste1.php">Supprimer RDV</a></div>
			</fieldset >
			</span>
		</span>
				<span class="tableaux">
				<fieldset>
				<legend>statistique</legend>
				<div><a href="statt.php">Consulter les statistiques</a></div>
				</fieldset >
        </article>
		<article class="grid_5 prefix_2">
        <form method="post" action="php/administrateur/insertion_administrateur.php" name="form">
	   <span class="tableaux">
		<fieldset >
		<legend>administrateur</legend>
	   <table width="2"> 		 		
		<tr>
		<td>
		Nom:
		</td>
		<td><input type="text" name="nom" id="nom"/></td>
		</tr>
		<tr>
		<td>
        Prénom:
		</td>
		<td><input type="text" name="prenom" id="prenom"/></td>
		</tr>
		<tr>
		<td>
		N°de téléphone:
		</td>
		<td><input type="text" name="telephone" id="telephone"/></td>
		</tr>
		<tr>
		<td>
		Adresse:
		</td>
		<td><input type="text" name="adresse" id="adresse"/></td>
		</tr>
		<tr>
		<td>
	    E-mail:
		</td>
		<td><input type="text" name="mail" id="mail"/></td>
		</tr>
		</table>
		</fieldset>
		 </span>
		 <br/>
		 <input type="button" value="ajouter" onclick="validation()"/>
        </form>
		<br/><br/>
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
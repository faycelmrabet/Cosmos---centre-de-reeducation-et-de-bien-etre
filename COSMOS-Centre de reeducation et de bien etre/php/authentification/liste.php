			<?php
              include("../connection.php");
              seConnecter();
              $requete="select * from inscription";
              $resultat=mysql_query($requete);
            ?>
<html lang="en">
    <head>
    <title>Contacts</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="icon" href="../../image/logo.png" type="../../image/x-icon">
    <link rel="shortcut icon" href="../../images/logo1.ico" type="../../image/x-icon" /> 
    <script src="../../js/jquery.js"></script>
    <script src="../../js/jquery-migrate-1.1.1.js"></script>
    <script src="../../js/bgstretcher.js"></script> 
	<script>
	$(function(){
      $('BODY').bgStretcher({
        images: ['../../images/slide-1.jpg','../../images/slide-2.jpg','../../images/slide-3.jpg'],
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
      </ul>
      </div>
	  </div>     
   <header>
    <div class="row-nav">
        <div class="main"> 
         <h1 class="logo"><a href="../../index0.php"><img alt="Eni Gma" src="../../images/logo.png"></a></h1>
        <nav>
			<ul class="menu">
            <li><a href="../../index0.php">Accueil</a></li>
            <li><a href="../../index-1.php">A propos</a></li>
            <li><a href="../../index-2.php">Services</a></li>
            <li><a href="../../index-3-1.php">Galeries</a></li>
            <li class="current"><a href="../index-6.php">Contacts</a></li>			
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
		<legend>Menu Inscription</legend>
		<p><a href="../../inscription.html">Créer un compte</a></p>
		<p><a href="afficher_compte.php">Afficher compte</a></p>
		<p><a href="modifier_compte.php">Modifier compte</a></p>
		<p><a href="liste.php">supprimer compte</a></p>
		</fieldset>
		</span>
        </span>
        </article>
		<article class="grid_5 prefix_2">
		<div class="tableaux">
			<fieldset>
			<legend>Liste des membres</legend>
			<table border="1">
			<tr class="ligne">
			<td>id</td>	
			<td>Nom</td>
			<td>Login</td>
			<td>mail</td>
			<td>supprimer</td>
			</tr>
			<?php while  ($oussama=mysql_fetch_array($resultat) ){ ?>
			<tr class="ligne">
				   <td> <?php echo $oussama['id_compte']; ?></td>	
                   <td> <?php echo $oussama['Nom']; ?></td>
                   <td> <?php echo $oussama['Login']; ?></td>
				   <td><?php echo $oussama['mail']; ?></td>	
				   <td><a href="supprimer_password.php?idR=<?php echo $oussama['id_compte']; ?>">supprimer</a></td>
			</tr>
			<?php  } ?>
			</table>  
			</fieldset>
			</div>
     </article>
      </div>
     </div>
  </div>  
 </section>   
 </div>

     <div class="block"> 
      <footer>
    <div class="mainaligncenter">
          <div class="privacy"> <a href="../../index-5.php" rel="nofollow">Politique privées</a> </div>
		  <ul class="list-soc">
        <li><a href="https://www.facebook.com/cosssssmooossss"><img alt="" src="../../images/soc-icon1.png"></a></li>
        <li><a href="https://twitter.com/cosmos_center"><img alt="" src="../../images/soc-icon2.png"></a></li>
		 <li><a href="http://www.youtube.com/channel/UCVzBnYhbrnQlBai0xeyztyQ"><img alt="" src="../../images/youtube-icon-out.png"></a></li>
      </ul>
        </div>
  </footer>
    </div>
</body>
</html>
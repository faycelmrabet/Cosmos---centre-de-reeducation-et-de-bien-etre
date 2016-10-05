<?php
              include("../connection.php");
              seConnecter();
              $requete="SELECT * FROM `pfc2a4`.sondage_questions";
              $resultat=mysql_query($requete);
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
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="icon" href="../../images/logo.png" type="../../image/x-icon">
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
		  <?php  echo "<span id=\"menu\"><li> <a href=\"../logout1.php\"> Se déconnecter? </a> </li></span>"; ?>
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
            <li><a href="../index-6-1.php">Contact</a></li>	
			<li class="current"><a href="../../index-4-1.php">Administrateur</a></li>
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
			<div><a href="sondage_admin.php">Accéder au sondage</a></div>
			<div><a href="afficher.php">Afficher le sondage</a></div>
			<div><a href="modifier.php">Modifier le sondage</a></div>
			<div><a href="liste.php">Supprimer le sondage</a></div>
			</fieldset>
			</span>
		</span>
        </article>
<article class="grid_5 prefix_2">
		<div class="tableaux">
			<fieldset>
			<legend>Liste Sondage</legend>
			<table border="1">
			<tr class="ligne"> 
			<td>id</td>
			<td>question</td>
			<td>Modifier</td>
			</tr>
		<?php while  ($iness=mysql_fetch_array($resultat) ){ ?>
			<tr class="ligne">
				   <td><?php echo $iness['id']; ?></td>
				   <td><?php echo $iness['question']; ?></td>				   
				   <td><a href="modifier.php?idR=<?php echo $iness['id']; ?>">modifier</a></td>
			</tr>
			<?php } ?>	
			</table>
			<?php if(isset($_GET['idR'])) {
		$id_modifier1=$_GET['idR'];
		$requete1="SELECT * FROM `pfc2a4`.sondage_questions where id='$id_modifier1'";
		$resultat1=mysql_query($requete1);
		 while($ines=mysql_fetch_array($resultat1)) {?>
			<form action="valider_modification.php" method="post">		
			<fieldset >
			<legend>Menu</legend>
			<table>
			<tr>
				<td><input type="hidden" name="id" value="<?php echo $ines['id'];?>"></td>
			</tr>
			<tr>
            <td>Question :</td>
            <td><input type="text" name="question" value="<?php echo $ines['question'];?>"></td>
            </tr>
		
</table>
<input type="submit" value="Valider">
</fieldset >
</form>

<?php } }?>
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
<?php
} 
else
echo "vous n'etes pas autorise a acceder a cette page";
?>
</html>
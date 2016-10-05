<?php
              include("../connection.php");
              seConnecter();
              $requete="select * from `pfc2a4`.`newsletter`";
              $resultat=mysql_query($requete);
			  session_start();
if(isset($_SESSION['l']) && isset($_SESSION['p']))
{
echo "Bonjour:<b>".$_SESSION['l']."";
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
	   <?php  echo "<li> <a href=\"../logout1.php\"> Se déconnecter? </a> </li>"; ?>
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
			<legend>Menu Newsletter</legend>
			<div><a href="newsletter.php">Ajouter newsletter</a></div>
			<div><a href="afficher.php">Afficher newsletter</a></div>	
			<div><a href="modifier.php">Modifier newsletter</a></div>	
			<div><a href="liste.php">Supprimer newsletter</a></div>
			</fieldset>
			</span>
		</span>
        
        </article>
		<article class="grid_5 prefix_2">
		<div class="tableaux">
			<fieldset>
			<legend>Liste des newsletter</legend>
			<table border="1">
			<tr class="ligne"> 
			<td>id</td>
			<td>Titre</td>
			<td>Courriel</td>
			<td>Date</td>
			<td>Modifier</td>
			</tr>
		<?php while  ($iness=mysql_fetch_array($resultat) ){ ?>
			<tr class="ligne">
                   <td><?php echo $iness['id']; ?></td>
                   <td> <?php echo $iness['titre']; ?></td>
                   <td> <?php echo $iness['courriel']; ?></td>
				   <td><?php echo $iness['date']; ?></td>
				   <td><a href="modifier.php?idR=<?php echo $iness['id']; ?>">modifier</a></td>
			</tr>
			<?php } ?>	
			</table>
			<?php if(isset($_GET['idR'])) {
		$id_modifier1=$_GET['idR'];
		$requete1="SELECT * FROM `pfc2a4`.`newsletter` where id='$id_modifier1'";
		$resultat1=mysql_query($requete1);
		 while($ines=mysql_fetch_array($resultat1)) {?>
		
		<form name="form" action="valider_modification.php" method="post">
			<table width="100">
				<tr>
				<td><input type="hidden" name="id" value="<?php echo $ines['id']?>"></td>
				</tr>
				<tr>
				<td>Titre:</td>
				<td><input type="text" name="titre" value="<?php echo $ines['titre']?>"/></td>
				</tr>
				<tr>
				<td>Contenu:</td>
				<td><textarea name="newsletter" rows=10 cols=30 value="<?php $ines['courriel']?>"></textarea></td>
				</tr>
				<tr>
				<td class="colone">date:</td> 
				<td>
				<table>
				<colgroup span="3"/>
				<tr>
				<td>
				<select name="jour" ><option default="desabled"></option>
				<?php
				for($i=1;$i<=31;$i++)
				{
				echo '<option ';
				echo 'value="'.$i.'">'.$i.'</option>' ;
				} ?>
				</select>
				</td>
				<td>
				<select name="mois" ><option default="desabled"></option>
				<?php
				for($i=1;$i<=12;$i++)
				{
				echo '<option ';
				echo 'value="'.$i.'">'.$i.'</option>' ;
				} ?>
				</select>
				</td>
				<td>
				<select name="annee" ><option default="desabled"></option>
				<?php
				for($i=1990;$i<=2020;$i++)
				{
				echo '<option ';
				echo 'value="'.$i.'">'.$i.'</option>' ;
				} ?>
				</select>
				*
				</td>
				</tr>
				</table>
				</td>
				</tr>
				</fieldset>
			</table>
			<input type="submit" value="modifier"/>
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
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
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="icon" href="../../images/logo.png" type="../../image/x-icon">
    <link rel="shortcut icon" href="../../images/logo1.ico" type="../../image/x-icon" />
    <script src="../../js/jquery.js"></script>
    <script src="../../js/jquery-migrate-1.1.1.js"></script>
    <script src="../../js/bgstretcher.js"></script>
	<script src="../../js/form6.js"></script>
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
			<?php
	$courriels="";

	$newsletter=isset($_POST['newsletter'])?$_POST['newsletter']:"";
	$sujet=isset($_POST['sujet'])?$_POST['sujet']:"newsletter";
	$jour=isset($_POST['jour'])?$_POST['jour']:"jour";
	$mois=isset($_POST['mois'])?$_POST['mois']:"mois";
	$annee=isset($_POST['annee'])?$_POST['annee']:"annee";
	$send=isset($_POST['send'])?$_POST['send']:"";
	$base = mysql_connect ('localhost','root','');
	mysql_select_db ('pfc2a4',$base);

	$query="SELECT * FROM `newsletter`";
	$result=mysql_query($query);
	for($i=0;$i<mysql_num_rows($result);$i++){
		$id=mysql_result($result,$i,"id");	
		$titre=mysql_result($result,$i,"titre");
		$courriel=mysql_result($result,$i,"courriel");
		$date=mysql_result($result,$i,"date");		
		$courriels.=$courriel.";";	
	}
	if($send=="apercu"){
		?>
		<?php echo stripslashes($newsletter); ?>	
		<form method="post" action="insertion.php" name="form6">
		<span class="tableaux">
		<fieldset>
		<legend>Aperçu de la newsletter :</legend>
		<table>
		<tr>
		<td>Aperçu du sujet:</td>
		<td><textarea readonly="readonly" name="newsletter" rows=10 cols=30><?php echo stripslashes($newsletter); ?></textarea></td>
		</tr>
		<tr>
		<td>Vérifiez le titre:</td>
		<td><input type="text" name="sujet" value="<?php echo $sujet; ?>" /></td>
		</tr>
		<tr>
				<td class="colone">Vérifier date:</td> 
				<td>
				<table>
				<colgroup span="3"/>
				<tr>
				<td>
				<select name="jour" readonly="readonly"><?php echo stripslashes($jour); ?><option default="desabled"></option>
				<?php
				for($i=1;$i<=31;$i++)
				{
				echo '<option ';
				echo 'value="'.$i.'">'.$i.'</option>' ;
				} ?>
				</select>
				</td>
				<td>
				<select name="mois" readonly="readonly"><?php echo stripslashes($mois); ?><option default="desabled"></option>
				<?php
				for($i=1;$i<=12;$i++)
				{
				echo '<option ';
				echo 'value="'.$i.'">'.$i.'</option>' ;
				} ?>
				</select>
				</td>
				<td>
				<select name="annee" readonly="readonly"><?php echo stripslashes($annee); ?><option default="desabled"></option>
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
		</table>
		<p>Actions possibles :</p>
		<input type="radio" name="send" value="modif" onClick="document.form1.valuesubmit.value='Modifier la newsletter';"/>Modifier<br />
		<input type="radio" name="send" value="send"   onClick="document.form1.valuesubmit.value='Envoyer la newsletter';" checked="checked"/>Envoyer		
		</fieldset >
		</span>
		<br/>
		<input type="button" value="Envoyer" onclick="validation()"/>
		</form>
		<?php
	}
		
	elseif($send=="modif"){
		?>		
		<form action="newsletter.php" method="post" name="form6">
		<span class="tableaux">
		<fieldset >
		<legend>Préparer une newsletter :</legend>
		<table>
		<tr>
		<td>Titre:</td>
		<td><input type="text" name="titre" value="<?php echo $titre; ?>" /></td>
		</tr>
		<tr>
		<td>Contenu:</td>
		<td><textarea readonly="readonly" name="newsletter" rows=10 cols=30><?php echo stripslashes($newsletter); ?></textarea></td>
		</tr>
		<tr>
				<td class="colone">date:</td> 
				<td>
				<table>
				<colgroup span="3"/>
				<tr>
				<td>
				<select name="jour" readonly="readonly"><?php echo stripslashes($jour); ?><option default="desabled"></option>
				<?php
				for($i=1;$i<=31;$i++)
				{
				echo '<option ';
				echo 'value="'.$i.'">'.$i.'</option>' ;
				} ?>
				</select>
				</td>
				<td>
				<select name="mois" readonly="readonly"><?php echo stripslashes($mois); ?><option default="desabled"></option>
				<?php
				for($i=1;$i<=12;$i++)
				{
				echo '<option ';
				echo 'value="'.$i.'">'.$i.'</option>' ;
				} ?>
				</select>
				</td>
				<td>
				<select name="annee" readonly="readonly" ><?php echo stripslashes($annee); ?><option default="desabled"></option>
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
		</table>
		</fieldset>
		</span>
		<br/>
		<input type="hidden" name="send" value="apercu" />
		<input type="button" value="Envoyer" onclick="validation()"/>
		</form>
		<?php
	}
	
	else{	?>
		
		<form action="newsletter.php" method="post" name="form6">
		<span class="tableaux">
		<fieldset >
		<legend>Préparer une newsletter :</legend>
		<table>
		<tr>
		<td>Titre:</td>
		<td><input type="text" name="sujet" value="Newsletter"/></td>
		</tr>
		<tr>
		<td>Contenu:</td>
		<td><textarea name="newsletter" rows=10 cols=30></textarea></td>
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
				</td>
				</tr>
				</table>
				</td>
				</tr>
		</table>		
		</fieldset>
		</span>
		<br/>
		<input type="hidden" name="send" value="apercu" />
		<input type="button" value="Envoyer" onclick="validation()"/>
		</form>
		<?php } ?>
		</span>
        
        </article>

		<article class="grid_5 prefix_2">
		<span class="tableaux1">
		<fieldset >
		<legend>Adresse Postal</legend>
		
         <div class="map">
        <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=Tunis+Centre,+Tunis,+Tunisia&amp;daddr=Manouba,+Tunis,+Tunisia&amp;hl=en&amp;geocode=FTR_MQIdjWabACnvUDcoEzT9EjEhkNUn4J9DYg%3BFWKkMQIddyGaAClRtpdpajL9EjGHVL84uUkZrg&amp;aq=0&amp;oq=manou&amp;sll=33.886917,9.537499&amp;sspn=10.425352,21.643066&amp;dirflg=r&amp;ttype=now&amp;noexp=0&amp;noal=0&amp;sort=def&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;start=0&amp;ll=36.807778,10.130502&amp;spn=0.05633,0.129136&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=d&amp;source=embed&amp;saddr=Tunis+Centre,+Tunis,+Tunisia&amp;daddr=Manouba,+Tunis,+Tunisia&amp;hl=en&amp;geocode=FTR_MQIdjWabACnvUDcoEzT9EjEhkNUn4J9DYg%3BFWKkMQIddyGaAClRtpdpajL9EjGHVL84uUkZrg&amp;aq=0&amp;oq=manou&amp;sll=33.886917,9.537499&amp;sspn=10.425352,21.643066&amp;dirflg=r&amp;ttype=now&amp;noexp=0&amp;noal=0&amp;sort=def&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;start=0&amp;ll=36.807778,10.130502&amp;spn=0.05633,0.129136" style="color:#0000FF;text-align:left"></a></small>
         </div>
         
                <dt>Cosmos.<br>
                1  Rue des Emirates arabes,<br>
                2010, Manouba.</dt>
                <dd> <span>Telephone:</span> +216 71 000 000 </dd>
                <dd> <span>FAX:</span> +216 71 000 001 </dd>          
         
		
        </fieldset>
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
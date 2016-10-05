<?php

include ("connection.php");
seConnecter();
if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['password'])) {
extract($_POST);
$requete="SELECT * FROM `pfc2a4`.`authentification` WHERE  `login` ='".$login."'
AND  `password` ='".$password."'";
$req=mysql_query($requete);
while($data = mysql_fetch_assoc($req))
{
if(($data['password'] != $_POST['password']) && ($data['login'] != $_POST['login'])) 
 {
 echo '<p>Mauvais login / password. Merci de recommencer</p>';
 }
 else
 {
session_start();
$_SESSION['p']=$_POST['password'];
$_SESSION['l']= $_POST['login'];
header ('location:../index-4-1.php');
}
}
}
?>
<?php
if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['password'])) {
extract($_POST);
$requete="SELECT * FROM `pfc2a4`.`inscription` WHERE  `Login` ='".$login."'
AND  `password` ='".$password."'";
$req=mysql_query($requete);
$data1 = mysql_fetch_assoc($req);

if(($data1['password'] != $_POST['password']) && ($data1['login'] != $_POST['login'])) 
 {
 echo '<p>Mauvais login / password. Merci de recommencer</p>';
 }
 else
 {
session_start();
$_SESSION['p']=$_POST['password'];
$_SESSION['l']= $_POST['login'];
header ('location:../index-4.php');
}

}

?>
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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../images/logo.png" type="../image/x-icon">
    <link rel="shortcut icon" href="../images/logo1.ico" type="../image/x-icon" />
    <script src="../js/jquery.js"></script>
    <script src="../js/jquery-migrate-1.1.1.js"></script>
    <script src="../js/bgstretcher.js"></script>
<!--	<script src="../js/form3.js"></script>-->
	<script src="../js/form5.js"></script>
	<script >
	$(function(){
      $('BODY').bgStretcher({
        images: ['../images/slide-1.jpg','../images/slide-2.jpg','../images/slide-3.jpg'],
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
		<?php  echo "<li> <a href=\"logout1.php\"> Se déconnecter? </a> </li>"; ?>
        </ul>
        </div>
  </div>
      
 
      
   <header>
    <div class="row-nav">
        <div class="main"> 
        <h1 class="logo"><a href="../index0.php"><img alt="Eni Gma" src="../images/logo.png"></a></h1> 
        <nav>
			
            <ul class="menu">
            <li><a href="../index0.php">Accueil</a></li>
            <li><a href="../index-1.php">A propos</a></li>
            <li><a href="../index-2.php">Services</a></li>
            <li><a href="../index-3-1.php">Galeries</a></li>
            <li class="current"><a href="index-6.php">Contacts</a></li>
			<li><a href="../index-4.php">Membre</a></li>
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
		<form method="post" action="avis/insertion_avis.php" name="form1">
		<span class="tableaux">
		<fieldset >
		<legend>Avis</legend>
		<table id="ouss"> 
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
        Objet du message:
		</td>
		<td>
		<label> <input type="text" name="objet" id="objet"/></label><br/><br/>
		</td>
		</tr>
		<tr>
		<td>
		Message:
		</td>
		<td>
		<TEXTAREA name="message" id="message" rows=8 cols=25></TEXTAREA><br/><br/>
		</td>
		</tr>		
		</table>
		</fieldset>
		</span>
		<br/>
		<input type="submit" value="Envoyer" />
        </form>	
        </article>
		<article class="grid_5 prefix_2">		
		
		
		<span id="menu">
		 <span class="tableaux">
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
    <div class="privacy"> <a href="../index-5.php" rel="nofollow">Politique privées</a> </div>
	<ul class="list-soc">
        <li><a href="https://www.facebook.com/cosssssmooossss"><img alt="" src="../images/soc-icon1.png"></a></li>
        <li><a href="https://twitter.com/cosmos_center"><img alt="" src="../images/soc-icon2.png"></a></li>
		 <li><a href="http://www.youtube.com/channel/UCVzBnYhbrnQlBai0xeyztyQ"><img alt="" src="../images/youtube-icon-out.png"></a></li>
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

<?php
include("connection.php");
seConnecter();
if(isset($_POST['mail']))
{

$req="SELECT count(*) FROM `pfc2a4`.`inscription` WHERE  `mail` ='".$_POST['mail']."'";
$res=mysql_query($req);
if(mysql_result($res,0)==0)
{
if((!empty($_POST['nom']))&&(!empty($_POST['login'])) && (ValideEMail($_POST['mail'])=="") && (Validepwd($_POST['password'])=="")&& (Verifpwd($_POST['verif'])==""))
{
		$nomR=$_POST['nom'];
		$loginR=$_POST['login'];
		$mailR=$_POST['mail'];
		$passwordR=$_POST['password'];
		$verif_passwordR=$_POST['verif'];
		$cle = md5(microtime(TRUE)*100000);
		
		
$requete="INSERT INTO  `pfc2a4`.`inscription` (
`Nom` ,
`id_compte` ,
`Login`,
`mail` ,
`password` ,
`verif_password`,
`cle`,`actif`
)
VALUES (
'$nomR', NULL ,  '$loginR',  '$mailR',  '$passwordR',  '$verif_passwordR','$cle',''
);";
if(mysql_query($requete))
{

if(!empty($_POST['EnvoyerDonnee']))
		{
		echo "<a href=http://127.0.0.1/template_reeducation_version_final/valider.php?cle='".$cle."'> Bienvenue sur VotreSite,
 
Pour activer votre compte, veuillez cliquer sur le lien ci dessous
ou copier/coller dans votre navigateur internet.
http://127.0.0.1/template_reeducation_version_final/valider.php?cle='".urlencode($cle)."'
 
---------------
Ceci est un mail automatique, Merci de ne pas y répondre.';
</a>";
		exit;
		}
		
}
else
echo "insertion KO";
}
}
else
{
echo "<meta http-equiv=\"refresh\"content=\"0,URL=index-7.php\"/>";
}
}
?>
<?php
  function ValideEMail($QuelleAdresse)
    {
  if ($QuelleAdresse == "")
    return "<font color='#FF0000'>L'E-Mail ne peut pas être vide</font><BR>";
  if (strspn (strtolower($QuelleAdresse), "abcdefghijklmnopqrstuvwxyz0123456789-_@.") < strlen($QuelleAdresse))
    return "<font color='#FF0000'>L'E-Mail que vous avez fourni contient des caractères non-autorisés</font><BR>";
  if (substr_count($QuelleAdresse , "@") == 0)
    return "<font color='#FF0000'>Un E-Mail DOIT contenir le signe @</font><BR>";
	if (substr_count($QuelleAdresse , "@") > 1)
  return "<font color='#FF0000'>Un E-Mail ne peut contenir plus d'un signe @</font><BR>";
  if ((strpos($QuelleAdresse , "@")==0) || (strpos($QuelleAdresse , "@")==strlen($QuelleAdresse)-1))
  return "<font color='#FF0000'>Un E-Mail ne peut commencer ni finir avec le signe @</font><BR>";
  if (strlen($QuelleAdresse) < 6)
  return "<font color='#FF0000'>L'E-Mail doit mesurer au moins 6 caractères</font><BR>";
if (strlen($QuelleAdresse) >= 50)
  return "<font color='#FF0000'>L'E-Mail ne peut excéder 50 caractères</font><BR>";
  if ((strspn($QuelleAdresse[0], "abcdefghijklmnopqrstuvwxyz") == 0) || (strspn($QuelleAdresse[strlen($QuelleAdresse)-1], "abcdefghijklmnopqrstuvwxyz") == 0))
  return "<font color='#FF0000'>Le premier et le dernier catactère de l'E-Mail doit être une lettre</font><BR>";
  if (($QuelleAdresse[strlen($QuelleAdresse)-3] == ".") || ($QuelleAdresse[strlen($QuelleAdresse)-4] == "."))
  {}
else
  return "<font color='#FF0000'>Il manque un point dans votre E-Mail, ou il est mal placé</font><BR>";
  return "";
    }
  ?>
  <?php
  function Validepwd($pwd)
    {
  if ($pwd == "")
    return "<font color='#FF0000'>Le mot de passe ne peut pas être vide</font><BR>";
  if (strlen($pwd) < 8)
  return "<font color='#FF0000'>Le mot de passe doit mesurer au moins 8 caractères</font><BR>";
if (strlen($pwd) >= 30)
  return "<font color='#FF0000'>Le mot de passe ne peut excéder 30 caractères</font><BR>";
  return "";
    }
  ?>
   <?php
  function Verifpwd($pwd1)
    {
  if ($pwd1 == "")
    return "<font color='#FF0000'>Le mot de passe ne peut pas être vide</font><BR>";
  if ($pwd1!=$_POST['password'])
  return "<font color='#FF0000'>non identique</font><BR>";
  return "";
    }
  ?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Contacts</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/style2.css" type="text/css" media="screen" />
  	<link rel="stylesheet" href="../css/slide.css" type="text/css" media="screen" />
    <link rel="icon" href="../images/logo.png" type="../image/x-icon">
    <link rel="shortcut icon" href="../images/logo1.ico" type="../image/x-icon" />
    <script src="../js/jquery.js"></script>
    <script src="../js/jquery-migrate-1.1.1.js"></script>
    <script src="../js/bgstretcher.js"></script>
	<script src="../js/slide.js" type="text/javascript"></script>
	<script type="../text/javascript" src="js/jquery.min.js"></script>
	<!--<script src="js/form4.js"></script>-->
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
   <div id="toppanel" class="toppanel">
	<div id="panel">
		<div class="content clearfix">
		
			<div class="left">
		<form action="index-6.php" method="post" class="clearfix">
		<h1>Espace connexion</h1>
		<label class="grey" for="log">Login:</label>
					<input type="text" name="login" class="field" type="text" name="log" id="log" value="" size="23">
					<label class="grey" for="pwd">Password:</label>
					<input type="password" name="password" class="field" id="pwd" size="23" />
        			<div class="clear"></div>
						<input type="submit" name="submit" value="connexion" class="bt_login">
						<input type="button" name="submit" value="s'inscrire" class="bt_register" onclick='document.location.href="index-7.php";'/>
		</form>
			</div>
			
		</div>
</div> 	
	<div class="tab">
	
		<ul class="login">
			<li class="left">&nbsp;</li>
			<li>Bonjour Visiteur</li>
			<li class="sep">|</li>
			<li id="toggle">
				<a id="open" class="open" href="#">se connecter | s'inscrire</a>
				<a id="close" style="display: none;" class="close" href="#">fermer</a>			
			</li>
			<li class="right">&nbsp;</li>
		</ul>
	</div> 
	
</div> 
      
 
      
   <header>
    <div class="row-nav">
        <div class="main"> 
        <h1 class="logo"><a href="../index.html"><img alt="Eni Gma" src="../images/logo.png"></a></h1> 
        <nav>
			
            <ul class="menu">
            <li><a href="../index.html">Accueil</a></li>
            <li><a href="../index-1.html">A propos</a></li>
            <li><a href="../index-2.html">Services</a></li>
            <li><a href="../index-3.php">Galeries</a></li>
            <li class="current"><a href="index-7.php">Contacts</a></li>
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
		<form method="post" action="index-7.php" name="form4">
		<span class="tableaux">
		<fieldset >
		<legend>Inscription</legend>
		<table> 
		<tr>
		<td>
		Nom:
		</td>
		<td> 
		 <?php
		 if ((empty($_POST['nom'])) && (!empty($_POST['EnvoyerDonnee'])))
        {
        echo "<font color='#FF0000'>";
        echo "Le Nom DOIT être rempli :";
        echo "</font>";
        echo "<BR>";
        }
		
		?>
		<label>
		<input type="text" name="nom"/>*
	    </label>
		<br/><br/>
		</td>
		</tr>
		<tr>
		<td>
        Login:
		</td>
		<td>
		 <?php
		 if ((empty($_POST['login'])) && (!empty($_POST['EnvoyerDonnee'])))
        {
        echo "<font color='#FF0000'>";
        echo "Le login DOIT être rempli :";
        echo "</font>";
        echo "<BR>";
        }
	
        
		?>
		<label> 
		<input type="text" name="login"/>*
		</label>
		<br/><br/>
		</td>
		</tr>
		<tr>
		<td>
        mail:
		</td>
		<td>
		 <?php
		if (!empty($_POST['EnvoyerDonnee']))
        echo ValideEMail($_POST['mail']);
		?>
		<label>
		<input type="text" name="mail" id="mail">*
		</label>
		<br/><br/>
		</td>
		</tr>
		<tr>
		<td>
		password:
		</td>
		<td>
		 <?php
		if (!empty($_POST['EnvoyerDonnee']))
        echo Validepwd($_POST['password']);
		?>
		<label> 
		<input type="password" id="password" name="password"  rows=8 cols=25/>*
		</label>
		<br/><br/>
		</td>
		</tr>	
		<tr>
		<td>
		Vérification password:
		</td>
		<td>
		 <?php
		if (!empty($_POST['EnvoyerDonnee']))
        echo Verifpwd($_POST['verif']);
		?>
		<label> 
		<input type="password" id="verif" name="verif"  rows=8 cols=25/>*
		</label>
		<br/><br/>
		</td>
		</tr>
		</table>
		<p> *: Tout les champs sont obligatoires </p>
		</fieldset>
		</span>
		<input type="submit" name="EnvoyerDonnee" value="Envoyer" />        
		 </form >	
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
    <div class="privacy"> <a href="../index-5.html" rel="nofollow">Politique privées</a> </div>
	<ul class="list-soc">
        <li><a href="https://www.facebook.com/cosssssmooossss"><img alt="" src="../images/soc-icon1.png"></a></li>
        <li><a href="https://twitter.com/cosmos_center"><img alt="" src="../images/soc-icon2.png"></a></li>
		 <li><a href="http://www.youtube.com/channel/UCVzBnYhbrnQlBai0xeyztyQ"><img alt="" src="../images/youtube-icon-out.png"></a></li>
      </ul>
    </div>
    </footer>
    </div>
</body>
</html>

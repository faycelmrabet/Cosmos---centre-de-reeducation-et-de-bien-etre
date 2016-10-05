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
	<?phpsession_start(); ?>
	<?php
include("php/connection.php");
seConnecter();
$requete="SELECT GROUP_CONCAT( DISTINCT date_rdv ORDER BY date_rdv DESC SEPARATOR ',' ) AS date_rdv FROM rendez_vous";

$resultat =mysql_query($requete);
?>
<?php while ($chourouk= mysql_fetch_array($resultat)) {  ?>
	 
	<input type="hidden" id="dnp" name="dnp" READONLY value="<?php echo $chourouk['date_rdv']; ?>" />
    
	<?php }   ?>
	
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" media="screen"  href="css/design.css" />
    <link rel="icon" href="images/logo.png" type="x-icon">
    <link rel="shortcut icon" href="images/logo1.ico" type="x-icon" />
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/bgstretcher.js"></script>
	<script  src="js/calendrier.js"></script>
<script>
	
	function changementType() { 
var type = document.getElementById("categories").value; 
if (type == "service") { 
document.getElementById("1").style.display="block"; 
} else{ 
document.getElementById("1").style.display="none"; 
} 

} 	
function changementFamilles(){
	
	var type = document.getElementById("familles").value; 
if (type == "Balnéothérapie") { 
document.getElementById("3").style.display="block"; 
} else{ 
document.getElementById("3").style.display="none"; 
} 
if (type == "Kinésithérapie"){ 
document.getElementById("4").style.display="block"; 
}else{ 
document.getElementById("4").style.display="none"; 
} 
if (type == "Jeunes-Mamans"){ 
document.getElementById("5").style.display="block"; 
}else{ 
document.getElementById("5").style.display="none"; 
} 
if (type == "Thalassothérapie"){ 
document.getElementById("6").style.display="block"; 
}else{ 
document.getElementById("6").style.display="none"; 
} 
if (type == "Traumatologie"){ 
document.getElementById("7").style.display="block"; 
}else{ 
document.getElementById("7").style.display="none"; 
} 
if (type == "Gériatrie"){ 
document.getElementById("8").style.display="block"; 
}else{ 
document.getElementById("8").style.display="none"; 
} 
}
 
function changementPres(){
	
	var type = document.getElementById("Prestation").value; 

if (type == "Massage bébé Shantala"){ 
document.getElementById("9").style.display="block"; 
}else{ 
document.getElementById("9").style.display="none"; 
} 
if (type == "Massage prénatal"){ 
document.getElementById("10").style.display="block"; 
}else{ 
document.getElementById("10").style.display="none"; 
} 
}
function changementPrestataire(){
	
	var type = document.getElementById("Prestataire").value; 
	
if (type == "Isabelle"){ 
document.getElementById("11").style.display="block"; 
}else{ 
document.getElementById("11").style.display="none"; 
} 
if (type == "Mathilde"){ 
document.getElementById("12").style.display="block"; 
}else{ 
document.getElementById("12").style.display="none"; 
} 
}
</script>
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
            <li><a href="php/index-6-1.php">Contact</a></li>	
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
  <legend>Rendez_vous</legend>
  <form name="form" id="form" action="php/rdv/ajout.php" method="post" valign="top" >
  <table>
  <tr>
  <td colspan="2"><fieldset>Bienvenue sur le site des rendez-vous en ligne .Sélectionnez votre prestation puis ajouter votre Rendez-Vous.</fieldset></td>
  </tr>
  <tr><td><label>Nom </label></td><td>  <input type="" id="name" name="name"  value="" /> </td></tr>
  <tr >
  <td><label>Catégories </label></td><td><select  name="categories" id="categories" class="txt"  maxlength="50" onchange="changementType();">
         <option value=""> Sélection catégories  </option>		   
		 <option value="forfaits"  > Forfaits</option>
		 <option value="service"  > Services </option>
		 </select> </div></td>
  </tr>
  <tr id ="1" style="display:none">
  <td><label> Famille  </label></td><td><select  name="familles" id="familles" class="txt"  maxlength="50" onchange="changementFamilles();">
         <option value=""> Sélectionner famille  </option>		   
		 <option value="Balnéothérapie"> Balnéothérapie</option>
		 <option value="Kinésithérapie"> Kinésithérapie </option>
		 <option value="Thalassothérapie"> Thalassothérapie </option>
		 <option value="Traumatologie"> Traumatologie-Orthopédie  </option>	
		 <option value="Gériatrie">  Gériatrie  </option>
		 <option value="Jeunes-Mamans">  Spécial Jeunes Mamans</option>
		 <option value="" >  </option>	 
		 </select> </td>
  </tr>
  <tr id ="3" style="display:none">
  <td><label> Prestation  </label></td><td><select  name="Prestation1" id="Prestation" class="txt"  maxlength="50" onChange=""; >
         <option value=""> Sélectionner Prestation3  </option>		   
		 <option value="Massage bébé Sh" > Massage bébé Shantala</option>
		 <option value="Massage pratal" > Massage prénatal </option>
		 <option value="" >  </option>	 
		 </select></td>
  </tr>
  <tr id ="4" style="display:none">
  <td><label> Prestation  </label></td><td><select  name="Prestation2" id="Prestation" class="txt"  maxlength="50" onChange="" >
         <option value=""> Sélectionner Prestation4  </option>		   
		 <option value="Massage" > Massage bébé Shantala4</option>
		 <option value="Massage p" > Massage prénatal4 </option>
		 <option value="" >  </option>	 
		 </select></td>
  </tr>
  <tr id ="5" style="display:none">
  <td><label> Prestation  </label></td><td><select  name="Prestation3" id="Prestation" class="txt"  maxlength="50" onChange="changementPres();" >
         <option value=""> Sélectionner Prestation  </option>		   
		 <option value="Massage bébé Shantala" > Massage bébé Shantala</option>
		 <option value="Massage prénatal" > Massage prénatal </option>
		 <option value="" >  </option>	 
		 </select></td>
  </tr>
  <tr id ="6" style="display:none">
  <td colspan="2">
  <table>		
  <colgroup span="5" align="left"/>
  <tr>
  <td><label> Durée: </label><INPUT TYPE="text" SIZE="3" name="duree"id="duree" class="txt" VALUE="00:30" onkeypress="return HHMM(event,'HH:MM');" READONLY></td>
  <td><label> Prix(DT): </label>
			<INPUT TYPE="text" SIZE="3" name="prix" id="prix" VALUE="12" onkeypress="return HHMM(event,'HH:MM');" READONLY></td>
  <td><label> Prestataire </label> <select  name="Prestataire1" id="Prestataire" class="txt"  maxlength="50" onChange="ds_sh(this);changementPrestataire(); " >
         <option value=""> Sélectionner Prestataire </option>		   
		 <option value="Massage bébé Shantala" > Isabelle</option>
		 <option value="Massage prénatal" > Mathilde </option>
		 <option value="" >  </option>	 
		 </select></td>
  </tr>  
  </table>
  </td>
  </tr>
  <tr id ="7" style="display:none">
  <td colspan="2">
  <table>		
  <colgroup span="5" align="left"/>
  <tr>
  <td><label> Durée </label><INPUT TYPE="text" SIZE="3" name="duree"id="duree" class="txt" VALUE="00:45" onkeypress="return HHMM(event,'HH:MM');" READONLY></td>
  <td><label> Prix(DT): </label>
			<INPUT TYPE="text" SIZE="3" name="prix" id="prix" VALUE="50" onkeypress="return HHMM(event,'HH:MM');" READONLY></td>
  <td><label> Prestataire </label> <select  name="Prestataire2" id="Prestataire" class="txt"  maxlength="50" onChange="ds_sh(this);changementPrestataire(); " >
         <option value=""> Sélectionner Prestataire </option>		   
		 <option value="Isabelle" > Isabelle</option>
		 <option value="Mathilde" > Mathilde </option>
		 <option value="" >  </option>	 
		 </select>	</td>
  </tr>   
  </table>
  </td>
  </tr>
   <tr id ="8" style="display:none">
  <td colspan="2">
  <table>		
  <colgroup span="5" align="left"/>
  <tr>
  <td><label> duree  </label><INPUT TYPE="text" SIZE="3" name="duree"id="duree" class="txt" VALUE="00:60" onkeypress="return HHMM(event,'HH:MM');" READONLY></td>
  <td><label> Prix(DT): </label>
			<INPUT TYPE="text" SIZE="3" name="prix" id="prix" VALUE="80" onkeypress="return HHMM(event,'HH:MM');" READONLY></td>
  <td><label> Prestataire </label> <select  name="Prestataire3" id="Prestataire" class="txt"  maxlength="50" onChange="ds_sh(this);changementPrestataire(); " >
         <option value=""> Sélectionner Prestataire </option>		   
		 <option value="Massage bébé Shantala" > Isabelle</option>
		 <option value="Massage prénatal" > Mathilde </option>
		 <option value="" >  </option>	 
		 </select>	</td>
  </tr>   
  </table>
  </td>
  </tr>
   <tr id ="9" style="display:none">
  <td colspan="2">
  <table>		
  <tr>
  <td><label> duree  </label><INPUT TYPE="text" SIZE="3" name="duree"id="duree" class="txt" VALUE="60:00" onkeypress="return HHMM(event,'HH:MM');" READONLY></td>
  <td><label> Prix(DT): </label>
			<INPUT TYPE="text" SIZE="3" name="prix" id="prix" VALUE="50" onkeypress="return HHMM(event,'HH:MM');" READONLY></td>
  <tr>
  <tr>
  <td><label> Prestataire </label> <select  name="Prestataire4" id="Prestataire" class="txt"  maxlength="50" onChange="ds_sh(this);changementPrestataire(); " >
         <option value=""> Sélectionner Prestataire </option>		   
		 <option value="Massage bébé Shantala" > Isabelle</option>
		 <option value="Massage prénatal" > Mathilde </option>
		 <option value="" >  </option>	 
		 </select>	</td>
   </tr>
  </table>
  </td>
  </tr>
  <tr>		
<table class="ds_box" cellpadding="0" cellspacing="0" id="ds_conclass" style="display:none;">
			<tr>
				<td id="ds_calclass"></td>
			</tr>
</table>
	</tr>
	
	
		<div id="rdv_date"></div>
		<input type="hidden" id="s_date" name="s_date"  />
	<div id ="11" style="display:none">
<div class='ds_date' style='color:white' ></div>
<table id=czA13 style="">
<tr><td height="24" width="263" valign=top><TABLE width=263>
<TR><TD class="txt" id="lzA13" width="199" height="24">Sélectionner un RDV disponible</TD>
<TD width="64"><table width=64 style="height:24px;"><tr><td valign=middle id="tzA13">
<select NAME="A13" SIZE=1 onchange="" id="A13" class="Edit">
<option VALUE="1"></option>
<option VALUE="2">08:00</option><option VALUE="3">08:15</option>
<option VALUE="4">08:30</option><option VALUE="5">08:45</option>
<option VALUE="6">09:00</option><option VALUE="7">09:15</option>
<option VALUE="8">09:30</option><option VALUE="9">09:45</option>
<option VALUE="10">10:00</option><option VALUE="11">10:15</option>
<option VALUE="12">10:30</option><option VALUE="13">10:45</option>
<option VALUE="14">11:00</option><option VALUE="15">11:15</option>
<option VALUE="16">11:30</option><option VALUE="17">11:45</option>
<option VALUE="18">12:00</option><option VALUE="19">12:15</option>
<option VALUE="20">12:30</option><option VALUE="21">12:45</option>
<option VALUE="22">13:00</option><option VALUE="23">13:15</option>
<option VALUE="24">13:30</option><option VALUE="25">13:45</option>
<option VALUE="26">14:00</option><option VALUE="27">14:15</option>
<option VALUE="28">14:30</option><option VALUE="29">14:45</option>
<option VALUE="30">15:00</option><option VALUE="31">15:15</option>
<option VALUE="32">15:30</option><option VALUE="33">15:45</option>
<option VALUE="34">16:00</option><option VALUE="35">16:15</option>
<option VALUE="36">16:30</option><option VALUE="37">16:45</option>
<option VALUE="38">17:00</option><option VALUE="39">17:15</option>
<option VALUE="40">17:30</option><option VALUE="41">17:45</option>
<option VALUE="42">18:00</option><option VALUE="43">18:15</option>
<option VALUE="44">18:30</option><option VALUE="45">18:45</option>
<option VALUE="48">19:30</option></select></td></tr></table></TD></TR>
</TABLE></td></tr></table></TD></TR>
</TABLE>
</table>
		</div>
  <tr>
  <td><input type="submit" name="button" id="button" value="Envoyer" /></td>
  </tr>
  </table>
   </form>
  </fieldset>		
  </span>
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
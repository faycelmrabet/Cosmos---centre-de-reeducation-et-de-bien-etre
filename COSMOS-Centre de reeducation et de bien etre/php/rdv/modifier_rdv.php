<?php
include("../connection.php");
seConnecter();
$requete=" select * from `pfc2a4`.`rendez_vous`";
$resultat =mysql_query($requete);
session_start();
if(isset($_SESSION['l']) && isset($_SESSION['p']))
{
echo "Bonjour:<b>".$_SESSION['l']."";
?>


<!DOCTYPE>

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
	<link rel="stylesheet" media="screen"  href="../../css/design.css" />
   <script  src="../../js/calendrier.js"></script>
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
            <li class="current"><a href="../../index-4.php">Contacts</a></li>	
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
			<div><a href="../../rendez_vous.php">Ajouter RDV</a></div>
			<div><a href="liste.php">Afficher RDV</a></div>	
			<div><a href="modifier_rdv.php">Modifier RDV</a></div>	
			<div><a href="liste1.php">Supprimer RDV</a></div>
			</fieldset>
			</span>
		</span>
        
        </article>
    
   
  <article class="grid_5 prefix_2">
		<div class="tableaux">
			<fieldset>
			<legend>Modifier RDV</legend>
			<table border="1">
			<tr class="ligne">
			<td>Id</td>
			<td> nom </td>
			<td>categoriers</td>
			<td>familles</td>
			<td>prestation</td>
			<td>prestataire</td>
			<td>date</td>
			<td>duree</td>
			<td>prix</td>
			<td>heure</td>
			<td>modifier</td>
			</tr>
  <?php while ($chourouk= mysql_fetch_array($resultat)) {  ?>
	<tr class="ligne">
    <td> <?php echo $chourouk['id']; // récupération des données de la base de données?></td>
    <td><?php echo $chourouk['nom'];?></td>
	<td><?php echo $chourouk['categories'];?></td>
    <td><?php echo $chourouk['familles'];?></td>
    <td><?php echo $chourouk['prestation'];?></td>
    <td><?php echo $chourouk['prestataire'];?></td>
    <td><?php echo $chourouk['date_rdv'];?></td>
    <td><?php echo $chourouk['duree'];?></td>
	<td><?php echo $chourouk['prix'];?></td>
	<td><?php echo $chourouk['heure_rdv'];?></td>
    <td> <a href="modifier_rdv.php?id=<?php  echo $chourouk['id']; ?>"> modif </a></td>
    </tr>
  <?php }?>
   </table>
	<?php if (isset($_GET['id'])){ 
		$id_modifier1=$_GET['id'];
		$requete1="select * from `rendez_vous` where id='$id_modifier1'";
		$resultat1=mysql_query($requete1);
		 while($ligne=mysql_fetch_array($resultat1)) {?>
		  <form name="form" id="form" action="valider_modification.php" method="post" valign="top" >
          <table>
          <tr>
                 <label> nom </label> <input type="hidden" name="id" value="<?php echo $ligne['id'];?>"  />
		  </tr>
		  <tr><input type="" id="name" name="name"  value="<?php echo $ligne['nom'];?>"  /></tr>
		  <tr>
	      <div class="cadre">
		  <label>Catégories </label><select  name="categories" id="categories" class="txt"  maxlength="50" onchange="changementType();">
          <option value=""> Sélection catégories  </option>		   
		  <option value="forfaits"  <?php if ($ligne['categories']=="forfaits") echo 'selected="selected"';?>> Forfaits</option>
		  <option value="service"  <?php if ($ligne['categories']=="services") echo 'selected="selected"';?>> Services </option>
		  </select> </br>
		 
          <div id ="1" style="display:none"> 
          </br><label> Famille  </label>  <select  name="familles" id="familles" class="txt"  maxlength="50" onchange="changementFamilles();">
          <option value=""> Sélectionner famille  </option>		   
		  <option value="Balnéothérapie" <?php if ($ligne['familles']=="Balnéothérapie") echo 'selected="selected"';?>> Balnéothérapie</option>
		  <option value="Kinésithérapie" <?php if ($ligne['familles']=="Kinésithérapie") echo 'selected="selected"';?>> Kinésithérapie </option>
		  <option value="Thalassothérapie" <?php if ($ligne['familles']=="Traumatologie") echo 'selected="selected"';?>> Thalassothérapie </option>
		  <option value="Traumatologie" <?php if ($ligne['familles']=="Balnéothérapie") echo 'selected="selected"';?>> Traumatologie-Orthopédie  </option>	
		  <option value="Gériatrie" <?php if ($ligne['familles']=="Gériatrie") echo 'selected="selected"';?>>  Gériatrie  </option>
		  <option value="Jeunes-Mamans"<?php if ($ligne['familles']=="Jeunes-Mamans") echo 'selected="selected"';?>>  Spécial Jeunes Mamans</option>
		  <option value="" >  </option>	 
		  </select> 
          </div>
           <div id ="3" style="display:none"> 
           </br><label> Prestation  </label> <select  name="Prestation1" id="Prestation" class="txt"  maxlength="50" onChange=""; >
           <option value=""> Sélectionner Prestation3  </option>		   
		   <option value="Massage bébé " <?php if ($ligne['prestation']=="Massage bébé") echo 'selected="selected"';?>> Massage bébé Shantala</option>
		   <option value="Massage prènatal" <?php if ($ligne['prestation']=="Massage prènatal") echo 'selected="selected"';?>> Massage prénatal </option>
		   <option value="" >  </option>	 
		   </select>
           </div>

          <div id ="4" style="display:none"> 
           </br> <label> Durée prestation: </label>
		  <INPUT TYPE="text" SIZE="3" name="duree"id="duree" class="txt" VALUE="00:30" <?php if($ligne['duree']=="00:30") echo $ligne['duree'];?> onkeypress="return HHMM(event,'HH:MM');" READONLY>
		  <label> Prix: </label>
			<INPUT TYPE="text" SIZE="3" name="prix" id="prix" VALUE="12" <?php if($ligne['prix']=="12") echo $ligne['prix'];?> onkeypress="return HHMM(event,'HH:MM');" READONLY>DT </br>
			<label> Prestataire </label> <select  name="Prestataire1" id="Prestataire" class="txt"  maxlength="50" onChange="ds_sh(this);changementPrestataire(); " >
         <option value=""> Sélectionner Prestataire </option>		   
		 <option value="Isabelle" <?php if ($ligne['prestataire']=="Isabelle") echo 'selected="selected"';?>> Isabelle</option>
		 <option value="Mathilde"<?php if ($ligne['prestataire']=="Mathilde") echo 'selected="selected"';?> > Mathilde </option>
		 <option value="" >  </option>	 
		 </select>
	
</div>

<div id ="5" style="display:none"> 
   </br> <label> Prestation  </label> <select  name="Prestation2" id="Prestation" class="txt"  maxlength="50" onChange="changementPres();" >
         <option value=""> Sélectionner Prestation  </option>		   
		 <option value="Massage bébé Shantala" <?php if ($ligne['prestation']=="Massage bébé") echo 'selected="selected"';?>> Massage bébé Shantala</option>
		 <option value="Massage prénatal" <?php if ($ligne['prestation']=="Massage prénatal") echo 'selected="selected"';?>> Massage prénatal </option>
		 <option value="" >  </option>	 
		 </select>
	
</div>

<div id ="6" style="display:none"> 
       </br>   <label> Durée prestation: </label>
			<INPUT TYPE="text" SIZE="3" name="duree"id="duree" class="txt" VALUE="00:30" <?php if($ligne['duree']=="00:30") echo $ligne['duree'];?> onkeypress="return HHMM(event,'HH:MM');" READONLY>
		  <label> Prix: </label>
			<INPUT TYPE="text" SIZE="3" name="prix" id="prix" VALUE="12" <?php if($ligne['prix']=="12") echo $ligne['prix'];?> onkeypress="return HHMM(event,'HH:MM');" READONLY>DT </br>
			<label> Prestataire </label> <select  name="Prestataire2" id="Prestataire" class="txt"  maxlength="50" onChange="ds_sh(this);changementPrestataire(); " >
         <option value=""> Sélectionner Prestataire </option>		   
		 <option value="Isabelle" <?php if ($ligne['prestataire']=="Isabelle") echo 'selected="selected"';?>> Isabelle</option>
		 <option value="Mathilde"<?php if ($ligne['prestataire']=="Mathilde") echo 'selected="selected"';?> > Mathilde </option>
		 <option value="" >  </option>	 
		 </select>
	
</div>

<div id ="7" style="display:none"> 
   </br> <label> duree  </label> 
          <INPUT TYPE="text" SIZE="3" name="duree"id="duree" class="txt" VALUE="00:45" <?php if($ligne['duree']=="00:45") echo $ligne['duree'];?> onkeypress="return HHMM(event,'HH:MM');" READONLY>
		  <label> Prix: </label>
			<INPUT TYPE="text" SIZE="3" name="prix" id="prix" VALUE="50" <?php if($ligne['prix']=="50") echo $ligne['prix'];?> onkeypress="return HHMM(event,'HH:MM');" READONLY>DT </br>
			<label> Prestataire </label> <select  name="Prestataire3" id="Prestataire" class="txt"  maxlength="50" onChange="ds_sh(this);changementPrestataire(); " >
         <option value=""> Sélectionner Prestataire </option>		   
		 <option value="Isabelle" <?php if ($ligne['prestataire']=="Isabelle") echo 'selected="selected"';?>> Isabelle</option>
		 <option value="Mathilde"<?php if ($ligne['prestataire']=="Mathilde") echo 'selected="selected"';?> > Mathilde </option>
		 <option value="" >  </option>	 
		 </select>	
</div>

<div id ="8" style="display:none"> 
   </br> <label> duree  </label> 
          <INPUT TYPE="text" SIZE="3" name="duree"id="duree" class="txt" VALUE="00:60" <?php if($ligne['duree']=="00:60") echo $ligne['duree'];?> onkeypress="return HHMM(event,'HH:MM');" READONLY>
		  <label> Prix: </label>
			<INPUT TYPE="text" SIZE="3" name="prix" id="prix" VALUE="50" <?php if($ligne['prix']=="50") echo $ligne['prix'];?> onkeypress="return HHMM(event,'HH:MM');" READONLY>DT </br>
			<label> Prestataire </label> <select  name="Prestataire4" id="Prestataire" class="txt"  maxlength="50" onChange="ds_sh(this);changementPrestataire(); " >
         <option value=""> Sélectionner Prestataire </option>		   
		 <option value="Isabelle" <?php if ($ligne['prestataire']=="Isabelle") echo 'selected="selected"';?>> Isabelle</option>
		 <option value="Mathilde"<?php if ($ligne['prestataire']=="Mathilde") echo 'selected="selected"';?> > Mathilde </option>
		 <option value="" >  </option>	 
		 </select>	

</div>		 

		 
		<div id ="9" style="display:none"> 
   </br> <label> duree  </label> 
          <INPUT TYPE="text" SIZE="3" name="duree"id="duree" class="txt" VALUE="60:00" <?php if($ligne['duree']=="60:00") echo $ligne['duree'];?> onkeypress="return HHMM(event,'HH:MM');" READONLY></hr>
		  <label> Prix: </label>
			<INPUT TYPE="text" SIZE="3" name="prix" id="prix" VALUE="50" <?php if($ligne['prix']=="50") echo $ligne['prix'];?> onkeypress="return HHMM(event,'HH:MM');" READONLY>DT </br>
			</br><label> Prestataire </label> 
			<select  name="Prestataire5" id="Prestataire" class="txt"  maxlength="50" onChange="ds_sh(this);" >
         <option value=""> Sélectionner Prestataire </option>		   
		 <option value="Isabelle" <?php if ($ligne['prestataire']=="Isabelle") echo 'selected="selected"';?>> Isabelle</option>
		 <option value="Mathilde"<?php if ($ligne['prestataire']=="Mathilde") echo 'selected="selected"';?> > Mathilde </option>
		 <option value="" >  </option>	 
		 </select>		 
		 </div> 
		 <?php
seConnecter();
$requete="SELECT GROUP_CONCAT( DISTINCT date_rdv ORDER BY date_rdv DESC SEPARATOR ',' ) AS date_rdv FROM rendez_vous";

$resultat =mysql_query($requete);
?>
<?php while ($chourouk= mysql_fetch_array($resultat)) {  ?>
	 
	<input type="hidden" id="dnp" name="dnp" READONLY value="<?php echo $chourouk['date_rdv']; ?>" />
    
	<?php }   ?>
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
<option VALUE="44">18:30</option><option VALUE="45">18:45</option
option VALUE="48">19:30</option></select></td></tr></table></TD></TR>
</TABLE></td></tr></table></TD></TR>
</TABLE>

</table>
		</div>
		
		
		</div>

<input type="submit" name="button" id="button" value="Envoyer" />
</div>
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
<?php
$base=mysql_connect('localhost', 'root' , ''); 
 mysql_select_db('pfc2a4',$base) or die('Connexion a la base impossible : ' . mysql_error()); 
 $query=mysql_query('SELECT  EXTRACT( MONTH FROM date_rdv ) AS mois,COUNT(nom) as nombre,familles  FROM `rendez_vous` WHERE EXTRACT( YEAR
FROM date_rdv ) =2014 GROUP BY familles,mois ORDER BY mois ASC ');

$i=0;
$element=array();
$js=array();
while($row=mysql_fetch_object($query))
{
    //Prendre la premiere quantite vendue comme le minimum et maximum
	//Mettre les noms de produit et les mois de ventes dans des tableaux
	if($i==0)
    {
        $min=$row->nombre;
        $max=$row->nombre;
        array_push($element, $row->familles);
        array_push($js, $row->mois);
    }
	//Inserer le nom de produit dans le tableau s'il n'est pas encore enregistrer
    if(!in_array($row->familles,$element))
        {
            array_push($element, $row->familles);
        }
	//Inserer le mois de vente dans le tableau s'il n'est pas encore enregistrer
    if(!in_array($row->mois,$js))
        {
            array_push($js, $row->mois);
        }
	
    if($row->nombre < $min)
		{
			$min=$row->nombre;
		}
    else
		{
			if($row->nombre > $max)
				{$max=$row->nombre;}
		}
    $i++;
}
//Mettre les mois en Francais dans un tableau
$moisFr=array('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Decembre');

//type mime de l'image
header('Content-type: image/png');
//Chemin vers le police à utiliser
$font_file = 'C:/Windows/Fonts/arial.ttf ';
//Adapter la largeur de l'image par rapport au nombre de ligne et nombre de mois
//$largeur=$i*20+(count($js)*10)+100;
//$hauteur=400;
$largeur=900;
$hauteur=350;
$absis=80;
$courbe=imagecreatetruecolor($largeur, $hauteur);
//Générer un tableau de couleurs
$couleur=array();
$red=0;
$blue=0;
$green=0;
for($n=0;$n<count($element);$n++)
{
    $x = $n%3;
    switch ($x){
        case(0):
            $red+=85;
            break;
        case(1):
            $blue+=85;
            break;
        case(2):
            $green+=85;
            break;
    }
    $couleur[$n]=imagecolorallocate($courbe, $red,$green , $blue);
}
//Les autre couleurs utils
$ligne=imagecolorallocate($courbe, 220, 220, 220);
$fond=imagecolorallocate($courbe, 250, 250, 250);
$noir=imagecolorallocate($courbe, 0, 0, 0);
$blanc=imagecolorallocate($courbe, 255, 255, 255);
$rouge=imagecolorallocate($courbe, 255, 0, 0);
//Colorer le fond
imagefilledrectangle($courbe,0 , 0, $largeur, $hauteur, $fond);
//Tracer l'abscisse et l'ordonnée
imageline($courbe, 50, $hauteur-$absis, $largeur-10,$hauteur-$absis, $noir);
imageline($courbe, 50,$hauteur-$absis,50,10, $noir);
if($min!=0)
{
    $absis+=30;
    $a=30;
}
$nbOrdonne=10;
//Calculer les échelles suivants les abscisses et ordonnées
$echelleX=($largeur-90-((count($js)*10)))/$i;
$echelleY=($hauteur-$absis-20)/$nbOrdonne;
$i=$min;
$py=($max-$min)/$nbOrdonne;
$pasY=$absis;
//Tracer les grides
while($pasY<($hauteur-19))
{
    imagestring($courbe, 2,10 , $hauteur-$pasY-6, round($i), $noir);
    imageline($courbe, 50, $hauteur-$pasY, $largeur-20,$hauteur-$pasY, $ligne);
//Decaller vers le haut pour la prochaine gride    
   $pasY+=$echelleY;
    $i+=$py;
}
 


$pasX=60;
 mysql_data_seek($query, 0);
 $mois=0;
 while($row=mysql_fetch_object($query))
 {
   if($mois<($row->mois))
   {
        //Ecrire le mois en Français en abscisse
		imagestring($courbe, 2, $pasX,$hauteur-$absis+32 , $moisFr[$row->mois-1], $noir);
		//Décaller 10 px du mois précédent
        $pasX+=10;
   }
   //Calculer la hauteur de la rectangle
   $y=($hauteur) -(($row->nombre -$min) * ($echelleY/$py))-$absis;
   //Prendre la couleur correspondante au produit
   $clr=$couleur[array_search($row->familles, $element)];
   //Dessiner le rectangle
   imagefilledrectangle($courbe,$pasX-10 , $hauteur-$absis+$a, $pasX+10, $y, $clr);
   //Ecrire la valeur en verticale
   imagefttext($courbe, 10, 270, $pasX-3, $y+5, $blanc, $font_file, $row->nombre);
   //Decaller le prochain rectangle
   $pasX+=$echelleX;
   $mois=$row->mois;
}

//La legende
$pasX=50;
//Hauteur de la premiere
$pasY=$hauteur-$absis+47;
foreach ($element as $index=>$famille)
{
    if(($index % 4)==3)
    {
        $pasX+=120;
        $pasY=$hauteur-$absis+47;
    }
	//Le nom du poduit avec sa couleur
	imagestring($courbe, 2, $pasX,$pasY , $famille, $couleur[$index]);
	//Un petit rectangle 
	imagefilledrectangle($courbe,$pasX+80 , $pasY, $pasX+100, $pasY+12, $couleur[$index]);
    $pasY+=20;
	
}
imagepng($courbe);
imagedestroy($courbe);

?>


<?php
$base=mysql_connect('localhost', 'root' , ''); 
 mysql_select_db('pfc2a4',$base) or die('Connexion a la base impossible : ' . mysql_error()); 
$query=mysql_query('SELECT  EXTRACT( MONTH FROM date_rdv ) AS mois,COUNT(nom) as nombre,familles  FROM `rendez_vous` WHERE EXTRACT( YEAR
FROM date_rdv ) =2014 GROUP BY familles ORDER BY familles  ');

$element=array();
$total=0;
//Parcourir le resultat de la requete et le mettre dans un tableau
while($row=mysql_fetch_object($query))
{
    $element[$row->familles]=$row->nombre;
    $total+=$row->nombre;
}
header('Content-type: image/png');
$largeur=400;
$hauteur=350;
$courbe=imagecreatetruecolor($largeur, $hauteur);
$couleur=array();
$red=0;$blue=0;$green=0;
$nbe=count($element);
$pas=round(255*3/$nbe);
//Génération des couleurs pour chaque produit
for($n=0;$n<$nbe;$n++)
{
    $x = $n%3;
    switch ($x){
        case(0):
            $red+=$pas;
            break;
        case(1):
            $blue+=$pas;
            break;
        case(2):
            $green+=$pas;
            break;
    }
    //Couleur claire
    $couleur[$n][0]=imagecolorallocate($courbe, $red-15,($green==0?$green:($green-15)) , ($blue==0?$blue:($blue-15)));
    //Couleur sombre pour l'effet 3D
	$couleur[$n][1]=imagecolorallocate($courbe, $red,$green , $blue);
}
$ligne=imagecolorallocate($courbe, 220, 220, 220);
$fond=imagecolorallocate($courbe, 250, 250, 250);
$noir=imagecolorallocate($courbe, 0, 0, 0);
imagefilledrectangle($courbe,0 , 0, $largeur, $hauteur, $fond);
//Creation de l'effet 3D
//Dessiner des arc remplis de 20px d'épeseur 
for ($i = 150; $i > 130; $i--){
//Angle de début pour le premier produit
$debut=0;
$j=0;
foreach ($element as $familles=>$nombre)
{
   //Calcul de l'angle correspondant à la quantité de produit vendu
   $valeur=$nombre/$total*360;
   //Calcul de l'angle de la fin pour le produit
   $fin=$debut+$valeur;
   //Dessiner l'arc
   imagefilledarc($courbe, 200, $i, 350, 220, $debut,$fin, $couleur[$j][0], IMG_ARC_PIE);
   $j++;
   //L'angle de début pour le produit suivant
   $debut=$fin;
}
   }
$j=0;
$pasX=20;
$pasY=270;
//Dessiner les arcs claires
foreach ($element as $familles=>$nombre)
{
  $valeur=$nombre/$total*360;
   $fin=$debut+$valeur;
   imagefilledarc($courbe, 200, $i, 350, 220, $debut, $fin, $couleur[$j][1], IMG_ARC_PIE);
   $debut=$fin;
   //Légende
   //Mettons 4 produits par colonne
   if(($j % 5)==4)
    {
        $pasX+=150;
        $pasY=270;
    }
    //Le nom du produit et la quatité vendue avec la couleur qui lui est attribué
    imagestring($courbe, 2, $pasX,$pasY , $familles.': '.$nombre, $couleur[$j][1]);
    //Le petit rectangle qui designe la couleur
	imagefilledrectangle($courbe,$pasX+120 , $pasY, $pasX+140, $pasY+12, $couleur[$j][1]);
    $pasY+=20;
    $j++;
}
imagepng($courbe);
imagedestroy($courbe);
?>
<?PHP
include "../config.php";

	$sql="select count(*)as nbreservation,ville from (reservation inner join hotel on reservation.idhotel=hotel.id) group by ville ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	





$element=array();
$total=0;
foreach($liste as $row)
{
	$text=$row['ville'];
	$text2=str_replace(' ','-',$text);
  var_dump($text2);
    $element[$text2]=$row['nbreservation'];
    $total+=$row['nbreservation'];
}



header('Content-type: image/png');
$largeur=400;
$hauteur=350;
$courbe=imagecreatetruecolor($largeur, $hauteur);
$couleur=array();
$red=0;$blue=0;$green=0;
$nbe=count($element);
$pas=round(255*3/$nbe);
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
    $couleur[$n][0]=imagecolorallocate($courbe, $red-15,($green==0?$green:($green-15)) , ($blue==0?$blue:($blue-15)));
    $couleur[$n][1]=imagecolorallocate($courbe, $red,$green , $blue);
}
$ligne=imagecolorallocate($courbe, 220, 220, 220);
$fond=imagecolorallocate($courbe, 250, 250, 250);
$noir=imagecolorallocate($courbe, 0, 0, 0);
imagefilledrectangle($courbe,0 , 0, $largeur, $hauteur, $fond);
for ($i = 150; $i > 130; $i--)
{
        $debut=80;
        $j=0;
        foreach ($element as $libelle=>$quantite)
        {
           $valeur=$quantite/$total*360;
           $fin=$debut+$valeur;
           imagefilledarc($courbe, 200, $i, 350, 220, $debut,$fin, $couleur[$j][0], IMG_ARC_PIE);
           $j++;
           $debut=$fin;
        }
 }
$j=0;
$pasX=20;
$pasY=270;
foreach ($element as $libelle=>$quantite)
{
  $valeur=$quantite/$total*360;
   $fin=$debut+$valeur;
   imagefilledarc($courbe, 200, $i, 350, 220, $debut, $fin, $couleur[$j][1], IMG_ARC_PIE);
   $debut=$fin;
   if(($j % 5)==4)
    {
        $pasX+=150;
        $pasY=270;
    }
    imagefilledrectangle($courbe,$pasX+120 , $pasY, $pasX+140, $pasY+12, $couleur[$j][1]);
    imagestring($courbe, 2, $pasX,$pasY , $libelle.': '.$quantite, $couleur[$j][1]);
    $pasY+=20;
    $j++;
}
$file = '../views/monimage1.png';
//imagepng($courbe);
 imagepng($courbe,$file);
 
 
 imagedestroy($courbe);
 header('Location: afficherstat1.php');


?>
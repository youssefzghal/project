<?PHP
include "../entities/hotel.php";
include "../core/hotelc.php";

if((isset($_POST['idc'])) and (isset($_POST['idh'])) )
{

	$idc=$_POST['idc'];
	$idh=$_POST['idh'];

             $fav1=new favoris('1',$idc,$idh);
//Partie2
/*var_dump($employe1);
}
*/
//Partie3    
            
             $fav1C=new favorisc();
             $fav1C->ajouter_favoris($fav1);
             
            header('Location: offers.php');
             

}
else
{
	echo 'verifier les champs';
}

?>
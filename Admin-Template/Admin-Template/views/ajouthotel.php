



<?PHP
include "../entities/hotel.php";
include "../core/hotelc.php";

if (isset($_POST['idhotel']) and isset($_POST['nom']) and isset($_POST['ville']) and isset($_POST['nbetoiles']) 
	and isset($_POST['note'])and isset($_POST['review']) and isset($_POST['ch2']) and isset($_POST['ch3']) and isset($_POST['total'])
	and isset($_POST['prixd']) and isset($_POST['prixt']) and isset($_POST['image']) and isset($_POST['url']) 
	and isset($_POST['msg']) and isset($_POST['longitude']) and isset($_POST['email_addr'])
   ){

             $hotel1=new hotel($_POST['idhotel'],$_POST['nom'],$_POST['ville'],$_POST['nbetoiles'],$_POST['note'],
             	                    $_POST['review'],$_POST['ch2'],$_POST['ch3'],$_POST['total'],$_POST['prixd'],
             	                    $_POST['prixt'],$_POST['image'],$_POST['url'],$_POST['msg'],$_POST['longitude'],$_POST['email_addr']
             	                    );
//Partie2
/*var_dump($employe1);
}
*/
//Partie3    
             var_dump($_POST['image']);
             $hotel1C=new hotelc();
             $hotel1C->ajouterhotel($hotel1);
             
             header('Location: afficherhotel.php');
	
}
else{
	echo "vérifier les champs";
}




?>
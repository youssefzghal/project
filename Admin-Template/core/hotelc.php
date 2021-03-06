<?PHP
include "../config.php";
class hotelc {
function afficherhotel ($hotel){
		echo "id: ".$hotel->getid()."<br>";
		echo "Nom: ".$hotel->getnom()."<br>";
		echo "ville: ".$hotel->getville()."<br>";
		echo "categorie: ".$hotel->getcategorie()."<br>";
		echo "note: ".$hotel->getnote()."<br>";
		echo "review: ".$hotel->getreview()."<br>";
		echo "chambres doubles: ".$hotel->getchambresdoubles()."<br>";
		echo "chambres triples: ".$hotel->getchambrestriples()."<br>";
		echo "totalchambres: ".$hotel->gettotalchambres()."<br>";
		echo "prix doubles: ".$hotel->getprixdoubles()."<br>";
		echo "prix triples: ".$hotel->getprixtriples()."<br>";
		echo "image: ".$hotel->getimage()."<br>";
		echo "url: ".$hotel->geturl()."<br>";
		echo "description: ".$hotel->getdescription()."<br>";
		echo "longitude: ".$hotel->getlongitude()."<br>";
		echo "email: ".$hotel->getemail()."<br>";
	}
	
	function ajouterhotel($hotel){
		$sql="insert into hotel (id,nom,ville,categorie,note,review,chambresdoubles,chambrestriples,totalchambres,prixdoubles,
		prixtriples,image,url,description,longitude,email) values (:id,:nom,:ville,:categorie,:note,:review,:chambresdoubles,
		:chambrestriples,:totalchambres,:prixdoubles,:prixtriples,:image,:url,:description,:longitude,:email)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        


         $id=$hotel->getid();
		 $nom=$hotel->getnom();
		$ville=$hotel->getville();
		$categorie= $hotel->getcategorie();
		 $note=$hotel->getnote();
		 $review= $hotel->getreview();
		 $chambresdoubles=$hotel->getchambresdoubles();
		 $chambrestriples=$hotel->getchambrestriples();
		 $totalchambres=$hotel->gettotalchambres();
	     $prixdoubles=$hotel->getprixdoubles();
		 $prixtriples=$hotel->getprixtriples();
		 $image=$hotel->getimage();
		 $url=$hotel->geturl();
		 $description=$hotel->getdescription();
		 $longitude=$hotel->getlongitude();
		 $email= $hotel->getemail();



		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':ville',$ville);
		$req->bindValue(':categorie',$categorie);
		$req->bindValue(':note',$note);

		$req->bindValue(':review',$review);
		$req->bindValue(':chambresdoubles',$chambresdoubles);
		$req->bindValue(':chambrestriples',$chambrestriples);
		$req->bindValue(':totalchambres',$totalchambres);
		$req->bindValue(':prixdoubles',$prixdoubles);

		$req->bindValue(':prixtriples',$prixtriples);
		$req->bindValue(':image',$image);
		$req->bindValue(':url',$url);
		$req->bindValue(':description',$description);
		$req->bindValue(':longitude',$longitude);
		$req->bindValue(':email',$email);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherhotels(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From hotel order by id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


	function triernote(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From hotel order by note desc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerhotel($id){
		$sql="DELETE FROM hotel where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierhotel($hotel,$id){
		$sql="UPDATE hotel SET id=:idd, nom=:nom,ville=:ville,categorie=:categorie,note=:note,review=:review,chambresdoubles=:chambresdoubles,chambrestriples=:chambrestriples,totalchambres=:totalchambres,prixdoubles=:prixdoubles,prixtriples=:prixtriples,image=:image,url=:url,description=:description,longitude=:longitude,email=:email WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$hotel->getid();

		 $nom=$hotel->getnom();
		$ville=$hotel->getville();
		$categorie= $hotel->getcategorie();
		 $note=$hotel->getnote();
		 $review= $hotel->getreview();
		 $chambresdoubles=$hotel->getchambresdoubles();
		 $chambrestriples=$hotel->getchambrestriples();
		 $totalchambres=$hotel->gettotalchambres();
	     $prixdoubles=$hotel->getprixdoubles();
		 $prixtriples=$hotel->getprixtriples();
		 $image=$hotel->getimage();
		 $url=$hotel->geturl();
		 $description=$hotel->getdescription();
		 $longitude=$hotel->getlongitude();
		 $email= $hotel->getemail();

        
		$datas = array(':idd'=>$idd, ':id'=>$id, ':nom'=>$nom,':ville'=>$ville,':categorie'=>$categorie,':note'=>$note,
			':review'=>$review,':chambresdoubles'=>$chambresdoubles,':chambrestriples'=>$chambrestriples,
			':totalchambres'=>$totalchambres,':prixdoubles'=>$prixdoubles,
			':prixtriples'=>$prixtriples,':image'=>$image,':url'=>$url,
			':description'=>$description,':longitude'=>$longitude,':email'=>$email);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id',$id);

		$req->bindValue(':nom',$nom);
		$req->bindValue(':ville',$ville);
		$req->bindValue(':categorie',$categorie);
		$req->bindValue(':note',$note);

		$req->bindValue(':review',$review);
		$req->bindValue(':chambresdoubles',$chambresdoubles);
		$req->bindValue(':chambrestriples',$chambrestriples);
		$req->bindValue(':totalchambres',$totalchambres);
		$req->bindValue(':prixdoubles',$prixdoubles);

		$req->bindValue(':prixtriples',$prixtriples);
		$req->bindValue(':image',$image);
		$req->bindValue(':url',$url);
		$req->bindValue(':description',$description);
		$req->bindValue(':longitude',$longitude);
		$req->bindValue(':email',$email);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererhotel($id){
		$sql="SELECT * from hotel where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListehotel($v){
		$sql="SELECT * from hotel where ville='$v'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function rechercherselonvillecategorie($vi,$nb)
	{
		$sql="SELECT * from hotel where ville='$vi' and categorie='$nb'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}





         function rechercherselonvillenom($vi,$no)
         {
		$sql="SELECT * from hotel where ville='$vi' and nom='$no'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	    }





    function rechercherselonnom($no)
    {
		$sql="SELECT * from hotel where nom='$no'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	    }



	   function rechercherseloncategorie($nb)
	    {
		$sql="SELECT * from hotel where categorie='$nb'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	    }

         


       function rechercherseloncategorienom($nb,$no)
       {
		$sql="SELECT * from hotel where categorie='$nb' and nom='$no'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	    }





	        function rechercherselontous($vi,$nb,$no)
	         {
		$sql="SELECT * from hotel where ville='$vi' and categorie='$nb' and nom='$no'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	    }



















}



class reservationc
{








function recuperer_nbchambrereserve($date1,$date2,$id)
	{
		$sql="SELECT sum(nbdouble)as somme FROM `reservation` WHERE ((`checkin` BETWEEN '$date1' AND '$date2') OR (`checkout` BETWEEN '$date1' AND '$date2' ) or (`checkin`<='$date1' AND `checkout`>='$date2'))and (idhotel=$id) ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}





function chercherreservation($date1,$date2)
	{
		$sql="select hotel.nom hotel ,hotel.ville,reservation.* from (reservation inner join hotel on reservation.idhotel=hotel.id) WHERE ((`checkin` BETWEEN '$date1' AND '$date2') OR (`checkout` BETWEEN '$date1'AND '$date2' ) or (`checkin`<='$date1' AND `checkout`>='$date2'))  ";
		
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}



function cherchercomplet($date1,$date2)
	{
		$sql="SELECT hotel.nom,idhotel,sum(nbdouble) somme,hotel.chambresdoubles FROM (reservation inner join hotel on reservation.idhotel=hotel.id) WHERE ((`checkin` BETWEEN '$date1' AND '$date2') OR (`checkout` BETWEEN '$date1' AND '$date2' ) or (`checkin`<='$date1' AND `checkout`>='$date2'))GROUP by idhotel,hotel.chambresdoubles having somme>=chambresdoubles    ";

		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}



function verifierdisponible($reservation)
{

	$date1=$reservation->getcheckin();
	$date2=$reservation->getcheckout();
	$id=$reservation->getidhotel();
    $chambres_demande=$reservation->getnbdouble();

   /* var_dump($date1);
    var_dump($date2);
    var_dump($id);
    var_dump($chambres_demande);*/
        $liste=$this->recuperer_nbchambrereserve($date1,$date2,$id);
         foreach($liste as $row){$total_reserve=$row['somme'] ;}

         
         $hotel=new hotelc();
         $liste1=$hotel->recupererhotel($id);
          foreach($liste1 as $row){$nb_double=$row['chambresdoubles'] ;}
          
          $chambres_disponible=$nb_double-$total_reserve;
         
          if($chambres_disponible>0)
             {if($chambres_demande<=$chambres_disponible)
             	{
             		//inserer
                    echo 'succes';
             		return true;
             	}
             	else
             	     {
                       
             	      echo " seulement .".$chambres_disponible." chambres disponible a cette intervalle"."<br>";
                      

                       return false;
                       
                
                   }

          }
          else
          {
          	echo 'entre ces dates l hotel est complet';
          	return false;
          }

}




function ajouter_reservation($reservation){
		$sql="INSERT INTO reservation (idres,nom,prenom,nbdouble,checkin,checkout,idhotel,telephone) VALUES (NULL,:nom,:prenom,:nbdouble,:checkin,:checkout,:idhotel,:telephone);";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        


         $nom=$reservation->getnom();
		 $prenom=$reservation->getprenom();
		$nbdouble=$reservation->getnbdouble();
		
		 $checkin=$reservation->getcheckin();
		 $checkout= $reservation->getcheckout();
		 $idhotel=$reservation->getidhotel();
		 $telephone=$reservation->gettelephone();
	

		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':nbdouble',$nbdouble);
		$req->bindValue(':checkin',$checkin);
		$req->bindValue(':checkout',$checkout);
         $req->bindValue(':idhotel',$idhotel);
         $req->bindValue(':telephone',$telephone);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}



function afficherreservation(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="select hotel.nom hotel ,hotel.ville,reservation.* from (reservation inner join hotel on reservation.idhotel=hotel.id) order by hotel ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}



	function supprimerreservation($id){
		$sql="DELETE FROM reservation where idres= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}





}

?>
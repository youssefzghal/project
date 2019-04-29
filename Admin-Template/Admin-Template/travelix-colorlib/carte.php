<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)

session_start (); 

$text='bonjour'; 
$logout='';
$login='login';
// On récupère nos variables de session
if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
{ 

  $l= $_SESSION['l'];
  $p= $_SESSION['p'];
  $telephone=$_SESSION['numero'];
  $nom=$_SESSION['nom'];
  $prenom=$_SESSION['prenom'];
  $email=$_SESSION['email']; //<br/> Identifiant de la session est :'.session_id().'</br>'; 
  $text='bonjour '.$nom.' '.$prenom;
  $logout='logout';
  $login='';

}

 
//définir la session une session est un tableau temporaire 
//1 er point c quoi une session
// 
?>







<?PHP
include "../core/hotelc.php";
include "../entities/hotel.php";
$hotel1C=new hotelc();
$resrvation=new reservationc();
$date = new DateTime();
  $date1 = $date->format('Y-m-d');
  $demain=$date1.' +1'.' day';
  $verif=true;
  $date22=new DateTime($demain);
   $date2=$date22->format('Y-m-d');

if (isset($_GET['id'])){

	$id=$_GET['id'];
  $date1= $_GET['date1'];
  $date2=$_GET['date2'];
  $nbnuit=$_GET['nbnuit'];
    $result=$hotel1C->recupererhotel($_GET['id']);//recuperer l'hotel dans lequel on apuye sur book

//var_dump($result->fetchAll());

    foreach($result as $row){

                                 $longitude=$row['longitude'];
                                 $nomhotel=$row['nom'];
                                 $prixdoubles=$row['prixdoubles'];
                                 $latitude=$row['prixtriples'];
                                 $ville=$row['ville'];
                                 $categorie=$row['categorie'];


    }


    
}


?>


<!DOCTYPE html>
<html>
	<head>
   <title>Offers</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/single_listing_styles.css">
<link rel="stylesheet" type="text/css" href="styles/single_listing_responsive.css">
        <!-- Nous chargeons les fichiers CDN de Leaflet. Le CSS AVANT le JS -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
            crossorigin="" />

        <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
            crossorigin=""></script>
		<script type="text/javascript">
			// On initialise la latitude et la longitude de Paris (centre de la carte)
			//var lat = 48.852969;
			//var lon = 2.349903;
			var lat = 36.8;
			var lon =10.2;
			var macarte = null;
			// Fonction d'initialisation de la carte
			function initMap() {
				// Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
                macarte = L.map('map').setView([lat, lon], 11);
                // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
                L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
                    // Il est toujours bien de laisser le lien vers la source des données
                    //attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
                    minZoom: 1,
                    maxZoom: 20
                }).addTo(macarte);
				// Nous ajoutons un marqueur
				var marker = L.marker([lat, lon]).addTo(macarte);
            }
			window.onload = function(){
				// Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
				initMap(); 
			};
		</script>
		<style type="text/css">
			#map{ /* la carte DOIT avoir une hauteur sinon elle n'apparaît pas */
				height:400px;
			}
		</style>
		<title>Carte</title>
	</head>
	<body>

<div class="super_container">
  
  <!-- Header -->

  <header class="header">

    <!-- Top Bar -->

    <div class="top_bar">
      <div class="container">
        <div class="row">
          <div class="col d-flex flex-row">
            <div class="phone">+99 377 068 </div>
            <div class="social">
              <ul class="social_list">
                <li class="social_list_item"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                <li class="social_list_item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li class="social_list_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li class="social_list_item"><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                <li class="social_list_item"><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                <li class="social_list_item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              </ul>
            </div>
            <div class="user_box ml-auto">
             <div class="user_box_login user_box_link"><a href="auth.php">login</a></div>
							<div class="user_box_register user_box_link"><a href="logout.php">logout</a></div>
            </div>
          </div>
        </div>
      </div>    
    </div>

    <!-- Main Navigation -->

    <nav class="main_nav">
      <div class="container">
        <div class="row">
          <div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
            <div class="logo_container">
              <div class="logo"><a href="#"><img src="images/logo.png" alt="">Syphax</a></div>
            </div>
            <div class="main_nav_container ml-auto">
              <ul class="main_nav_list">
                <li class="main_nav_item"><a href="index.php">home</a></li>
                <li class="main_nav_item"><a href="about.html">about us</a></li>
                <li class="main_nav_item"><a href="offers.php">offers</a></li>
                <li class="main_nav_item"><a href="monespace.php">monespace</a></li>
                <li class="main_nav_item"><a href="contact.php">contact</a></li>
              </ul>
            </div>
            <div class="content_search ml-lg-0 ml-auto">
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              width="17px" height="17px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                <g>
                  <g>
                    <g>
                      <path class="mag_glass" fill="#FFFFFF" d="M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
                      s112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
                      C407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
                      M119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
                      c0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z"/>
                    </g>
                  </g>
                  <g>
                    <g>
                      <path class="mag_glass" fill="#FFFFFF" d="M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
                      c8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
                      C-2.019,484.77-2.019,497.865,6.057,505.942z"/>
                    </g>
                  </g>
                </g>
              </svg>
            </div>

            <form id="search_form" class="search_form bez_1">
              <input type="search" class="search_content_input bez_1">
            </form>
            
            <div class="hamburger">
              <i class="fa fa-bars trans_200"></i>
            </div>
          </div>
        </div>
      </div>  
    </nav>

  </header>

  <div class="menu trans_500">
    <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
      <div class="menu_close_container"><div class="menu_close"></div></div>
      <div class="logo menu_logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
      <ul>
        <li class="menu_item"><a href="index.php">home</a></li>
        <li class="menu_item"><a href="about.html">about us</a></li>
        <li class="menu_item"><a href="offers.php">offers</a></li>
        <li class="menu_item"><a href="monespace.php">monespace</a></li>
        <li class="menu_item"><a href="contact.php">contact</a></li>
      </ul>
    </div>
  </div>

  <!-- Home -->
 <div class="home">
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/single_background.jpg"></div>
    <div class="home_content">
      <div class="home_title">the offers</div>
    </div>
  </div>
  <!-- Offers -->

  <div class="listing">

    <!-- Search -->

    <div class="search">
      <div class="search_inner">

        <!-- Search Contents -->
        
        <div class="container fill_height no-padding">
          <div class="row fill_height no-margin">
            <div class="col fill_height no-padding">

              <!-- Search Tabs -->

            

              <!-- Search Panel -->

              <div class="search_panel active">



                       <form id="search_form_1" name="f" onsubmit="return test2()" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                  
                 
              
                                <div id="map">
      <!-- Ici s'affichera la carte -->
                                        </div>









                </form>




                             
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>

	</body>
</html>
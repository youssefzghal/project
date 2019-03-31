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



                                 $nbetoiles1=substr($row['categorie'],0,1);
 $offers1='offers_item rating_'.$nbetoiles1;
 $image1='images/'.$row['image'].'.jpg';
 
 $url1=$row['url'];

 $raiting1='rating_r rating_r_'.$nbetoiles1.' offers_rating';
 $description=$row['description'];
 $avis1=$row['review'];
 $note1=$row['note'];
     
  


    }


    
}


?>




<!DOCTYPE html>
<html lang="en">
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
      var lat = <?php echo $latitude ?>;
      var lon =<?php echo $longitude ?>;
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
            <div class="phone">+45 345 3324 56789</div>
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
              <div class="user_box_login user_box_link"><a href="#">login</a></div>
              <div class="user_box_register user_box_link"><a href="#">register</a></div>
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
                <li class="main_nav_item"><a href="index.html">home</a></li>
                <li class="main_nav_item"><a href="about.html">about us</a></li>
                <li class="main_nav_item"><a href="offers.php">offers</a></li>
                <li class="main_nav_item"><a href="blog.html">news</a></li>
                <li class="main_nav_item"><a href="contact.html">contact</a></li>
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
        <li class="menu_item"><a href="index.html">home</a></li>
        <li class="menu_item"><a href="about.html">about us</a></li>
        <li class="menu_item"><a href="offers.html">offers</a></li>
        <li class="menu_item"><a href="blog.html">news</a></li>
        <li class="menu_item"><a href="contact.html">contact</a></li>
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
                  
                  <div class="search_item">
                <div>NOMHOTEL</div>
                 <input type="text" name="nom" value="<?php echo $nomhotel ?>" class="check_out search_input " readonly >
              </div>
                  <div class="search_item">
                    <div>check in</div>
                    <input id="date" name="date1" class="check_in search_input"  type="date" value="<?php echo $date1 ?>"oninput="test()" >
                  </div>
                  <div class="search_item">
                    <div>check out</div>
                    <input id="date3" name="date2" class="check_out search_input" type="date" value="<?php echo $date2 ?>" oninput="test()">
                  </div>

                  <div class="search_item">
                    <div>nb nuit</div>
                    <input name="nbnuit" type=text value="<?php echo $nbnuit?>" class="check_out search_input " readonly >
                  </div>
                  <div class="search_item">
                    <div>chambres</div>
                    <input type=number name="chambre" class="check_out search_input " min="1" value="1" required oninput="test()">
                  </div>
                  <div class="search_item">
                    <div>ville</div>
                   <input type="text" name="ville" value="<?php echo $ville ?>" class="destination search_input " readonly required>
                  </div>
                   <div class="search_item">
                    <div>prixtotal</div>
                   <input type="text" name="total" value="<?php echo $prixdoubles ?>" class="check_out search_input " readonly required>
                     <input type="hidden" name="unit" value="<?php echo $prixdoubles ?>" class="check_out search_input ">
                  </div>


                   

                      
                     <div class="search_item">
                    <div>telephone</div>
                   <input type="text" name="telephone"  class="check_out search_input "  pattern="[0-9]{8}" required 
       title="Le numero contient huit chiffres."> 
                  </div>

                 




<div class="search_item">
                    <div>nom</div>
                   <input type="text" name="nomclient"  class="check_out search_input " required>
                  </div>



            <div class="search_item">
                    <div>prenom</div>
                   <input type="text" name="prenomclient"  class="check_out search_input " required>
                  </div>





            <div class="search_item">
                    <div>autre</div>
                   <input type="text" name="autre"  class="check_out search_input " required>
                  </div>


                  
                 
                  <input type="submit" name="reserver" value="reserver" class="button search_button"> 
                  <input type="hidden" name="id" value="<?PHP echo $_GET['id']; ?>">
              










                </form>




                             </div>



                             <?php
if(isset($_GET['reserver']))
{
 $idhotel=$_GET['id'];
 $date1=$_GET['date1'];
 $date2=$_GET['date2'];
 $chambre=$_GET['chambre'];
 $telephone=$_GET['telephone'];
 $nomclient=$_GET['nomclient'];
 $prenomclient=$_GET['prenomclient'];
 $total=$_GET['total'];

 /* $resultat=$resrvation->recuperernbchambre($date1,$date2,$id);
  
  
  var_dump($resultat->fetchAll());*/
  $reservation1=new reservation('1',$nomclient,$prenomclient,$chambre,$date1,$date2,$idhotel,$telephone);
$verif=$resrvation->verifierdisponible($reservation1);

if($verif==true)
{
  $resrvation->ajouter_reservation($reservation1);
}
else
{
  ?>
  <script >alert("capacite de l'hotel depasse/ veuillez lire le commentaire")</script>
    <?php
}

 

}
?>

              <!-- Search Panel -->

              
            </div>
          </div>
        </div>  
      </div>  
    </div>

    <!-- Single Listing -->

    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="single_listing">
            
            <!-- Hotel Info -->

            <div class="hotel_info">

              <!-- Title -->
              <div class="hotel_title_container d-flex flex-lg-row flex-column">
                <div class="hotel_title_content">
                  <h1 class="hotel_title"><?php echo $nomhotel?></h1>
                  <div class="<?php echo $raiting1?>">
                    <i></i>
                    <i></i>
                    <i></i>
                    <i></i>
                    <i></i>
                  </div>
                  <div class="hotel_location"><?php echo $ville ?></div>
                </div>
                <div class="hotel_title_button ml-lg-auto text-lg-right">
                  <div class="button book_button trans_200"><a href="#">book<span></span><span></span><span></span></a></div>
                  <div class="hotel_map_link_container">
                    <div class="hotel_map_link"> <a href="#map2">voir la localisation map</a></div>
                  </div>
                </div>
              </div>

              <!-- Listing Image -->

              <div class="hotel_image">
                <img src="<?php echo $image1 ?>" alt="">
                <div class="hotel_review_container d-flex flex-column align-items-center justify-content-center">
                  <div class="hotel_review">
                    <div class="hotel_review_content">
                      <div class="hotel_review_title"><?php echo $avis1 ?></div>
                      <div class="hotel_review_subtitle">100 reviews</div>
                    </div>
                    <div class="hotel_review_rating text-center"><?php echo $note1 ?></div>
                  </div>
                </div>
              </div>

              <!-- Hotel Gallery -->

              <div class="hotel_gallery">
                <div class="hotel_slider_container">
                  <div class="owl-carousel owl-theme hotel_slider">

                    <!-- Hotel Gallery Slider Item -->
                    <div class="owl-item">
                      <a class="colorbox cboxElement" href="images/listing_1.jpg">
                        <img src="images/listing_thumb_1.jpg" alt="https://unsplash.com/@jbriscoe">
                      </a>
                    </div>

                    <!-- Hotel Gallery Slider Item -->
                    <div class="owl-item">
                      <a class="colorbox cboxElement" href="images/listing_2.jpg">
                        <img src="images/listing_thumb_2.jpg" alt="https://unsplash.com/@grovemade">
                      </a>
                    </div>

                    <!-- Hotel Gallery Slider Item -->
                    <div class="owl-item">
                      <a class="colorbox cboxElement" href="images/listing_3.jpg">
                        <img src="images/listing_thumb_3.jpg" alt="https://unsplash.com/@fransaraco">
                      </a>
                    </div>

                    <!-- Hotel Gallery Slider Item -->
                    <div class="owl-item">
                      <a class="colorbox cboxElement" href="images/listing_4.jpg">
                        <img src="images/listing_thumb_4.jpg" alt="https://unsplash.com/@workweek">
                      </a>
                    </div>

                    <!-- Hotel Gallery Slider Item -->
                    <div class="owl-item">
                      <a class="colorbox cboxElement" href="images/listing_5.jpg">
                        <img src="images/listing_thumb_5.jpg" alt="https://unsplash.com/@workweek">
                      </a>
                    </div>

                    <!-- Hotel Gallery Slider Item -->
                    <div class="owl-item">
                      <a class="colorbox cboxElement" href="images/listing_6.jpg">
                        <img src="images/listing_thumb_6.jpg" alt="https://unsplash.com/@avidenov">
                      </a>
                    </div>

                    <!-- Hotel Gallery Slider Item -->
                    <div class="owl-item">
                      <a class="colorbox cboxElement" href="images/listing_7.jpg">
                        <img src="images/listing_thumb_7.jpg" alt="https://unsplash.com/@pietruszka">
                      </a>
                    </div>

                    <!-- Hotel Gallery Slider Item -->
                    <div class="owl-item">
                      <a class="colorbox cboxElement" href="images/listing_8.jpg">
                        <img src="images/listing_thumb_8.jpg" alt="https://unsplash.com/@rktkn">
                      </a>
                    </div>

                    <!-- Hotel Gallery Slider Item -->
                    <div class="owl-item">
                      <a class="colorbox cboxElement" href="images/listing_9.jpg">
                        <img src="images/listing_thumb_9.jpg" alt="https://unsplash.com/@mindaugas">
                      </a>
                    </div>
                  </div>

                  <!-- Hotel Slider Nav - Prev -->
                  <div class="hotel_slider_nav hotel_slider_prev">
                    <svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                      <defs>
                        <linearGradient id='hotel_grad_prev'>
                          <stop offset='0%' stop-color='#fa9e1b'/>
                          <stop offset='100%' stop-color='#8d4fff'/>
                        </linearGradient>
                      </defs>
                      <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
                      M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
                      C22.545,2,26,5.541,26,9.909V23.091z"/>
                      <polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
                      11.042,18.219 "/>
                    </svg>
                  </div>
                  
                  <!-- Hotel Slider Nav - Next -->
                  <div class="hotel_slider_nav hotel_slider_next">
                    <svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                      <defs>
                        <linearGradient id='hotel_grad_next'>
                          <stop offset='0%' stop-color='#fa9e1b'/>
                          <stop offset='100%' stop-color='#8d4fff'/>
                        </linearGradient>
                      </defs>
                    <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
                    M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
                    C22.545,2,26,5.541,26,9.909V23.091z"/>
                    <polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
                    17.046,15.554 "/>
                    </svg>
                  </div>

                </div>
              </div>

              <!-- Hotel Info Text -->

              <div class="hotel_info_text">
                <p><?php echo $description ?></p>
              </div>

              <!-- Hotel Info Tags -->

              <div class="hotel_info_tags">
                <ul class="hotel_icons_list">
                  <li class="hotel_icons_item"><img src="images/post.png" alt=""></li>
                  <li class="hotel_icons_item"><img src="images/compass.png" alt=""></li>
                  <li class="hotel_icons_item"><img src="images/bicycle.png" alt=""></li>
                  <li class="hotel_icons_item"><img src="images/sailboat.png" alt=""></li>
                </ul>
              </div>

            </div>
            
            <!-- Rooms -->


            <!-- Reviews -->



            <div class="location_on_map" id="map2">
              <div class="location_on_map_title">location on map</div>

              <!-- Google Map -->
    
              <div class="travelix_map">
                <div id="google_map" class="google_map">
                  <div class="map_container">
                    <div id="map"></div>
                  </div>
                </div>
              </div>

            </div>
                     

          </div>
        </div>
      </div>
    </div>    
  </div>

  <!-- Footer -->



  <footer class="footer">
    <div class="container">
      <div class="row">

        <!-- Footer Column -->
        <div class="col-lg-3 footer_column">
          <div class="footer_col">
            <div class="footer_content footer_about">
              <div class="logo_container footer_logo">
                <div class="logo"><a href="#"><img src="images/logo.png" alt="">travelix</a></div>
              </div>
              <p class="footer_about_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer eleme ntum orci eu vehicula pretium.</p>
              <ul class="footer_social_list">
                <li class="footer_social_item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                <li class="footer_social_item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                <li class="footer_social_item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="footer_social_item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                <li class="footer_social_item"><a href="#"><i class="fa fa-behance"></i></a></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Footer Column -->
        <div class="col-lg-3 footer_column">
          <div class="footer_col">
            <div class="footer_title">blog posts</div>
            <div class="footer_content footer_blog">
              
              <!-- Footer blog item -->
              <div class="footer_blog_item clearfix">
                <div class="footer_blog_image"><img src="images/footer_blog_1.jpg" alt="https://unsplash.com/@avidenov"></div>
                <div class="footer_blog_content">
                  <div class="footer_blog_title"><a href="blog.html">Travel with us this year</a></div>
                  <div class="footer_blog_date">Nov 29, 2017</div>
                </div>
              </div>
              
              <!-- Footer blog item -->
              <div class="footer_blog_item clearfix">
                <div class="footer_blog_image"><img src="images/footer_blog_2.jpg" alt="https://unsplash.com/@deannaritchie"></div>
                <div class="footer_blog_content">
                  <div class="footer_blog_title"><a href="blog.html">New destinations for you</a></div>
                  <div class="footer_blog_date">Nov 29, 2017</div>
                </div>
              </div>

              <!-- Footer blog item -->
              <div class="footer_blog_item clearfix">
                <div class="footer_blog_image"><img src="images/footer_blog_3.jpg" alt="https://unsplash.com/@bergeryap87"></div>
                <div class="footer_blog_content">
                  <div class="footer_blog_title"><a href="blog.html">Travel with us this year</a></div>
                  <div class="footer_blog_date">Nov 29, 2017</div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <!-- Footer Column -->
        <div class="col-lg-3 footer_column">
          <div class="footer_col">
            <div class="footer_title">tags</div>
            <div class="footer_content footer_tags">
              <ul class="tags_list clearfix">
                <li class="tag_item"><a href="#">design</a></li>
                <li class="tag_item"><a href="#">fashion</a></li>
                <li class="tag_item"><a href="#">music</a></li>
                <li class="tag_item"><a href="#">video</a></li>
                <li class="tag_item"><a href="#">party</a></li>
                <li class="tag_item"><a href="#">photography</a></li>
                <li class="tag_item"><a href="#">adventure</a></li>
                <li class="tag_item"><a href="#">travel</a></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Footer Column -->
        <div class="col-lg-3 footer_column">
          <div class="footer_col">
            <div class="footer_title">contact info</div>
            <div class="footer_content footer_contact">
              <ul class="contact_info_list">
                <li class="contact_info_item d-flex flex-row">
                  <div><div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div></div>
                  <div class="contact_info_text">4127 Raoul Wallenber 45b-c Gibraltar</div>
                </li>
                <li class="contact_info_item d-flex flex-row">
                  <div><div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div></div>
                  <div class="contact_info_text">2556-808-8613</div>
                </li>
                <li class="contact_info_item d-flex flex-row">
                  <div><div class="contact_info_icon"><img src="images/message.svg" alt=""></div></div>
                  <div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">contactme@gmail.com</a></div>
                </li>
                <li class="contact_info_item d-flex flex-row">
                  <div><div class="contact_info_icon"><img src="images/planet-earth.svg" alt=""></div></div>
                  <div class="contact_info_text"><a href="https://colorlib.com">www.colorlib.com</a></div>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
  </footer>

  <!-- Copyright -->

  <div class="copyright">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 order-lg-1 order-2  ">
          <div class="copyright_content d-flex flex-row align-items-center">
            <div><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
          </div>
        </div>
        <div class="col-lg-9 order-lg-2 order-1">
          <div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
            <div class="footer_nav">
              <ul class="footer_nav_list">
                <li class="footer_nav_item"><a href="index.html">home</a></li>
                <li class="footer_nav_item"><a href="about.html">about us</a></li>
                <li class="footer_nav_item"><a href="offers.php">offers</a></li>
                <li class="footer_nav_item"><a href="blog.html">news</a></li>
                <li class="footer_nav_item"><a href="contact.html">contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/single_listing_custom.js"></script>



<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/offers_custom.js"></script>
<script >
  
 /*if(verif.ajouter.value==false) 
 {alert('le nombre de chambre choisi accede la capacite de l hotel');  }*/
f.total.value=(f.unit.value)*(f.nbnuit.value)*(f.chambre.value);
var dateControl=f.date1;
var date = new Date();

var jour=date.getDate();
var mois=date.getMonth()+1;
var year=date.getFullYear();
if(jour< 10)
{
  jour=jour+'';
  jour='0'+jour
}

if(mois< 10)
{
  mois=mois+'';
  mois='0'+mois;
}

var dateactuelle=year+'-'+mois+'-'+jour;
 
dateControl.min=dateactuelle;


var dateControl=f.date2;

var today = new Date();
var date = new Date();
date.setDate(today.getDate()+1);

var jour=date.getDate();
var mois=date.getMonth()+1;
var year=date.getFullYear();
if(jour< 10)
{
  jour=jour+'';
  jour='0'+jour
}

if(mois< 10)
{
  mois=mois+'';
  mois='0'+mois;
}

var dateactuelle=year+'-'+mois+'-'+jour;
dateControl.min=dateactuelle;


function test()
{
  var date =f.date1.value ;

     var parts=date.split('-');

var mydate1 = new Date(parts[0], parts[1] - 1, parts[2]);

var dat =f.date2.value ;

var parts2 =dat.split('-');


var mydate2 = new Date(parts2[0], parts2[1] - 1, parts2[2]);

var WNbJours = mydate2.getTime() - mydate1.getTime();
var nb=Math.ceil(WNbJours/(1000*60*60*24));
f.nbnuit.value=Math.ceil(WNbJours/(1000*60*60*24));
var unite= f.unit.value;
var chambre=f.chambre.value;
var tot=chambre*unite*nb;
f.total.value=tot;

}

function test2()
{

  var date =f.date1.value ;

     var parts=date.split('-');

var mydate1 = new Date(parts[0], parts[1] - 1, parts[2]);

var dat =f.date2.value ;

var parts2 =dat.split('-');


var mydate2 = new Date(parts2[0], parts2[1] - 1, parts2[2]);

var WNbJours = mydate2.getTime() - mydate1.getTime();
var nbjour=Math.ceil(WNbJours/(1000*60*60*24));
if(nbjour <= 0)
{
  alert("chek out date is lesser than the check in date");
  return false;
}
else
{
  return true;
}



}


 





</script>

</body>

</html>

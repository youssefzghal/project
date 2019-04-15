<!DOCTYPE html>
<html lang="en">
<head>
    <title>FlySyphax</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Travelix Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<?PHP

include "../../dbConfig/config.php";
include "../../entities/chauffeur.php";
include "../../core/chauffeurCore.php";




    if (isset($_GET['confirmer']))

    {
        include "../../entities/transfert.php";
        include "../../core/transfertCore.php";

        $t= new \chauffeur\transfert(0, $_GET['user'], $_GET['date'], $_GET['temps'], $_GET['adresse'], $_GET['ville'], $_GET['pays'], "n",$_GET['Chauffeur']);
        $mCore= new transfertCore();
        $mCore->addTransfert($t);
        header('Location:chauffeursuccess.php');

    }



?>
<body>

<div class="super_container">

    <!-- Header -->

    <header class="header">

        <!-- Top Bar -->

        <div class="top_bar">
            <div class="container">
                <div class="row">
                    <div class="col d-flex flex-row">
                        <div class="phone">+216 70 019 161</div>

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
                            <div class="logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
                        </div>
                        <div class="main_nav_container ml-auto">
                            <ul class="main_nav_list">
                                <li class="main_nav_item"><a href="#">home</a></li>
                                <li class="main_nav_item"><a href="about.html">about us</a></li>
                                <li class="main_nav_item"><a href="offers.html">offers</a></li>
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
                <li class="menu_item"><a href="#">home</a></li>
                <li class="menu_item"><a href="about.html">about us</a></li>
                <li class="menu_item"><a href="offers.html">offers</a></li>
                <li class="menu_item"><a href="blog.html">news</a></li>
                <li class="menu_item"><a href="contact.html">contact</a></li>
            </ul>
        </div>
    </div>

    <!-- Home -->

    <div class="home">

        <!-- Home Slider -->

        <div class="home_slider_container">

            <div class="owl-carousel owl-theme home_slider">

                <!-- Slider Item -->
                <div class="owl-item home_slider_item">
                    <!-- Image by https://unsplash.com/@anikindimitry -->
                    <div class="home_slider_background" style="background-image:url(images/home_slider.jpg)"></div>

                    <div class="home_slider_content text-center">
                        <div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
                            <h1></h1>
                            <h1></h1>
                        </div>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="owl-item home_slider_item">
                    <div class="home_slider_background" style="background-image:url(images/home_slider.jpg)"></div>

                    <div class="home_slider_content text-center">
                        <div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
                            <h1></h1>
                            <h1> </h1>
                        </div>

                    </div>
                </div>

                <!-- Slider Item -->
                <div class="owl-item home_slider_item">
                    <div class="home_slider_background" style="background-image:url(images/home_slider.jpg)"></div>

                    <div class="home_slider_content text-center">
                        <div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
                            <h1></h1>
                            <h1> </h1>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Home Slider Nav - Prev -->
            <div class="home_slider_nav home_slider_prev">
                <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
                        <linearGradient id='home_grad_prev'>
                            <stop offset='0%' stop-color='#61798c'/>
                            <stop offset='100%' stop-color='#9bd7ff'/>
                        </linearGradient>
                    </defs>
                    <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
					M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
					C22.545,2,26,5.541,26,9.909V23.091z"/>
                    <polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
					11.042,18.219 "/>
				</svg>
            </div>

            <!-- Home Slider Nav - Next -->
            <div class="home_slider_nav home_slider_next">
                <svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
                        <linearGradient id='home_grad_next'>
                            <stop offset='0%' stop-color='#61798c'/>
                            <stop offset='100%' stop-color='#9bd7ff'/>
                        </linearGradient>
                    </defs>
                    <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
				M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
				C22.545,2,26,5.541,26,9.909V23.091z"/>
                    <polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
				17.046,15.554 "/>
				</svg>
            </div>

            <!-- Home Slider Dots -->

            <div id="cond" class="home_slider_dots">
                <ul id="home_slider_custom_dots" class="home_slider_custom_dots">
                    <li class="home_slider_custom_dot active"><div></div>01.</li>
                    <li class="home_slider_custom_dot"><div></div>02.</li>
                    <li class="home_slider_custom_dot"><div></div>03.</li>
                </ul>
            </div>

        </div>



    </div>

    <!-- Search -->
    <br><br>
    <div class="row">
        <div class="col text-center">
            <div class="section_title">Liste de chauffeurs disponible </div>
        </div>
    </div>
    <br>
    <div id="continued" class="search" style="display:none;">

        <div class="container fill_height">
            <div class="row fill_height">
                <div class="col fill_height">
                    <div class="search_panel active">
                        <form   id="search_form_2" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">


                            <div class="search_item">
                                <div>User</div>
                                <input type="text" name="user" class="destination search_input" required="required">
                            </div>

                            <div class="search_item">
                                <div>Chauffeur</div>
                                <input hidden id="loginchauf" type="text" name="Chauffeur" class=" search_input" required="required">
                                <input disabled id="loginchauff" type="text"  class=" search_input" required="required">
                            </div>

                            <input hidden id="date" type="text" name="date"  value="<?php echo $_POST['datee']; ?>">
                            <input hidden id="temps" type="text" name="temps"  value="<?php echo $_POST['temps']; ?>">
                            <input hidden id="ville" type="text" name="ville"   value="<?php echo $_POST['ville']; ?>">
                            <input hidden id="adresse" type="text" name="adresse"  value="<?php echo $_POST['adresse']; ?>" >
                            <input hidden type="text" name="pays"  value="<?php echo $_POST['pays']; ?>">



                            <button name="confirmer" class="button search_button">Confirmer<span></span><span></span><span></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> <br>
     <div class="col-lg-12">
        <!-- Offers Grid -->

        <div class="offers_grid" style="position: relative; height: 1519px;">

            <!-- Offers Item -->

<?php

if (isset($_POST["ville"]) && isset($_POST["pays"]) ) {

    $cCore = new chauffeurCore();
    $liste = $cCore->searchChauffeurByZone($_POST["ville"], $_POST["pays"]);


foreach($liste as $resultat){ ?>
            <div class="offers_item rating_4" style="  left: 0px; top: 0px;">
                <div class="row">
                    <div class="col-lg-1 temp_col"></div>
                    <div class="col-lg-3 col-1680-4">
                        <div class="offers_image_container">
                            <!-- Image by https://unsplash.com/@kensuarez -->
                            <div class="offers_image_background" style="background-image:url(<?php echo $resultat['photo']; ?>); "></div>
                            <div class="offer_name"><a href="single_listing.html"><?php echo $resultat['login']; ?></a></div>
                        </div>
                    </div>
                  <div class="col-lg-8">
                        <div class="offers_content">
                            <div class="offers_price"><?php echo $resultat['nom']." ".$resultat['prenom']; ?><span><?php echo $resultat['pays']; ?></span></div>
                            <div class="rating_r rating_r_4 offers_rating" data-rating="4">
                                <i></i>
                                <i></i>
                                <i></i>
                                <i></i>
                                <i></i>
                            </div>
                            <p class="offers_text">Date de naissance : <?php echo $resultat['dateDeNaissance']; ?> - Sexe : <?php echo $resultat['sexe']; ?> - Adresse : <?php echo $resultat['adresse1']; ?> - Ville : <?php echo $resultat['ville']; ?>
                           - Contact : <?php echo $resultat['telephone']; ?></p>
                            <div class="offers_icons">



                        </div>

                            <div class="offer_reviews">
                                <div class="offer_reviews_content">

                                </div>
                                <div class="offer_reviews_rating text-center">
                            </div>
                             <a href="#cond" >  <button class="button search_button" type="button" onclick="
                                var photo = document.getElementById('continued');
	                            document.getElementById('loginchauff').value='<?php echo $resultat['login']; ?> ';
                                document.getElementById('loginchauf').value='<?php echo $resultat['login']; ?> ';
                                photo.style.display = 'block';">Choisir </button></a>

                        </div>

                  </div>
                </div>

            </div>

            <br> <br>
<?php
}
} ?>



        </div>
    </div>

    <!-- Footer -->



    <!-- Copyright -->


</div>


<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>

</body>
</html>


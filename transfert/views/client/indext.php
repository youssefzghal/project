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

<!DOCTYPE html>
<html lang="en">
<head>
<title>Travelix</title>
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

<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="phone"><?php echo $text?></div>
						
						<div class="user_box ml-auto">
							<div class="user_box_login user_box_link"><a href="../../../../Admin-Template/travelix-colorlib/auth.php"><?php echo $login ?></a></div>
							<div class="user_box_register user_box_link"><a href="../../../../Admin-Template/travelix-colorlib/logout.php"><?php echo $logout ?></a></div>
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
								<li class="main_nav_item"><a href="../../../../Admin-Template/travelix-colorlib/index.php">home</a></li>
								<li class="main_nav_item"><a href="../../../../Admin-Template/travelix-colorlib/about.html">about us</a></li>
								<li class="main_nav_item"><a href="../../../../Admin-Template/travelix-colorlib/offers.php">offers</a></li>
								<li class="main_nav_item"><a href="../../../../Admin-Template/travelix-colorlib/monespace.php">mon espace</a></li>
								<li class="main_nav_item"><a href="../../../../Admin-Template/travelix-colorlib/contact.php">contact</a></li>
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

			<div class="home_slider_dots">
				<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
					<li class="home_slider_custom_dot active"><div></div>01.</li>
					<li class="home_slider_custom_dot"><div></div>02.</li>
					<li class="home_slider_custom_dot"><div></div>03.</li>
				</ul>
			</div>
			
		</div>

	</div>

	<!-- Search -->

	

	<!-- Footer -->



	<!-- Copyright -->

	  
</div>

<div class="search">
		

		<!-- Search Contents -->
		
		<div class="container fill_height">
			<div class="row fill_height">
				<div class="col fill_height">

					<!-- Search Tabs -->

					<div class="search_tabs_container">
						<div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<a href="../../../../Admin-Template/travelix-colorlib/index.php" class="search_tab  d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/suitcase.png" alt=""><span>hotels</span></a>
							<div class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/bus.png" alt="">Transferts</div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/departure.png" alt="">flights</div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/island.png" alt="">trips</div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/cruise.png" alt="">cruises</div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/diving.png" alt="">activities</div>
						</div>		
					</div>

					<!-- Search Panel -->

					<div class="search_panel ">
						<form action="#" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>destination</div>
								<input type="text" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>check in</div>
								<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>check out</div>
								<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>adults</div>
								<select name="adults" id="adults_1" class="dropdown_item_select search_input">
									<option>01</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_1" class="dropdown_item_select search_input">
									<option>0</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<button class="button search_button">search<span></span><span></span><span></span></button>
						</form>
					</div>

					<!-- Search Panel -->

					<div class="search_panel active">
						<form action="ChercherChauffeur.php" method="post" id="search_form_2" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>Adresse</div>
								<input type="text" name="adresse" class="destination search_input" required="required">
							</div>

							<div class="search_item">
								<div>Ville</div>
								<input type="text" name="ville" class=" search_input" required="required">
							</div>
							<div class="search_item">
								<div>Date</div>
								<input type="date" name="datee" class="search_input" min="2019-04-15" value="2019-04-15" title="Date n'est pas valide" required>
							</div>

							<div class="search_item">
								<div>Pays</div>
								<select name="pays" class="search_input">
									<option value="France" selected="selected">France </option>

									<option value="Afghanistan">Afghanistan </option>
									<option value="Afrique_Centrale">Afrique_Centrale </option>
									<option value="Afrique_du_sud">Afrique_du_Sud </option>
									<option value="Albanie">Albanie </option>
									<option value="Algerie">Algerie </option>
									<option value="Allemagne">Allemagne </option>
									<option value="Andorre">Andorre </option>
									<option value="Angola">Angola </option>
									<option value="Anguilla">Anguilla </option>
									<option value="Arabie_Saoudite">Arabie_Saoudite </option>
									<option value="Argentine">Argentine </option>
									<option value="Armenie">Armenie </option>
									<option value="Australie">Australie </option>
									<option value="Autriche">Autriche </option>
									<option value="Azerbaidjan">Azerbaidjan </option>

									<option value="Bahamas">Bahamas </option>
									<option value="Bangladesh">Bangladesh </option>
									<option value="Barbade">Barbade </option>
									<option value="Bahrein">Bahrein </option>
									<option value="Belgique">Belgique </option>
									<option value="Belize">Belize </option>
									<option value="Benin">Benin </option>
									<option value="Bermudes">Bermudes </option>
									<option value="Bielorussie">Bielorussie </option>
									<option value="Bolivie">Bolivie </option>
									<option value="Botswana">Botswana </option>
									<option value="Bhoutan">Bhoutan </option>
									<option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
									<option value="Bresil">Bresil </option>
									<option value="Brunei">Brunei </option>
									<option value="Bulgarie">Bulgarie </option>
									<option value="Burkina_Faso">Burkina_Faso </option>
									<option value="Burundi">Burundi </option>

									<option value="Caiman">Caiman </option>
									<option value="Cambodge">Cambodge </option>
									<option value="Cameroun">Cameroun </option>
									<option value="Canada">Canada </option>
									<option value="Canaries">Canaries </option>
									<option value="Cap_vert">Cap_Vert </option>
									<option value="Chili">Chili </option>
									<option value="Chine">Chine </option>
									<option value="Chypre">Chypre </option>
									<option value="Colombie">Colombie </option>
									<option value="Comores">Colombie </option>
									<option value="Congo">Congo </option>
									<option value="Congo_democratique">Congo_democratique </option>
									<option value="Cook">Cook </option>
									<option value="Coree_du_Nord">Coree_du_Nord </option>
									<option value="Coree_du_Sud">Coree_du_Sud </option>
									<option value="Costa_Rica">Costa_Rica </option>
									<option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
									<option value="Croatie">Croatie </option>
									<option value="Cuba">Cuba </option>

									<option value="Danemark">Danemark </option>
									<option value="Djibouti">Djibouti </option>
									<option value="Dominique">Dominique </option>

									<option value="Egypte">Egypte </option>
									<option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
									<option value="Equateur">Equateur </option>
									<option value="Erythree">Erythree </option>
									<option value="Espagne">Espagne </option>
									<option value="Estonie">Estonie </option>
									<option value="Etats_Unis">Etats_Unis </option>
									<option value="Ethiopie">Ethiopie </option>

									<option value="Falkland">Falkland </option>
									<option value="Feroe">Feroe </option>
									<option value="Fidji">Fidji </option>
									<option value="Finlande">Finlande </option>
									<option value="France">France </option>

									<option value="Gabon">Gabon </option>
									<option value="Gambie">Gambie </option>
									<option value="Georgie">Georgie </option>
									<option value="Ghana">Ghana </option>
									<option value="Gibraltar">Gibraltar </option>
									<option value="Grece">Grece </option>
									<option value="Grenade">Grenade </option>
									<option value="Groenland">Groenland </option>
									<option value="Guadeloupe">Guadeloupe </option>
									<option value="Guam">Guam </option>
									<option value="Guatemala">Guatemala</option>
									<option value="Guernesey">Guernesey </option>
									<option value="Guinee">Guinee </option>
									<option value="Guinee_Bissau">Guinee_Bissau </option>
									<option value="Guinee equatoriale">Guinee_Equatoriale </option>
									<option value="Guyana">Guyana </option>
									<option value="Guyane_Francaise ">Guyane_Francaise </option>

									<option value="Haiti">Haiti </option>
									<option value="Hawaii">Hawaii </option>
									<option value="Honduras">Honduras </option>
									<option value="Hong_Kong">Hong_Kong </option>
									<option value="Hongrie">Hongrie </option>

									<option value="Inde">Inde </option>
									<option value="Indonesie">Indonesie </option>
									<option value="Iran">Iran </option>
									<option value="Iraq">Iraq </option>
									<option value="Irlande">Irlande </option>
									<option value="Islande">Islande </option>
									<option value="Israel">Israel </option>
									<option value="Italie">italie </option>

									<option value="Jamaique">Jamaique </option>
									<option value="Jan Mayen">Jan Mayen </option>
									<option value="Japon">Japon </option>
									<option value="Jersey">Jersey </option>
									<option value="Jordanie">Jordanie </option>

									<option value="Kazakhstan">Kazakhstan </option>
									<option value="Kenya">Kenya </option>
									<option value="Kirghizstan">Kirghizistan </option>
									<option value="Kiribati">Kiribati </option>
									<option value="Koweit">Koweit </option>

									<option value="Laos">Laos </option>
									<option value="Lesotho">Lesotho </option>
									<option value="Lettonie">Lettonie </option>
									<option value="Liban">Liban </option>
									<option value="Liberia">Liberia </option>
									<option value="Liechtenstein">Liechtenstein </option>
									<option value="Lituanie">Lituanie </option>
									<option value="Luxembourg">Luxembourg </option>
									<option value="Lybie">Lybie </option>

									<option value="Macao">Macao </option>
									<option value="Macedoine">Macedoine </option>
									<option value="Madagascar">Madagascar </option>
									<option value="Madère">Madère </option>
									<option value="Malaisie">Malaisie </option>
									<option value="Malawi">Malawi </option>
									<option value="Maldives">Maldives </option>
									<option value="Mali">Mali </option>
									<option value="Malte">Malte </option>
									<option value="Man">Man </option>
									<option value="Mariannes du Nord">Mariannes du Nord </option>
									<option value="Maroc">Maroc </option>
									<option value="Marshall">Marshall </option>
									<option value="Martinique">Martinique </option>
									<option value="Maurice">Maurice </option>
									<option value="Mauritanie">Mauritanie </option>
									<option value="Mayotte">Mayotte </option>
									<option value="Mexique">Mexique </option>
									<option value="Micronesie">Micronesie </option>
									<option value="Midway">Midway </option>
									<option value="Moldavie">Moldavie </option>
									<option value="Monaco">Monaco </option>
									<option value="Mongolie">Mongolie </option>
									<option value="Montserrat">Montserrat </option>
									<option value="Mozambique">Mozambique </option>

									<option value="Namibie">Namibie </option>
									<option value="Nauru">Nauru </option>
									<option value="Nepal">Nepal </option>
									<option value="Nicaragua">Nicaragua </option>
									<option value="Niger">Niger </option>
									<option value="Nigeria">Nigeria </option>
									<option value="Niue">Niue </option>
									<option value="Norfolk">Norfolk </option>
									<option value="Norvege">Norvege </option>
									<option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
									<option value="Nouvelle_Zelande">Nouvelle_Zelande </option>

									<option value="Oman">Oman </option>
									<option value="Ouganda">Ouganda </option>
									<option value="Ouzbekistan">Ouzbekistan </option>

									<option value="Pakistan">Pakistan </option>
									<option value="Palau">Palau </option>
									<option value="Palestine">Palestine </option>
									<option value="Panama">Panama </option>
									<option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>
									<option value="Paraguay">Paraguay </option>
									<option value="Pays_Bas">Pays_Bas </option>
									<option value="Perou">Perou </option>
									<option value="Philippines">Philippines </option>
									<option value="Pologne">Pologne </option>
									<option value="Polynesie">Polynesie </option>
									<option value="Porto_Rico">Porto_Rico </option>
									<option value="Portugal">Portugal </option>

									<option value="Qatar">Qatar </option>

									<option value="Republique_Dominicaine">Republique_Dominicaine </option>
									<option value="Republique_Tcheque">Republique_Tcheque </option>
									<option value="Reunion">Reunion </option>
									<option value="Roumanie">Roumanie </option>
									<option value="Royaume_Uni">Royaume_Uni </option>
									<option value="Russie">Russie </option>
									<option value="Rwanda">Rwanda </option>

									<option value="Sahara Occidental">Sahara Occidental </option>
									<option value="Sainte_Lucie">Sainte_Lucie </option>
									<option value="Saint_Marin">Saint_Marin </option>
									<option value="Salomon">Salomon </option>
									<option value="Salvador">Salvador </option>
									<option value="Samoa_Occidentales">Samoa_Occidentales</option>
									<option value="Samoa_Americaine">Samoa_Americaine </option>
									<option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option>
									<option value="Senegal">Senegal </option>
									<option value="Seychelles">Seychelles </option>
									<option value="Sierra Leone">Sierra Leone </option>
									<option value="Singapour">Singapour </option>
									<option value="Slovaquie">Slovaquie </option>
									<option value="Slovenie">Slovenie</option>
									<option value="Somalie">Somalie </option>
									<option value="Soudan">Soudan </option>
									<option value="Sri_Lanka">Sri_Lanka </option>
									<option value="Suede">Suede </option>
									<option value="Suisse">Suisse </option>
									<option value="Surinam">Surinam </option>
									<option value="Swaziland">Swaziland </option>
									<option value="Syrie">Syrie </option>

									<option value="Tadjikistan">Tadjikistan </option>
									<option value="Taiwan">Taiwan </option>
									<option value="Tonga">Tonga </option>
									<option value="Tanzanie">Tanzanie </option>
									<option value="Tchad">Tchad </option>
									<option value="Thailande">Thailande </option>
									<option value="Tibet">Tibet </option>
									<option value="Timor_Oriental">Timor_Oriental </option>
									<option value="Togo">Togo </option>
									<option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
									<option value="Tristan da cunha">Tristan de cuncha </option>
									<option value="Tunisie">Tunisie </option>
									<option value="Turkmenistan">Turmenistan </option>
									<option value="Turquie">Turquie </option>

									<option value="Ukraine">Ukraine </option>
									<option value="Uruguay">Uruguay </option>

									<option value="Vanuatu">Vanuatu </option>
									<option value="Vatican">Vatican </option>
									<option value="Venezuela">Venezuela </option>
									<option value="Vierges_Americaines">Vierges_Americaines </option>
									<option value="Vierges_Britanniques">Vierges_Britanniques </option>
									<option value="Vietnam">Vietnam </option>

									<option value="Wake">Wake </option>
									<option value="Wallis et Futuma">Wallis et Futuma </option>

									<option value="Yemen">Yemen </option>
									<option value="Yougoslavie">Yougoslavie </option>

									<option value="Zambie">Zambie </option>
									<option value="Zimbabwe">Zimbabwe </option>
								</select>
							</div>

							<div class="search_item">
								<div>Temps</div>
								<input type="time" name="temps" class="search_input"  required>

							</div>

							<button class="button search_button">search<span></span><span></span><span></span></button>
						</form>
					</div>

					<!-- Search Panel -->

					<div class="search_panel">
						<form action="#" id="search_form_3" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>destination</div>
								<input type="text" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>check in</div>
								<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>check out</div>
								<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>adults</div>
								<select name="adults" id="adults_3" class="dropdown_item_select search_input">
									<option>01</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_3" class="dropdown_item_select search_input">
									<option>0</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<button class="button search_button">search<span></span><span></span><span></span></button>
						</form>
					</div>

					<!-- Search Panel -->

					<div class="search_panel">
						<form action="#" id="search_form_4" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>destination</div>
								<input type="text" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>check in</div>
								<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>check out</div>
								<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>adults</div>
								<select name="adults" id="adults_4" class="dropdown_item_select search_input">
									<option>01</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_4" class="dropdown_item_select search_input">
									<option>0</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<button class="button search_button">search<span></span><span></span><span></span></button>
						</form>
					</div>

					<!-- Search Panel -->

					<div class="search_panel">
						<form action="#" id="search_form_5" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>destination</div>
								<input type="text" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>check in</div>
								<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>check out</div>
								<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>adults</div>
								<select name="adults" id="adults_5" class="dropdown_item_select search_input">
									<option>01</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_5" class="dropdown_item_select search_input">
									<option>0</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<button class="button search_button">search<span></span><span></span><span></span></button>
						</form>
					</div>

					<!-- Search Panel -->

					<div class="search_panel">
						<form action="#" id="search_form_6" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>destination</div>
								<input type="text" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>check in</div>
								<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>check out</div>
								<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>adults</div>
								<select name="adults" id="adults_6" class="dropdown_item_select search_input">
									<option>01</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_6" class="dropdown_item_select search_input">
									<option>0</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<button class="button search_button">search<span></span><span></span><span></span></button>
						</form>
					</div>
				</div>
			</div>
		</div>		
	</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>

</body>

</html>
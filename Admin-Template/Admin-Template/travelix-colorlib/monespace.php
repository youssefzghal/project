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
$reservation=new reservationc();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">




<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/single_listing_styles.css">
<link rel="stylesheet" type="text/css" href="styles/single_listing_responsive.css">

 

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
						<div class="phone"><?php echo $text ?></div>
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
							<div class="user_box_login user_box_link"><a href="auth.php"><?php echo $login ?></a></div>
							<div class="user_box_register user_box_link"><a href="logout.php"><?php echo $logout ?></a></div>
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
							<div class="logo"><a href="#"><img src="images/logo.png" alt="">travelix</a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="index.php">home</a></li>
								<li class="main_nav_item"><a href="about.html">about us</a></li>
								<li class="main_nav_item"><a href="offers.php">offers</a></li>
								<li class="main_nav_item"><a href="contact.php">contact</a></li>
								<li class="main_nav_item"><a href="#">mon espace</a></li>
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
				<li class="menu_item"><a href="contact.php">contact</a></li>
				<li class="menu_item"><a href="#">mon espace</a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/contact_background.jpg"></div>
		<div class="home_content">
			<div class="home_title">contact</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact_form_section">
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- Contact Form -->
					<div class="contact_form_container">
						<div class="contact_title text-center">Votre espace</div>
						<form action="#" id="contact_form" class="contact_form text-center">
							<input type="number" id="contact_form_name" name="id" class="contact_form_name input_field" placeholder="Ref reservation" required="required" data-error="id reservation is required.">
							<input type="text" id="contact_form_email" name="nom" class="contact_form_email input_field" placeholder="nom client" required="required" data-error="	Name is required.">
						
							<button type="submit" name="afficher" id="form_submit_button" class="form_submit_button button trans_200">afficher<span></span><span></span><span></span></button>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>








    <!-- Search -->


<?php
   if(isset($_GET['afficher']))
   {

   	$liste=$reservation->recuperer_res($_GET['id'],$_GET['nom']);
   	$v=$reservation->recuperer_res($_GET['id'],$_GET['nom']);
   	 

   }

  
?>
    









	<!-- About -->
	
		


   <div class="about">
 	<?php 
           if(isset($liste))      
 	          {


                 /*if(empty($v->fetchAll()))  
                 {
                 	?><script >alert('Id et Nom non correspondant ou un est inexistant');</script><?php
                 }
                 */
                 
 	          	foreach($liste as $row)
 	              {
 		?>
 		
 		<div class="container">   
    <div class="search">
      <div class="search_inner">

        <!-- Search Contents -->
        
        <div class="container fill_height no-padding">
          <div class="row fill_height no-margin">
            <div class="col fill_height no-padding">
 <div class="search_panel active">
                 <form id="search_form_1" name="f" onsubmit="return test2()" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                  
                  <div class="search_item">
                <div>NOMHOTEL</div>
                 <input type="text" name="nom" value="<?php echo $row['hotel']?>" class="check_out search_input " readonly >
                 <input type="hidden" name="idres" value="<?php echo $row['idres']?>" class="check_out search_input ">
                 <input type="hidden" name="idhotel" value="<?php echo $row['idhotel']?>" class="check_out search_input ">
              </div>
                  <div class="search_item">
                    <div>check in</div>
                    <input id="date" name="date1" value="<?php echo $row['checkin']?>" class="check_in search_input"  type="date" oninput="test()" >
                  </div>
                  <div class="search_item">
                    <div>check out</div>
                    <input id="date3" name="date2" value="<?php echo $row['checkout']?>" class="check_out search_input" type="date"  oninput="test()">
                  </div>

                  <div class="search_item">
                    <div>nb nuit</div>
                    <input name="nbnuit" type=text  class="check_out search_input " readonly >
                  </div>
                  <div class="search_item">
                    <div>chambres</div>
                    <input type=number name="chambre" value="<?php echo $row['nbdouble']?>" class="check_out search_input " min="1" value="1" required oninput="test()">
                  </div>
                  <div class="search_item">
                    <div>ville</div>
                   <input type="text" name="ville" value="<?php echo $row['ville']?>" class="destination search_input " readonly required>
                  </div>
                   <div class="search_item">
                    <div>prixtotal</div>
                   <input type="text" name="total"  class="check_out search_input " readonly required>
                     <input type="hidden" name="unit" value="<?php echo $row['prix']?>" class="check_out search_input ">
                  </div>


                   

                      
                     <div class="search_item">
                    <div>telephone</div>
                   <input type="text" name="telephone" value="<?php echo $row['telephone']?>"  class="check_out search_input "  pattern="[0-9]{8}" required 
       title="Le numero contient huit chiffres."> 
                  </div>

                 




<div class="search_item">
                    <div>nom</div>
                   <input type="text" name="nomclient"  class="check_out search_input " value="<?php echo $row['nom']?>"  pattern="[A-Za-z]{2,}"required title="le nom ne doit pas contenir des caractere speciaux ou nombres(min 2Lettres)">
                  </div>



            <div class="search_item">
                    <div>prenom</div>
                   <input type="text" name="prenomclient"  class="check_out search_input" value="<?php echo $row['prenom']?>" pattern="[A-Za-z]{2,}" required title="le nom ne doit pas contenir des caractere speciaux ou nombres(min 2 lettres)">
                  </div>





            <div class="search_item">
                    <div>email</div>
                   <!--<input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="check_out search_input " required>-->
                   <input type="email" name="email"  class="check_out search_input " required>
                  </div>


                  
                 
                  <input type="submit" name="modifier" value="modifier" class="button search_button"> 
                   
                  
                 
                 
        









                </form>
              
                    </div>
               <form onsubmit="return confirmer()" >
               <input type="submit" name="Annuler" value="Annuler reservation" class="button search_button"> 
               <input type="hidden" name="id" value="<?php echo $row['idres']?>" class="button search_button"> 
               </form>

             </div>

         </div>


     </div>
 </div>

</div>


</div>




            <?php } } ?>

 </div>       

<?php
require '../osms/src/Osms.php';
 use \Osms\Osms;

if(isset($_GET['modifier']))
{
	$nomhotel=$_GET['nom'];
   $idres=$_GET['idres'];
   $nomclient=$_GET['nomclient'];
   $prenomclient=$_GET['prenomclient'];
   $chambre=$_GET['chambre'];
   $date1=$_GET['date1'];
   $date2=$_GET['date2'];
   $idhotel=$_GET['idhotel'];
   $telephone=$_GET['telephone'];
   $total=$_GET['total'];
 $to=$_GET['email'];
  $n='bonjour ,'.$nomclient.' '.$prenomclient;
    $n1=',votre reservation ayant Ref= '.$idres. ' est modifie avec succes:=> ';
    $n2='du '.$date1.' jusqua '.$date2.'   ,hotel: '.$nomhotel;
    $n3=',total: '.$total.'DNT';
    $messageemail = $n.' '.$n1.'  '.$n2.' '.$n3;
    $from = 'fly.flysyphax@gmail.com';
     $subject ='reservation flysyphax' ;
      $headers = "From:" . $from;

     

 /* $resultat=$resrvation->recuperernbchambre($date1,$date2,$id);
  
  
  var_dump($resultat->fetchAll());*/
  $message='1';
  $reservation1=new reservation($idres,$nomclient,$prenomclient,$chambre,$date1,$date2,$idhotel,$telephone);
$verif=$reservation->verifierdisponible2($reservation1,$message,$idres);



 if($verif==true)
{
  
  $reservation->modifier($reservation1,$idres);
      
      //mail
     ini_set( 'display_errors', 1 );
     error_reporting( E_ALL );
    if(mail($to,$subject,$messageemail, $headers))
 
       {echo "L'email a été envoyé.";}
      //mail
  

  $config = array(
    'clientId' => 'r4xo0ESbe861XsKYG35s8CfFYqusZRmz',
    'clientSecret' => 'a371O41j5YBtuOm8'
);

$osms = new Osms($config);
$osms->setVerifyPeerSSL(false);
// retrieve an access token
$response = $osms->getTokenFromConsumerKey();


if (!empty($response['access_token'])) {
    $senderAddress = 'tel:+21656479504';
    $receiverAddress = 'tel:+216'.$telephone;
   
    
    $senderName = 'FLYSYPHAX';

    $osms->sendSMS($senderAddress, $receiverAddress, $messageemail, $senderName);
    echo 'msg envoye';
} else {
    echo 'empty';
}




}
else
{
  ?>
  <script >
    var msg='<?php echo $message ?>';
    alert(msg);

  </script>
    <?php
}











}

?>
                


 <?php 
 if(isset($_GET['Annuler']))
 {
 	$idres=$_GET['id'];
 	$reservation->supprimerreservation($idres);
 	
 }








 ?>                
	<!-- Google Map -->
		
	

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
								<li class="footer_nav_item"><a href="index.php">home</a></li>
								<li class="footer_nav_item"><a href="about.html">about us</a></li>
								<li class="footer_nav_item"><a href="offers.phpl">offers</a></li>
								<li class="footer_nav_item"><a href="blog.html">news</a></li>
								<li class="footer_nav_item"><a href="contact.php">contact</a></li>
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
<script src="plugins/parallax-js-master/parallax.min.js"></script>

<script src="js/contact_custom.js"></script>
<script >
  
 function confirmer()
{
	return(confirm('voulez vous vraiment Annuler la reservation'));
}

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
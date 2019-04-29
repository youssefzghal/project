<?php

session_start ();

if (isset($_SESSION['login']) && isset($_SESSION['motDePasse']))
{

    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <?PHP

    include "../../dbConfig/config.php";
    include "../../entities/chauffeur.php";
    include "../../core/chauffeurCore.php";

   if (isset($_GET["modifier"])) {


             $cCore = new chauffeurCore();
             $liste = $cCore->getChauffeur($_GET["login"]);
             foreach ($liste as $resultat) {


         $chauffeur = new \chauffeur\chauffeur($_GET['pnom'], $_GET['nom'], $_GET['sexe'], $_GET['daten'], $_GET['adresse1'], $_GET['province'], $_GET['adresse2'], $_GET['codePostale'], $_GET['ville'], $_GET['pays'], $resultat['cin'], $_GET['telephone'], $resultat['login'], $resultat['motDePasse'], $resultat['rating'], $resultat['photo']);
             }

         $mCore = new chauffeurCore();
         $mCore->updateChauffeur($chauffeur);

       $liste = $cCore->getChauffeur($_GET["login"]);
       foreach ($liste as $result) {

       $_SESSION['prenom']=$result['prenom'];
       $_SESSION['nom']=$result['nom'];
       $_SESSION['sexe']=$result['sexe'];
       $_SESSION['dateDeNaissance']=$result['dateDeNaissance'];
       $_SESSION['adresse1']=$result['adresse1'];
       $_SESSION['province']=$result['province'];
       $_SESSION['adresse2']=$result['adresse2'];
       $_SESSION['codePostale']=$result['codePostale'];
       $_SESSION['pays']=$result['pays'];
       $_SESSION['ville']=$result['ville'];
       $_SESSION['cin']=$result['cin'];
       $_SESSION['telephone']=$result['telephone'];
       $_SESSION['login']=$result['login'];
       $_SESSION['motDePasse']=$result['motDePasse'];
       $_SESSION['rating']=$result['rating'];
       $_SESSION['photo']=$result['photo'];
       }

       header('Location:myprofile.php?success=""');
     }

        if (isset($_GET["modifierp"])) {


            $cCore = new chauffeurCore();
            $liste = $cCore->getChauffeur($_SESSION["login"]);
            foreach ($liste as $resultat) {


                $chauffeur = new \chauffeur\chauffeur($resultat['prenom'], $resultat['nom'], $resultat['sexe'], $resultat['dateDeNaissance'], $resultat['adresse1'], $resultat['province'], $resultat['adresse2'], $resultat['codePostale'], $resultat['ville'], $resultat['pays'], $resultat['cin'], $resultat['telephone'], $resultat['login'], $_GET['newpass'], $resultat['rating'], $resultat['photo']);
            }

            $mCore = new chauffeurCore();
            $mCore->updateChauffeur($chauffeur);

            $liste = $cCore->getChauffeur($_SESSION["login"]);
            foreach ($liste as $result) {
                $_SESSION['motDePasse']=$result['motDePasse'];
            }
             header('Location:myprofile.php?success=""');
        }
?>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
        <title>
            Tableau de bord | <?php echo  $_SESSION['prenom']." ". $_SESSION['nom']; ?>
        </title>
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <!-- Nucleo Icons -->
        <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
        <!-- CSS Files -->
        <link href="assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="assets/demo/demo.css" rel="stylesheet" />
    </head>

    <body class="">
    <div class="wrapper">
        <div class="sidebar">
            <!--
              Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
          -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="javascript:void(0)" class="simple-text logo-mini">
                        <img src="assets/img/favicon.png"
                    </a>
                    <a href="javascript:void(0)" class="simple-text logo-normal">
                        <?php echo $_SESSION['login']; ?>
                    </a>
                </div>
                <ul class="nav">
                    <li >
                        <a href="./profile.php">
                            <i class="tim-icons icon-chart-pie-36"></i>
                            <p>Tableau de bord</p>
                        </a>
                    </li>
                    <li class="active ">
                        <a href="./myprofile.php">
                            <i class="tim-icons icon-single-02"></i>
                            <p>Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="./notconfirmed.php">
                            <i class="tim-icons icon-bell-55"></i>
                            <p>Demandes de transferts</p>
                        </a>
                    </li>
                    <li>
                        <a href="./transferts.php">
                            <i class="tim-icons icon-delivery-fast"></i>
                            <p>Transferts acceptés</p>
                        </a>
                    </li>
                    <li>
                        <a href="./contactadmin.php">
                            <i class="tim-icons icon-email-85"></i>
                            <p>Contacter L'administration</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle d-inline">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="javascript:void(0)"><?php echo  $_SESSION['prenom']." ". $_SESSION['nom']; ?></a>

                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav ml-auto">

                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <div class="photo">
                                        <img src="<?php echo $_SESSION['photo']; ?>" alt="Profile Photo">
                                    </div>
                                    <b class="caret d-none d-lg-block d-xl-block"></b>
                                    <p class="d-lg-none">
                                        Log out
                                    </p>
                                </a>
                                <ul class="dropdown-menu dropdown-navbar">
                                    <li class="nav-link">
                                        <a href="myprofile.php" class="nav-item dropdown-item">Profile</a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li class="nav-link">
                                        <a href="logout.php" class="nav-item dropdown-item">Déconnexion</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="separator d-lg-none"></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i class="tim-icons icon-simple-remove"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Navbar -->
            <div class="content">
               <?php if(isset($_GET['success'])) { ?> <div class="alert alert-success">
                   <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                       <i class="tim-icons icon-simple-remove"></i>
                   </button>
                   <span>
                    <b> Modification </b> effectué par succèe</span>
               </div>  <?php } ?>
                <div id="dang" hidden  class="alert alert-danger">
                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="tim-icons icon-simple-remove"></i>
                    </button>
                    <span>
                    <b> Veuillez verifier </b> le mot de passe actuel et le nouveau mot de passe qui doit contenir au moin 8 caractères </span>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="title">Modifier Profile</h5>

                                <label>Veuillez contacter l'administration modifier le login ou l'id</label>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-5 pr-md-1">
                                            <div class="form-group">
                                                <label>ID ( Cin / Passport ) *</label>
                                                <input type="text" class="form-control" hidden name="cin" value="<?php echo $_SESSION['cin'];?>">
                                                <input type="text" class="form-control" disabled="" placeholder="cinn" value="<?php echo $_SESSION['cin'];?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3 px-md-1">
                                            <div class="form-group">
                                                <label>Login *</label>
                                                <input type="text" hidden class="form-control" name="login" value="<?php echo $_SESSION['login'];?>">
                                                <input type="text" disabled class="form-control" placeholder="loginn" value="<?php echo $_SESSION['login'];?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-md-1">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Numéro de téléphone *</label>
                                                <input type="number"  name="telephone" class="form-control" value="<?php echo $_SESSION['telephone'];?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 pr-md-1">
                                            <div class="form-group">
                                                <label>Prénom *</label>
                                                <input type="text" name="pnom" required class="form-control" value="<?php echo $_SESSION['prenom'];?>">
                                            </div>
                                        </div>

                                        <div class="col-md-6 pl-md-1">
                                            <div class="form-group">
                                                <label>Nom *</label>
                                                <input type="text"  name="nom" required class="form-control" value="<?php echo $_SESSION['nom'];?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 pr-md-1">
                                            <div class="form-group">
                                                <label>Date de naissance *</label>
                                                <input type="date" name="daten"  max="1999-01-01" min="1960-01-01"  required class="form-control" value="<?php echo $_SESSION['dateDeNaissance'];?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6 pr-md-1"  >
                                            <div class="form-group" >
                                                <label style="margin-right: 30px;">Sexe *</label>
                                                <div style="margin-top :1.8%;">  <input  style="margin-left: 5px;" type="radio" class="form-check-input" name="sexe" id="membershipRadios1" value="Masculin"  <?PHP if($_SESSION['sexe']=="Masculin") {  echo "checked" ; } else { echo "disabled" ; } ?>>
                                                    <i style="margin-left: 25px;">Masculin</i>
                                                    <input  style="margin-left: 20px;" type="radio" class="form-check-input" name="sexe" id="membershipRadios2" value="Féminin" <?PHP if($_SESSION['sexe']=="Féminin") {  echo "checked " ; }  else { echo "disabled" ; } ?>>
                                                    <i style="margin-left: 40px;">Féminin</i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address 1 *</label>
                                                <input type="text" required class="form-control" name="adresse1" placeholder="" value="<?php echo $_SESSION['adresse1']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group">
                                            <label>Address 2</label>
                                            <input type="text" class="form-control" name="adresse2" placeholder="" value="<?php echo $_SESSION['adresse2']; ?>">
                                                    </div>
                                             </div>
                                     </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Province</label>
                                                <input type="text" class="form-control" name="province" placeholder="" value="<?php echo $_SESSION['province']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 pr-md-1">
                                            <div class="form-group">
                                                <label>Ville *</label>
                                                <input type="text" name="ville" required class="form-control"  placeholder="Ville" value="<?php echo $_SESSION['ville']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4 px-md-1">
                                            <div class="form-group">
                                                <label>Pays *</label>
                                                <input type="text" required name="pays"  class="form-control" placeholder="Pays" value="<?php echo $_SESSION['pays']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-md-1">
                                            <div class="form-group">
                                                <label>Code Postale *</label>
                                                <input type="text" required name="codePostale"  class="form-control" placeholder="Code Postale" value="<?php echo $_SESSION['codePostale']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" name="modifier" class="btn btn-fill btn-primary" style="float:right;">Enregistrer</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4" >
                        <div class="card card-user" style="height : 96.1%;">
                            <div class="card-body">
                                <p class="card-text">
                                </p><div class="author">
                                    <div class="block block-one"></div>
                                    <div class="block block-two"></div>
                                    <div class="block block-three"></div>
                                    <div class="block block-four"></div>
                                    <a href="javascript:void(0)">
                                        <img class="avatar" src="<?php echo $_SESSION['photo']; ?>" alt="...">
                                        <h5 class="title"><?php echo $_SESSION['login']; ?></h5>
                                    </a>
                                    <p class="description">
                                        <?php echo $_SESSION['prenom']." ".$_SESSION['nom']; ?>
                                    </p>
                                </div>
                                <p></p>
                                <div class="card-description">

                                    <center>  <i class="tim-icons icon-heart-2"></i>
                                        Rating : <?php echo $_SESSION['rating']."%"; ?>

                                    </center>
                                </div>
                                <br> <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                         <center> <div ><a class="tim-icons icon-key-25" id="changepassword" >  Changer le mot de passe</a></div>
                                              <br>
                                           <form> <input id="old" type="password" required class="form-control"  style="width : 70%;   text-align: center;  " name="oldp" placeholder="Ancien mot de passe" value="">
                                              <br> <input id="neww"  type="password" required class="form-control"  style="width : 70%;   text-align: center;  " name="neww" placeholder="Nouveau mot de passe" value="">
                                              <br>
                                              <input id="newwc" name="newpass" type="password" required class="form-control"  style="width : 70%;   text-align: center;  " name="newwc" placeholder="Nouveau mot de passe" value="">
                                             <div class="card-footer">
                                                 <button id="modf" disabled type="submit" name="modifierp" class="btn btn-fill btn-primary" >Modifier</button>
                                             </div> </form>
                                          </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link">
                                <?php echo $_SESSION['login']; ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link">
                                About Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link">
                                Blog
                            </a>
                        </li>
                    </ul>
                    <div class="copyright">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> made with <i class="tim-icons icon-heart-2"></i> by
                        <a href="javascripcard card-chartt:void(0)" target="_blank"><?php echo $_SESSION['login']; ?></a> for a better web.
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <!-- Place this tag in your head or just before your close body tag. -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="assets/js/black-dashboard.min.js?v=1.0.0"></script>
    <!-- Black Dashboard DEMO methods, don't include it in your project! -->
    <script src="assets/demo/demo.js"></script>
    <script>
        $(document).ready(function() {
            $().ready(function() {
                $sidebar = $('.sidebar');
                $navbar = $('.navbar');
                $main_panel = $('.main-panel');

                $full_page = $('.full-page');

                $sidebar_responsive = $('body > .navbar-collapse');
                sidebar_mini_active = true;
                white_color = false;

                window_width = $(window).width();

                fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



                $('.fixed-plugin a').click(function(event) {
                    if ($(this).hasClass('switch-trigger')) {
                        if (event.stopPropagation) {
                            event.stopPropagation();
                        } else if (window.event) {
                            window.event.cancelBubble = true;
                        }
                    }
                });

                $('.fixed-plugin .background-color span').click(function() {
                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data', new_color);
                    }

                    if ($main_panel.length != 0) {
                        $main_panel.attr('data', new_color);
                    }

                    if ($full_page.length != 0) {
                        $full_page.attr('filter-color', new_color);
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.attr('data', new_color);
                    }
                });

                $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
                    var $btn = $(this);

                    if (sidebar_mini_active == true) {
                        $('body').removeClass('sidebar-mini');
                        sidebar_mini_active = false;
                        blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
                    } else {
                        $('body').addClass('sidebar-mini');
                        sidebar_mini_active = true;
                        blackDashboard.showSidebarMessage('Sidebar mini activated...');
                    }

                    // we simulate the window Resize so the charts will get updated in realtime.
                    var simulateWindowResize = setInterval(function() {
                        window.dispatchEvent(new Event('resize'));
                    }, 180);

                    // we stop the simulation of Window Resize after the animations are completed
                    setTimeout(function() {
                        clearInterval(simulateWindowResize);
                    }, 1000);
                });

                $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
                    var $btn = $(this);

                    if (white_color == true) {

                        $('body').addClass('change-background');
                        setTimeout(function() {
                            $('body').removeClass('change-background');
                            $('body').removeClass('white-content');
                        }, 900);
                        white_color = false;
                    } else {

                        $('body').addClass('change-background');
                        setTimeout(function() {
                            $('body').removeClass('change-background');
                            $('body').addClass('white-content');
                        }, 900);

                        white_color = true;
                    }


                });

                $('.light-badge').click(function() {
                    $('body').addClass('white-content');
                });

                $('.dark-badge').click(function() {
                    $('body').removeClass('white-content');
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            demo.initDashboardPageCharts();

        });
    </script>



    <script>
        $(document).ready(function(){
            $("#old").on('input', function() {
                if($("#newwc").val().length >=8 && $("#newwc").val() === $("#neww").val() && $("#old").val() === "<?php echo $_SESSION['motDePasse'];?>" )
                {
                        $("#changepassword").css("color","white");
                        $("#dang").attr("hidden",true);

                    $("#modf").removeAttr('disabled');
                 }

                else{
                    $("#changepassword").css("color","grey");
                    $("#dang").removeAttr('hidden');
                    $("#modf").attr("disabled",true);
                }
            });
        });
        $(document).ready(function(){
            $("#newwc").on('input', function() {
                if($("#newwc").val().length >=8 && $("#newwc").val() === $("#neww").val() && $("#old").val() === "<?php echo $_SESSION['motDePasse'];?>" )
                {

                        $("#changepassword").css("color","white");
                    $("#dang").attr("hidden",true);

                    $("#modf").removeAttr('disabled');
                } else{
                    $("#changepassword").css("color","grey");
                    $("#dang").removeAttr('hidden');

                    $("#modf").attr("disabled",true);
                }
            });
        });
        $(document).ready(function(){
            $("#neww").on('input', function() {
                if($("#neww").val().length >=8  && $("#newwc").val() === $("#neww").val() && $("#old").val() === "<?php echo $_SESSION['motDePasse'];?>")
                {

                        $("#changepassword").css("color","white");
                    $("#dang").attr("hidden",true);
                    $("#modf").removeAttr('disabled');

                } else{
                    $("#changepassword").css("color","grey");
                    $("#dang").removeAttr('hidden');

                    $("#modf").attr("disabled",true);
                }
            });
        });
    </script>
    </body>

    </html>
<?php } else {

    header('Location:login.php');

} ?>
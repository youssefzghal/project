<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)

session_start ();

// On récupère nos variables de session
if (isset($_SESSION['login']) && isset($_SESSION['motDePasse']))
{

    ?>
    <?PHP
    if (isset($_GET['ajouter']))

    {
        include "../../dbConfig/config.php";
        include "../../entities/chauffeur.php";
        include "../../core/chauffeurCore.php";
        include "../../entities/reclamationchauffeur.php";
        include "../../core/reclamationchauffeurC.php";

        $rec= new reclamationChauffeur(0,$_SESSION['login'],2,$_GET['message']);
        $rCore= new reclamationchauffeurCore();
        $rCore->addReclamationChauffeur($rec);

        header('Location:contactadmin.php?success=""');

    }

    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
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
                    <li >
                        <a href="./myprofile.php">
                            <i class="tim-icons icon-single-02"></i>
                            <p>Profile</p>
                        </a>
                    </li>
                    <li >
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
                    </li >
                    <li class="active ">
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
                    <b> Votre réclamation a été envoyer </b> avec succèe</span>
                </div>  <?php } ?>
                <div class="row">
                    <div class="col-md-12" style="widht : 100% ; " >
                        <div class="card">
                            <div class="card-header">
                                <h5 class="title">Contacter l'administration [ flySyphax ]</h5>
                            </div>
                            <div class="card-body">
                                <form>
                                      <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Veuillez écrire votre message</label>
                                                <textarea rows="4" cols="80" class="form-control" name="message" placeholder="Veuillez taper votre reclamation ici.." > </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" name="ajouter" class="btn btn-fill btn-primary" style="float : right;" >Envoyer</button>
                                    </div>
                                </form>
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
    </body>

    </html>
<?php } else {

    header('Location:login.php');

} ?>
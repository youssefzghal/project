
<?PHP

    include "../../../dbConfig/config.php";
    include "../../../entities/transfert.php";
    include "../../../core/transfertCore.php";


$cCore=new transfertCore();
$liste=$cCore->searchTransfertByEtat("Confirmé");
foreach($liste as $resultatc){}
$liste=$cCore->searchTransfertByEtat("Non confirmé");
foreach($liste as $resultatnc){}

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Flysyphax</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../resources/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../resources/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../resources/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../resources/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../resources/images/favicon.png" />
</head>

<body>
<div id="text1" style="display: none">Transferts Confirmés</div>
<div id="text2" style="display: none">Transferts Non Confirmés</div>
<div id="content1" style="display: none"><?php echo $resultatc['count(*)']; ?></div>
<div id="content2" style="display: none"><?php echo $resultatnc['count(*)']; ?></div>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
            <a class="navbar-brand brand-logo" href="../resources/index.html">
                <img src="../resources/images/logo.png" alt="logo" />
            </a>
            <a class="navbar-brand brand-logo-mini" href="../resources/index.html">
                <img src="../resources/images/logo-mini.svg" alt="logo" />
            </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
            <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                <li class="nav-item">
                    <a href="#" class="nav-link">Schedule
                        <span class="badge badge-primary ml-1">New</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a href="#" class="nav-link">
                        <i class="mdi mdi-elevation-rise"></i>Reports</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="mdi mdi-bookmark-plus-outline"></i>Score</a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-file-document-box"></i>
                        <span class="count">7</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                        <div class="dropdown-item">
                            <p class="mb-0 font-weight-normal float-left">You have 7 unread mails
                            </p>
                            <span class="badge badge-info badge-pill float-right">View all</span>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="../resources/images/faces/face4.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow">
                                <h6 class="preview-subject ellipsis font-weight-medium text-dark">David Grey
                                    <span class="float-right font-weight-light small-text">1 Minutes ago</span>
                                </h6>
                                <p class="font-weight-light small-text">
                                    The meeting is cancelled
                                </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="../resources/images/faces/face2.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow">
                                <h6 class="preview-subject ellipsis font-weight-medium text-dark">Tim Cook
                                    <span class="float-right font-weight-light small-text">15 Minutes ago</span>
                                </h6>
                                <p class="font-weight-light small-text">
                                    New product launch
                                </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="../resources/images/faces/face3.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow">
                                <h6 class="preview-subject ellipsis font-weight-medium text-dark"> Johnson
                                    <span class="float-right font-weight-light small-text">18 Minutes ago</span>
                                </h6>
                                <p class="font-weight-light small-text">
                                    Upcoming board meeting
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                        <i class="mdi mdi-bell"></i>
                        <span class="count">4</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                        <a class="dropdown-item">
                            <p class="mb-0 font-weight-normal float-left">You have 4 new notifications
                            </p>
                            <span class="badge badge-pill badge-warning float-right">View all</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-success">
                                    <i class="mdi mdi-alert-circle-outline mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-medium text-dark">Application Error</h6>
                                <p class="font-weight-light small-text">
                                    Just now
                                </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-warning">
                                    <i class="mdi mdi-comment-text-outline mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-medium text-dark">Settings</h6>
                                <p class="font-weight-light small-text">
                                    Private message
                                </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-info">
                                    <i class="mdi mdi-email-outline mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-medium text-dark">New user registration</h6>
                                <p class="font-weight-light small-text">
                                    2 days ago
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown d-none d-xl-inline-block">
                    <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <span class="profile-text">Salut, Admin !</span>
                        <img class="img-xs rounded-circle" src="../resources/images/faces/face2.jpg" alt="Profile image">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                        <a class="dropdown-item p-0">
                            <div class="d-flex border-bottom">
                                <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                                    <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                                </div>
                                <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                                    <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                                </div>
                                <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                                    <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item mt-2">
                            Manage Accounts
                        </a>
                        <a class="dropdown-item">
                            Change Password
                        </a>
                        <a class="dropdown-item">
                            Check Inbox
                        </a>
                        <a class="dropdown-item">
                            Sign Out
                        </a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <div class="nav-link">
                        <div class="user-wrapper">
                            <div class="profile-image">
                                <img src="../resources/images/faces/face2.jpg" alt="profile image">
                            </div>
                            <div class="text-wrapper">
                                <p class="profile-name">Admin</p>
                                <div>
                                    <small class="designation text-muted">Departement IT</small>
                                    <span class="status-indicator online"></span>
                                </div>
                            </div>
                        </div>
                            <button class="btn btn-success btn-block">Acceuil

              </button>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Tableau de bord </span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#CompagnieAérienne" aria-expanded="false" aria-controls="CompagnieAérienne">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Compagnie Aérienne</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="CompagnieAérienne">
              <ul class="nav flex-column sub-menu">
              
                <li class="nav-item">
                  <a class="nav-link" href="http://localhost/Vols/administrator/Compagnie%20Aérienne/Listeca.php">Liste</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="http://localhost/Vols/administrator/Compagnie%20Aérienne/Ajouterca.php">Ajouter</a>
                </li>
                 
               </ul>
            </div>
          </li> 
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#vols" aria-expanded="false" aria-controls="vols">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Vols</span>
              <i class="menu-arrow"></i>
            </a>
              <div class="collapse" id="vols">
              <ul class="nav flex-column sub-menu">
        <li class="nav-item active">
                  <a class="nav-link" href="http://localhost/Vols/administrator/Vols/views/Vols.php">Les Vols</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="http://localhost/Vols/administrator/Vols/views/Ajouter.html">Ajouter</a>
                </li>
         </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#Chauffeurs" aria-expanded="false" aria-controls="Chauffeurs">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Chauffeurs</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="Chauffeurs">
              <ul class="nav flex-column sub-menu">
              

                <li class="nav-item">
                  <a class="nav-link" href="http://localhost/transfert/views/administrator/Chauffeurs/Liste.php">Tous les chauffeurs</a>
                </li>
                <li class="nav-item">
                      <a class="nav-link  " href="http://localhost/transfert/views/administrator/Chauffeurs/Ajouter.php">Ajouter</a>
                </li>
                  <li class="nav-item">
                      <a class="nav-link " href="http://localhost/transfert/views/administrator/Chauffeurs/stats.php">Statistiques</a>
                  </li>
               </ul>
            </div>
          </li>
           <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#transferts" aria-expanded="false" aria-controls="transferts">
                        <i class="menu-icon mdi mdi-content-copy"></i>
                        <span class="menu-title">Transferts</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="transferts">
                        <ul class="nav flex-column sub-menu">

                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost/transfert/views/administrator/Transferts/LListe.php">Tous les Transferts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="http://localhost/transfert/views/administrator/Transferts/statss.php">Statistiques</a>
                            </li>
                        </ul>
                    </div>
                </li>
      
      <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#Reservation" aria-expanded="false" aria-controls="Reservation">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Reservation</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="Reservation">
              <ul class="nav flex-column sub-menu">
        
                <li class="nav-item active">
                  <a class="nav-link" href="http://localhost/Admin-Template/views/Ajouterreservation.php">Ajouter</a>
                </li>
        <li class="nav-item">
                  <a class="nav-link" href="http://localhost/Admin-Template/views/test2.php">stat</a>
                </li>
        <li class="nav-item">
                  <a class="nav-link" href="http://localhost/Admin-Template/views/rechercherreservation.php">rechercher</a>
                </li>
         </ul>
            </div>
          </li>
      
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#Hotels" aria-expanded="false" aria-controls="Hotels">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Hotels</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="Hotels">
              <ul class="nav flex-column sub-menu">
        
                <li class="nav-item">
                  <a class="nav-link" href="http://localhost/Admin-Template/views/Ajouterh.php">Ajouter</a>
                </li>
        <li class="nav-item">
                  <a class="nav-link" href="http://localhost/Admin-Template/views/rechercherh.php">rechercher</a>
                </li>
        <li class="nav-item">
                  <a class="nav-link" href="http://localhost/Admin-Template/views/afficherhotel.php">afficher</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://localhost/Admin-Template/views/testh.php">stat</a>
                </li>
      
               </ul>
            </div>
          </li> 
             <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#Voitures" aria-expanded="false" aria-controls="Voitures">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Voitures</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="Voitures">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="http://localhost/Voitures/views/Voitures/Ajouterv.php">Ajouter</a>
                </li> 
                <li class="nav-item">
                  <a class="nav-link" href="http://localhost/Voitures/views/Voitures/Supprimerv.html">Supprimer</a>
                </li>
               </ul>
            </div>
          </li> 
        </ul>
      </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="card">
                <div class="card-body"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                    <h4 class="card-title">Rapport Transferts</h4>
                    <canvas id="doughnutChart" style="height: 222px; display: block; width: 444px;" width="888" height="444" class="chartjs-render-monitor"></canvas>                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->

            <!-- partial -->
            <footer class="footer">
                <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="../resources/http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Spinner Tech
              <i class="mdi mdi-heart text-danger"></i>
            </span>
                </div>
            </footer>
        </div>
        <!-- main-panel ends -->

    <!-- page-body-wrapper ends -->

<!-- container-scroller -->

<!-- plugins:js -->
<script src="../resources/vendors/js/vendor.bundle.base.js"></script>
<script src="../resources/js/ajouterchauffeur.js"></script>
<script src="../resources/vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="../resources/js/off-canvas.js"></script>
<script src="../resources/js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="../resources/js/dashboard.js"></script>*
<script src="../resources/js/chart.js"></script>
<!-- End custom js for this page-->
</body>
</html>




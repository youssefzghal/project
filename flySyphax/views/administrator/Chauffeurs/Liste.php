
<?PHP

    include "../../../dbConfig/config.php";
    include "../../../entities/chauffeur.php";
    include "../../../core/chauffeurCore.php";


$cCore=new chauffeurCore();
$liste=$cCore->getAllChauffeurs();

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
                        <button class="btn btn-success btn-block">Liste de chauffeurs

                        </button>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../resources/index.html">
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
                                <a class="nav-link" href="">Ajouter</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../resources/pages/ui-features/typography.html">Modifier</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../resources/pages/ui-features/typography.html">Supprimer</a>
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

                            <li class="nav-item ">
                                <a class="nav-link" href="">Ajouter</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../resources/pages/ui-features/typography.html">Modifier</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../resources/pages/ui-features/typography.html">Supprimer</a>
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
                                <a class="nav-link" href="Liste.php">Tous les chauffeurs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  " href="Ajouter.php">Ajouter</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="stats.php">Statistiques</a>
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
                                <a class="nav-link" href="../Transferts/Lliste.php">Tous les transferts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../Transferts/statss.php">Statistique</a>
                            </li>

                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Liste de chauffeurs</h4>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>
                                    Photo
                                </th>
                                <th>
                                    Nom & Prénom
                                </th>
                                <th>
                                    Rating
                                </th>
                                <th>
                                    Pays
                                </th>
                                <th>
                                    Modifier/Supprimer
                                </th>
                            </tr>
                            </thead>
                            <tbody>

                            <?PHP
                            foreach($liste as $row){
                            ?>

                            <tr>
                                <td class="py-1">
                                    <img src="<?PHP echo $row['photo']; ?>" alt="image">
                                </td>
                                <td>
                                    <?PHP echo $row['nom']." ".$row['prenom']; ?>
                                </td>
                                <td>
                                    <div class="progress">

                                        <div class="progress-bar bg-success" role="progressbar" style="width: <?PHP echo $row['rating']; ?>%" aria-valuenow="<?PHP echo $row['rating']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>
                                    <?PHP echo $row['pays']; ?>
                                </td>
                                <td>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <a href="view.php?loginn=<?PHP echo $row['login']; ?>" <i class="fa fa-vcard-o"></i> Plus d'information  </a></div>
                                </td>
                            </tr>

                                <?PHP
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
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
<script src="../resources/js/dashboard.js"></script>
<!-- End custom js for this page-->
</body>
</html>



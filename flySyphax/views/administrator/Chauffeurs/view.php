
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
    <?PHP

    include "../../../dbConfig/config.php";
    include "../../../entities/chauffeur.php";
    include "../../../core/chauffeurCore.php";

    if (isset($_GET["loginn"])){

        $cCore=new chauffeurCore();
        $liste=$cCore->getChauffeur($_GET["loginn"]);
        foreach($liste as $resultat){}
    }
     else if (isset($_GET["modifier"])) {

         if($_GET["photo"]!="") {
         $chauffeur = new \chauffeur\chauffeur($_GET['pnom'], $_GET['nom'], $_GET['sexe'], $_GET['daten'], $_GET['adresse1'], $_GET['province'], $_GET['adresse2'], $_GET['zip'], $_GET['ville'], $_GET['pays'], $_GET['cin'], $_GET['telephone'], $_GET['login'], $_GET['motdepasse'], "-1", "../resources/images/Chauffeurs/" . $_GET['photo']);
         }
         else {
             $cCore=new chauffeurCore();
             $liste=$cCore->getChauffeur($_GET["login"]);
             foreach($liste as $resultat){}

         $chauffeur = new \chauffeur\chauffeur($_GET['pnom'], $_GET['nom'], $_GET['sexe'], $_GET['daten'], $_GET['adresse1'], $_GET['province'], $_GET['adresse2'], $_GET['zip'], $_GET['ville'], $_GET['pays'], $_GET['cin'], $_GET['telephone'], $_GET['login'], $_GET['motdepasse'], "-1", $resultat['photo']);
         }

         $mCore= new chauffeurCore();
         $mCore->updateChauffeur($chauffeur);

         header('Location:Liste.php');


     }
     else if (isset($_GET["supprimer"])) {

         $mCore= new chauffeurCore();
         $mCore->deleteChauffeur($_GET["login"]);
         header('Location:Liste.php');

     }
    else {

        header('Location:Liste.php');

    }

    ?>
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
                                <a class="nav-link" href="../resources/pages/ui-features/typography.html">Ajouter</a>
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
            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">


                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><?PHP echo $resultat['login']; ?></h4>
                                <form class="form-sample">
                                    <p class="card-description">
                                        Les informations de : <?PHP echo $resultat['login']; ?>
                                    </p><br>
                                    <div id="photouploaded" class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">
                                                    <img id="selectedphoto" style=" margin-left: 10%; border-radius: 50%;" src="<?PHP echo $resultat['photo']; ?>" alt="profile image">
                                                </label>
                                                <div class="col-sm-9">

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Photo *</label>

                                                <div class="form-group" style="  position: relative; overflow: hidden; display: inline-block;">

                                                    <div class="input-group col-xs-12" style="margin-left: 4%;">
                                                        <input type="text" class="form-control file-upload-info" disabled="" placeholder="Télécharger Image">
                                                        <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-info" type="button" onclick="photoAdd()">Télécharger</button>
                                        </span>
                                                        <input id="inputphoto" title="Veuillez inserer une image" accept="image/gif, image/jpeg, image/png" type="file" name="photo" style="   font-size: 100px; position: absolute; left: 0; top: 0; opacity: 0;">

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Prénom *</label>
                                                <div class="col-sm-9">
                                                    <input value="<?PHP echo $resultat['prenom']; ?>" name="pnom" required type="text" class="form-control" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Nom *</label>
                                                <div class="col-sm-9">
                                                    <input value="<?PHP echo $resultat['nom']; ?>" name="nom" required type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Sexe *</label>
                                                <div class="col-sm-4">
                                                    <div class="form-radio">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input" name="sexe" id="membershipRadios1" value="Masculin"  <?PHP if($resultat['sexe']=="Masculin") {  echo "checked" ; } ?>> Masculin
                                                            <i class="input-helper"></i></label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-radio">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input" name="sexe" id="membershipRadios2" value="Féminin" <?PHP if($resultat['sexe']=="Féminin") {  echo "checked" ; } ?>> Féminin
                                                            <i class="input-helper"></i></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Date de naissance *</label>
                                                <div class="col-sm-9">
                                                    <input  value="<?PHP echo $resultat['dateDeNaissance']; ?>" name="daten" required type="date" class="form-control"   max="1999-01-01" min="1960-01-01" value="1999-01-01" title="Date de naissance n'est pas valide">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="card-description" >
                                        Adresse
                                    </p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Adresse 1 *</label>
                                                <div class="col-sm-9">
                                                    <input  value="<?PHP echo $resultat['adresse1']; ?>" name="adresse1" required type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Province  </label>
                                                <div class="col-sm-9">
                                                    <input   value="<?PHP echo $resultat['province']; ?>" name="province" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Adresse 2 </label>
                                                <div class="col-sm-9">
                                                    <input   value="<?PHP echo $resultat['adresse2']; ?>"  name="adresse2" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Code Postale *</label>
                                                <div class="col-sm-9">
                                                    <input  value="<?PHP echo $resultat['codePostale']; ?>" name="zip" required type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Ville *</label>
                                                <div class="col-sm-9">
                                                    <input  value="<?PHP echo $resultat['ville']; ?>" name="ville" required type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Pays *</label>
                                                <div class="col-sm-9">
                                                    <select name="pays" class="form-control">

                                                        <option  value="<?PHP echo $resultat['pays']; ?>" selected="selected"><?PHP echo $resultat['pays']; ?></option>

                                                        <option value="France">France </option>
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


                                            </div>

                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Cin / Passport *</label>
                                                <div class="col-sm-9">
                                                    <input value="<?PHP echo $resultat['cin']; ?>" name="cin" required type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Telephone *</label>
                                                <div class="col-sm-9">
                                                    <input value="<?PHP echo $resultat['telephone']; ?>" name="telephone" required pattern="{8}" title="doit contenir  au moins 8 lettres"  type="number" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Information de connexion</h4>
                                            <p class="card-description">
                                                Changer le mot de passe
                                            </p>

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend bg-primary border-primary">
                            <span class="input-group-text bg-transparent">
                              <i class="mdi mdi mdi-menu text-white"></i>
                            </span>
                                                    </div>
                                                    <input hidden type="text" name="login" value="<?PHP echo $resultat['login'];?>" >
                                                    <input required type="password" name="motdepasse"  placeholder="Mot de Passe *"  pattern="{8}" title="doit contenir  au moins 8 lettres" class="form-control" aria-label="Username" aria-describedby="colored-addon2" value="<?PHP echo $resultat['motDePasse']; ?>">
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <center>
                                        <button type="submit" class="btn btn-success mr-2" name="modifier" id="modifier" >Modifier</button>
                                        <button type="submit" class="btn btn-danger btn-fw" name="supprimer" id="supprimer" >Supprimer</button>

                                    </center>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="../resources/http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Spinner Tech
              <i class="mdi mdi-heart text-danger"></i>
            </span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="../resources/vendors/js/vendor.bundle.base.js"></script>
<script src="../resources/js/modifierchauffeur.js"></script>
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



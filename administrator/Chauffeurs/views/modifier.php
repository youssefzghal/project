<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Flysyphax</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
<?PHP
include "../entities/Vol.php";
include "../core/VolCore.php";
if (isset($_GET['ref'])){
	$volc=new VolCore();
    $result=$volc->getVol($_GET['ref']);
	foreach($result as $row){
		$reff=$row['ref'];
		$datee=$row['datee'];
		$temps=$row['temps'];
		$depart=$row['depart'];
		$destination=$row['destination'];
		$compagnie=$row['compagnie'];
	}
?>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="../../index.html">
          <img src="../../images/logo.png" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="../../index.html">
          <img src="../../images/logo-mini.svg" alt="logo" />
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
                  <img src="../../images/faces/face4.jpg" alt="image" class="profile-pic">
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
                  <img src="../../images/faces/face2.jpg" alt="image" class="profile-pic">
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
                  <img src="../../images/faces/face3.jpg" alt="image" class="profile-pic">
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
              <span class="profile-text">Hello, Admin !</span>
              <img class="img-xs rounded-circle" src="../../images/faces/face1.jpg" alt="Profile image">
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
                  <img src="../../images/faces/face1.jpg" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Admin</p>
                  <div>
                    <small class="designation text-muted">Manager</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
              <button class="btn btn-success btn-block">New Project
                <i class="mdi mdi-plus"></i>
              </button>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../index.html">
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
                  <a class="nav-link" href="../../pages/ui-features/typography.html">Modifier</a>
                </li>
				<li class="nav-item">
                  <a class="nav-link" href="../../pages/ui-features/typography.html">Supprimer</a>
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
                  <a class="nav-link" href="../../Vols/views/Vols.php">Les Vols</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="../../Vols/views/Ajouter.html">Ajouter</a>
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
                  <a class="nav-link" href="../../pages/ui-features/typography.html">Ajouter</a>
                </li>
				<li class="nav-item">
                  <a class="nav-link" href="../../pages/ui-features/typography.html">Modifier</a>
                </li>
				<li class="nav-item">
                  <a class="nav-link" href="../../pages/ui-features/typography.html">Supprimer</a>
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
                  <a class="nav-link" href="../../pages/ui-features/typography.html">Ajouter</a>
                </li>
				<li class="nav-item">
                  <a class="nav-link" href="../../pages/ui-features/typography.html">Modifier</a>
                </li>
				<li class="nav-item">
                  <a class="nav-link" href="../../pages/ui-features/typography.html">Supprimer</a>
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
                  <h4 class="card-title">Vols</h4>
                  <form class="form-sample" method="POST" action="modifier.php">
                    <p class="card-description">
                      Ajouter un nouveau vol
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date </label>
                          <div class="col-sm-9">
                            <input value="<?PHP echo $datee ?>" name="datee" type="date" class="form-control" /> 
                          </div>
                        </div>
                      </div>
						 <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Temps</label>
                          <div class="col-sm-9">
                            <input value="<?PHP echo $temps ?>" name="temps" type="time" class="form-control" /> 
                          </div>
                        </div>
                      </div>	
                    </div>
                    
					<div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Départ </label>
                          <div class="col-sm-9">
                            <select name="depart" class="form-control">
                              <option selected hidden><?PHP echo $depart ?></option>
							  <option>Tunisie</option>
                              <option>France</option>
                              <option>Gabon</option>
                              <option>Egypte</option>
                            </select> 
                          </div>
                        </div>
                      </div>
						 <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Déstination</label>
                          <div class="col-sm-9">
                            <select name="destination" class="form-control">
							  <option selected hidden><?PHP echo $destination ?></option>
                              <option>Tunisie</option>
                              <option>France</option>
                              <option>Gabon</option>
                              <option>Egypte</option>
                            </select>
                          </div>
                        </div>
                      </div>	
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Compagnie Aérienne</label>
                          <div class="col-sm-9">
                            <select name="compagnie" class="form-control">
							  <option selected hidden ><?PHP echo $compagnie ?></option>
                              <option>TunisAir</option>
                              <option>Emirates</option>
                              <option>Syphax Airlines</option>
                              <option>Royale Maroc</option>
                            </select>
                          </div>
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Ref°</label>
                          <div class="col-sm-9">
                            <input value="<?PHP echo $reff ?>" name="ref" type="text" class="form-control" /> 
                          </div>
                        </div>
                      </div>
                    </div>
					<input type="hidden" name="ref_ini" value="<?PHP echo $_GET['ref'];?>">
					<button type="submit" class="btn btn-success mr-2">Modifier</button>
                        <button class="btn btn-light">Annuler</button>
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
              <a href="../../http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
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
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <script src="../../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/dashboard.js"></script>
  <!-- End custom js for this page-->
<?PHP
	
}
if (isset($_POST['ref']) and isset($_POST['datee']) and isset($_POST['temps']) and isset($_POST['depart']) and isset($_POST['destination']) and isset($_POST['compagnie'])){
    $vol2=new Vol($_POST['ref'],$_POST['datee'],$_POST['temps'],$_POST['depart'],$_POST['destination'],$_POST['compagnie']);
	$volcc=new VolCore();
	$volcc->updateVol($vol2,$_POST['ref_ini']);
	header('Location:  Vols.php');
}
?>
</body>

</html>
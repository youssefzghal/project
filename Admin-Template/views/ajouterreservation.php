<?PHP
include "../core/hotelc.php";
include "../entities/hotel.php";
$hotel1C=new hotelc();
$listehotels=$hotel1C->afficherhotels();
/*$tab=$listehotels->fetchAll();
var_dump($tab);*/
$reservationc=new reservationc();
$listeresrvation=$reservationc->afficherreservation();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Flysyphax</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="../index.html">
          <img src="../images/logo.png" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="../index.html">
          <img src="../images/logo-mini.svg" alt="logo" />
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
                  <img src="../images/faces/face4.jpg" alt="image" class="profile-pic">
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
                  <img src="../images/faces/face2.jpg" alt="image" class="profile-pic">
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
                  <img src="../images/faces/face3.jpg" alt="image" class="profile-pic">
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
              <img class="img-xs rounded-circle" src="../images/faces/face1.jpg" alt="Profile image">
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
                  <img src="../images/faces/face1.jpg" alt="profile image">
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
            <a class="nav-link" href="../index.html">
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
                  <a class="nav-link" href="../pages/ui-features/typography.html">Modifier</a>
                </li>
				<li class="nav-item">
                  <a class="nav-link" href="../pages/ui-features/typography.html">Supprimer</a>
                </li>
			   </ul>
            </div>
          </li> 
		  
		  <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#vols" aria-expanded="false" aria-controls="vols">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Reservation</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="vols">
              <ul class="nav flex-column sub-menu">
			  
                <li class="nav-item active">
                  <a class="nav-link" href="Ajouterreservation.php">Ajouter</a>
                </li>
				<li class="nav-item">
                  <a class="nav-link" href="test2.php">stat</a>
                </li>
				<li class="nav-item">
                  <a class="nav-link" href="rechercherreservation.php">Rechercher</a>
                </li>
			   </ul>
            </div>
          </li>
		  
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#Chauffeurs" aria-expanded="false" aria-controls="Chauffeurs">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">hotel</span>
              <i class="menu-arrow"></i>
            </a>
           <div class="collapse" id="Chauffeurs">
              <ul class="nav flex-column sub-menu">
        
                <li class="nav-item">
                  <a class="nav-link" href="../views/Ajouter.php">Ajouter</a>
                </li>
        <li class="nav-item">
                  <a class="nav-link" href="rechercher.php">rechercher</a>
                </li>
        <li class="nav-item">
                  <a class="nav-link" href="afficherhotel.php">afficher</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="test.php">stat</a>
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
                  <a class="nav-link" href="../pages/ui-features/typography.html">Ajouter</a>
                </li>
				<li class="nav-item">
                  <a class="nav-link" href="../pages/ui-features/typography.html">Modifier</a>
                </li>
				<li class="nav-item">
                  <a class="nav-link" href="../pages/ui-features/typography.html">Supprimer</a>
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
                  <h4 class="card-title">Reservation</h4>


                  <form class="form-sample" name="f" id="f" action="#"  method="post" onsubmit="return test2()">
                    <p class="card-description">
                      Ajouter une nouvelle reservation
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nom </label>
                          <div class="col-sm-9">
                            <input type="text" name="nom" id="nom" class="form-control" required /> 
                          </div>
                        </div>
                      </div>
						 <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Prenom</label>
                          <div class="col-sm-9">
                              <input type="text" name="prenom" id="prenom" class="form-control" required />  
                          </div>
                        </div>
                      </div>	
                    </div>
                    
					<div class="row">
           <div class="col-md-6">
                          
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Check in/out </label>
                          <div class="col-sm-9">
                            <table>
                              <tr>
                            <td><input type="date" name="checkin" id="checkin" class="form-control"  required oninput="test()"></td>
                        <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                         <td><input type="date" name="checkout" id="checkout" class="form-control"  required oninput="test()"></td>
                          </tr>
                            </table>
                          </div>
                    </div>
          </div>

          <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nb nuits</label>
                          <div class="col-sm-9">
                            <input type="number" name="nbnuit" id="nbnuit" class="form-control" readonly>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">id hotel</label>
                          <div class="col-sm-9">
                             <select name="idh" id="idh" class="form-control" required>
                                 <?PHP
                                    foreach($listehotels as $row)
                                 {
                                ?>
                                     <option  value="<?PHP echo $row['id']; ?>"><?PHP echo $row['id']; ?></option>  
                      
                                 <?PHP
                                   }
                                 ?>      
                </select>
                          </div>
                        </div>
                      </div>

                        <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">T&eacutel&eacutephone</label>
                          <div class="col-sm-9">
                            <input type="text" id="tel" name="tel" class="form-control" pattern="[0-9]{8}" required 
       title="Le numero contient huit chiffres.">
                            
                          </div>
                        </div>
                      </div>
                      
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nb doubles</label>
                          <div class="col-sm-9">
                            <input type="number" name="nb2" id="nb2" class="form-control" required min="1" value="1">
                          </div>
                        </div>
                      </div>

                        <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">nb triples</label>
                          <div class="col-sm-9">
                            <input type="number" id="nb3" name="nb3" class="form-control" min="0" value="0" required >
                            
                          </div>
                        </div>
                      </div>
                      
                    </div>
					<button type="submit" name="ajouter" value="ajouter" class="btn btn-success mr-2">Ajouter</button>
                        
                  </form>
                </div>
              </div>
            </div> 
		  
		  
		  
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->

<?php
if(isset($_POST['ajouter']))
{
  
 $idhotel=$_POST['idh'];
 $date1=$_POST['checkin'];
 $date2=$_POST['checkout'];
 $chambre=$_POST['nb2'];
 $telephone=$_POST['tel'];
 $nomclient=$_POST['nom'];
 $prenomclient=$_POST['prenom'];
 

 /* $resultat=$resrvation->recuperernbchambre($date1,$date2,$id);
  
  
  var_dump($resultat->fetchAll());*/
  $reservation1=new reservation('1',$nomclient,$prenomclient,$chambre,$date1,$date2,$idhotel,$telephone);
$verif=$reservationc->verifierdisponible($reservation1);


if($verif==true)
{
  $reservationc->ajouter_reservation($reservation1);
  $listeresrvation=$reservationc->afficherreservation();
}

 
}

?>





<div class="table-responsive">
<table  class="table table-hover table-striped table-bordered" >
<thead>
<tr>
 <td style="color:#5983e8"></td>
 <td style="color:#5983e8"></td> 
<td style="color:#5983e8;font-weight:bold">Hotel</td>
<td style="color:#5983e8;font-weight:bold">Ville</td>
<td style="color:#5983e8;font-weight:bold">ID</td>
<td style="color:#5983e8;font-weight:bold">Checkin</td>
<td style="color: #5983e8;font-weight:bold">Checkout</td>
<td style="color: #5983e8;font-weight:bold">Chambres</td>
<td style="color: #5983e8;font-weight:bold">Nom</td>
<td style="color: #5983e8;font-weight:bold">prenom</td>



</tr>
</thead>
<?PHP
foreach($listeresrvation as $row){
  
  ?>
  
  <tr>
   <td><form method="POST" action="supprimerreservation.php">
  <input type="submit"  class="btn btn-success mr-2" name="supprimer" value="supprimer">
  <input type="hidden" value="<?PHP echo $row['idres']; ?>" name="idres">
  </form>
  </td>
  <td><a href="modifierreservation.php?id=<?PHP echo $row['idres']; ?>">
  Modifier</a></td> 
  <td><?PHP echo $row['hotel']; ?></td>
  <td><?PHP echo $row['ville']; ?></td>
  <td><?PHP echo $row['idres']; ?></td>
  <td><?PHP echo $row['checkin']; ?></td>
  <td><?PHP echo $row['checkout']; ?></td>
  <td><?PHP echo $row['nbdouble']; ?></td>
  <td><?PHP echo $row['nom']; ?></td>
   <td><?PHP echo $row['prenom']; ?></td>


  
 
  </tr>

  <?PHP
}

?>
</table><!-- content-wrapper ends -->
     </div>   










        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="../http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
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
  <script src="../vendors/js/vendor.bundle.base.js"></script>
  <script src="../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../js/off-canvas.js"></script>
  <script src="../js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../js/dashboard.js"></script>
  <!-- End custom js for this page-->
  <script >
    var dateControl=f.checkin;
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
dateControl.value=dateactuelle;
dateControl.min=dateactuelle;


var dateControl=f.checkout;

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
dateControl.value=dateactuelle;
dateControl.min=dateactuelle;
f.nbnuit.value="1";

function test()
{
  var date =f.checkin.value ;

     var parts=date.split('-');

var mydate1 = new Date(parts[0], parts[1] - 1, parts[2]);

var dat =f.checkout.value ;

var parts2 =dat.split('-');


var mydate2 = new Date(parts2[0], parts2[1] - 1, parts2[2]);

var WNbJours = mydate2.getTime() - mydate1.getTime();
f.nbnuit.value=Math.ceil(WNbJours/(1000*60*60*24));
}

function test2()
{

  var date =f.checkin.value ;

     var parts=date.split('-');

var mydate1 = new Date(parts[0], parts[1] - 1, parts[2]);

var dat =f.checkout.value ;

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
<?PHP
include "../core/hotelc.php";

$hotel1C=new hotelc();
$listehotels=$hotel1C->afficherhotels();

//var_dump($listeEmployes->fetchAll());
?>

<?php

$s=-1;
foreach($listehotels as $row){

  if($row['id'] >$s)
  {
    $s=$row['id'];
  }
      
  

}

$listehotels=$hotel1C->afficherhotels();
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
   <link rel="stylesheet" href="../vendors/icheck/skins/all.css">
   <link rel="stylesheet" href="../vendors/iconfonts/font-awesome/css/font-awesome.css">  <!-- endinject -->
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
        <a class="navbar-brand brand-logo" href="../resources/index.html">
          <img src="../images/logo.png" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="../resources/index.html">
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
              <span class="profile-text">Salut, Admin !</span>
              <img class="img-xs rounded-circle" src="../images/faces/face2.jpg" alt="Profile image">
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
                  <img src="../images/faces/face2.jpg" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Admin</p>
                  <div>
                    <small class="designation text-muted">Manager</small>
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
        <div class="content-wrapper">
          <div class="row">
		  
		  
		  <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">hotel</h4>
                  <form class="form-sample" method="post" name="f" id="f" onsubmit=" return ajour()" action="ajouthotel.php">
                    <p class="card-description">
                      Ajouter un nouveau hotel
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Id hotel</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" name="idhotel" value="<?PHP echo $s+1; ?>" readonly required>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nom Hotel</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="nom" id="nom" required>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">categorie notes reviews</label>
                          <div class="col-sm-9">
                            <table><tr><td>
                              <img src="etoile.png" name="e1" onclick="colorer1()">
  <img src="etoile.png" name="e2" onclick="colorer2()">
  <img src="etoile.png" name="e3" onclick="colorer3()">
  <img src="etoile.png" name="e4" onclick="colorer4()">
  <img src="etoile.png" name="e5" onclick="colorer5()">
  
  <input type="hidden" name="nbetoiles" id="nbetoiles" ></td>

                            <td></td>

                            <td>Review<select class="form-control" id="review" name="review">
                              <option>meduim</option>
                      <option>bad</option>
                      <option>good</option>
                      <option>very good</option>
                      
                            </select></td><td></td>

                             <td>
                                 Note<input type="number" name="note"  class="form-control" value="5" min="1" max="10">
                            </td>
                          </tr>
                          </table>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">nb chambres</label>
                          <div class="col-sm-9">
                             <table>
                              <tr>
                              <td>Doubles<input type="number" id="ch2" name="ch2" value="1" min="1" max="200" class="form-control" required oninput="somme()"></td><td></td><td></td>
                               <td>Triples<input type="number" id="ch3" name="ch3" value="1" min="1" max="200" class="form-control" required oninput="somme()"></td><td></td><td></td>

                               <td>Total<input type="number" id="total" name="total" value="2" class="form-control" readonly></td>
                               

                             </tr>
                           </table>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p class="card-description" >
                      Email Hotel
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">email <i class="fa fa-envelope-open-o"></i></label>
                          <div class="col-sm-9">
                             <input type="email" id="email_addr" name="email_addr" class="form-control" required>
                            
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Description</label>
                          <div class="col-sm-9">
                            <textarea id="msg" name="msg" class="form-control" required></textarea>
                            
                          </div>


                           


                          
                        </div>



                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">confirmer l'email</label>
                          <div class="col-sm-9">
                            <input type="email" id="email_addr_repeat" name="email_addr_repeat" class="form-control" required 
       onblur="check(this)" onfocus="che(this)">
                           
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">longitude</label>
                          <div class="col-sm-9">
                            <input type="Number" step="any" id="longitude" name="longitude" class="form-control" required  >
                            
                          </div>
                        </div>
                      </div>
                    </div>






                   <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">fichier image <i class="fa fa-file-image-o"></i></label>
                          <div class="col-sm-9">
                            <input type="file" id="image" name="image" class="form-control" required >
                           
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">URL</label>
                          <div class="col-sm-9">
                            <input type="url" name="url" id="url" class="form-control" placeholder="https://example.com"value="https://movenpick.com" 
                                pattern="https://.*" size="30" required>

                             </div>
                        </div>
                      </div>
                    </div>

















                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Ville</label>
                          <div class="col-sm-9">
                             
                             <select name="ville" id="ville" class="form-control" onchange="remplir(this)" required>
                             	 <option  value="Tunis">Tunis</option>  
                      
                                        <option  value="Nabeul">Nabeul</option>  
                      
                                        <option  value="Hammamet">Hammamet</option>  
                      
                                        <option  value="Sousse">Sousse</option>  
                      
                                        <option  value="Monastir">Monastir</option>  
                      
                                        <option  value="Djerba">Djerba</option>  
                      
                                        <option  value="Mahdia">Mahdia </option>  
                      
                                        <option  value="Zaghouane">zaghouane </option> 
                      
                                        <option  value="Mahdia">Mahdia</option> 
                      
                                        <option  value="Tabarka">Tabarka</option>  
                      
                                        <option  value="Aindrahem">Ain Draham </option>  
                      
                                        <option  value="Gafsa">Gafsa</option>  
                      
                                        <option  value="Tozeur">Tozeur</option> 
                      
                                        <option  value="Douz">Douz</option> 
                      
                                        <option  value="Kairouan">Kairouan </option>  
                      
                                        <option  value="Nafta">Nafta</option>  
                   
                  
                </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Prix chambre <i class="fa fa-money"></i></label>

                      
                       
                          <div class="col-sm-9">
                            <table>
                            <tr><td> Doubles </td><td></td><td><input type="number" class="form-control" id="prixd" name="prixd" value="25" min="1" max="2000"  required ></td><td> </td><td> </td>
                             <td> latitude </td><td></td><td><input type="number" step="any" class="form-control" id="prixt" name="prixt" value="25" min="1" max="2000" required ></td>
                            </tr>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
					 <br>
					<center>
				  <button type="submit" class="btn btn-success mr-2"  >Ajouter</button>
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
   <script>
   
   
   f.nbetoiles.value='2 etoiles';
      function colorer1()
      {
        f.e1.src='etoileremplie.png';
        f.e2.src='etoileremplie.png';
        f.e3.src='etoile.png';
        f.e4.src='etoile.png';
        f.e5.src='etoile.png';
        f.nbetoiles.value='2 etoiles';
        //alert(f.note.value);
      }
      function colorer2()
      {
        f.e1.src='etoileremplie.png';
        f.e2.src='etoileremplie.png';
        f.e3.src='etoile.png';
        f.e4.src='etoile.png';
        f.e5.src='etoile.png';
        f.nbetoiles.value='2 etoiles';
        //alert(f.note.value);
      }
      function colorer3()
      {
        f.e1.src='etoileremplie.png';
        f.e2.src='etoileremplie.png';
        f.e3.src='etoileremplie.png';
        f.e4.src='etoile.png';
        f.e5.src='etoile.png';
        f.nbetoiles.value='3 etoiles';
        //alert(f.note.value);
      }

        function colorer4()
      {
        f.e1.src='etoileremplie.png';
        f.e2.src='etoileremplie.png';
        f.e3.src='etoileremplie.png';
        f.e4.src='etoileremplie.png';
        f.e5.src='etoile.png';
        f.nbetoiles.value='4 etoiles';
        //alert(f.note.value);
      }
        function colorer5()
      {
        f.e1.src='etoileremplie.png';
        f.e2.src='etoileremplie.png';
        f.e3.src='etoileremplie.png';
        f.e4.src='etoileremplie.png';
        f.e5.src='etoileremplie.png';
        f.nbetoiles.value='5 etoiles';
        //alert(f.note.value);
      }
   


    function che(input){
       input.style.backgroundColor = "";

    }

    function check(input) {
     
      if (input.value != document.getElementById('email_addr').value) {
        input.style.backgroundColor = "#fba";
        input.setCustomValidity('Les deux adresses e-mail ne correspondent pas.');

        
        return false;
      } else {
        // le champ est valide : on réinitialise le message d'erreur
        input.style.backgroundColor = "";
        input.setCustomValidity('');
        
        return true;
      }
    }

    function somme()
    {
      var a=document.getElementById('ch2').value;
      var b=document.getElementById('ch3').value;
       var s=Number(a)+Number(b); 
          

      f.total.value=s;
    }

   function ajour()
    {
      v= check(f.email_addr_repeat);

     

      if(v)
      {  
                         
                 return true ;
      }
      else
      {
      	return false;
      }
      
     
    
    }






     function remplir(input)
    {


      if(input.value=='Hammamet')
      {
        f.longitude.value=10.61;
        f.prixt.value=36.4;
      }


       if(input.value=='Sousse')
      {
        f.longitude.value=10.63;
        f.prixt.value=35.8;
      }


       if(input.value=='Tunis')
      {
        f.longitude.value=10.16;
        f.prixt.value=36.81;
      }


      
        if(input.value=='Mahdia')
      {
        f.longitude.value=11.06;
        f.prixt.value=35.5;
      }



        if(input.value=='Monastir')
      {
        f.longitude.value=10.81;
        f.prixt.value=35.76;
      }

        if(input.value=='Tabarka')
      {
        f.longitude.value=8.75;
        f.prixt.value=36.90;
      }

       if(input.value=='Nabeul')
      {
        f.longitude.value=10.73;
        f.prixt.value=36.45;
      }
    }
    </script>
</body>

</html>
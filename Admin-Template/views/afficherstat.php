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
                  <a class="nav-link" href="../pages/ui-features/typography.html">supprimer</a>
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
                  <a class="nav-link" href="afficherreservation.php">afficher</a>
                </li>
        <li class="nav-item">
                  <a class="nav-link" href="rechercherreservation.php">rechercher</a>
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
                  <a class="nav-link" href="rechercher.php">Rechercher</a>
                </li>
        <li class="nav-item">
                  <a class="nav-link" href="afficherhotel.php">Afficher</a>
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
                  <h4 class="card-title">hotel</h4>
                  <form class="form-sample" method="post" name="f" id="f" onsubmit=" return ajour()" action="ajouthotel.php">
                     <center><img src="../views/monimage.png"></center>
                  </form>
                </div>
              </div>
            </div>
      
      
          </div>
        </div>

<div class="table-responsive">
<table  class="table table-hover table-striped table-bordered" >
<thead>
<tr>
 <td style="color:#5983e8"></td>
 <td style="color:#5983e8"></td> 
<td style="color:#5983e8;font-weight:bold">ID</td>
<td style="color:#5983e8;font-weight:bold">Nom</td>
<td style="color:#5983e8;font-weight:bold">Ville</td>
<td style="color:#5983e8;font-weight:bold">Categorie</td>
<td style="color: #5983e8;font-weight:bold">Note</td>
<td style="color: #5983e8;font-weight:bold">Review</td>
<td style="color: #5983e8;font-weight:bold">Doubles</td>
<td style="color: #5983e8;font-weight:bold">Triples</td>
<td style="color: #5983e8;font-weight:bold">Total</td>
<td style="color: #5983e8;font-weight:bold">Prix doubles</td>
<td style="color: #5983e8;font-weight:bold">Prix triples</td>
<td style="color: #5983e8;font-weight:bold">Image</td>
<td style="color: #5983e8;font-weight:bold">longitude</td>

</tr>
</thead>
<?PHP
foreach($listehotels as $row){
  if($row['categorie']=='3 etoiles')
  {
           $var='<ul class="list-star" ><li style="display: inline-block;"></li><li style="display: inline-block;"></li><li style="display:inline-block;"></li></ul>';
  }
  else if($row['categorie']=='2 etoiles')
  {
    $var='<ul class="list-star" ><li style="display: inline-block;"></li><li style="display: inline-block;"></li></ul>';
  }
   else if($row['categorie']=='4 etoiles')
  {
    $var='<ul class="list-star" ><li style="display: inline-block;"></li><li style="display: inline-block;"></li><li style="display: inline-block;"></li><li style="display: inline-block;"></li></ul>';
  }
   else if($row['categorie']=='5 etoiles')
  {
    $var='<ul class="list-star" ><li style="display: inline-block;"></li><li style="display: inline-block;"></li><li style="display: inline-block;"></li><li style="display: inline-block;"></li><li style="display: inline-block;"></li></ul>';
  }
  else
  {
    $var=$row['categorie'];
  }

  ?>
  
  <tr>
   <td><form method="POST" action="supprimerhotel.php">
  <input type="submit"  class="btn btn-success mr-2" name="supprimer" value="supprimer">
  <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
  </form>
  </td>
  <td><a href="modifierhotel.php?id=<?PHP echo $row['id']; ?>">
  Modifier</a></td>  
  <td><?PHP echo $row['id']; ?></td>
  <td><?PHP echo $row['nom']; ?></td>
  <td><?PHP echo $row['ville']; ?></td>
  <td><?PHP echo $var; ?></td>
  <td><?PHP echo $row['note']; ?></td>
  <td><?PHP echo $row['review']; ?></td>
  <td><?PHP echo $row['chambresdoubles']; ?></td>
  <td><?PHP echo $row['chambrestriples']; ?></td>
  <td><?PHP echo $row['totalchambres']; ?></td>
  <td><?PHP echo $row['prixdoubles']; ?></td>
  <td><?PHP echo $row['prixtriples']; ?></td>
  <td><?PHP echo $row['image']; ?></td>
  <td><?PHP echo $row['longitude']; ?></td>
  
 
  </tr>

  <?PHP
}
?>
</table><!-- content-wrapper ends -->
     </div>   



       





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
    </script>
</body>

</html>
	








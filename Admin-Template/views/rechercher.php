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
  <link rel="stylesheet" href="../vendors/iconfonts/font-awesome/css/font-awesome.css">
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
                  <h4 class="card-title">hotel</h4>
                  <form class="form-sample" method="post" name="f" id="f" onsubmit=" return ajour()" action="#">
                    <p class="card-description">
                      Ajouter un nouveau hotel
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Id hotel</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" name="idhotel" min="0"  >
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nom Hotel</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="nom" id="nom" >
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    
                    
                  
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Ville</label>
                          <div class="col-sm-9">
                             
                             <select name="ville" id="ville" class="form-control" required>
                              <option  value="all">All</option>
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
                          <label class="col-sm-3 col-form-label">Categorie</label>
                          <div class="col-sm-9">
                            
                            <select class="form-control" id="nbetoiles" name="nbetoiles">
                              <option>toutes categories</option>
                      <option>2 etoiles</option>
                      <option>3 etoiles</option>
                      <option>4 etoiles</option>
                      <option>5 etoiles</option>
                            </select>

                          
                          </div>
                        </div>
                      </div>
                     
                    </div>
					 <br>
					<center>
				  <button type="submit" class="btn btn-success mr-2" name="rechercher" value="rechercher" >rechercher</button>
          <button type="submit" class="btn btn-success mr-2" name="trier" value="trier" >trier</button>
                         </center>
                  </form>
                  
                </div>


              </div>



            </div>
	
		  
          </div>
        </div>






<div class="icons-list row">
                 <div class="col-sm-6 col-md-4 col-lg-3">
                      <i class="fa fa-search"></i><input type="text" id="myInput" onkeyup="myFunction(this,3,1)" placeholder="chercher nom.." class="form-control"> </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                      <i class="fa fa-search"></i><input type="text" id="myIn" onkeyup="myFunction(this,4,0)" placeholder="chercher pays.." class="form-control"> </div>
                    </div>

                    
                   



<div class="table-responsive">
<table id="myTable" class="table table-hover  table-bordered " >
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
<td style="color: #5983e8;font-weight:bold">latitude</td>
<td style="color: #5983e8;font-weight:bold">Image</td>
<td style="color: #5983e8;font-weight:bold">longitude</td>

</tr>
</thead>
<?PHP
$listehotel2=$hotel1C->afficherhotels();
if(isset($_POST['rechercher']))
{
  
if ( isset($_POST['ville']) and isset($_POST['nom']) and isset($_POST['nbetoiles']) and isset($_POST['idhotel'])   )
   {
    $vi=$_POST['ville'];
     $ho=$_POST['idhotel'];
     $no=$_POST['nom'];
      $nb=$_POST['nbetoiles'];
    

    if($ho !='')
    {
     $listehotel2=$hotel1C->recupererhotel($ho);
    }
    else{
           
      


        
        if(($vi!="all") and ($nb=='toutes categories') and ($no==''))

                        {$listehotel2=$hotel1C->rechercherListehotel($vi); }


          
          if(($vi!="all") and ($nb!='toutes categories') and ($no==''))

                        {$listehotel2=$hotel1C->rechercherselonvillecategorie($vi,$nb); } 


          
          if(($vi!="all") and ($nb=='toutes categories') and ($no!=''))

                        {$listehotel2=$hotel1C->rechercherselonvillenom($vi,$no); }                
                        


            
            if(($vi=="all") and ($nb=='toutes categories') and ($no!=''))

                        {$listehotel2=$hotel1C->rechercherselonnom($no); }   



            
             if(($vi=="all") and ($nb!='toutes categories') and ($no==''))

                        {$listehotel2=$hotel1C->rechercherseloncategorie($nb); } 

            

            if(($vi=="all") and ($nb!='toutes categories') and ($no!=''))

                        {$listehotel2=$hotel1C->rechercherseloncategorienom($nb,$no); }


             if(($vi=="all") and ($nb=='toutes categories') and ($no==''))

                        {$listehotel2=$hotel1C->afficherhotels(); }                                      
                        


              if(($vi!="all") and ($nb!='toutes categories') and ($no!=''))

                        {$listehotel2=$hotel1C->rechercherselontous($vi,$nb,$no); }          




        }       
}

}



if(isset($_POST['trier']))
{
  $listehotel2=$hotel1C->triernote();
}


foreach($listehotel2 as $row){
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
  <input type="submit" class="btn btn-danger btn-fw" name="supprimer" value="supprimer">
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
   
   
   <script >
     function myFunction(input,j,b) {
  var  filter, table, tr, td, i, txtValue;
  
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
if(b==0)
{
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[j];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
else
{





 for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[j];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) == 0) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }



}

}



   </script>
   
   


    
</body>

</html>
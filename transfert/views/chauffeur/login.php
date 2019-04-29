<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login Chauffeur</title>
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
    if (isset($_GET['log']))

    {
        include "../../dbConfig/config.php";
        include "../../entities/chauffeur.php";
        include "../../core/chauffeurCore.php";

        $mCore= new chauffeurCore();
        $result= $mCore->verifyLogin($_GET['login'],$_GET['mdp']) ;
       if($result!=false) {

           session_start();
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
           header('Location:profile.php');
       }
   else {
        header('Location:login.php?error="'.$_GET['login'].'"');
        }

    }

    ?>
</head>

<body>
  <div class="container-scroller">

      <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">


      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">

          <div class="row w-100">
              <div class="col-lg-4 mx-auto">

                  <center>  <img  src="../resources/images/icons/chauflog.png" </img> </center> <br>

                  <div class="auto-form-wrapper">
              <form action="#">

              <?PHP  if (isset($_GET["error"])){

               ?>
                <div class="form-group">
                  <label class="label" style="color : red;">Mot de passe ou login incorrect!</label>
                </div>
                    <?PHP  } ?>

                  <div class="form-group">
                  <label class="label">Login</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="login" placeholder="Login">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">Mot de passe</label>
                  <div class="input-group">
                    <input type="password" class="form-control" name="mdp" placeholder="*********">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button name="log" class="btn btn-primary submit-btn btn-block">Login</button>
                </div>
                 
                 
              
              </form>

            </div> <br> <br>
            <ul class="auth-footer">

             
            </ul>
            <p class="footer-text text-center">copyright © flySyphax</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../resources/vendors/js/vendor.bundle.base.js"></script>
  <script src="../resources/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../resources/js/off-canvas.js"></script>
  <script src="../resources/js/misc.js"></script>
  <!-- endinject -->
</body>

</html>
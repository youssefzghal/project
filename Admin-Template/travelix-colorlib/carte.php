<?PHP
include "../core/hotelc.php";
include "../entities/hotel.php";
$hotel1C=new hotelc();
$resrvation=new reservationc();
$date = new DateTime();
  $date1 = $date->format('Y-m-d');
  $demain=$date1.' +1'.' day';
  $verif=true;
  $date22=new DateTime($demain);
   $date2=$date22->format('Y-m-d');

if (isset($_GET['id'])){

	$id=$_GET['id'];
  $date1= $_GET['date1'];
  $date2=$_GET['date2'];
  $nbnuit=$_GET['nbnuit'];
    $result=$hotel1C->recupererhotel($_GET['id']);//recuperer l'hotel dans lequel on apuye sur book

//var_dump($result->fetchAll());

    foreach($result as $row){

                                 $longitude=$row['longitude'];
                                 $nomhotel=$row['nom'];
                                 $prixdoubles=$row['prixdoubles'];
                                 $latitude=$row['prixtriples'];
                                 $ville=$row['ville'];
                                 $categorie=$row['categorie'];


    }


    
}


?>


<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <!-- Nous chargeons les fichiers CDN de Leaflet. Le CSS AVANT le JS -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
            crossorigin="" />
        <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
            crossorigin=""></script>
		<script type="text/javascript">
			// On initialise la latitude et la longitude de Paris (centre de la carte)
			//var lat = 48.852969;
			//var lon = 2.349903;
			var lat = <?php echo $latitude?>;
			var lon =<?php echo $longitude?>;
			var macarte = null;
			// Fonction d'initialisation de la carte
			function initMap() {
				// Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
                macarte = L.map('map').setView([lat, lon], 11);
                // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
                L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
                    // Il est toujours bien de laisser le lien vers la source des données
                    //attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
                    minZoom: 1,
                    maxZoom: 20
                }).addTo(macarte);
				// Nous ajoutons un marqueur
				var marker = L.marker([lat, lon]).addTo(macarte);
            }
			window.onload = function(){
				// Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
				initMap(); 
			};
		</script>
		<style type="text/css">
			#map{ /* la carte DOIT avoir une hauteur sinon elle n'apparaît pas */
				height:400px;
			}
		</style>
		<title>Carte</title>
	</head>
	<body>
		<div id="map">
			<!-- Ici s'affichera la carte -->
		</div>
	</body>
</html>
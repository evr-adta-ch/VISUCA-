<!DOCTYPE html>
<html>
<head>
  <title>Map</title>
  <style>
    #map-container {
      width: 100%;
      height: 600px;
    }
  </style>
</head>
<body>
  <div id="map-container">
    <?php
      // Récupérer le paramètre d'URL "location"
      $hotelLocation = $_GET['localisation'];

      // Afficher l'iframe avec la localisation de l'hôtel
      echo "$hotelLocation";
    ?>
  </div>
</body>
</html>
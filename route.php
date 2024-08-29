
<!DOCTYPE html>
<html>
<head>
<title>VISUCA - Directory &amp; Location</title>

<!-- Favicon -->
<link rel="icon" href="img/core-img/favicon.ico">
  <style>
    #map {
      height: 100vh;
      width: 100%;
    }

    .search-bar-container {
      position: absolute;
      top: 20px;
      left: 20px;
      z-index: 1;
      width: 700px;
    }

    .search-bar {
      padding: 10px;
      border-radius: 20px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      cursor: pointer;
    }

    .search-bar input {
      width: 100%;
      padding: 8px 12px;
      border: 1px solid #ccc;
      border-radius: 20px;
      font-size: 14px;
      font-family: Arial, sans-serif;
    }

    .search-options {
      display: none;
      background-color: white;
      padding: 10px;
      border-radius: 0 0 20px 20px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .search-options.show {
      display: block;
    }

    .search-options-item {
      font-family: Arial, sans-serif;
      cursor: pointer;
      padding: 10px;
      border-bottom: 5px solid #f0f0f0;
    }

    .search-options-item:last-child {
      border-bottom: none;
    }

    .search-options-item:hover {
      background-color: #f5f5f5;
    }

    .search-options-item-dropdown {
      display: none;
      background-color: white;
      padding: 10px;
      border-radius: 0 0 5px 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      max-height: 200px;
      overflow-y: auto;
      border-bottom: 5px solid #f0f0f0;
    }

    .search-options-item-dropdown.show {
      display: block;
    }

    .search-options-item-dropdown div {
      padding: 5px 10px;
      cursor: pointer;
      border-bottom: 2px solid #f0f0f0;
    }

    .search-options-item-dropdown div:hover {
      background-color: #f5f5f5;
    }
  </style>
</head>
<body>
  <div id="map"></div>

  <div class="search-bar-container">
    <div class="search-bar">
      <input type="text" placeholder="Look for an address">
    </div>
    <div class="search-options">
    <div class="search-options-item">
        Hôtels
        <div class="search-options-item-dropdown">
          <?php
            include 'database.php';
            global $db;
            $hotels = $db->query("SELECT Nom, localisation FROM hotels");
            while ($hotel = $hotels->fetch()) {
              $hotelName = $hotel['Nom'];
              $hotelLocation = $hotel['localisation'];
              echo "<div><a href='hotelmap.php?localisation=$hotelLocation'>$hotelName</a></div>";
            }
          ?>
        </div>
      </div>
      <div class="search-options-item">
        Restaurants
        <div class="search-options-item-dropdown">
          <?php
            $hotels = $db->query("SELECT Nom, localisation FROM restaurants");
            while ($hotel = $hotels->fetch()) {
              $hotelName = $hotel['Nom'];
              $hotelLocation = $hotel['localisation'];
              echo "<div><a href='hotelmap.php?localisation=$hotelLocation'>$hotelName</a></div>";
            }
          ?>
        </div>
      </div>
      <div class="search-options-item">
        Cinéma
        <div class="search-options-item-dropdown">
          <?php
            $hotels = $db->query("SELECT Nom, localisation FROM cinema");
            while ($hotel = $hotels->fetch()) {
              $hotelName = $hotel['Nom'];
              $hotelLocation = $hotel['localisation'];
              echo "<div><a href='hotelmap.php?localisation=$hotelLocation'>$hotelName</a></div>";
            }
          ?>
        </div>
      </div>
      <div class="search-options-item">
        Beauty Centers
        <div class="search-options-item-dropdown">
          <?php
            $hotels = $db->query("SELECT Nom, localisation FROM beauty_center");
            while ($hotel = $hotels->fetch()) {
              $hotelName = $hotel['Nom'];
              $hotelLocation = $hotel['localisation'];
              echo "<div><a href='hotelmap.php?localisation=$hotelLocation'>$hotelName</a></div>";
            }
          ?>
        </div>
      </div>
      <div class="search-options-item">
        Shop Centers
        <div class="search-options-item-dropdown">
          <?php
            $hotels = $db->query("SELECT Nom, localisation FROM shop");
            while ($hotel = $hotels->fetch()) {
              $hotelName = $hotel['Nom'];
              $hotelLocation = $hotel['localisation'];
              echo "<div><a href='hotelmap.php?localisation=$hotelLocation'>$hotelName</a></div>";
            }
          ?>
        </div>
      </div>
      <div class="search-options-item">
        Monuments
        <div class="search-options-item-dropdown">
          <?php
            $hotels = $db->query("SELECT Nom, localisation FROM monuments");
            while ($hotel = $hotels->fetch()) {
              $hotelName = $hotel['Nom'];
              $hotelLocation = $hotel['localisation'];
              echo "<div><a href='hotelmap.php?localisation=$hotelLocation'>$hotelName</a></div>";
            }
          ?>
        </div>
      </div>
      <div class="search-options-item">
        Museums
        <div class="search-options-item-dropdown">
          <?php
            $hotels = $db->query("SELECT Nom, localisation FROM museums");
            while ($hotel = $hotels->fetch()) {
              $hotelName = $hotel['Nom'];
              $hotelLocation = $hotel['localisation'];
              echo "<div><a href='hotelmap.php?localisation=$hotelLocation'>$hotelName</a></div>";
            }
          ?>
        </div>
      </div>
      <div class="search-options-item">
        Natiobal Parcks
        <div class="search-options-item-dropdown">
          <?php
            $hotels = $db->query("SELECT Nom, localisation FROM parc");
            while ($hotel = $hotels->fetch()) {
              $hotelName = $hotel['Nom'];
              $hotelLocation = $hotel['localisation'];
              echo "<div><a href='hotelmap.php?localisation=$hotelLocation'>$hotelName</a></div>";
            }
          ?>
        </div>
      </div>
      <div class="search-options-item">
        Stadiums
        <div class="search-options-item-dropdown">
          <?php
            $hotels = $db->query("SELECT Nom, localisation FROM stadium");
            while ($hotel = $hotels->fetch()) {
              $hotelName = $hotel['Nom'];
              $hotelLocation = $hotel['localisation'];
              echo "<div><a href='hotelmap.php?localisation=$hotelLocation'>$hotelName</a></div>";
            }
          ?>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Initialisation de la carte Google Maps
    let map;
    function initMap() {
      map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: 0, lng: 0 },
        zoom: 8
      });

      // Récupération de la position de l'utilisateur
      if (navigator.geolocation) {
        navigator.geolocation.watchPosition(function(position) {
          const pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude
          };

          // Mise à jour de la position sur la carte
          map.setCenter(pos);
          new google.maps.Marker({
            position: pos,
            map: map,
            title: 'Votre position'
          });
        }, function() {
          handleLocationError(true, map.getCenter());
        });
      } else {
        // Le navigateur ne prend pas en charge la géolocalisation
        handleLocationError(false, map.getCenter());
      }
    }

    function handleLocationError(browserHasGeolocation, pos) {
      alert('Erreur de géolocalisation : ' + (browserHasGeolocation ?
                                            'L\'accès à la géolocalisation a été refusé.' :
                                            'Votre navigateur ne prend pas en charge la géolocalisation.'));
    }

    // Fonction pour afficher/masquer les options de recherche
    document.querySelector('.search-bar').addEventListener('click', function() {
      document.querySelector('.search-options').classList.toggle('show');
    });

    // Fonction pour afficher/masquer les sous-options de recherche
    document.querySelectorAll('.search-options-item').forEach(function(items) {
      items.addEventListener('click', function() {
        this.querySelector('.search-options-item-dropdown').classList.toggle('show');
          document.querySelectorAll('.search-options-item-dropdown div').forEach(function(item) {
          item.addEventListener('click', function() {
            const iframeUrl = this.getAttribute('data-iframe');
            const marker = new google.maps.Marker({
              position: new google.maps.LatLng(0, 0), // Position initiale
              map: map,
              title: this.textContent
              });

              // Calculer l'itinéraire et le temps de trajet
              calculateRoute(userPosition, iframeUrl, marker);
            });
          });
      });
    });
    function calculateRoute(userPosition, iframeUrl, marker) {
      // Utiliser l'API Google Maps Directions pour calculer l'itinéraire
      const directionsService = new google.maps.DirectionsService();
      const directionsRenderer = new google.maps.DirectionsRenderer();
      directionsRenderer.setMap(map);

      const request = {
        origin: userPosition,
        destination: iframeUrl, // Utiliser l'URL de l'iframe
        travelMode: google.maps.TravelMode.DRIVING // Peut être modifié pour d'autres modes de transport
      };

      directionsService.route(request, function(response, status) {
        if (status === google.maps.DirectionsStatus.OK) {
          directionsRenderer.setDirections(response);
          const distance = response.routes[0].legs[0].distance.text;
          const duration = response.routes[0].legs[0].duration.text;
          alert(`Distance: ${distance}, Durée: ${duration}`);

          // Mettre à jour la position du marqueur
          marker.setPosition(new google.maps.LatLng(iframeUrl.lat, iframeUrl.lng));
        } else {
          alert('Impossible de calculer l\'itinéraire.');
        }
      });
    }
  </script>

  <!-- Chargement de l'API Google Maps -->
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2y6ggRvb3F3sFUV3wnPHjejOFTnliZ34&callback=initMap">
  </script>
</body>
</html>

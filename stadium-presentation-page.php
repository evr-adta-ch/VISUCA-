<?php
$nomRestaurant = $_GET['nom'];
include 'database.php';
global $db;

// Récupérer les informations du restaurant depuis la base de données
$query = "SELECT * FROM stadium WHERE nom = :nom";
$stmt = $db->prepare($query);
$stmt->bindParam(':nom', $nomRestaurant);
$stmt->execute();
$restaurant = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Présentation du restaurant <?php echo $nomRestaurant; ?></title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #7643ea;
        }

        .container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: auto auto auto auto;
            grid-gap: 40px;
            width: 90%;
            height: 90%;
        }

        .left-div {
            justify-content: center;
            grid-column: 1 / 2;
            grid-row: 1 / 3;
            height: auto;
            background-color: #fff;
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            text-align: center;
            animation: slide-in-left 0.5s ease-out;
        }
        .left-div h2 {
        font-size: 2.1rem;
        margin-bottom: 20px;
        }

        .left-div p {
        font-size: 1.6rem;
        color: #666;
        margin-bottom: 20px;
        }

        .intent {
            justify-content: center;
            background-color: #fff;
            border: none;
            text-align: center;
        }

        .bottom-right-div {
            grid-column: 2 / 3;
            grid-row: 2 / 3;
            background-color: #fff;
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            animation: slide-in-bottom 0.5s ease-out;
            padding: 20px;
        }

        .bottom-right-div h2 {
        font-size: 2.1rem;
        margin-bottom: 20px;
        }

        .bottom-right-div p {
        font-size: 1.6rem;
        color: #666;
        margin-bottom: 20px;
        }
        .right-intent {
            background-color: #fff;
            border: none;
            justify-content: center;
            text-align: center;
        }

        .right-div {
            grid-column: 2 / 3;
            grid-row: 1 / 2;
            height: 500px;
            background-color: #fff;
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            animation: slide-in-right 0.5s ease-out;
            padding: 20px;
        }

        .right-div img {
        max-width: 100%;
        height: 40px;
        border-radius: 20px;
        }

        .right-div h2 {
        text-align: center;
        font-size: 2.1rem;
        margin-bottom: 20px;
        }

        .carousel {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .carousel img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        .carousel img.active {
            opacity: 1;
        }
        .hours-of-operations {
            grid-column: 1 / 3;
            background-color: #fff;
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            text-align: center;
            padding: 20px;
            animation: slide-in-left 0.5s ease-out;
        }

        .hours-of-operations h2 {
            font-size: 2.1rem;
            margin-bottom: 20px;
        }

        .hours-of-operations p {
            font-size: 1.6rem;
            color: #666;
            margin-bottom: 20px;
        }

        @keyframes slide-in-left {
            from {
                transform: translateX(-100%);
            }
            to {
                transform: translateX(0);
            }
        }

        @keyframes slide-in-left {
            from {
                transform: translateX(-100%);
            }
            to {
                transform: translateX(0);
            }
        }

        @keyframes slide-in-bottom {
            from {
                transform: translateY(100%);
            }
            to {
                transform: translateY(0);
            }
        }

        @keyframes slide-in-right {
            from {
                transform: translateX(100%);
            }
            to {
                transform: translateX(0);
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body style="background-image: url(<?php echo $restaurant['image4']; ?>);">
    <div class="container" >
        <div class="hours-of-operations">
            <h2>Hours of operations</h2>
            <p>Monday - Friday : 8am - 8pm</p>
            <p>Saturday - Sunday : 9am -7pm</p>
        </div>
        <div class="left-div">
            <h2>General informations</h2>
            <h2><?php echo $nomRestaurant; ?></h2>
            <p><?php echo $restaurant['description']; ?></p>
        </div>
        <div class="right-div">
            <h2>Discover them</h2>
            <div class="carousel">
                <?php echo('<img style="height: 400px;" src="' . $restaurant['image1'] . '"alt="Image du supermarché" class="active">')?>
                <?php echo('<img style="height: 400px;" src="' . $restaurant['image2'] . '"alt="Image du supermarché">')?>
                <?php echo('<img style="height: 400px;" src="' . $restaurant['image3'] . '"alt="Image du supermarché">')?>
                <?php echo('<img style="height: 400px;" src="' . $restaurant['image5'] . '"alt="Image du supermarché">')?>
                <?php echo('<img style="height: 400px;" src="' . $restaurant['image6'] . '"alt="Image du supermarché">')?>
                <script>
                    window.onload = function() {
                        var carousel = document.querySelector('.carousel');
                        var images = carousel.getElementsByTagName('img');
                        var currentIndex = 0;

                        function showNextImage() {
                            images[currentIndex].classList.remove('active');
                            currentIndex = (currentIndex + 1) % images.length;
                            images[currentIndex].classList.add('active');
                        }

                        setInterval(showNextImage, 10000); // Changement d'image toutes les 15 secondes
                    };
                </script>
            </div>
        </div>
        <div class="bottom-right-div">
            <div class="right-intent">
                <h2>Location</h2>
                <p>Adress : <?php echo $restaurant['Address']; ?></p>
                <div style="display: flex; justify-content: center;">
                <?php echo $restaurant['localisation']; ?>
                </div>
            </div>
        </div>
    </div> 

    
  </div>
</body>
</html>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>VISUCA - Directory &amp; Monuments</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="dorne-load"></div>
    </div>

    <!-- ***** Search Form Area ***** -->
    <div class="dorne-search-form d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>
                    <form action="#" method="get">
                        <input type="search" name="caviarSearch" id="search" placeholder="Search Your Desire Destinations or Events">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <!-- Nav -->
                        <div class="collapse navbar-collapse" id="dorneNav">
                            <!-- Search btn -->
                            <div class="dorne-search-btn">
                                <div class="dropdown">
                                  <button class="btn dropdown-toggle" type="button" id="searchDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-search" aria-hidden="true"></i> Search for a new destination
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="searchDropdown">
                                    <!-- Ajoutez ici les éléments du dropdown menu -->
                                    <a class="dropdown-item" href="yaounde-hotels.php">Hotels</a>
                                    <a class="dropdown-item" href="yaounde-restaurants.php">Restaurants</a>
                                    <a class="dropdown-item" href="yaounde-shop-center.php">Shop-center</a>
                                    <a class="dropdown-item" href="yaounde-beauty-center.php">Beauty-center</a>
                                    <a class="dropdown-item" href="yaounde-cinema.php">Movie teather</a>
                                    <a class="dropdown-item" href="Stadium.php">Stadiums</a>
                                    <a class="dropdown-item" href="museum.php">Museums</a>
                                    <a class="dropdown-item" href="green-spaces.html">Green-spaces</a>
                                    <a class="dropdown-item" href="monuments.php">Monuments</a>
                                    <a class="dropdown-item" href="National_Parcs.php">National Parcs</a>
                                    </div>
                                </div>
                              </div>
                            </div>
                            <!-- Signin btn -->
                            <div class="dorne-search-btn">
                                <a id="location-btn" href="localisation.php"><i class="fa fa-search" aria-hidden="true"></i>where am I now </a>
                            </div>
                            <!-- Add listings btn -->
                            <div class="dorne-search-btn">
                                <a id="weather-btn" href="weather.html"><i class="fa fa-search" aria-hidden="true"></i> let's see the weather </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(img/bg-img/monuments.jpg); height: 1050px;">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="hero-content" style="margin-top: 150px;">
                        <h2>Discover Monuments near you</h2>
                        <h4>This is the best guide of yaounde</h4>
                    </div>
                    <!-- Hero Search Form -->
                    <div class="hero-search-form">
                        <div class="tab-content" id="nav-tabContent" style="overflow-y: auto; scrollbar-width: none;" style="height: 200px;">
                            <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab" >
                                <h6>Which monuments are you looking for?</h6>
                                <div class="restaurant-grid-container">
                                    <div class="restaurant-grid">
                                        <?php
                                        include 'database.php';
                                        global $db;

                                        $query = $db->query("SELECT Nom, title, 'monuments-presentation.php?nom=' as PageLink FROM monuments");
                                        while ($restau = $query->fetch()) {
                                        echo '<div class="restaurant-card slide-in" onclick="redirectToPage(\'' . $restau['Nom'] . '\', \'' . $restau['PageLink'] . '\')">
                                                <div class="restaurant-info">
                                                    <h2>' . $restau['Nom'] . '</h2>
                                                    <p>' . $restau['title'] . '</p>
                                                </div>
                                                </div>';
                                        }
                                        ?>
                                    </div>
                                </div>
    
                                <script>
                                    function redirectToPage(nomRestaurant, pageLink) {
                                        if (pageLink) {
                                            window.location.href = pageLink + nomRestaurant;
                                        }
                                    }
                                </script>
                                <style>
                                    /* Grille de restaurants */
                                    .restaurant-grid {
                                        display: grid;
                                        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                                        grid-gap: 20px;
                                        padding: 20px;
                                    }

                                    .restaurant-grid-container {
                                        height: 400px; /* Ajustez cette valeur pour contrôler la hauteur de la zone de défilement */
                                        overflow-y: auto;
                                    }

                                
                                    .restaurant-card {
                                        background-color: #f1f1f1;
                                        transition: 0.3s;
                                        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
                                        border-radius: 10px;
                                        transform: translateY(-10px);
                                        overflow: hidden;
                                        transition: transform 0.3s ease-in-out
                                    }
                                
                                    .restaurant-card:hover {
                                        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
                                    }
                                
                                    .restaurant-info {
                                        padding: 20px;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>   
        <!-- Hero Social Btn -->
        <div class="hero-social-btn">
            <div class="social-title d-flex align-items-center">
                <h6>Follow us on Social Media</h6>
                <span></span>
            </div>
            <div class="social-btns">
                <a href="#"><i class="fa fa-linkedin" aria-haspopup="true"></i></a>
                <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-haspopup="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-haspopup="true"></i></a>
            </div>
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->
    <!-- ****** Footer Area Start ****** -->
    <footer class="dorne-footer-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-md-flex align-items-center justify-content-between">
                    <div class="footer-text">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> &amp; distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                    <div class="footer-social-btns">
                        <a href="#"><i class="fa fa-linkedin" aria-haspopup="true"></i></a>
                        <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-haspopup="true"></i></a>
                        <a href="#"><i class="fa fa-facebook" aria-haspopup="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ****** Footer Area End ****** -->

    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
</body>

</html>
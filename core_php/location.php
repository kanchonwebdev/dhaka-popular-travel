<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Service page - Car rental homepage</title>
    <meta name="description" content="" />
    <link rel="alternate" href="" hreflang="en" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <!-- ./Open Graph / Facebook -->

    <!-- CSS Files Section -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.3.0/animate.css">
</head>

<body>
    <!-- Navbar Section -->
    <?php include_once 'inc/nav.php' ?>
    <!-- Navbar Section END -->

    <!-- Header Section -->
    <div class="header-section">
        <div class="header-block">
            <div class="left-col">
                <h1 class="title">Welcome to our website</h1>

                <div class="text-block">
                    <p class="text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi temporibus quo explicabo, eum rerum error excepturi nihil architecto enim facere adipisci ad nam maxime, autem, inventore amet optio! Voluptatum, inventore.
                    </p>
                </div>
                <div class="btn-block">
                    <a href="#" class="btn">Contact us</a>
                </div>
            </div>
            <div class="header-bg">
                <img src="assets/images/hero_01.jpg" alt="hero_bg">
            </div>
        </div>
    </div>
    <!-- Header Section END -->

    <!-- Title Block -->
    <div class="custom-title-block">
        <h2 class="title">Popular location</h2>
    </div>
    <!-- Title Block -->

    <!-- Banner Section -->
    <div class="banner-section grid-3">
        <div class="text-block">
            <div class="icon">
                01
            </div>

            <div class="location-text">
                <p class="text bold">San francisco govt College</p>
                <p class="text bold">
                    <i class="fa-solid fa-location-dot"></i>
                    18 km
                </p>
            </div>

            <div class="location-bg">
                <img src="assets/images/02.jpg" alt="">
            </div>
        </div>
        <div class="text-block">
            <div class="icon">
                02
            </div>

            <div class="location-text">
                <p class="text bold">San francisco govt College</p>
                <p class="text bold">
                    <i class="fa-solid fa-location-dot"></i>
                    18 km
                </p>
            </div>

            <div class="location-bg">
                <img src="assets/images/02.jpg" alt="">
            </div>
        </div>
        <div class="text-block">
            <div class="icon">
                03
            </div>

            <div class="location-text">
                <p class="text bold">San francisco govt College</p>
                <p class="text bold">
                    <i class="fa-solid fa-location-dot"></i>
                    18 km
                </p>
            </div>

            <div class="location-bg">
                <img src="assets/images/02.jpg" alt="">
            </div>
        </div>
        <div class="text-block">
            <div class="icon">
                01
            </div>

            <div class="location-text">
                <p class="text bold">San francisco govt College</p>
                <p class="text bold">
                    <i class="fa-solid fa-location-dot"></i>
                    18 km
                </p>
            </div>

            <div class="location-bg">
                <img src="assets/images/02.jpg" alt="">
            </div>
        </div>
        <div class="text-block">
            <div class="icon">
                02
            </div>

            <div class="location-text">
                <p class="text bold">San francisco govt College</p>
                <p class="text bold">
                    <i class="fa-solid fa-location-dot"></i>
                    18 km
                </p>
            </div>

            <div class="location-bg">
                <img src="assets/images/02.jpg" alt="">
            </div>
        </div>
        <div class="text-block">
            <div class="icon">
                03
            </div>

            <div class="location-text">
                <p class="text bold">San francisco govt College</p>
                <p class="text bold">
                    <i class="fa-solid fa-location-dot"></i>
                    18 km
                </p>
            </div>

            <div class="location-bg">
                <img src="assets/images/02.jpg" alt="">
            </div>
        </div>
    </div>
    <!-- Banner Section END -->

    <!-- Custom Button Block -->
    <div class="custom-btn-block mt-80">
        <a href="flight.php" class="btn">Book Flight</a>
    </div>
    <!-- Custom BUtton Block END -->

    <!-- Footer Section -->
    <?php include_once 'inc/footer.php'; ?>
    <!-- Footer Section END -->

    <!-- Back to TOP -->
    <div id="progress">
        <span id="progress-value">&#x1F815;</span>
    </div>
    <!-- Back to TOP END -->

    <!-- LOADER -->
    <div class="loader">
        <div></div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
    <script src="https://kit.fontawesome.com/5356aed19a.js" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>

    <!-----------
    LOADER SCRIPT
    ------------>
    <script>
        $(window).on('load', function() {
            $(".loader").fadeOut(1000);
        });
    </script>

    <script>
        $(document).ready(function() {
            //wow js init
            new WOW().init();
        });
    </script>
</body>

</html>
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

    <!-- Banner Section -->
    <div class="banner-section">
        <div class="title-block">
            <h2 class="title">Our Services & Why choose us?</h2>
            <div class="subtitle">We provide these services upon request offer</div>
        </div>

        <div class="text-block grid-center">
            <ul class="list-text list-4">
                <li>Cultural excursion</li>
                <li>Cultural excursion</li>
                <li>University trip</li>
                <li>Wedding trip</li>
                <li>University trip</li>
                <li>Tourist spot trip</li>
                <li>Tourist spot trip</li>
                <li>Wedding trip</li>
            </ul>
        </div>
    </div>
    <!-- Banner Section END -->

    <!-- Banner Section -->
    <div class="banner-section pt-0 grid-4">
        <div class="text-block">
            <div class="icon">
                <i class="fa-sharp fa-solid fa-tags"></i>
            </div>
            <p class="text big-text">Low cost</p>
            <p class="text">We charge only fair and best possible guaranteed price</p>
        </div>
        <div class="text-block">
            <div class="icon">
                <i class="fa-sharp fa-solid fa-tags"></i>
            </div>
            <p class="text big-text">Experience</p>
            <p class="text">Since 15+ years we have operate our business sucessfully</p>
        </div>
        <div class="text-block">
            <div class="icon">
                <i class="fa-sharp fa-solid fa-tags"></i>
            </div>
            <p class="text big-text">Extra charge free</p>
            <p class="text">We always care our customer. As per their short need we added few futures.</p>
        </div>
        <div class="text-block">
            <div class="icon">
                <i class="fa-sharp fa-solid fa-tags"></i>
            </div>
            <p class="text big-text">Prayer time</p>
            <p class="text">We added prayer time break while we're traving customer destination.</p>
        </div>
        <div class="btn-block grid-1">
            <a href="#" class="btn">book now</a>
        </div>
    </div>
    <!-- Banner Section END -->


    <!-- Custom Button Block -->
    <div class="custom-btn-block">
        <a href="location.php" class="btn">Destination</a>
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
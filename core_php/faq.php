<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FAQ page - Car rental homepage</title>
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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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

    <!-- FAQ Section -->
    <div class="faq-section">
        <div class="title-block">
            <div class="title">FAQS</div>
        </div>
        <div id="accordion">
            <h3>How long it will take to qualify as a eyes and lip permanent makeup artists?</h3>
            <div>
                <p>
                    It takes around 3-6 month to become qualified and confident in delivering permanent eyes and lips tattoo treatments, however this depend on each student.
                </p>
            </div>
            <h3>Where is the course?</h3>
            <div>
                <p>
                    You can start your eyes and lip permanent makeup journey from home with at-home blended learning. Our academy days are available in <a href="">South Elmsall</a> in West Yorkshire, <a href="">Milton Keynes</a> in Buckinghamshire and Purley in London.
                </p>
            </div>
            <h3>What package courses are available?</h3>
            <div>
                <p>
                    K.B Pro offer several permanent makeup package courses, you can train in <a href="">Permanent Full Face Makeup</a> giving to skills to create permanent brows, eyes and lips.
                </p>
            </div>
        </div>
    </div>
    <!-- FAQ Section END -->

    <br><br><br>
    
    <!-- Custom Button Block -->
    <div class="custom-btn-block">
        <a href="contact.php" class="btn">Contact us</a>
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
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
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

        $(function() {
            $("#accordion").accordion();
        });
    </script>
</body>

</html>
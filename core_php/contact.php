<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact page - Car rental homepage</title>
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

    <!-- Register Section -->
    <div class="register-section">
        <div class="title-block">
            <h2 class="title wow slideInUp">Contact us</h2>
        </div>
        <div id="msg"></div>
        <form method="post" action="" id="mail" class="register-form">
            <div class="field-block wow slideInUp">
                <div class="text-block">
                    <p class="text">
                        First Name
                    </p>
                </div>

                <div class="input-block">
                    <input type="text" name="name" id="name" class="input">
                </div>
            </div>
            <div class="field-block wow slideInUp">
                <div class="text-block">
                    <p class="text">
                        Last Name
                    </p>
                </div>

                <div class="input-block">
                    <input type="text" name="l_name" id="l_name" class="input">
                </div>
            </div>
            <div class="field-block wow slideInUp">
                <div class="text-block">
                    <p class="text">
                        Email
                    </p>
                </div>

                <div class="input-block">
                    <input type="text" name="email" id="email" class="input">
                </div>
            </div>
            <div class="field-block wow slideInUp">
                <div class="text-block">
                    <p class="text">
                        WhatsApp Number
                    </p>
                </div>

                <div class="input-block">
                    <input type="number" name="whatsapp" id="whatsapp" class="input">
                </div>
            </div>
            <div class="field-block grid-1 wow slideInUp">
                <div class="text-block">
                    <p class="text">
                        Message
                    </p>
                </div>

                <div class="input-block">
                    <textarea name="des" id="des" class="input" cols="10" rows="5"></textarea>
                </div>
            </div>
            <div class="field-block grid-1 wow slideInUp">
                <div class="g-recaptcha" data-sitekey="43gfdg"></div>
            </div>
            <div class="field-block grid-1 wow slideInUp">
                <input type="submit" class="btn" value="Send Message" name="" id="">
            </div>
        </form>
    </div>
    <!-- Register Section END -->

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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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

            var nameErr = true;
            var whatsappErr = true;
            var emailErr = true;
            var desErr = true;
            var name, whatsapp, email, des;

            //FORM VALIDATION
            $("#name").on("keyup", function() {
                name = $(this).val();

                if (name.length > 35 || name.length < 5) {
                    $('#msg').html("minimum 5 & maximum 35 character require").fadeIn();
                    nameErr = true;
                } else {
                    $('#msg').text("");
                    nameErr = false;
                }
            });

            $("#whatsapp").on("keyup", function() {
                whatsapp = $(this).val();

                if (whatsapp.length > 14 || whatsapp.length < 5) {
                    $('#msg').html("minimum 5 & maximum 14 number require").fadeIn();
                    whatsappErr = true;
                } else {
                    $('#msg').text("");
                    whatsappErr = false;
                }
            });

            $("#email").on("keyup", function() {
                email = $(this).val();
                var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                if (regex.test(email)) {
                    $('#msg').text("");
                    emailErr = false;

                } else {
                    $('#msg').text("email must be valid");
                    emailErr = true;
                }
            });

            $("#des").on("keyup", function() {
                des = $(this).val();

                if (des.length > 20 || des.length < 2) {
                    $('#msg').html("minimum 2 & maximum 20 number require").fadeIn();
                    desErr = true;
                } else {
                    $('#msg').text("");
                    desErr = false;
                }
            });

            $("#mail").on("submit", function() {
                event.preventDefault();

                if (nameErr == false && whatsappErr == false && emailErr == false && desErr == false) {
                    var response = grecaptcha.getResponse();

                    if (response.length == 0) {
                        $("#msg").text("Please verify you are not robot");
                    } else {
                        $.ajax({
                            url: "mail.php",
                            method: "POST",
                            data: $("#mail").serialize(),
                            success: function(result) {
                                $("#email_form").html(result);
                            }
                        });

                        $("#msg").text();
                    }
                } else {
                    alert("Please fill up all field correctly");
                }
            });
        });
    </script>
</body>

</html>
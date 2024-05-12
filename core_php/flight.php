<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Homepage - Car rental homepage</title>
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

    <!-- Booking Section -->
    <div class="booking-section" style="padding-bottom: calc(30px + 50*(100vw - 320px)/1600);">
        <form method="post" class="booking-form">
            <div class="input-block">
                <label for="from">From</label>
                <input type="text" name="from" id="from" placeholder="Destination start" class="input">
            </div>
            <div class="input-block">
                <label for="from">To</label>
                <input type="text" name="from" id="to" placeholder="Destination end" class="input">
            </div>
            <div class="input-block">
                <label for="passenger">Passengers</label>
                <input type="text" name="from" id="passenger" placeholder="Number of passengers" class="input">
            </div>
            <div class="btn-block">
                <div class="btn" id="flight_booking" style="cursor: pointer;">Search Now</div>
            </div>
        </form>
    </div>
    <!-- Booking Section END -->

    <div id="flight_data">
    </div>

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
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

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

        //datepicker
        $(function() {
            $("#date").datepicker();
        });
        $(function() {
            $("#date-2").datepicker();
        });
        $(document).ready(function() {
            $('.select').select2();
        });
    </script>


    <!-----------
    AJAX CALLING
    ------------>
    <script>
        $(document).ready(function() {
            $('#flight_booking').click(function(e) {
                e.preventDefault();
                var formData = $('.booking-form').serialize();

                $.ajax({
                    type: 'POST',
                    url: 'load_data.php',
                    data: formData,
                    success: function(response) {
                        var flight_info = JSON.parse(response, true);
                        var flight_info = flight_info['flightOffer'];
                        var counter = 1;

                        var headerContent = `
                            <div class="custom-title-block" style="padding-bottom: 0px;padding-top: 0px;">
                                <h2 class="title">Available flight list.</h2>
                            </div>
                        `;

                        $('#flight_data').append(headerContent);

                        for (let i = 0; i < flight_info.length; i++) {
                            var flight_duration = flight_info[i]['itineraries'][0]['duration'];
                            var flight_type = flight_info[i]['class'][0][0];
                            var deprature = flight_info[i]['itineraries'][0]['segments'][0]['departure']['iataCode'];
                            var flight_price = flight_info[i]['price'];
                            var flight_number = flight_info[i]['itineraries'][0]['segments'][1]['flightNumber'];

                            if ((counter % 2) === 0) {
                                var newContent = `
                                <div class="course-section reverse">
                                    <div class="course-wrap">
                                        <div class="left-col">
                                            <div class="course-photo wow fadeInup">
                                                <img src="assets/images/01.jpg" alt="course-photo">
                                            </div>
                                        </div>
                                        <div class="right-col">
                                            <div class="course-title">
                                                <h2 class="title wow fadeInLeft">
                                                    <span style="font-size: 25px">${flight_number}</span>
                                                    <span class="space"></span>
                                                    <span>F</span>
                                                    <span>l</span>
                                                    <span>i</span>
                                                    <span>g</span>
                                                    <span>h</span>
                                                    <span>t</span>
                                                    <span class="space"></span>
                                                    <span>N</span>
                                                    <span>o</span>
                                                </h2>
                                            </div>
                                            <div class="course-facilities">
                                                <div class="facilities wow fadeInUp">
                                                    <i class="fa-sharp fa-regular fa-calendar-days"></i>
                                                    <p><b>Flight type:</b> ${flight_type}</p>
                                                </div>
                                                <div class="facilities wow fadeInUp">
                                                    <i class="fa-regular fa-clock"></i>
                                                    <p><b>Flight duration:</b> ${flight_duration}</p>
                                                </div>
                                                <div class="facilities wow fadeInUp">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                    <p><b>Deprature at:</b> ${deprature}</p>
                                                </div>
                                                <div class="facilities wow fadeInUp">
                                                    <i class="fa-sharp fa-regular fa-user"></i>
                                                    <p><b>Flight price:</b> ${flight_price}</p>
                                                </div>
                                            </div>
                                            <div class="btn-block">
                                                <a href="#" target="_blank" class="btn wow fadeInUp">book now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>`;
                            } else {
                                var newContent = `
                                <div class="course-section">
                                    <div class="course-wrap">
                                        <div class="left-col">
                                            <div class="course-photo wow fadeInup">
                                                <img src="assets/images/01.jpg" alt="course-photo">
                                            </div>
                                        </div>
                                        <div class="right-col">
                                            <div class="course-title">
                                                <h2 class="title wow fadeInLeft">
                                                    <span style="font-size: 25px">${flight_number}</span>
                                                    <span class="space"></span>
                                                    <span>F</span>
                                                    <span>l</span>
                                                    <span>i</span>
                                                    <span>g</span>
                                                    <span>h</span>
                                                    <span>t</span>
                                                    <span class="space"></span>
                                                    <span>N</span>
                                                    <span>o</span>
                                                </h2>
                                            </div>
                                            <div class="course-facilities">
                                                <div class="facilities wow fadeInUp">
                                                    <i class="fa-sharp fa-regular fa-calendar-days"></i>
                                                    <p><b>Flight type:</b> ${flight_type}</p>
                                                </div>
                                                <div class="facilities wow fadeInUp">
                                                    <i class="fa-regular fa-clock"></i>
                                                    <p><b>Flight duration:</b> ${flight_duration}</p>
                                                </div>
                                                <div class="facilities wow fadeInUp">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                    <p><b>Deprature at:</b> ${deprature}</p>
                                                </div>
                                                <div class="facilities wow fadeInUp">
                                                    <i class="fa-sharp fa-regular fa-user"></i>
                                                    <p><b>Flight price:</b> ${flight_price}</p>
                                                </div>
                                            </div>
                                            <div class="btn-block">
                                                <a href="#" target="_blank" class="btn wow fadeInUp">book now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>`;
                            }

                            $('#flight_data').append(newContent);
                            counter++;
                        }

                        var buttonContent = `
                            <div class="custom-btn-block">
                                <a href="cobtact.php" class="btn">Contact us</a>
                            </div>
                        `;

                        $('#flight_data').append(buttonContent);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>
</body>

</html>
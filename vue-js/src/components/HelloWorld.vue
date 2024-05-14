<template>
    <!-- Navbar Section -->
    <HeaderComponent />
    <!-- Navbar Section END -->

    <!-- Header Section -->
    <div class="header-section">
        <div class="header-block">
            <div class="left-col">
                <h1 class="title">Welcome to our website</h1>

                <div class="text-block">
                    <p class="text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi temporibus quo explicabo, eum
                        rerum error excepturi nihil architecto enim facere adipisci ad nam maxime, autem, inventore amet
                        optio! Voluptatum, inventore.
                    </p>
                </div>
                <div class="btn-block">
                    <a href="contact.php" class="btn">Contact us</a>
                </div>
            </div>
            <div class="header-bg">
                <img src="../assets/images/hero_01.jpg" alt="hero_bg">
            </div>
        </div>
    </div>
    <!-- Header Section END -->

    <!-- Services Section -->
    <div class="service-section-2">
        <div class="service-grid">
            <div class="left-col">
                <div class="service-photo">
                    <img src="../assets/images/01.jpg" alt="service-bg">
                </div>
            </div>

            <div class="right-col">
                <div class="service-desc">
                    <div class="title-block">
                        <h2 class="title">Who your compnay name?</h2>
                    </div>
                    <div class="text-block grid-2">
                        <div class="text">
                            <i class="fa-solid fa-phone-volume"></i> <a href="tel:00000000000">00000000000000</a>
                        </div>
                        <div class="text">
                            <i class="fa-solid fa-phone-volume"></i> <a href="tel:00000000000">00000000000000</a>
                        </div>
                    </div>
                    <div class="text-block">
                        <p class="text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio veniam eveniet facilis
                            impedit assumenda unde culpa excepturi vero dolores aperiam blanditiis corporis error atque,
                            odit commodi. Id obcaecati optio molestias! Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Amet rem quidem voluptatibus, cupiditate nihil quos porro laudantium iure
                            commodi. Qui doloribus adipisci nulla harum quasi eligendi mollitia ipsa vero ducimus?
                        </p>
                    </div>
                    <div class="btn-block">
                        <a href="service.php" class="btn">Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section END -->

    <!-- Booking Section -->
    <div class="booking-section">
        <form @submit.prevent="submitBookingForm" class="booking-form">
            <div class="input-block">
                <label for="from">From</label>
                <input type="text" name="from" id="from" placeholder="Destination start" class="input">
            </div>
            <div class="input-block">
                <label for="to">To</label>
                <input type="text" name="to" id="to" placeholder="Destination end" class="input">
            </div>
            <div class="input-block">
                <label for="passenger">Passengers</label>
                <input type="text" name="passenger" id="passenger" placeholder="Number of passengers" class="input">
            </div>
            <div class="input-block">
                <label for="date">Date of departure</label>
                <input type="date" name="date" id="date" placeholder="Select a date" class="input">
            </div>
            <div class="input-block">
                <label for="date-2">Return date</label>
                <input type="date" name="date-2" id="date-2" placeholder="Select a date" class="input">
            </div>
            <div class="input-block">
                <label for="vehicle">Choose a vehicle</label>
                <select name="vehicle" id="vehicle" class="input select">
                    <option value="Volvo">Volvo</option>
                    <option value="Volkswagen">Volkswagen</option>
                    <option value="Toyota">Toyota</option>
                    <option value="Ford">Ford</option>
                    <option value="BMW">BMW</option>
                </select>
            </div>
            <div class="btn-block">
                <button type="submit" class="btn" id="flight_booking">Book Now</button>
            </div>
        </form>
    </div>
    <!-- Booking Section END -->

    <div id="flight_data">
    </div>

    <!-- Title Block -->
    <div class="custom-title-block">
        <h2 class="title">Popular destination</h2>
    </div>
    <!-- Title Block -->

    <!-- Banner Section -->
    <div class="banner-section grid-3 ml-2">
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
                <img src="../assets/images/02.jpg" alt="">
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
                <img src="../assets/images/02.jpg" alt="">
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
                <img src="../assets/images/02.jpg" alt="">
            </div>
        </div>
    </div>
    <!-- Banner Section END -->

    <!-- Custom Button Block -->
    <div class="custom-btn-block mt-80">
        <a href="location.php" class="btn">Check more</a>
    </div>
    <!-- Custom BUtton Block END -->

    <!-- Footer Section -->
    <FooterComponent />
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
</template>

<script>
import $ from 'jquery';
// import 'jquery-ui';
// import 'jquery-ui/themes/base/all.css';
// import 'select2';
// import 'select2/dist/js/select2';
import gsap from 'gsap';
// import WOW from 'wowjs/dist/wow';
// import 'animate.css';
import HeaderComponent from './HeaderComponent.vue';
import FooterComponent from './FooterComponent.vue';

export default {
    name: 'HelloWorld',
    components: {
        HeaderComponent,
        FooterComponent
    },
    mounted() {
        $(document).ready(function () {
            //new WOW().init();
            $(".loader").fadeOut(1000);
            // $('.select').select2();
            // $("#date").datepicker();
            // $("#date-2").datepicker();
        });

        // GSAP Animation
        var t1 = gsap.timeline({ paused: true });

        t1.to("#nav-overlay", 0.5, {
            "left": "0%"
        });

        t1.from("#nav-overlay .close", 0.5, {
            "right": "100%"
        });

        t1.from("#nav-overlay .nav-menu .menu-link .nav-link", 0.5, {
            y: "100%",
            stagger: 0.05,
        });

        t1.to("#nav-overlay .line", 0.5, {
            "transform": "scaleY(1)",
            "transform-origin": "bottom",
        });

        t1.from("#nav-overlay .nav-address .address-block .nav-menu", 0.5, {
            y: "100%",
            stagger: 0.05,
        });

        t1.reverse();

        // HAMBURGER MENU
        document.getElementById("ham-icon").addEventListener("click", function () {
            t1.reversed(!t1.reversed());
            this.classList.add('active');
        });

        document.querySelector(".close").addEventListener("click", function () {
            t1.reversed(!t1.reversed());
            //this.classList.remove('active');
            document.getElementById("ham-icon").classList.remove('active');
        });

        // Custom scroll top
        this.custom_scroll_top(); // Call custom_scroll_top function when component is mounted

        // NAVBAR POSITION TOGGLE
        var navbar = document.getElementById("nav-container");
        window.addEventListener('scroll', () => {
            // BACK TO TOP SCRIPT
            let scrollProgress = document.getElementById("progress");
            let pos = document.documentElement.scrollTop;
            let calcHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            let scrollValue = Math.round((pos * 100) / calcHeight);
            if (pos > 100) {
                scrollProgress.style.transform = "translateY(0px)";
            } else {
                scrollProgress.style.transform = "translateY(100px)";
            }
            scrollProgress.addEventListener("click", () => {
                document.documentElement.scrollTop = 0;
            });
            scrollProgress.style.background = `conic-gradient(#222 ${scrollValue}%, #d7d7d7 ${scrollValue}%)`;

            // FIX NAV SCRIPT
            if (window.pageYOffset >= 100) {
                navbar.classList.add("active-position");
            } else {
                navbar.classList.remove("active-position");
            }
        });
    },
    methods: {
        custom_scroll_top() {
            document.documentElement.scrollTop = 0;
            document.getElementById("progress").style.transform = "translateY(100px)";
        },
        submitBookingForm() {
            const formData = $('.booking-form').serialize();

            $.ajax({
                type: 'POST',
                url: 'http://localhost:3000/src/components/load_data.php',
                data: formData,
                success: this.handleResponse,
                error: this.handleError
            });
        },
        handleResponse(response) {
            const flight_info = JSON.parse(response);
            const flightOffers = flight_info.flightOffer;
            let counter = 1;

            const headerContent = `
                <div class="custom-title-block" style="padding-bottom: 0px">
                    <h2 class="title">Available flight list.</h2>
                </div>
            `;

            $('#flight_data').append(headerContent);

            flightOffers.forEach(flight => {
                const flight_duration = flight.itineraries[0].duration;
                const flight_type = flight.class[0][0];
                const departure = flight.itineraries[0].segments[0].departure.iataCode;
                const flight_price = flight.price;
                const flight_number = flight.itineraries[0].segments[1].flightNumber;

                const newContent = `
                <div class="course-section ${counter % 2 === 0 ? 'reverse' : ''}">
                    <div class="course-wrap">
                    <div class="left-col">
                        <div class="course-photo wow fadeInup">
                        <img src="./assets/images/01.jpg" alt="course-photo">
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
                            <p><b>Departure at:</b> ${departure}</p>
                        </div>
                        <div class="facilities wow fadeInUp">
                            <i class="fa-sharp fa-regular fa-user"></i>
                            <p><b>Flight price:</b> ${flight_price}</p>
                        </div>
                        </div>
                        <div class="btn-block">
                        <a href="#" target="_blank" class="btn wow fadeInUp">Book Now</a>
                        </div>
                    </div>
                    </div>
                </div>
                `;

                $('#flight_data').append(newContent);
                counter++;
            });

            const buttonContent = `
                <div class="custom-btn-block" style="padding-bottom: 0px">
                    <a href="flight.php" class="btn">Check more</a>
                </div>
            `;

            $('#flight_data').append(buttonContent);
        },
        handleError(xhr, status, error) {
            console.error(xhr.responseText);
            console.log(status);
            console.log(error);
        }
    }
}
</script>
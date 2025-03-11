 
 
 <footer>
        <div class="footer-wrapper contain">
        <div class="whatsapp-chat">
    <a href="https://wa.me/+234 812 723 9105" target="_blank">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="Chat on WhatsApp">
    </a>
</div>

            <div class="footer-container">
                <div class="footer-content-1">
                    <img src="{{asset('img/Logo_Horizontal 4.png')}}" alt="">
                    <p>Flotilla Academy is the primary training center for Practical Boat Design and Seamanship in Nigeria.</p>
                    <p>© Copyright 2025. Flotilla Academy of Marine Technology. All rights reserved.</p>
                </div>

                <div class="footer-content-2">
                    <div class="content2-1">
                        <div class="footer-item">
                            <h2>QUICK LINKS</h2>
                            <a href="#"><i class="fas fa-chevron-right"></i>ABOUT US</a>
                            <a href="#"><i class="fas fa-chevron-right"></i>COURSES</a>
                            <a href="#"><i class="fas fa-chevron-right"></i>CONTACT US</a>
                            <a href="#"><i class="fas fa-chevron-right"></i>HOME</a>
                        </div>

                        <div class="footer-item">
                            <h2>PAGES</h2>
                            <a href="#"><i class="fas fa-chevron-right"></i>COURSE RESEARCH</a>
                            <a href="#"><i class="fas fa-chevron-right"></i>SHOP</a>
                        </div>

                        <div class="footer-item">
                            <h2>INFORMATION</h2>
                            <a href="#"><i class="fas fa-chevron-right"></i>PRIVACY POLICY</a>
                            <a href="#"><i class="fas fa-chevron-right"></i>REFUND AND RETURNS POLICY</a>
                            <a href="#"><i class="fas fa-chevron-right"></i>CONTACT US</a>
                            <a href="#"><i class="fas fa-chevron-right"></i>TERMS AND CONDITIONS</a>
                        </div>
                    </div>
                    <!-- content2-1 ends -->

                    <div class="content2-2">
                        <h2>CONTACT</h2>
                        <p><span>Email:</span> info@flotillaacademy.com</p>
                        <p><span>Phone:</span> +23486163636</p>
                        <p><span>Address:</span> Lagos, Nigeria</p>
                    </div>
                    <!-- content2-2 ends -->
                </div>
                <!-- footer-content-2 ends -->
            </div>
            <!-- footer-container ends -->
        </div>
        <!-- footer-wrapper ends -->
        <div>
            <div class="bottom-footer">
                <div class="contain">
                    <a href="#">Privacy</a>
                    <a href="#">Terms & Conditions</a>
                </div>
            </div>
            
    </footer>
  <script>
    $(document).ready(function () {
    let menuToggle = $("#menuToggle");
    let navMenu = $("#navMenu");

    // Toggle Menu
    menuToggle.click(function (event) {
        navMenu.toggleClass("active");

        if (navMenu.hasClass("active")) {
            navMenu.css({
                "display": "flex",
                "opacity": "0"
            }).animate({
                "opacity": "1",
                "left": "0"
            }, 300);

            menuToggle.find("i").removeClass("fa-bars").addClass("fa-times").css({
                "transform": "rotate(180deg)",
                "transition": "transform 0.3s ease-in-out"
            });

        } else {
            navMenu.animate({
                "opacity": "0",
                "left": "-100%"
            }, 300, function () {
                $(this).css("display", "none");
            });

            menuToggle.find("i").removeClass("fa-times").addClass("fa-bars").css({
                "transform": "rotate(0deg)"
            });
        }

        event.stopPropagation(); // Prevents triggering document click immediately
    });

    // Close menu when clicking outside
    $(document).click(function (event) {
        if (!navMenu.is(event.target) && !menuToggle.is(event.target) && navMenu.has(event.target).length === 0) {
            if (navMenu.hasClass("active")) {
                navMenu.animate({
                    "opacity": "0",
                    "left": "-100%"
                }, 300, function () {
                    $(this).css("display", "none");
                });

                menuToggle.find("i").removeClass("fa-times").addClass("fa-bars").css({
                    "transform": "rotate(0deg)"
                });

                navMenu.removeClass("active");
            }
        }
    });

    // Close menu when a menu item is clicked
    $("#navMenu li a").click(function () {
        navMenu.animate({
            "opacity": "0",
            "left": "-100%"
        }, 300, function () {
            $(this).css("display", "none");
        });

        menuToggle.find("i").removeClass("fa-times").addClass("fa-bars").css({
            "transform": "rotate(0deg)"
        });

        navMenu.removeClass("active");
    });
});

  </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1200,
            once: true,
        });

        // Initialize Swiper
        const swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            loop: true, // Enable infinite loop
            autoplay: {
                delay: 5000, // Auto-slide every 5 seconds
                disableOnInteraction: false,
            },
        });

    AOS.init();
</script>
    </body>
    </html>
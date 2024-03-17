
<footer class="container" >
        <div class="row" style="margin-left: 10px;">
            <div class="col-md-4  footer-1">
                <h1 style="color: #8512ff;">Jen Academy</h1>

                <p>You have landed on the right page. JEN
                    Academy is the leading technical
                    institute in Jaipur and among the top 10
                    SSC JE coaching in India.</p>
            </div>
            <div class="col-md-2  footer-2">
                <div class="user">
                    <h3>Useful Links </h3>
                    <ul>
                        <i class="fa fa-check-square-o" style="color: #8512ff;;"></i> <span
                            style="color: rgb(189, 189, 189);">Home</span> <br>
                        <i class="fa fa-check-square-o" style="color: #8512ff;;"></i> <span
                            style="color: rgb(189, 189, 189);">About us </span> <br>
                        <i class="fa fa-check-square-o" style="color: #8512ff;;"></i> <span
                            style="color: rgb(189, 189, 189);">Services</span><br>
                        <i class="fa fa-check-square-o" style="color: #8512ff;;"></i> <span
                            style="color: rgb(189, 189, 189);">Contact Us
                        </span><br>
                        <i class="fa fa-check-square-o" style="color: #8512ff;;"></i> <span
                            style="color: rgb(189, 189, 189);">Privacy Policye</span><br>
                        <i class="fa fa-check-square-o" style="color: #8512ff;;"></i> <span
                            style="color: rgb(189, 189, 189);">Selections</span><br>
                    </ul>
                </div>

            </div>
            <div class="col-md-2 footer-3">
                <div class="course">
                    <h3>Courses</h3>
                    <ul>
                        <i class="fa fa-check-square-o" style="color: #8512ff;;"></i> <span
                            style="color: rgb(189, 189, 189);">Batch</span> <br>
                        <i class="fa fa-check-square-o" style="color: #8512ff;;"></i> <span
                            style="color: rgb(189, 189, 189);">Test Series</span> <br>
                        <i class="fa fa-check-square-o" style="color: #8512ff;;"></i> <span
                            style="color: rgb(189, 189, 189);">Study Material</span><br>
                    </ul>
                </div>


            </div>
            <div class="col-md-4 footer-4">
                <div class="location">
                    <h3>Location</h3>
                    <ol>
                        <i class="fa fa-map-marker" style="color: #8512ff; font-size: 20px;"></i> <span> Main
                            Tonk,Phatak,jaipur, Rajasthan
                            <br><samp style="margin-left: 25px;"> 302015 </samp></span><br>

                        <i class="fa fa-phone" style="color: #8512ff; font-size: 20px;"></i> <span>+91
                            8233888827</span><br>

                        <i class="fa fa-envelope-o" style="color: #8512ff; font-size: 20px;"></i>
                        <span>enacademyjaipur@gmail.com
                        </span>


                    </ol>

                </div>


            </div>

        </div>

    </footer>

    <div class=" lower-footer ">

        <div class="container">

            <div class="row">
                <div class="col-md-10" >
                    <div style="margin-top: 50px;">
                        <h5 style="font-size: 15px;">© Copyright Jen Academy. All Rights Reserved</h5>
                    </div>
                </div>
                <div class=" two col-md-2 " >
                    <div class="social">
                        <ul>
                            <li><i class="fa fa-facebook-f" style="color: #8512ff; font-size: 20px;"></i></li>
                            <li><i class="fa fa-twitter" style="color: #8512ff; font-size: 20px;"></i></li>
                            <li><i class="fa fa-youtube" style="color: #8512ff; font-size: 20px;"></i></li>
                            <li><i class="fa fa-instagram" style="color: #8512ff; font-size: 20px;"></i></li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>



<!-- owl crousal -->
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 5,

        nav: false,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 1,

            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })
</script>


<!-- sticky nav bar -->
<script>
    window.onscroll = function () { myFunction() };

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }
</script>


<!-- animation -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

    AOS.init({
        duration: 700,
        offset: 150,
    });
</script>
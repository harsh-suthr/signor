<div class="copyright-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="copyright-left-main text-center">
                    <a href="#">Copyright © 2022 Signor Skyline. All Right Reserved.</a>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="js/jquery-3.6.0.js"></script>
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/lightbox.min.js"></script>

    <script>


        $(window).scroll(function () {

            if ($(this).scrollTop() > 100) {

                $('.headerMain').addClass('has_sticky');
                $('.top-section').addClass('sticky_header');

            } else {

                $('.scrollTop').fadeOut();

                $('.headerMain').removeClass('has_sticky');
                $('.top-section').removeClass('sticky_header');

            }

        });

        $(document).ready(function () {
            $("#formButton").click(function () {
                $(".Sliding_div").toggle("slide");
            });
            $("#close1").click(function () {
                $(".Sliding_div").toggle("slide");
            });

            $(".getaquate").click(function () {
                $('.getquteoverlay').css({
                    'display': 'grid'
                });
            })
            $("#close2").click(function () {
                $('.getquteoverlay').css({
                    'display': 'none'
                });
            });

            $(".nav-link").click(function () {
                $(".navbar-collapse").removeClass("show");
            });
            $(".header-btn").click(function () {
                $(".navbar-collapse").removeClass("show");
            });

        });
        document.addEventListener("DOMContentLoaded", function () {
            window.addEventListener('scroll', function () {
                if (window.scrollY > 50) {
                    document.getElementById('main_header').classList.add('sticky');
                    navbar_height = document.querySelector('.navbar').offsetHeight;
                    document.body.style.paddingTop = navbar_height + 'px';
                } else {
                    document.getElementById('main_header').classList.remove('sticky');
                    document.body.style.paddingTop = '0';
                }
            });
        });
    </script>
</body>
</html>

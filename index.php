<?php
session_start();
require 'inc/header.php'; ?>




<section style="background: #BF0A30; background-image: url('images/logo4.png'); background-position: center;
  background-repeat: no-repeat;
  background-size: 35%;
  background-attachment: fixed; padding-bottom: 30px;">
    <div class="" style="width: 100%; background-image: url('../images/logo.png'); Center and scale the image nicely background-position: center; background-repeat: no-repeat; background-size: 35%; background-attachment: fixed;">
<?php
if (isset($_SESSION['email'])) {
    //echo $_SESSION['email'];
}
?>
        <div class="jumbotron jumbotron-fluid text-center">
            <div class="">
                <!--<h1 class="display-3">E-Governance</h1>
                <p>Welcome to E-Governance</p>-->
                <img class="mt-3 mb-3" src="images/logo.png" alt="logo" style="height:90px;">
            </div>

            <h1 class="display-5 text-light">E-Governance for Liberia</h1>
            <div id="type"></div>



            <div class="col-lg-6 mx-auto">
                <input type="text" class="input" placeholder="Search for a service" style="border-radius: 7px; box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);"><span></span>
            </div>

            <h3 class="text-center mt-1 mb-3" style="padding-top: 50px; color: #fff;">Popular Services</h3>

            <div class="row mx-auto col-md-8" style="font-size: 15px; color: #fff;">
                <p class="col-md-3 mx-auto" style="text-align: left; color: #fff;">Agriculture <span class="fa fa-arrow-circle-right" style="font-size: 17px;"></span></p>
                <p class="col-md-3 mx-auto" style="text-align: left; color: #fff;">Tourism <span class="fa fa-arrow-circle-right" style="font-size: 17px;"></span> </p>
                <p class="col-md-3 mx-auto" style="text-align: left; color: #fff;">Education <span class="fa fa-arrow-circle-right" style="font-size: 17px;"></span></p>
            </div>
            <div class="row mx-auto col-md-8" style="font-size: 15px; color: #fff;">
                <p class="col-md-3 mx-auto" style="text-align: left; color: #fff;">Birth Certificate <span class="fa fa-arrow-circle-right" style="font-size: 17px;"></span></p>
                <p class="col-md-3 mx-auto" style="text-align: left; color: #fff;">Marriage Certificate <span class="fa fa-arrow-circle-right" style="font-size: 17px;"></span></p>
                <p class="col-md-3 mx-auto" style="text-align: left; color: #fff;">National ID Application <span class="fa fa-arrow-circle-right" style="font-size: 17px;"></span></p>
            </div>
        </div>
        <!--
        <div style="padding: 20px; background: #bbb;">
            <div id="carousel-example" class="carousel slide col-lg-12" data-ride="carousel">
                <div class="carousel-inner row mx-auto" role="listbox">

                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                        <img src="images/gradient.jpg" class="img-fluid mx-auto d-block" alt="img1">
                        <div class="carousel-caption d-none d-sm-block">
                            <p class="text-img display-5">Agriculture</p>

                        </div>
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="images/transport.jpg" class="img-fluid mx-auto d-block" alt="img2">
                        <div class="carousel-caption d-none d-sm-block">
                            <p class="text-img display-5">Transportation</p>
                        </div>
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="images/education.jpg" class="img-fluid mx-auto d-block" alt="img3">
                        <div class="carousel-caption d-none d-sm-block">
                            <p class="text-img display-5">Education</p>
                        </div>
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="images/tourism.jpg" class="img-fluid mx-auto d-block" alt="img4">
                        <div class="carousel-caption d-none d-sm-block">
                            <p class="text-img display-5">Tourism</p>
                        </div>
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="images/health.jpg" class="img-fluid mx-auto d-block" alt="img5">
                        <div class="carousel-caption d-none d-sm-block">
                            <p class="text-img display-5">Health</p>
                        </div>
                    </div>

                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="images/vat.jpg" class="img-fluid mx-auto d-block" alt="img7">
                        <div class="carousel-caption d-none d-sm-block">
                            <p class="text-img display-5">VAT</p>
                        </div>
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="images/marriage.jpg" class="img-fluid mx-auto d-block" alt="img6">
                        <div class="carousel-caption d-none d-sm-block">
                            <p class="text-img display-5">Marriage Certificate</p>
                        </div>
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="images/e-passport.jpg" class="img-fluid mx-auto d-block" alt="img6">
                        <div class="carousel-caption d-none d-sm-block">
                            <p class="text-img display-5">E-Passport</p>
                        </div>
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="images/birth-certificate.jpg" class="img-fluid mx-auto d-block" alt="img6">
                        <div class="carousel-caption d-none d-sm-block">
                            <p class="text-img display-5">Birth Certificate</p>
                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
-->
    </div>
</section>

<section>

</section>


<script>
    /*
        Carousel
    */
    $('#carousel-example').on('slide.bs.carousel', function(e) {
        /*
            CC 2.0 License Iatek LLC 2018 - Attribution required
        */
        var $e = $(e.relatedTarget);
        var idx = $e.index();
        var itemsPerSlide = 4;
        var totalItems = $('.carousel-item').length;

        if (idx >= totalItems - (itemsPerSlide - 1)) {
            var it = itemsPerSlide - (totalItems - idx);
            for (var i = 0; i < it; i++) {
                // append slides to end
                if (e.direction == "left") {
                    $('.carousel-item').eq(i).appendTo('.carousel-inner');
                } else {
                    $('.carousel-item').eq(0).appendTo('.carousel-inner');
                }
            }
        }
    });
</script>




<?php include 'inc/footer.php'; ?>
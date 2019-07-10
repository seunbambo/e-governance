<?php require 'inc/header.php'; ?>
<br><br><br>

<section>
    <div class="container">
        <div class="jumbotron jumbotron-fluid text-center">
            <div class="container">
                <h1 class="text-success">Payment Successful <span class="fa fa-check"></span></h1>
                <p>Click the button below to print your certificate.</p>

                <a href="certificate-pdf.php">
                    <form action="" method="post">
                        <div class="form-holder form-holder-2 mx-auto">
                            <button type="button" class="btn btn-info" style="border-radius: 0px;"> Print Certificate <span class="fa fa-print"></span></button>
                        </div>
                </a>
                </form>

            </div>



        </div>
    </div>

</section>

<!--
<div class="scroll">
    <p>E-Governance at your finger tip, It doesn't get better.</p>
</div>
-->


<br><br><br>
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


<br><br> <br>

<?php include 'inc/footer.php'; ?>
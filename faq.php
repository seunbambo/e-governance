<?php require 'inc/header.php'; ?>
<!--
<script>
    $(document).ready(function() {
        $("#flip").click(function() {
            $("#panel").slideToggle("slow");
        });
    });
</script>

<div id="flip">Click to slide down panel <span class="fa fa-angle-left"></span></div>
<div id="panel">Hello world!</div>
-->
<div class="container mt-5 mx-auto">
<h1 class="heading">FAQ's</h1>

<div id="accordion">
  <div class="cards">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          <span class="fa fa-arrow-right"></span> What is birth certificate service?
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        <p>Birth certificate service allows Liberians to apply for a Birth certificate. It can be used as one of the supporting documents for applying services like driving license, school admission, etc.</p>
      </div>
    </div>
  </div>
  <div class="cards">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <span class="fa fa-arrow-right"></span> What Is trading license service?
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        <p>Trading License service allows any person who owns a profit-oriented business in Liberia to apply for a trading license.</p>
      </div>
    </div>
  </div>
  <div class="cards">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <span class="fa fa-arrow-right"></span> What is registration for supplementary driving license service?
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        <p>Applicants can register for the Driving License Practical test (Supplementary) using this service. The purpose of this registration is to upgrade from the current driving license. Before registering for the Supplementary Driving test, you must possess a Definitive Driving license.</p>
      </div>
    </div>
  </div>
  <div class="cards">
    <div class="card-header" id="headingFour">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          <span class="fa fa-arrow-right"></span> Can anyone initiate a land transfer?
        </button>
      </h5>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
      <div class="card-body">
        <p>Only the rightful owner (the Seller) can initiate the transfer, not the buyer. If the landowner does not have an account, agents spread across the country are available to help.</p>
      </div>
    </div>
  </div>
</div>

</div>


<?php require 'inc/footer.php'; ?>
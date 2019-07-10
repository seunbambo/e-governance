<?php

include 'inc/header.php';
include 'submit.php';

?>
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-offset-2">
            <!--<img src="images/flag.jpg" style="width: 20%">-->
        </div>
    </div>
</div>
<div class="page-content">
    <div class="wizard-v3-content">
        <div class="wizard-form mt-5 mb-5">

            <div class="card mx-auto">
                <h3 class="mb-4 mx-auto">Payment Information</h3>


                <div class="container bd-example bd-example-tabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="card-tab" data-toggle="tab" href="#card" role="tab" aria-controls="card" aria-selected="true">Card</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="bank-tab" data-toggle="tab" href="#bank" role="tab" aria-controls="bank" aria-selected="false">Bank Branch</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="paypal-tab" data-toggle="tab" href="#paypal" role="tab" aria-controls="paypal" aria-selected="false">Paypal</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="card" role="tabpanel" aria-labelledby="card-tab">




                            <form class="form-register mx-auto" action="" method="post">
                                <?php include 'marriage-submit.php';
                                $fnames = $_SESSION['aoh'];
                                print_r($fnames);
                                print_r($_POST['aoh']);
                                ?>
                                <c:if test="${uid!=''}">
                                    <input class="input" type="hidden" value="${uid}" name="uid">
                                </c:if>
                                <div id="form-total">
                                    <!-- <section> -->
                                    <div class="inner">

                                        <img src="images/wizard_v3_icon_1.png" class="mb-2" alt="pay-1">

                                        <div class='row'>
                                            <div class='col-lg-12'>
                                                <div class="form-group">
                                                    <label for="email"><b>Name on the Card</b><i class="fa text-warning">*</i></label> <input type="text" class="form-control input" id="holder" name="holder" value="" autocomplete="off" placeholder="Card Holder Name" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class='row'>
                                            <div class='col-lg-6'>
                                                <div class="form-group">
                                                    <label for="email"><b>Card Number</b><i class="fa text-warning">*</i>
                                                    </label> <input type="text" class="form-control input" id="cardNumber" name="cardNumber" autocomplete="off" required maxlength="19" placeholder="XXXX XXXX XXXX XXXX" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g, '');">
                                                </div>
                                            </div>
                                            <input class="input" type="hidden" id='valid'>
                                            <div class='col-lg-6'>
                                                <div class="form-group">
                                                    <label for="email"><b>CVV</b><i class="fa text-warning">*</i></label> <input type="text" class="form-control input" id="holder" name="holder" autocomplete="off" required maxlength="4" placeholder="XXX" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g, '');">
                                                </div>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-lg-6'>
                                                <div class="form-group">
                                                    <label for="sel1"><b>Expiry Date</b></label> <select class="form-control input-exp" id="expMonth" name="expMonth" required>
                                                        <option value="" disabled selected>Select Month</option>
                                                        <option value="1">Jan</option>
                                                        <option value="2">Feb</option>
                                                        <option value="3">Mar</option>
                                                        <option value="4">Apr</option>
                                                        <option value="5">May</option>
                                                        <option value="6">Jun</option>
                                                        <option value="7">Jul</option>
                                                        <option value="8">Aug</option>
                                                        <option value="9">Sep</option>
                                                        <option value="10">Oct</option>
                                                        <option value="11">Nov</option>
                                                        <option value="12">Dec</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class='col-lg-6'>
                                                <div class="form-group">
                                                    <label for="sel1">&nbsp;</label> <select class="form-control input-exp" id="expYear" name="expYear" required>
                                                        <option value="" disabled selected>Select Year</option>
                                                        <?php
                                                        $year = 2019;
                                                        for ($i = $year; $i <= 2050; $i++) {

                                                            echo '<option>' . $i . '</option>';
                                                        }
                                                        ?>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-holder form-holder-2 pull-left">

                                        <a class="btn btn-info" style="border-radius: 0px;" href="index.php"> Back
                                        </a>
                                    </div>
                                    <div class="form-holder form-holder-2 pull-right">
                                        <a class="btn btn-info" style="border-radius: 0px;" href="marriage-pdf.php">Confirm
                                        </a>
                                    </div>
                                    <!-- </section> -->
                                </div>
                            </form>



                        </div>
                        <div class="tab-pane fade" id="bank" role="tabpanel" aria-labelledby="bank-tab">



                            <form class="form-register mx-auto" action="${ctx}/thanks" method="post">

                                <div id="form-total">
                                    <!-- <section> -->
                                    <div class="inner">
                                        <form action="">

                                            <div class='row'>
                                                <!--<i class="fa fa-wallet"></i>
                                                <div class='col-lg-6'>
                                                    <div class="form-group">
                                                        <label for="email"><b>Reference Number</b><i class="fa text-warning">*</i></label> <input type="text" class="form-control input" id="holder" name="holder" autocomplete="off" placeholder="Enter Reference Number" required />
                                                    </div>
                                                </div>

                                                <div class='col-lg-6'>
                                                    <div class="form-group">
                                                        <label for="email"><b>Receipt Number</b><i class="fa text-warning">*</i></label> <input type="text" class="form-control input" id="holder" name="holder" autocomplete="off" placeholder="Enter Receipt Number" required />
                                                    </div>
                                                </div>
                                                <div class='col-lg-6'>
                                                    <div class="form-group">
                                                        <label for="supportdoc"><b>Upload Receipt</b><i class="fa text-warning">*</i></label> <input type="file" class="input form-control-file" id="supportdoc" name="supportdoc" placeholder="Upload Receipt" autocomplete="off" required />
                                                    </div>
                                                </div>-->
                                                <div class="alert alert-success" role="alert">
                                                    Please proceed to the bank to make payment.
                                                </div>
                                            </div>

                                            <!--
                                            <div class="form-holder form-holder-2 pull-left">

                                                <a class="btn btn-info" style="border-radius: 0px;" href="index.php"> Back
                                                </a>
                                            </div>
                                            <div class="form-holder form-holder-2 pull-right">
                                                <a class="btn btn-info" href="success.php">Confirm
                                                </a>
                                            </div>-->
                                        </form>



                                    </div>
                                </div>


                        </div>
                        <div class="tab-pane fade" id="paypal" role="tabpanel" aria-labelledby="paypal-tab">



                            <img src="images/paypal.png" alt="pay-2">



                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
</div>
</body>

<script type="text/javascript">
    /*cardNumber

    $(function() {
        $('#cardNumber').validateCreditCard(
            function(result) {
                if (result.card_type != null) {
                    $("#card")
                        .html(
                            "(" +
                            result.card_type.name
                            .toUpperCase() + ")");
                } else {
                    $("#card").html('');
                }
                if (result.valid && result.length_valid &&
                    result.luhn_valid) {
                    $("#validate").html('(Valid)');
                    $("#valid").val('true');
                } else {
                    $("#validate").html('(Invalid)');
                }
            });
    });

    $("form").submit(
        function(e) {

            if (!$("#valid").val()) {
                alert('Invalid Card Details!!');
                return false;
            }

            var curdate = new Date();
            var enteredMonth = $('#expMonth');
            var enteredYear = $('#expYear');

            /* 4000 0000 0000 0002 

            if (typeof enteredMonth.val() == null ||
                enteredMonth.val() == "" ||
                typeof enteredYear.val() == null ||
                enteredYear.val() == "") {
                alert('Invalid Expiry date!!!!!');
                return false;
            }

            if (curdate.getFullYear() > +$('#expYear').val()) {
                alert('Invalid Expiry date!!');
                return false;
            }
            if (curdate.getFullYear() == +$('#expYear').val()) {
                if (curdate.getMonth() + 1 > +$('#expMonth').val()) {
                    alert('Invalid Expiry date!!');
                    return false;
                }
            }
        });
        */
</script>

</html>
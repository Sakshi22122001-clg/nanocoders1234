<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Payment Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="padding">
        <div class="row">
            <div class="container-fluid d-flex justify-content-center">
                <div class="col-sm-8 col-md-6">
                    <div class="card" style="background: #f0f0f0">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6"> <span>CREDIT/DEBIT CARD PAYMENT</span> </div>
                                <div class="col-md-6 text-right" style="margin-top: -5px;">
                                    <img src="https://img.icons8.com/color/36/000000/visa.png">
                                    <img src="https://img.icons8.com/color/36/000000/mastercard.png">
                                    <img src="https://img.icons8.com/color/36/000000/amex.png">
                                </div>
                            </div>
                        </div>
                        <div class="card-body" style="height: 520px">
                            <div class="form-group">
                                <label for="cc-number" class="control-label">CARD NUMBER</label> <input id="cc-number" type="tel" class="input-lg form-control cc-number" autocomplete="cc-number" placeholder="•••• •••• •••• ••••" required maxlength="20">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group"> <label for="cc-exp" class="control-label">CARD EXPIRY</label> <input id="cc-exp" type="tel" class="input-lg form-control cc-exp" autocomplete="cc-exp" placeholder="•• / ••" required maxlength="7"> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"> <label for="cc-cvc" class="control-label">CARD CVC</label> <input id="cc-cvc" type="tel" class="input-lg form-control cc-cvc" autocomplete="off" placeholder="•••" required maxlength="3"> </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="numeric" class="control-label">CARD HOLDER NAME</label> <input type="text" id="name" class="input-lg form-control" style="text-transform: uppercase">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">AMOUNT</label>
                                <input type="number" class="input-lg form-control" id="amount">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">NAME OF NGO</label>
                                <input type="text" class="input-lg form-control" id="ngo">
                            </div>
                            <div class="form-group">
                                <input value="MAKE PAYMENT" type="button" class="btn btn-primary btn-lg form-control" style="font-size: .8rem;font-weight:500" id="paybtn">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('[data-numeric]').payment('restrictNumeric');
            $('.cc-number').payment('formatCardNumber');
            $('.cc-exp').payment('formatCardExpiry');
            $('.cc-cvc').payment('formatCardCVC');
            $.fn.toggleInputError = function(erred) {
                this.parent('.form-group').toggleClass('has-error', erred);
                return this;
            };
            $("#paybtn").click(function() {

                var creditno = $("#cc-number").val().toString();
                var expire = $("#cc-exp").val().toString();
                var cvv = $("#cc-cvc").val().toString();
                var name = $("#name").val();
                name=name.toUpperCase();
                var amount = $("#amount").val();
                var ngo = $("#ngo").val();
                var url="payprocess.php?creditno="+creditno+"&expire="+expire+"&cvv="+cvv+"&name="+name+"&amount="+amount+"&ngo="+ngo;
                $.get(url,function(response){
                    alert(response);
                    location.href="paypage.php";
                });
            });
        });

    </script>
</body>

</html>

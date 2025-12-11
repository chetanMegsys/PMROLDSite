<?php //session_start();
//header('Cache-Control: no cache'); //no cache
//session_cache_limiter('private_no_expire'); // works
//session_cache_limiter('public'); // works too


$ip_data = "";
$client  = @$_SERVER['HTTP_CLIENT_IP'];
$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
$remote  = $_SERVER['REMOTE_ADDR'];
$country_name  = "Unknown";
$cust_country_code ="";
if(filter_var($client, FILTER_VALIDATE_IP)) {
    $ip = $client;
} elseif(filter_var($forward, FILTER_VALIDATE_IP)) {
    $ip = $forward;
} else {
    $ip = $remote;
}
$ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
if($ip_data && $ip_data->geoplugin_countryName != null) {
    $country_name = $ip_data->geoplugin_countryName;
    $cust_country_code = $ip_data->geoplugin_countryCode;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Purchase Report - <?php echo $report_data[0]['rep_keyword']; ?></title>
    <meta name="description" content="Purchase report with secured transaction - <?php echo $report_data[0]['rep_keyword']; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo WEBSITE_URL; ?>themes/image/fevicon-pmr.svg">    
    <meta name="robots" content="NOINDEX">
    <!-- <link href="<?php echo WEBSITE_URL; ?>themes/bootstrap4/bootstrap.min.css" rel="stylesheet" /> -->
    <link href="<?php echo WEBSITE_URL; ?>themes/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo WEBSITE_URL; ?>assets/css/checkout.css" rel="stylesheet" />
</head>
<body>
    <header class="headerBar checkoutHeader">
        <nav class="navbar navbar-default">
            <div class="container d-block">
               <div class="row">
                    <div class="col-md-3 col-sm-2 col-6">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="<?php echo WEBSITE_URL; ?>" title="Persistence Market Research">
                                <img class="img-fluid" src="<?php echo WEBSITE_URL; ?>themes/image/pmr-logo.svg" alt="Persistence Market Research" title="Persistence Market Research" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-8 d-flex align-items-center">
                        <div id="navbar" class="navbar-collapse checkOutList text-center">
                            <ul class="nav navbar-nav flex-row justify-content-center">
                                <li>
                                    <a href="javascript:void(0)" title="Summary">
                                        <span>Summary</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" title="Details">
                                        <span>Details</span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="javascript:void(0)" title="Payment">
                                        <span>Payment</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" title="Thank you">
                                        <span>Thank you</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-2 col-6">
                        <div class="secureText">
                            <p class="mb-0">
                                <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-shield-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.443 1.991a60.17 60.17 0 0 0-2.725.802.454.454 0 0 0-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 0 0 8 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 0 0 2.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 0 0-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 0 1 2.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 0 1-2.418 2.3 6.942 6.942 0 0 1-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 0 1-1.007-.586 11.192 11.192 0 0 1-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 0 1 2.415 1.84a61.11 61.11 0 0 1 2.772-.815z"/>
                                    <path fill-rule="evenodd" d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                  </svg>
                                  100% Secure</p>
                        </div>
                    </div>
               </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="py-0 orderDetailsSec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 registerBorder">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 px-5 py-4 reportName">
                                
                                <div class="checkoutForm1 px-5 mx-5">                             
                                <div class="formBox1">
                                    <p class="fs-18 bold500 mb-3 mt-0">Choose Payment Mode:</p>
                                    <div class="requestform">
                                        <form action="" method="post" name=""  >
                                            <?php
                                                $name = $this->security->get_csrf_token_name(); 
                                                $hash = $this->security->get_csrf_hash();
                                                $_SESSION[$name] = $hash;
                                            ?>

                                            <input type="hidden" name="<?=$name;?>" value="<?=$hash;?>" /> 
                                           <input type="hidden" name="hdnPromoCode" value="<?php echo $hdnPromoCode; ?>">
                                              <div class="paymentOptBox mb-4">
                                    <div class="paymentRadio">
                                        <input type="radio" checked="checked" name="payment_type" id="radioPayPal" class="paymentType" value="PayPal">
                                        <label class="contRedio pl-0 row" for="radioPayPal">
                                           <div class="row">
                                               <div class="col-5">
                                                    <span class="checkIcon pl-5">
                                                        <img class="img-fluid payPal" src="<?php echo WEBSITE_URL; ?>assets/images/pay-pal.png" alt="PayPal" title="PayPal" />
                                                    </span>
                                                   </div>
                                                    <div class="col-7 paymentOptBottom">
                                                        <span>
                                                            <img src="<?php echo WEBSITE_URL; ?>assets/images/pay-pal-bottom.png" alt="PayPal" title="PayPal" />
                                                        </span>
                                                    </div>
                                           </div>
                                        </label>
                                    </div>
                                    <!-- <div class="paymentRadio">
                                        <input type="radio"  name="payment_type" id="radioRazorpay" class="paymentType" value="Razorpay">
                                        <label class="contRedio pl-0 row" for="radioRazorpay">
                                           <div class="row">
                                               <div class="col-5">
                                                    <span class="checkIcon pl-5">
                                                        <img class="img-fluid Razorpay my-3" src="<?php echo WEBSITE_URL; ?>assets/images/Razorpay-icon.png" alt="Razorpay" title="Razorpay" />
                                                    </span>
                                                   </div>
                                                    <div class="col-7 paymentOptBottom">
                                                        <span>
                                                            <img src="<?php echo WEBSITE_URL; ?>assets/images/pay-pal-bottom.png" alt="Razorpay" title="Razorpay" />
                                                        </span>
                                                    </div>
                                           </div>
                                        </label>
                                    </div> -->
                                    <div class="paymentRadio">
                                        <input type="radio"  name="payment_type" id="radioStripe" class="paymentType" value="Stripe">
                                        <label class="contRedio pl-0 row" for="radioStripe">
                                           <div class="row">
                                               <div class="col-5">
                                                    <span class="checkIcon pl-5">
                                                        <img class="img-fluid Stripe my-3" src="<?php echo WEBSITE_URL; ?>assets/images/stripe.webp" alt="Stripe" title="Stripe" />
                                                    </span>
                                                   </div>
                                                    <div class="col-7 paymentOptBottom">
                                                        <span>
                                                            <img src="<?php echo WEBSITE_URL; ?>assets/images/pay-pal-bottom.png" alt="Stripe" title="Stripe" />
                                                        </span>
                                                    </div>
                                           </div>
                                        </label>
                                    </div>
                                </div>
                                            <div class="row mt-3">
                                                
                                                <div class="col-md-12 col-xs-12 mt-2 text-center procRegisterBtn">
                                                    <button type="submit" name="btnPayment" class="btn btnBuyNow" value="btnPayment" title="Proceed To Payment">
                                                        Proceed To Payment
                                                    </button>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <input type="hidden" name="checkout_id" value="<?php echo $checkout_id; ?>">
                                                    
                                                </div>
    
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                                <div class="orderDetailsDiv p-0 mt-4">
                                    <p class="fs-16 txt-black2 mb-1 orderP pl-2">Order Summary</p>
                                    <div class="details d-flex">
                                        
                                        <div class="detailText pl-2">
                                            <p class="fs-16 txt-black1 m-0"><?php echo $report_data[0]['rep_keyword']; ?></p>
                                            <div class="rDeatils d-flex mt-0">
                                                <p class="m-0 pr-3 fs-11 txt-grey2 d-flex flex-column rborder-right">
                                                    
                                                    <span>PMRREP<?php echo $report_data[0]['rep_id']; ?></span>
                                                </p>  <?php if(isset($report_data[0]['cat_name']) && $report_data[0]['cat_name'] != '' ) {
                                                    ?>
                                                <p class="m-0 pl-3 fs-12 txt-grey2 d-flex flex-column">
                                                   
                                                    <span><?php echo $report_data[0]['cat_name']; ?></span>
                                                </p>
                                            <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                     <?php
                                            $license = '';
                                            $license_price = 0;
                                            switch($licenseType){
                                        case 'S':
                                            $license = 'Single User License';
                                            $license_price = $report_data[0]['rep_price_sul'];
                                            break;

                                        case 'M':
                                            $license = 'Multi User License';
                                            $license_price = $report_data[0]['rep_price_el'];
                                            break;

                                        case 'C':
                                            $license = 'Corporate License';
                                            $license_price = $report_data[0]['rep_price_cul'];
                                            break;
                                    }
                                    ?>
                                    <p class="mb-1 txt-grey2 fs-10 pl-2">Format*: <em>PPT, PDF, EXCEL</em></p>
                                    <div class="licenseDetails">
                                        
                                        <p class="p2 fs-13 txt-grey2 m-0 py-2 d-flex justify-content-between pl-2">
                                            <span class="spnLicense"><?php echo $license; ?></span>
                                            <span class="pr-5 spnPrice">$<?php echo $license_price; ?></span>
                                        </p>
                                        <?php $discount_price = 0; if($discount_percent>0){ $discount_price = ($license_price*$discount_percent)/100; ?>
                                        <div class="pmr-discount promo_frm_apply d-block ">
                                            <p class="fs-13 txt-grey2 m-0 py-2 d-flex justify-content-between pl-2">
                                                <span class="">Discount:</span>
                                                <span class="pr-5 spnDiscount">- $<?php echo $discount_price; ?></span>
                                            </p>
                                            <p class="couponText mb-2 py-1 bg-white radius4 fs-14 pl-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="mr-2" fill="#42a43d" viewBox="0 0 16 16">
                                                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                                  <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"></path>
                                                </svg>
                                                Promo Code: <span class="txt-red txtPromoSpn"><?php echo $hdnPromoCode; ?></span> Applied*
                                            </p>    
                                        </div>     
                                        <?php } ?>                                    
                                        <p class="p3 fs-14 txt-grey2 m-0 py-2 d-flex justify-content-between pl-2">
                                            <span class="bold500">Total <span class="fs-11 bold400">(Inclusive of all taxes) :</span></span>
                                            <span class="pr-5 txt-blue spnTotal bold500">$<?php echo ($license_price-$discount_price); ?></span>
                                        </p>
                                    </div>
                                    <div class="quickContact right-boxes quickContactBorder-top mt-5 pl-2 py-3">
                                        <p class="fs-13 txt-black contactList bold400 m-0">Quick Contact</p>
                                        <div class="QuickContactList">
                                            <!-- <div class="whatsapp qContactList text-left pr-2 pl-1">
                                                <a href="https://api.whatsapp.com/send?phone=919511705688" class="text-black3 fs-12 d-flex"><span class="quickContactIMG"></span> <span class="quickContactText">Chat on Whatsapp</span></a>
                                            </div>
                                            <div class="contact1 qContactList text-left pr-2 pl-1">
                                                <a href="tel:+18009610353" class="text-black3 fs-12 d-flex"><span class="quickContactIMG"></span> <span class="quickContactText">+1 800-961-0353</span></a>
                                            </div> -->
                                            <div class="contact2 qContactList text-left pr-2 pl-1">
                                                <a href="tel:+16468786329" class="text-black3 fs-12 d-flex"><span class="quickContactIMG"></span> <span class="quickContactText">+1-646-878-6329</span></a>
                                            </div>
                                            <div class="contact3 qContactList text-left pr-2 pl-1">
                                                <a href="tel:+442038375656" class="text-black3 fs-12 d-flex"><span class="quickContactIMG"></span> <span class="quickContactText">+44 203-837-5656</span></a>
                                            </div>
                                            <div class="contact4 qContactList text-left pr-2 pl-1">
                                                <a href="mailto:sales@persistencemarketresearch.com" class="text-black3 fs-12 d-flex"><span class="quickContactIMG"></span> <span class="quickContactText">Email Us</span></a>
                                            </div>
                                        </div>  
                                    </div>
                                    
                                </div>
                                <div class="fooLinks mb-3">
                                    <p class="text-right p-0 m-0 fs-10">
                                        *Terms & Conditions Apply
                                    </p>
                                    <p class="text-center">
                                        <small>We accept all major credit cards</small>
                                    </p>
                                    <div class="text-center">
                                        <img class="img-fluid mx-auto" src="<?php echo WEBSITE_URL; ?>assets/images/payment-img.png" alt="Payment Option" title="Payment Option" width="446" height="34"  />
                                    </div>
                                    <div class="footerList text-center">
                                        <ul class="list-unstyled list-inline mb-0 mt-4">
                                            <li>
                                                <a href="<?php echo WEBSITE_URL."disclaimer.asp"; ?>" target="_bank" title="Disclaimer">Disclaimer</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo WEBSITE_URL."privacy-policy.asp"; ?>" target="_bank" title="Privacy Policy">Privacy Policy</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo WEBSITE_URL."terms-and-conditions.asp"; ?>" target="_bank" title="Terms and Conditions">Terms and Conditions</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo WEBSITE_URL."return-policy.asp"; ?>" target="_bank" title="Return Policy">Return Policy</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="mb-0 py-2"><small>Copyright © Persistence Market Research</small></p>
                </div>
            </div>
        </div>
    </footer>

    <script src="<?php echo WEBSITE_URL; ?>themes/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo WEBSITE_URL; ?>assets/js/bootstrap.bundle.min.js"></script>
    <script>
            function captchaCode() { var Numb1, Numb2, Numb3, Code; Numb1 = (Math.ceil(Math.random() * 10) - 1).toString(); Numb2 = (Math.ceil(Math.random() * 10) - 1).toString(); Numb3 = (Math.ceil(Math.random() * 10) - 1).toString(); Code = Numb1 + Numb2 + Numb3; $("#captcha span").remove(); $("#captcha input").remove(); $("#captcha").append("<span id='code'>" + Code + "</span><input type='button' onclick='captchaCode();'>"); $(".hdnCaptcha").val(Code); }
            $(function () {
                captchaCode(); $('.sampleForm').submit(function () {
                    var captchaVal = $("#code").text(); var captchaCode = $(".captcha").val(); if (captchaVal == captchaCode) { $(".captcha").css({ "color": "#609D29" }); }
                    else { $(".captcha").css({ "color": "#CE3B46" }); }
                });
            });
            $(".requestform .form-control").on("blur .form-control focus", function() {
            if (this.value) {
                $(this).addClass("active");
            } else {
                $(this).removeClass("active");
            }
        });

        $(".requestform .form-control").on("focus", function() {
            if (this) {
                $(this).addClass("active");
            } else {
                $(this).removeClass("active");
            }
        });

        $(".paymentType").click(function(){
            $(".hdnPaymentType").val(this.value); 
        });

        function validateForm(){

            var flag = true;

            var name = $(".fullname").val();
            var emailId = $(".emailId").val();
            var countryCode = $(".countryCode").val();
            var phoneNo = $(".phoneNo").val();
            var address = $(".company_address").val();
            var city = $(".name_city").val();
            var state = $(".name-state").val();
            var zipcode = $(".name-zipcode").val();
            var captcha = $(".txtCaptcha").val();
            var hdnCaptcha = $(".hdnCaptcha").val();

            $(".nameError").val("");
            $(".emailIdError").val("");
            $(".phoneNoError").val("");
            $(".captchaError").val("");
            $(".addressError").val("");
            $(".cityError").val("");
            $(".stateError").val("");
            $(".zipcodeError").val("");

            var nameformat = /^[a-zA-Z ]{2,30}$/;
            var emailformat = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

            if(emailId == ""){
                flag = false;
                $(".emailIdError").html("* Please Enter Email ID");
            }else if(!emailformat.test(emailId)){
                flag = false;
                $(".emailIdError").html("* Enter Valid Email ID");
            }
    
            if(name == ""){
                flag = false;
                $(".nameError").html("* Please Enter Name");
            }else if(!nameformat.test(name)){
                flag = false;
                $(".nameError").html("* Enter Correct Name");
            }
    
            if(phoneNo == ""){
                flag = false;
                $(".phoneNoError").html("* Please Enter Phone No");
            }

            if(address == ""){
                flag = false;
                $(".addressError").html("* Please Enter Address");
            }

            if(city == ""){
                flag = false;
                $(".cityError").html("* Please Enter City");
            }

            if(state == ""){
                flag = false;
                $(".stateError").html("* Please Enter State");
            }

            if(zipcode == ""){
                flag = false;
                $(".zipcodeError").html("* Please Enter ZipCode");
            }

            if(countryCode == ""){
                flag = false;
                $(".phoneNoError").html("* Enter Valid Phone No");
            }
            
            if(hdnCaptcha != captcha){
                flag = false;
                $(".captchaError").html("* Please Enter Valid Captcha");
            }

            if($(".chkAgree").prop('checked') != true){
                flag = false;
                $(".chkError").html("* Please check our terms and Conditions");
            }
    
            return flag;

        }

        $(document).ready(function(){
          $(".countryCode").change(function(){
              var country_name = $("#country_name").val();
              if(country_name=="Unknown"){
                  var country_html = $(".countryCode option:selected").text();
                  country_html = (country_html.split(" ("))[0];
                  $("#country_name").val(country_html);
              }
          });
      });
    </script>
</body>
</html>

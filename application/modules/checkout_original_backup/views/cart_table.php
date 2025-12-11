<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Purchase Report - <?php echo $report_data[0]['rep_name']; ?></title>
    <meta name="description" content="Purchase report with secured transaction - <?php echo $report_data[0]['rep_name']; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo WEBSITE_URL; ?>themes/image/fevicon-pmr.svg">    
    <meta name="robots" content="NOINDEX">
    <link href="<?php echo WEBSITE_URL; ?>themes/bootstrap4/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo WEBSITE_URL; ?>assets/css/checkout.css" rel="stylesheet" />
</head>
<body>
    <header class="headerBar checkoutHeader">
        <nav class="navbar navbar-default">
            <div class="container d-block">
               <div class="row">
                    <div class="col-md-3 col-sm-2">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="<?php echo WEBSITE_URL; ?>" title="Persistence Market Research">
                                <img class="img-fluid" src="<?php echo WEBSITE_URL; ?>themes/image/pmr-logo.svg" alt="Persistence Market Research" title="Persistence Market Research" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-8">
                        <div id="navbar" class="navbar-collapse checkOutList text-center">
                            <ul class="nav navbar-nav flex-row justify-content-center">
                                <li class="active">
                                    <a href="javascript:void(0)" title="Summary">
                                        <span>Summary</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" title="Register">
                                        <span>Register</span>
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
                    <div class="col-md-3 col-sm-2">
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
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row">
                            <div class="col-md-7 col-sm-6 col-12 reportName">
                                <p class="h4 px-4 mb-4 pt-5">Your Order Details</p>
                                <div class="borderBox p-4 highLightBox">
                                    <p>
                                        <strong>Selected Report:</strong>
                                    </p>
                                    <p><?php echo $report_data[0]['rep_name']; ?></p>
                                </div>
                                <div class="paymentOption pt-4 mb-5">
                                     <p class="mb-0">Report Format Available: PPT, PDF, WORD, EXCEL</p>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-6 col-12">
                            	<form action="" method="POST">
                                    <?php
                                        $name = $this->security->get_csrf_token_name(); 
                                        $hash = $this->security->get_csrf_hash();
                                        $_SESSION[$name] = $hash;
                                    ?>

                                    <input type="hidden" name="<?=$name;?>" value="<?=$hash;?>" /> 
	                                <p class="h4 px-4 mb-4 pt-5">Select License Type</p>
	                                <div class="col-md-12 selectLicenseType">
	                                    <div class="row py-4 bgLicenseType active">
	                                        <div class="col-md-8 col-sm-8 col-8">
	                                            <label class="contRedio">
	                                                Single User License
	                                                <input type="radio" checked="checked" name="radLicense" value="rep_price_sul">
	                                                <span class="checkmark"></span>
	                                            </label>
	                                        </div>
	                                        <div class="col-md-4 col-sm-4 col-4">
	                                            $<?php echo $report_data[0]['rep_price_sul']; ?>
	                                        </div>
	                                    </div>
	                                    <div class="row py-4 bgLicenseType">
	                                        <div class="col-md-8 col-sm-8 col-8">
	                                            <label class="contRedio">
	                                                Multi User License
	                                                <input type="radio" name="radLicense" value="rep_price_el">
	                                                <span class="checkmark"></span>
	                                            </label>
	                                        </div>
	                                        <div class="col-md-4 col-sm-4 col-4">
	                                            $<?php echo $report_data[0]['rep_price_el']!=''&&$report_data[0]['rep_price_el']!=0 ? $report_data[0]['rep_price_el'] : $report_data[0]['rep_price_sul']; ?>
	                                        </div>
	                                    </div>
	                                    <div class="row py-4 bgLicenseType">
	                                        <div class="col-md-8 col-sm-8 col-8">
	                                            <label class="contRedio">
	                                                Corporate License
	                                                <input type="radio" name="radLicense" value="rep_price_cul">
	                                                <span class="checkmark"></span>
	                                            </label>
	                                        </div>
	                                        <div class="col-md-4 col-sm-4 col-4">
	                                            $<?php echo $report_data[0]['rep_price_cul']!=''&&$report_data[0]['rep_price_cul']!=0 ? $report_data[0]['rep_price_cul'] : $report_data[0]['rep_price_sul']; ?>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-12 buyNowSec py-5">
	                                    <button class="btn btnBuyNow" name="proceed_to_register">
	                                        Proceed To Register
	                                    </button>
	                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-0 paymentOption">
            <div class="container">
                <div class="row">
                    <div class="col-12 mt-5">
                        <p class="text-center">
                            <small>We accept all major credit cards</small>
                        </p>
                        <div class="text-center">
                            <img class="img-fluid mx-auto" src="<?php echo WEBSITE_URL; ?>assets/images/payment-img.png" alt="Payment Option" title="Payment Option" width="446" height="34" />
                        </div>
                        <div class="footerList text-center">
                            <ul class="list-unstyled list-inline mb-0 mt-5">
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
    <script src="<?php echo WEBSITE_URL; ?>assets/js/jquery-3.2.1.js"></script>
    <script src="<?php echo WEBSITE_URL; ?>assets/js/bootstrap.min.js"></script>
    <script>
        $(".selectLicenseType .contRedio").click(function () {
            $(".bgLicenseType").removeClass("active");
            $(this).parents(".bgLicenseType").addClass("active");
        });
    </script>
</body>
</html>

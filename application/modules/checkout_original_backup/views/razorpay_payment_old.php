 <?php 
 ///echo "On payment page paypal";
 ///print_r($report_data);
 ?>
 
<?php
 
$txnid              = date("YmdHis");     
$key_id             = "rzp_live_MPXi8bZljnOFdi";
$currency_code      = 'USD';            
$total              = $report_data['rep_amount'] * 100 ; //(1* 100); // 100 = 1 indian rupees
 
$merchant_order_id  = "ABC-".date("YmdHis"); 
 
 
$name               = "Persistance Market Research";
?>
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo WEBSITE_URL; ?>assets/images/favicon.ico">
    <title>Checkout</title>
    <link href="<?php echo WEBSITE_URL; ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo WEBSITE_URL; ?>assets/css/checkout.css" rel="stylesheet" />
</head>
<body>
     <section class="py-0 orderDetailsSec">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-2">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="<?php echo WEBSITE_URL; ?>" title="Persistence Market Research">
                                <img class="img-responsive" src="<?php echo WEBSITE_URL; ?>assets/images/pmr-logo.png" alt="Persistence Market Research" title="Persistence Market Research" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-8">
                        <div id="navbar" class="navbar-collapse collapse checkOutList text-center">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="javascript:void(0)" title="Summary">
                                        <span>Summary</span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="javascript:void(0)" title="Order Confirmation">
                                        <span>Order Confirmation</span>
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
       
    </header>
	 <main>
    	<section class="py-0" style="padding:14px 0px;">
            <div class="container" >
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 registerBorder mt-4">
                        <div class="paypalInfo p-4">
                        <div>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="mb-4 txtBlue">Payment Info</h3>
                                </div>
                                <div class="card-body">
                                    <table class="table paypalInfoTable">
                                      <tbody>
                                        <tr>
                                          <th scope="row">Report Title:</th>
                                          <td>
                                            <p style="margin-bottom: 0px;" class="mb-0"><?php echo $description        = $report_data['rep_name']; ?></p>
                                          </td>
                                        </tr>
                                        <tr>
                                          <th scope="row">Select License Type:</th>
                                          <td>
                                          <p style="margin-bottom: 0px;" class="mb-0"><?php 
                                          if($report_data['license_type']=='S'){
                                          		echo "Single User License";
                                          }else if($report_data['license_type']=='M'){
                                          		echo "Multi-User License";
                                          }else if($report_data['license_type']=="C"){
                                          		echo "Corporate License";
                                          }
                                          ?></p>
                                          </td>
                                        </tr>
                                        <tr>
                                          <th scope="row">Report Price:</th>
                                          <td>
                                          <p style="margin-bottom: 0px;" class="mb-0">$<?php echo $amount  = $report_data['rep_amount']; ?></p>
                                          </td>
                                        </tr>
                                        <tr>
                                          <th scope="row">Name :</th>
                                          <td>
                                          <p style="margin-bottom: 0px;" class="mb-0"><?php echo $card_holder_name = $report_data['cust_name']; ?></p>
                                          </td>
                                        </tr>
                                        <tr>
                                          <th scope="row">Email:</th>
                                          <td>
                                          <p style="margin-bottom: 0px;" class="mb-0"><?php echo $email = $report_data['cust_email']; ?></p>
                                          </td>
                                        </tr>
                                        <tr>
                                          <th scope="row">Contact No:</th>
                                          <td>
                                          <p style="margin-bottom: 0px;" class="mb-0"><?php echo $phone   = $report_data['cust_phone']; ?></p>
                                          </td>
                                        </tr>
                                        <tr>
                                          <th scope="row">Address:</th>
                                          <td>
                                          <p style="margin-bottom: 0px;" class="mb-0"><?php echo $report_data['cust_addr']; ?></p>
                                          </td>
                                        </tr>
                                        <tr>
                                          <th scope="row">Country:</th>
                                          <td>
                                          <p style="margin-bottom: 0px;" class="mb-0"><?php echo $report_data['cust_country']; ?></p>
                                          </td>
                                        </tr>

                                          <form name="razorpay-form" id="razorpay-form" action="<?php echo $callback_url; ?>" method="POST">
        <?php
                                            $CSRFname = $this->security->get_csrf_token_name(); 
                                            $CSRFhash = $this->security->get_csrf_hash();
        ?>
        <input type="hidden" name="<?=$CSRFname;?>" value="<?=$CSRFhash;?>" />
        <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id" />
        <input type="hidden" name="merchant_order_id" id="merchant_order_id" value="<?php echo $merchant_order_id; ?>"/>
        <input type="hidden" name="merchant_trans_id" id="merchant_trans_id" value="<?php echo $txnid; ?>"/>
        <input type="hidden" name="merchant_product_info_id" id="merchant_product_info_id" value="<?php echo $description; ?>"/>
        <input type="hidden" name="merchant_surl_id" id="merchant_surl_id" value="<?php echo $surl; ?>"/>
        <input type="hidden" name="merchant_furl_id" id="merchant_furl_id" value="<?php echo $furl; ?>"/>
        <input type="hidden" name="card_holder_name_id" id="card_holder_name_id" value="<?php echo $card_holder_name; ?>"/>
        <input type="hidden" name="merchant_total" id="merchant_total" value="<?php echo $total; ?>"/>
        <input type="hidden" name="merchant_amount" id="merchant_amount" value="<?php echo $amount; ?>"/>
    </form>
                                      </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        

                            <div class="row" >
                                <div class="col-md-10 mt-4">
                                  <p class="h5 text-center" style="margin-bottom: 15px;">Check Out Here</p>
                                    <button class="h5 text-center btn btnRazorpay btn-block" id="pay-btn" type="submit" onclick="razorpaySubmit(this);" value="Pay Now" style="margin-bottom: 15px;">
                                      <img class="img-responsive Razorpay my-3" src="<?php echo WEBSITE_URL; ?>assets/images/Razorpay-icon.png" alt="Razorpay" title="Razorpay" />
                                    </button>
                                     
                                </div>
                            </div>
                            <input type="hidden" id="purchase_attempt_id"  class="purchase_attempt_id" value="<?php echo $report_data['insert_id']; ?>">
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
	 
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        var options = {
            key:            "<?php echo $key_id; ?>",
            amount:         "<?php echo $total; ?>",
            name:           "<?php echo $name; ?>",
            description:    "Order # <?php echo $merchant_order_id; ?>",
            netbanking:     true,
            currency:       "<?php echo $currency_code; ?>", // INR
            prefill: {
                name:       "<?php echo $card_holder_name; ?>",
                email:      "<?php echo $email; ?>",
                contact:    "<?php echo $phone; ?>"
            },
            notes: {
                soolegal_order_id: "<?php echo $merchant_order_id; ?>",
            },
            handler: function (transaction) {
                alert(transaction.razorpay_payment_id);
                document.getElementById('razorpay_payment_id').value = transaction.razorpay_payment_id;
                document.getElementById('razorpay-form').submit();
            },
            "modal": {
                "ondismiss": function(){
                    location.reload()
                }
            }
        };

        var razorpay_pay_btn, instance;
        function razorpaySubmit(el) {
            if(typeof Razorpay == 'undefined') {
                setTimeout(razorpaySubmit, 200);
                if(!razorpay_pay_btn && el) {
                    razorpay_pay_btn    = el;
                    el.disabled         = true;
                    el.value            = 'Please wait...';  
                }
            } else {
                if(!instance) {
                    instance = new Razorpay(options);
                    if(razorpay_pay_btn) {
                    razorpay_pay_btn.disabled   = false;
                    razorpay_pay_btn.value      = "Pay Now";
                    }
                }
                instance.open();
            }
        }  
    </script>
	  
	</body>
</html>
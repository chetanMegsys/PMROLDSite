 <?php 
 ///echo "On payment page paypal";
 ///print_r($report_data);
 ?>
 
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <title>Purchase Report Via Stripe - <?php echo $report_data['rep_name']; ?></title>
    <meta name="description" content="Purchase report with Stripe - <?php echo $report_data['rep_name']; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo WEBSITE_URL; ?>themes/image/fevicon-pmr.svg">    
    <meta name="robots" content="NOINDEX">
    <link href="<?php echo WEBSITE_URL; ?>themes/bootstrap4/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo WEBSITE_URL; ?>assets/css/checkout.css" rel="stylesheet" />
    <style>
        /* Variables */

form {
  width: 30vw;
  min-width: 500px;
  align-self: center;
  padding-top:20px;
}

.hidden {
  display: none;
}

#payment-message {
  color: rgb(105, 115, 134);
  font-size: 16px;
  line-height: 20px;
  padding-top: 12px;
  text-align: center;
}

#payment-element {
  margin-bottom: 24px;
}

/* Buttons and links */
button {
  background: #5469d4;
  font-family: Arial, sans-serif;
  color: #ffffff;
  border-radius: 4px;
  border: 0;
  padding: 12px 16px;
  font-size: 16px;
  font-weight: 600;
  cursor: pointer;
  display: block;
  transition: all 0.2s ease;
  box-shadow: 0px 4px 5.5px 0px rgba(0, 0, 0, 0.07);
  width: 100%;
}
button:hover {
  filter: contrast(115%);
}
button:disabled {
  opacity: 0.5;
  cursor: default;
}

/* spinner/processing state, errors */
.spinner,
.spinner:before,
.spinner:after {
  border-radius: 50%;
}
.spinner {
  color: #ffffff;
  font-size: 22px;
  text-indent: -99999px;
  margin: 0px auto;
  position: relative;
  width: 20px;
  height: 20px;
  box-shadow: inset 0 0 0 2px;
  -webkit-transform: translateZ(0);
  -ms-transform: translateZ(0);
  transform: translateZ(0);
}
.spinner:before,
.spinner:after {
  position: absolute;
  content: "";
}
.spinner:before {
  width: 10.4px;
  height: 20.4px;
  background: #5469d4;
  border-radius: 20.4px 0 0 20.4px;
  top: -0.2px;
  left: -0.2px;
  -webkit-transform-origin: 10.4px 10.2px;
  transform-origin: 10.4px 10.2px;
  -webkit-animation: loading 2s infinite ease 1.5s;
  animation: loading 2s infinite ease 1.5s;
}
.spinner:after {
  width: 10.4px;
  height: 10.2px;
  background: #5469d4;
  border-radius: 0 10.2px 10.2px 0;
  top: -0.1px;
  left: 10.2px;
  -webkit-transform-origin: 0px 10.2px;
  transform-origin: 0px 10.2px;
  -webkit-animation: loading 2s infinite ease;
  animation: loading 2s infinite ease;
}

@-webkit-keyframes loading {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes loading {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

@media only screen and (max-width: 600px) {
  form {
    width: 80vw;
    min-width: initial;
  }
}
    </style>
</head>
<body>
     <header class="headerBar checkoutHeader">
        <nav class="navbar navbar-default">
            <div class="container d-block">
               <div class="row">
                    <div class="col-md-3 col-sm-2">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="<?php echo WEBSITE_URL; ?>" title="Persistence Market Research">
                                <img class="img-responsive" src="<?php echo WEBSITE_URL; ?>themes/image/pmr-logo.svg" alt="Persistence Market Research" title="Persistence Market Research" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-8 d-flex align-items-center">
                        <div id="navbar" class="navbar-collapse checkOutList text-center">
                            <ul class="nav navbar-nav flex-row justify-content-center">
                                <!-- <li>
                                    <a href="javascript:void(0)" title="Summary">
                                        <span>Summary</span>
                                    </a>
                                </li> -->
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
    	<section class="py-0 orderDetailsSec" style="padding:14px 0px;">
            <div class="container" >
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-12 registerBorder">
                        <div class="paypalInfo p-4">
                        <div>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="fs-18 bold500 mb-0 txtBlue">Payment Info</h3>
                                </div>
                                <div class="card-body py-0">
                                    <table class="table paypalInfoTable">
                                      <tbody>
                                       
                                        <tr>
                                          <th scope="row">Name :</th>
                                          <td>
                                          <p style="margin-bottom: 0px;" class="mb-0"><?php echo $report_data['cust_name']; ?></p>
                                          </td>
                                        </tr>
                                        <tr>
                                          <th scope="row">Email:</th>
                                          <td>
                                          <p style="margin-bottom: 0px;" class="mb-0"><?php echo $report_data['cust_email']; ?></p>
                                          </td>
                                        </tr>
                                        <tr>
                                          <th scope="row">Contact No:</th>
                                          <td>
                                          <p style="margin-bottom: 0px;" class="mb-0"><?php echo $report_data['cust_phone']; ?></p>
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
                                      </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                            <!-- Display a payment form -->
                            <form id="payment-form">
                            
                            <div id="payment-element">
                                <!--Stripe.js injects the Payment Element-->
                            </div>
                            <input type="hidden" id="name" name="cust_name" value="<?php echo $report_data['cust_name'];?>" placeholder="Name">
                            <input type="hidden" id="email" name="email" value="<?php echo $report_data['cust_email'];?>" placeholder="Email">
                            <input type="hidden" id="phone" name="phone" value="<?php echo $report_data['cust_phone'];?>" placeholder="Phone">
                            <input type="hidden" id="product_id" value="<?php echo $report_data['rep_name'];?>" placeholder="Report Name">
                            <input type="hidden" id="amount" value="<?php echo $report_data['rep_amount'];?>" placeholder="Report Price">
                            <button id="submit">
                                <div class="spinner hidden" id="spinner"></div>
                                <span id="button-text">Pay now</span>
                            </button>
                            <div id="payment-message" class="hidden"></div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="orderDetailsDiv p-0 mt-4">
                            <p class="fs-16 txt-black2 mb-1 orderP pl-2">Order Summary</p>
                            <div class="details d-flex pl-2">
                                <div class="detailText">
                                    <p class="fs-16 txt-black1 m-0"><?php echo $report_data['rep_name']; ?></p>
                                    <div class="rDeatils d-flex mt-0">
                                        <p class="m-0 pr-3 fs-11 txt-grey2 d-flex flex-column rborder-right">
                                            
                                            <span>PMRREP<?php echo $report_data['rep_id']; ?></span>
                                        </p>
                                        <?php if(isset($report_data['cat_name']) && $report_data['cat_name'] != '' ) {
                                            ?>
                                                <p class="m-0 pl-3 fs-12 txt-grey2 d-flex flex-column">
                                                   
                                                    <span><?php echo $report_data['cat_name']; ?></span>
                                                </p>
                                            <?php
                                        }?>
                                      
                                    </div>
                                </div>
                            </div>
                            <p class="mb-1 txt-grey2 fs-10  pl-2">Format*: <em>PPT, PDF, EXCEL</em></p>
                            <div class="licenseDetails">
                                
                                <p class="p2 fs-13 txt-grey2 m-0 py-2 d-flex justify-content-between pl-2">
                                    <span class="spnLicense"><?php 
                                          if($report_data['license_type']=='S'){
                                                echo "Single User License";
                                          }else if($report_data['license_type']=='M'){
                                                echo "Multi-User License";
                                          }else if($report_data['license_type']=="C"){
                                                echo "Corporate License";
                                          }
                                          ?></span>
                                    <span class="pr-5 spnPrice">$<?php echo $report_data['rep_amount']; ?></span>
                                </p>                                        
                                <p class="pTotal p3 fs-14 txt-grey2 m-0 py-2 d-flex justify-content-between pl-2">
                                    <span class="bold500">Total <span class="fs-11 bold400">(Inclusive of all taxes) :</span></span>
                                    <span class="pr-5 txt-blue spnTotal bold500">$<?php echo $report_data['rep_amount']; ?></span>
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
                                <img class="img-fluid mx-auto" src="<?php echo WEBSITE_URL; ?>assets/images/payment-img.png" alt="Payment Option" title="Payment Option" width="446" height="34" />
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
    <script src="<?php echo WEBSITE_URL; ?>assets/js/jquery-3.2.1.js"></script>
    <script src="<?php echo WEBSITE_URL; ?>assets/js/bootstrap.min.js"></script>    
    
    <!-- Include the Stripe JavaScript SDK -->
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        // This is your test publishable API key.
        const stripe = Stripe("<?php echo $stripe_p_key;?>");
        // The items the customer wants to buy
        var rep_name = "<?php echo $report_data['rep_name'] ; ?>";
        var cust_name = "<?php echo $report_data['cust_name'] ; ?>";
        var cust_email = "<?php echo $report_data['cust_email'] ; ?>";
        var cust_phone = "<?php echo $report_data['cust_phone'] ; ?>";
        var p_amount = "<?php echo $report_data['rep_amount'] ; ?>";

        let elements;

        const items = [{    id: rep_name,
                            amount: parseInt(p_amount),
                            c_name: cust_name,
                            c_email: cust_email,
                            c_phone: cust_phone,
                        }];

        initialize();
        checkStatus();

        document
        .querySelector("#payment-form")
        .addEventListener("submit", handleSubmit);
        
        // Fetches a payment intent and captures the client secret
        async function initialize() {
        const { clientSecret } = await fetch("<?php echo WEBSITE_URL ; ?>checkout/stripe/stripe_order", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ items }),
        }).then((r) => r.json());

        const appearance = { /* appearance */ };
        elements = stripe.elements({ clientSecret, appearance });
        const paymentElementOptions = {
            layout: "tabs",
            defaultCollapsed: false,
        };

        const paymentElement = elements.create("payment", paymentElementOptions);
        paymentElement.mount("#payment-element");
        }

        async function handleSubmit(e) {
        e.preventDefault();
        setLoading(true);

        const { error } = await stripe.confirmPayment({
            elements,
            billing_details: {
            name: cust_name,
            email: cust_email,
            phone: cust_phone,
          },
            confirmParams: {
            // Make sure to change this to your payment completion page
            return_url: "<?php echo WEBSITE_URL ; ?>checkout/stripe/thanks-stripe",
            receipt_email: cust_email,
            },
        });

        // This point will only be reached if there is an immediate error when
        // confirming the payment. Otherwise, your customer will be redirected to
        // your `return_url`. For some payment methods like iDEAL, your customer will
        // be redirected to an intermediate site first to authorize the payment, then
        // redirected to the `return_url`.
        if (error.type === "card_error" || error.type === "validation_error") {
            showMessage(error.message);
        } else {
            showMessage("An unexpected error occurred.");
        }

        setLoading(false);
        }

        // Fetches the payment intent status after payment submission
        async function checkStatus() {
        const clientSecret = new URLSearchParams(window.location.search).get(
            "payment_intent_client_secret"
        );

        if (!clientSecret) {
            return;
        }

        const { paymentIntent } = await stripe.retrievePaymentIntent(clientSecret);

        switch (paymentIntent.status) {
            case "succeeded":
            showMessage("Payment succeeded!");
            break;
            case "processing":
            showMessage("Your payment is processing.");
            break;
            case "requires_payment_method":
            showMessage("Your payment was not successful, please try again.");
            break;
            default:
            showMessage("Something went wrong.");
            break;
        }
        }

        // ------- UI helpers -------

        function showMessage(messageText) {
        const messageContainer = document.querySelector("#payment-message");

        messageContainer.classList.remove("hidden");
        messageContainer.textContent = messageText;

        setTimeout(function () {
            messageContainer.classList.add("hidden");
            messageContainer.textContent = "";
        }, 4000);
        }

        // Show a spinner on payment submission
        function setLoading(isLoading) {
        if (isLoading) {
            // Disable the button and show a spinner
            document.querySelector("#submit").disabled = true;
            document.querySelector("#spinner").classList.remove("hidden");
            document.querySelector("#button-text").classList.add("hidden");
        } else {
            document.querySelector("#submit").disabled = false;
            document.querySelector("#spinner").classList.add("hidden");
            document.querySelector("#button-text").classList.remove("hidden");
        }
        }
    </script>
	
	</body>
</html>
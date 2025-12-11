 <?php 
 ///echo "On payment page paypal";
 ///print_r($report_data);
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
                    <div class="col-md-8 col-md-offset-2 registerBorder mt-4">
                        <div class="paypalInfo p-4 border-all mb-3">
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
                                            <p style="margin-bottom: 0px;" class="mb-0"><?php echo $report_data['rep_name']; ?></p>
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
                                          <p style="margin-bottom: 0px;" class="mb-0">$<?php echo $report_data['rep_amount']; ?></p>
                                          </td>
                                        </tr>
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
                        

                            <div class="row">
                                <div class="col-md-12 mt-4">
                                    <p class="h5 text-center" style="margin-bottom: 15px;">Check Out Here</p>
                                     
                                </div>

                                <div class="col-md-12 mt-4">
                                    <div style="margin: 0 auto;" id="paypal-button-container"></div>
                                     
                                </div>

                            </div>
                            <input type="hidden" id="purchase_attempt_id"  class="purchase_attempt_id" value="<?php echo $report_data['insert_id']; ?>">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-0 paymentOption">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-12 text-center mt-5">
                        <img class="img-responsive mx-auto" width="587" height="46" src="<?php echo WEBSITE_URL; ?>assets/images/card-icon-img.png" alt="Payment Option" title="Payment Option" />
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
	
	<!-- Include the PayPal JavaScript SDK -
    <script src="https://www.paypal.com/sdk/js?client-id=AYldjK3jwEUX9oJukxZXf56DQSpytogdN26AZyzihcTtWD3JPWqCu_36ufesovtb3qD8wTQwsdUG6Nmc&currency=USD"></script>--->
    <script src="https://www.paypal.com/sdk/js?client-id=ASO78AsyhTDXxcYm1gOmTXRkpxAU_JVnNc-e9Ba7nqbLVdwjOIJ18_P_TqGXcAOCwjch_r9ViUPPNeNT&currency=USD"></script>
 
	  <?php 
	   $amount = array("currency_code" => "USD","value" => "120.00");
         
			$pu = array('amount' => $amount );
			$orderData  = array(
    "intent" => "CAPTURE",
    "purchase_units" => array($pu)
    );
	  
	  ?>
	  <script>
	  let  total_amt = parseFloat(<?php echo $report_data['rep_amount']; ?>);
	    postData = new FormData();
	   postData.append('amount',total_amt);
                postData.append('currency','USD');
				
	  paypal.Buttons({
        // Order is created on the server and the order id is returned
        createOrder: (data, actions) => {
          return fetch("<?php echo WEBSITE_URL ; ?>payment/finalOrder", {
            method: "post",
			 
			body: postData
            // use the "body" param to optionally pass additional order information
            // like product ids or amount
          })
          .then((response) =>  response.json())
          .then((order) =>  order.id)
		  

		   
        },
        // Finalize the transaction on the server after payer approval
        onApprove: (data, actions) => {  
          return fetch('<?php echo WEBSITE_URL ; ?>payment/CapturePaypalOrder2', {
            method: "post",
          })
          .then((response) => response.json())
          .then((orderData) => {
            // Successful capture! For dev/demo purposes:
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            const transaction = orderData.purchase_units[0].payments.captures[0];
			if(transaction.status == 'COMPLETED' ){
				  window.location = '<?php echo WEBSITE_URL ; ?>payment/thankyou';
			}
           // alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
            // When ready to go live, remove the alert and show a success message within this page. For example:
            // const element = document.getElementById('paypal-button-container');
            // element.innerHTML = '<h3>Thank you for your payment!</h3>';
            // Or go to another URL:  actions.redirect('thank_you.html');
          });
        }
      }).render('#paypal-button-container');
	  
	   
    </script>
	  <!-----
	<script>
        paypal.Buttons({
        // Sets up the transaction when a payment button is clicked
        createOrder: (data, actions) => {
			 $.ajax({url: "<?php echo WEBSITE_URL; ?>payment/order_create/", success: function(result){
				 
				 return actions.order.create(JSON.parse(result));
			  }});
  
          
        },
        // Finalize the transaction after payer approval
        onApprove: (data, actions) => {
          return actions.order.capture().then(function(orderData) {
            // Successful capture! For dev/demo purposes:
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            const transaction = orderData.purchase_units[0].payments.captures[0];
            alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
            // When ready to go live, remove the alert and show a success message within this page. For example:
            // const element = document.getElementById('paypal-button-container');
            // element.innerHTML = '<h3>Thank you for your payment!</h3>';
            // Or go to another URL:  actions.redirect('thank_you.html');
          });
        }
      }).render('#paypal-button-container');
    </script>
	----->
	<!----- <script>
	 var parameters = { "user" : "me!" };
      paypal.Buttons({
        // Order is created on the server and the order id is returned
        createOrder: (data, actions) => {
          return fetch("<?php echo WEBSITE_URL; ?>payment/order_create/", {
            method: "post",
			 
        },
            // use the "body" param to optionally pass additional order information 
            // like product ids or amount
			
			 
          })
		  
           .then((response) => response.json())
          .then((order) => order.id);
		  
        },
        // Finalize the transaction on the server after payer approval
        
		 
		onApprove: (data, actions) => {
          return fetch('<?php echo WEBSITE_URL; ?>payment/Lastorders/${data.orderID}/capture', {
            method: "post",
          })
          .then((response) => response.json())
          .then((orderData) => {
            // Successful capture! For dev/demo purposes:
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            const transaction = orderData.purchase_units[0].payments.captures[0];
            alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
            // When ready to go live, remove the alert and show a success message within this page. For example:
            // const element = document.getElementById('paypal-button-container');
            // element.innerHTML = '<h3>Thank you for your payment!</h3>';
            // Or go to another URL:  actions.redirect('thank_you.html');
          });
        }

      }).render('#paypal-button-container');
    </script>  ------>
	<!-----03 
	<script>
        paypal.Buttons({
        // Sets up the transaction when a payment button is clicked
        createOrder: (data, actions) => {
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: '77.44' // Can also reference a variable or function
              }
            }]
          });
        },
        // Finalize the transaction after payer approval
        onApprove: (data, actions) => {
          return actions.order.capture().then(function(orderData) {
            // Successful capture! For dev/demo purposes:
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            const transaction = orderData.purchase_units[0].payments.captures[0];
            alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
            // When ready to go live, remove the alert and show a success message within this page. For example:
            // const element = document.getElementById('paypal-button-container');
            // element.innerHTML = '<h3>Thank you for your payment!</h3>';
            // Or go to another URL:  actions.redirect('thank_you.html');
          });
        }
      }).render('#paypal-button-container');
    </script>
	
	<!----01
	<script>
      paypal.Buttons({
        // Sets up the transaction when a payment button is clicked
        createOrder: (data, actions) => {
          return actions.order.create('<?php echo json_encode($resultArray);?>');
        },
        // Finalize the transaction after payer approval
        onApprove: (data, actions) => {
          return actions.order.capture().then(function(orderData) {
            // Successful capture! For dev/demo purposes:
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            const transaction = orderData.purchase_units[0].payments.captures[0];
            alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
            // When ready to go live, remove the alert and show a success message within this page. For example:
            // const element = document.getElementById('paypal-button-container');
            // element.innerHTML = '<h3>Thank you for your payment!</h3>';
            // Or go to another URL:  actions.redirect('thank_you.html');
          });
        }
      }).render('#paypal-button-container');
    </script>
	----->
	</body>
</html>
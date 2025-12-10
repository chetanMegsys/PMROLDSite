<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Payment extends MY_Controller{

        public function __construct(){
            $this->load->model("payment_model");
        }

        public function cart_table($id){
	 
                $data = array();
                $cust_phone = "";

                if(isset($_POST['btnCheckout'])){
					//print_r($_POST); exit();
                        $paymentType = $_POST['paymentType'];

                        if(isset($_POST['fullname']) && $_POST['fullname'] != ''){
                                $data["cust_name"] = $_POST['fullname'];
                        }else{
                                $data["errorFlag"]['fullname'] = "Please Enter Name";
                        }

                        if(isset($_POST['emailId']) && $_POST['emailId'] != ''){
                                $data["cust_email"] = $_POST['emailId'];
                        }else{
                                $data["errorFlag"]['emailId'] = "Please Enter Email";
                        }

                        if(isset($_POST['phoneNo']) && $_POST['phoneNo'] != ''){
                                $data["countryCode"] =  $_POST['countryCode'];
                                $data["cust_country_code"] =  $_POST['cust_country_code'];
                                $data["cust_phone"] =   $_POST['phoneNo'];
                                $cust_phone = $_POST['phoneNo'];
                        }else{
                                $data["errorFlag"]['phoneNo'] = "Please Enter Phone No";
                        }

                        if(isset($_POST['company_address']) && $_POST['company_address'] != ''){
                                $data["cust_addr"] = $_POST['company_address'];
                        }else{
                                $data["errorFlag"]['company_address'] = "Please Enter Address";
                        }

                        if(isset($_POST['name_city']) && $_POST['name_city'] != ''){
                                $data["cust_city"] = $_POST['name_city'];
                        }else{
                                $data["errorFlag"]['name_city'] = "Please Enter City";
                        }

                        if(isset($_POST['name-state']) && $_POST['name-state'] != ''){
                                $data["cust_state"] = $_POST['name-state'];
                        }else{
                                $data["errorFlag"]['name-state'] = "Please Enter State";
                        }

                        if(isset($_POST['country']) && $_POST['country'] != ''){
                                $data["cust_country"] = $_POST['country'];
                        }

                        if(isset($_POST['name-zipcode']) && $_POST['name-zipcode'] != ''){
                                $data["cust_zipcode"] = $_POST['name-zipcode'];
                        }else{
                                $data["errorFlag"]['name-zipcode'] = "Please Enter Zipcode";
                        }

                        $result = "";
                        if(!isset($data["errorFlag"])){
                                $data['license_type'] = $_POST['licenseType'];
                                $data['rep_id'] = $id;
                                $data['datetime'] = date("Y-m-d H:i:s");

                                $licenseField = '';
                                if($_POST['licenseType']=='S'){
                                        $licenseField = 'rep_price_sul';
                                }elseif($_POST['licenseType']=='M'){
                                        $licenseField = 'rep_price_el';
                                }elseif($_POST['licenseType']=='C'){
                                        $licenseField = 'rep_price_cul';
                                }

                                $getData = $this->payment_model->getReportPrice($id,$licenseField);
                                $data['rep_amount'] = $getData[0]['rep_price'];
                                $data['rep_name'] = $rep_name = $getData[0]['rep_name'];

                                $GetID = $this->payment_model->insertData($data);
								$insert_id = $this->db->insert_id();
                                if($GetID > 0){
										$data['insert_id'] = $insert_id;										 
										$_SESSION['paypal_insert_id'] = $insert_id;
										$_SESSION['rep_name'] = $rep_name;
										$_SESSION['rep_id'] = $id;
										
                                        $getData['reportData'] = $this->payment_model->getReportById($id);
                                        $emailData = $this->payment_model->GetEmailDetails(2);
										$data['rep_name'] = $getData['reportData'][0]['rep_name'];
                                        $email_setting['name'] = $data['cust_name'];
                                        $email_setting['country'] = $data['cust_country'];
                                        $email_setting['email'] = $data['cust_email'];
                                        $email_setting['phone'] =  "(".$data["countryCode"].")".$data['cust_phone'];
                                        $email_setting['address'] = $data['cust_addr'];
                                        $email_setting['report'] = $getData['reportData'][0]['rep_name'];
                                        $email_setting['report_type'] = $getData['reportData'][0]['rep_type']=='N' ? 'Published Report' : 'Ongoing Report';
                                        $email_setting['category'] = $getData['reportData'][0]['cat_name'];
                                        $email_setting['city'] = $data['cust_city'];
                                        $email_setting['state'] = $data['cust_state'];
                                        $email_setting['zipcode'] = $data['cust_zipcode'];
                                        $email_setting['email_to'] = $emailData->email_to;
                                        // $email_setting['email_to'] = "ikram@eminentadvisors.com";
                                        $email_setting['price'] = $getData[0]['rep_price'];
                                        $email_setting['subject'] = "Purchase Attempt By ".$paymentType;
                                        $email_setting['source'] = "Direct Purchase";
                                        //$this->lib_mails->LibDPMail($email_setting, $paymentType);

                                        if($paymentType=='PayPal'){
										$_SESSION['paypal_amount'] = $getData[0]['rep_price'] ;
										$_SESSION['paypal_insert_id'] = $insert_id;
										///$paypal_data = array("paypal_amount" =>  $getData[0]['rep_price'] , "paypal_insert_id" => $insert_id  );
                                              ///  $this->session->set_userdata($paypal_data);
												// echo "Enter in paypal view page"; exit();
												$data['report_data'] =  $data;
												//print_r($report_data);
												//print_r($this->session->userdata);
												$this->load->view('payment/paypal_payment',$data); 
												 
                        
						
												 
												
                                        }elseif($paymentType=='CCAvenue'){
                                                $query = array(); 
                                                $query['tid'] = time();
                                                $transId = $this->payment_model->InsertCCAveEntry($GetID,$query['tid'],$id,$data['rep_amount']);
                                                if($transId > 0){  
                                                        $query['merchant_id'] = '115678'; 
                                                        $query['access_code'] = 'AVBA67DK93BS08ABSB'; 
                                                        $this->nativesession->set('CCAVENUE_TRANS_ID', $transId);
                                                        $query['order_id'] = $transId;
                                                        $query['amount'] = $getData[0]['rep_price'];
                                                                        //$query['amount'] = 1;
                                                        $query['currency'] = 'USD';
                                                        $query['redirect_url'] = 'https://www.persistencemarketresearch.com/ccavenue_pay/ccavResponseHandler.php';
                                                        $query['cancel_url'] = 'https://www.persistencemarketresearch.com/ccavenue_pay/ccavResponseHandler.php';
                                                        $query['language'] = 'EN';
                                                        //User Information
                                                        $query['billing_name'] = $data["cust_name"];
                                                        $query['billing_address'] = $data["cust_addr"];
                                                        $query['billing_city'] = $data["cust_city"];
                                                        $query['billing_state'] = $data["cust_state"];
                                                        $query['billing_zip'] = $data["cust_zipcode"];
                                                        $query['billing_country'] = 'India';
                                                        $query['billing_tel'] = $cust_phone;
                                                        $query['billing_email'] = $data["cust_email"];

                                                        $query['merchant_param1']       = 'additional Info.' ;
                                                        $query['merchant_param2']       = 'additional Info.' ;
                                                        $query['merchant_param3']       = 'additional Info.' ;
                                                        $query['merchant_param4']       = 'additional Info.' ;
                                                        $query['merchant_param5']       = 'additional Info.' ;
                                                        $query['promo_code']            = '' ;
                                                        $query['customer_identifier'] = '' ;
                                                        $query['integration_type']      = 'iframe_normal';

                                                        $query_string = http_build_query($query);

                                                        header('Location: https://www.persistencemarketresearch.com/ccavenue_pay/ccavRequestHandler.php?' . $query_string);
                                                }
                                        }
                                }

                        }else{
                                header("Location:".WEBSITE_URL."payment/".$id);
                        }
                }elseif(isset($_POST['proceed_to_register']) || isset($data["errorFlag"]) || !empty($data["errorFlag"])){
                        $data = array();
                        $radLicense = $_POST['radLicense'];
                        if($radLicense=='rep_price_sul'){
                                $data['licenseType'] = 'S';
                        }elseif($radLicense=='rep_price_el'){
                                $data['licenseType'] = 'M';
                        }elseif($radLicense=='rep_price_cul'){
                                $data['licenseType'] = 'C';
                        }
                        $data['report_data'] = $this->payment_model->getReportDataForCheckoutForm($id,$radLicense);
                        $this->load->view("payment_form",$data);
                }else{
                        $data['report_data'] = $this->payment_model->getReportData($id);
                        $detect = new Mobile_Detect();
                        if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                            $this->load->view("cart_table_mobile",$data);
                        }else{
                            $this->load->view("cart_table",$data);
                        }
                }
        }

        public function purchase_status(){
                $this->load->view("purchase_status");
        }
		public function generateAccessToken()
		{
			$PAYPAL_CLIENT_ID = 'AYldjK3jwEUX9oJukxZXf56DQSpytogdN26AZyzihcTtWD3JPWqCu_36ufesovtb3qD8wTQwsdUG6Nmc';
			$PAYPAL_SECRET = 'EOziFCXuliap7rBd_7yfCV3-EBctnEMpYqZuxgqxPiBAa1S-hFrsK_OhSuE_S7CChWJGIYThodvEitUH' ;
			
			 $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.sandbox.paypal.com/v1/oauth2/token",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_USERPWD => $PAYPAL_CLIENT_ID.":".$PAYPAL_SECRET,
    CURLOPT_POSTFIELDS => "grant_type=client_credentials",
    CURLOPT_HTTPHEADER => array(
    "Accept: application/json",
    "Accept-Language: en_US"
    ),
    ));

    $result= curl_exec($curl);

    $array=json_decode($result, true); 
    $token=$array['access_token'];

    echo "<pre>";
    print_r($array);
		}
		
		public function order_create()
		{
			echo "<pre>";
			echo "<br/>--------------------------------------------------------------------------------------<br/>";
			echo "<br/>1. API - generate token";
			
			echo "<br/>PAYPAL CLIENT ID - " . 
			$PAYPAL_CLIENT_ID = 'AYldjK3jwEUX9oJukxZXf56DQSpytogdN26AZyzihcTtWD3JPWqCu_36ufesovtb3qD8wTQwsdUG6Nmc';
			echo "<br/> PAYPAL SECREAT ID - ".
			$PAYPAL_SECRET = 'EOziFCXuliap7rBd_7yfCV3-EBctnEMpYqZuxgqxPiBAa1S-hFrsK_OhSuE_S7CChWJGIYThodvEitUH' ;
		//	echo "<br/> URL  - https://api.sandbox.paypal.com/v1/oauth2/token";
			 $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.sandbox.paypal.com/v1/oauth2/token",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_USERPWD => $PAYPAL_CLIENT_ID.":".$PAYPAL_SECRET,
    CURLOPT_POSTFIELDS => "grant_type=client_credentials",
    CURLOPT_HTTPHEADER => array(
    "Accept: application/json",
    "Accept-Language: en_US"
    ),
    ));

    $result= curl_exec($curl);

    $array=json_decode($result, true); 
	$_SESSION['token'] =  $token=$array['access_token'];

    
	print_r($array);
	
	echo "<br/>--------------------------------------------------------------------------------------<br/>";
	echo "<br/> 2  Order Created API <br/>";
	$orderResult1 =  $this->getCreateDemoOrder($token);
	$orderResult =json_decode($orderResult1, true); 
	print_r($orderResult);
	echo $riskId =  $orderResult['id'];
	echo "<br/>Order Link<br/>";
	echo $captureLink1 = $orderResult['links'][0]['href'];
	echo "<br/>Approve Link<br/>";
	echo $captureLink2 = $orderResult['links'][1]['href'];
	echo "<br/>Update Link<br/>";
	echo $captureLink3 = $orderResult['links'][2]['href'];
	echo "<br/>Capture Link<br/>";
	echo $captureLink4 = $orderResult['links'][3]['href'];	


	

echo "<br/>--------------------------------------------------------------------------------------<br/>";


echo "<br/>--------------------------------------------------------------------------------------<br/>";

echo "<br/><br/><br/> 3 API Pass the Unique Session Identifier as the Tracking_ID <br/>";
echo "<br/>unique id - ".time();
echo "<br/>token  number - ".$token;

echo '<br/>https://api-m.sandbox.paypal.com/v1/risk/transaction-contexts/RY6YX5AUDPULY/'.time();

$url = "https://api-m.sandbox.paypal.com/v1/risk/transaction-contexts/RY6YX5AUDPULY/".time();
 
 echo "<br/><br/>";
    //     
	$pu1 = array('key' => "sender_account_id","value" => "RY6YX5AUDPULY" );
	$pu2 = array('key' => "sender_first_name","value" => "Paresh" );
	$pu3 = array('key' => "sender_last_name","value" => "Kadam" );
	$pu4 = array('key' => "sender_email","value" => "kdm_prsh@yahoo.com" );
	$pu5 = array('key' => "sender_phone","value" => "9222106343" );
	$pu6 = array('key' => "sender_country_code","value" => "GB" );
			$data  = array("tracking_id" => time() , "additional_data" => array($pu1,$pu2,$pu3,$pu4,$pu5,$pu6));
	
	 echo  $data = json_encode($data);

  echo "<br/><br/>";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Content-Type: application/json",
   "Authorization: Bearer ".$token,
);

 echo   json_encode($headers);
 echo "<br/><br/>";
 curl_setopt($curl, CURLOPT_HEADER, true); 
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
 

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
echo "my code is - ". $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
curl_close($curl);
//var_dump($resp);
 
//echo json_decode($headers, true);   
 
$array2=json_decode($resp, true);   

//echo "<pre>";
//print_r($array2);
echo "<br/> END  Unique Session Identifier as the Tracking_ID <br/>";



	echo "<br/> 4 Approve API <br/>";
	$approveResult =  $this->approvePaypalOrder($token,$captureLink2);
	$approveResults = json_decode($approveResult, true); 
	print_r($approveResults);
	
	
	
	echo "<br/>--------------------------------------------------------------------------------------<br/>";
	
	echo "<br/> Capture API <br/>";
	$captureResult =  $this->CapturePaypalOrder($token,$captureLink2);
	$captureResults = json_decode($captureResult, true); 
	print_r($captureResults);
	
	
		
				/***** {
         "purchase_units": [{
            "amount": {
              "currency_code": "USD",
              "value": "100",
              "breakdown": {
                "item_total": {   
                  "currency_code": "USD",
                  "value": "100"
                }
              }
            },
            "items": [
              {
                "name": "First Product Name",  
                "description": "Optional descriptive text..",  
                "unit_amount": {
                  "currency_code": "USD",
                  "value": "50"
                },
                "quantity": "2"
              },
            ]
          }]
      }*/
	  $unit_amount = array("currency_code" => "USD",
                  "value"  => "100");
	  $data3 = array( "name" =>  "First Product Name",  
                "description" =>  "Optional descriptive text..",  "unit_amount" => $unit_amount  ,"quantity" => "2");
	  $data2 = array('currency_code' => "USD" , "value" => "100" );
	  $data1 = array('amount'=>$data2 ,'items' => array($data3) );
	      $order = array('purchase_units' => array($data1));
	  ///echo json_encode($order);
	  //return $order;
			//	return $_SESSION['paypal_insert_id'];
			//	echo "<script>console.log('Debug Objects order created: " . print_r($_SESSION) . "' );</script>";
		}
		
		public function Lastorders()
		{
			 
			return $_SESSION['paypal_insert_id'];
			//echo "<script>console.log('Debug Objects get order from server: " . print_r($_SESSION) . "' );</script>";
		}
		
		public function getCreateDemoOrder($token)
		{
			
			/*$PAYPAL_CLIENT_ID = 'AYldjK3jwEUX9oJukxZXf56DQSpytogdN26AZyzihcTtWD3JPWqCu_36ufesovtb3qD8wTQwsdUG6Nmc';
			$PAYPAL_SECRET = 'EOziFCXuliap7rBd_7yfCV3-EBctnEMpYqZuxgqxPiBAa1S-hFrsK_OhSuE_S7CChWJGIYThodvEitUH' ;
			
			 $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.sandbox.paypal.com/v1/oauth2/token",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_USERPWD => $PAYPAL_CLIENT_ID.":".$PAYPAL_SECRET,
    CURLOPT_POSTFIELDS => "grant_type=client_credentials",
    CURLOPT_HTTPHEADER => array(
    "Accept: application/json",
    "Accept-Language: en_US"
    ),
    ));

    $result1= curl_exec($curl);

    $array1=json_decode($result1, true); 
   echo $token=$array1['access_token'];
	echo "<pre>";
    print_r($array1);
	
	
	
	echo "<br/>2.........................................";
	
	 
         
			$pu1 = array('key' => 'test', "value": "abc");
			$pu2 = array('key' => 'test2', "value": "a234234bc");
			$datas  = array("additional_data" => array($pu1,$pu2));
echo  $data2 = json_encode($datas);

	 
// Create a new cURL resource
$ch2 = curl_init('https://api-m.sandbox.paypal.com/v1/risk/transaction-contexts/PDKVC7GKMTGES/234');
 

// Attach encoded JSON string to the POST fields
curl_setopt($ch2, CURLOPT_POSTFIELDS, $data2);

// Set the content type to application/json
curl_setopt($ch2, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization: Bearer $token'));

// Return response instead of outputting
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);

// Execute the POST request
$result2 = curl_exec($ch2);
 
    $array2=json_decode($result2, true); 
   

    echo "<pre>";
    print_r($array2);
	
	
	echo "<br/>3.........................................";*/
	
			$amount = array("currency_code" => "USD","value" => "1.00");
         
			$pu = array('amount' => $amount );
			$orderData  = array(
    "intent" => "CAPTURE",
    "purchase_units" => array($pu)
    );
	
	  $ordersjson = json_encode($orderData);
   $ordersjson = '{
  "intent": "CAPTURE",
  "purchase_units": [
    {
      "reference_id": "REFID-000-1001",
      "amount": {
        "currency_code": "CAD",
        "value": "10.00"
      },
      "payee": {
        "email_address": " "
      },
      "payment_instruction": {
        "platform_fees": [
          {
            "amount": {
              "currency_code": "CAD",
              "value": "1.00"
            },
            "payee": {
              "email_address": " "
            }
          }
        ],
        "disbursement_mode": "INSTANT",
        "payee_pricing_tier_id": ""
      }
    }
  ]
   
}';
//echo "2 API - create order --------------------------- <br/>";
  $urls = 'https://api.sandbox.paypal.com/v2/checkout/orders';
//echo "<br/>";
echo json_encode($orderData);
//echo $ordersjson;
$header = array('Content-Type:application/json','Authorization: Bearer '.$token,'PayPal-Request-Id: '.time());
//echo json_encode($header);
// Create a new cURL resource
$ch3 = curl_init($urls);
 

// Attach encoded JSON string to the POST fields
curl_setopt($ch3, CURLOPT_POSTFIELDS, json_encode($orderData));
//curl_setopt($ch3, CURLOPT_POSTFIELDS, $ordersjson);

// Set the content type to application/json
curl_setopt($ch3, CURLOPT_HTTPHEADER, $header);

// Return response instead of outputting
curl_setopt($ch3, CURLOPT_RETURNTRANSFER, true);

// Execute the POST request
return $result3 = curl_exec($ch3);
 
     $array3=json_decode($result3, true); 
   

  //  echo "<pre>";
   // print_r($array3);
	 
     $id=$array3['id'];
		}
		
		public function transactionBatch()
		{
			
// Create a new cURL resource
$ch3 = curl_init('https://api-m.sandbox.paypal.com/v1/shipping/trackers-batch');
 

// Attach encoded JSON string to the POST fields
curl_setopt($ch3, CURLOPT_POSTFIELDS, $ordersjson);

// Set the content type to application/json
curl_setopt($ch3, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization: Bearer A21AAIpLYAUogXlFIPjsC6oLwk1JfNU9T9TAtcCvjSgNcgXk0ru7pVtrExI-SZkADklREKUQVcs0GykqCzLfr1hNKou15VosA'));

// Return response instead of outputting
curl_setopt($ch3, CURLOPT_RETURNTRANSFER, true);

// Execute the POST request
$result3 = curl_exec($ch3);
 
    $array3=json_decode($result3, true); 
   

    echo "<pre>";
    print_r($array3);
		}
		
		public function finalOrder()
		{
		$PAYPAL_CLIENT_ID = 'ASO78AsyhTDXxcYm1gOmTXRkpxAU_JVnNc-e9Ba7nqbLVdwjOIJ18_P_TqGXcAOCwjch_r9ViUPPNeNT'; ///'AVOnXDgxNkpHajW7aE5scPKpmmnPC4q6a2zhwZmyLNHZ3f9pFRf9CWa8ywdXmybvBrz5Z71gt0RvvdCh';
		//			echo "<br/> PAYPAL SECREAT ID - ".
		$PAYPAL_SECRET = 'EIwMyVotwvUZwrn_j7DO9IEAYxfkH0jw935ftrk32wMv02d7PC7IFINPiJ7aA5L9_IB0Xbx2qrcVDxus' ; ///'EJHZhUdp86fXiFPlZqtLlJKcOImBFxoA0XV8LJ5t3sAc9LzNh2D0Soi3SYH51JFrDqbVEVfeP6gwFnqE' ;
		//	echo "<br/> URL  - https://api.sandbox.paypal.com/v1/oauth2/token";
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => "https://api.paypal.com/v1/oauth2/token",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_USERPWD => $PAYPAL_CLIENT_ID.":".$PAYPAL_SECRET,
		CURLOPT_POSTFIELDS => "grant_type=client_credentials",
		CURLOPT_HTTPHEADER => array(
		"Accept: application/json",
		"Accept-Language: en_US"
		),
		));

		$result= curl_exec($curl);
		//$csrf_name = $this->security->get_csrf_token_name(); 
		//$csrf_value = $this->security->get_csrf_hash()
		//$result['csrf_name'] = $csrf_name; 
		//$result['csrf_value'] = $csrf_value;  
			
		$array=json_decode($result, true); 
		$_SESSION['token'] = $token=$array['access_token'];

		$this->PayPalLogs($order_id = $_SESSION['paypal_insert_id'] ,$api_name = 'outh' ,$rep_id = $_SESSION['rep_id'],$api_header="" , $api_request=$PAYPAL_CLIENT_ID.":".$PAYPAL_SECRET,$api_response = $result);
		


//get the order details here 
$rowdata = $this->payment_model->getOrderDetails($_SESSION['paypal_insert_id']);
 
$headersRisk = array("Content-Type: application/json","Authorization: Bearer ".$token);
$pu1 = array('key' => "sender_account_id","value" => $rowdata[0]['id']  );
$pu2 = array('key' => "sender_first_name","value" => $rowdata[0]['cust_name'] );
$pu3 = array('key' => "sender_last_name","value" => $rowdata[0]['cust_name']  );
$pu4 = array('key' => "sender_email","value" =>  $rowdata[0]['cust_email'] );
$pu5 = array('key' => "sender_phone","value" =>  $rowdata[0]['cust_phone'] );
$pu6 = array('key' => "sender_country_code","value" => $rowdata[0]['countryCode'] );
$datarisk  = array("tracking_id" => $_SESSION['paypal_insert_id'] , "additional_data" => array($pu1,$pu2,$pu3,$pu4,$pu5,$pu6));
//$datarisks = json_encode($datarisk);
//CURLOPT_URL => "https://api-m.paypal.com/v1/risk/transaction-contexts/RY6YX5AUDPULY/".$_SESSION['paypal_insert_id'],
 $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api-m.paypal.com/v1/risk/transaction-contexts/PDKVC7GKMTGES/".$_SESSION['paypal_insert_id'],
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "PUT",
  CURLOPT_POSTFIELDS => json_encode($datarisk),
  CURLOPT_HTTPHEADER =>  $headersRisk,
));

$response = curl_exec($curl);
$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

$this->PayPalLogs($order_id = $_SESSION['paypal_insert_id'] ,$api_name = 'risk' ,$rep_id = $_SESSION['rep_id'],$api_header = json_encode($headersRisk) ,$api_request=json_encode($datarisk),$api_response = $httpcode);
	
	$softdescription  = "PMR_".$rowdata[0]['rep_id'];
	
		/*if(strlen($rowdata[0]['cust_name'].'_PMR_'.$rowdata[0]['rep_id']) < 30 ){
			
			 $softdescription = $rowdata[0]['cust_name'].'_PMR_'.$rowdata[0]['rep_id']  ;
		}
		else{
			$softdescription = substr($rowdata[0]['cust_name'].'_PMR_'.$rowdata[0]['rep_id'],0,25) ;
		}*/

// print_r($array);
		/*** working code 
		$amount = array("currency_code" => "USD","value" => $_SESSION['paypal_amount']);

		$pu = array('amount' => $amount );
		$order  = array(
		"intent" => "CAPTURE",
		"purchase_units" => array($pu)
		);
		***/
		 $order = array (
  'intent' => 'CAPTURE',
  'application_context' => 
  array (
    'brand_name' => $rowdata[0]['rep_name'],
    'locale' => 'en-US',
    'shipping_preference' => 'NO_SHIPPING',
    'user_action' => 'PAY_NOW',
    'return_url' => WEBSITE_URL.'payment/'.$rowdata[0]['rep_id'],
    'cancel_url' => WEBSITE_URL,
    'payment_method' => 
    array (
      'payer_selected' => 'PAYPAL',
      'payee_preferred' => 'IMMEDIATE_PAYMENT_REQUIRED',
    ),
  ),
  'payer' => 
  array (
    'name' => 
    array (
      'given_name' =>  $rowdata[0]['cust_name'],
      'surname' =>  $rowdata[0]['cust_name'],
    ),
    'email_address' =>  $rowdata[0]['cust_email'],
    'phone' => 
    array (
      'phone_number' => 
      array (
        'national_number' => $rowdata[0]['cust_phone'],
      ),
    ),
  ),
  'purchase_units' => 
  array (
    0 => 
    array (
      'amount' => 
      array (
        'currency_code' => 'USD',
        'value' => $_SESSION['paypal_amount'],
        'breakdown' => 
        array (
          'item_total' => 
          array (
            'currency_code' => 'USD',
            'value' => $_SESSION['paypal_amount'],
          ),
          'handling' => 
          array (
            'currency_code' => 'USD',
            'value' => '0.00',
          ),
          'tax_total' => 
          array (
            'currency_code' => 'USD',
            'value' => '0.00',
          ),
        ),
      ),
      'items' => 
      array (
        0 => 
        array (
          'name' => $rowdata[0]['rep_name'],
          'description' => $rowdata[0]['rep_name'],
          'quantity' => '1',
          'unit_amount' => 
          array (
            'currency_code' => 'USD',
            'value' => $_SESSION['paypal_amount'],
          ),
          'category' => 'DIGITAL_GOODS',
        )
      ),
      'soft_descriptor' => $softdescription,
      'custom_id' => $rowdata[0]['id'],
      'invoice_id' => $_SESSION['paypal_insert_id'],
    ),
  ),
);
		//echo "2 API - create order --------------------------- <br/>";
		$urls = 'https://api.paypal.com/v2/checkout/orders';
		//echo "<br/>";
		//echo json_encode($orderData);
		//echo $ordersjson;
		$header = array('Content-Type:application/json','Authorization: Bearer '.$token,'PayPal-Request-Id: '.$_SESSION['paypal_insert_id'],'PayPal-Client-Metadata-Id: '.$_SESSION['paypal_insert_id']);
		//echo json_encode($header);
		// Create a new cURL resource
		$ch3 = curl_init($urls);


		// Attach encoded JSON string to the POST fields
		curl_setopt($ch3, CURLOPT_POSTFIELDS, json_encode($order));
		//curl_setopt($ch3, CURLOPT_POSTFIELDS, $ordersjson);

		// Set the content type to application/json
		curl_setopt($ch3, CURLOPT_HTTPHEADER, $header);

		// Return response instead of outputting
		curl_setopt($ch3, CURLOPT_RETURNTRANSFER, true);

		// Execute the POST request
		$result3 = curl_exec($ch3);

		//here return all result but we taken order id in session so next step complete by this id
		$array3=json_decode($result3, true);
		$_SESSION['order_id'] =$array3['id'];
		
		echo $result3;
		
$this->PayPalLogs($order_id = $_SESSION['paypal_insert_id'] ,$api_name = 'order' ,$rep_id = $_SESSION['rep_id'],$api_header = json_encode($header),$api_request= json_encode($order) ,$api_response = $result3);
		
		
		

		//$arrayCreated = array(	"order" => array("id" => $id));
		//json_decode($arrayCreated, true);
		//  echo "<pre>";
		// print_r($array3);

		// return $id=$array3['id'];
		}
		
		public function getOrderDetails()
		{
			
			
		$urls = 'https://api.sandbox.paypal.com/v2/checkout/orders/34Y07152AN986812V';
		echo "<pre>";
		//echo json_encode($orderData);
		//echo $ordersjson;
		$header = array('Content-Type:application/json','Authorization: Bearer A21AAIB8uzUhZvQGwW5QyXaysH1KV7QuY-mmLJcTIYdT0JcZVGQP3LFWaX1YgmM7B_Olf2_1HgWipYvaRLGwvo3AhprlnHrLQ');
		//echo json_encode($header);
		// Create a new cURL resource
		$ch3 = curl_init($urls);


		// Attach encoded JSON string to the POST fields
		///curl_setopt($ch3, CURLOPT_POSTFIELDS, json_encode($orderData = array('34Y07152AN986812V')));
		//curl_setopt($ch3, CURLOPT_POSTFIELDS, $ordersjson);

		// Set the content type to application/json
		curl_setopt($ch3, CURLOPT_HTTPHEADER, $header);

		// Return response instead of outputting
		curl_setopt($ch3, CURLOPT_RETURNTRANSFER, true);

		// Execute the POST request
		$result3 = curl_exec($ch3);

		$array3=json_decode($result3, true);
		print_r($array3);
		}
		
		
		public function approvePaypalOrder($token,$urls)
		{
// echo "<pre>";
//echo "2 API - Approve order --------------------------- <br/>";
//$urls = 'https://www.sandbox.paypal.com/checkoutnow?token=3DT0847399934560K';
//echo "<br/>";
//echo json_encode($orderData);
//echo $ordersjson;
$header = array('Content-Type:application/json','Authorization: Bearer '.$token);
//echo json_encode($header);
// Create a new cURL resource
$ch3 = curl_init($urls);


// Attach encoded JSON string to the POST fields
curl_setopt($ch3, CURLOPT_POSTFIELDS, json_encode($orderData));
//curl_setopt($ch3, CURLOPT_POSTFIELDS, $ordersjson);

// Set the content type to application/json
curl_setopt($ch3, CURLOPT_HTTPHEADER, $header);

// Return response instead of outputting
curl_setopt($ch3, CURLOPT_RETURNTRANSFER, true);

// Execute the POST request
return $result3 = curl_exec($ch3);

$array3=json_decode($result3, true); 
   

  
   // print_r($array3);
		}
		
		public function CapturePaypalOrder($id)
		{
			  
  $urls = "https://api.sandbox.paypal.com/v2/checkout/orders/$id/capture";
//echo "<br/>";
//echo json_encode($orderData);
//echo $ordersjson;
$header = array('Content-Type:application/json','Authorization: Bearer '.$_SESSION['token'] );
//echo json_encode($header);
// Create a new cURL resource
$ch3 = curl_init($urls);

// Attach encoded JSON string to the POST fields
curl_setopt($ch3, CURLOPT_POSTFIELDS, json_encode($orderData));
//curl_setopt($ch3, CURLOPT_POSTFIELDS, $ordersjson);
// Set the content type to application/json
curl_setopt($ch3, CURLOPT_HTTPHEADER, $header);
// Return response instead of outputting
curl_setopt($ch3, CURLOPT_RETURNTRANSFER, true);
// Execute the POST request
 return $result3 = curl_exec($ch3); 
     
		}
		
		
		public function CapturePaypalOrder2()
		{

		$id = $_SESSION['order_id'];			  
  $urls = "https://api.paypal.com/v2/checkout/orders/$id/capture";
//echo "<br/>";
//echo json_encode($orderData);
//echo $ordersjson;
$header = array('Content-Type:application/json','Authorization: Bearer '.$_SESSION['token'],'PayPal-Client-Metadata-Id: '.$_SESSION['paypal_insert_id']);
//echo json_encode($header);
// Create a new cURL resource
$ch3 = curl_init($urls);

// Attach encoded JSON string to the POST fields
curl_setopt($ch3, CURLOPT_POSTFIELDS, json_encode($orderData));
//curl_setopt($ch3, CURLOPT_POSTFIELDS, $ordersjson);
// Set the content type to application/json
curl_setopt($ch3, CURLOPT_HTTPHEADER, $header);
// Return response instead of outputting
curl_setopt($ch3, CURLOPT_RETURNTRANSFER, true);
// Execute the POST request
$result3 = curl_exec($ch3); 
$array3=json_decode($result3, true);
$_SESSION['status'] =$array3['status'];
echo $result3;


$this->PayPalLogs($order_id = $_SESSION['paypal_insert_id'] ,$api_name = 'capture' ,$rep_id = $_SESSION['rep_id'],$api_header = json_encode($header),$api_request= $id ,$api_response = $result3);
		
	// print_r($array3);
	 /*
	 
	 Array ( [id] => 3A5160369F099020A [status] => COMPLETED [purchase_units] => Array ( [0] => Array ( [reference_id] => default [shipping] => Array ( [name] => Array ( [full_name] => Manoj K ) [address] => Array ( [address_line_1] => 1 Main St [admin_area_2] => San Jose [admin_area_1] => CA [postal_code] => 95131 [country_code] => US ) ) [payments] => Array ( [captures] => Array ( [0] => Array ( [id] => 90X77626CA3472330 [status] => COMPLETED [amount] => Array ( [currency_code] => USD [value] => 1.00 ) [final_capture] => 1 [seller_protection] => Array ( [status] => ELIGIBLE [dispute_categories] => Array ( [0] => ITEM_NOT_RECEIVED [1] => UNAUTHORIZED_TRANSACTION ) ) [seller_receivable_breakdown] => Array ( [gross_amount] => Array ( [currency_code] => USD [value] => 1.00 ) [paypal_fee] => Array ( [currency_code] => USD [value] => 0.40 ) [net_amount] => Array ( [currency_code] => USD [value] => 0.60 ) ) [links] => Array ( [0] => Array ( [href] => https://api.sandbox.paypal.com/v2/payments/captures/90X77626CA3472330 [rel] => self [method] => GET ) [1] => Array ( [href] => https://api.sandbox.paypal.com/v2/payments/captures/90X77626CA3472330/refund [rel] => refund [method] => POST ) [2] => Array ( [href] => https://api.sandbox.paypal.com/v2/checkout/orders/3A5160369F099020A [rel] => up [method] => GET ) ) [create_time] => 2022-05-03T11:39:45Z [update_time] => 2022-05-03T11:39:45Z ) ) ) ) ) [payer] => Array ( [name] => Array ( [given_name] => Manoj [surname] => K ) [email_address] => manoj@transparencymarketresearch.com [payer_id] => 6CZH6RE3FM6TY [address] => Array ( [country_code] => US ) ) [links] => Array ( [0] => Array ( [href] => https://api.sandbox.paypal.com/v2/checkout/orders/3A5160369F099020A [rel] => self [method] => GET ) ) )
	 */
		}
		
		public function thankyou()
		{
			//print_r($_SESSION); exit();
			$rep_id = $_SESSION['rep_id'];
			$order_id = $_SESSION['order_id'];
			$token = $_SESSION['token'];
			$status =  trim($_SESSION['status']);
			if($status == 'COMPLETED'){ //echo "manoj";
				//$this->session->sess_destroy();
				//session_unset();
				//session_destroy();
			//	$this->session->unset_userdata('order_id');
			//	$this->session->unset_userdata('token');
			//	$this->session->unset_userdata('status');
				//$this->session->unset_userdata('status');
				$this->load->view('payment/thankyou',$data); 
				 
			}
			else{
				$this->session->unset_userdata('order_id');
				$this->session->unset_userdata('token');
				$this->session->unset_userdata('status');
				////$this->session->sess_destroy();
				//session_unset();
				session_destroy();
				redirect(WEBSITE_URL);
			}
			
		}
		
		
		
		public function ShareWithPayPalTeamfinalOrder()
		{
			//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
			$_SESSION['paypal_amount'] = 1; 
			$_SESSION['paypal_insert_id'] = '17369';
			echo "<pre>";
			
			echo "<br/>------------------------------------FIRST API OUTH--------------------------------------------------------------------";
			echo "<br/> PAYPAL CLIENT ID - ".
			//$PAYPAL_CLIENT_ID = 'AYldjK3jwEUX9oJukxZXf56DQSpytogdN26AZyzihcTtWD3JPWqCu_36ufesovtb3qD8wTQwsdUG6Nmc';
			$PAYPAL_CLIENT_ID = 'AVOnXDgxNkpHajW7aE5scPKpmmnPC4q6a2zhwZmyLNHZ3f9pFRf9CWa8ywdXmybvBrz5Z71gt0RvvdCh';
			echo "<br/> PAYPAL SECREAT ID - ".
			//$PAYPAL_SECRET = 'EOziFCXuliap7rBd_7yfCV3-EBctnEMpYqZuxgqxPiBAa1S-hFrsK_OhSuE_S7CChWJGIYThodvEitUH' ;
			$PAYPAL_SECRET = 'EJHZhUdp86fXiFPlZqtLlJKcOImBFxoA0XV8LJ5t3sAc9LzNh2D0Soi3SYH51JFrDqbVEVfeP6gwFnqE' ;
			echo "<br/> URL  - https://api-m.sandbox.paypal.com/v1/oauth2/token";
			$curl = curl_init();
			curl_setopt_array($curl, array(
			CURLOPT_URL => "https://api-m.sandbox.paypal.com/v1/oauth2/token",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_USERPWD => $PAYPAL_CLIENT_ID.":".$PAYPAL_SECRET,
			CURLOPT_POSTFIELDS => "grant_type=client_credentials",
			CURLOPT_HTTPHEADER => array(
			"Accept: application/json",
			"Accept-Language: en_US"
			),
			));

			$result= curl_exec($curl);

			$array=json_decode($result, true); 
			$_SESSION['token'] = $token=$array['access_token'];

			echo "<br> Response <br/>";
			print_r($array);

			echo "<br/>---------------------------------------Second API RISK TRANSACTION -----------------------------------------------------------------<br/>";


			//get the order details here 
			echo $_SESSION['paypal_insert_id'] = '17369';
			$rowdata = $this->payment_model->getOrderDetails('17369');
			print_r($rowdata);
			
				$headersRisk = array(
			"Content-Type: application/json",
			"Authorization: Bearer ".$token
			);
			
			echo "<br>   <br/>";
			$pu1 = array('key' => "sender_account_id","value" => $rowdata[0]['id'] );
			$pu2 = array('key' => "sender_first_name","value" => $rowdata[0]['cust_name'] );
			$pu3 = array('key' => "sender_last_name","value" => $rowdata[0]['cust_name']  );
			$pu4 = array('key' => "sender_email","value" =>  $rowdata[0]['cust_email'] );
			$pu5 = array('key' => "sender_phone","value" =>  $rowdata[0]['cust_phone'] );
			$pu6 = array('key' => "sender_country_code","value" => $rowdata[0]['cust_country_code'] );
			$datarisk  = array("tracking_id" => $_SESSION['paypal_insert_id'] , "additional_data" => array($pu1,$pu2,$pu3,$pu4,$pu5,$pu6));
			echo $datarisks = json_encode($datarisk);
			
//6CZH6RE3FM6TY
//7X275E6SUA3WN
//new once //RY6YX5AUDPULY
/**
			echo $urlrisk = "https://api-m.sandbox.paypal.com/v1/risk/transaction-contexts/RY6YX5AUDPULY/".$_SESSION['paypal_insert_id'];
			
			echo "<br>   <br/>";
			
			
			echo "<br>   <br/>";
			$curlrisk = curl_init($urlrisk);
			 
			curl_setopt($curlrisk, CURLOPT_PUT, true);
			curl_setopt($curlrisk, CURLOPT_RETURNTRANSFER, true);

		
			echo json_encode($headersRisk);
			echo "<br>   <br/>";
			curl_setopt($curlrisk, CURLOPT_HEADER, true); 
			curl_setopt($curlrisk, CURLOPT_HTTPHEADER, $headersRisk);
			curl_setopt($curlrisk, CURLOPT_POSTFIELDS, $datarisks);
			curl_setopt($curlrisk, CURLOPT_SSL_VERIFYHOST, false);
			curl_setopt($curlrisk, CURLOPT_SSL_VERIFYPEER, false);
			$resp = curl_exec($curlrisk);
			echo "HTTP code ". $httpcode = curl_getinfo($curlrisk, CURLINFO_HTTP_CODE);
			 ***/
	$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api-m.sandbox.paypal.com/v1/risk/transaction-contexts/RY6YX5AUDPULY/".$_SESSION['paypal_insert_id'],
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "PUT",
  CURLOPT_POSTFIELDS => json_encode($datarisk),
  CURLOPT_HTTPHEADER =>  $headersRisk,
));

$response = curl_exec($curl);
echo 'this is secomd code - ' .  $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
 
		 
			if($httpcode == 200 )
			{
					echo "<br/>---------------------------------------Third API ORDER CREATE -----------------------------------------------------------------<br/>";
/***********************************************
					$amount = array("currency_code" => "USD","value" => $_SESSION['paypal_amount']);

					$pu = array('amount' => $amount );
					$order  = array(
					"intent" => "CAPTURE",
					"purchase_units" => array($pu)
					);
********************************************/
 /**
$order  =  array (
  'intent' => 'CAPTURE',
  'purchase_units' => 
  array (
    0 => 
    array (
      'reference_id' => $_SESSION['paypal_insert_id'],
      'amount' => 
      array (
        'currency_code' => 'USD',
        'value' => $_SESSION['paypal_amount'],
      ),
      'payee' => 
      array (
        'email_address' => $rowdata[0]['cust_email'],
      ),
      'payment_instruction' => 
      array (
        'platform_fees' => 
        array (
          0 => 
          array (
            'amount' => 
            array (
              'currency_code' => 'USD',
              'value' => $_SESSION['paypal_amount'],
            ),
            'payee' => 
            array (
              'email_address' => $rowdata[0]['cust_email'],
            ),
          ),
        ),
        'disbursement_mode' => 'INSTANT',
        'payee_pricing_tier_id' => $_SESSION['paypal_insert_id'],
      ),
    ),
  ),
  'payment_source' => 
  array (
    'apple_pay' => 
    array (
      'id' => $_SESSION['paypal_insert_id'],
      'name' => $rowdata[0]['cust_name'] ,
      'email_address' => $rowdata[0]['cust_email'],
      'phone_number' => 
      array (
        'country_code' => $rowdata[0]['countryCode'],
        'national_number' => $rowdata[0]['cust_phone'],
      ),
      'shipping' => 
      array (
        'name' => 
        array (
          'given_name' => $rowdata[0]['cust_name'] ,
          'surname' => $rowdata[0]['cust_name'] ,
        ),
        'email_address' => $rowdata[0]['cust_email'],
        'address' => 
        array (
          'address_line_1' => $rowdata[0]['cust_addr'],
          'address_line_2' => $rowdata[0]['cust_country'],
          'admin_area_2' => $rowdata[0]['cust_state'],
          'admin_area_1' => $rowdata[0]['cust_city'],
          'postal_code' => $rowdata[0]['cust_zipcode'],
          'country_code' => $rowdata[0]['cust_country_code'],
        ),
      ),
      'decrypted_token' => 
      array (
        'transaction_amount' => 
        array (
          'currency_code' => 'USD',
          'value' => $_SESSION['paypal_amount'],
        ),
        'tokenized_card' => 
        array (
          'number' => $_SESSION['paypal_insert_id'],
          'expiry' => date('Y-m'),
          'billing_address' => 
          array (
            'address_line_1' => $rowdata[0]['cust_addr'],
          'address_line_2' => $rowdata[0]['cust_country'],
          'admin_area_2' => $rowdata[0]['cust_state'],
          'admin_area_1' => $rowdata[0]['cust_city'],
          'postal_code' => $rowdata[0]['cust_zipcode'],
          'country_code' => $rowdata[0]['cust_country_code'],
          ),
        ),
        'device_manufacturer_id' => $_SESSION['paypal_insert_id'],
        'payment_data_type' => '3DSECURE',
        'payment_data' => 
        array (
          'cryptogram' => '',
          'eci_indicator' => '7',
        ),
      ),
    ),
  ),
);
  ****/
  $order = array (
  'intent' => 'CAPTURE',
  'application_context' => 
  array (
    'brand_name' => $rowdata[0]['rep_name'],
    'locale' => 'en-US',
    'shipping_preference' => 'NO_SHIPPING',
    'user_action' => 'PAY_NOW',
    'return_url' => 'http://ReturnURL',
    'cancel_url' => 'http://CancelURL',
    'payment_method' => 
    array (
      'payer_selected' => 'PAYPAL',
      'payee_preferred' => 'IMMEDIATE_PAYMENT_REQUIRED',
    ),
  ),
  'payer' => 
  array (
    'name' => 
    array (
      'given_name' =>  $rowdata[0]['cust_addr'],
      'surname' =>  $rowdata[0]['cust_addr'],
    ),
    'email_address' =>  $rowdata[0]['cust_email'],
    'phone' => 
    array (
      'phone_number' => 
      array (
        'national_number' => $rowdata[0]['cust_phone'],
      ),
    ),
  ),
  'purchase_units' => 
  array (
    0 => 
    array (
      'amount' => 
      array (
        'currency_code' => 'USD',
        'value' => $_SESSION['paypal_amount'],
        'breakdown' => 
        array (
          'item_total' => 
          array (
            'currency_code' => 'USD',
            'value' => $_SESSION['paypal_amount'],
          ),
          'handling' => 
          array (
            'currency_code' => 'USD',
            'value' => '0.00',
          ),
          'tax_total' => 
          array (
            'currency_code' => 'USD',
            'value' => '0.00',
          ),
        ),
      ),
      'items' => 
      array (
        0 => 
        array (
          'name' => $rowdata[0]['rep_name'],
          'description' => $rowdata[0]['rep_name'],
          'quantity' => '1',
          'unit_amount' => 
          array (
            'currency_code' => 'USD',
            'value' => $_SESSION['paypal_amount'],
          ),
          'category' => 'DIGITAL_GOODS',
        )
      ),
      'soft_descriptor' => 'CC_STATEMENT_NAME',
      'custom_id' => $rowdata[0]['id'],
      'invoice_id' => $_SESSION['paypal_insert_id'],
    ),
  ),
);

/*
,
        1 => 
        array (
          'name' => 'Add-ons Recharge',
          'description' => 'Recharge for Add-Ons Package',
          'quantity' => '1',
          'unit_amount' => 
          array (
            'currency_code' => 'USD',
            'value' => $_SESSION['paypal_amount'],
          ),
          'category' => 'DIGITAL_GOODS',
        ),
*/
print_r($order); echo "<br/>";
					echo $urls = 'https://api-m.sandbox.paypal.com/v2/checkout/orders';
					echo "<br/>";
					echo json_encode($order);
					echo "<br/>";
					$header = array('Content-Type:application/json','Authorization: Bearer '.$token,'PayPal-Request-Id: '.$_SESSION['paypal_insert_id'],'PayPal-Client-Metadata-Id: '.$_SESSION['paypal_insert_id']);
					echo json_encode($header);
					echo "<br>   <br/>";
					// Create a new cURL resource
					$ch3 = curl_init($urls);
					// Attach encoded JSON string to the POST fields
					curl_setopt($ch3, CURLOPT_POSTFIELDS, json_encode($order));
					//curl_setopt($ch3, CURLOPT_POSTFIELDS, $ordersjson);
					// Set the content type to application/json
					curl_setopt($ch3, CURLOPT_HTTPHEADER, $header);
					// Return response instead of outputting
					curl_setopt($ch3, CURLOPT_RETURNTRANSFER, true);

					// Execute the POST request
					echo $result3 = curl_exec($ch3);

					//here return all result but we taken order id in session so next step complete by this id
					  $array3=json_decode($result3, true);
					echo "<br>   <br/>";
					print_r($array3);
					if(isset($array3['id']) != '' )
					{
					echo $_SESSION['order_id'] =$array3['id'];
					 
					
					echo "<br/>---------------------------------------FIFTH API CAPTURE -----------------------------------------------------------------<br/>";

					echo $id = $_SESSION['order_id'];
					echo "<br/>";
					echo $urls = "https://api-m.sandbox.paypal.com/v2/checkout/orders/$id/capture";
					echo "<br/>";
					//echo json_encode($orderData);
					//echo $ordersjson;
					$headerCapture = array('Content-Type:application/json','Authorization: Bearer '.$_SESSION['token'],'PayPal-Client-Metadata-Id: '.$_SESSION['paypal_insert_id']);
					echo json_encode($headerCapture);
					echo "<br>   <br/>";
					// Create a new cURL resource
					$ch3 = curl_init($urls);
					// Attach encoded JSON string to the POST fields
					curl_setopt($ch3, CURLOPT_POSTFIELDS, json_encode($orderData));
					//curl_setopt($ch3, CURLOPT_POSTFIELDS, $ordersjson);
					// Set the content type to application/json
					curl_setopt($ch3, CURLOPT_HTTPHEADER, $headerCapture);
					// Return response instead of outputting
					curl_setopt($ch3, CURLOPT_RETURNTRANSFER, true);
					// Execute the POST request
					$result4 = curl_exec($ch3); 
					echo "<br/>";
					echo $array4=json_decode($result4, true);

					$_SESSION['status'] =$array3['status'];
					echo $result3;
					}
			}
			
		 
		}
		
		 
		
		public function checkjson()
		{  
		echo ' {\n  \"intent\": \"CAPTURE\",  \n  \"application_context\":{\n    \"brand_name\":\"MY BRAND\",\n    \"locale\":\"en-US\",\n    \"shipping_preference\":\"NO_SHIPPING\",\n    \"user_action\":\"PAY_NOW\",\n    \"return_url\":\"http://ReturnURL\",\n    \"cancel_url\":\"http://CancelURL\",\n    \"payment_method\":{\n        \"payer_selected\":\"PAYPAL\",\n        \"payee_preferred\":\"IMMEDIATE_PAYMENT_REQUIRED\"\t\n    }\n  },\n  \"payer\":{\n    \"name\":{\n        \"given_name\":\"Arun\",\n        \"surname\":\"Kumar\"\n    },\n    \"email_address\":\"PayPalTest@test.com\",\n    \"phone\": {\n            \"phone_number\": {\n                \"national_number\": \"9874563210\"\n            }\n        }\n    },\n  \"purchase_units\": [\n    {\n        \"amount\": {\n              \"currency_code\": \"USD\",\n              \"value\": \"100.00\",\n              \"breakdown\": {\n                \"item_total\": {\n                  \"currency_code\": \"USD\",\n                  \"value\": \"90.00\"\n                },\n                \"handling\": {\n                  \"currency_code\": \"USD\",\n                  \"value\": \"10.00\"\n                },\n                \"tax_total\": {\n                  \"currency_code\": \"USD\",\n                  \"value\": \"0.00\"\n                }\n              }\n            },\n        \"items\": [\n            {\n              \"name\": \"1 Month Recharge, 1 Month Recharge, 1 Month Recharge, 1 Month Recharge\",\n              \"description\": \"Recharge for One Month\",\n              \"quantity\": \"1\",\n              \"unit_amount\": {\n                \"currency_code\": \"USD\",\n                \"value\": \"45.00\"\n              },\n              \"category\": \"DIGITAL_GOODS\"\n            },\n            {\n              \"name\": \"Add-ons Recharge\",\n              \"description\": \"Recharge for Add-Ons Package\",\n              \"quantity\": \"1\",\n              \"unit_amount\": {\n                \"currency_code\": \"USD\",\n                \"value\": \"45.00\"\n              },\n              \"category\": \"DIGITAL_GOODS\"\n            }],\n        \"soft_descriptor\":\"CC_STATEMENT_NAME\",\n\t    \"custom_id\":\"12345\",\n\t    \"invoice_id\":\"{{ORDER_INVOICE_ID}}\"\n    }\n  ]\n}"
				,';
				
				echo "<br/><br/><br/><br/>";
			$_SESSION['paypal_amount'] = 1; 
$payment_method_details = array('payer_selected' => 'PAYPAL','payee_preferred' => 'IMMEDIATE_PAYMENT_REQUIRED');
$application_context_details = array( 'brand_name' => 'MY BRAND',
'locale' => 'en-US',
'shipping_preference' => 'NO_SHIPPING',
'user_action' => 'PAY_NOW',
'return_url' => 'http://ReturnURL',
'cancel_url' => 'http://CancelURL',
"payment_method" => $payment_method_details);
$payer = array( 'name' => array('given_name' => 'Arun',
      'surname' => 'Kumar'),
   'email_address' => 'PayPalTest@test.com',
    'phone' =>array('phone_number' => array( 'national_number' => '9874563210'))
      
       
      
	);
$item_total = array('currency_code' => 'USD',
'value' => '90.00');

$handling = array('currency_code' => 'USD',
'value' => '90.00');

$tax_total = array('currency_code' => 'USD',
'value' => '90.00');	


$itemone = array('name' => 'test',
'description' => 'Recharge for One Month',
'quantity' => '1',
'unit_amount' => $item_total,
'category' => 'DIGITAL_GOODS');


$itemtwo = array('name' => 'Add-ons Recharge',
'description' => 'Recharge for Add-Ons Package',
'quantity' => '1',
'unit_amount' => $item_total,
'category' => 'DIGITAL_GOODS');		  




$amount = array("currency_code" => "USD","value" => $_SESSION['paypal_amount'], "breakdown" => array("item_total"=>$item_total,"handling" => $handling,"tax_total" => $tax_total));
$items = array($itemone,$itemtwo);

$pu = array('amount' => $amount , 'items' => $items ,  'soft_descriptor' => 'CC_STATEMENT_NAME', 'custom_id' => '12345','invoice_id' => $_SESSION['paypal_amount']);

$order  = array(
"intent" => "CAPTURE",
"application_context" => $application_context_details,
"payer" => $payer,
"purchase_units" => array($pu)
);
echo  json_encode($order, true);  


//echo "<pre>";
echo "<br/>";
echo "<br/>";

echo "Sample  Request data";
echo "<br/>";
echo '{
  "intent": "CAPTURE",
  "purchase_units": [
    {
      "reference_id": "REFID-000-1001",
      "amount": {
        "currency_code": "CAD",
        "value": "10.00"
      },
      "payee": {
        "email_address": "seller@paypal.com"
      },
      "payment_instruction": {
        "platform_fees": [
          {
            "amount": {
              "currency_code": "CAD",
              "value": "1.00"
            },
            "payee": {
              "email_address": "_sys_aquarium-1696754097380342@paypal.com"
            }
          }
        ],
        "disbursement_mode": "INSTANT",
        "payee_pricing_tier_id": "999ZAE"
      }
    }
  ],
  "payment_source": {
    "apple_pay": {
      "id": "DSF32432423FSDFS",
      "name": "Randy Oscar",
      "email_address": "randy.oscar@gmail.com",
      "phone_number": {
        "country_code": "1",
        "national_number": "18882211161"
      },
      "shipping": {
        "name": {
          "given_name": "Randy",
          "surname": "Oscar"
        },
        "email_address": "randy.oscar@gmail.com",
        "address": {
          "address_line_1": "123 Townsend S",
          "address_line_2": "Floor 6",
          "admin_area_2": "San Francisc",
          "admin_area_1": "CA",
          "postal_code": "94107",
          "country_code": "US"
        }
      },
      "decrypted_token": {
        "transaction_amount": {
          "currency_code": "USD",
          "value": "10.00"
        },
        "tokenized_card": {
          "number": "4111111111114672",
          "expiry": "2022-02",
          "billing_address": {
            "address_line_1": "123 Townsend S",
            "address_line_2": "Floor 6",
            "admin_area_2": "San Francisc",
            "admin_area_1": "CA",
            "postal_code": "94107",
            "country_code": "US"
          }
        },
        "device_manufacturer_id": "040010030273",
        "payment_data_type": "3DSECURE",
        "payment_data": {
          "cryptogram": "SaDA0Gw9cR37j8xrZP6VFCJpa",
          "eci_indicator": "7"
        }
      }
    }
  }
}';


echo "<br/>";
echo "<br/>";
echo "<br/>";

echo "Array  Request data";
echo "<br/>";

$order  =  array (
  'intent' => 'CAPTURE',
  'purchase_units' => 
  array (
    0 => 
    array (
      'reference_id' => 'REFID-000-1001',
      'amount' => 
      array (
        'currency_code' => 'CAD',
        'value' => '10.00',
      ),
      'payee' => 
      array (
        'email_address' => 'seller@paypal.com',
      ),
      'payment_instruction' => 
      array (
        'platform_fees' => 
        array (
          0 => 
          array (
            'amount' => 
            array (
              'currency_code' => 'CAD',
              'value' => '1.00',
            ),
            'payee' => 
            array (
              'email_address' => '_sys_aquarium-1696754097380342@paypal.com',
            ),
          ),
        ),
        'disbursement_mode' => 'INSTANT',
        'payee_pricing_tier_id' => '999ZAE',
      ),
    ),
  ),
  'payment_source' => 
  array (
    'apple_pay' => 
    array (
      'id' => 'DSF32432423FSDFS',
      'name' => 'Randy Oscar',
      'email_address' => 'randy.oscar@gmail.com',
      'phone_number' => 
      array (
        'country_code' => '1',
        'national_number' => '18882211161',
      ),
      'shipping' => 
      array (
        'name' => 
        array (
          'given_name' => 'Randy',
          'surname' => 'Oscar',
        ),
        'email_address' => 'randy.oscar@gmail.com',
        'address' => 
        array (
          'address_line_1' => '123 Townsend S',
          'address_line_2' => 'Floor 6',
          'admin_area_2' => 'San Francisc',
          'admin_area_1' => 'CA',
          'postal_code' => '94107',
          'country_code' => 'US',
        ),
      ),
      'decrypted_token' => 
      array (
        'transaction_amount' => 
        array (
          'currency_code' => 'USD',
          'value' => '10.00',
        ),
        'tokenized_card' => 
        array (
          'number' => '4111111111114672',
          'expiry' => '2022-02',
          'billing_address' => 
          array (
            'address_line_1' => '123 Townsend S',
            'address_line_2' => 'Floor 6',
            'admin_area_2' => 'San Francisc',
            'admin_area_1' => 'CA',
            'postal_code' => '94107',
            'country_code' => 'US',
          ),
        ),
        'device_manufacturer_id' => '040010030273',
        'payment_data_type' => '3DSECURE',
        'payment_data' => 
        array (
          'cryptogram' => 'SaDA0Gw9cR37j8xrZP6VFCJpa',
          'eci_indicator' => '7',
        ),
      ),
    ),
  ),
);
 
 print_r($order);
echo "<br/>";
echo "<br/>";
echo "<br/>";

echo "Array convert into  Request data";
echo "<br/>";
echo  json_encode($order, true);  
		}
		
		public function PayPalLogs($order_id,$api_name,$rep_id,$api_header,$api_request,$api_response){

			$paypal_array = array('order_id'    => $order_id,
								  'date_time'   => date("Y-m-d H:i:s"),
								  'api_name'   => $api_name,
								  'rep_id'    => $rep_id,
								  'api_header' => $api_header,
								  'api_request' => $api_request,
								  'api_response' => $api_response,
								  'status'    => 1);
			  
			$this->db->insert('payapal_log',$paypal_array);
			 

		}
}
?>
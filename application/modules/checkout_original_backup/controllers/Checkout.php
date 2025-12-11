<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Checkout extends MY_Controller{

        public function __construct(){
                $this->load->model("checkout_model");
        }

        public function cart_table($id){

                $data = array();
                $cust_phone = "";

                if(isset($_POST['btnCheckout'])){
				//$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                        unset($_POST['ci_csrf_token']);
                        
                        $paymentType = $_POST['paymentType'];
                        $data["payment_type"] = $_POST['paymentType'];  	
                        //captcha validation  need to add
                        $captcha =  $this->data_filter_post($this->input->post('captcha'));
                        $hdnCaptcha =  $this->data_filter_post($this->input->post('hdnCaptcha'));

                        /*** blocker code ***/
                        $domailArray = explode('@', $_POST['emailId']);
                        $emailDomain = $domailArray[1];
                        $block_data = $this->checkout_model->getBlockerData($_POST['fullname'],$_POST['emailId'],$emailDomain);
                        if(!empty($block_data)){
                        redirect(WEBSITE_URL);
                        }
	
			$old_time = date('Y-m-d H:i:s', strtotime('-1 minutes'));
			$current_time =  date('Y-m-d H:i:s');
			$checkedinserted_data = $this->checkout_model->getTheUsersData($_POST['emailId'], $old_time , $current_time);				 
			if(count($checkedinserted_data) > 10 )
			{  				 
				$dataInsertBlocker = array("name" => $_POST['fullname'] , "email" => $_POST['emailId'] , "status" => 'Y' , "created_date" => date('Y-m-d H:i:s') );
				$this->db->insert("blocker",$dataInsertBlocker);
				 redirect(WEBSITE_URL);
			}

                         if($_POST['emailId'] == 'sample@email.tst' )
                        {
                              redirect(WEBSITE_URL);   
                        }

                        if($_POST['emailId'] == 'testing@example.com' )
                        {
                             redirect(WEBSITE_URL);   
                        }

			/*** blocker code ***/
			
			if((isset($_POST['captcha']) && $_POST['captcha'] == '' )|| $_POST['captcha'] == 0 || (isset($_POST['hdnCaptcha']) && $_POST['hdnCaptcha'] == '' ) || $_POST['hdnCaptcha'] == 0  || $captcha != $hdnCaptcha)
			{						 
				redirect(WEBSITE_URL."checkout/".$id);
			}
			else if(is_numeric($_POST['captcha']) && is_numeric($_POST['hdnCaptcha']) && $_POST['hdnCaptcha'] == $_POST['captcha'] ){
				$data["captcha"] = $_POST['captcha'];
				$data["hdnCaptcha"] = $_POST['hdnCaptcha'];
			}
			else{
				 $data["errorFlag"]['txtCaptcha'] = "Please Enter Valid Captcha";
			}

			//country code validation need to add
			if(isset($_POST['cust_country_code']) && $_POST['cust_country_code'] == ''){							
				redirect(WEBSITE_URL."checkout/".$id);	 
                        }


						
                        if(isset($_POST['fullname']) && $_POST['fullname'] != ''){
                                $data["cust_name"] = $this->data_filter_post($_POST['fullname']);
                        }else{
                                $data["errorFlag"]['fullname'] = "Please Enter Name";
                        }

                        if((isset($_POST['emailId']) && $_POST['emailId'] != '')    &&  filter_var($_POST['emailId'], FILTER_VALIDATE_EMAIL)   &&  preg_match('/@.+\./', $_POST['emailId']) ){
                                $data["cust_email"] = $this->data_filter_post($_POST['emailId']);
                        }else{
                                $data["errorFlag"]['emailId'] = "Please Enter Email";
                        }

                       

                        if(isset($_POST['phoneNo']) && $_POST['phoneNo'] != ''){
							
                        $data["countryCode"] =  $_POST['countryCode'];
                        $data["cust_country_code"] =  $_POST['cust_country_code'];
                        $data["cust_phone"] =    str_replace("+", "",str_replace("-", "",$_POST['phoneNo']));
                        $cust_phone = $_POST['phoneNo'];
								
                               // $data["cust_phone"] = "(".$_POST['countryCode'].")".$_POST['phoneNo'];
                               // $cust_phone = $_POST['phoneNo'];
                        }else{
                                $data["errorFlag"]['phoneNo'] = "Please Enter Phone No";
                        }

                        if(isset($_POST['company_address']) && $_POST['company_address'] != ''){
                                $data["cust_addr"] = $this->data_filter_post($_POST['company_address']);
                        }else{
                                $data["errorFlag"]['company_address'] = "Please Enter Address";
                        }

                        if(isset($_POST['name_city']) && $_POST['name_city'] != ''){
                                $data["cust_city"] = $this->data_filter_post($_POST['name_city']);
                        }else{
                                $data["errorFlag"]['name_city'] = "Please Enter City";
                        }

                        if(isset($_POST['name-state']) && $_POST['name-state'] != ''){
                                $data["cust_state"] = $this->data_filter_post($_POST['name-state']);
                        }else{
                                $data["errorFlag"]['name-state'] = "Please Enter State";
                        }

                        if(isset($_POST['country']) && $_POST['country'] != ''){
                                $data["cust_country"] = $_POST['country'];
                        }

                        if(isset($_POST['name-zipcode']) && $_POST['name-zipcode'] != ''){
                                $data["cust_zipcode"] = $this->data_filter_post($_POST['name-zipcode']);
                        }else{
                                $data["errorFlag"]['name-zipcode'] = "Please Enter Zipcode";
                        }
                        //$cleanData = $this->security->xss_clean($data);
                        $result = "";
                        if(!isset($data["errorFlag"]))
                        {
                  

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

                                $getData = $this->checkout_model->getReportPrice($id,$licenseField);
                                $data['rep_amount'] = $getData[0]['rep_price'];
								$data['rep_name'] = $rep_name = $getData[0]['rep_name'];

                                $GetID = $this->checkout_model->insertData($data);
								$insert_id = $this->db->insert_id();

                                if($GetID > 0){
					$data['insert_id'] = $insert_id;									 
					$_SESSION['paypal_insert_id'] = $insert_id;
					$_SESSION['rep_name'] = $rep_name;
					$_SESSION['rep_id'] = $id;					
                                        $getData['reportData'] = $this->checkout_model->getReportById($id);
                                        $emailData = $this->checkout_model->GetEmailDetails(2);			
					$data['rep_name'] = $getData['reportData'][0]['rep_name'];
                                        $email_setting['name'] = $data['cust_name'];
                                        $email_setting['country'] = $data['cust_country'];
                                        $email_setting['email'] = $data['cust_email'];
                                        $email_setting['phone'] = $data['cust_phone'];
                                        $email_setting['address'] = $data['cust_addr'];
                                        $email_setting['report'] = $getData['reportData'][0]['rep_name'];
                                        $email_setting['report_type'] = $getData['reportData'][0]['rep_type']=='N' ? 'Published Report' : 'Ongoing Report';
                                        $email_setting['category'] = $getData['reportData'][0]['cat_name'];
                                        $email_setting['city'] = $data['cust_city'];
                                        $email_setting['state'] = $data['cust_state'];
                                        $email_setting['zipcode'] = $data['cust_zipcode'];
                                        $email_setting['email_to'] = $emailData->email_to;
                                        
                                        $email_setting['price'] = $getData[0]['rep_price'];
                                        $email_setting['subject'] = "Purchase Attempt By ".$paymentType;
                                        $email_setting['source'] = "Direct Purchase";
                                        $this->lib_mails->LibDPMail($email_setting, $paymentType);

                                        if($paymentType=='PayPal'){
											
												
											
                                            /***    $query = array();
                                                $query['notify_url'] = '';
                                                $query['cmd'] = '_cart';
                                                $query['upload'] = '1';
                                                $query['business'] = 'payments@persistencemarketresearch.com';
                                                $query['item_name_1'] = $getData[0]['rep_name'];
                                                $query['amount_1'] = $getData[0]['rep_price'];
                                                $query['quantity_1'] = '1';
                                                $query['handling_cart'] = '0';
                                                $query['currency_code'] = 'USD';
                                                // Prepare query string
                                                $query_string = http_build_query($query);
                                                redirect('https://www.paypal.com/cgi-bin/webscr?' . $query_string);
											***/	
									               			
												
			$_SESSION['paypal_amount'] = $getData[0]['rep_price'] ;
			$_SESSION['paypal_insert_id'] = $insert_id;										 
			$data['report_data'] =  $data;
			$this->load->view('checkout/paypal_payment',$data); 
			
				 
                                        }
                                         else if($paymentType=='Razorpay'){
                                      //echo ""; exit();
                $data['title']              = 'Checkout payment | PMR';  
                $data['callback_url']       = base_url().'razorpaycallback';
                $data['surl']               = base_url().'thanks/thanks-razorpay';;
                $data['furl']               = base_url().'razorpayfailed';;
                $data['currency_code']      = 'USD';
              

                        $_SESSION['paypal_amount'] = $getData[0]['rep_price'] ;
                        $_SESSION['paypal_insert_id'] = $insert_id;                                                                              
                        $data['report_data'] =  $data;
                        $this->load->view('checkout/razorpay_payment',$data); 
                        
                                 
                                        }
                                        elseif($paymentType=='CCAvenue'){
                                                $query = array(); 
                                                $query['tid'] = time();
                                                $transId = $this->checkout_model->InsertCCAveEntry($GetID,$query['tid'],$id,$data['rep_amount']);
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
                                header("Location:".WEBSITE_URL."checkout/".$id);
                        }
                }

                elseif(isset($_POST['proceed_to_register']) || isset($data["errorFlag"]) || !empty($data["errorFlag"])){
                        $data = array();
                        $radLicense = $_POST['radLicense'];
                        if($radLicense=='rep_price_sul'){
                                $data['licenseType'] = 'S';
                        }elseif($radLicense=='rep_price_el'){
                                $data['licenseType'] = 'M';
                        }elseif($radLicense=='rep_price_cul'){
                                $data['licenseType'] = 'C';
                        }
                        $data['report_data'] = $this->checkout_model->getReportDataForCheckoutForm($id,$radLicense);
                        $this->load->view("checkout_form",$data);
                }else{
                        $data['report_data'] = $this->checkout_model->getReportData($id);
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
		
		
		public function finalOrder()
		{
			
		$PAYPAL_CLIENT_ID = 'ASO78AsyhTDXxcYm1gOmTXRkpxAU_JVnNc-e9Ba7nqbLVdwjOIJ18_P_TqGXcAOCwjch_r9ViUPPNeNT'; 
		$PAYPAL_SECRET = 'EIwMyVotwvUZwrn_j7DO9IEAYxfkH0jw935ftrk32wMv02d7PC7IFINPiJ7aA5L9_IB0Xbx2qrcVDxus'; 

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

		$array=json_decode($result, true); 
		$_SESSION['token'] = $token=$array['access_token'];

		$this->PayPalLogs($order_id = $_SESSION['paypal_insert_id'] ,$api_name = 'outh' ,$rep_id = $_SESSION['rep_id'],$api_header="" , $api_request=$PAYPAL_CLIENT_ID.":".$PAYPAL_SECRET,$api_response = $result);
		


//get the order details here 
$rowdata = $this->checkout_model->getOrderDetails($_SESSION['paypal_insert_id']);
  
		$cust_phone2  =  str_replace("+", "",str_replace("-", "",$rowdata[0]['cust_phone']));		
		$cust_phone  =  strip_tags(trim($this->removeSpecialChar($cust_phone2)));		

		if(strlen($cust_phone) > 14 )
		{
			$cust_phone = substr($cust_phone,14);
		}
		
$headersRisk = array("Content-Type: application/json","Authorization: Bearer ".$token);
$pu1 = array('key' => "sender_account_id","value" => $rowdata[0]['id']  );
$pu2 = array('key' => "sender_first_name","value" => $rowdata[0]['cust_name'] );
$pu3 = array('key' => "sender_last_name","value" => $rowdata[0]['cust_name']  );
$pu4 = array('key' => "sender_email","value" =>  $rowdata[0]['cust_email'] );
$pu5 = array('key' => "sender_phone","value" =>  $cust_phone );
$pu6 = array('key' => "sender_country_code","value" => $rowdata[0]['countryCode'] );
$datarisk  = array("tracking_id" => $_SESSION['paypal_insert_id'] , "additional_data" => array($pu1,$pu2,$pu3,$pu4,$pu5,$pu6));
//$datarisks = json_encode($datarisk);
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
		
//if($httpcode == 200){
// print_r($array);
		/*** working code 
		$amount = array("currency_code" => "USD","value" => $_SESSION['paypal_amount']);

		$pu = array('amount' => $amount );
		$order  = array(
		"intent" => "CAPTURE",
		"purchase_units" => array($pu)
		);
		***/
		$rep_name  = "";
		if(strlen($rowdata[0]['rep_name']) > 125 )
		{
			$rep_name = substr(strip_tags(trim($this->removeSpecialChar($rowdata[0]['rep_name']))),125);
		}
		else{
			$rep_name = strip_tags(trim($this->removeSpecialChar($rowdata[0]['rep_name'])));
		}
		
		
		 
		
		 $order = array (
  'intent' => 'CAPTURE',
  'application_context' => 
  array (
    'brand_name' => $rep_name,
    'locale' => 'en-US',
    'shipping_preference' => 'NO_SHIPPING',
    'user_action' => 'PAY_NOW',
    'return_url' => 'https://www.persistencemarketresearch.com/checkout/'.$rowdata[0]['rep_id'],
    'cancel_url' => 'https://www.persistencemarketresearch.com/',
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
        'national_number' => $cust_phone,
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
          'name' => $rep_name,
          'description' => $rep_name,
          'quantity' => '1',
          'unit_amount' => 
          array (
            'currency_code' => 'USD',
            'value' => $_SESSION['paypal_amount'],
          ),
          'category' => 'DIGITAL_GOODS',
        )
      ),
      'soft_descriptor' =>  'PMR_'.$_SESSION['paypal_insert_id'],
      'custom_id' => $rowdata[0]['id'],
      'invoice_id' => $_SESSION['paypal_insert_id'],
    ),
  ),
);
		 
		$urls = 'https://api.paypal.com/v2/checkout/orders';
		 
		$header = array('Content-Type:application/json','Authorization: Bearer '.$token,'PayPal-Request-Id: '.$_SESSION['paypal_insert_id'],'PayPal-Client-Metadata-Id: '.$_SESSION['paypal_insert_id']);
		 
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
	//	}
		
		

		 
		}
		
		
		public function CapturePaypalOrder2()
		{

		$id = $_SESSION['order_id'];			  
  $urls = "https://api-m.paypal.com/v2/checkout/orders/$id/capture";
 
$header = array('Content-Type:application/json','Authorization: Bearer '.$_SESSION['token'],'PayPal-Client-Metadata-Id: '.$_SESSION['paypal_insert_id']);
 
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


$this->PayPalLogs($order_id = $_SESSION['paypal_insert_id'] ,$api_name = 'capture' ,$rep_id = $_SESSION['rep_id'],$api_header = json_encode($header),$api_request= json_encode($orderData) ,$api_response = $result3);
		
	 
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
				$this->load->view('checkout/thankyou',$data); 
				 
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
		
		public function removeSpecialChar($str) {
			$res = str_replace( array( '\'', '"',',' , ';', '<', '>', '(', ')', '-'), '', $str);
			return $res;
      }

       public function data_filter_post($data) {
        $data = strip_tags($data);
        $data = preg_replace('/\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|$!:,.;]*[A-Z0-9+&@#\/%=~_|$]/i', '\1', str_replace("?","",$data));
        $data = trim($data);   
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = htmlentities($data, ENT_NOQUOTES, 'UTF-8');    
        $data = preg_replace('/[\xF0-\xF7].../s', '',$data);
        $data = $this->removeSpecialChar2($data); 
        $data = $this->db->escape($data); 
        $data = $this->security->xss_clean($data);   
        $data =  str_replace("'", "",$data);
        return $data;
    }

    public function removeSpecialChar2($str) {
        $res = str_replace( array( '\'', '"',',' , ';', '<', '>', '(', ')',   '%', '^', '#', '$', '`'), '', $str);
        return $res;
    }


     public function razorPay()
        {
                $data['title']              = 'Checkout payment | Infovistar';  
                $data['callback_url']       = base_url().'razorpaycallback';
                $data['surl']               = base_url().'thanks/thanks-razorpay';;
                $data['furl']               = base_url().'razorpayfailed';;
                $data['currency_code']      = 'USD';
                $this->load->view('razorpay', $data);
        }


        // initialized cURL Request
    private function curl_handler($payment_id, $amount)  {

        //order master 
        //id 
        //mysqlSQL
        //payment amount 

        $url            = 'https://api.razorpay.com/v1/payments/'.$payment_id.'/capture';
        $key_id         = "rzp_live_MPXi8bZljnOFdi";
        $key_secret     = "LTtZdegLjeIMJSWni6nRQ2Pv";
        $fields_string  = "amount=$amount";
        //cURL Request
        $ch = curl_init();
        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERPWD, $key_id.':'.$key_secret);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        return $ch;
    }   
        
    // callback method
    public function razorpaycallback() {   
        
        /**Array ( [razorpay_payment_id] => pay_KjS7dV1VvBTByO [merchant_order_id] => ABC-20221123161737 [merchant_trans_id] => 20221123161737 [merchant_product_info_id] => Report Description [merchant_surl_id] => http://localhost/factmrstage/razorpaysuccess [merchant_furl_id] => http://localhost/factmrstage/razorpayfailed [card_holder_name_id] => Manoj Koli [merchant_total] => 100 [merchant_amount] => 1 )
            ***/
        print_r($this->input->post());  //pay_KjQjr8EGojFPFY exit();  
        if (!empty($this->input->post('razorpay_payment_id')) && !empty($this->input->post('merchant_order_id'))) {
            $razorpay_payment_id = $this->input->post('razorpay_payment_id');
            $merchant_order_id = $this->input->post('merchant_order_id');
            
            $_SESSION['razorpay_payment_id'] = $this->input->post('razorpay_payment_id');
            $_SESSION['merchant_order_id'] = $this->input->post('merchant_order_id');

           // $this->session->set_flashdata('razorpay_payment_id', $this->input->post('razorpay_payment_id'));
           // $this->session->set_flashdata('merchant_order_id', $this->input->post('merchant_order_id'));
            $currency_code = 'USD';
            $amount = $this->input->post('merchant_total');
            $success = false;
            $error = '';
            try {                
                $ch = $this->curl_handler($razorpay_payment_id, $amount);
                //execute post
                $result = curl_exec($ch);
                $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                if ($result === false) {
                    $success = false;
                    $error = 'Curl error: '.curl_error($ch);
                } else {
                    $response_array = json_decode($result, true);
                        //Check success response
                        if ($http_status === 200 and isset($response_array['error']) === false) {
                            $success = true;
                        } else {
                            $success = false;
                            if (!empty($response_array['error']['code'])) {
                                $error = $response_array['error']['code'].':'.$response_array['error']['description'];
                            } else {
                                $error = 'RAZORPAY_ERROR:Invalid Response <br/>'.$result;
                            }
                        }
                }
                //close curl connection
                curl_close($ch);
            } catch (Exception $e) {
                $success = false;
                $error = 'Request to Razorpay Failed';
            }
            
            if ($success === true) {
                print_r($_SESSION);

                if(!empty($_SESSION['ci_subscription_keys'])) {
                    unset($_SESSION['ci_subscription_keys']);
                    //$this->session->unset_userdata('ci_subscription_keys');
                }
                if (!$order_info['order_status_id']) {
                    redirect($this->input->post('merchant_surl_id'));
                } else {
                    redirect($this->input->post('merchant_surl_id'));
                }

            } else {
                redirect($this->input->post('merchant_furl_id'));
            }
        } else {
            echo 'An error occured. Contact site administrator, please!';
        }
    } 
    public function razorpaysuccess() {
        $data['title'] = 'Razorpay Success | PMR';
        $data['status'] = 'Your transaction is successful';
      //  echo "<h4>Your transaction is successful</h4>";  
       // echo "<br/>";
        //echo "Transaction ID: ".$_SESSION['razorpay_payment_id'];
        //echo "<br/>";
        //echo "Order ID: ".$_SESSION['merchant_order_id'];exit();

        $data['meta'] = array('viewport','noindex');
                $detect = new Mobile_Detect();
                if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                        $this->load->view("thanks_razorpay_mobile",$data);
                }else{
                        $this->load->view("thanks_razorpay",$data);
                }

    }  
    public function razorpayfailed() {
        $data['title'] = 'Razorpay Failed | PMR';  
         $data['status'] = 'Your transaction got Failed';
       // echo "<h4>Your transaction got Failed</h4>";            
        //echo "<br/>";
        //echo "Transaction ID: ".$_SESSION['razorpay_payment_id'];
        //echo "<br/>";
        //echo "Order ID: ".$_SESSION['merchant_order_id'];
         $data['meta'] = array('viewport','noindex');
                $detect = new Mobile_Detect();
                if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                        $this->load->view("thanks_razorpay_mobile",$data);
                }else{
                        $this->load->view("thanks_razorpay",$data);
                }
    }

}
?>
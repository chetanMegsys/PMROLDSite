<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Checkout extends MY_Controller{

        public function __construct(){
                $this->load->model("checkout_model");
                $this->load->model("sample/sample_model");
        }

        public function index($id)
        {      // echo "<pre>";

                $data['report_data'] = $this->checkout_model->getReportData($id);
                // print_r($data['report_data']);
                if(isset($_POST['btnPayment']) && $_POST['btnPayment'] != '' )
                {
                        // print_r($_POST); exit();
                        $checkout_id = $_POST['checkout_id'];
                        $order_det['payment_type'] = $paymentType = $_POST['payment_type'];


                        //add here code update the payment type      
                        $this->db->where('id', $checkout_id);
                        $this->db->update("order_master_live", array('payment_type' => $_POST['payment_type'] ));
                        
                        
                        $data['order_det'] = $this->checkout_model->getOrderDetails($checkout_id);           
                        $order_det = $data['order_det'][0];

                        $_SESSION['paypal_insert_id'] = $checkout_id;
                        $_SESSION['rep_name'] = $data['report_data'][0]['rep_keyword'];
                        $_SESSION['rep_id'] = $id;
                        $_SESSION['paypal_amount']  = $order_det['rep_amount'] ;                                      
                        $getData['reportData'] = $this->checkout_model->getReportById($id);
                        $emailData = $this->checkout_model->GetEmailDetails(2);                  
                        $data['rep_name'] = $getData['reportData'][0]['rep_name'];
                        $email_setting['name'] = $order_det['cust_name'];
                        $email_setting['country'] = $order_det['cust_country'];
                        $email_setting['email'] = $order_det['cust_email'];
                        $email_setting['phone'] = $order_det['cust_phone'];
                        $email_setting['address'] = $order_det['cust_addr'];
                        $email_setting['report'] = $getData['reportData'][0]['rep_name'];
                        $email_setting['report_type'] = $getData['reportData'][0]['rep_type']=='N' ? 'Published Report' : 'Ongoing Report';
                        $email_setting['category'] = $getData['reportData'][0]['cat_name'];
                        $email_setting['city'] = $order_det['cust_city'];
                        $email_setting['state'] = $order_det['cust_state'];
                        $email_setting['zipcode'] = $order_det['cust_zipcode'];
                        $email_setting['email_to'] = $emailData->email_to;
                        
                        $email_setting['price'] = $order_det['rep_amount'];
                        $email_setting['subject'] = "Purchase Attempt By ".$paymentType;
                        $email_setting['source'] = "Direct Purchase";
                        $this->lib_mails->LibDPMail($email_setting, $paymentType);
                        
                        if($paymentType=='PayPal'){   

                        // $this->paypal_checkout($checkout_id);                                                
                        redirect(WEBSITE_URL.'checkout/paypal/'.$checkout_id);              
                        // $_SESSION['paypal_amount'] = $order_det['rep_amount'];
                        // $_SESSION['paypal_insert_id'] = $insert_id;                                   
                        // $data['report_data'] =  $order_det;
                        // $this->load->view('checkout/paypal_payment',$data); 

                        }
                        else if($paymentType=='Razorpay'){
                         redirect(WEBSITE_URL.'checkout/razorpay/'.$checkout_id);

                        }else if($paymentType=='Stripe'){
                        redirect(WEBSITE_URL.'checkout/stripe/'.$checkout_id);

                        }
                        
                        

                }
                elseif(isset($_POST['btnCheckout']) && $_POST['btnCheckout'] != '' && !$this->is_bot($_SERVER['HTTP_USER_AGENT']) )
                {
                        

                        $data['postdata'] = $_POST;
                        $data['licenseType'] = $_POST['license_type']; 
                        $chk_data['promo_code'] =  $data['hdnPromoCode']  = $_POST['hdnPromoCode']; 
                        $chk_data['promo_id'] = $_POST['promoid']; 

                        $countryCode = $this->data_filter_post($_POST['countryCode']); ///calling code 
                        $chk_data['cust_country_code'] = $this->data_filter_post($_POST['cust_country_code']); //country code like IN for india 
                        $chk_data['cust_country'] =  $cust_country = $this->data_filter_post($_POST['cust_country']); // country name united state
                        $res = $this->db->select("code")->from("countries")->where("name",strtolower($cust_country))->get()->result_array();
                        
                        if(isset($res[0]['code']) && $res[0]['code'] !='' )
                        { $chk_data['countryCode'] = $res[0]['code'];
                        }
                        else{   $chk_data['countryCode'] = $countryCode;
                        }

                        if(!isset($_GET['custom'])){
                                $chk_data['repSource'] = 'R';
                        }
                        else{
                                $chk_data['repSource'] = 'C';
                        }

                        $chk_data['license_type'] = $this->data_filter_post($_POST['license_type']);
                        $chk_data['cust_email'] = $_POST['cust_email'];
                        $chk_data['cust_name'] = $this->data_filter_post($_POST['cust_name']);
                        $customermobile = str_replace("+", "",str_replace("-", "",trim($_POST['cust_phone'])));
                        $chk_data['cust_phone'] =  $this->data_filter_post($customermobile);

                        $chk_data['cust_addr'] = $this->data_filter_post($_POST['cust_addr']);
                        $chk_data['cust_city'] = ''; //$this->data_filter_post($_POST['cust_city']);
                        $chk_data['cust_state'] = ''; //$this->data_filter_post($_POST['cust_state']);
                        $chk_data['cust_zipcode'] = ''; //$this->data_filter_post($_POST['cust_zipcode']);

                        
                        
                        $chk_data['captcha'] =  $this->data_filter_post($_POST['captcha']);
                        $chk_data['hdnCaptcha'] =  $this->data_filter_post($_POST['hdnCaptcha']);
                        if(isset($chk_data['captcha']) != ''  && isset($chk_data['hdnCaptcha']) != '' && $chk_data['captcha'] != $chk_data['hdnCaptcha'])
                        {
                                redirect(WEBSITE_URL);                                
                        }
                        
                                /*** blocker code ***/
                        $domailArray = explode('@', $_POST['cust_email']);
                        $emailDomain = $domailArray[1];
                        $block_data = $this->checkout_model->getBlockerData($_POST['cust_name'],$_POST['cust_email'],$emailDomain);
                        if(!empty($block_data)){
                                redirect(WEBSITE_URL);
                        }

                        $old_time = date('Y-m-d H:i:s', strtotime('-1 minutes'));
                        $current_time =  date('Y-m-d H:i:s');
                        $checkedinserted_data = $this->checkout_model->getTheUsersData($_POST['cust_email'], $old_time , $current_time);                             
                        if(count($checkedinserted_data) > 10 )
                        {                                
                                $dataInsertBlocker = array("name" => $_POST['cust_name'] , "email" => $_POST['cust_email'] , "status" => 'Y' , "created_date" => date('Y-m-d H:i:s') );
                                $this->db->insert("blocker",$dataInsertBlocker);
                                redirect(WEBSITE_URL);
                        }

                        if($_POST['cust_email'] == 'sample@email.tst' )
                        {
                                redirect(WEBSITE_URL);   
                        }

                        if($_POST['cust_email'] == 'testing@example.com' )
                        {
                                redirect(WEBSITE_URL);   
                        }

                        /*** blocker code ***/

                        if($chk_data['cust_email'] == "" || !filter_var($chk_data['cust_email'], FILTER_VALIDATE_EMAIL))
                        {

                                redirect(WEBSITE_URL);
                        }

                        $chk_data['rep_name'] = $data['report_data'] [0]['rep_keyword'];
                        $chk_data['rep_id'] = $data['report_data'][0]['rep_id'];  


                        $licenseField = '';
                        if($_POST['license_type']=='S'){
                        $licenseField = 'rep_price_sul';
                        }elseif($_POST['license_type']=='M'){
                        $licenseField = 'rep_price_el';
                        }elseif($_POST['license_type']=='C'){
                        $licenseField = 'rep_price_cul';
                        }

                        $finalDiscountPrice = 0 ;            
                        $base_amount  = 0 ;
                        $Data_base_amount =  $this->checkout_model->getReportPrice($chk_data['rep_id'],$licenseField,$is_custom="");
                        $chk_data['base_amount'] =  $base_amount  = $Data_base_amount[0]['rep_price'];
                        
                        $selectPromoData = $this->checkout_model->getPromoById($_POST['promoid'],$_POST['license_type']);

                        $data['discount_percent'] =  $chk_data['discount_percent'] = isset($selectPromoData[0]['discount']) ? $selectPromoData[0]['discount'] : 0;
                        $data['promo_id'] = isset($selectPromoData[0]['id']) ? $selectPromoData[0]['id'] : 0;

                                
                        $chk_data['discount_amount'] = $finalDiscountPrice = ($base_amount * $chk_data['discount_percent'])/100;
                        $chk_data['rep_amount']  =  ($base_amount - $finalDiscountPrice);

                        $chk_id = $this->checkout_model->insertData($chk_data);    
                        $data['checkout_id'] = $chk_id;
                        
                        $detect = new Mobile_Detect();
                        if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                                $this->load->view("checkout_payment_mobile",$data);
                        }else{
                                $this->load->view("checkout_payment",$data);
                        }

                        

                }
                else if(isset($_POST['proceed_to_register']) && $_POST['proceed_to_register'] != '' )
                {
                        
                        $data['licenseType'] = $_POST['radLicense'];
                        $data['selected_license_type'] = $_POST['radLicense'];
                        $data['hdnPromoCode'] = $_POST['hdnPromoCode'];
                        //  print_r($_POST); exit();
                        $selectPromoData = $this->checkout_model->getPromoCode($data['hdnPromoCode'],$data['selected_license_type']);

                        $data['discount_percent'] = isset($selectPromoData[0]['discount']) ? $selectPromoData[0]['discount'] : 0;
                        $data['promo_id'] = isset($selectPromoData[0]['id']) ? $selectPromoData[0]['id'] : 0;

                        $detect = new Mobile_Detect();
                        if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                        $this->load->view("checkout_form_mobile", $data);
                        }else{
                        $this->load->view("checkout_form", $data);
                        }
                }
                else if($id > 0 )
                {
                        $data['id'] = $id;
                        $detect = new Mobile_Detect();
                        if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                                $this->load->view("checkout_mobile",$data);
                        }else{
                                $this->load->view("checkout",$data);
                        }    
                }
                else{
                        redirect(WEBSITE_URL);    
                }
                

        }


        public function validate_promo(){
                $promo = $_POST['promo'];

                $license_type = '';
                if(isset($_POST['license_type']) && $_POST['license_type']!=''){
                        $license_type = $_POST['license_type'];
                }

                $selectData = $this->checkout_model->getPromoCode($promo,$license_type);
                $data['promo_id'] = isset($selectData[0]['id']) ? $selectData[0]['id'] : 0;
                $data['discount'] = isset($selectData[0]['discount']) ? $selectData[0]['discount'] : 0;

                if(!empty($selectData)){
                        $data['flag'] = true;
                }else{
                        $data['flag'] = false;
                }

                $data['csrfName'] = $this->security->get_csrf_token_name();
                $data['csrfHash'] = $this->security->get_csrf_hash();

                echo json_encode($data);
        }

        public function cart_table($id){

                $data = array();
                $cust_phone = "";

                        if(isset($_POST['btnCheckout']))
                {
                                $detect = new Mobile_Detect();
                        if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                                $this->load->view("choose_payment_mobile",$data);
                        }else{
                                $this->load->view("choose_payment",$data);
                        }
                }
                elseif(isset($_POST['lastbtnCheckout'])){
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
                        // $this->load->view("checkout_form",$data);
                                $detect = new Mobile_Detect();
                        if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                                $this->load->view("checkout_form_mobile",$data);
                        }else{
                                $this->load->view("checkout_form",$data);
                        }
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
                
        public function finalOrder($paypal_insert_id,$rep_id){

                //PAYPAL_CLIENT_ID - AZm8QRKvuxzHcpUq9TPNPnO8_uWHhzA-bk8ZKDc41jNTJZzbd53wBhXrCN_7fKXOHIIiU-Uhn303kN3N
                //$PAYPAL_SECRET - EF2WO4KGa4EOk5Xq41lwfTfPegBtrBWpLyOz_XjiuBZBxEXvP-9vMDLarKgGFIN03utJQkRn6rFjsKZ9


                //$PAYPAL_CLIENT_ID = 'AWTETScyr3_QtjVJMwD8LhDdlopRrG3tDxC6OyT-q5sBBH-j6YYVuOYThuBnW8Tfmnmc2Ft9HKvnTdyu'; //'ASO78AsyhTDXxcYm1gOmTXRkpxAU_JVnNc-e9Ba7nqbLVdwjOIJ18_P_TqGXcAOCwjch_r9ViUPPNeNT'; 
                //$PAYPAL_SECRET = 'ELPmxGCteBOnWQ5fWKnGsGnOpVRsZcp8C6SstGVPCbt1X8jjwzGBHqmhkN3d3NWU2XKo6tYUk_jbnNsi'; //'EIwMyVotwvUZwrn_j7DO9IEAYxfkH0jw935ftrk32wMv02d7PC7IFINPiJ7aA5L9_IB0Xbx2qrcVDxus'; 

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
                
                $this->db->where('id', $paypal_insert_id);
                $this->db->update("order_master_live", array('token' => $token ));

                $this->PayPalLogs($order_id = $paypal_insert_id ,$api_name = 'Auth' ,$rep_id = $rep_id,$api_header="" , $api_request=$PAYPAL_CLIENT_ID.":".$PAYPAL_SECRET,$api_response = $result);



                //get the order details here 
                $rowdata = $this->checkout_model->getOrderDetails($paypal_insert_id);
                //echo $this->db->last_query();
                // print_r($rowdata);
                $_SESSION['paypal_amount'] = $rowdata[0]['rep_amount']  ;
                $_SESSION['paypal_insert_id'] = $paypal_insert_id ;
                $_SESSION['rep_id'] = $rep_id ;
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
                $datarisk  = array("tracking_id" => $paypal_insert_id , "additional_data" => array($pu1,$pu2,$pu3,$pu4,$pu5,$pu6));
                //$datarisks = json_encode($datarisk);
                $curl = curl_init();
                //live chec credentials //CURLOPT_URL => "https://api-m.sandbox.paypal.com/v1/risk/transaction-contexts/PDKVC7GKMTGES/".$paypal_insert_id,

                curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api-m.sandbox.paypal.com/v1/risk/transaction-contexts/JK6HQCR4ZGHEY/".$paypal_insert_id,
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

                $this->PayPalLogs($order_id = $paypal_insert_id,$api_name = 'risk' ,$rep_id = $rep_id,$api_header = json_encode($headersRisk) ,$api_request=json_encode($datarisk),$api_response = $httpcode);

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
                $rep_name = substr(strip_tags(trim($this->removeSpecialChar($rowdata[0]['rep_name']))),0,125);
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
                'return_url' => WEBSITE_URL.'checkout/'.$rowdata[0]['rep_id'],
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

                $urls = 'https://api.sandbox.paypal.com/v2/checkout/orders';

                $header = array('Content-Type:application/json','Authorization: Bearer '.$token,'PayPal-Request-Id: '.$rowdata[0]['id'],'PayPal-Client-Metadata-Id: '.$rowdata[0]['id']);

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
                $_SESSION['order_id'] = $paypal_order_id = $array3['id'];

                echo $result3;

                $this->db->where('id', $paypal_insert_id);
                $this->db->update("order_master_live", array('paypal_order_id' => $paypal_order_id ));

                $this->PayPalLogs($order_id = $rowdata[0]['id'] ,$api_name = 'order' ,$rep_id = $rowdata[0]['rep_id'],$api_header = json_encode($header),$api_request= json_encode($order) ,$api_response = $result3);
                //      }




        }
                
        public function CapturePaypalOrder2($paypal_insert_id, $rep_id){

                $rowdata = $this->checkout_model->getOrderDetails($paypal_insert_id);
                $token = $rowdata[0]['token'];            
                $id = $rowdata[0]['paypal_order_id'];            
                $urls = "https://api.sandbox.paypal.com/v2/checkout/orders/$id/capture";

                $header = array('Content-Type:application/json','Authorization: Bearer '.$token,'PayPal-Client-Metadata-Id: '.$paypal_insert_id);
                $orderData = "";
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


                $this->PayPalLogs($order_id = $paypal_insert_id ,$api_name = 'capture' ,$rep_id = $rep_id,$api_header = json_encode($header),$api_request= json_encode($orderData) ,$api_response = $result3);


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
                //      $this->session->unset_userdata('order_id');
                //      $this->session->unset_userdata('token');
                //      $this->session->unset_userdata('status');
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
                $data = trim($data);  
                $data = strip_tags($data);
                $data = preg_replace('/\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|$!:,.;]*[A-Z0-9+&@#\/%=~_|$]/i', '\1', str_replace("?","",$data));
                
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
                $data['callback_url']       = base_url().'razorpay/razorpaycallback';
                $data['surl']               = base_url().'razorpay/thanks-razorpay';;
                $data['furl']               = base_url().'razorpay/razorpayfailed';;
                $data['currency_code']      = 'USD';
                $this->load->view('razorpay', $data);
        }

        public function stripe()
        {
                $data['title']              = 'Checkout payment | Stripe';  
                $data['callback_url']       = base_url().'stripe/stripecallback';
                $data['surl']               = base_url().'stripe/thanks-stripe';;
                $data['furl']               = base_url().'stripe/stripefailed';;
                $data['currency_code']      = 'USD';
                $this->load->view('stripe', $data);
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
        // print_r($this->input->post());  //pay_KjQjr8EGojFPFY exit();  
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

        // callback method
        public function stripecallback() {   

                /**Array ( [razorpay_payment_id] => pay_KjS7dV1VvBTByO [merchant_order_id] => ABC-20221123161737 [merchant_trans_id] => 20221123161737 [merchant_product_info_id] => Report Description [merchant_surl_id] => http://localhost/factmrstage/razorpaysuccess [merchant_furl_id] => http://localhost/factmrstage/razorpayfailed [card_holder_name_id] => Manoj Koli [merchant_total] => 100 [merchant_amount] => 1 )
                         ***/
                // print_r($this->input->post());  //pay_KjQjr8EGojFPFY exit();  
                if (!empty($this->input->post('stripe_payment_id')) && !empty($this->input->post('merchant_order_id'))) {
                        $razorpay_payment_id = $this->input->post('stripe_payment_id');
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

        public function stripesuccess() {
                $data['title'] = 'Stripe Success | PMR';
                $data['status'] = 'Your transaction is successful';
                //  echo "<h4>Your transaction is successful</h4>";  
                // echo "<br/>";
                //echo "Transaction ID: ".$_SESSION['razorpay_payment_id'];
                //echo "<br/>";
                //echo "Order ID: ".$_SESSION['merchant_order_id'];exit();
        
                $data['meta'] = array('viewport','noindex');
                $detect = new Mobile_Detect();
                if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                $this->load->view("thanks_stripe_mobile",$data);
                }else{
                $this->load->view("thanks_stripe",$data);
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

        public function stripefailed() {
                $data['title'] = 'Stripe Failed | PMR';  
                $data['status'] = 'Your transaction got Failed';
                // echo "<h4>Your transaction got Failed</h4>";            
                //echo "<br/>";
                //echo "Transaction ID: ".$_SESSION['razorpay_payment_id'];
                //echo "<br/>";
                //echo "Order ID: ".$_SESSION['merchant_order_id'];
                $data['meta'] = array('viewport','noindex');
                $detect = new Mobile_Detect();
                if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                        $this->load->view("thanks_stripe_mobile",$data);
                }else{
                        $this->load->view("thanks_stripe",$data);
                }
        }
        
        public function paypal_checkout($checkout_id){
        $data['order_det'] = $this->checkout_model->getOrderDetails($checkout_id);
        $data['report_data'] = $data['order_det'][0];   

                $detect = new Mobile_Detect();
                if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                        $this->load->view("paypal_payment_mobile",$data);
                }else{
                        $this->load->view("paypal_payment",$data);
                }

        //$this->load->view('checkout/paypal_payment',$data); 
        }

        public function razorpay_checkout($checkout_id){
                $data['order_det'] = $this->checkout_model->getOrderDetails($checkout_id);
                $data['report_data'] = $data['order_det'][0];   

                $data['title']              = 'Checkout payment | PMR';  
                $data['callback_url']       = base_url().'checkout/razorpay/razorpaycallback';
                $data['surl']               = base_url().'checkout/razorpay/thanks-razorpay';;
                $data['furl']               = base_url().'checkout/razorpay/razorpayfailed';;
                $data['currency_code']      = 'USD';                                     
                        
                $this->load->view('checkout/razorpay_payment',$data); 
        }

        public function stripe_checkout($checkout_id){
                $data['order_det'] = $this->checkout_model->getOrderDetails($checkout_id);
                $data['report_data'] = $data['order_det'][0];   
                $data['checkout_id'] = $checkout_id;
                $data['stripe_p_key'] = $this->config->item('stripe_publishable_key');
                // $detect = new Mobile_Detect();
                // if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                //         $this->load->view("stripe_payment_mobile",$data);
                // }else{
                //         $this->load->view("stripe_payment",$data);
                // }                 
                   
                $this->load->view('stripe_payment',$data); 
        }

        public function calculateTax($stripe, $items, $currency) {
                $taxCalculation = $stripe->tax->calculations->create([
                        'currency' => $currency,
                        'customer_details' => [
                        'address' => [
                                'line1' => '920 5th Ave',
                                'city' => 'Seattle',
                                'state' => 'WA',
                                'postal_code' => '98104',
                                'country' => 'US',
                        ],
                        'address_source' => 'shipping',
                        ],
                        'line_items' => array_map( array($this, 'buildLineItem'), $items),
                ]);
                //echo $taxCalculation;
                return $taxCalculation;
        }
        
        public function buildLineItem($item) {
                return [
                        'amount' => $item->amount, // Amount in cents
                        'reference' => $item->id, // Unique reference for the item in the scope of the calculation
                ];
        }
        // Securely calculate the order amount, including tax
        public function calculateOrderAmount($items, $taxCalculation) {
                // Replace this constant with a calculation of the order's amount
                // Calculate the order total with any exclusive taxes on the server to prevent
                // people from directly manipulating the amount on the client
               // var_dump();
               for($i =0 ; count($items) > $i ; $i++){
                $orderAmount = $items[0]->amount * 100;
               }
                $orderAmount += $taxCalculation->tax_amount_exclusive;

                return $orderAmount;
        }

        public function stripe_order(){
                require_once( APPPATH . 'third_party/stripe/init.php');
               // $stripeSecretKey = 'sk_test_51OYsTqAaq7JBewhTceJQEFurRYcJDBGHIfIoSnLKHdLCYRLo7tnNsOO7WHgTHguc7INLebbf4xSQJ8q2XFFAUPsk00FBsX2can';
                $stripe = new \Stripe\StripeClient($this->config->item('stripe_secret_key'));
                header('Content-Type: application/json');
                try {
                // retrieve JSON from POST body
                
                $jsonStr = $this->input->raw_input_stream;
                if (!$jsonStr && isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
                        $jsonStr = file_get_contents('php://input');
                }

                if (!empty($jsonStr)) {
                        $jsonObj = json_decode($jsonStr);
                         // Create a Tax Calculation for the items being sold
                        $taxCalculation = $this->calculateTax($stripe, $jsonObj->items, 'usd');
                }
               // var_dump($jsonObj->items[0]->c_name);
               $customer = $stripe->customers->create([
                        'name' => $jsonObj->items[0]->c_name,
                        'email' => $jsonObj->items[0]->c_email,
                        'phone' => $jsonObj->items[0]->c_phone,
                      ]);
                // Create a PaymentIntent with amount and currency
                $paymentIntent = $stripe->paymentIntents->create([
                        'customer' => $customer->id,
                        'amount' => $this->calculateOrderAmount($jsonObj->items, $taxCalculation),
                        'currency' => 'usd',
                        // In the latest version of the API, specifying the `automatic_payment_methods` parameter is optional because Stripe enables its functionality by default.
                        'automatic_payment_methods' => [
                        'enabled' => true,
                        ],
                        'metadata' => [
                        'tax_calculation' => $taxCalculation->id
                        ],
                ]);

                $output = [
                        'clientSecret' => $paymentIntent->client_secret,
                ];
              
                echo json_encode($output, JSON_FORCE_OBJECT);
            
                } catch (Error $e) {
                http_response_code(500);
                echo json_encode(['error' => $e->getMessage()]);
                }
        }

        public function stripe_order1()
        {
            //include Stripe PHP library
            require_once APPPATH.'third_party/stripe/init.php';
           // require_once( APPPATH . 'third_party/stripe/init.php');
           $stripeSecretKey = 'pk_test_51OYsTqAaq7JBewhTYzqsc0nKHWkkZZPxDLLqDkcUllg59Uk1lhWOEvypnqKalw13MMXs4IwNHMxyFImSbUVSVRPS00SIDViLuP';
          //  \Stripe\Stripe::setApiKey($this->config->item('stripe_secret_key'));
          \Stripe\Stripe::setApiKey($stripeSecretKey);
    
            $message = null;
            $success = false;
            $charge = null;
            $err = null;
            $data = [];
    
            try {
    
                //Creates timestamp that is needed to make up orderid
                $timestamp = strftime('%Y%m%d%H%M%S');
                //You can use any alphanumeric combination for the orderid. Although each transaction must have a unique orderid.
                $orderid = $timestamp.'-'.mt_rand(1, 999);
    
                //charge a credit or a debit card
                $charge = \Stripe\Charge::create([
                    'amount'      => 1500,//$this->input->post('amount') * 100,
                    'currency'    => 'gbp',
                    'source'      => $this->input->post('stripeToken'),
                    'description' => 'TEST PAYMENT',
                    'metadata'    => [
                        'order_id' => $orderid,
                    ],
                ]);
            } catch (\Stripe\Error\Card $e) {
                // Since it's a decline, \Stripe\Error\Card will be caught
                $body = $e->getJsonBody();
                $err = $body['error'];
    
                /* print('Status is:' . $e->getHttpStatus() . "\n");
                print('Type is:' . $err['type'] . "\n");
                print('Code is:' . $err['code'] . "\n");
    
                // param is '' in this case
                print('Param is:' . $err['param'] . "\n");
                print('Message is:' . $err['message'] . "\n"); */
    
                $message = $err['message'];
            } catch (\Stripe\Error\RateLimit $e) {
                // Too many requests made to the API too quickly
            } catch (\Stripe\Error\InvalidRequest $e) {
                // Invalid parameters were supplied to Stripe's API
            } catch (\Stripe\Error\Authentication $e) {
                // Authentication with Stripe's API failed
                // (maybe you changed API keys recently)
            } catch (\Stripe\Error\ApiConnection $e) {
                // Network communication with Stripe failed
            } catch (\Stripe\Error\Base $e) {
                // Display a very generic error to the user, and maybe send
                // yourself an email
            } catch (Exception $e) {
                // Something else happened, completely unrelated to Stripe
            }
    
            if ($charge) {
                //retrieve charge details
                $chargeJson = $charge->jsonSerialize();
    
                //check whether the charge is successful
                if ($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1) {
    
                    // insert response into db
                //     $this->transaction->response = json_encode($chargeJson);
                //     $this->transaction->status = TRANS_SUCCESS;
                //     $this->transaction->insert_transaction();
    
                    $data = [
                        'balance_transaction' => $chargeJson['balance_transaction'],
                        'receipt_url'         => $chargeJson['receipt_url'],
                        'order_id'            => $orderid,
                    ];
    
                    $success = true;
                    $message = 'Payment made successfully.';
                } else {
    
                    // insert response into db
                //     $this->transaction->response = json_encode($chargeJson);
                //     $this->transaction->status = TRANS_FAIL;
                //     $this->transaction->insert_transaction();
    
                    $success = true;
                    $message = 'Something went wrong.';
                }
            }
    
            if ($success) {
                echo json_encode(['success' => $success, 'message' => $message, 'data' => $data]);
            } else {
                // insert response into db
                // $this->transaction->response = json_encode($err);
                // $this->transaction->status = TRANS_FAIL;
                // $this->transaction->insert_transaction();
    
                echo json_encode(['success' => $success, 'message' => $message, 'data' => $data]);
            }
        }
        // Invoke this method in your webhook handler when `payment_intent.succeeded` webhook is received
        function handlePaymentIntentSucceeded($stripe, $paymentIntent) {
                // Create a Tax Transaction for the successful payment
                $stripe->tax->transactions->createFromCalculation([
                "calculation" => $paymentIntent->metadata['tax_calculation'],
                "reference" => "myOrder_123", // Replace with a unique reference from your checkout/order system
                ]);
        }
        public function stripe_status(){
                require_once(APPPATH . 'third_party/stripe/init.php');
                $stripe = new \Stripe\StripeClient('sk_test_51OYsTqAaq7JBewhTceJQEFurRYcJDBGHIfIoSnLKHdLCYRLo7tnNsOO7WHgTHguc7INLebbf4xSQJ8q2XFFAUPsk00FBsX2can');
                header('Content-Type: application/json');

                try {
                // retrieve JSON from POST body
                $jsonStr = file_get_contents('php://input');
                $jsonObj = json_decode($jsonStr);

                $session = $stripe->checkout->sessions->retrieve($jsonObj->session_id);

                echo json_encode(['status' => $session->status, 'customer_email' => $session->customer_details->email]);
                http_response_code(200);
                } catch (Error $e) {
                http_response_code(500);
                echo json_encode(['error' => $e->getMessage()]);
                }
        }
        /* Paypal Code 2nd time */
        public function finalOrder22(){

                //$PAYPAL_CLIENT_ID = 'ASO78AsyhTDXxcYm1gOmTXRkpxAU_JVnNc-e9Ba7nqbLVdwjOIJ18_P_TqGXcAOCwjch_r9ViUPPNeNT'; 
                //$PAYPAL_SECRET = 'EIwMyVotwvUZwrn_j7DO9IEAYxfkH0jw935ftrk32wMv02d7PC7IFINPiJ7aA5L9_IB0Xbx2qrcVDxus'; 
                //New Sandbox
                // $PAYPAL_CLIENT_ID = 'Aejbxyih-ba3WEuPEr_igvreCSkW59oKtH7TJXVAcnyDX8Nuk0B-dKOorPhRZ6s8EyoXIQ1Dy7Ro3sEz'; 
                // $PAYPAL_SECRET = 'EBIaw9jcyTpWPix7LSu1kQODxWFupa18KDWBT3sIPTaR59Y28tcjFYihocRPfdMPiRnOCaqtYLbqhdjp';
                //New Live
                $PAYPAL_CLIENT_ID = 'ASThGO-xj1s9V3Op-Ce-FxYjvt4yBGQraOIWJYFSazdb4-f-w91gQZ38BCdZ_5jmsM3jSHTTfYK7vxfT'; 
                $PAYPAL_SECRET = 'EG2_UdJM2QZkLR1ly2AuLKewWJhar8OWFQPdpbmyk1OTG4jJdZZyFFPdutDWCJ8BbyiCZ8vpmukCAL_d'; 

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
                $rep_name = substr(strip_tags(trim($this->removeSpecialChar($rowdata[0]['rep_name']))),0,125);
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
                //  }
                
        }

        public function CapturePaypalOrder22()
        {

                $id = $_SESSION['order_id'];              
                $urls = "https://api-m.paypal.com/v2/checkout/orders/$id/capture";

                $header = array('Content-Type:application/json','Authorization: Bearer '.$_SESSION['token'],'PayPal-Client-Metadata-Id: '.$_SESSION['paypal_insert_id']);
                $orderData = array();

                $ch3 = curl_init($urls);

                // Attach encoded JSON string to the POST fields
                //curl_setopt($ch3, CURLOPT_POSTFIELDS, "");
                curl_setopt($ch3, CURLOPT_POSTFIELDS, $ordersjson);
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

        public function is_bot($user_agent) {

                $botRegexPattern = "(googlebot\/|Googlebot\-Mobile|Googlebot\-Image|Google favicon|Mediapartners\-Google|bingbot|slurp|java|wget|curl|Commons\-HttpClient|Python\-urllib|libwww|httpunit|nutch|phpcrawl|msnbot|jyxobot|FAST\-WebCrawler|FAST Enterprise Crawler|biglotron|teoma|convera|seekbot|gigablast|exabot|ngbot|ia_archiver|GingerCrawler|webmon |httrack|webcrawler|grub\.org|UsineNouvelleCrawler|antibot|netresearchserver|speedy|fluffy|bibnum\.bnf|findlink|msrbot|panscient|yacybot|AISearchBot|IOI|ips\-agent|tagoobot|MJ12bot|dotbot|woriobot|yanga|buzzbot|mlbot|yandexbot|purebot|Linguee Bot|Voyager|CyberPatrol|voilabot|baiduspider|citeseerxbot|spbot|twengabot|postrank|turnitinbot|scribdbot|page2rss|sitebot|linkdex|Adidxbot|blekkobot|ezooms|dotbot|Mail\.RU_Bot|discobot|heritrix|findthatfile|europarchive\.org|NerdByNature\.Bot|sistrix crawler|ahrefsbot|Aboundex|domaincrawler|wbsearchbot|summify|ccbot|edisterbot|seznambot|ec2linkfinder|gslfbot|aihitbot|intelium_bot|facebookexternalhit|yeti|RetrevoPageAnalyzer|lb\-spider|sogou|lssbot|careerbot|wotbox|wocbot|ichiro|DuckDuckBot|lssrocketcrawler|drupact|webcompanycrawler|acoonbot|openindexspider|gnam gnam spider|web\-archive\-net\.com\.bot|backlinkcrawler|coccoc|integromedb|content crawler spider|toplistbot|seokicks\-robot|it2media\-domain\-crawler|ip\-web\-crawler\.com|webmeup\-crawler\.com|siteexplorer\.info|elisabot|proximic|changedetection|blexbot|arabot|WeSEE:Search|niki\-bot|CrystalSemanticsBot|rogerbot|360Spider|psbot|InterfaxScanBot|Lipperhey SEO Service|CC Metadata Scaper|g00g1e\.net|GrapeshotCrawler|urlappendbot|brainobot|fr\-crawler|binlar|SimpleCrawler|Livelapbot|Twitterbot|cXensebot|smtbot|bnf\.fr_bot|A6\-Indexer|ADmantX|Facebot|Twitterbot|OrangeBot|memorybot|AdvBot|MegaIndex|SemanticScholarBot|ltx71|nerdybot|xovibot|BUbiNG|Qwantify|archive\.org_bot|Applebot|TweetmemeBot|crawler4j|findxbot|SemrushBot|yoozBot|lipperhey|y!j\-asr|Domain Re\-Animator Bot|AddThis|YisouSpider|BLEXBot|YandexBot|SurdotlyBot|AwarioRssBot|FeedlyBot|Barkrowler|Gluten Free Crawler|Cliqzbot|DataForSeoBot|InfoTigerBot|serpstatbot\.com)";


                return preg_match("/{$botRegexPattern}/", $user_agent);

        }

}
?>
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
                                $data["cust_phone"] = "(".$_POST['countryCode'].")".$_POST['phoneNo'];
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

                                $getData = $this->checkout_model->getReportPrice($id,$licenseField);
                                $data['rep_amount'] = $getData[0]['rep_price'];

                                $GetID = $this->checkout_model->insertData($data);

                                if($GetID > 0){

                                        $getData['reportData'] = $this->checkout_model->getReportById($id);
                                        $emailData = $this->checkout_model->GetEmailDetails(2);

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
                                                $query = array();
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
                                        }elseif($paymentType=='CCAvenue'){
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

                if(isset($_POST['proceed_to_register']) || isset($data["errorFlag"]) || !empty($data["errorFlag"])){
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
}
?>
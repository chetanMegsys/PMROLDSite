<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
    class Sample extends MY_Controller{
        
        public function __construct(){
            $this->load->model("sample_model");
        }

        public function index($id){

            $email_setting = array();

        	$segment = $this->uri->segment(1);
            if($segment == "samples"){
                $data['pageHeading'] = 'Get Free Report Sample';
                $data['enqType'] = "S";
                $email_setting['source'] = "Request Sample";
            }else if($segment == "methodology"){
                $data['pageHeading'] = 'Request Report Methodology';
                $data['enqType'] = "RRM";
                $email_setting['source'] = "Request Methodology";
            }else if($segment == "request-advisory"){
                $data['pageHeading'] = 'Request Advisory';
                $data['enqType'] = "RA";
                $email_setting['source'] = "Request Advisory";
            }else if($segment == "ask-an-expert"){
                $data['pageHeading'] = 'Ask An Expert';
                $data['enqType'] = "ASK";
                $email_setting['source'] = "Ask An Expert";
            }else if($segment == "request-customization"){
                $data['pageHeading'] = 'Request For Customization';
                $data['enqType'] = "RC";
                $email_setting['source'] = "Request Customization";
            }else if($segment == "toc"){
                $data['pageHeading'] = 'Table of Content';
                $data['enqType'] = "T";
                $email_setting['source'] = "Request TOC";
            }

        	$data['reportData'] = $this->sample_model->getReportById($id);

        	if (isset($_POST['btnSubmit'])) {

                unset($_POST['btnSubmit']); 
                $postData = $_POST;
                $postData['country'] = strtolower($this->visitor_country());

                $block_data = $this->sample_model->getBlockerData($postData['name'],$postData['emailId'],$postData['message']);
                if(!empty($block_data)){

                    redirect(WEBSITE_URL);
                }

                $postData['phoneNo'] = $postData['phoneNo'];
                $postData['created_date'] = date("Y-m-d H:i:s");

                $postData['userId'] = $this->sample_model->getLeadAllocationData($postData['country'],$data['reportData'][0]['cat_id']);

                if($postData['userId']=='' || $postData['userId']==0){
                    $postData['userId'] = 0;
                }

                $rsContact = $this->sample_model->saveRequest($postData);

                if($rsContact){
                    
                    $_SESSION['thankyou']='success';

                    $emailData = $this->sample_model->GetEmailDetails(1);

                    $email_setting['name'] = $postData['name'];
                    $email_setting['email'] = $postData['emailId'];
                    $email_setting['comapny'] = $postData['company'];
                    $email_setting['job_title'] = $postData['jobTitle'];
                    $email_setting['report'] = $data['reportData'][0]['rep_name'];
                    $email_setting['report_type'] = $data['reportData'][0]['rep_type']=='N' ? 'Published Report' : 'Ongoing Report';
                    $email_setting['category'] = $data['reportData'][0]['cat_name'];
                    $email_setting['phone'] = $postData['phoneNo'];
                    $email_setting['country'] = $postData['country'];
                    $email_setting['message'] = $postData['message'];
                    $email_setting['email_to'] = $emailData->email_to;
                    $email_setting['subject'] = $email_setting['source'];

                    $this->lib_mails->LibMail($email_setting);
                    
                    if($segment == "samples"){
                        redirect(WEBSITE_URL . 'thanks/samples/'.$id);
                    }else if($segment == "methodology"){
                        redirect(WEBSITE_URL . 'thanks/methodology/'.$id);
                    }else if($segment == "request-advisory"){
                        redirect(WEBSITE_URL . 'thanks/request-advisory/'.$id);
                    }else if($segment == "ask-an-expert"){
                        redirect(WEBSITE_URL . 'thanks/ask-an-expert/'.$id);
                    }else if($segment == "request-customization"){
                        redirect(WEBSITE_URL . 'thanks/request-customization/'.$id);
                    }else if($segment == "toc"){
                        redirect(WEBSITE_URL . 'thanks/toc/'.$id);
                    }
                }
            }

            $data['countries'] = $this->sample_model->getCountries();

        	$data['meta_title'] = $data['reportData'][0]['rep_name'];
	        $data['meta_keyword'] = '';
	        $data['meta_description'] = '';

            $data['meta'] = array('language','robots','viewport','noindex','sample');

            $detect = new Mobile_Detect();
            if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                $this->load->view("index_mobile",$data);
            }else{
                $this->load->view("index",$data);
            }
        }

        public function thankyou($type,$id){
            if(!isset($_SESSION['thankyou'])){
                redirect(WEBSITE_URL);    
            }else{
                unset($_SESSION['thankyou']);
            }

            $data['meta'] = array('language','robots','viewport');

            $detect = new Mobile_Detect();
            if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                $this->load->view("thankyou_mobile",$data);
            }else{
                $this->load->view("thankyou",$data);
            }
        }

        public function visitor_country() {
            $client = @$_SERVER['HTTP_CLIENT_IP'];
            $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
            $remote = $_SERVER['REMOTE_ADDR'];
            $result = "Unknown";
            if (filter_var($client, FILTER_VALIDATE_IP)) {
                $ip = $client;
            } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
                $ip = $forward;
            } else {
                $ip = $remote;
            }

            $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
            //$ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/php.gp?ip=".$ip));
            if ($ip_data && $ip_data->geoplugin_countryName != null) {
                $result = $ip_data->geoplugin_countryName;
            }else{

                $output = file_get_contents("https://stage.transparencymarketresearch.com/geolocation.php?locationip=".$ip);
                if($output!=""){
                    $result = $output;
                }
            }

            return $result;
        }

    }
?>
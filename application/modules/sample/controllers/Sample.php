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
	            $data['pageHeading'] = 'Request Report Sample';
               $data['pageHeadingnew'] = 'Request Report Sample';
                $data['ButtonHeading'] = 'Submit';
	            $data['enqType'] = "S";
                $email_setting['source'] = "Request Report Sample";
	        }else if($segment == "methodology"){
	            $data['pageHeading'] = 'Request Report Methodology';
                 $data['ButtonHeading'] = 'Submit';
	            $data['enqType'] = "RRM";
                $email_setting['source'] = "Request Report Methodology";
	        }else if($segment == "request-advisory"){
	            $data['pageHeading'] = 'Request Advisory';
                $data['ButtonHeading'] = 'Submit';
	            $data['enqType'] = "RA";
                $email_setting['source'] = "Request Advisory";
	        }else if($segment == "ask-an-expert"){
	            $data['pageHeading'] = 'Talk To Author';
                $data['pageSubHeading'] = 'Ask questions about the report directly to the author';
                $data['ButtonHeading'] = 'Submit';
	            $data['enqType'] = "ASK";
                $email_setting['source'] = "Talk To Author";
	        }else if($segment == "request-customization"){
	            $data['pageHeading'] = 'Request For Customization';
                $data['ButtonHeading'] = 'Submit';
	            $data['enqType'] = "RC";
                $email_setting['source'] = "Request For Customization";
	        }else if($segment == "toc"){
	            $data['pageHeading'] = 'Table of Content';
                $data['ButtonHeading'] = 'Submit';
	            $data['enqType'] = "T";
                $email_setting['source'] = "Table of Content";
	        }else if($segment == "enquiry"){
	            $data['pageHeading'] = 'Enquire Now';
                $data['ButtonHeading'] = 'Submit';
	            $data['enqType'] = "E";
                $email_setting['source'] = "Enquiry Button";
	        }

        	$data['reportData'] = $this->sample_model->getReportById($id);
            $report_slug = WEBSITE_URL . "market-research/" . $data['reportData'][0]['rep_url'] . ".asp";
        	if (isset($_POST['btnSubmit']) && !$this->is_bot($_SERVER['HTTP_USER_AGENT']) ){ //echo "Wait"; exit();
               $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
               if( !empty($this->data_filter_post($_POST["fname"])) ){
                    redirect(WEBSITE_URL);
               }
                unset($_POST['fname']);
                unset($_POST['captcha']);
                unset($_POST['hdnCaptcha']);
                unset($_POST['hdnerror']);
                unset($_POST['btnSubmit']);
                unset($_POST['csrf_test_name']);
              
                //$countryCode = $_POST['countryCode'];
                unset($_POST['btnSubmit'],$_POST['countryCode']); 
               

                $postData = $_POST;

                //add here country code - to get the country name by the ip address write here function 
                $postData['ip_address'] = $ip_address = $this->getIpAddress();
                $postData['country'] = $this->getTheContryName(trim($ip_address));
                    
                $postData['source'] = $this->data_filter_post($_POST['source']);
        		
                $postData['emailId'] = $this->data_filter_post($_POST['emailId']);
                $postData['name'] = $this->data_filter_post($_POST['name']);
                $postData['phoneNo'] = $this->data_filter_post($_POST['phoneNo']);

                $postData['user_country'] = isset($_POST["country"]) && $_POST["country"] != '' ? $this->data_filter_post($_POST["country"]) : '' ;
                $postData["company"] = isset($_POST["company"]) && $_POST["company"] != '' ? $this->data_filter_post($_POST["company"]) : '' ;
                $postData["jobTitle"] =   isset($_POST["jobTitle"]) && $_POST["jobTitle"] != '' ? $this->data_filter_post($_POST["jobTitle"]) : '' ;  
                $postData["message"] =  isset($_POST["message"]) && $_POST["message"] != '' ?  $this->data_filter_post($_POST["message"]) : '' ;  

                // if(strlen($this->data_filter_post($_POST['message'])) > 200)
                // {
                //     echo $postData['message'] = substr($this->data_filter_post($_POST['message']), 0, 200);
                // }
                // else{
                //     echo $postData['message'] = $this->data_filter_post($_POST['message']) ;
                // }   
                
				//blocker code
                 $domailArray = explode('@', $postData['emailId']);
                $emailDomain = $domailArray[1];
                $block_data = $this->sample_model->getBlockerData($postData['name'],$postData['emailId'],$postData['message'] ,  $emailDomain  );

                if(!empty($block_data)){
                    redirect(WEBSITE_URL);
                }

				if($postData['emailId'] == "" || !filter_var($postData['emailId'], FILTER_VALIDATE_EMAIL)){	  
					$this->session->set_flashdata('errors'," Please Enter valid Email Id ");
					redirect(WEBSITE_URL);
				}
				
				$old_time = date('Y-m-d H:i:s', strtotime('-1 minutes'));
				$current_time =  date('Y-m-d H:i:s');
				$checkedinserted_data = $this->sample_model->getTheUsersData($postData['emailId'], $old_time , $current_time);				 
				if(count($checkedinserted_data) > 10 ){  				 
					$dataInsertBlocker = array("name" => $postData['name'] , "email" => $postData['emailId'] , "message" => $postData['message'], "status" => 'Y' , "created_date" => date('Y-m-d H:i:s') );
					$this->db->insert("blocker",$dataInsertBlocker);
					 redirect(WEBSITE_URL);
				}
				

                $postData['phoneNo'] = $postData['phoneNo'];
               // $postData['phoneNo'] = "(+".$countryCode.") ".$postData['phoneNo'];
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
                    $email_setting['user_country'] = $postData['user_country'];
                    $email_setting['ip'] = $postData['ip_address'];
                    $email_setting['message'] = $postData['message'];
                    $email_setting['email_to'] = $emailData->email_to;
                    $email_setting['subject'] = $email_setting['source'];
                    $email_setting['report_slug'] = $report_slug;
                    $this->lib_mails->LibMail($email_setting);
                    $_SESSION['fname'] = $postData['name'];
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
                    }else if($segment == "enquiry"){
                        redirect(WEBSITE_URL . 'thanks/enquiry/'.$id);
                    }
                }
            }

            $data['countries'] = $this->sample_model->getCountries();

        	$data['meta_title'] = $data['pageHeading']." ".$data['reportData'][0]['rep_keyword'];
	       
	        $data['meta_description'] = $data['pageHeading']." for ".$data['reportData'][0]['rep_keyword'];

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


    public function getIpAddress()
    {
        $ip = '';
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];
         
        if(filter_var($client, FILTER_VALIDATE_IP)) {
            $ip = $client;
        } elseif(filter_var($forward, FILTER_VALIDATE_IP)) {
            $ip = $forward;
        } else {
            $ip = $remote;
        }

        return $ip;   

    }

   

    public function getTheContryName($ip)
    {
        $country_name  = "Unknown";
        
            $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
            if($ip_data && $ip_data->geoplugin_countryName != null) {
                 $country_name = $ip_data->geoplugin_countryName;
            }
            else{
                    $ch = curl_init('http://ipwho.is/'.$ip);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_HEADER, false);
                    $ipwhois = json_decode(curl_exec($ch), true);
                    curl_close($ch);
                    $output =  $ipwhois['country'];
                     if($output != '' )
                     {
                        $country_name = $output;
                     }
            }
        return $country_name;
    }


     public function is_bot($user_agent) {
 
    $botRegexPattern = "(googlebot\/|Googlebot\-Mobile|Googlebot\-Image|Google favicon|Mediapartners\-Google|bingbot|slurp|java|wget|curl|Commons\-HttpClient|Python\-urllib|libwww|httpunit|nutch|phpcrawl|msnbot|jyxobot|FAST\-WebCrawler|FAST Enterprise Crawler|biglotron|teoma|convera|seekbot|gigablast|exabot|ngbot|ia_archiver|GingerCrawler|webmon |httrack|webcrawler|grub\.org|UsineNouvelleCrawler|antibot|netresearchserver|speedy|fluffy|bibnum\.bnf|findlink|msrbot|panscient|yacybot|AISearchBot|IOI|ips\-agent|tagoobot|MJ12bot|dotbot|woriobot|yanga|buzzbot|mlbot|yandexbot|purebot|Linguee Bot|Voyager|CyberPatrol|voilabot|baiduspider|citeseerxbot|spbot|twengabot|postrank|turnitinbot|scribdbot|page2rss|sitebot|linkdex|Adidxbot|blekkobot|ezooms|dotbot|Mail\.RU_Bot|discobot|heritrix|findthatfile|europarchive\.org|NerdByNature\.Bot|sistrix crawler|ahrefsbot|Aboundex|domaincrawler|wbsearchbot|summify|ccbot|edisterbot|seznambot|ec2linkfinder|gslfbot|aihitbot|intelium_bot|facebookexternalhit|yeti|RetrevoPageAnalyzer|lb\-spider|sogou|lssbot|careerbot|wotbox|wocbot|ichiro|DuckDuckBot|lssrocketcrawler|drupact|webcompanycrawler|acoonbot|openindexspider|gnam gnam spider|web\-archive\-net\.com\.bot|backlinkcrawler|coccoc|integromedb|content crawler spider|toplistbot|seokicks\-robot|it2media\-domain\-crawler|ip\-web\-crawler\.com|webmeup\-crawler\.com|siteexplorer\.info|elisabot|proximic|changedetection|blexbot|arabot|WeSEE:Search|niki\-bot|CrystalSemanticsBot|rogerbot|360Spider|psbot|InterfaxScanBot|Lipperhey SEO Service|CC Metadata Scaper|g00g1e\.net|GrapeshotCrawler|urlappendbot|brainobot|fr\-crawler|binlar|SimpleCrawler|Livelapbot|Twitterbot|cXensebot|smtbot|bnf\.fr_bot|A6\-Indexer|ADmantX|Facebot|Twitterbot|OrangeBot|memorybot|AdvBot|MegaIndex|SemanticScholarBot|ltx71|nerdybot|xovibot|BUbiNG|Qwantify|archive\.org_bot|Applebot|TweetmemeBot|crawler4j|findxbot|SemrushBot|yoozBot|lipperhey|y!j\-asr|Domain Re\-Animator Bot|AddThis|YisouSpider|BLEXBot|YandexBot|SurdotlyBot|AwarioRssBot|FeedlyBot|Barkrowler|Gluten Free Crawler|Cliqzbot|DataForSeoBot|InfoTigerBot|serpstatbot\.com)";
 
 
    return preg_match("/{$botRegexPattern}/", $user_agent);
 
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
    $data = str_replace("'", "",$data); 
    return $data;
    }

    public function removeSpecialChar2($str) {
        $res = str_replace( array( '\'', '"',',' , ';', '<', '>', '(', ')',   '%', '^', '#', '$', '`'), '', $str);
        return $res;
    }


    }
?>
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

        	if (isset($_POST['btnSubmit']) && !$this->is_bot($_SERVER['HTTP_USER_AGENT']) ){ //echo "Wait"; exit();
               // $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                // if(isset($_POST['type']) && $_POST['type'] != 'S' && $_POST['type'] != 'T'){
                //     if(isset($_POST['captcha']) && $_POST['captcha'] != ""){
                //         unset($_POST['captcha']);
                //     }else{

                //         redirect(WEBSITE_URL);
                //     }
                // }

                //$countryCode = $_POST['countryCode'];
                unset($_POST['btnSubmit'],$_POST['countryCode']); 
                $postData = $_POST;

                //add here country code - to get the country name by the ip address write here function 
                $postData['ip_address'] = $ip_address = $this->getIpAddress();
                $postData['country'] = $this->getTheContryName(trim($ip_address));
                    
                $postData['source'] = strip_tags($_POST['source']);
        		
                $postData['emailId'] = strip_tags($_POST['emailId']);
                $postData['name'] = strip_tags($_POST['name']);
                $postData['phoneNo'] = strip_tags($_POST['phoneNo']);
                
                $postData['jobTitle'] = strip_tags($_POST['jobTitle']);
                $postData['company'] = strip_tags($_POST['company']);
                $postData['message'] = strip_tags($_POST['message']);

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

    public function is_bot($user_agent) {
 
    $botRegexPattern = "(googlebot\/|Googlebot\-Mobile|Googlebot\-Image|Google favicon|Mediapartners\-Google|bingbot|slurp|java|wget|curl|Commons\-HttpClient|Python\-urllib|libwww|httpunit|nutch|phpcrawl|msnbot|jyxobot|FAST\-WebCrawler|FAST Enterprise Crawler|biglotron|teoma|convera|seekbot|gigablast|exabot|ngbot|ia_archiver|GingerCrawler|webmon |httrack|webcrawler|grub\.org|UsineNouvelleCrawler|antibot|netresearchserver|speedy|fluffy|bibnum\.bnf|findlink|msrbot|panscient|yacybot|AISearchBot|IOI|ips\-agent|tagoobot|MJ12bot|dotbot|woriobot|yanga|buzzbot|mlbot|yandexbot|purebot|Linguee Bot|Voyager|CyberPatrol|voilabot|baiduspider|citeseerxbot|spbot|twengabot|postrank|turnitinbot|scribdbot|page2rss|sitebot|linkdex|Adidxbot|blekkobot|ezooms|dotbot|Mail\.RU_Bot|discobot|heritrix|findthatfile|europarchive\.org|NerdByNature\.Bot|sistrix crawler|ahrefsbot|Aboundex|domaincrawler|wbsearchbot|summify|ccbot|edisterbot|seznambot|ec2linkfinder|gslfbot|aihitbot|intelium_bot|facebookexternalhit|yeti|RetrevoPageAnalyzer|lb\-spider|sogou|lssbot|careerbot|wotbox|wocbot|ichiro|DuckDuckBot|lssrocketcrawler|drupact|webcompanycrawler|acoonbot|openindexspider|gnam gnam spider|web\-archive\-net\.com\.bot|backlinkcrawler|coccoc|integromedb|content crawler spider|toplistbot|seokicks\-robot|it2media\-domain\-crawler|ip\-web\-crawler\.com|siteexplorer\.info|elisabot|proximic|changedetection|blexbot|arabot|WeSEE:Search|niki\-bot|CrystalSemanticsBot|rogerbot|360Spider|psbot|InterfaxScanBot|Lipperhey SEO Service|CC Metadata Scaper|g00g1e\.net|GrapeshotCrawler|urlappendbot|brainobot|fr\-crawler|binlar|SimpleCrawler|Livelapbot|Twitterbot|cXensebot|smtbot|bnf\.fr_bot|A6\-Indexer|ADmantX|Facebot|Twitterbot|OrangeBot|memorybot|AdvBot|MegaIndex|SemanticScholarBot|ltx71|nerdybot|xovibot|BUbiNG|Qwantify|archive\.org_bot|Applebot|TweetmemeBot|crawler4j|findxbot|SemrushBot|yoozBot|lipperhey|y!j\-asr|Domain Re\-Animator Bot|AddThis|YisouSpider|BLEXBot|YandexBot|SurdotlyBot|AwarioRssBot|FeedlyBot|Barkrowler|Gluten Free Crawler|Cliqzbot)";
 
 
    return preg_match("/{$botRegexPattern}/", $user_agent);
 
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

    }
?>
<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
    class Articles extends MY_Controller{
        
        public function __construct(){
            $this->load->model("articles_model");
            $this->load->model("sample/sample_model");
        }

        public function index(){
        
         //redirect(WEBSITE_URL.'media-releases.asp',301);
        	$data['pagination'] = "";
            $page = 1;
            $num_rec_per_page = 11;
            $start_from = 0;
            $pagination_url = WEBSITE_URL."news";

            $data['total_records'] = $this->articles_model->getArticlesCount();

            if (isset($_POST['page']) && $_POST['page'] != '' && $_POST['page'] > 1) {
                $page = $_POST['page'];
                $start_from = ($page - 1) * $num_rec_per_page;
                $previous = $page - 1;
                $next = $page + 1;
            } else {
                $page = 1;
                $start_from = ($page - 1) * $num_rec_per_page;
                $previous = $page - 1;
                $next = $page + 1;
            }

            if ($data['total_records'] > $num_rec_per_page) {
                $data['pagination'] = $this->pagination_custom->paginationCustom($page, $start_from, $num_rec_per_page, $data['total_records'], $previous, $next, $pagination_url);
            }

        	$data['articles'] = $this->articles_model->getArticles($num_rec_per_page, $start_from);
        	$data['lastest_reports'] = $this->articles_model->getLatestReports();
            
            $data['meta_keword'] = "Market Opinions covers all kind of Research Stuff, Industry Survey Report, Market brief insights, Market Overview, Segment.";
            $data['meta_description'] = "PMR's recent articles on market research covers all kind of updated research insights, industry survey reports, market outlook, market overview & segmentation";
            $data['meta_title'] = "Avail Latest Compilation Of Market Research Articles By Persistence Market Research (PMR)";

            $data['meta'] = array('viewport','dc-description','index','follow');
            $data['meta_dc_desc'] = "Global Market Research Report, Market Size, Share, Forecast, Overview, Trends, Marketing Strategy, Industry Analysis, Outlook, Competitive Landscape, Future Prospects.";
			  $data['actual_canonical_url'] = WEBSITE_URL."blog";
            $data['breadcrumb'][0]['link'] = WEBSITE_URL."blog";
            $data['breadcrumb'][0]['title'] = "Blog";

			
            $detect = new Mobile_Detect();
            if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                $this->load->view("index_mobile",$data);
            }else{
                $this->load->view("index",$data);
            }
        }

        public function article_details($url){
            // redirect(WEBSITE_URL.'media-releases.asp',301);

            $data['get_articles'] = $this->articles_model->getArticleByUrl($url);
            $data['latest_reports'] = $this->articles_model->getAllReports();

            if(empty($data['get_articles'])){
                redirect(WEBSITE_URL."blog");
            }

            $redirect_url = $this->articles_model->getRedirections(WEBSITE_URL."blog/".$url.'.asp',"Article");      
           // var_dump($redirect_url);exit();
            if(!empty($redirect_url)){
                redirect($redirect_url[0]['destination_url'],"redirect",$redirect_url[0]['error_type']);
            }            
            if(empty($data['get_articles'])){
                $this->get404();
            }

            $data['actual_canonical_url'] = WEBSITE_URL."blog/".$url.".asp";
            $data['meta_title'] = $data['get_articles']->meta_title!='' ? $data['get_articles']->meta_title : $data['get_articles']->name;
            $data['meta_keword'] = $data['get_articles']->meta_keywords!='' ? $data['get_articles']->meta_keywords : $data['meta_title'];
            $data['meta_description'] = $data['get_articles']->meta_description!='' ? $data['get_articles']->meta_description : $data['meta_title'];
            $data['meta_dc_desc'] = $data['get_articles']->meta_dc_desc!='' ? $data['get_articles']->meta_dc_desc : $data['meta_title'];

            $data['meta'] = array('viewport','dc-description','index','follow');

            $data['breadcrumb'][0]['link'] = WEBSITE_URL."blog";
            $data['breadcrumb'][0]['title'] = "Blog";
            $data['breadcrumb'][1]['link'] = WEBSITE_URL."blog/".$url.".asp";
            $data['breadcrumb'][1]['title'] = ucwords(str_replace("-"," ",$url));

            if (isset($_POST['btnSubmit']) && !$this->is_bot($_SERVER['HTTP_USER_AGENT']) ) { 

                $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
              
                $countryCode = ""; 
                unset($_POST['btnSubmit']);

                if( "" != $this->data_filter_post($_POST["fname"])){
                    redirect(WEBSITE_URL);
                }

                $postData["name"] = $this->data_filter_post($_POST["name"]);
                $postData["emailId"] = $this->data_filter_post($_POST["emailId"]);
                $postData["phoneNo"] = $this->data_filter_post($_POST["phoneNo"]);  
                $postData["source"] = $this->data_filter_post($_POST["source"]);  
                $postData["type"] = $this->data_filter_post($_POST["type"]);  
                $postData["repId"] = $this->data_filter_post($_POST["repId"]);
                $postData['user_country'] = isset($_POST["country"]) && $_POST["country"] != '' ? $this->data_filter_post($_POST["country"]) : '' ;
                $postData["company"] = isset($_POST["company"]) && $_POST["company"] != '' ? $this->data_filter_post($_POST["company"]) : '' ;
                $postData["jobTitle"] =   isset($_POST["jobTitle"]) && $_POST["jobTitle"] != '' ? $this->data_filter_post($_POST["jobTitle"]) : '' ;  
                $postData["message"] =  isset($_POST["message"]) && $_POST["message"] != '' ?  $this->data_filter_post($_POST["message"]) : '' ;  

                // if(strlen($this->data_filter_post($_POST['message'])) > 200)
                // {
                //       $postData['message'] = substr($this->data_filter_post($_POST['message']), 0, 200);
                // }
                // else{
                //       $postData['message'] = $this->data_filter_post($_POST['message']) ;
                // }  
                if( !empty($this->data_filter_post($_POST["fname"])) ){
                    redirect(WEBSITE_URL);
                }

                if($postData['emailId']=='sample@email.tst'){
                    redirect(WEBSITE_URL);
                }

                /* add blocker here */
                $domailArray = explode('@', $postData['emailId']);
                $emailDomain = $domailArray[1];
                $block_data = $this->sample_model->getBlockerData($postData['name'],$postData['emailId'],"",$emailDomain);
                if(!empty($block_data)){
                    redirect(WEBSITE_URL);
                }

                if($postData['emailId'] == "" || !filter_var($postData['emailId'], FILTER_VALIDATE_EMAIL))
                {
                    $this->session->set_flashdata('errors'," Please Enter valid Email Id ");
                    redirect(WEBSITE_URL);
                }
                
                $old_time = date('Y-m-d H:i:s', strtotime('-1 minutes'));
                $current_time =  date('Y-m-d H:i:s');
                $checkedinserted_data = $this->sample_model->getTheUsersData($postData['emailId'], $old_time , $current_time);               
                if(count($checkedinserted_data) > 10 )
                {
                    $dataInsertBlocker = array("name" => $postData['name'] , "email" => $postData['emailId'] , "message" =>  "", "status" => 'Y' , "created_date" => date('Y-m-d H:i:s') );
                    $this->db->insert("blocker",$dataInsertBlocker);
                     redirect(WEBSITE_URL);
                }

                /* start code added here on date 07/11/2022 */
                $postData['ip_address'] = $ip_address = $this->getIpAddress();
                $postData['country'] = $this->getTheContryName(trim($ip_address));
                $postData['source'] = strip_tags($data['meta_title']);
                /* end code added here on date 07/11/2022 */

                $postData['phoneNo'] = $postData['phoneNo'];
                $postData['created_date'] = date("Y-m-d H:i:s");
                if(isset($data['report_detail'][0]['category_id'])){
                    $postData['userId'] = $this->sample_model->getLeadAllocationData($postData['country'],$data['report_detail'][0]['category_id']);
                } else{
                    $postData['userId'] = $this->sample_model->getLeadAllocationData($postData['country'],22);
                }
                if(isset($data['report_detail'][0]['rep_name'])){
                    $source_name = $data['report_detail'][0]['rep_name'];
                }else{
                    $source_name = $data['meta_title'];
                }
                $rsContact = $this->sample_model->saveRequest($postData);
            
                if($rsContact){
                    $segment = $postData['type'];
                     if( isset($postData['repId'] )){
                         if(!empty($postData['repId'])){ 
                             $id = $postData['repId']; 
                            } else{
                             $id = 22;
                            } 
                    }else{$id = 22;}
                    $url = "";
                    $url = WEBSITE_URL . 'thanks/enquiry/'.$id;
                    $email_setting['source'] = "Article - " . $source_name;
                    $emailData = $this->sample_model->GetEmailDetails(1);

                    $email_setting['name'] = $postData['name'];
                    $email_setting['email'] = $postData['emailId'];
                    $email_setting['comapny'] = $postData['company'];
                    $email_setting['job_title'] = $postData['jobTitle'];
                    $email_setting['report'] = $source_name;
                    $email_setting['report_type'] = 'Blog';
                    $email_setting['category'] = '';
                    $email_setting['phone'] = $postData['phoneNo'];
                    $email_setting['country'] = $postData['country'];
                    $email_setting['user_country'] = $postData['user_country'];
                    $email_setting['ip'] = $postData['ip_address'];
                    $email_setting['message'] = $postData['message'];
                    $email_setting['email_to'] = $emailData->email_to;
                    $email_setting['subject'] =  $email_setting['source'];
                    $email_setting['report_slug'] = $report_slug;
                    $this->lib_mails->LibMail($email_setting);
                    $_SESSION['fname'] = $postData['name'];
                    $_SESSION['thankyou'] = 'success';

                    redirect($url);
                    //redirect(WEBSITE_URL."market-research/".$report_url.".asp#thankyou");
                }
            }

            $detect = new Mobile_Detect();
            if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                $this->load->view("article_detail_mobile",$data);
            }else{
                $this->load->view("article_detail",$data);
            }
        }

        public function article_details_amp($url){
           //  redirect(WEBSITE_URL.'media-releases.asp',301);

            //redirect(WEBSITE_URL."article/".$url.".asp", "redirect", 301);

            $data['get_articles'] = $this->articles_model->getArticleByUrl($url);
            $data['latest_reports'] = $this->articles_model->getAllReports();

            $data['amphtml'] = "article/".$url.".asp";
            $data['meta_title'] = $data['get_articles']->meta_title!='' ? $data['get_articles']->meta_title : $data['get_articles']->name;
            $data['meta_keword'] = $data['get_articles']->meta_keywords!='' ? $data['get_articles']->meta_keywords : $data['meta_title'];
            $data['meta_description'] = $data['get_articles']->meta_description!='' ? $data['get_articles']->meta_description : $data['meta_title'];
            $data['meta_dc_desc'] = $data['get_articles']->meta_dc_desc!='' ? $data['get_articles']->meta_dc_desc : $data['meta_title'];

            $this->load->view("article_detail_amp",$data);
        }

        public function recent_development_in_top_sectors(){
            $data['recent_development_in_top_sectors'] = $this->articles_model->recent_development_in_top_sectors();

            $data['meta_keword'] = " Covid 19 vaccine, Moderna COVID-19 vaccine, mRNA-1273, Covid-19 vaccine recent updates, Covid-19 vaccine frontrunners, global vaccines market size, Air purifier market in us, Biodefense market report, Body temperature scanner market players, Laundry detergent market, Surface disinfectant chemicals market, Top pharma trending industry for 2021, Hand sanitizer market segmentation, Market size and growth of ventilators, Video conferencing";
            $data['meta_description'] = "Persistence Market Research is evaluating Covid- 19 Vaccines & drugs market report provides crucial industry insights that will help your business revenue to grow. such as PersistenceMarketResearch is constantly on the move with regards to profiling revenue impact of recent development in top trending industry verticals and unbridling the benefited sectors like air purifier, biodefense, cyber security, diagnostic, disinfection, sanitizer market, ventilators, and so on. Market and many other manufacturing industries.";
            $data['meta_title'] = "Recent Development in Top Trending Industry Verticals";
            $data['meta_dc_desc'] = "Persistence Market research has made a research on the top sector of market research industries with its development and process in forecast.";
            $data['head_content'] = "";

            $data['meta'] = array('viewport','dc-description','noindex','nofollow');

            $data['breadcrumb'][0]['link'] = WEBSITE_URL."recent-development-in-top-sectors.asp";
            $data['breadcrumb'][0]['title'] = "Recent Development In Top Sectors";
            $data['actual_canonical_url'] = WEBSITE_URL."recent-development-in-top-sectors.asp";
            $detect = new Mobile_Detect();
            if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                $this->load->view("recent_development_in_top_sectors_mobile",$data);
            }else{
                $this->load->view("recent_development_in_top_sectors",$data);
            }
        }
        public function get404(){
            $this->output->set_status_header('404');
            redirect(WEBSITE_URL . 'pages/page_not_fount');
        }

        public function is_bot($user_agent) {
 
            $botRegexPattern = "(googlebot\/|Googlebot\-Mobile|Googlebot\-Image|Google favicon|Mediapartners\-Google|bingbot|slurp|java|wget|curl|Commons\-HttpClient|Python\-urllib|libwww|httpunit|nutch|phpcrawl|msnbot|jyxobot|FAST\-WebCrawler|FAST Enterprise Crawler|biglotron|teoma|convera|seekbot|gigablast|exabot|ngbot|ia_archiver|GingerCrawler|webmon |httrack|webcrawler|grub\.org|UsineNouvelleCrawler|antibot|netresearchserver|speedy|fluffy|bibnum\.bnf|findlink|msrbot|panscient|yacybot|AISearchBot|IOI|ips\-agent|tagoobot|MJ12bot|dotbot|woriobot|yanga|buzzbot|mlbot|yandexbot|purebot|Linguee Bot|Voyager|CyberPatrol|voilabot|baiduspider|citeseerxbot|spbot|twengabot|postrank|turnitinbot|scribdbot|page2rss|sitebot|linkdex|Adidxbot|blekkobot|ezooms|dotbot|Mail\.RU_Bot|discobot|heritrix|findthatfile|europarchive\.org|NerdByNature\.Bot|sistrix crawler|ahrefsbot|Aboundex|domaincrawler|wbsearchbot|summify|ccbot|edisterbot|seznambot|ec2linkfinder|gslfbot|aihitbot|intelium_bot|facebookexternalhit|yeti|RetrevoPageAnalyzer|lb\-spider|sogou|lssbot|careerbot|wotbox|wocbot|ichiro|DuckDuckBot|lssrocketcrawler|drupact|webcompanycrawler|acoonbot|openindexspider|gnam gnam spider|web\-archive\-net\.com\.bot|backlinkcrawler|coccoc|integromedb|content crawler spider|toplistbot|seokicks\-robot|it2media\-domain\-crawler|ip\-web\-crawler\.com|siteexplorer\.info|elisabot|proximic|changedetection|blexbot|arabot|WeSEE:Search|niki\-bot|CrystalSemanticsBot|rogerbot|360Spider|psbot|InterfaxScanBot|Lipperhey SEO Service|CC Metadata Scaper|g00g1e\.net|GrapeshotCrawler|urlappendbot|brainobot|fr\-crawler|binlar|SimpleCrawler|Livelapbot|Twitterbot|cXensebot|smtbot|bnf\.fr_bot|A6\-Indexer|ADmantX|Facebot|Twitterbot|OrangeBot|memorybot|AdvBot|MegaIndex|SemanticScholarBot|ltx71|nerdybot|xovibot|BUbiNG|Qwantify|archive\.org_bot|Applebot|TweetmemeBot|crawler4j|findxbot|SemrushBot|yoozBot|lipperhey|y!j\-asr|Domain Re\-Animator Bot|AddThis|YisouSpider|BLEXBot|YandexBot|SurdotlyBot|AwarioRssBot|FeedlyBot|Barkrowler|Gluten Free Crawler|Cliqzbot)";
        
        
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

        public function getIpAddress()
        {
            $client  = $_SERVER['HTTP_CLIENT_IP'] ?? null;
            $forward = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? null;
            $remote  = $_SERVER['REMOTE_ADDR'] ?? null;

            if (filter_var($client, FILTER_VALIDATE_IP)) {
                $ip = $client;
            } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
                $ip = $forward;
            } elseif ($remote) {
                $ip = $remote;
            } else {
                $ip = '103.167.184.10';
            }

            return $ip;
        }

        public function getTheContryName($ip)
        {
            $country_name  = "Unknown";
            
                $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
                if($ip_data && $ip_data->geoplugin_countryName != null) {
                     $country_name = $ip_data->geoplugin_countryName;
                } else {
                        $ch = curl_init('http://ipwho.is/'.$ip);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        curl_setopt($ch, CURLOPT_HEADER, false);
                        $ipwhois = json_decode(curl_exec($ch), true);
                        curl_close($ch);
                        $country_name  = "Unknown";
                        $output =  isset($ipwhois['country'])? $ipwhois['country'] : '';
                         if($output != '' )
                         {
                            $country_name = $output;
                         }
                }
            return $country_name;
        }

        
    }
?>
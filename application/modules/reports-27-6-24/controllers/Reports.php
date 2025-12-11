<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
    class Reports extends MY_Controller{
        
        public function __construct(){
            $this->load->model("reports_model");
            $this->load->model("sample/sample_model");
           
        }

        public function market_research_list(){
           

            $filter = array();
            if(isset($_POST['searchBySector'])){
                $filter['cat_id'] = $_POST['searchBySector'];
            }

            if(isset($_POST['searchByType'])){
                $filter['rep_type'] = $_POST['searchByType'];
            }

            $data['pagination'] = "";
            $page = 1;
            $num_rec_per_page = 20;
            $start_from = 0;
            $pagination_url = WEBSITE_URL."market-research.asp";

            $data['total_records'] = $this->reports_model->getReportCount($filter);

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

            $data['reports'] = $this->reports_model->getReports($num_rec_per_page, $start_from, $filter);
            $data['categories'] = $this->reports_model->getCategories();
            
            $data['meta_keword'] = "Research on Demand, Vendor Spotlight, Actionable Competitive Analysis, Multi-Client Services, Point of Views: Exclusive Solutions by Role, Industry, and Region";
            $data['meta_description'] = "Persistence Market Research - PMR provides businesses to shape themselves by giving 360-degree analysis, better customer satisfaction with laser edge precision & quality";
            $data['meta_title'] = "Explore Benefits Of Crisp & Conclusive Market Research Reports | Persistence Market Research (PMR)";
            $data['page_heading'] = "Market Research";

            $data['page_heading_content'] = "Get into the Distinct Mode with “Persistence Market Research” Multitude of Discreet Practices!";

            $data['page_short_desc'] = "<h2 class='text-left borderGreen'>Persistence Market Research: A Mark of Perseverance, Multi-Tasking, and Rejuvenation!</h2><p>Persistence Market Research” tables its new-fangled and superlative research offerings such that they address a spectrum of client queries! Businesses/clients could access the data library to review market insights pertaining to every vertical all across. Moreover, in spite of having to serve clients on simultaneous basis, utmost care is taken to see that every client is addressed as per the persona per se.</p>
            <p>During trying times (say – the year 2020 with Covid-19), Persistence Market Research (PMR) has stood like a rock to its clients by giving them first-hand insights about their business prospects and also the calculative approach regarding the future. Persistence Market Research (PMR) understands that every business will need to shape itself as per the “new” normal, which is what has it taken into consideration while foreseeing the market (s) in question.</p>";
		 
			 
				 $data['meta'] = array('viewport');
			 
           

            $data['breadcrumb'][0]['link'] = WEBSITE_URL."market-research.asp";
            $data['breadcrumb'][0]['title'] = "Market Research";
            
            $detect = new Mobile_Detect();
            if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                $this->load->view("market_research_list_mobile",$data);
            }else{
                $this->load->view("market_research_list",$data);
            }
        }
        
        public function published_report_list(){  

            redirect(WEBSITE_URL.'market-research.asp#published-reports',"301");
            
          
        }
        
        public function upcoming_report_list(){  


            redirect(WEBSITE_URL.'market-research.asp#forthcoming-reports',"301");
           
 
        }

        public function category_reports($category_url){
            //echo $category_url; exit();

            redirect(WEBSITE_URL.'market-research.asp#'.$category_url,301);
            exit();
             

        }

        public function reports_by_ajax($category_url=""){

            $filter = array();
            if(isset($_GET['searchBySector'])){
                $filter['cat_id'] = $_GET['searchBySector'];
            }

            if(isset($_GET['searchByYear'])){
                $filter['rep_pub_date'] = $_GET['searchByYear'];
            }

            
            if(isset($_GET['repType'])){
                $filter['reportType'] = $_GET['repType'];
            }


            $num_rec_per_page = 20;
            if(isset($_GET['per_page']) && $_GET['per_page'] != '' ){
                $num_rec_per_page = $_GET['per_page'];
            }


            //print_r($filter);
            // $data['pagination'] = "";
            $page = 1;
           
            $start_from = 0;
            $pagination_url = WEBSITE_URL.$category_url.".asp";

            $total_records = $this->reports_model->getReportCount($filter);

           

            $reports = $this->reports_model->getReports($num_rec_per_page, $start_from, $filter, "");
          // echo $this->db->last_query(); //exit; 
            $data['reports'] = $this->getReportsHTML($reports);

            $data['csrf_name'] = $this->security->get_csrf_token_name();
            $data['csrf_value'] = $this->security->get_csrf_hash();

            $data['total_records'] = $total_records;
            
            echo json_encode($data);

        }

        public function report_detail($report_url){
			
            $data['submit_url'] = WEBSITE_URL."market-research/".$report_url.".asp";
            if($report_url=='phyocyanin-market'){
                redirect(WEBSITE_URL."market-research/phycocyanin-market.asp","redirect","301");
            }

            if($report_url=='home-infusion-therapy-devices-market-102017'){
                redirect(WEBSITE_URL."market-research/home-infusion-therapy-market.asp","redirect","301");
            }
 
            if($report_url=='mobile-payment-transaction-service-market-102017'){
                redirect(WEBSITE_URL."market-research/mobile-payment-transaction-market.asp","redirect","301");
            } 
            if($report_url=='global-scar-treatment-market-102017'){
                redirect(WEBSITE_URL."market-research/scar-treatment-market.asp","redirect","301");
            }
   
            if($report_url=='tunnel-lighting-system-market'){
                redirect(WEBSITE_URL."market-research/tunnel-lighting-system.asp","redirect","301");
            }

            if($report_url=='pre-stressed-concrete-wire-market'){
                redirect(WEBSITE_URL."market-research/prestressed-concrete-wire-market.asp","redirect","301");
            }

            if($report_url=='stabilized-chlorine-dioxide-market'){
                redirect(WEBSITE_URL."market-research/stabilized-chlorinedioxide-market.asp","redirect","301");
            }

            if($report_url=='sterile-injectable-drugs-market-122017'){
                redirect(WEBSITE_URL."market-research/sterile-injectable-drugs-market.asp","redirect","301");
            }

            if($report_url=='super-absorbent-polymers-market-102017'){
                redirect(WEBSITE_URL."market-research/super-absorbent-polymers-market.asp","redirect","301");
            }

            if($report_url=='sterile-injectable-drugs-market-122017'){
                redirect(WEBSITE_URL."market-research/sterile-injectable-drugs-market.asp","redirect","301");
            }

            if($report_url=='high-fructose-corn-syrup-market'){
                redirect(WEBSITE_URL."market-research/fructose-market.asp","redirect","301");
            }

            if($report_url=='mental-health-software-market-102017'){
                redirect(WEBSITE_URL."market-research/mental-health-software-market.asp","redirect","301");
            }

            if($report_url=='healthcare-cloud-computing-market-102017'){
                redirect(WEBSITE_URL."market-research/healthcare-cloud-computing-market.asp","redirect","301");
            }

            $redirect_url = $this->reports_model->getRedirections("https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
            
            if (!empty($redirect_url)) {
                redirect($redirect_url[0]['destination_url'], "location", $redirect_url[0]['error_type']);
            }

           // $data['report_detail'] = $this->reports_model->getReportDetailByURL($report_url);    
            $data['report_detail'] = $this->reports_model->getReportDetailByURLByIsIndiex($report_url);             
            $report_slug = WEBSITE_URL."market-research/". $report_url . ".asp";
            if (isset($_POST['btnSubmit']) && !$this->is_bot($_SERVER['HTTP_USER_AGENT']) ) { 

                $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
              
                $countryCode = ""; 
                unset($_POST['btnSubmit']); 
               

                $postData["name"] = $this->data_filter_post($_POST["name"]);
                $postData["emailId"] = $this->data_filter_post($_POST["emailId"]);
                $postData["phoneNo"] = $this->data_filter_post($_POST["phoneNo"]);  
                $postData["source"] = $this->data_filter_post($_POST["source"]);  
                $postData["type"] = $this->data_filter_post($_POST["type"]);  
                $postData["repId"] = $this->data_filter_post($_POST["repId"]);  
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
                $postData['source'] = strip_tags($postData['source']);
                /* end code added here on date 07/11/2022 */

                $postData['phoneNo'] = $postData['phoneNo'];
                $postData['created_date'] = date("Y-m-d H:i:s");

                $postData['userId'] = $this->sample_model->getLeadAllocationData($postData['country'],$data['report_detail'][0]['category_id']);

                $rsContact = $this->sample_model->saveRequest($postData);

                
            
                if($rsContact){
                    $segment = $postData['type'];
                    $id = $postData['repId'];

                    $url = "";

                    if($segment == "S"){
                        $url = WEBSITE_URL . 'thanks/samples/'.$id;
                        $email_setting['source'] = "Get Free Report Sample (POP)";
                    }else if($segment == "RM" || $segment == "RRM"){
                        $url = WEBSITE_URL . 'thanks/methodology/'.$id;
                        $email_setting['source'] = "Know Report Methodology (POP)";
                    }else if($segment == "RA"){
                        $url = WEBSITE_URL . 'thanks/request-advisory/'.$id;
                        $email_setting['source'] = "Request Advisory ";
                    }else if($segment == "ASK"){
                        $url = WEBSITE_URL . 'thanks/ask-an-expert/'.$id;
                        $email_setting['source'] = "Ask An Expert (POP)";
                    }else if($segment == "RC"){
                        $url = WEBSITE_URL . 'thanks/request-customization/'.$id;
                        $email_setting['source'] = "Request A Customized Version (POP)";
                    }else if($segment == "T"){
                        $url = WEBSITE_URL . 'thanks/toc/'.$id;
                        $email_setting['source'] = "Request TOC";
                    }

                    $emailData = $this->sample_model->GetEmailDetails(1);

                    $email_setting['name'] = $postData['name'];
                    $email_setting['email'] = $postData['emailId'];
                    $email_setting['comapny'] = $postData['company'];
                    $email_setting['job_title'] = $postData['jobTitle'];
                    $email_setting['report'] = $data['report_detail'][0]['rep_name'];
                    $email_setting['report_type'] = $data['report_detail'][0]['rep_type']=='N' ? 'Published Report' : 'Ongoing Report';
                    $email_setting['category'] = $data['report_detail'][0]['cat_name'];
                    $email_setting['phone'] = $postData['phoneNo'];
                    $email_setting['country'] = $postData['country'];
                    $email_setting['message'] = $postData['message'];
                    $email_setting['email_to'] = $emailData->email_to;
                    $email_setting['subject'] =  $email_setting['source'];
                    $email_setting['report_slug'] = $report_slug;
                    $this->lib_mails->LibMail($email_setting);
                    
                    $_SESSION['thankyou'] = 'success';

                    redirect($url);
                    //redirect(WEBSITE_URL."market-research/".$report_url.".asp#thankyou");
                }
            }

            

           

            if(!empty($data['report_detail'])){


                if($data['report_detail'][0]['is_index'] == 'NINF' && $data['report_detail'][0]['rep_status'] == 'D')
                {
                    $this->get410();
                }
                elseif($data['report_detail'][0]['rep_status'] == "N")
                {
                    $this->get404();
                }
                elseif($data['report_detail'][0]['rep_status'] == "Y"  && $data['report_detail'][0]['status'] == "A"  )
                {

                    $data['countries'] = $this->sample_model->getCountries();
                    $data['actual_canonical_url'] = WEBSITE_URL."market-research/".$data['report_detail'][0]['rep_url'].".asp";
                    $data['meta_keword'] = $data['report_detail'][0]['meta_keywords']!='' ? $data['report_detail'][0]['meta_keywords'] : $data['report_detail'][0]['meta_title'];
                    $data['meta_description'] = $data['report_detail'][0]['meta_desc']!='' ? $data['report_detail'][0]['meta_desc'] : $data['report_detail'][0]['meta_title'];
                    $data['meta_title'] = $data['report_detail'][0]['meta_title'];
                    $data['meta_dc_desc'] = $data['report_detail'][0]['dc_desc']!='' ? $data['report_detail'][0]['dc_desc'] : $data['report_detail'][0]['meta_title'];

                    if($data['report_detail'][0]['is_index'] == 'I')
                    {
                    $data['meta'] = array('report_detail','viewport');
                    }
                    elseif($data['report_detail'][0]['is_index']  == 'NI')
                    {
                    $data['meta'] = array('report_detail','viewport' ,'noindex');
                    }
                    elseif($data['report_detail'][0]['is_index']  == 'NF')
                    {
                    $data['meta'] = array('report_detail','viewport', 'nofollow');
                    }
                    elseif($data['report_detail'][0]['is_index']  == 'NINF')
                    {
                    $data['meta'] = array('report_detail','viewport', 'noindex','nofollow');
                    }


                    $data['report_description'] = $this->reports_model->getReportDescription($data['report_detail'][0]['rep_id']);
                    $data['related_reports'] = $this->reports_model->getRelatedReport($data['report_detail'][0]['rep_id'], $data['report_detail'][0]['rep_tag_id']);

                    $data['faqs'] = $this->reports_model->getFaqs($data['report_detail'][0]['rep_id']);

                    $data['breadcrumb'][0]['link'] = WEBSITE_URL."market-research.asp";
                    $data['breadcrumb'][0]['title'] = "Market Research";

                    $data['breadcrumb'][1]['link'] = WEBSITE_URL."market-research/".$data['report_detail'][0]['rep_url'];
                    $data['breadcrumb'][1]['title'] = $data['report_detail'][0]['rep_keyword'];

                    $detect = new Mobile_Detect();
                    if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                    $this->load->view("report_details_mobile",$data);
                    }else{
                    $this->load->view("report_details",$data);
                    }

                }
                else{
                    $this->get404();
                }

            }else{
                redirect(WEBSITE_URL);
            }
        }

        public function report_detail_custom($report_url){

            $data['report_detail'] = $this->reports_model->getReportDetailCustomByURL($report_url);
            if(empty($data['report_detail'])){ redirect(WEBSITE_URL); }

            $redirect_url = $this->reports_model->getRedirections(WEBSITE_URL . "custom-report/" . $report_url, "Report");
            if (!empty($redirect_url)) {
                redirect($redirect_url[0]['destination_url'], "redirect", $redirect_url[0]['error_type']);
            }
            if (empty($data['report_detail'])) {
                $this->get404();
            }

            if(!empty($data['report_detail'])){
                $data['report_description'] = $this->reports_model->getReportDescription($data['report_detail'][0]['rep_id']);
                $data['related_reports'] = $this->reports_model->getRelatedReport($data['report_detail'][0]['rep_id'], $data['report_detail'][0]['rep_tag_id']);
                $data['pressrelease'] = $this->reports_model->getPressRelease($data['report_detail'][0]['rep_id']);

                $data['meta'] = array('viewport','noindex','nofollow');

                $detect = new Mobile_Detect();
                if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                    $this->load->view("custom_report_details_mobile",$data);
                }else{
                    $this->load->view("custom_report_details",$data);
                }
            }else{
                redirect(WEBSITE_URL);
            }
        }

        public function report_detail_amp($report_url){
            redirect(WEBSITE_URL."market-research/".$report_url.".asp", "redirect", 301);             
        }

        public function report_toc($report_url){
             
            $data['submit_url'] = WEBSITE_URL."market-research/".$report_url.".asp"; 
            $data['actual_canonical_url'] = WEBSITE_URL."market-research/".$report_url."/toc";
            
            $data['report_detail'] = $this->reports_model->getReportDetailByURL($report_url); 
            //$data['report_detail'] = $this->reports_model->getReportDetailTOCByURL($report_url);
            //$data['report_detail'] = $this->reports_model->getReportDetailTOCByURL($report_url);
            if(!empty($data['report_detail'])){
                $data['related_reports'] = $this->reports_model->getRelatedReport($data['report_detail'][0]['rep_id'], $data['report_detail'][0]['category_id']);
                  $data['faqs'] = $this->reports_model->getFaqs($data['report_detail'][0]['rep_id']);
                $data['meta'] = array('viewport','noindex','nofollow');

                $data['meta_keword'] = 'Free sample report of '.$data['report_detail'][0]['rep_keyword'];
                $data['meta_description'] = 'Free table of content, list of tables, list of charts and introduction of '.$data['report_detail'][0]['rep_keyword'];
                $data['meta_title'] = 'Table of Content - '.$data['report_detail'][0]['rep_keyword'];

                $detect = new Mobile_Detect();
                if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                    $this->load->view("report_details_toc_page_mobile",$data);
                }else{
                    $this->load->view("report_details_toc_page",$data);
                }

            }else{
                redirect(WEBSITE_URL);
            }
        }

        public function getReportsHTML($reports){
            $html = '';
            if(!empty($reports)){
                foreach($reports as $report){

                    $keyword = $report['rep_keyword'];
                    $report_type = $report['rep_pages'] > 0 ? $report['rep_pages']." pages" : 'Ongiong';

                    $br1 = $br2 = $btn = $img = "";
                    if($report['rep_type']=='N'){
                        $br1 = date("M Y", strtotime($report['rep_pub_date']));
                        $br2 = $report['rep_pages']." pages";
                        $btn = '<a href="'.WEBSITE_URL.'samples/'.$report['rep_id'].'" class="btn btnGreen" title="Request Sample">Request Sample</a>';
                        $img = WEBSITE_URL."assets/images/publish-report-cover.jpg";
                    }else{
                        $br1 = "Ongoing";
                        $br2 = "TOC Available";
                        $btn = '<a href="'.WEBSITE_URL.'toc/'.$report['rep_id'].'" class="btn btnGreen" title="Request TOC">Request TOC</a>';
                        $img = WEBSITE_URL."assets/images/upcoming-report-cover.jpg";
                    }

                    $html .= '<div class="row reportListing">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="contentBox py-0">
                                         <h2 class="mt-0"><a class="listTitle secHeadingLeft" href="'.WEBSITE_URL."market-research/".$report['rep_url'].".asp".'" title="'.$keyword.'">'.$keyword.'</a></h2>
                                        <p class="mt-2 mb-0">'.$report['rep_name'].'</p>
                                    </div>
                                </div>
                            </div>';
                }


                $html.="  <div id='LoadData2'></div>";
            }else{
                $html .='Reports Not Found  !!';
            }

            return $html;
        }

        public function old_url_redirection(){
            redirect(WEBSITE_URL."market-research.asp");
        }

        public function get404(){
            $this->output->set_status_header('404');
            redirect(WEBSITE_URL . 'pages/page_not_fount');
        }

        public function is_bot($user_agent) {
 
        $botRegexPattern = "(googlebot\/|Googlebot\-Mobile|Googlebot\-Image|Google favicon|Mediapartners\-Google|bingbot|slurp|java|wget|curl|Commons\-HttpClient|Python\-urllib|libwww|httpunit|nutch|phpcrawl|msnbot|jyxobot|FAST\-WebCrawler|FAST Enterprise Crawler|biglotron|teoma|convera|seekbot|gigablast|exabot|ngbot|ia_archiver|GingerCrawler|webmon |httrack|webcrawler|grub\.org|UsineNouvelleCrawler|antibot|netresearchserver|speedy|fluffy|bibnum\.bnf|findlink|msrbot|panscient|yacybot|AISearchBot|IOI|ips\-agent|tagoobot|MJ12bot|dotbot|woriobot|yanga|buzzbot|mlbot|yandexbot|purebot|Linguee Bot|Voyager|CyberPatrol|voilabot|baiduspider|citeseerxbot|spbot|twengabot|postrank|turnitinbot|scribdbot|page2rss|sitebot|linkdex|Adidxbot|blekkobot|ezooms|dotbot|Mail\.RU_Bot|discobot|heritrix|findthatfile|europarchive\.org|NerdByNature\.Bot|sistrix crawler|ahrefsbot|Aboundex|domaincrawler|wbsearchbot|summify|ccbot|edisterbot|seznambot|ec2linkfinder|gslfbot|aihitbot|intelium_bot|facebookexternalhit|yeti|RetrevoPageAnalyzer|lb\-spider|sogou|lssbot|careerbot|wotbox|wocbot|ichiro|DuckDuckBot|lssrocketcrawler|drupact|webcompanycrawler|acoonbot|openindexspider|gnam gnam spider|web\-archive\-net\.com\.bot|backlinkcrawler|coccoc|integromedb|content crawler spider|toplistbot|seokicks\-robot|it2media\-domain\-crawler|ip\-web\-crawler\.com|siteexplorer\.info|elisabot|proximic|changedetection|blexbot|arabot|WeSEE:Search|niki\-bot|CrystalSemanticsBot|rogerbot|360Spider|psbot|InterfaxScanBot|Lipperhey SEO Service|CC Metadata Scaper|g00g1e\.net|GrapeshotCrawler|urlappendbot|brainobot|fr\-crawler|binlar|SimpleCrawler|Livelapbot|Twitterbot|cXensebot|smtbot|bnf\.fr_bot|A6\-Indexer|ADmantX|Facebot|Twitterbot|OrangeBot|memorybot|AdvBot|MegaIndex|SemanticScholarBot|ltx71|nerdybot|xovibot|BUbiNG|Qwantify|archive\.org_bot|Applebot|TweetmemeBot|crawler4j|findxbot|SemrushBot|yoozBot|lipperhey|y!j\-asr|Domain Re\-Animator Bot|AddThis|YisouSpider|BLEXBot|YandexBot|SurdotlyBot|AwarioRssBot|FeedlyBot|Barkrowler|Gluten Free Crawler|Cliqzbot)";
     
     
        return preg_match("/{$botRegexPattern}/", $user_agent);
     
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



        public function getTheCatIdByURL()
        {
            $category_url = $_GET['category_url'];
             $categoryDetails = $this->reports_model->getCategoryDetails($category_url);
             echo $categoryDetails[0]['category_id'];
        }

         public function getReportListingData()
    {
       /// print_r($_GET);

        $page = $_GET['page'];
       
        $filter = array();
         //$data = array("type"=>'category');
        $repType = '';
        if(isset($_GET['searchBySector']) && $_GET['searchBySector'] != '' ){
             $filter['cat_id'] = $_GET['searchBySector'];
        }

         

         $repType = '';
        if(isset($_GET['searchByType']) && $_GET['searchByType']!=''){
            $filter['reportType']  = $_GET['searchByType'];
            $repType = $_GET['searchByType'];
        }

 
        if(isset($_GET['searchByYear']) && $_GET['searchByYear']!='' ){
            $filter['rep_pub_date'] = $_GET['searchByYear'];
        }

        if(isset($_GET['per_page']) && $_GET['per_page']!=''){
                $num_rec_per_page = $_GET['per_page'];
            }
        
         // $num_rec_per_page = 10;
         if (isset($page) != '' && $page > 1) {
            $page  = $page;
            $start_from = ($page - 1) * $num_rec_per_page ;
            $previous  = $page - 1;
            $next = $page + 1;
        } else {
            $page  = 1;
            $start_from = ($page - 1) * $num_rec_per_page ;
            $previous  = $page - 1;
            $next = $page + 1;
        }
      //  print_r($filter);
        //$report= $this->report_model->getReports($start_from, $per_page,$filter);
        $reports = $this->reports_model->getReports($num_rec_per_page,$start_from,$filter,"");
        $html= "";
     //   echo $this->db->last_query();  
        if(count($reports) > 0)
        {
          foreach($reports as $report){

                    $keyword = $report['rep_keyword'];
                    $report_type = $report['rep_pages'] > 0 ? $report['rep_pages']." pages" : 'Ongiong';

                    $br1 = $br2 = $btn = $img = "";
                    if($report['rep_type']=='N'){
                        $br1 = date("M Y", strtotime($report['rep_pub_date']));
                        $br2 = $report['rep_pages']." pages";
                        $btn = '<a href="'.WEBSITE_URL.'samples/'.$report['rep_id'].'" class="btn btnGreen" title="Request Sample">Request Sample</a>';
                        $img = WEBSITE_URL."assets/images/publish-report-cover.jpg";
                    }else{
                        $br1 = "Ongoing";
                        $br2 = "TOC Available";
                        $btn = '<a href="'.WEBSITE_URL.'toc/'.$report['rep_id'].'" class="btn btnGreen" title="Request TOC">Request TOC</a>';
                        $img = WEBSITE_URL."assets/images/upcoming-report-cover.jpg";
                    }

                      $html .= '<div class="row reportListing">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="contentBox py-0">
                                        <h2 class="mt-0"><a class="listTitle secHeadingLeft" href="'.WEBSITE_URL."market-research/".$report['rep_url'].".asp".'" title="'.$keyword.'">'.$keyword.'</a> </h2>
                                        <p class="mt-2 mb-0">'.$report['rep_name'].'</p>
                                    </div>
                                </div>
                            </div>';
                } 
             echo  $html .= "<div id='LoadData".$next."'></div>";
              
            }else{
                echo $html .='Reports Not Found  !!';
            }
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

    
    public function get410(){
        $this->output->set_status_header('410');
        $data['meta'] = array('viewport');
        $data['meta_description'] = "The link or page you are trying to find is not available. Please try again.";
        $data['meta_title'] = "410 Page Gone| Persistence Market Research";
            $detect = new Mobile_Detect();
        if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
            $this->load->view("pages/page_not_found_mobile_410",$data);
        }else{
            $this->load->view("pages/page_not_found_410",$data);
        }
        // redirect(WEBSITE_URL . 'page_gone');
    }
    


    }
?>
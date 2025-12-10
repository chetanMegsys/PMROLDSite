<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
    class Pages extends MY_Controller{
        
        public function __construct(){
            $this->load->model("pages_model");
            $this->load->model("sample/sample_model");
        }

        public function contact_us(){

        	$data['actual_canonical_url'] = WEBSITE_URL."contact-us.asp";
            $data['meta_keword'] = "Contact Us";
            $data['meta_description'] = "Persistence Market Research (PMR) data-driven market research reports & pertinent business insights helps many decision-makers like you. Contact to get hard-to-find estimations of niche markets";
            $data['meta_title'] = "Contact Us - USA / Canada, Europe & APAC | Persistence Market Research (PMR)";
            $data['meta_dc_desc'] = "Get the detail contact of Persistence Market Research with its address, contact number and others.";

            $data['meta'] = array('viewport','dc-description');

            $data['breadcrumb'][0]['link'] = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $data['breadcrumb'][0]['title'] = "Contact";
            if (isset($_POST['btnSubmit']) && !$this->is_bot($_SERVER['HTTP_USER_AGENT']) ){
                $this->contact_form();
            }
        	$detect = new Mobile_Detect();
	       if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
	         	$this->load->view("contact_mobile",$data);
	       }else{
	        	$this->load->view("contact",$data);
	        }
        }

        public function research_methodology(){

        	$data['actual_canonical_url'] = WEBSITE_URL."research-methodology.asp";
            $data['meta_keword'] = "Research Methodology";
            $data['meta_description'] = "Persistence Market Research provides valuable insights through robust research methodologies, ensuring businesses make informed decisions and navigate changing landscapes.";
            $data['meta_title'] = "Persistence Market Research: Robust Research Methodology";
            $data['meta_dc_desc'] = "Persistence Market Research provides valuable insights through robust research methodologies, ensuring businesses make informed decisions and navigate changing landscapes.";

            $data['meta'] = array('viewport','dc-description');

            $data['breadcrumb'][0]['link'] = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $data['breadcrumb'][0]['title'] = "Research Methodology";

        	$detect = new Mobile_Detect();
	         if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
	           	$this->load->view("research_methodology_mobile",$data);
	         }else{
	        	$this->load->view("research_methodology",$data);
	        }
        }

        public function industry_research(){

        	$data['actual_canonical_url'] = WEBSITE_URL."industry-research.asp";
            $data['meta_keword'] = "Industry Research";
            $data['meta_description'] = "Persistence Market Research provides valuable insights through robust research methodologies, ensuring businesses make informed decisions and navigate changing landscapes.";
            $data['meta_title'] = "Persistence Market Research: Industry Research";
            $data['meta_dc_desc'] = "Persistence Market Research provides valuable insights through robust research methodologies, ensuring businesses make informed decisions and navigate changing landscapes.";

            $data['meta'] = array('viewport','dc-description');

            $data['breadcrumb'][0]['link'] = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $data['breadcrumb'][0]['title'] = "Industry Research";

        	$detect = new Mobile_Detect();
	        $this->load->view("industry_research",$data);
        }

        public function contact_form(){

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
                $postData["company"] = isset($_POST["company"]) && $_POST["company"] != '' ? $this->data_filter_post($_POST["company"]) : '' ;  
                $postData['user_country'] = isset($_POST["country"]) && $_POST["country"] != '' ? $this->data_filter_post($_POST["country"]) : '' ;  
                $postData["jobTitle"] =   isset($_POST["jobTitle"]) && $_POST["jobTitle"] != '' ? $this->data_filter_post($_POST["jobTitle"]) : '' ;  
                $postData["message"] =  isset($_POST["message"]) && $_POST["message"] != '' ?  $this->data_filter_post($_POST["message"]) : '' ;  

                if(strlen($this->data_filter_post($_POST['message'])) > 500)
                {
                      $postData['message'] = substr($this->data_filter_post($_POST['message']), 0, 500);
                }
                else{
                      $postData['message'] = $this->data_filter_post($_POST['message']) ;
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
                $postData['source'] = strip_tags($postData['source']);
                /* end code added here on date 07/11/2022 */

                $postData['phoneNo'] = $postData['phoneNo'];
                $postData['created_date'] = date("Y-m-d H:i:s");

                $postData['userId'] = $this->sample_model->getLeadAllocationData($postData['country'],22);

                $rsContact = $this->sample_model->saveRequest($postData);

                if($rsContact){
                    $segment = $postData['type'];
                    $id = $postData['repId'];

                    $url = "";

                    if($segment == "C"){
                        $url = WEBSITE_URL . 'thanks/samples/5';
                        $email_setting['source'] = "Contact Us Form";
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
                    $email_setting['report'] = 'Contact Us';
                    $email_setting['report_type'] = 'NA';
                    $email_setting['category'] = 'Page';
                    $email_setting['phone'] = $postData['phoneNo'];
                    $email_setting['country'] = $postData['country'];
                    $email_setting['user_country'] = $postData['user_country'];
                    $email_setting['message'] = $postData['message'];
                    $email_setting['email_to'] = $emailData->email_to;
                    $email_setting['subject'] =  $email_setting['source'];
                    $email_setting['report_slug'] = 'contact-us.asp';
                    $this->lib_mails->LibMail($email_setting);
                    
                    $_SESSION['thankyou'] = 'success';
                    $_SESSION['fname'] = $postData['name'];
                    redirect($url);
                    //redirect(WEBSITE_URL."market-research/".$report_url.".asp#thankyou");
                }
            }
        }

        public function contact_us_amp(){

            redirect(WEBSITE_URL."contact-us.asp", "redirect", 301);

            $data['amphtml'] = "contact-us.asp";
        	$data['meta_keword'] = "Contact Us";
            $data['meta_description'] = "Persistence Market Research (PMR) data-driven market research reports & pertinent business insights helps many decision-makers like you. Contact to get hard-to-find estimations of niche markets";
            $data['meta_title'] = "Contact Us - Offices In USA / Canada & APAC | Persistence Market Research (PMR)";
            $data['meta_dc_desc'] = "Get the detail contact of Persistence Market Research with its address, contact number and others.";

        	$this->load->view("contact_amp",$data);
        }

        public function about_us(){

            $data['latest_reports'] = $this->pages_model->getAllReports();

        	$data['actual_canonical_url'] = WEBSITE_URL."about-us.asp";
            $data['meta_keword'] = "About Us, PersistenceMarketResearch";
            $data['meta_description'] = "Persistence Market Research (PMR) is one of the leading market research companies offering humungous number of insightful research reports & credible business statistics";
            $data['meta_title'] = "Get Data-driven Insights & Business Statistics About Us | Persistence Market Research (PMR)";
            $data['meta_dc_desc'] = "we as persistence market research provide business insights and assists client to growth their business in the respective domain. Persistence Market research also help clients transform into a prominent business firm.";

            $data['meta'] = array('viewport');

            $data['breadcrumb'][0]['link'] = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $data['breadcrumb'][0]['title'] = "About Us";

        	$detect = new Mobile_Detect();
	         if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
	           	$this->load->view("about_mobile",$data);
	         }else{
	        	$this->load->view("about",$data);
	        }
        }
        public function help_a_journalist(){

            $data['latest_reports'] = $this->pages_model->getAllReports();

        	$data['actual_canonical_url'] = WEBSITE_URL."help-a-journalist.asp";
            $data['meta_keword'] = "Help A Journalist, PersistenceMarketResearch";
            $data['meta_description'] = "Persistence Market Research (PMR) is one of the leading market research companies offering humungous number of insightful research reports & credible business statistics";
            $data['meta_title'] = "Get Data-driven Insights & Business Statistics to Help A Journalist | Persistence Market Research (PMR)";
            $data['meta_dc_desc'] = "we as persistence market research provide business insights and assists client to growth their business in the respective domain. Persistence Market research also help clients transform into a prominent business firm.";

            $data['meta'] = array('viewport');

            $data['breadcrumb'][0]['link'] = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $data['breadcrumb'][0]['title'] = "About Us";

        	$detect = new Mobile_Detect();
	        // if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
	        //   	$this->load->view("about_mobile",$data);
	        // }else{
	        	$this->load->view("help-a-journalist",$data);
	        //}
        }
        public function about_us_amp(){

            redirect(WEBSITE_URL."about-us.asp", "redirect", 301);

            $data['latest_reports'] = $this->pages_model->getAllReports();
            
        	$data['amphtml'] = "about-us.asp";
            $data['meta_keword'] = "About Us, Persistence Market Research";
            $data['meta_description'] = "Persistence Market Research (PMR) is one of the leading market research companies offering humungous number of insightful research reports & credible business statistics";
            $data['meta_title'] = "Get Data-driven Insights & Business Statistics About Us | Persistence Market Research (PMR)";
            $data['meta_dc_desc'] = "we as persistence market research provide business insights and assists client to growth their business in the respective domain. Persistence Market research also help clients transform into a prominent business firm.";

        	$this->load->view("about_amp",$data);
        }
        public function media_citations(){

            $data['latest_reports'] = $this->pages_model->getAllReports();

        	$data['actual_canonical_url'] = WEBSITE_URL."media-citations.asp";
            $data['meta_keword'] = "Media Citations, Persistence Market Research";
            $data['meta_description'] = "Explore our media citations showcasing our achievements and partnerships, recognized by reputable sources.";
            $data['meta_title'] = "Media Citations | Persistence Market Research (PMR)";
            $data['meta_dc_desc'] = "we as persistence market research provide business insights and assists client to growth their business in the respective domain. Persistence Market research also help clients transform into a prominent business firm.";

            $data['meta'] = array('viewport');

            $data['breadcrumb'][0]['link'] = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $data['breadcrumb'][0]['title'] = "Media Citations";

        	$detect = new Mobile_Detect();
	        if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
	          	$this->load->view("media_citations",$data);
	        }else{
	        	$this->load->view("media_citations",$data);
	        }
        }

        public function custom_research(){

            $data['latest_reports'] = $this->pages_model->getAllReports();

        	$data['actual_canonical_url'] = WEBSITE_URL."services/custom-research.asp";
            $data['meta_keword'] = "Custom Research, Persistence Market Research";
            $data['meta_description'] = "Persistence Market Research delivers tailored market research & consulting with actionable insights to drive growth, optimize strategies, & boost competitiveness";
            $data['meta_title'] = "Custom Market Research & Consulting Services for Growth";
            $data['meta_dc_desc'] = "Persistence Market Research delivers tailored market research & consulting with actionable insights to drive growth, optimize strategies, & boost competitiveness";

            $data['meta'] = array('viewport');

            $data['breadcrumb'][0]['link'] = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $data['breadcrumb'][0]['title'] = "Custom Research";

        	$detect = new Mobile_Detect();
	        if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
	          	$this->load->view("custom_research_mobile",$data);
	        }else{
	        	$this->load->view("custom_research",$data);
	        }
        }

        public function consulting_services(){

            $data['latest_reports'] = $this->pages_model->getAllReports();

        	$data['actual_canonical_url'] = WEBSITE_URL."services/consulting-services.asp";
            $data['meta_keword'] = "Consulting Services, Persistence Market Research";
            $data['meta_description'] = "Persistence Market Research delivers expert consulting and market intelligence solutions to help businesses identify opportunities, reduce risks, and drive strategic, data-led growth";
            $data['meta_title'] = "Expert Consulting & Market Strategy Advisory Services";
            $data['meta_dc_desc'] = "Persistence Market Research delivers expert consulting and market intelligence solutions to help businesses identify opportunities, reduce risks, and drive strategic, data-led growth";

            $data['meta'] = array('viewport');

            $data['breadcrumb'][0]['link'] = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $data['breadcrumb'][0]['title'] = "Consulting Services";

        	$detect = new Mobile_Detect();
	        if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
	          	$this->load->view("consulting_services_mobile",$data);
	        }else{
	        	$this->load->view("consulting_services",$data);
	        }
        }

        public function subscription_services(){

            $data['latest_reports'] = $this->pages_model->getAllReports();

        	$data['actual_canonical_url'] = WEBSITE_URL."services/subscription-services.asp";
            $data['meta_keword'] = "Subscription Services, Persistence Market Research";
            $data['meta_description'] = "Persistence Market Research offers tailored annual subscriptions with unlimited access to 6,000+ industry research studies, analyst support, and customized pricing for your business";
            $data['meta_title'] = "Annual Market Research Subscription Services";
            $data['meta_dc_desc'] = "Persistence Market Research offers tailored annual subscriptions with unlimited access to 6,000+ industry research studies, analyst support, and customized pricing for your business";

            $data['meta'] = array('viewport');

            $data['breadcrumb'][0]['link'] = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $data['breadcrumb'][0]['title'] = "Subscription Services";

        	$detect = new Mobile_Detect();
	        if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
	          	$this->load->view("subscription_services_mobile",$data);
	        }else{
	        	$this->load->view("subscription_services",$data);
	        }
        }

        public function full_time_engagement(){

            $data['latest_reports'] = $this->pages_model->getAllReports();

        	$data['actual_canonical_url'] = WEBSITE_URL."services/full-time-engagement.asp";
            $data['meta_keword'] = "Full-time Engagement, Persistence Market Research";
            $data['meta_description'] = "Full-Time Engagement offers 24×5 expert analyst support, delivering real-time insights and seamless collaboration to power agile, data-driven decisions";
            $data['meta_title'] = "Full-time Analyst Engagement for Market Insights";
            $data['meta_dc_desc'] = "Full-Time Engagement offers 24×5 expert analyst support, delivering real-time insights and seamless collaboration to power agile, data-driven decisions";

            $data['meta'] = array('viewport');

            $data['breadcrumb'][0]['link'] = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $data['breadcrumb'][0]['title'] = "Full-time Engagement Services";

        	$detect = new Mobile_Detect();
	        if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
	          	$this->load->view("full-time-engagement-mobile",$data);
	        }else{
	        	$this->load->view("full-time-engagement",$data);
	        }
        }

        public function primary_research_capabilties(){

            $data['latest_reports'] = $this->pages_model->getAllReports();

        	$data['actual_canonical_url'] = WEBSITE_URL."services/primary-research-capabilties.asp";
            $data['meta_keword'] = "Primary Research Capabilities, Persistence Market Research";
            $data['meta_description'] = "Persistence Market Research delivers tailored B2B & B2C primary research with surveys, interviews, & focus groups to drive innovation & competitive advantage";
            $data['meta_title'] = "Primary Market Research for Actionable Insights";
            $data['meta_dc_desc'] = "Persistence Market Research delivers tailored B2B & B2C primary research with surveys, interviews, & focus groups to drive innovation & competitive advantage";

            $data['meta'] = array('viewport');

            $data['breadcrumb'][0]['link'] = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $data['breadcrumb'][0]['title'] = "Primary Research Capabilities";

        	$detect = new Mobile_Detect();
	        if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
	          	$this->load->view("primary-research-capabilties-mobile",$data);
	        }else{
	        	$this->load->view("primary-research-capabilties",$data);
	        }
        }
        
        public function syndicate_market_research(){

            $data['latest_reports'] = $this->pages_model->getAllReports();

        	$data['actual_canonical_url'] = WEBSITE_URL."services/syndicate-market-research.asp";
            $data['meta_keword'] = "Syndicated Market Research, Persistence Market Research";
            $data['meta_description'] = "Drive business growth with syndicated market research—gain valuable insights, forecast trends, and develop winning strategies through accurate, data-driven analysis.";
            $data['meta_title'] = "Strategic Syndicated Market Research for Growth";
            $data['meta_dc_desc'] = "Drive business growth with syndicated market research—gain valuable insights, forecast trends, and develop winning strategies through accurate, data-driven analysis.";

            $data['meta'] = array('viewport');

            $data['breadcrumb'][0]['link'] = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $data['breadcrumb'][0]['title'] = "Syndicated Market Research";

        	$detect = new Mobile_Detect();
	        if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
	          	$this->load->view("syndicate-market-research-mobile",$data);
	        }else{
	        	$this->load->view("syndicate-market-research",$data);
	        }
        }

        public function competitive_intelligence_research(){

            $data['latest_reports'] = $this->pages_model->getAllReports();

        	$data['actual_canonical_url'] = WEBSITE_URL."services/competitive-intelligence.asp";
            $data['meta_keword'] = "Competitive Intelligence, Persistence Market Research";
            $data['meta_description'] = "Drive business growth with Competitive Intelligence, valuable insights, forecast trends, and develop winning strategies through accurate, data-driven analysis.";
            $data['meta_title'] = "Strategic Competitive Intelligence for Growth";
            $data['meta_dc_desc'] = "Drive business growth with Competitive Intelligence, valuable insights, forecast trends, and develop winning strategies through accurate, data-driven analysis.";

            $data['meta'] = array('viewport');

            $data['breadcrumb'][0]['link'] = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $data['breadcrumb'][0]['title'] = "Competitive Intelligence";

        	$detect = new Mobile_Detect();
	        if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
	          	$this->load->view("competitive-intelligence-mobile",$data);
	        }else{
	        	$this->load->view("competitive-intelligence",$data);
	        }
        }

        public function commercial_due_diligence_research(){

            $data['latest_reports'] = $this->pages_model->getAllReports();

        	$data['actual_canonical_url'] = WEBSITE_URL."services/commercial-due-diligence.asp";
            $data['meta_keword'] = "Commercial Due Diligence , Persistence Market Research";
            $data['meta_description'] = "Drive business growth with Commercial Due Diligence , valuable insights, forecast trends, and develop winning strategies through accurate, data-driven analysis.";
            $data['meta_title'] = "Strategic Commercial Due Diligence  for Growth";
            $data['meta_dc_desc'] = "Drive business growth with Commercial Due Diligence , valuable insights, forecast trends, and develop winning strategies through accurate, data-driven analysis.";

            $data['meta'] = array('viewport');

            $data['breadcrumb'][0]['link'] = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $data['breadcrumb'][0]['title'] = "Commercial Due Diligence ";

        	$detect = new Mobile_Detect();
	        if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
	          	$this->load->view("commercial-due-diligence-mobile",$data);
	        }else{
	        	$this->load->view("commercial-due-diligence",$data);
	        }
        }

        public function solutions_by_clients(){

            $data['latest_reports'] = $this->pages_model->getAllReports();

        	$data['actual_canonical_url'] = WEBSITE_URL."solutions-by-clients.asp";
            $data['meta_keword'] = "Solutions For Client";
            $data['meta_description'] = "Persistence Market Research (PMR) has constellation of solutions’ expertise for clientele. We're here to strike the perfect balance between intuitions and advanced data insights";
            $data['meta_title'] = "Top-Bottom Approach to Solutions for Clients | Persistence Market Research (PMR)";
            $data['meta_dc_desc'] = "The hierarchy maintained in solution by client are like PMR for Business Development, Business Leader, Channel, Investors, Marketer, Product investors, Developer, Supply Chain Leaders and Sourcing Professionals and also for Technical Professionals, etc .";

            $data['meta'] = array('viewport','dc-description');

            $data['breadcrumb'][0]['link'] = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $data['breadcrumb'][0]['title'] = "Solutions By Clients";

        	$detect = new Mobile_Detect();
	        if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
	          	$this->load->view("solutions_by_clients_mobile",$data);
	        }else{
	        	$this->load->view("solutions_by_clients",$data);
	        }
        }

        public function solutions_by_clients_amp(){

            redirect(WEBSITE_URL."solutions-by-clients.asp","redirect",301);

            $data['latest_reports'] = $this->pages_model->getAllReports();

        	$data['amphtml'] = "solutions-by-clients.asp";
            $data['meta_keword'] = "Solutions For Client";
            $data['meta_description'] = "Persistence Market Research (PMR) has constellation of solutions’ expertise for clientele. We're here to strike the perfect balance between intuitions and advanced data insights";
            $data['meta_title'] = "Top-Bottom Approach to Solutions for Clients | Persistence Market Research (PMR)";
            $data['meta_dc_desc'] = "The hierarchy maintained in solution by client are like PMR for Business Development, Business Leader, Channel, Investors, Marketer, Product investors, Developer, Supply Chain Leaders and Sourcing Professionals and also for Technical Professionals, etc .";

        	$this->load->view("solutions_by_clients_amp",$data);
        }

        public function services(){

            $data['latest_reports'] = $this->pages_model->getAllReports();

        	$data['actual_canonical_url'] = WEBSITE_URL."services.asp";
            $data['meta_keword'] = "Market Research Reports, Syndicated Research Reports, Custom Research Reports";
            $data['meta_description'] = "PMR's consultancy services provides extensive reports database, wide network of publishers, & in-depth knowledge helps customers make right decision, every step of way";
            $data['meta_title'] = "Business Intelligence - Consultancy Services | Persistence Market Research (PMR)";
            $data['meta_dc_desc'] = "The best part of Persistence Market research is to provide good services to the client for the better customer experience, Market revenue growth and driving profit from the both end.";

            $data['meta'] = array('viewport','dc-description');

            $data['breadcrumb'][0]['link'] = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $data['breadcrumb'][0]['title'] = "Services";

        	$detect = new Mobile_Detect();
	        if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
	          	$this->load->view("services_mobile",$data);
	        }else{
	        	$this->load->view("services",$data);
	        }
        }

        public function services_amp(){

            redirect(WEBSITE_URL."services.asp","redirect",301);

            $data['latest_reports'] = $this->pages_model->getAllReports();

        	$data['amphtml'] = "services.asp";
            $data['meta_keword'] = "Market Research Reports, Syndicated Research Reports, Custom Research Reports";
            $data['meta_description'] = "PMR's consultancy services provides extensive reports database, wide network of publishers, & in-depth knowledge helps customers make right decision, every step of way";
            $data['meta_title'] = "Business Intelligence - Consultancy Services | Persistence Market Research (PMR)";
            $data['meta_dc_desc'] = "The best part of Persistence Market research is to provide good services to the client for the better customer experience, Market revenue growth and driving profit from the both end.";

        	$this->load->view("services_amp",$data);
        }

        public function client_endorsement_and_engagement(){

            $data['latest_reports'] = $this->pages_model->getAllReports();

        	$data['actual_canonical_url'] = WEBSITE_URL."client-endorsement-and-engagement.asp";
            $data['meta_keword'] = "Testimonials, Client Endorsements, Client Engagement, Walk through PersistenceMarketResearch Testimonials with its Client Endorsements and Engagements";
            $data['meta_description'] = "Persistence Market Research - PMR's engagement model follows the 'client-first' approach, irrespective of it being on ongoing service engagement or an ad-hoc project";
            $data['meta_title'] = "Client Endorsements & Engagement Models | Persistence Market Research (PMR)";
            $data['meta_dc_desc'] = "The main responsibility of Persistence Market research is the engagement of the client to provide them the relevance information.";

            $data['meta'] = array('viewport','dc-description');

            $data['breadcrumb'][0]['link'] = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $data['breadcrumb'][0]['title'] = "Client Endorsements & Engagement";

        	$detect = new Mobile_Detect();
	        if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
	          	$this->load->view("client_endorsement_and_engagement_mobile",$data);
	        }else{
	        	$this->load->view("client_endorsement_and_engagement",$data);
	        }
        }

        public function client_endorsement_and_engagement_amp(){

            redirect(WEBSITE_URL."client-endorsement-and-engagement.asp", "redirect", 301);

            $data['latest_reports'] = $this->pages_model->getAllReports();

        	$data['amphtml'] = "client-endorsement-and-engagement.asp";
            $data['meta_keword'] = "Testimonials, Client Endorsements, Client Engagement, Walk through PersistenceMarketResearch Testimonials with its Client Endorsements and Engagements";
            $data['meta_description'] = "Persistence Market Research - PMR's engagement model follows the 'client-first' approach, irrespective of it being on ongoing service engagement or an ad-hoc project";
            $data['meta_title'] = "Client Endorsements & Engagement Models | Persistence Market Research (PMR)";
            $data['meta_dc_desc'] = "The main responsibility of Persistence Market research is the engagement of the client to provide them the relevance information.";

        	$this->load->view("client_endorsement_and_engagement_amp",$data);
        }

        public function faq(){

        	$data['actual_canonical_url'] = WEBSITE_URL."faq.asp";
            $data['meta_keword'] = "Journalist Resources";
            $data['meta_description'] = "Questions about Market Research giving sleepless nights? Glance through our FAQs - this compilation of updated resources has been made available by the research experts at PMR";
            $data['meta_title'] = "Questions In Your Mind? Our FAQs Will Answer Those | Persistence Market Research (PMR)";
            $data['meta_dc_desc'] = "The Frequently ask question is also included by Persistence Market Research for the sake of the client.";

            $data['meta'] = array('viewport','dc-description');

            $data['breadcrumb'][0]['link'] = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $data['breadcrumb'][0]['title'] = "FAQ";

        	$data['latest_reports'] = $this->pages_model->getLatestReports();
        	$detect = new Mobile_Detect();
	        if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
	          	$this->load->view("faq_mobile",$data);
	        }else{
	        	$this->load->view("faq",$data);
	        }
        }

        public function faq_amp(){

            redirect(WEBSITE_URL."faq.asp", "redirect", 301);

			$data['amphtml'] = "faq.asp";
            $data['meta_keword'] = "Journalist Resources";
            $data['meta_description'] = "Questions about Market Research giving sleepless nights? Glance through our FAQs - this compilation of updated resources has been made available by the research experts at PMR";
            $data['meta_title'] = "Questions In Your Mind? Our FAQs Will Answer Those | Persistence Market Research (PMR)";
            $data['meta_dc_desc'] = "The Frequently ask question is also included by Persistence Market Research for the sake of the client.";
            $data['latest_reports'] = $this->pages_model->getLatestReports();

			$this->load->view("faq_amp",$data);
        }

        public function disclaimer(){

        	$data['actual_canonical_url'] = WEBSITE_URL."disclaimer.asp";
            $data['meta_keword'] = "Disclaimer";
            $data['meta_description'] = "Persistence Market Research - PMRs official disclaimer is a statement / web document intended to limit the responsibility or legal liability of our company, organization, or person";
            $data['meta_title'] = "Website Official Disclaimer | Persistence Market Research (PMR)";
            $data['meta_dc_desc'] = "Persistence Market Research moves ahead with its market analysis based on information obtained through primary and secondary research. We are not accountable for the transparency or accuracy of information that we lay our hands on.";

            $data['meta'] = array('viewport','dc-description');

            $data['breadcrumb'][0]['link'] = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $data['breadcrumb'][0]['title'] = "Disclaimer";

        	$detect = new Mobile_Detect();
	        if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
	          	$this->load->view("disclaimer_mobile",$data);
	        }else{
	        	$this->load->view("disclaimer",$data);
	        }
        }

        public function disclaimer_amp(){

            redirect(WEBSITE_URL."disclaimer.asp", "redirect", 301);

        	$data['amphtml'] = "disclaimer.asp";
            $data['meta_keword'] = "Disclaimer";
            $data['meta_description'] = "Persistence Market Research - PMRs official disclaimer is a statement / web document intended to limit the responsibility or legal liability of our company, organization, or person";
            $data['meta_title'] = "Website Official Disclaimer | Persistence Market Research (PMR)";
            $data['meta_dc_desc'] = "Persistence Market Research moves ahead with its market analysis based on information obtained through primary and secondary research. We are not accountable for the transparency or accuracy of information that we lay our hands on.";

        	$this->load->view("disclaimer_amp",$data);
        }

        public function privacy_policy(){
        	$data['actual_canonical_url'] = WEBSITE_URL."privacy-policy.asp";
            $data['meta_keword'] = "Persistence Market Research - Privacy Policy";
            $data['meta_description'] = "Persistence Market Research (PMR) respects the privacy of our esteemed clientele and makes sure to stick to it. We're at the forefront regarding confidentiality and privacy";
            $data['meta_title'] = "Read Privacy Policies | Persistence Market Research (PMR)";
            $data['meta_dc_desc'] = "Persistence Market Research (PMR) is at the forefront regarding confidentiality and privacy of its clients.";

            $data['meta'] = array('viewport','dc-description');

            $data['breadcrumb'][0]['link'] = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $data['breadcrumb'][0]['title'] = "Privacy Policy";

        	$detect = new Mobile_Detect();
	        if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
	          	$this->load->view("privacy_policy_mobile",$data);
	        }else{
	        	$this->load->view("privacy_policy",$data);
	        }
        }

        public function privacy_policy_amp(){

            redirect(WEBSITE_URL."privacy-policy.asp", "redirect", 301);

        	$data['amphtml'] = "privacy-policy.asp";
            $data['meta_keword'] = "Persistence Market Research - Privacy Policy";
            $data['meta_description'] = "Persistence Market Research (PMR) respects the privacy of our esteemed clientele and makes sure to stick to it. We're at the forefront regarding confidentiality and privacy";
            $data['meta_title'] = "Read Privacy Policies | Persistence Market Research (PMR)";
            $data['meta_dc_desc'] = "Persistence Market Research (PMR) is at the forefront regarding confidentiality and privacy of its clients.";

        	$this->load->view("privacy_policy_amp",$data);
        }

        public function terms_and_conditions(){
        	$data['actual_canonical_url'] = WEBSITE_URL."terms-and-conditions.asp";
            $data['meta_keword'] = "Terms Of Use";
            $data['meta_description'] = "Persistence Market Research - PMR hereby lays down the terms and conditions pertaining to the same, but at our discretion to alter them as and when need be";
            $data['meta_title'] = "Important Terms & Conditions | Persistence Market Research (PMR)";
            $data['meta_dc_desc'] = "As term and condition is for the sake of  both client and the user’s, so that it would be the easy way to deal with.";

            $data['meta'] = array('viewport','dc-description');

            $data['breadcrumb'][0]['link'] = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $data['breadcrumb'][0]['title'] = "Terms & Conditions";

        	$detect = new Mobile_Detect();
	        if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
	          	$this->load->view("terms_and_conditions_mobile",$data);
	        }else{
	        	$this->load->view("terms_and_conditions",$data);
	        }
        }

        public function terms_and_conditions_amp(){

            redirect(WEBSITE_URL."terms-and-conditions.asp", "redirect", 301);

        	$data['amphtml'] = "terms-and-conditions.asp";
            $data['meta_keword'] = "Terms Of Use";
            $data['meta_description'] = "Persistence Market Research - PMR hereby lays down the terms and conditions pertaining to the same, but at our discretion to alter them as and when need be";
            $data['meta_title'] = "Important Terms & Conditions | Persistence Market Research (PMR)";
            $data['meta_dc_desc'] = "As term and condition is for the sake of  both client and the user’s, so that it would be the easy way to deal with.";

        	$this->load->view("terms_and_conditions_amp",$data);
        }

        public function return_policy(){

        	$data['actual_canonical_url'] = WEBSITE_URL."return-policy.asp";
            $data['meta_keword'] = "Persistence Market Research Return Policy";
            $data['meta_description'] = "Our clients have the right to put 'return policy' into practice in case of research report delivery mismatches their requirements. PMR will take utmost care to enable smooth execution";
            $data['meta_title'] = "Terms Governing Return Policy | Persistence Market Research (PMR)";
            $data['meta_dc_desc'] = "The clients do have the right to put 'return policy' into practice in case of delivery mismatching the requirements.";

            $data['meta'] = array('viewport','dc-description');

            $data['breadcrumb'][0]['link'] = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $data['breadcrumb'][0]['title'] = "Return Policy";

        	$detect = new Mobile_Detect();
	        if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
	          	$this->load->view("return_policy_mobile",$data);
	        }else{
	        	$this->load->view("return_policy",$data);
	        }
        }

        public function return_policy_amp(){

            redirect(WEBSITE_URL."return-policy.asp", "redirect", 301);

			$data['amphtml'] = "return-policy.asp";
            $data['meta_keword'] = "Persistence Market Research Return Policy";
            $data['meta_description'] = "Our clients have the right to put 'return policy' into practice in case of research report delivery mismatches their requirements. PMR will take utmost care to enable smooth execution";
            $data['meta_title'] = "Terms Governing Return Policy | Persistence Market Research (PMR)";
            $data['meta_dc_desc'] = "The clients do have the right to put 'return policy' into practice in case of delivery mismatching the requirements.";

			$this->load->view("return_policy_amp",$data);
        }

        public function how_to_order(){

        	$data['actual_canonical_url'] = WEBSITE_URL."how-to-order.asp";
            $data['meta_keword'] = "How to Order Market Research Reports from Persistence Market Research";
            $data['meta_description'] = "Persistence Market Research - PMR's 'How to Order' section will help you sail through the complexities of accessing reports from various business critical industries";
            $data['meta_title'] = "Access To 'How to Order' Section - Get Deeper Insights | Persistence Market Research (PMR)";
            $data['meta_dc_desc'] = "To make the easy path for the client, get to know how to order the report from this with various method";

            $data['meta'] = array('viewport','dc-description');

            $data['breadcrumb'][0]['link'] = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $data['breadcrumb'][0]['title'] = "How to Order";

        	$detect = new Mobile_Detect();
	        if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
	          	$this->load->view("how_to_order_mobile",$data);
	        }else{
	        	$this->load->view("how_to_order",$data);
	        }
        }

        public function how_to_order_amp(){

            redirect(WEBSITE_URL."how-to-order.asp", "redirect", 301);

        	$data['amphtml'] = "how-to-order.asp";
            $data['meta_keword'] = "How to Order Market Research Reports from Persistence Market Research";
            $data['meta_description'] = "Persistence Market Research - PMR's 'How to Order' section will help you sail through the complexities of accessing reports from various business critical industries";
            $data['meta_title'] = "Access To 'How to Order' Section - Get Deeper Insights | Persistence Market Research (PMR)";
            $data['meta_dc_desc'] = "To make the easy path for the client, get to know how to order the report from this with various method";
            
        	$this->load->view("how_to_order_amp",$data);
        }

        public function careers(){

        	$data['actual_canonical_url'] = WEBSITE_URL."careers.asp";
            $data['meta_keword'] = "The Alpha Employee, Upbeat, Autonomous, Research of the Future, Fast & Bold, Small Teams, Big Ideas";
            $data['meta_description'] = "Get ready to cast a replenished shadow on the canvas of Market Intelligence. We provide employees their space with regards to growth and development to enhance their career graph";
            $data['meta_title'] = "We On Lookout For Diligent People To Be A Part Of PMR Team | Persistence Market Research";
            $data['meta_dc_desc'] = "Know the Opportunity given by the Persistence market Research for the self-career growth.";

            $data['meta'] = array('viewport','dc-description','noindex');

            $data['breadcrumb'][0]['link'] = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $data['breadcrumb'][0]['title'] = "Careers";

        	$detect = new Mobile_Detect();
	        if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
	          	$this->load->view("careers_mobile",$data);
	        }else{
	        	$this->load->view("careers",$data);
	        }
        }

        public function careers_amp(){

            redirect(WEBSITE_URL."careers.asp", "redirect", 301);

        	$data['amphtml'] = "careers.asp";
            $data['meta_keword'] = "The Alpha Employee, Upbeat, Autonomous, Research of the Future, Fast & Bold, Small Teams, Big Ideas";
            $data['meta_description'] = "Get ready to cast a replenished shadow on the canvas of Market Intelligence. We provide employees their space with regards to growth and development to enhance their career graph";
            $data['meta_title'] = "We On Lookout For Diligent People To Be A Part Of PMR Team | Persistence Market Research";
            $data['meta_dc_desc'] = "Know the Opportunity given by the Persistence market Research for the self-career growth.";

            $data['meta'] = array('noindex','dc-description','viewport');

        	$this->load->view("careers_amp",$data);
        }

        public function page_not_fount(){
            $this->output->set_status_header('404');
            $current_url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $redirect_url = $this->pages_model->getRedirections($current_url);
            if (!empty($redirect_url)) {
                redirect($redirect_url[0]['destination_url'], "location", $redirect_url[0]['error_type']);
            }
            $data['meta'] = array('viewport');
            $data['meta_description'] = "The link or page you are trying to find is not available. Please try again.";
            $data['meta_title'] = "Page Not Found | Persistence Market Research";
                $detect = new Mobile_Detect();
            if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                $this->load->view("page_not_found_mobile",$data);
            }else{
                $this->load->view("page_not_found",$data);
            }
        }

        public function page_gone(){
            $this->output->set_status_header('410');
            $current_url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $redirect_url = $this->pages_model->getRedirections($current_url);
            if (!empty($redirect_url)) {
                redirect($redirect_url[0]['destination_url'], "location", $redirect_url[0]['error_type']);
            }
            $data['meta'] = array('viewport');
            $data['meta_description'] = "The link or page you are trying to find is not available. Please try again.";
            $data['meta_title'] = "410 Page Gone| Persistence Market Research";
                $detect = new Mobile_Detect();
            if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                $this->load->view("page_not_found_mobile_410",$data);
            }else{
                $this->load->view("page_not_found_410",$data);
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


    public function getIpAddress(){
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

   

    public function getTheContryName($ip){
        $country_name  = "Unknown";
        
            $ip_data = @json_decode(file_get_contents("https://www.geoplugin.net/json.gp?ip=" . $ip));
            if($ip_data && $ip_data->geoplugin_countryName != null) {
                 $country_name = $ip_data->geoplugin_countryName;
            }
            else{
                    $ch = curl_init('https://ipwho.is/'.$ip);
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
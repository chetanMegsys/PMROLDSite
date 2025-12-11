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
            $num_rec_per_page = 10;
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
            $filter = array();
            if(isset($_POST['searchBySector'])){
                $filter['cat_id'] = $_POST['searchBySector'];
            }

            if(isset($_POST['searchByYear'])){
                $filter['rep_pub_date'] = $_POST['searchByYear'];
            }

            $data['pagination'] = "";
            $page = 1;
            $num_rec_per_page = 10;
            $start_from = 0;
            $pagination_url = WEBSITE_URL."market-reports.asp";

            $data['total_records'] = $this->reports_model->getReportCount($filter,"N");

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

            $data['reports'] = $this->reports_model->getReports($num_rec_per_page, $start_from, $filter, "N");
            $data['categories'] = $this->reports_model->getCategories();
            
            $data['meta_keword'] = "Research on Demand, Vendor Spotlight, Actionable Competitive Analysis, Multi-Client Services, Point of Views: Exclusive Solutions by Role, Industry, and Region";
            $data['meta_description'] = "Persistence Market Research PMR - provides you all the premium and comprehensive market research insights, industry know-hows, latest industry updates and strategic intelligence reports";
            $data['meta_title'] = "Browse Largest Premium Market Research Reports Hub | Persistence Market Research (PMR)";
            $data['page_heading'] = "Market Reports";

            $data['page_heading_content'] = "Persistence Market Research practices “Multi-tasking”, but on a selective note! In other words, different businesses are handled with their distinct preferences, but keeping in mind every business’ discreetness!";

            $data['page_short_desc'] = "<h2 class='text-left borderGreen'>Persistence Market Research: A Multitude of Clients with no Space for Incertitude!</h2><p>Persistence Market Research’s precise, flexible, and superlative research offerings do suffice a broad range of client queries. The data library, in fact, does make ways for businesses to review the market insights related to each and every vertical across the globe. Persistence Market Research serving a multitude of clients does imply that every client is addressed without even the slightest diversion of attention.</p> <p>There are times when turbulence hits the world (for example – the Covid-19 era). Persistence Market Research makes sure to not go on back foot even over here. It has, on the contrary, upscaled its operations, as it understands that the clients all over will have to reshape their strategy considering the existent as well as future scenario.</p>";

            
            $data['meta_dc_desc'] = "Global Market Research Report, Market Size, Share, Forecast, Overview, Trends, Marketing Strategy, Industry Analysis, Outlook, Competitive Landscape, Future Prospects.";

            $data['breadcrumb'][0]['link'] = WEBSITE_URL."market-reports.asp";
            $data['breadcrumb'][0]['title'] = "Market Reports";

            $data['report_type'] = 'N';
            
				$data['meta'] = array('viewport','dc-description');
			 
           
            $detect = new Mobile_Detect();
            if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                $this->load->view("report_list_mobile",$data);
            }else{
                $this->load->view("report_list",$data);
            }
        }
        
        public function upcoming_report_list(){  
            $filter = array();
            if(isset($_POST['searchBySector'])){
                $filter['cat_id'] = $_POST['searchBySector'];
            }

            if(isset($_POST['searchByYear'])){
                $filter['rep_pub_date'] = $_POST['searchByYear'];
            }

            $data['pagination'] = "";
            $page = 1;
            $num_rec_per_page = 10;
            $start_from = 0;
            $pagination_url = WEBSITE_URL."forthcoming-reports.asp";

            $data['total_records'] = $this->reports_model->getReportCount($filter,"M");

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

            $data['reports'] = $this->reports_model->getReports($num_rec_per_page, $start_from, $filter, "M");

            $data['categories'] = $this->reports_model->getCategories();
            
            $data['meta_keword'] = "Market Research Reports, Industry Overview, Healthcare Insurance, Market Trends, Stocks, Forecast, Share.";
            $data['meta_description'] = "Persistence Market Research - PMR provides the most prominent aspects of business landscape & develop a framework in forthcoming reports. Time to quickly find your business insights";
            $data['meta_title'] = 'Get Forthcoming & Trending Market Research Reports | Persistence Market Research (PMR)';
            $data['page_heading'] = "Forthcoming Reports";

            $data['page_heading_content'] = "Persistence Market Research does approach businesses with the adaptability to their strengths and areas of encashment, so that customized solutions could be provided with regards to consumer behaviour, sales potential in new-fangled markets, brand strategy, value chain analysis, emerging trends, associated impact, and forecasting.";

            $data['page_short_desc'] = "<h2 class='text-left borderGreen'>Research on Demand: You name it, and we have it for you!</h2><p>Persistence Market Research does provide customized solutions, without going for customary research! In other words, Persistence Market Research gives a unique analysis of data along with the latest lot of market dynamics, which does enable us in tabling the most actionable insights to the clients.</p> <p>Persistence Market Research strongly believes that being superficial guarantees just outward success. If long-term success is on the anvil, delving deeper into the market asked for is needed. This gives way to capturing historic, ongoing, and future prospects regarding the same market. Also, Persistence Market Research does not cast every business in the same mould. It, instead, follows the “different strokes for different folks” approach, which implies that it designs market research solutions based on the clients’ DNA. Persistence Market Research moves around with the dictum that “No two businesses are exactly the same</p>";

           
            $data['meta_dc_desc'] = "Global Market Research Report, Market Size, Share, Forecast, Overview, Trends, Marketing Strategy, Industry Analysis, Outlook, Competitive Landscape, Future Prospects.";
            $data['breadcrumb'][0]['link'] = WEBSITE_URL."forthcoming-reports.asp";
            $data['breadcrumb'][0]['title'] = "Forthcoming Reports";

            $data['report_type'] = 'M';
            
				$data['meta'] = array('viewport','dc-description');
			 
            $detect = new Mobile_Detect();
            if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                $this->load->view("report_list_mobile",$data);
            }else{
                $this->load->view("report_list",$data);
            }
        }

        public function category_reports($category_url){

            $data = array();
            $filter = array();
            if(isset($_POST['searchBySector'])){
                $filter['cat_id'] = $_POST['searchBySector'];
            }

            if(isset($_POST['searchByYear'])){
                $filter['rep_pub_date'] = $_POST['searchByYear'];
            }

            if(isset($_POST['searchByType'])){
                $filter['rep_type'] = $_POST['searchByType'];
                $data['report_type'] = $_POST['searchByType'];
            }

            $data['pagination'] = "";
            $page = 1;
            $num_rec_per_page = 10;
            $start_from = 0;
            $pagination_url = WEBSITE_URL.$category_url.".asp";

            $data['total_records'] = $this->reports_model->getCategoryReportCount($filter, $category_url);

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

            $data['reports'] = $this->reports_model->getCategoryReports($num_rec_per_page, $start_from, $filter, $category_url);
            
            $data['categories'] = array();
            $categoryDetails = $this->reports_model->getCategoryDetails($category_url);

            $data['page_short_desc'] = $categoryDetails[0]['cat_top_descr'];
            $data['page_heading_content'] = $categoryDetails[0]['cat_top_heading'];
    
            $data['meta_keword'] = $categoryDetails[0]['meta_keyword']!='' ? $categoryDetails[0]['meta_keyword'] : $categoryDetails[0]['meta_title'];
            $data['meta_description'] = $categoryDetails[0]['meta_descr']!='' ? $categoryDetails[0]['meta_descr'] : $categoryDetails[0]['meta_title'];
            $data['meta_dc_desc'] = $categoryDetails[0]['dc_description']!='' ? $categoryDetails[0]['dc_description'] : $categoryDetails[0]['meta_title'];
            $data['meta_title'] = $categoryDetails[0]['meta_title'];
            $data['page_heading'] = $categoryDetails[0]['cat_name']." Market Reports";

            $data['hdn_cat_id'] = $categoryDetails[0]['category_id'];

            $data['meta'] = array('viewport','X-UA-Compatible','dc-description');

            $data['breadcrumb'][0]['link'] = WEBSITE_URL."market-research-report/".$category_url.".asp";
            $data['breadcrumb'][0]['title'] = ucwords(str_replace("-"," ",$category_url))." Market Reports";
            
            if (isset($_POST['page'])){
                $detect = new Mobile_Detect();
                if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                    $this->load->view("report_list_mobile",$data);
                }else{
                    $this->load->view("report_list",$data);
                }
            }else{
                $data['sub_cat_content'] = $this->reports_model->getSubCategoryDetails($categoryDetails[0]['category_id']);
                $data['CategoryId'] = $categoryDetails[0]['category_id'];
                $detect = new Mobile_Detect();
                if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                    $this->load->view("sub_category_list_mobile",$data);
                }else{
                    $this->load->view("sub_category_list",$data);
                }
            }

        }

        public function reports_by_ajax($category_url=""){

            $filter = array();
            if(isset($_POST['searchBySector'])){
                $filter['cat_id'] = $_POST['searchBySector'];
            }

            if(isset($_POST['searchByYear'])){
                $filter['rep_pub_date'] = $_POST['searchByYear'];
            }

            $repType = 'N';
            if(isset($_POST['repType'])){
                $repType = $_POST['repType'];
            }

            $data['pagination'] = "";
            $page = 1;
            $num_rec_per_page = 10;
            $start_from = 0;
            $pagination_url = WEBSITE_URL.$category_url.".asp";

            $total_records = $this->reports_model->getReportCount($filter,$repType);

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

            if ($total_records > $num_rec_per_page) {
                $data['pagination'] = $this->pagination_custom->paginationCustom($page, $start_from, $num_rec_per_page, $total_records, $previous, $next, $pagination_url);
            }

            $reports = $this->reports_model->getReports($num_rec_per_page, $start_from, $filter, $repType);
            // echo $this->db->last_query(); exit; 
            $data['reports'] = $this->getReportsHTML($reports);

            $data['csrf_name'] = $this->security->get_csrf_token_name();
            $data['csrf_value'] = $this->security->get_csrf_hash();

            $data['total_records'] = $total_records;
            
            echo json_encode($data);

        }

        public function report_detail($report_url){
			
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

            $data['report_detail'] = $this->reports_model->getReportDetailByURL($report_url);

           

             

            if (isset($_POST['btnSubmit'])) {
				
                unset($_POST['btnSubmit']); 
                $postData = $_POST;

                if($postData['emailId']=='sample@email.tst'){
                    redirect(WEBSITE_URL);
                }

                $postData['country'] = strtolower($this->visitor_country());

                $postData['created_date'] = date("Y-m-d H:i:s");

                $postData['userId'] = $this->sample_model->getLeadAllocationData($postData['country'],$data['report_detail'][0]['category_id']);

                $rsContact = $this->sample_model->saveRequest($postData);
            
                if($rsContact){
                    $segment = $postData['type'];
                    $id = $postData['repId'];

                    $url = "";

                    if($segment == "S"){
                        $url = WEBSITE_URL . 'thanks/samples/'.$id;
                        $email_setting['source'] = "Request Sample";
                    }else if($segment == "B"){
                        $url = WEBSITE_URL . 'thanks/samples/'.$id;
                        $email_setting['source'] = "Request Brochure";
                    }else if($segment == "RM" || $segment == "RRM"){
                        $url = WEBSITE_URL . 'thanks/methodology/'.$id;
                        $email_setting['source'] = "Request Methodology";
                    }else if($segment == "RA"){
                        $url = WEBSITE_URL . 'thanks/request-advisory/'.$id;
                        $email_setting['source'] = "Request Advisory";
                    }else if($segment == "ASK"){
                        $url = WEBSITE_URL . 'thanks/ask-an-expert/'.$id;
                        $email_setting['source'] = "Ask An Expert";
                    }else if($segment == "RC"){
                        $url = WEBSITE_URL . 'thanks/request-customization/'.$id;
                        $email_setting['source'] = "Request Customization";
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
                    $email_setting['subject'] = $email_setting['source'];

                    $this->lib_mails->LibMail($email_setting);
                    
                    $_SESSION['thankyou'] = 'success';

                    redirect($url);
                }
            }

            

           

            if(!empty($data['report_detail'])){
				 $data['countries'] = $this->sample_model->getCountries();
				$data['actual_canonical_url'] = WEBSITE_URL."market-research/".$data['report_detail'][0]['rep_url'].".asp";
            $data['meta_keword'] = $data['report_detail'][0]['meta_keywords']!='' ? $data['report_detail'][0]['meta_keywords'] : $data['report_detail'][0]['meta_title'];
            $data['meta_description'] = $data['report_detail'][0]['meta_desc']!='' ? $data['report_detail'][0]['meta_desc'] : $data['report_detail'][0]['meta_title'];
            $data['meta_title'] = $data['report_detail'][0]['meta_title'];
            $data['meta_dc_desc'] = $data['report_detail'][0]['dc_desc']!='' ? $data['report_detail'][0]['dc_desc'] : $data['report_detail'][0]['meta_title'];
			
			if($data['report_detail'][0]['is_index'] == 'I')
			{
				 $data['meta'] = array('report_detail','viewport','dc-description');
			}
			elseif($data['report_detail'][0]['is_index']  == 'NI')
			{
				$data['meta'] = array('report_detail','viewport','dc-description','noindex');
			}
			elseif($data['report_detail'][0]['is_index']  == 'NF')
			{
				  $data['meta'] = array('report_detail','viewport','dc-description','nofollow');
			}
			elseif($data['report_detail'][0]['is_index']  == 'NINF')
			{
				  $data['meta'] = array('report_detail','viewport','dc-description','noindex','nofollow');
			}
			else{
	            $data['meta'] = array('report_detail','viewport','dc-description','noindex','nofollow');	
			}

			
                $data['report_description'] = $this->reports_model->getReportDescription($data['report_detail'][0]['rep_id']);
                $data['related_reports'] = $this->reports_model->getRelatedReport($data['report_detail'][0]['rep_id'], $data['report_detail'][0]['rep_tag_id']);
                $data['pressrelease'] = $this->reports_model->getPressRelease($data['report_detail'][0]['rep_id']);
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

            if (isset($_POST['btnSubmit']) && isset($_POST['captcha']) && $_POST['captcha'] != "") {
                unset($_POST['btnSubmit']); 
                $postData = $_POST;

                $postData['phoneNo'] = $postData['phoneNo'];
                $postData['created_date'] = date("Y-m-d H:i:s");

                $rsContact = $this->sample_model->saveRequest($postData);
            
                if($rsContact){
                    
                    $segment = $postData['type'];
                    $id = $postData['repId'];
                    
                    if($segment == "S"){
                        redirect(WEBSITE_URL . 'thanks/samples/'.$id);
                    }else if($segment == "RM"){
                        redirect(WEBSITE_URL . 'thanks/methodology/'.$id);
                    }else if($segment == "RA"){
                        redirect(WEBSITE_URL . 'thanks/request-advisory/'.$id);
                    }else if($segment == "ASK"){
                        redirect(WEBSITE_URL . 'thanks/ask-an-expert/'.$id);
                    }else if($segment == "RC"){
                        redirect(WEBSITE_URL . 'thanks/request-customization/'.$id);
                    }else if($segment == "T"){
                        redirect(WEBSITE_URL . 'thanks/toc/'.$id);
                    }
                }
            }

            $data['report_detail'] = $this->reports_model->getReportDetailByURL($report_url);

            $data['amphtml'] = "market-research/".$data['report_detail'][0]['rep_url'].".asp";
            $data['meta_keword'] = $data['report_detail'][0]['meta_keywords']!='' ? $data['report_detail'][0]['meta_keywords'] : $data['report_detail'][0]['meta_title'];
            $data['meta_description'] = $data['report_detail'][0]['meta_desc']!='' ? $data['report_detail'][0]['meta_desc'] : $data['report_detail'][0]['meta_title'];
            $data['meta_title'] = $data['report_detail'][0]['meta_title'];
            $data['meta_dc_desc'] = $data['report_detail'][0]['dc_desc']!='' ? $data['report_detail'][0]['dc_desc'] : $data['report_detail'][0]['meta_title'];

            $data['meta'] = array('viewport');
            
            if(!empty($data['report_detail'])){
                $data['report_description'] = $this->reports_model->getReportDescription($data['report_detail'][0]['rep_id']);
                $data['related_reports'] = $this->reports_model->getRelatedReport($data['report_detail'][0]['rep_id'], $data['report_detail'][0]['category_id']);
                $data['pressrelease'] = $this->reports_model->getPressRelease($data['report_detail'][0]['rep_id']);

                $this->load->view("report_details_amp",$data);
                
            }else{
                redirect(WEBSITE_URL);
            }
        }

        public function report_toc($report_url){
            $data['report_detail'] = $this->reports_model->getReportDetailByURL($report_url);
            if (isset($_POST['btnSubmit'])) {
                
                unset($_POST['btnSubmit']); 
                $postData = $_POST;

                if($postData['emailId']=='sample@email.tst'){
                    redirect(WEBSITE_URL);
                }

                $postData['country'] = strtolower($this->visitor_country());

                $postData['created_date'] = date("Y-m-d H:i:s");

                $postData['userId'] = $this->sample_model->getLeadAllocationData($postData['country'],$data['report_detail'][0]['category_id']);

                $rsContact = $this->sample_model->saveRequest($postData);
            
                if($rsContact){
                    $segment = $postData['type'];
                    $id = $postData['repId'];

                    $url = "";

                    if($segment == "S"){
                        $url = WEBSITE_URL . 'thanks/samples/'.$id;
                        $email_setting['source'] = "Request Sample";
                    }else if($segment == "B"){
                        $url = WEBSITE_URL . 'thanks/samples/'.$id;
                        $email_setting['source'] = "Request Brochure";
                    }else if($segment == "RM" || $segment == "RRM"){
                        $url = WEBSITE_URL . 'thanks/methodology/'.$id;
                        $email_setting['source'] = "Request Methodology";
                    }else if($segment == "RA"){
                        $url = WEBSITE_URL . 'thanks/request-advisory/'.$id;
                        $email_setting['source'] = "Request Advisory";
                    }else if($segment == "ASK"){
                        $url = WEBSITE_URL . 'thanks/ask-an-expert/'.$id;
                        $email_setting['source'] = "Ask An Expert";
                    }else if($segment == "RC"){
                        $url = WEBSITE_URL . 'thanks/request-customization/'.$id;
                        $email_setting['source'] = "Request Customization";
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
                    $email_setting['subject'] = $email_setting['source'];

                    $this->lib_mails->LibMail($email_setting);
                    
                    $_SESSION['thankyou'] = 'success';

                    redirect($url);
                }
            }

            $data['report_detail'] = $this->reports_model->getReportDetailTOCByURL($report_url);
            if(!empty($data['report_detail'])){
                $data['related_reports'] = $this->reports_model->getRelatedReport($data['report_detail'][0]['rep_id'], $data['report_detail'][0]['category_id']);

                $data['meta'] = array('viewport','noindex','nofollow');

                $data['meta_keword'] = 'Free sample report of '.$data['report_detail'][0]['rep_keyword'];
                $data['meta_description'] = 'Free table of content, list of tables, list of charts and introduction of '.$data['report_detail'][0]['rep_keyword'];
                $data['meta_title'] = 'Table of Content - '.$data['report_detail'][0]['rep_keyword'];

                $detect = new Mobile_Detect();
                if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                    $this->load->view("report_details_toc_mobile",$data);
                }else{
                    $this->load->view("report_details_toc",$data);
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
                                <div class="col-xs-12 col-md-3 col-sm-4">
                                    <div class="iconBox text-center">
                                        <img src="'.$img.'" alt="'.$keyword.'" title="'.$keyword.'" />
                                        <div class="mt-4 repDate">
                                            <span>'.$br1.'</span>
                                            <span>|</span>
                                            <span>'.$br2.'</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-9 col-sm-8">
                                    <div class="contentBox">
                                        <a class="listTitle secHeadingLeft" href="'.WEBSITE_URL."market-research/".$report['rep_url'].".asp".'" title="'.$keyword.'">'.$keyword.'</a>
                                        <p class="mt-4">'.$report['rep_name'].'</p>
                                        <div class="actionBtn">
                                            <a href="'.WEBSITE_URL."market-research/".$report['rep_url'].".asp".'" class="btn btnPrimary" title="'.$keyword.'">
                                                Read More
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                                </svg>
                                            </a>
                                            '.$btn.'
                                        </div>
                                    </div>
                                </div>
                            </div>';
                }
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
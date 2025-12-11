<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
    class Pages extends MY_Controller{
        
        public function __construct(){
            $this->load->model("pages_model");
        }

        public function contact_us(){

        	$data['actual_canonical_url'] = WEBSITE_URL."contact-us.asp";
            $data['meta_keword'] = "Contact Us";
            $data['meta_description'] = "Persistence Market Research (PMR) data-driven market research reports & pertinent business insights helps many decision-makers like you. Contact to get hard-to-find estimations of niche markets";
            $data['meta_title'] = "Contact Us - USA / Canada, Europe & APAC | Persistence Market Research (PMR)";
            $data['meta_dc_desc'] = "Get the detail contact of Persistence Market Research with its address, contact number and others.";

            $data['meta'] = array('viewport','dc-description');

            $data['breadcrumb'][0]['link'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $data['breadcrumb'][0]['title'] = "Contact";

        	$detect = new Mobile_Detect();
	        if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
	          	$this->load->view("contact_mobile",$data);
	        }else{
	        	$this->load->view("contact",$data);
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

            $data['breadcrumb'][0]['link'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $data['breadcrumb'][0]['title'] = "About Us";

        	$detect = new Mobile_Detect();
	        if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
	          	$this->load->view("about_mobile",$data);
	        }else{
	        	$this->load->view("about",$data);
	        }
        }

        public function about_us_amp(){

            redirect(WEBSITE_URL."about-us.asp", "redirect", 301);

            $data['latest_reports'] = $this->pages_model->getAllReports();
            
        	$data['amphtml'] = "about-us.asp";
            $data['meta_keword'] = "About Us, PersistenceMarketResearch";
            $data['meta_description'] = "Persistence Market Research (PMR) is one of the leading market research companies offering humungous number of insightful research reports & credible business statistics";
            $data['meta_title'] = "Get Data-driven Insights & Business Statistics About Us | Persistence Market Research (PMR)";
            $data['meta_dc_desc'] = "we as persistence market research provide business insights and assists client to growth their business in the respective domain. Persistence Market research also help clients transform into a prominent business firm.";

        	$this->load->view("about_amp",$data);
        }

        public function solutions_by_clients(){

            $data['latest_reports'] = $this->pages_model->getAllReports();

        	$data['actual_canonical_url'] = WEBSITE_URL."solutions-by-clients.asp";
            $data['meta_keword'] = "Solutions For Client";
            $data['meta_description'] = "Persistence Market Research (PMR) has constellation of solutions’ expertise for clientele. We're here to strike the perfect balance between intuitions and advanced data insights";
            $data['meta_title'] = "Top-Bottom Approach to Solutions for Clients | Persistence Market Research (PMR)";
            $data['meta_dc_desc'] = "The hierarchy maintained in solution by client are like PMR for Business Development, Business Leader, Channel, Investors, Marketer, Product investors, Developer, Supply Chain Leaders and Sourcing Professionals and also for Technical Professionals, etc .";

            $data['meta'] = array('viewport','dc-description');

            $data['breadcrumb'][0]['link'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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

            $data['breadcrumb'][0]['link'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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

            $data['breadcrumb'][0]['link'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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

            $data['breadcrumb'][0]['link'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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

            $data['breadcrumb'][0]['link'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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

            $data['breadcrumb'][0]['link'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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

            $data['breadcrumb'][0]['link'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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

            $data['breadcrumb'][0]['link'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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

            $data['breadcrumb'][0]['link'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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

            $data['breadcrumb'][0]['link'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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
            $current_url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $redirect_url = $this->pages_model->getRedirections($current_url);
            if (!empty($redirect_url)) {
                redirect($redirect_url[0]['destination_url'], "location", $redirect_url[0]['error_type']);
            }
            $data['meta'] = array('viewport');
            $this->load->view("page_not_found",$data);
        }

    }
?>
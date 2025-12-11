<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
    class Home extends MY_Controller{
        
        public function __construct(){
            $this->load->model("home_model");
        }
        
        public function index(){  
        
            $data['latest_reports'] = $this->home_model->getLatestReport("N");
            $data['forthcoming_reports'] = $this->home_model->getLatestReport("M");
            $data['mediarelease'] = $this->home_model->getLatestMediarelease();
            $data['news'] = $this->home_model->getNews();

            // echo "<pre>"; print_r($data['forthcoming_reports']); exit;
            
            $data['actual_canonical_url'] = WEBSITE_URL; 

            $data['meta_keword'] = "Market Insights, Consulting, Market Research , Business Decision, Market Data, CAGR, Market Growth, Market Opinions, Next generation Expertise, Consumer Goods Market, Food Innovation Research, Future Automotive Transformations, Chemicals and Nano Materials Industries, Life Sciences/Transformational Health, Electronics and Smart Devices, Industrial Automation, IT and Telecommunication";

            $data['meta_description'] = "Avail latest market research reports & custom research analysis to maximize your business profits exponentially. Proud to help 5000+ clients across 8+ next-generation industry verticals";
            
            $data['meta_title'] = 'Market Research Reports, Industry Analysis & Business Insights | Persistence Market Research (PMR)';

            $data['meta'] = array('language','copyright','classification','document-classification','distribution','coverage','rating','abstract','author','document-type','Page-Topic','Audience','robots','viewport','report_detail','revisit-after','identifier-url','base_url'); 
            
            $detect = new Mobile_Detect();
            if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                $this->load->view("home_mobile",$data);
            }else{
                $this->load->view("home",$data);
            }
        }

        public function index_amp(){  

            redirect(WEBSITE_URL,"redirect",301);

            $data['latest_reports'] = $this->home_model->getLatestReport("N");
            $data['forthcoming_reports'] = $this->home_model->getLatestReport("M");
            $data['mediarelease'] = $this->home_model->getLatestMediarelease();
            $data['news'] = $this->home_model->getNews();
    
            $data['amphtml'] = ""; 

            $data['meta_keword'] = "Market Insights, Consulting, Market Research , Business Decision, Market Data, CAGR, Market Growth, Market Opinions, Next generation Expertise, Consumer Goods Market, Food Innovation Research, Future Automotive Transformations, Chemicals and Nano Materials Industries, Life Sciences/Transformational Health, Electronics and Smart Devices, Industrial Automation, IT and Telecommunication";

            $data['meta_description'] = "Persistence Market Research (PMR) provides strategic business intelligence reports by tracking all the leading industries. We possess expertise in analyzing niche segments and premium categories";
            
            $data['meta_title'] = 'Market Research Insights That Gives You Edge To Drive Business Strategy | PMR';

            $data['meta_keword'] = "Market Insights, Consulting, Market Research , Business Decision, Market Data, CAGR, Market Growth, Market Opinions, Next generation Expertise, Consumer Goods Market, Food Innovation Research, Future Automotive Transformations, Chemicals and Nano Materials Industries, Life Sciences/Transformational Health, Electronics and Smart Devices, Industrial Automation, IT and Telecommunication";
            
            $this->load->view("home_amp",$data);

        }
        
    }
?>
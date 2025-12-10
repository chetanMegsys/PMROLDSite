<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
    class Home extends MX_Controller{
        
        public function __construct(){
            $this->load->model("home_model");
        }
        
         public function index(){  
        
            $data['latest_reports'] = $this->home_model->getLatestReport("N");

            //Consumer Goods
            $cg_cat_id="22,62,63,64,65,66,67,68";
            $data['cg_latest_reports'] = $this->home_model->getLatestReportByCat($cg_cat_id);
            //Food and Beverages
            $fb_cat_id="23,97,98,99,100,101";
            $data['fb_latest_reports'] = $this->home_model->getLatestReportByCat($fb_cat_id);
            //Chemicals and Materials 
            $cm_cat_id="29,76,77,78,79,80,81,82";
            $data['cm_latest_reports'] = $this->home_model->getLatestReportByCat($cm_cat_id);
            //IT and Telecommunication
            $itt_cat_id="31,56,57,58,59,60,61";
            $data['itt_latest_reports'] = $this->home_model->getLatestReportByCat($itt_cat_id);
            //Semiconductor Electronics
            $se_cat_id="33,51,52,53,54,55";
            $data['se_latest_reports'] = $this->home_model->getLatestReportByCat($se_cat_id);
            //Industrial Automation
            $ia_cat_id="38,44,46,47,48,49,50,102";
            $data['ia_latest_reports'] = $this->home_model->getLatestReportByCat($ia_cat_id);
            //Healthcare
            $hc_cat_id="39,40,41,91,93,95,96";
            $data['hc_latest_reports'] = $this->home_model->getLatestReportByCat($hc_cat_id);
            //Energy & Utilities 
            $eu_cat_id="42,83,84,85,86,87,103";
            $data['eu_latest_reports'] = $this->home_model->getLatestReportByCat($eu_cat_id);
            //Packaging
            $p_cat_id="43,88,89,90";
            $data['p_latest_reports'] = $this->home_model->getLatestReportByCat($p_cat_id);
            //Automotive & Transportation
            $at_cat_id="69,24,70,71,72,73,74,75";
            $data['at_latest_reports'] = $this->home_model->getLatestReportByCat($at_cat_id);
           
            $data['forthcoming_reports'] = $this->home_model->getUpdatedReport();
            
            $data['actual_canonical_url'] = WEBSITE_URL; 

            $data['meta_keword'] = "Market Insights, Consulting, Market Research, Business Decision, Market Data, CAGR, Market Growth, Market Opinions, Next generation Expertise, Consumer Goods Market, Food Innovation Research, Future Automotive Transformations, Chemicals and Nano Materials Industries, Life Sciences/Transformational Health, Electronics and Smart Devices, Industrial Automation, IT and Telecommunication";

            $data['meta_description'] = "Persistence Market Research provides relevant and in-depth market research consulting, giving you the confidence to achieve your business goals";
            
            $data['meta_title'] = 'Persistence Market Research | In-Depth Consulting for Business Growth';

            $data['meta'] = array('language','copyright','classification','document-classification','distribution','coverage','rating','abstract','author','document-type','Page-Topic','Audience','robots','viewport','report_detail','revisit-after','identifier-url','base_url', 'index'); 
            
            $detect = new Mobile_Detect();
            if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                $this->load->view("home_mobile_new",$data);
            }else{
                $this->load->view("home_new",$data);
            }
           // log_message('debug', 'MX_Loader loading modules');
           // log_message('debug', 'Loading module: ' . $module);
           // log_message('debug', 'Loading view from: ' . APPPATH . 'modules_japanese/home/views/home_new.php');

            // $language = $this->uri->segment(1);
            // if ($language == 'ja') {
            //     // Load the Japanese view
            //     $this->load->view('../modules_japanese/home/views/home_new' ,$data); // modules_japanese/home/views/home.php
            // } else {
            //     // Load the English view (modules/home/views/home.php)
            //     $this->load->view('home_new',$data); // modules/home/views/home.php
            // }
        }

        public function indexNew(){  
        
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

         

        }

       
        
    }
?>
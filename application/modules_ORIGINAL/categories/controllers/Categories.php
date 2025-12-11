<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
    class Categories extends MY_Controller{
        
        public function __construct(){
            $this->load->model("categories_model");
        }
        
        public function index(){  

            $data = array();

        	$categories = $this->categories_model->getCategories();
            $counter = 0;
            foreach($categories as $category){
                $data['categories'][$counter]['category_id']      = $category['category_id'];
                $data['categories'][$counter]['cat_name']         = $category['cat_name'];
                $data['categories'][$counter]['seo_pagename']     = $category['seo_pagename'];
                $data['categories'][$counter]['cat_home_descr']   = $category['cat_home_descr'];

                $report_data = $this->categories_model->getReports($category['category_id']);

                $data['categories'][$counter]['rep_name']   = $report_data[0]['rep_name'];
                $data['categories'][$counter]['rep_url']   = $report_data[0]['rep_url'];

                $counter ++;
            }

            $data['actual_canonical_url'] = WEBSITE_URL."market-research-report";

            $data['meta_keword'] = "Next Generation Expertise by Persistence Market Research";

            $data['meta_description'] = "Persistence Market Research (PMR) provides you all the latest and data-driven market research insights and industry niche details on all the leading industry updates & business intelligence";

            $data['meta_title'] = 'Explore Industries Largest Market Research Reports | Persistence Market Research (PMR)';

            $data['meta'] = array('viewport');

            $data['breadcrumb'][0]['link'] = WEBSITE_URL."market-research-report";
            $data['breadcrumb'][0]['title'] = "Next-Gen Sectors";
            
            $detect = new Mobile_Detect();
            if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                $this->load->view("index_mobile",$data);
            }else{
                $this->load->view("index",$data);
            }
        }

        public function index_amp(){

            redirect(WEBSITE_URL."market-research-report", "redirect", 301);

            $data = array();

            $categories = $this->categories_model->getCategories();
            $counter = 0;
            foreach($categories as $category){
                $data['categories'][$counter]['category_id']      = $category['category_id'];
                $data['categories'][$counter]['cat_name']         = $category['cat_name'];
                $data['categories'][$counter]['seo_pagename']     = $category['seo_pagename'];
                $data['categories'][$counter]['cat_home_descr']   = $category['cat_home_descr'];

                $report_data = $this->categories_model->getReports($category['category_id']);

                $data['categories'][$counter]['rep_name']   = $report_data[0]['rep_name'];
                $data['categories'][$counter]['rep_url']   = $report_data[0]['rep_url'];

                $counter ++;
            }

            $data['amphtml'] = "market-research-report";

            $data['meta_keword'] = "Next Generation Expertise by Persistence Market Research";

            $data['meta_description'] = "Persistence Market Research Next Generation Expertise in Persistence Market Research has covered every facet of the next-gen spectrum with Consumer Goods, Food Innovation, Automotive, Chemicals and Nanomaterial’s, IT and Telecommunication, Industrial Automation under its umbrella.";

            $data['meta_title'] = 'Persistence Market Research (Persistence Market Research)  - Expertise with "next gen" in hand';
            
            $this->load->view("index_amp",$data);
        }
        
        public function old_url_redirection($url){
            switch($url){
                case 'automotive-and-transportation':
                    redirect(WEBSITE_URL."market-research-report/automotive.asp");
                    break;

                case 'consumer-goods':
                    redirect(WEBSITE_URL."market-research-report/consumer-goods.asp");
                    break;

                case 'food-and-beverages':
                    redirect(WEBSITE_URL."market-research-report/food-and-beverages.asp");
                    break;

                case 'industrial-automation':
                    redirect(WEBSITE_URL."market-research-report/industrial-automation.asp");
                    break;

                case 'electronics-and-smart-devices':
                    redirect(WEBSITE_URL."market-research-report/semiconductor-electronics.asp");
                    break;

                case 'ict':
                    redirect(WEBSITE_URL."market-research-report/it-and-telecommunications.asp");
                    break;

                case 'life-sciences-transformational-healthcare':
                    redirect(WEBSITE_URL."market-research-report/healthcare.asp");
                    break;

                case 'chemicals-and-materials':
                    redirect(WEBSITE_URL."market-research-report/chemicals-and-materials.asp");
                    break;

                default:
                    redirect(WEBSITE_URL);
                    break;
            }
        }
    }
?>
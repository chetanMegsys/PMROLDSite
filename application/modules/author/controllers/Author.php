<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
    class Author extends MY_Controller{
        
        public function __construct(){
            $this->load->model("author_model");
        }

        public function index(){
         //redirect(WEBSITE_URL.'media-releases.asp',301);
         $data['pagination'] = "";
         $page = 1;
         $num_rec_per_page = 11;
         $start_from = 0;
         $pagination_url = WEBSITE_URL . "authors";
 
         $data['total_records'] = $this->author_model->getAuthorCount();
 
         if (!empty($_POST['page']) && $_POST['page'] > 1) {
             $page = (int) $_POST['page'];
             $start_from = ($page - 1) * $num_rec_per_page;
             $previous = $page - 1;
             $next = $page + 1;
         } else {
             $previous = 0;
             $next = 2;
         }
 
         if ($data['total_records'] > $num_rec_per_page) {
             $data['pagination'] = $this->pagination_custom->paginationCustom($page, $start_from, $num_rec_per_page, $data['total_records'], $previous, $next, $pagination_url);
         }
 
         $data['author'] = $this->author_model->getAuthor($start_from, $num_rec_per_page);
        // $data['latest_reports'] = $this->author_model->getLatestReports();
         //var_dump($data['author']);
         $data['meta'] = array('viewport','dc-description','index','follow');
         $data['meta_title'] = "Avail Latest Compilation Of Market Research Author By Persistence Market Research (PMR)";
         $data['meta_description'] = "PMR's recent author on market research covers all kind of updated research insights, industry survey reports, market outlook, market overview & segmentation";
         $data['meta_keword'] = "Market Opinions, Research Report, Industry Survey, Market Overview";
 
         $data['actual_canonical_url'] = WEBSITE_URL . "author";
         $data['breadcrumb'][] = ['link' => WEBSITE_URL . "author", 'title' => "Author"];
 
         $detect = new Mobile_Detect();
         if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
             $this->load->view("index_mobile", $data);
         } else {
             $this->load->view("index", $data);
         }
        }

        public function author_details($id) {
            // Fetch author details and latest reports
            $data['get_authors'] = $this->author_model->getAuthorById($id);
           // $data['latest_reports'] = $this->author_model->getAllReports();
            $data['latest_reports'] = $this->author_model->getAllReportsByAuthorId($id);
        
            // Redirect if author is not found
            if (empty($data['get_authors'])) {
                redirect(WEBSITE_URL . "author");
            }
        
            // Handle URL redirection if necessary
            $redirect_url = $this->author_model->getRedirections(WEBSITE_URL . "author/" . $id, "author");
            if (!empty($redirect_url)) {
                redirect($redirect_url[0]['destination_url'], "auto", $redirect_url[0]['error_type']);
            }
        
            // SEO Metadata
            $data['meta'] = array('viewport','dc-description','index','follow');
            $data['actual_canonical_url'] = WEBSITE_URL . "author/" . $id . ".asp";
            $data['meta_title'] = !empty($data['get_authors']->author_experts) ? $data['get_authors']->author_name . ' - ' .$data['get_authors']->author_experts .' | Persistence Market Research (PMR)' : $data['get_authors']->author_name . ' | Persistence Market Research (PMR)';
            $data['meta_description'] = !empty($data['get_authors']->author_bio) ? $this->get_excerpt($data['get_authors']->author_bio) : $data['meta_title'];
            $data['meta_keyword'] = !empty($data['get_authors']->meta_keywords) ? $data['get_authors']->meta_keywords : $data['meta_title'];
            //var_dump($data['get_authors']->author_experts);
            // Breadcrumb Navigation
            $data['breadcrumb'][] = ['link' => WEBSITE_URL . "author.asp", 'title' => "Author"];
            $data['breadcrumb'][] = ['link' => $data['actual_canonical_url'], 'title' => ucwords(str_replace("-", " ", $id))];
        
            // Load the appropriate view based on device type
            $detect = new Mobile_Detect();
            $view = ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) ? "author_detail_mobile" : "author_detail";
            $this->load->view($view, $data);
        }
        

        public function author_details_amp($url){
           //  redirect(WEBSITE_URL.'media-releases.asp',301);

            //redirect(WEBSITE_URL."author/".$url.".asp", "redirect", 301);

            $data['get_authors'] = $this->author_model->getauthorByUrl($url);
            $data['latest_reports'] = $this->author_model->getAllReports();

            $data['amphtml'] = "author/".$url.".asp";
            $data['meta_title'] = $data['get_authors']->meta_title!='' ? $data['get_authors']->meta_title : $data['get_authors']->name;
            $data['meta_keword'] = $data['get_authors']->meta_keywords!='' ? $data['get_authors']->meta_keywords : $data['meta_title'];
            $data['meta_description'] = $data['get_authors']->meta_description!='' ? $data['get_authors']->meta_description : $data['meta_title'];
            $data['meta_dc_desc'] = $data['get_authors']->meta_dc_desc!='' ? $data['get_authors']->meta_dc_desc : $data['meta_title'];

            $this->load->view("author_detail_amp",$data);
        }

        public function recent_development_in_top_sectors(){
            $data['recent_development_in_top_sectors'] = $this->author_model->recent_development_in_top_sectors();

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

        public function get_excerpt($text, $word_limit = 25) {
            $text = strip_tags($text); // Remove HTML tags
            $words = explode(' ', $text); // Split into words
            if (count($words) > $word_limit) {
                $words = array_slice($words, 0, $word_limit);
                return implode(' ', $words) . '...';
            }
            return $text;
        }
    }
?>
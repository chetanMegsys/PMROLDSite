<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
    class Articles extends MY_Controller{
        
        public function __construct(){
            $this->load->model("articles_model");
        }

        public function index(){
        
         redirect(WEBSITE_URL.'media-releases.asp',301);
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
          

            $data['meta'] = array('viewport','dc-description','noindex','nofollow');
            $data['meta_dc_desc'] = "Global Market Research Report, Market Size, Share, Forecast, Overview, Trends, Marketing Strategy, Industry Analysis, Outlook, Competitive Landscape, Future Prospects.";
			  $data['actual_canonical_url'] = WEBSITE_URL."articles.asp";
            $data['breadcrumb'][0]['link'] = WEBSITE_URL."articles.asp";
            $data['breadcrumb'][0]['title'] = "Articles";

			
            $detect = new Mobile_Detect();
            if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                $this->load->view("index_mobile",$data);
            }else{
                $this->load->view("index",$data);
            }
        }

        public function article_details($url){
             redirect(WEBSITE_URL.'media-releases.asp',301);

            $data['get_articles'] = $this->articles_model->getArticleByUrl($url);
            $data['latest_reports'] = $this->articles_model->getAllReports();

            if(empty($data['get_articles'])){
                redirect(WEBSITE_URL."articles.asp");
            }

            $redirect_url = $this->articles_model->getRedirections(WEBSITE_URL."article/".$url,"Article");      
            if(!empty($redirect_url)){
                redirect($redirect_url[0]['destination_url'],"redirect",$redirect_url[0]['error_type']);
            }            
            if(empty($data['get_articles'])){
                $this->get404();
            }

            $data['actual_canonical_url'] = WEBSITE_URL."article/".$url.".asp";
            $data['meta_title'] = $data['get_articles']->meta_title!='' ? $data['get_articles']->meta_title : $data['get_articles']->name;
            $data['meta_keword'] = $data['get_articles']->meta_keywords!='' ? $data['get_articles']->meta_keywords : $data['meta_title'];
            $data['meta_description'] = $data['get_articles']->meta_description!='' ? $data['get_articles']->meta_description : $data['meta_title'];
            $data['meta_dc_desc'] = $data['get_articles']->meta_dc_desc!='' ? $data['get_articles']->meta_dc_desc : $data['meta_title'];

            $data['meta'] = array('viewport','dc-description','noindex','nofollow');

            $data['breadcrumb'][0]['link'] = WEBSITE_URL."articles.asp";
            $data['breadcrumb'][0]['title'] = "Articles";
            $data['breadcrumb'][1]['link'] = WEBSITE_URL."article/".$url.".asp";
            $data['breadcrumb'][1]['title'] = ucwords(str_replace("-"," ",$url));

            $detect = new Mobile_Detect();
            if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                $this->load->view("article_detail_mobile",$data);
            }else{
                $this->load->view("article_detail",$data);
            }
        }

        public function article_details_amp($url){
             redirect(WEBSITE_URL.'media-releases.asp',301);

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
    }
?>
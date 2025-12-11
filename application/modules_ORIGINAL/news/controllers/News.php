<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
    class News extends MY_Controller{
        
        public function __construct(){
            $this->load->model("news_model");
        }
        
        public function index(){

            //Below if is used for old new pagination url redirection...
            if(isset($_GET['page'])){
                redirect(WEBSITE_URL."news");
            }

        	$data['pagination'] = "";
            $page = 1;
            $num_rec_per_page = 10;
            $start_from = 0;
            $pagination_url = WEBSITE_URL."news";

            $data['total_records'] = $this->news_model->getNewsCount();

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

        	$data['allnews'] = $this->news_model->getNews($num_rec_per_page, $start_from);
            $filters = $this->news_model->getNewsMonthYear();
            $news_filter = array();
            foreach($filters as $filter){
                $news_filter[$filter['year']][] = $filter['month'];
            }
            
            $data['news_filter'] = $news_filter;
            $data['meta_keword'] = "Developed and Emerging Economies captured under 1 belt: Persistence Market Research's News Listing Page";
            $data['meta_description'] = "Get on to the latest ‘NEWS’ platform with Persistence Market Research - PMR’s updated offerings of 'News Events with Services'. Avail developed and emerging Economies' trends here";
            $data['meta_title'] = "Get Latest News Offerings About Industry Research | Persistence Market Research (PMR)";
            $data['meta_dc_desc'] = "The News section of persistence market research gets to know you the deep knowledge for the industries in today’s news.";

            $data['meta'] = array('viewport','dc-description','nofollow','noindex');

            $data['breadcrumb'][0]['link'] = WEBSITE_URL."news";
            $data['breadcrumb'][0]['title'] = "News";
            
            $detect = new Mobile_Detect();
            if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                $this->load->view("index_mobile",$data);
            }else{
                $this->load->view("index",$data);
            }
        }

        public function newsByYearMonth(){
            $year = $this->uri->segment(2);
            $month = $this->uri->segment(3);

            if($year!='' && $month!=''){
                if(!is_numeric($year) || is_numeric($month)){
                    redirect(WEBSITE_URL.'news');
                }
            }else{
                redirect(WEBSITE_URL.'news');
            }
            redirect(WEBSITE_URL.'news');
        }

        public function newsByCategory($category){
			
			$redirect_url = $this->news_model->getRedirections("https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
            if (!empty($redirect_url)) {
                redirect($redirect_url[0]['destination_url'], "location", $redirect_url[0]['error_type']);
            }
			
            $data['isStylish'] = 'N';
            $data['isHome'] = 'N';
            $data['isSatatic'] = 'Y';
            $data['pageHeading'] = 'News';
            $data['meta_title'] = 'Latest Emerging Economies and Developed World News | Persistence Market Research';
				
            $categoryData = $this->news_model->GetCategoryByURL($category);

            if($categoryData->category_id>0){
                $data['categoryData'] = $categoryData;
            }else{
                redirect(WEBSITE_URL.'news');
            }
            
            $pagination = "";
            $data['total_records'] = $this->news_model->getNewsCountByCategory($categoryData->category_id);

            $data['pagination'] = "";
            $page = 1;
            $num_rec_per_page = 10;
            $start_from = 0;
            $pagination_url = WEBSITE_URL."news";

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
            
            $data['allnews'] = $this->news_model->getNewsByCategory($start_from, $num_rec_per_page,$categoryData->category_id);
            if(!count($data['allnews'])){
                redirect(WEBSITE_URL.'news');
            }

            $data['meta'] = array('viewport','noindex','nofollow');

            $data['breadcrumb'][0]['link'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $data['breadcrumb'][0]['title'] = "News";

            $detect = new Mobile_Detect();
            if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                $this->load->view("index_mobile",$data);
            }else{
                $this->load->view("index",$data);
            }
        }
        
        public function news_detail($NewsYear,$NewsMonth,$NewsUrl){

            $date = array('january'=>1,'february'=>2,'march'=>3,'april'=>4,'may'=>5,'june'=>6,'july'=>7,'august'=>8,'september'=>9,'october'=>10,'november'=>11,'december'=>12);

            $NewsMonth = strtolower($NewsMonth);

        	$data['news_data'] = $this->news_model->getNewsByURLYearMonth($NewsUrl,$NewsYear,$date[$NewsMonth]);

            if(empty($data['news_data'])){
                redirect(WEBSITE_URL."news");
            }

            $data['latest_reports'] = $this->news_model->getLatestReports();

        	$data['actual_canonical_url'] = WEBSITE_URL."news/".$NewsYear."/".$NewsMonth."/".$NewsUrl;

            $data['meta_title'] = $data['news_data']->meta_title;
            $data['meta_keword'] = $data['news_data']->meta_keyword!=''?$data['news_data']->meta_keyword:$data['news_data']->meta_title;
            $data['meta_description'] = $data['news_data']->meta_description!=''?$data['news_data']->meta_description:$data['news_data']->meta_title;
            $data['meta_dc_desc'] = $data['news_data']->meta_title;
            $data['meta'] = array('viewport','dc-description','noindex','nofollow');

            $data['breadcrumb'][0]['link'] = WEBSITE_URL."news";
            $data['breadcrumb'][0]['title'] = "News";
            $data['breadcrumb'][1]['link'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $data['breadcrumb'][1]['title'] = ucwords(str_replace("-"," ",$NewsUrl));

            $detect = new Mobile_Detect();
            if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                $this->load->view("news_detail_mobile",$data);
            }else{
                $this->load->view("news_detail",$data);
            }
        }

        public function news_detail_amp($NewsYear,$NewsMonth,$NewsUrl){

            redirect(WEBSITE_URL."news/".$NewsYear."/".$NewsMonth."/".$NewsUrl, "redirect", 301);

            $data['news_data'] = $this->news_model->getNewsByURLYearMonth($NewsUrl,$NewsYear,date('m',strtotime($NewsMonth)));
            $data['latest_reports'] = $this->news_model->getLatestReports();

            $data['amphtml'] = "news/".$NewsYear."/".$NewsMonth."/".$NewsUrl;

            $data['meta_title'] = $data['news_data']->meta_title;
            $data['meta_keword'] = $data['news_data']->meta_keyword!=''?$data['news_data']->meta_keyword:$data['news_data']->meta_title;
            $data['meta_description'] = $data['news_data']->meta_description!=''?$data['news_data']->meta_description:$data['news_data']->meta_title;
            $data['meta_dc_desc'] = $data['news_data']->meta_title;

            $data['meta'] = array('viewport');

            $this->load->view("news_detail_amp",$data);
        }

        public function newsroom(){
			redirect(WEBSITE_URL.'media-releases.asp','location',301); //12052022
            $data['get_news'] = $this->news_model->getNews(1,0);
            $data['get_articles'] = $this->news_model->getArticles();
            $data['get_mediarelease'] = $this->news_model->getMediaRelease();
            $data['get_pmrinnews'] = $this->news_model->getPMRInNews();

            $data['meta_keword'] = "Newsroom Persistence Market Research";
            $data['meta_description'] = "Interested in latest happenings in research market? Your search ends here, look through Persistence Market Research - PMR's newsroom and get latest insights";
            $data['meta_title'] = "Get Most Happening Market Research Newsroom Bites | Persistence Market Research (PMR)";
            $data['meta_dc_desc'] = "The Client can gather all information in one page i.e. Newsroom. The newsroom include the Media Release, News, Article and Persistence Market Research in the news.";

            $data['meta'] = array('viewport','dc-description');
			$data['actual_canonical_url'] = WEBSITE_URL."newsroom.asp";
            $data['breadcrumb'][0]['link'] = WEBSITE_URL."newsroom.asp";
            $data['breadcrumb'][0]['title'] = "Newsroom";

            $detect = new Mobile_Detect();
            if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                $this->load->view("newsroom_mobile",$data);
            }else{
                $this->load->view("newsroom",$data);
            }
        }

        public function pmr_in_the_news(){
				redirect(WEBSITE_URL.'media-releases.asp','location',301);
            $pagination = "";
            $data['total_records'] = $this->news_model->get_pmr_in_the_news_count();

            $data['pagination'] = "";
            $page = 1;
            $num_rec_per_page = 10;
            $start_from = 0;
            $pagination_url = WEBSITE_URL."news";

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

            $data['pmr_in_the'] = $this->news_model->get_pmr_in_the_news($start_from, $num_rec_per_page);

            $data['meta_keword'] = "Persistence Market Research In The News";
            $data['meta_description'] = "Interested in latest news in research industry market? Your search ends here, look through Persistence Market Research - PMR's latest news and get current insights";
            $data['meta_title'] = "All The latest News & Industry Insights | Persistence Market Research (PMR)";
            $data['meta_dc_desc'] = "The highly authorized sites are accepting the articles of persistence market research, due its relevancy and the uniqueness.";

            $data['meta'] = array('viewport','dc-description');

            $data['breadcrumb'][0]['link'] = WEBSITE_URL."pmr-in-the-news.asp";
            $data['breadcrumb'][0]['title'] = "Persistence Market Research In The News";

            $detect = new Mobile_Detect();
            if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                $this->load->view("pmr_in_the_news_mobile",$data);
            }else{
                $this->load->view("pmr_in_the_news",$data);
            }
        }
    }
?>
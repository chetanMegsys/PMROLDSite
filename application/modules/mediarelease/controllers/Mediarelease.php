<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
    class Mediarelease extends MY_Controller{
        
        public function __construct(){
            $this->load->model("mediarelease_model");
        }

        public function index(){
        	$data['pagination'] = "";
            $page = 1;
            $num_rec_per_page = 11;
            $start_from = 0;
            $pagination_url = WEBSITE_URL."press-releases";

            $data['total_records'] = $this->mediarelease_model->getMediareleaseCount();

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

        	$data['media_releases'] = $this->mediarelease_model->getMediaRelease($num_rec_per_page, $start_from);
        	$data['lastest_reports'] = $this->mediarelease_model->getLatestReports();
            
            $data['meta_keword'] = "Press Releases, News and Media, PR";
            $data['meta_description'] = "Discover the latest industry trends and insights with Persistence Market Research's press releases, keeping you informed on key developments.";
            $data['meta_title'] = "Press Releases | Industry Insights – Persistence Market Research";

            $data['meta'] = array('viewport','dc-description','index','follow');
            $data['meta_dc_desc'] = "Discover the latest industry trends and insights with Persistence Market Research's press releases, keeping you informed on key developments.";

            $data['breadcrumb'][0]['link'] = WEBSITE_URL."press-releases";
            $data['breadcrumb'][0]['title'] = "Press Release";

            $data['actual_canonical_url'] = WEBSITE_URL."press-releases";

            $detect = new Mobile_Detect();
            if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                $this->load->view("index_mobile",$data);
            }else{
                $this->load->view("index",$data);
            }
            
        }

        public function mediarelease_details($url){

        	$data['get_mediarelease'] = $this->mediarelease_model->getMediareleaseByUrl($url);           

            if(empty($data['get_mediarelease'])){
                redirect(WEBSITE_URL."press-releases");
            }

            $redirect_url = $this->mediarelease_model->getRedirections(WEBSITE_URL."press-release/".$url,"Press Release");
      
            if(!empty($redirect_url)){
                redirect($redirect_url[0]['destination_url'],"redirect",$redirect_url[0]['error_type']);
            }
            
            if(empty($data['get_mediarelease'])){
                $this->get404();
            }

        	$data['actual_canonical_url'] = WEBSITE_URL."press-release/".$url.".asp";
            $data['meta_title'] = $data['get_mediarelease']->meta_title != '' ? $data['get_mediarelease']->meta_title : ucwords(str_replace("-"," ",$data['get_mediarelease']->url));
            $data['meta_keword'] = $data['get_mediarelease']->meta_keywords != '' ? $data['get_mediarelease']->meta_keywords : $data['get_mediarelease']->meta_title;
            $data['meta_description'] = $data['get_mediarelease']->meta_description != '' ? $data['get_mediarelease']->meta_description : $data['get_mediarelease']->meta_title;
            $data['meta_dc_desc'] = $data['get_mediarelease']->meta_dc_desc != '' ? $data['get_mediarelease']->meta_dc_desc : $data['get_mediarelease']->meta_description;

            $data['meta'] = array('viewport','dc-description','index','follow');

            $data['breadcrumb'][0]['link'] = WEBSITE_URL."press-releases";
            $data['breadcrumb'][0]['title'] = "Press Release";
            $data['breadcrumb'][1]['link'] = WEBSITE_URL."press-release/".$url.".asp";
            $data['breadcrumb'][1]['title'] = ucwords(str_replace("-"," ",$url));

            $data['latest_reports'] = ""; // $this->mediarelease_model->getAllReports();

            $detect = new Mobile_Detect();
            if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                $this->load->view("mediarelease_detail_mobile",$data);
            }else{
                $this->load->view("mediarelease_detail",$data);
            }
        }

        public function mediarelease_details_amp($url){

            redirect(WEBSITE_URL."press-release/".$url.".asp", "redirect", 301);

            $data['get_mediarelease'] = $this->mediarelease_model->getMediareleaseByUrl($url);
            $data['latest_reports'] = $this->mediarelease_model->getAllReports();

            $data['amphtml'] = "press-release/".$url.".asp";
            $data['meta_title'] = $data['get_mediarelease']->meta_title != '' ? $data['get_mediarelease']->meta_title : ucwords(str_replace("-"," ",$data['get_mediarelease']->url));
            $data['meta_keword'] = $data['get_mediarelease']->meta_keywords != '' ? $data['get_mediarelease']->meta_keywords : $data['get_mediarelease']->meta_title;
            $data['meta_description'] = $data['get_mediarelease']->meta_description != '' ? $data['get_mediarelease']->meta_description : $data['get_mediarelease']->meta_title;
            $data['meta_dc_desc'] = $data['get_mediarelease']->meta_dc_desc != '' ? $data['get_mediarelease']->meta_dc_desc : $data['get_mediarelease']->meta_description;

            $this->load->view("mediarelease_detail_amp",$data);
        }
        public function get404(){
            $this->output->set_status_header('404');
            redirect(WEBSITE_URL . 'pages/page_not_fount');
        }

    }
?>
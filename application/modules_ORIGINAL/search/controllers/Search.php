<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Search extends MY_Controller{

	public function __construct()
	{
		$this->load->model('search_model');
	}

	public function index(){

		if(isset($_GET['query'])){

			$search_text = $_GET['query'];

			$data['reports'] = $this->search_model->getReports($search_text,98);

			$data['total_records'] = count($data['reports']);

            $data['meta'] = array('viewport','noindex');
    
            $detect = new Mobile_Detect();
            if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
                $this->load->view("search_list_mobile",$data);
            }else{
                $this->load->view("search_list",$data);
            }

		}else{
			redirect(WEBSITE_URL);
		}
	}

	public function elastic_search(){
        if(isset($_GET['keyword'])){

            $keyword = $_GET['keyword'];
            $result = $this->search_model->getRecords($keyword);
            echo json_encode($result);

        }
    }

}
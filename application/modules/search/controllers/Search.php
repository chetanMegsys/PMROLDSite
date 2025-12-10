<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Search extends MY_Controller{

	public function __construct()
	{
		$this->load->model('search_model');
	}

	// public function index(){

	// 	if(isset($_GET['query'])){

	// 		$search_text = $_GET['query'];

	// 		$data['reports'] = $this->search_model->getReports($search_text,98);

	// 		$data['total_records'] = count($data['reports']);

    //         $data['meta'] = array('viewport','noindex');
    // 		$data['meta_description'] = "Search your reports by entering keyword on Persistence Market Research";
    //         $data['meta_title'] = "Search Report Keyword | Persistence Market Research";
    //         $detect = new Mobile_Detect();
    //         if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
    //             $this->load->view("search_list_mobile",$data);
    //         }else{
    //             $this->load->view("search_list",$data);
    //         }

	// 	}else{
	// 		redirect(WEBSITE_URL);
	// 	}
	// }

	public function index() {
		// Use CI Input class for security and encoding support
		$search_text = $this->input->get('query', TRUE); // TRUE = XSS filtering

		if ($search_text) {
			// Validate UTF-8
			if (!mb_check_encoding($search_text, 'UTF-8')) {
				show_error('Invalid UTF-8 input');
			}

			$search_text = trim($search_text); // Remove surrounding spaces
			$data['actual_canonical_url'] = WEBSITE_URL."search";
			// Fetch reports from search_model
			$data['reports'] = $this->search_model->getReports($search_text, 98);
			$data['total_records'] = count($data['reports']);
			//var_dump($data['reports']); exit();
			// Meta information
			$data['meta'] = ['viewport', 'noindex', 'search'];
			$data['meta_description'] = "Search your reports by entering keyword on Persistence Market Research";
			$data['meta_title'] = "Search Report Keyword | Persistence Market Research";

			// Mobile detection and view rendering
			$detect = new Mobile_Detect();
			if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
				$this->load->view("search_list_mobile", $data);
			} else {
				$this->load->view("search_list", $data);
			}

		} else {
			// No query? Redirect to homepage
			//redirect(WEBSITE_URL);
			redirect(WEBSITE_URL,'location',301);
		}
	}


	// public function elastic_search(){
    //     if(isset($_GET['keyword'])){

    //         $keyword = $_GET['keyword'];
    //         $result = $this->search_model->getRecords($keyword);
    //         echo json_encode($result);

    //     }
    // }

	public function elastic_search() {
		$keyword = $this->input->get('keyword', TRUE);

		if ($keyword && mb_check_encoding($keyword, 'UTF-8')) {
			$result = $this->search_model->getRecords($keyword);
			 echo json_encode($result);
			// Always set content type header 	for JSON
			// $this->output
			// 	->set_content_type('application/json')
			// 	->set_output(json_encode($result, JSON_UNESCAPED_UNICODE));
		} else {
			// Return empty or error
			$this->output
				->set_content_type('application/json')
				->set_output(json_encode(['error' => 'Invalid or missing keyword']));
		}
	}


}
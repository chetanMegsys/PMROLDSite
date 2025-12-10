<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Apis extends MY_Controller{
	
	public function __construct(){
		$this->load->model("apis_model");
	}

	public function export_pmr_reports($fromdate='', $todate=''){

		header('Content-Type: application/json');

		if($fromdate==''){
			$fromdate = date('Y-m-d 00:00:00',strtotime("yesterday"));
		}

		if($todate==''){
			$todate = date('Y-m-d 23:59:59',strtotime("yesterday"));
		}

		$headers=array();
		foreach (getallheaders() as $name => $value) {
		    $headers[$name] = $value;
		}

		$getReports = array();
		if(isset($headers['PMR-API-KEY']) && $headers['PMR-API-KEY']=='HihsTRs@198kl'){
			$getReports = $this->apis_model->export_pmr_reports($fromdate, $todate);
		}

		if(!empty($getReports)){
			$status = true;
		}
		else{
			$status = false;
		}

		echo json_encode(array('status' => $status, 'result' => $getReports));
		
	}

}
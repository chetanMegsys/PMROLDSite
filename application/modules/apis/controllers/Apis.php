<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Apis extends MY_Controller{
	
	public function __construct(){
		$this->load->model("apis_model");
	}

	public function export_pmr_reports($fromdate='', $todate=''){

		header('Content-Type: application/json');

		if($fromdate==''){
			//$fromdate = date('2023-01-01 00:00:00');
			$fromdate = date('2023-06-01 00:00:00');
			// /,strtotime("yesterday")
		}

		if($todate==''){
			//$todate = date('Y-m-d 23:59:59');
			$todate = date('2023-06-30 23:59:59');
			//$todate = date('Y-m-d 23:59:59',strtotime("yesterday"));
		}

		$headers=array();
		foreach (getallheaders() as $name => $value) {
		    $headers[$name] = $value;
		}

		$getReports = array();
		if(isset($headers['Pmr-Api-Key']) && $headers['Pmr-Api-Key'] !='' &&  $headers['Pmr-Api-Key']=='Mn-5R77!nvA4P96'){
			$getReports = $this->apis_model->export_pmr_reports($fromdate, $todate);
			//echo $this->db->last_query();
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
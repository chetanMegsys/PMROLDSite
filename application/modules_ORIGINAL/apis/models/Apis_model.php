<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Apis_Model extends CI_Model{

    	public function export_pmr_reports($fromdate, $todate){
    		$query = "SELECT added_date as created_at, update_date as updated_at, rep_unique_id, rep_id, rep_name, rep_url, rep_sdesc, meta_title, rep_pub_date, rep_price_sul, rep_price_el as rep_price_eul, rep_price_cul as rep_price_mul, rep_pages, 'P' rep_type, cat_id as rep_cat_id, rep_status, rep_tab_content, rep_list_table, rep_list_chart FROM reports WHERE rep_status='Y' AND is_custom='N' AND rep_type='N' AND ((added_date>='".$fromdate."' AND added_date<='".$todate."') OR (update_date>='".$fromdate."' AND update_date<='".$todate."')) ORDER BY rep_id ASC";

    		//AND ((added_date>='".$fromdate."' AND added_date<='".$todate."') OR (update_date>='".$fromdate."' AND update_date<='".$todate."'))

    		return $this->db->query($query)->result();
    	}

	}
?>
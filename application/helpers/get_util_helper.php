<?php
	if(!defined('BASEPATH')) exit('No direct script access allowed');

	function get_multiple_reports($id){
		$CI = & get_instance();
		return $CI->db->select("reports.rep_id, reports.rep_name, reports.rep_keyword, reports.rep_pub_date, reports.meta_desc, reports.rep_url, category.cat_name")->from("recent_development_in_top_sectors_reports rdts")->join('reports',"rdts.rep_id=reports.rep_id")->join("category","category.category_id=reports.cat_id")->where("rdts.recent_id",$id)->get()->result_array();
	}
?>
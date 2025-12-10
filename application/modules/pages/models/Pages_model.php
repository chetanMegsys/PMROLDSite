<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
    class Pages_model extends CI_Model{
        
        public function getLatestReports($limit=5,$type='N'){
        	$this->db->select("rep_id, rep_name, rep_url")->from("reports")->where("status","A")->where("rep_status","Y")->where("is_custom","N");
        	if($type != ''){
        		$this->db->where("rep_type",$type);
        	}
        	return $this->db->order_by("update_date","DESC")->limit($limit,0)->get()->result_array();
        }

        public function getAllReports(){
            return $this->db->select("rep_id, rep_name, rep_url")->from("reports")->where("rep_type","N")->where("status","A")->where("rep_status","Y")->where("is_custom","N")->order_by("update_date","DESC")->limit(3,0)->get()->result_array();
        }

        public function getRedirections($url){
            return $this->db->select("destination_url,error_type")->from("pageredirections")->where("old_url",$url)->where("status",'Y')->get()->result_array();
        }

    }
?>
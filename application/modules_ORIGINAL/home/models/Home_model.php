<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Home_Model extends CI_Model{
        
        public function getLatestReport($type){
        	$this->db->select("rep_id,rep_breadcrumb,rep_name,rep_url,cat_id,rep_keyword")->from("reports")->where("rep_type",$type)->where('rep_status','Y')->where("status","A");
        	//$field = "rep_id";
        	//if($type == "N"){
        		//$field = "rep_pub_date";
        		$field = "update_date";
        	//}
        	return $this->db->order_by($field,"desc")->limit(3,0)->get()->result_array();
        }

        public function getLatestMediarelease(){
        	$this->db->select("id, name, url, short_desc, upload_date, category_id");
	        $this->db->from("mediarelease");
	        $this->db->where("status", 'Y');
			$this->db->order_by("id","DESC");
	        $this->db->order_by('modify_date', 'DESC');
	        $this->db->limit(3,0);
	        $query = $this->db->get();
	        return $query->result_array();
        }

        public function getNews() {
	        $this->db->select("id, news_title, news_url, publish_date, short_description");
	        $this->db->from("news");
	        $this->db->where("status", 'Y');
	        $this->db->order_by('publish_date','DESC');
	        $this->db->limit(1,0);
	        $query = $this->db->get();
	        return $query->result_array();
	    }
        
    }
?>
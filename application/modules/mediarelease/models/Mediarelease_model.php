<?php

class Mediarelease_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getMediareleaseCount() {
        $this->db->where("status", 'Y');
        $this->db->from("mediarelease");
        $count = $this->db->count_all_results();
        return $count;
    }
    
    public function getMediaRelease($start_from,$num_rec_per_page) {
        $this->db->select("id, name, url,short_desc, UNIX_TIMESTAMP(`modify_date`) as creation,category_id");
        $this->db->from("mediarelease");
        $this->db->where("status", 'Y');
		$this->db->order_by("id","DESC");
        $this->db->order_by('modify_date', 'DESC');
        $this->db->limit($start_from, $num_rec_per_page);
        $query = $this->db->get();

        return $query->result_array();
    }

    public function getMediareleaseByUrl($url) {
        $this->db->select("mediarelease.id, mediarelease.name, UNIX_TIMESTAMP(mediarelease.modify_date) as creation, mediarelease.url, mediarelease.full_desc,   mediarelease.category_id, mediarelease.meta_title, mediarelease.meta_keywords, mediarelease.meta_description, mediarelease.meta_dc_desc, reports.rep_id, reports.rep_name, reports.rep_url");
        $this->db->from("mediarelease");
        $this->db->join("reports","reports.rep_id=mediarelease.rep_id","left");
        $this->db->where("mediarelease.status", 'Y');
        $this->db->where('mediarelease.url', $url);
        $query = $this->db->get();

        return $query->row();
    }

    public function getLatestReports(){
        return $this->db->select("rep_id, rep_name, rep_url")->from("reports")->where("rep_status","Y")->where("status","A")->where("rep_type","N")->where("is_custom","N")->order_by("update_date","DESC")->limit(5,0)->get()->result_array();
    }

    public function getAllReports(){
        return $this->db->select("rep_id, rep_name, rep_url")->from("reports")->where("rep_status","Y")->where("status","A")->where("is_custom","N")->order_by("update_date","DESC")->limit(5,0)->get()->result_array();
    }

    public function getRedirections($url,$type){
        return $this->db->select("destination_url,error_type")->from("pageredirections")->where("old_url",$url)->where("select_module",$type)->where("status",'Y')->get()->result_array();
    }

}

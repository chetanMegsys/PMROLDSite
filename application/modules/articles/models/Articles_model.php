<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Articles_Model extends CI_Model{

    	public function getArticlesCount() {
	        $this->db->where("status", 'Y');
	        $this->db->from("articles");
	        $count = $this->db->count_all_results();
	        return $count;
	    }
	    
	    public function getArticles($start_from,$num_rec_per_page) {
	        $this->db->select("id, name, url,short_desc,UNIX_TIMESTAMP(`modify_date`) as creation,category_id");
	        $this->db->from("articles");
	        $this->db->where("status", 'Y');
	        $this->db->order_by('modify_date', 'DESC');
	        $this->db->limit($start_from, $num_rec_per_page);
	        $query = $this->db->get();

	        return $query->result_array();
	    }

	    public function getArticlesByUrl($url) {
	        $this->db->select("articles.id, articles.name, articles.url, articles.full_desc, articles.creation, articles.category_id, reports.rep_id, reports.rep_name, reports.rep_url");
	        $this->db->from("articles");
	        $this->db->join("reports","reports.rep_id=articles.rep_id");
	        $this->db->where("articles.status", 'Y');
	        $this->db->where('articles.url', $url);
	        $query = $this->db->get();

	        return $query->row();
	    }

	    public function getLatestReports(){
	        return $this->db->select("rep_id, rep_name, rep_url")->from("reports")->where("rep_status","Y")->where("status","A")->where("rep_type","N")->where("is_custom","N")->order_by("update_date","DESC")->limit(5,0)->get()->result_array();
	    }

	    public function getArticleByUrl($url){
		    $this->db->select("articles.id, articles.name, UNIX_TIMESTAMP(`modify_date`) as creation, articles.url, articles.full_desc,   articles.category_id, reports.rep_id, reports.rep_url, reports.rep_name, articles.meta_title, articles.meta_keywords, articles.meta_description, articles.meta_dc_desc");
	        $this->db->from("articles");
	        $this->db->join("reports","reports.rep_id=articles.rep_id","left");
	        $this->db->where("articles.status", 'Y');
	        $this->db->where('articles.url', $url);
	        $query = $this->db->get();

	        return $query->row();
	    }

	    public function recent_development_in_top_sectors(){
	    	return $this->db->select("rdits.id,rdits.heading,rdits.image")->from("recent_development_in_top_sectors rdits")->where("rdits.status",'Y')->get()->result();
	    }

	    public function getAllReports(){
	        return $this->db->select("rep_id, rep_name, rep_url")->from("reports")->where("rep_status","Y")->where("status","A")->where("is_custom","N")->order_by("update_date","DESC")->limit(5,0)->get()->result_array();
	    }
		public function getRedirections($url,$type){
			return $this->db->select("destination_url,error_type")->from("pageredirections")->where("old_url",$url)->where("select_module",$type)->where("status",'Y')->get()->result_array();
		}
	}
?>
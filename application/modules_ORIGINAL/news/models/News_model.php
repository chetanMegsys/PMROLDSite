<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class News_Model extends CI_Model{
        
        public function getNews($num_rec_per_page, $start_from){
			return $this->db->select("id,news_title,news_url,publish_date,short_description")->from("news")->where("status", 'Y')->order_by('publish_date','DESC')->limit($num_rec_per_page, $start_from)->get()->result_array();
        }
        
        public function getNewsCount(){
        	return $this->db->select("id")->from("news")->where("status", 'Y')->get()->num_rows();
        }

        public function getNewsByURLYearMonth($NewsUrl,$NewsYear,$NewsMonth){
        	$this->db->select("news.news_title,news.publish_date,news.meta_title,news.meta_keyword,news.meta_description,news.short_description,news.top_description,news.middle_description,news.bottom_description,reports.rep_name,reports.rep_id,category.cat_name,category.seo_pagename,authors.author_name");
	        $this->db->from("news");
            $this->db->join("reports","reports.rep_id=news.report_id","left");
            $this->db->join("category","reports.cat_id=category.category_id","left");
            $this->db->join("authors","authors.author_id=news.author_id","left");
	        $this->db->where("news.status", 'Y');
	        $this->db->where('news.news_url', $NewsUrl);
	        $this->db->where('month(news.publish_date)', $NewsMonth);
	        $this->db->where('year(news.publish_date)', $NewsYear);
	        $query = $this->db->get();
            
	        return $query->row();
        }

        public function getNewsByYearMonth($start_from,$num_rec_per_page,$year,$month) {
            $this->db->select("id,news_title,news_url,publish_date,short_description");
            $this->db->from("news");
            $this->db->where("status", 'Y');
            $this->db->where('month(publish_date)', date($month));
            $this->db->where('year(publish_date)', date($year));
            $this->db->order_by('publish_date','DESC');
            $this->db->limit($num_rec_per_page, $start_from);
            $query = $this->db->get();
        
            return $query->result_array();
        }

        public function getNewsCountByYearMonth($year,$month) {
            $this->db->select("publish_date");
            $this->db->where("status", 'Y');
            $this->db->from("news");
            $this->db->where('month(publish_date)', date($month));
            $this->db->where('year(publish_date)', date($year));
            $count = $this->db->count_all_results();
            return $count;
        }

        public function getLatestReports(){ 
            return $this->db->select("rep_id, rep_name, rep_url")->from("reports")->where("rep_status","Y")->where("status","A")->where("is_custom","N")->order_by("rep_id","DESC")->limit(5,0)->get()->result_array();
        }

        public function getMediaRelease(){
            return $this->db->select("id,name,url,upload_date,short_desc")->from("mediarelease")->where("status", 'Y')->order_by('upload_date', 'DESC')->limit(1,0)->get()->result_array();
        }

        public function getArticles(){
            return $this->db->select("id,name,url,upload_date,short_desc")->from("articles")->where("status", 'Y')->order_by('upload_date', 'DESC')->limit(1,0)->get()->result_array();
        }

        public function getPMRInNews(){
            return $this->db->select("id,title,link,pub_date")->from("pmr_in_news")->where("status", 'Y')->order_by('pub_date', 'DESC')->limit(1,0)->get()->result_array();
        }

        public function GetCategoryByURL($category_url) {
            $this->db->select("category_id");
            $this->db->from("category");
            $this->db->where('seo_pagename', $category_url);
            $this->db->where("cat_status", 'Y');
            $query = $this->db->get();
            return $query->row();
        }

        public function getNewsCountByCategory($category_id) {
            $this->db->select("id");
            $this->db->where("status", 'Y');
            $this->db->from("news");
            $this->db->where('category_id', $category_id);
            $count = $this->db->count_all_results();
            return $count;
        }

        public function getNewsByCategory($start_from,$num_rec_per_page,$category_id) {
            $this->db->select("*");
            $this->db->from("news");
            $this->db->where("status", 'Y');
            $this->db->where('category_id', $category_id);
            $this->db->order_by('publish_date','DESC');
            $this->db->limit($num_rec_per_page, $start_from);
            $query = $this->db->get();
            return $query->result();
        }

        public function get_pmr_in_the_news($start_from, $num_rec_per_page){
            return $this->db->select("id,title,link")->from("pmr_in_news")->where("status","Y")->order_by("pub_date","desc")->limit($num_rec_per_page, $start_from)->get()->result_array();
        }

        public function get_pmr_in_the_news_count(){
            return $this->db->select("id")->from("pmr_in_news")->where("status","Y")->order_by("pub_date","desc")->count_all_results();
        }

        public function getNewsMonthYear(){
            return $this->db->select("MONTH(publish_date) as month, YEAR(publish_date) as year")->from("news")->where("status", 'Y')->order_by('publish_date','DESC')->group_by("year")->group_by("month")->get()->result_array();
        }
		
		public function getRedirections($url,$type="News"){
			$this->db->select("destination_url,error_type")->from("pageredirections")->where("old_url",$url);
            return $this->db->where("select_module",$type)->where("status",'Y')->get()->result_array();
		}

    }
?>

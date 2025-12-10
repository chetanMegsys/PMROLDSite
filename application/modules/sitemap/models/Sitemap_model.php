<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
    class Sitemap_Model extends CI_Model{

    	public function getcategoryList() {
	        $category_id = array();
	        $this->db->select('category.category_id,category.cat_name,category.seo_pagename,MAX(added_date) as added_date');
	        $this->db->from('category');
	        $this->db->join('reports',"reports.cat_id=category.category_id");
	        $this->db->where('category.cat_status', 'Y');
	        $this->db->order_by('category.cat_name', 'ASC');
	        $this->db->group_by('category.seo_pagename');
	        $query = $this->db->get();

	        return $query->result_array();
	    }

	    public function getpressreleaseList() {
	        $this->db->select('name,url,category_id,upload_date');
	        $this->db->from('mediarelease');
	        $this->db->where('type', 'N');
	        $this->db->where('status', 'Y');
	        $this->db->order_by('id', 'DESC');
	        $this->db->group_by('url');
	        $query = $this->db->get();
	        
	        return $query->result_array();
	    }

	    public function getarticleList() {
	        $this->db->select('name,url,category_id,upload_date');
	        $this->db->from('articles');
	        $this->db->where('type', 'A');
	        $this->db->where('status', 'Y');
	        $this->db->order_by('id', 'DESC');
	        $this->db->group_by('url');
	        $query = $this->db->get();
	        
	        return $query->result_array();
	    }

	    public function getCategoryDateYear() {

			$this->db->select("max(update_date) as modifed,cat_id");
			$this->db->from("reports");
			$this->db->where("status", 'A');
			$this->db->group_by('cat_id');
			$query = $this->db->get();

			$arry= array();
			if($query->num_rows()){
				foreach( $query->result() as $row){
					$arry[$row->cat_id] = $row->modifed;
				}
				return $arry;
			}else{ 
				return false; 
			}
			
		}

		public function getReports()
		{
			$this->db->select('rep_url,update_date,rep_type,added_date,rep_name,meta_title,rep_pub_date');
			$this->db->from('reports');
			$this->db->where('is_index','I');
			$this->db->where('status','A');
			$this->db->where('rep_status','Y');
			$this->db->where('is_custom','N'); 
			$this->db->order_by("update_date","desc");
			$query = $this->db->get();
			return $query->result();
		}

		public function getPublishedReports()
		{
			$this->db->select('rep_url,update_date,rep_type,added_date,rep_name,meta_title,rep_pub_date');
			$this->db->from('reports');
			$this->db->where('is_index','I');
			$this->db->where('status','A');
			$this->db->where('rep_status','Y');
			$this->db->where('rep_type','N');
			$this->db->where('is_custom','N'); 
			$this->db->order_by("update_date","desc");
			$query = $this->db->get();
			return $query->result();
		}

		public function getUpcomingReports()
		{
			$this->db->select('rep_url,update_date,rep_type,added_date,rep_name,meta_title,rep_pub_date');
			$this->db->from('reports');
			$this->db->where('is_index','I');
			$this->db->where('status','A');
			$this->db->where('rep_status','Y');
			$this->db->where('rep_type','M');
			$this->db->where('is_custom','N'); 
			$this->db->order_by("update_date","desc");
			$query = $this->db->get();
			return $query->result();
		}

		public function getNoindexReports(){
			$this->db->select('rep_url,update_date,added_date,rep_name,meta_title,rep_pub_date');
			$this->db->from('reports');
			$this->db->where_in('is_index',['NI','NINF']);
			$this->db->where('status','A');
			$this->db->where('rep_status','Y');
			$this->db->where('is_custom','N'); 
			$this->db->order_by("update_date","desc");
			$query = $this->db->get();
			return $query->result();
		}

		public function getFeedReports()
		{
			$this->db->select('rep_url,update_date,added_date,rep_name,rep_keyword,meta_title,rep_pub_date');
			$this->db->from('reports');			
			$this->db->where('is_custom','N'); 
			$this->db->where('rep_type','N'); 
			$this->db->where('rep_status','Y');
			$this->db->where('status','A');
			$this->db->order_by("rep_id","desc");
			 
			$query = $this->db->get();
			return $query->result();
		}

		public function getMediaRelease(){
			$this->db->select('url,modify_date');
			$this->db->from('mediarelease');
			$this->db->where('status','Y');
			$this->db->order_by("id","DESC");
			$this->db->order_by("modify_date","DESC");
			$query = $this->db->get();
			return $query->result();
		}

		public function getCategories(){
			$this->db->select('category_id, seo_pagename,date_modified');
			$this->db->from('category');
			$this->db->where('cat_status','Y');
			$this->db->order_by("category_id","DESC");
			$this->db->order_by("date_modified","DESC");
			$query = $this->db->get();
			return $query->result();
		}

		public function getNews(){
			$this->db->select('news_url,publish_date');
			$this->db->from('news');
			$this->db->where('status','Y');
			$this->db->order_by("id","desc");
			$query = $this->db->get();
			return $query->result();
		}

		public function getArticles(){
			$this->db->select('url,modify_date');
			$this->db->from('articles');
			$this->db->where('status','Y');
			$this->db->order_by("modify_date","desc");
			$query = $this->db->get();
			return $query->result();
		}

		public function getLatestReportDate(){
			$this->db->select('MAX(update_date) as added_date');
			$this->db->from('reports');
			$this->db->where('rep_status','Y');
			$this->db->where('is_custom','N');
			$query = $this->db->get();
			return $query->result_array();
		}

    }
?>
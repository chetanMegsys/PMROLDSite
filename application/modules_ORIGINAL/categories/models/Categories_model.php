<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Categories_Model extends CI_Model{
        
        public function getCategories(){
        	return $this->db->select("category_id,cat_name,seo_pagename,cat_home_descr")->from("category")->where("cat_status",'Y')->get()->result_array();
        }
        
        public function getReports($cat_id){
        	return $this->db->select("rep_name,rep_url")->from("reports")->where("cat_id",$cat_id)->where("is_custom",'N')->where("status",'A')->where("rep_status",'Y')->order_by("update_date","DESC")->limit(1,0)->get()->result_array();
        }
    }
?>
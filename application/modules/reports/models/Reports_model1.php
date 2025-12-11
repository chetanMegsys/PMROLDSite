<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
    class Reports_Model extends CI_Model{
        
        public function getReports($num_rec_per_page, $start_from, $filter){
        	$this->db->select("rep_id,rep_name,rep_keyword,rep_type,rep_breadcrumb,rep_url,update_date as rep_pub_date,rep_pages,is_index")->from("reports");

        	if(isset($filter['cat_id']) && $filter['cat_id'] != ""){
                $this->db->where_in("cat_id",explode(",",$filter['cat_id']));
        	}

            if(isset($filter['rep_pub_date']) && $filter['rep_pub_date'] != ""){
               // $this->db->where("YEAR(rep_pub_date)",$filter['rep_pub_date']);
                $this->db->where_in("YEAR(update_date)",explode(",",$filter['rep_pub_date']));
            }

              if(isset($filter['reportType']) && $filter['reportType'] != ""){
                 $this->db->where("rep_type",$filter['reportType']);
            }

             
                $field = 'update_date';
            

        	return $this->db->where("status","A")->where("rep_status",'Y')->where("is_index",'I')->where("is_custom",'N')->order_by($field,"desc")->limit($num_rec_per_page, $start_from)->get()->result_array();
        }

        public function getReportCount($filter){
        	$this->db->select("rep_id")->from("reports");

        	if(isset($filter['cat_id']) && $filter['cat_id'] != ""){
                $this->db->where_in("cat_id",explode(",",$filter['cat_id']));
            }

            if(isset($filter['rep_pub_date']) && $filter['rep_pub_date'] != ""){
                $this->db->where_in("YEAR(update_date)",explode(",",$filter['rep_pub_date']));
            }

            if(isset($filter['reportType']) && $filter['reportType'] != ""){
                $this->db->where("rep_type",$filter['reportType']);
            }

             

        	return $this->db->where("status","A")->where("is_index",'I')->where("rep_status",'Y')->where("is_custom",'N')->get()->num_rows();
        }

        public function getCategories(){
            return $this->db->select("category_id, cat_name")->from("category")->where("cat_status","Y")->get()->result_array();
        }
        
        public function getCategoryReportCount($filter, $category_url=""){
                $this->db->select("reports.rep_id")->from("reports")->join("category","reports.cat_id=category.category_id")->where("reports.is_custom",'N')->where("category.seo_pagename",$category_url);

                if(isset($filter['cat_id']) && $filter['cat_id'] != ""){
                       $this->db->where_in("reports.cat_id", explode(",",$filter['cat_id']));
                }

                if(isset($filter['rep_pub_date']) && $filter['rep_pub_date'] != ""){
                      // $this->db->where("YEAR(reports.rep_pub_date)",$filter['rep_pub_date']);
                       $this->db->where_in("YEAR(reports.update_date)",$filter['rep_pub_date']);
                }

                if(isset($filter['rep_type']) && $filter['rep_type'] != ""){
                       $this->db->where("reports.rep_type",$filter['rep_type']);
                }

                return $this->db->where("reports.status","A")->get()->num_rows();
        }

        public function getCategoryReports($num_rec_per_page, $start_from, $filter, $category_url=""){
                
                $this->db->select("reports.rep_id,reports.rep_name,reports.rep_keyword,reports.rep_type,reports.rep_breadcrumb,reports.rep_url,reports.update_date as rep_pub_date,reports.rep_pages")->from("reports")->join("category","reports.cat_id=category.category_id")->where("reports.is_custom",'N')->where("category.seo_pagename",$category_url);

                if(isset($filter['cat_id']) && $filter['cat_id'] != ""){
                       $this->db->where("reports.cat_id",$filter['cat_id']);
                }

                if(isset($filter['rep_pub_date']) && $filter['rep_pub_date'] != ""){
                       //$this->db->where("YEAR(reports.rep_pub_date)",$filter['rep_pub_date']);
                       $this->db->where("YEAR(reports.update_date)",$filter['rep_pub_date']);
                }

                if(isset($filter['rep_type']) && $filter['rep_type'] != ""){
                       $this->db->where("reports.rep_type",$filter['rep_type']);
                }

                return $this->db->where("reports.status","A")->where("reports.rep_status","Y")->order_by("reports.update_date","desc")->limit($num_rec_per_page, $start_from)->get()->result_array();
        }

        public function getReportDetailByURL($report_url){
            return $this->db->select("reports.rep_list_table,reports.rep_list_chart,reports.rep_tab_content, reports.is_index,reports.rep_id, reports.rep_name, reports.rep_keyword, reports.rep_price_sul,reports.rep_tag_id,reports.rep_breadcrumb, reports.rep_url, reports.rep_pages, reports.update_date, reports.company, reports.rep_desc, reports.rep_type, reports.meta_title, reports.meta_keywords, reports.meta_desc,  category.cat_name, category.category_id ")->from("reports")->join("category","category.category_id=reports.cat_id")->where("reports.rep_url",$report_url)->where("reports.rep_status","Y")->where("reports.status","A")->where("reports.is_custom",'N')->get()->result_array();
        }

        public function getReportDetailCustomByURL($report_url){
            return $this->db->select("custom_reports.rep_id, custom_reports.rep_name, custom_reports.rep_price_sul, custom_reports.rep_url")->from("custom_reports")->where("custom_reports.is_custom",'Y')->where("custom_reports.rep_url",$report_url)->where("custom_reports.rep_status","Y")->where("custom_reports.status","A")->get()->result_array();
        }

        public function getReportDescription($id){
            return $this->db->select("title,description,action_type")->from("report_description")->where("rep_id",$id)->get()->result_array();
        }

        public function getRelatedReport($report_id, $rep_tag_id){
            return $this->db->select("rep_id,rep_name,rep_keyword,rep_url,meta_desc")->from("reports")->where("rep_tag_id",$rep_tag_id)->where_not_in("rep_tag_id",0)->where_not_in("rep_id",$report_id)->where("rep_type","N")->where("is_custom",'N')->order_by("rep_id",'RANDOM')->limit(4,0)->get()->result_array();
        }

        public function getReportDetailTOCByURL($report_url){
            return $this->db->select("reports.rep_id, reports.rep_name, reports.rep_keyword, reports.rep_breadcrumb,reports.rep_type, reports.rep_desc, reports.rep_list_table, reports.rep_list_chart, reports.rep_tab_content, reports.rep_url, reports.rep_pages, reports.update_date as rep_pub_date, reports.company, category.cat_name, category.category_id, category.seo_pagename")->from("reports")->join("category","category.category_id=reports.cat_id")->where("reports.rep_url",$report_url)->where("reports.rep_status","Y")->where("reports.status","A")->get()->result_array();
        }

        public function getPressRelease($rep_id){
            $this->db->select("id, name, url");
            $this->db->from("mediarelease");
            $this->db->where("status", 'Y');
            $this->db->where("rep_id",$rep_id);
            $this->db->order_by('upload_date', 'DESC');
            $this->db->limit(3,0);
            $query = $this->db->get();

            return $query->result_array();
        }

        public function getCategoryDetails($cat_url){
            return $this->db->select("category_id, cat_name, cat_top_descr, cat_top_heading, meta_title, meta_descr, meta_keyword, dc_description")->from("category")->where("seo_pagename",$cat_url)->get()->result_array();
        }

        public function getSubCategoryDetails($id){
            return $this->db->select("title,description")->from("category_content")->where("cate_id",$id)->where("status",'Y')->get()->result_array();
        }

        public function getCountries(){
            return $this->db->select("name,code")->from("countries")->order_by("name","ASC")->get()->result_array();
        }

        public function getRedirections($url,$type=""){
			$this->db->select("destination_url,error_type")->from("pageredirections")->where("old_url",$url);
            return $this->db->where("status",'Y')->get()->result_array();
		}

        public function getFaqs($rep_id){
            return $this->db->select("id,question,answer")->from("report_faq")->where("rep_id",$rep_id)->get()->result_array();
        }

    }
?>
<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Home_Model extends CI_Model{
        
        public function getLatestReport($type){
        	//$this->db->select("rep_id,rep_breadcrumb,rep_subtitle,rep_name,rep_url,cat_id,rep_keyword")->from("reports")->where("rep_type",$type)->where('rep_status','Y')->where('is_revamp','N')->where("status","A");
            $this->db->select("rep_id,rep_breadcrumb,rep_subtitle,rep_name,rep_url,cat_id,rep_keyword, update_date, rep_price_sul,rep_pages,rep_type")->from("reports")->where('rep_status','Y')->where('is_revamp','N')->where("status","A")->where("is_index","I");
        		$field = "update_date";
        	return $this->db->order_by($field,"desc")->limit(9,0)->get()->result_array();
        }

        public function getLatestReportByCat($cat_id){
            $category_ids = explode(',', $cat_id); // Convert string to array
        
            $this->db->select("rep_id, rep_breadcrumb, rep_subtitle, rep_name, rep_url, cat_id, rep_keyword, update_date, rep_price_sul,rep_pages")
                ->from("reports")
                ->where('rep_status', 'Y')
                ->where_in('cat_id', $category_ids) // Use where_in for multiple categories
                ->where('is_revamp', 'N')
                ->where("status", "A")
                ->where("is_index","I")
                ->order_by("update_date", "desc")
                ->limit(6, 0); // Fetch latest 6 reports
        
            return $this->db->get()->result_array();
        }
        

         public function getUpdatedReport(){

         	  $sql = "select rep_id,rep_breadcrumb,rep_subtitle,rep_name,rep_url,cat_id,rep_keyword from reports where is_revamp = 'Y'   AND rep_status = 'Y' ORDER BY update_date DESC limit 4";
         	  $query = $this->db->query($sql);
              return $query->result_array();
        }

         
        
    }
?>
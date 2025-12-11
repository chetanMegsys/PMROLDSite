<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
    class Search_Model extends CI_Model{
    	public function getRecords1($keyword, $limit=5){

            $keyword_arr = explode(" ",$keyword);

            $rep_like1 = array();
            $rep_like2 = array();

            $flag = 1;
            foreach($keyword_arr as $kw_arr){

                $rep_like1[] = "reports.`rep_keyword` LIKE '%".$kw_arr."%'";
                $rep_like2[] = "reports.`rep_keyword` LIKE '% ".$kw_arr." %'";

            }

            $and_rep_like = implode(" AND ",$rep_like1);
            $or_rep_like = implode(" OR ",$rep_like2);

            $query = "SELECT reports.`rep_id`, reports.`rep_keyword`, reports.`rep_name`, reports.`rep_url`, reports.update_date as rep_pub_date, reports.rep_type, reports.rep_breadcrumb, reports.rep_subtitle, category.cat_name FROM `reports` JOIN category ON category.category_id=reports.cat_id WHERE ((reports.`rep_keyword` LIKE '%".$keyword."%')) AND reports.is_custom='N' AND reports.rep_status='Y' AND reports.status='A'";

            // if(count($keyword_arr) > 1){
            //     $query .= " UNION SELECT reports.`rep_id`, reports.`rep_keyword`, reports.`rep_name`, reports.`rep_url`, reports.update_date as rep_pub_date, reports.rep_type, reports.rep_breadcrumb,reports.rep_subtitle, category.cat_name FROM `reports` JOIN category ON category.category_id=reports.cat_id WHERE (".$or_rep_like.") AND reports.is_custom='N' AND reports.rep_status='Y' AND reports.status='A'";
            // }
            //echo $query;
            $query .= " LIMIT ".$limit;

            $data['reports'] = $this->db->query($query)->result_array();

            return $data;

        }

        public function getRecords2($keyword, $limit=20){

            $keyword_arr = explode(" ",$keyword);

            $rep_like1 = array();
            $rep_like2 = array();
            $rep_like3 = array();

            $flag = 1;
            foreach($keyword_arr as $kw_arr){

                $rep_like1[] = "reports.`rep_name` LIKE '%".$kw_arr."%'";
                $rep_like2[] = "reports.`rep_name` LIKE '% ".$kw_arr." %'";
                $rep_like3[] = "reports.`rep_keyword` LIKE '%".$kw_arr."%'";

            }

            $and_rep_like = implode(" AND ",$rep_like1);
            $or_rep_like = implode(" OR ",$rep_like2);
            $or_rep_like3 = implode(" OR ",$rep_like3);

            $query = "SELECT reports.`rep_id`, reports.`rep_keyword`, reports.`rep_name`, reports.`rep_url`, reports.update_date as rep_pub_date, reports.rep_type, reports.rep_breadcrumb, reports.rep_subtitle, category.cat_name FROM `reports` JOIN category ON category.category_id=reports.cat_id WHERE ((reports.`rep_name` LIKE '%".$keyword."%') OR (".$and_rep_like.")) AND reports.is_custom='N' AND reports.rep_status='Y' AND reports.status='A'";

            if(count($keyword_arr) > 1){
                $query .= " UNION SELECT reports.`rep_id`, reports.`rep_keyword`, reports.`rep_name`, reports.`rep_url`, reports.update_date as rep_pub_date, reports.rep_type, reports.rep_breadcrumb,reports.rep_subtitle, category.cat_name FROM `reports` JOIN category ON category.category_id=reports.cat_id WHERE (".$or_rep_like.") AND reports.is_custom='N' AND reports.rep_status='Y' AND reports.status='A'";
            }

            $query .= " LIMIT ".$limit;

            $data['reports'] = $this->db->query($query)->result_array();

            return $data;

        }

        public function getRecords($keyword, $limit = 20) {
            $keyword_arr = explode(" ", $keyword);
            $match_conditions = array();
        
            // Loop through the keywords and build MATCH...AGAINST conditions for each word
            foreach ($keyword_arr as $kw_arr) {
                $kw_arr = trim($kw_arr); // Remove any unwanted spaces
                if (!empty($kw_arr)) {
                    // Add MATCH...AGAINST for both rep_name and rep_keyword columns
                    $match_conditions[] = "MATCH(reports.`rep_name`, reports.`rep_keyword`) AGAINST ('" . $this->db->escape_like_str($kw_arr) . "' IN BOOLEAN MODE)";
                }
            }
        
            // Combine all MATCH...AGAINST conditions with AND
            $match_query = implode(" AND ", $match_conditions);
        
            // Build the SQL query using MATCH...AGAINST
            $query = "SELECT reports.`rep_id`, reports.`rep_keyword`, reports.`rep_name`, reports.`rep_url`, 
                             reports.update_date as rep_pub_date, reports.rep_type, reports.rep_breadcrumb, 
                             reports.rep_subtitle, category.cat_name 
                      FROM `reports`
                      JOIN category ON category.category_id = reports.cat_id 
                      WHERE ($match_query) 
                      AND reports.is_custom = 'N' 
                      AND reports.rep_status = 'Y' 
                      AND reports.status = 'A'";
        
            // Limit results
            $query .= " LIMIT " . $limit;
        
            // Execute query and return the result
            $data['reports'] = $this->db->query($query)->result_array();
        
            return $data;
        }

        public function getReports1($keyword, $limit=10){

            $keyword_arr = explode(" ",$keyword);

            $like1 = array();
            $like2 = array();
            $like3 = array();

            $flag = 1;
            foreach($keyword_arr as $kw_arr){

                $like1[] = "reports.`rep_keyword` LIKE '%".$kw_arr."%'";
                $like2[] = "reports.`rep_keyword` LIKE '% ".$kw_arr." %'";
                $like2[] = "reports.`rep_keyword` LIKE '%".$kw_arr."%'";
            }

            $and_like = implode(" AND ",$like1);
            $or_like = implode(" OR ",$like2);
            $or_like3 .= implode(" OR ",$like3);
            $query = "SELECT reports.`rep_id`, reports.`rep_keyword`, reports.`rep_name`, reports.`rep_url`, reports.update_date as rep_pub_date, reports.rep_type, reports.rep_breadcrumb,reports.rep_subtitle, category.cat_name FROM `reports` JOIN category ON category.category_id=reports.cat_id WHERE ((reports.`rep_keyword` LIKE '%".$keyword."%')) AND reports.is_custom='N' AND reports.rep_status='Y' AND reports.status='A'";

            if(count($keyword_arr) > 1){
                $query .= " UNION SELECT reports.`rep_id`, reports.`rep_keyword`, reports.`rep_name`, reports.`rep_url`, reports.update_date as rep_pub_date, reports.rep_type, reports.rep_breadcrumb, reports.rep_subtitle, category.cat_name FROM `reports` JOIN category ON category.category_id=reports.cat_id WHERE (".$or_like.") AND reports.is_custom='N' AND reports.rep_status='Y' AND reports.status='A'";
            }

            $query .= " LIMIT ".$limit;

            return $this->db->query($query)->result_array();
        }
        public function getReports($keyword, $limit = 20) {
            $keyword_arr = explode(" ", $keyword);
            $match_conditions = array();
        
            // Loop through the keywords and build MATCH...AGAINST conditions for each word
            foreach ($keyword_arr as $kw_arr) {
                $kw_arr = trim($kw_arr); // Remove any unwanted spaces
                if (!empty($kw_arr)) {
                    // Add MATCH...AGAINST for both rep_name and rep_keyword columns
                    $match_conditions[] = "MATCH(reports.`rep_keyword`, reports.`rep_name`) AGAINST ('" . $this->db->escape_like_str($kw_arr) . "' IN BOOLEAN MODE)";
                }
            }
        
            // Combine all MATCH...AGAINST conditions with AND
            $match_query = implode(" AND ", $match_conditions);
        
            // Build the SQL query using MATCH...AGAINST
            $query = "SELECT reports.`rep_id`, reports.`rep_keyword`, reports.`rep_name`, reports.`rep_url`, 
                             reports.update_date as rep_pub_date, reports.rep_type, reports.rep_breadcrumb, 
                             reports.rep_subtitle, category.cat_name 
                      FROM `reports`
                      JOIN category ON category.category_id = reports.cat_id 
                      WHERE ($match_query) 
                      AND reports.is_custom = 'N' 
                      AND reports.rep_status = 'Y' 
                      AND reports.status = 'A'";
        
            // Limit results
            $query .= " LIMIT " . $limit;
        
            // Execute query and return the result
            return $this->db->query($query)->result_array();
        
        }
	}
?>
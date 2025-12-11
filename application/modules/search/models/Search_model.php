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

        public function getRecords3($keyword, $limit = 20) {
            $keyword_arr = explode(" ", $keyword);
            $match_conditions = [];
            $like_conditions = [];
            $soundex_conditions = [];
            
            // Normalize and sanitize input
            $normalized_keyword = trim(str_replace('.', ' ', $keyword));
        
            foreach ($keyword_arr as $kw_arr) {
                $kw_arr = trim($kw_arr);
                if (!empty($kw_arr)) {
                    // Use FULLTEXT for relevance when possible
                    $escaped_keyword = $this->db->escape_like_str($kw_arr);
                    $match_conditions[] = "MATCH(reports.`rep_name`, reports.`rep_keyword`) 
                                           AGAINST ('\"{$escaped_keyword}\"' IN BOOLEAN MODE)";
                    
                    // Fallback to LIKE for terms with special characters or short length
                    if (strlen($kw_arr) < 3 || preg_match('/[\d\-\.]/', $kw_arr)) {
                        $like_conditions[] = "(reports.`rep_name` LIKE '%" . $this->db->escape_like_str($kw_arr) . "%' 
                                               OR reports.`rep_keyword` LIKE '%" . $this->db->escape_like_str($kw_arr) . "%')";
                    }
        
                    // Add SOUNDEX for phonetic matches
                    $soundex_keyword = soundex($kw_arr);
                    $soundex_conditions[] = "(SOUNDEX(reports.`rep_name`) = '{$soundex_keyword}' 
                                              OR SOUNDEX(reports.`rep_keyword`) = '{$soundex_keyword}')";
                }
            }
        
            // Combine conditions logically
            $match_query = !empty($match_conditions) ? '(' . implode(" AND ", $match_conditions) . ')' : '';
            $like_query = !empty($like_conditions) ? '(' . implode(" OR ", $like_conditions) . ')' : '';
            $soundex_query = !empty($soundex_conditions) ? '(' . implode(" OR ", $soundex_conditions) . ')' : '';
        
            // Build the WHERE clause
            $where_clauses = [];
            if (!empty($match_query)) $where_clauses[] = $match_query;
            if (!empty($like_query)) $where_clauses[] = $like_query;
            if (!empty($soundex_query)) $where_clauses[] = $soundex_query;
        
            // Combine all conditions
            $final_where = implode(" OR ", $where_clauses);
        
            // Build the SQL query with relevance scoring
            $query = "SELECT reports.`rep_id`, reports.`rep_keyword`, reports.`rep_name`, reports.`rep_url`, 
                             reports.update_date as rep_pub_date, reports.rep_type, reports.rep_breadcrumb, 
                             reports.rep_subtitle, category.cat_name, 
                             (MATCH(reports.`rep_name`, reports.`rep_keyword`) 
                             AGAINST ('\"{$normalized_keyword}\"' IN BOOLEAN MODE)) AS relevance,
                             CASE
                                 WHEN reports.`rep_name` LIKE '%" . $this->db->escape_like_str($keyword) . "%' THEN 2
                                 WHEN reports.`rep_keyword` LIKE '%" . $this->db->escape_like_str($keyword) . "%' THEN 1
                                 ELSE 0
                             END AS custom_relevance
                      FROM `reports`
                      JOIN category ON category.category_id = reports.cat_id 
                      WHERE ($final_where) 
                      AND reports.is_custom = 'N' 
                      AND reports.rep_status = 'Y' 
                      AND reports.status = 'A'
                      ORDER BY custom_relevance DESC, relevance DESC
                      LIMIT " . intval($limit);
        
            // Execute the query and return results
            $data['reports'] = $this->db->query($query)->result_array();
        
            return $data;
        }

        public function getRecords29825($keyword, $limit = 20) {
            $keyword_arr = explode(" ", $keyword);
            $like_conditions = [];
            $soundex_conditions = [];
        
            // Sanitize and normalize the keyword
            $normalized_keyword = trim(str_replace('.', ' ', $keyword));
        
            foreach ($keyword_arr as $kw_arr) {
                $kw_arr = trim($kw_arr);
                if (!empty($kw_arr)) {
                    if (strlen($kw_arr) < 3 || preg_match('/[\d\-\.]/', $kw_arr)) {
                        // Fallback to LIKE for short/special keywords
                        $like_conditions[] = "(reports.`rep_keyword` LIKE '%" . $this->db->escape_like_str($kw_arr) . "%' 
                                               OR reports.`rep_name` LIKE '%" . $this->db->escape_like_str($kw_arr) . "%')";
                    } else {
                        $escaped_keyword = $this->db->escape_like_str($kw_arr);
                        $like_conditions[] = "(reports.`rep_keyword` LIKE '%{$escaped_keyword}%' 
                                               OR reports.`rep_name` LIKE '%{$escaped_keyword}%')";
                    }
                }
            }
        
            $like_query = implode(" OR ", $like_conditions);
        
            $query = "SELECT reports.`rep_id`, reports.`rep_name`, reports.`rep_keyword`, 
                             reports.`rep_url`, reports.update_date AS rep_pub_date,
                             category.cat_name,
                             CASE
                                 WHEN reports.`rep_keyword` LIKE '%" . $this->db->escape_like_str($keyword) . "%' THEN 2
                                 WHEN reports.`rep_name` LIKE '%" . $this->db->escape_like_str($keyword) . "%' THEN 1
                                 ELSE 0
                             END AS custom_relevance
                      FROM `reports`
                      JOIN category ON category.category_id = reports.cat_id
                      WHERE ($like_query)
                      AND reports.is_custom = 'N'
                      AND reports.rep_status = 'Y'
                      AND reports.status = 'A'
                      AND reports.is_index = 'I'
                      ORDER BY custom_relevance DESC
                      LIMIT " . intval($limit);
            
             $data['reports'] = $this->db->query($query)->result_array();
        
             return $data;
        }

        public function getRecords($keyword, $limit = 8) {
            if (!mb_check_encoding($keyword, 'UTF-8')) {
                return []; // skip processing if encoding is invalid
            }

            $keyword = trim(str_replace('.', ' ', $keyword));
            $keyword_arr = explode(" ", $keyword);

            $match_conditions = [];
            $like_conditions = [];

            foreach ($keyword_arr as $kw) {
                $kw = trim($kw);
                if ($kw === '') continue;

                // Escape for fulltext
                $escaped_kw = $this->db->escape_like_str($kw);
                $quoted_kw = $this->db->escape('"'.$kw.'"'); // for MATCH AGAINST
                
                // FULLTEXT (if ASCII)
                if (mb_detect_encoding($kw, 'ASCII', true) && strlen($kw) >= 4) {
                    $match_conditions[] = "MATCH(reports.`rep_name`, reports.`rep_keyword`) 
                                        AGAINST ($quoted_kw IN BOOLEAN MODE)";
                }

                // LIKE fallback
                $like_conditions[] = "(reports.`rep_keyword` LIKE '%{$escaped_kw}%' 
                                    OR reports.`rep_name` LIKE '%{$escaped_kw}%')";
            }

            // Final condition build
            $where_clauses = [];
            if (!empty($match_conditions)) {
                $where_clauses[] = '(' . implode(' AND ', $match_conditions) . ')';
            }
            if (!empty($like_conditions)) {
                $where_clauses[] = '(' . implode(' OR ', $like_conditions) . ')';
            }

            $final_where = implode(" OR ", $where_clauses);

            // Final query
            $sql = "SELECT reports.`rep_id`, reports.`rep_keyword`, reports.`rep_name`, reports.`rep_url`, 
                        reports.update_date as rep_pub_date, reports.rep_type, reports.rep_breadcrumb, 
                        reports.rep_subtitle, category.cat_name, 
                        CASE
                            WHEN reports.`rep_keyword` LIKE '%" . $this->db->escape_like_str($keyword) . "%' THEN 2
                            WHEN reports.`rep_name` LIKE '%" . $this->db->escape_like_str($keyword) . "%' THEN 1
                            ELSE 0
                        END AS custom_relevance
                    FROM `reports`
                    JOIN category ON category.category_id = reports.cat_id 
                    WHERE ($final_where)
                    AND reports.is_custom = 'N' 
                    AND reports.rep_status = 'Y' 
                    AND reports.status = 'A'
                    AND reports.is_index = 'I'
                    ORDER BY custom_relevance DESC
                    LIMIT " . intval($limit);

            $data['reports'] = $this->db->query($sql)->result_array();
            return $data;
        }

     
        public function getReports($keyword, $limit = 8) {
            if (!mb_check_encoding($keyword, 'UTF-8')) {
                return []; // skip processing if encoding is invalid
            }

            $keyword = trim(str_replace('.', ' ', $keyword));
            $keyword_arr = explode(" ", $keyword);

            $match_conditions = [];
            $like_conditions = [];

            foreach ($keyword_arr as $kw) {
                $kw = trim($kw);
                if ($kw === '') continue;

                // Escape for fulltext
                $escaped_kw = $this->db->escape_like_str($kw);
                $quoted_kw = $this->db->escape('"'.$kw.'"'); // for MATCH AGAINST
                
                // FULLTEXT (if ASCII)
                if (mb_detect_encoding($kw, 'ASCII', true) && strlen($kw) >= 4) {
                    $match_conditions[] = "MATCH(reports.`rep_name`, reports.`rep_keyword`) 
                                        AGAINST ($quoted_kw IN BOOLEAN MODE)";
                }

                // LIKE fallback
                $like_conditions[] = "(reports.`rep_keyword` LIKE '%{$escaped_kw}%' 
                                    OR reports.`rep_name` LIKE '%{$escaped_kw}%')";
            }

            // Final condition build
            $where_clauses = [];
            if (!empty($match_conditions)) {
                $where_clauses[] = '(' . implode(' AND ', $match_conditions) . ')';
            }
            if (!empty($like_conditions)) {
                $where_clauses[] = '(' . implode(' OR ', $like_conditions) . ')';
            }

            $final_where = implode(" OR ", $where_clauses);

            // Final query
            $sql = "SELECT reports.`rep_id`, reports.`rep_keyword`, reports.`rep_name`, reports.`rep_url`, 
                        reports.update_date as rep_pub_date, reports.rep_type, reports.rep_breadcrumb, 
                        reports.rep_subtitle, category.cat_name, 
                        CASE
                            WHEN reports.`rep_keyword` LIKE '%" . $this->db->escape_like_str($keyword) . "%' THEN 2
                            WHEN reports.`rep_name` LIKE '%" . $this->db->escape_like_str($keyword) . "%' THEN 1
                            ELSE 0
                        END AS custom_relevance
                    FROM `reports`
                    JOIN category ON category.category_id = reports.cat_id 
                    WHERE ($final_where)
                    AND reports.is_custom = 'N' 
                    AND reports.rep_status = 'Y' 
                    AND reports.status = 'A'
                    AND reports.is_index = 'I'
                    ORDER BY custom_relevance DESC
                    LIMIT " . intval($limit);

            return $this->db->query($sql)->result_array();
        }

        
	}
?>
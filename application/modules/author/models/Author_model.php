<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Author_Model extends CI_Model {

    // Get total count of active authors
    public function getAuthorCount() {
        $this->db->where("status", 'Y');
        $this->db->from("authors");
        return $this->db->count_all_results();
    }

    // Get list of authors with pagination
    public function getAuthor($start_from, $num_rec_per_page) {
        $this->db->select("author_id, author_name, author_bio, author_url, author_experts, author_image");
        $this->db->from("authors");
        $this->db->where("status", 'Y');
        $this->db->order_by('author_id', 'DESC'); 
        $this->db->limit($num_rec_per_page, $start_from);
        $query = $this->db->get();

        return $query->result_array();
    }

    // Get author details by URL
    public function getAuthorByUrl($url) {
        $this->db->select("authors.author_id, authors.author_name, authors.author_bio, authors.author_url, authors.author_experts, authors.author_image");
        $this->db->from("authors");
        $this->db->where("authors.status", 'Y');
        $this->db->where('authors.author_url', $url);
        $query = $this->db->get();

        return $query->row();
    }

     // Get author details by ID
     public function getAuthorById($id) {
        $this->db->select("authors.author_id, authors.author_name, authors.author_bio, authors.author_url, authors.author_experts, authors.author_image");
        $this->db->from("authors");
        $this->db->where("authors.status", 'Y');
        $this->db->where('authors.author_id', $id);
        $query = $this->db->get();

        return $query->row();
    }


    // Get author details by ID
    public function getAuthorByCatId($id) {
        $this->db->select("authors.author_id, authors.author_name, authors.author_bio, authors.author_url, authors.author_experts, authors.author_image");
        $this->db->from("authors");
        $this->db->where("authors.status", 'Y');
        $this->db->where('authors.cat_id', $id);
        $query = $this->db->get();

        return $query->row();
    }

    
    // Get latest reports
    public function getLatestReports() {
        return $this->db->select("rep_id, rep_name, rep_url")
            ->from("reports")
            ->where("rep_status", "Y")
            ->where("status", "A")
            ->where("rep_type", "N")
            ->where("is_custom", "N")
            ->order_by("update_date", "DESC")
            ->limit(5, 0)
            ->get()
            ->result_array();
    }

    // Get article details by URL
    public function getArticleByUrl($url) {
        $this->db->select("authors.author_id, authors.author_name, authors.author_bio, UNIX_TIMESTAMP(`modify_date`) as creation, authors.author_url, authors.author_bio, authors.author_experts, authors.author_image, reports.rep_id, reports.rep_url, reports.rep_name");
        $this->db->from("authors");
        $this->db->join("reports", "reports.rep_id = authors.author_id", "left");
        $this->db->where("authors.status", 'Y');
        $this->db->where("authors.author_url", $url);
        $query = $this->db->get();

        return $query->row();
    }

    // Recent developments in top sectors
    public function recent_development_in_top_sectors() {
        return $this->db->select("rdits.id, rdits.heading, rdits.image")
            ->from("recent_development_in_top_sectors rdits")
            ->where("rdits.status", 'Y')
            ->get()
            ->result();
    }

    // Get latest reports
    public function getAllReports() {
        return $this->db->select("rep_id, rep_name, rep_url")
            ->from("reports")
            ->where("rep_status", "Y")
            ->where("rep_status", "Y")
            ->where("status", "A")
            ->where("is_custom", "N")
            ->order_by("update_date", "DESC")
            ->limit(5, 0)
            ->get()
            ->result_array();
    }

     // Get all reports
     public function getAllReportsByAuthorId($id) {
        return $this->db->select("rep_id, rep_name, rep_url")
            ->from("reports")
            ->where("rep_status", "Y")
            ->where("author_id", $id)
            ->where("status", "A")
            ->where("is_custom", "N")
            ->order_by("update_date", "DESC")
            ->limit(10, 0)
            ->get()
            ->result_array();
    }

    // Get redirections for a given URL and type
    public function getRedirections($url, $type) {
        return $this->db->select("destination_url, error_type")
            ->from("pageredirections")
            ->where("old_url", $url)
            ->where("select_module", $type)
            ->where("status", 'Y')
            ->get()
            ->result_array();
    }
}
?>

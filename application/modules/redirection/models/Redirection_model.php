<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
    class Redirection_Model extends CI_Model{

    	public function getPageRedirectionData($url){
    		return $this->db->select("category_id,page_link,other_page_link,isCategory")->from("pages_redirection")->where("page_link",$url)->get()->result_array();
    	}

    	public function getCategoryURLByID($id){
    		return $this->db->select("seo_pagename")->from("category")->where("category_id",$id)->get()->result_array();
    	}

	}
?>
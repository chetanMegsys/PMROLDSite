<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
    class Redirection extends MY_Controller{
        
        public function __construct(){
            $this->load->model("redirection_model");
        }

        public function redirect_page_url($url){
        	$result = $this->redirection_model->getPageRedirectionData($url);
            if(empty($result)){
                redirect(WEBSITE_URL);
            }else if($result[0]['category_id']==0){
                //redirect(WEBSITE_URL.$result[0]['other_page_link']);
                redirect(WEBSITE_URL.$result[0]['other_page_link'],'location',301);
            }else{
                $catURL = $this->redirection_model->getCategoryURLByID($result[0]['category_id']);
                if(empty($catURL)){
                    redirect(WEBSITE_URL);
                }
                redirect(WEBSITE_URL."market-research-report/".$catURL[0]['seo_pagename'].".asp",'location',301);
            }
        }

        public function sample($id){
            redirect(WEBSITE_URL."samples/".$id);
        }

        public function article_details($url){
            redirect(WEBSITE_URL."article/".$url.".asp",'location',301);
        }

        public function redirect_on_service(){
            redirect(WEBSITE_URL."services.asp",'location',301);
        }

        public function redirect_on_aboutus(){
            redirect(WEBSITE_URL."about-us.asp",'location',301);
        }

        public function redirect_on_report_listing(){
            redirect(WEBSITE_URL."market-research.asp",'location',301);
        }

        public function redirect_media_on_report_details($url)
        {
            //->join("categories","mediarelease.category_id=categories.category_id","left")->->where("categories.status","Y")->where("mediarelease.id",$id)
            //echo $url;
              $row =  $this->db->select("reports.rep_url,mediarelease.`rep_id`")->from("mediarelease")->join("reports","mediarelease.rep_id=reports.rep_id","left")->where("mediarelease.url",$url)->get()->result_array(); 
              if(count($row) > 0 && $row[0]['rep_id'] != 0 )
              {
                    header("Location:".WEBSITE_URL."market-research/".$row[0]['rep_url'].'.asp',"redirect",301); exit(0);
              }
              else {
                  header("Location:".WEBSITE_URL."market-research.asp","redirect",301); exit(0);
              }
                
        }


        public function redirect_articles_on_report_details($url)
        {
             
              $row =  $this->db->select("reports.rep_url,articles.`rep_id`")->from("articles")->join("reports","articles.rep_id=reports.rep_id","left")->where("articles.url",$url)->get()->result_array(); 
              if(count($row) > 0 && $row[0]['rep_id'] != 0 )
              {
                    header("Location:".WEBSITE_URL."market-research/".$row[0]['rep_url'].'.asp',"redirect",301); exit(0);
              }
              else {
                  header("Location:".WEBSITE_URL."market-research.asp","redirect",301); exit(0);
              }
                
        }


         public function redirect_news_on_report_details($a, $b , $url)
        {
             //echo $url;  
              $row =  $this->db->select("reports.rep_url,news.`report_id`")->from("news")->join("reports","news.report_id=reports.rep_id","left")->where("news.news_url",$url)->get()->result_array(); 
            //  print_r($row); exit();
              if(count($row) > 0 && $row[0]['report_id'] != 0 )
              {
                    header("Location:".WEBSITE_URL."market-research/".$row[0]['rep_url'].'.asp',"redirect",301); exit(0);
              }
              else {
                  header("Location:".WEBSITE_URL."market-research.asp","redirect",301); exit(0);
              }
                
        }

    }
?>
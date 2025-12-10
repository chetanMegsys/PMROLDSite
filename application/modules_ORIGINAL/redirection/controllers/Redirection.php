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
                redirect(WEBSITE_URL.$result[0]['other_page_link']);
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
    }
?>
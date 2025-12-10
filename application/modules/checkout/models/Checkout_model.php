<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Checkout_Model extends CI_Model{

    	public function getReportData($id){
    		if(!isset($_GET['custom'])){
    			return $this->db->select("rep_id , rep_keyword,rep_price_sul,rep_price_el,rep_price_cul,category.cat_name")->from("reports")->join("category","category.category_id=reports.cat_id")->where("rep_id",$id)->get()->result_array();
    		}else{
    			return $this->db->select("rep_id , rep_name as rep_keyword,rep_price_sul,rep_price_el,rep_price_cul")->from("custom_reports")->where("rep_id",$id)->get()->result_array();
    		}
    	}

    	public function getReportDataForCheckoutForm($id,$field){
    		if(!isset($_GET['custom'])){
    			return $this->db->select("rep_name,rep_url,$field as rep_price")->from("reports")->where("rep_id",$id)->get()->result_array();
    		}else{
    			return $this->db->select("rep_name,rep_url,$field as rep_price")->from("custom_reports")->where("rep_id",$id)->get()->result_array();
    		}
    	}

    	public function insertData($data){
    		$this->db->insert("order_master_live",$data);
    		$id = $this->db->insert_id();
		    
			if ($id) {
			    return $id;
			} else { 
			    return false;
			}
    	}

    	 public function getPrice($id,$type,$is_custom){
            if($type=="S"){
                $this->db->select("rep_price_sul as price");
            }else if($type=="M"){
                $this->db->select("rep_price_el as price");
            }else if($type=="C"){
                $this->db->select("rep_price_cul as price");
            }
            if($is_custom!='' && $is_custom=='CUS'){
                $this->db->from("custom_reports");
            }else{
                $this->db->from("reports");
            }
            $res = $this->db->where("rep_id",$id)->get()->result_array();
            return $res[0]['price'];
        }

          public function getPromoCode($promo,$license_type=''){
            if($license_type=='S'){
                $this->db->select("sul_discount as discount");
            }else if($license_type=='M'){
                $this->db->select("mul_discount as discount");
            }else if($license_type=='C'){
                $this->db->select("cul_discount as discount");
            }

            return $this->db->select("id")->from('promocode')->where('promocode',$promo)->where('status','Y')->get()->result_array();
        }

        public function getPromoById($promoId,$license_type=''){
            if($license_type=='S'){
                $this->db->select("sul_discount as discount");
            }else if($license_type=='M'){
                $this->db->select("mul_discount as discount");
            }else if($license_type=='C'){
                $this->db->select("cul_discount as discount");
            }

            return $this->db->select("id")->from('promocode')->where('id',$promoId)->where('status','Y')->get()->result_array();
        }

    	public function getReportPrice($id,$priceField){
    		if(!isset($_GET['custom'])){
    			return $this->db->select("rep_id,rep_name,$priceField as rep_price")->from("reports")->where("rep_id",$id)->get()->result_array();
    		}else{
    			return $this->db->select("rep_id,rep_name,$priceField as rep_price")->from("custom_reports")->where("rep_id",$id)->get()->result_array();
    		}
    	}

		public function InsertCCAveEntry($lastTransactionId,$tid,$rep_id,$rep_amount){

			$arrayAmexData = array('report_purchase_attempt_id'    => $lastTransactionId,
								  'transaction_number'   => $tid,
								  'transaction_status'   => 'pending',
								  'report_id'    => $rep_id,
								  'order_amount' => $rep_amount,
								  'receipt_no'    => '');
			  
			$this->db->insert('order_ccavenue_transaction',$arrayAmexData);
			$id = $this->db->insert_id();
		      
			if ($id) {
			    return $id;
			} else {
			    return false;
			}

		}

		public function GetEmailDetails($id){
            $sql = " SELECT email_to FROM email_setting WHERE id=".$id;
            $emailArr = $this->db->query($sql);
            return $emailArr->row();
        }

        public function getReportById($id){
        	if(!isset($_GET['custom'])){
    			return $this->db->select("reports.rep_id, reports.rep_keyword as rep_name, reports.rep_url,reports.rep_pub_date,reports.rep_type,category.cat_name,category.seo_pagename")->from("reports")->join("category","reports.cat_id=category.category_id")->where("reports.is_custom",'N')->where("reports.rep_id",$id)->get()->result_array();
    		}else{
    			return $this->db->select("custom_reports.rep_id,custom_reports.rep_name,custom_reports.rep_url,custom_reports.rep_type")->from("custom_reports")->where("custom_reports.rep_id",$id)->get()->result_array();
    		}
    	}
		
		public function getOrderDetails($id)
		{			
				return $this->db->select("*")->from("order_master_live")->where("id",$id)->get()->result_array();
		}


        public function getBlockerData($name,$email,$emailDomain){
            $sql = array();

            if($name!=''){
                $sql[] = "name='".$name."'";
            }

            if($email!=''){
                $sql[] = "email='".$email."'";
            }

             if($emailDomain!=''){
                $sql[] = "email_domain='@".$emailDomain."'";
            }
            

            return $this->db->query("SELECT id from blocker WHERE status='Y' AND ( ".implode(" OR ",$sql)." )")->result_array();
        }
		
		public function getTheUsersData($email, $old_time,$current_time)
		{		 
			$sql = "SELECT cust_name  FROM  order_master_live WHERE  cust_email = '".$email."'  AND datetime between  '".$old_time."' AND '".$current_time."' ";  
			$rs = $this->db->query($sql);
			return $fetres = $rs->result();
		}

    }
?>
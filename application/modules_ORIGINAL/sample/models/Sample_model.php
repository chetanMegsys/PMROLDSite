<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
    class Sample_Model extends CI_Model{

    	public function getReportById($id){
    		return $this->db->select("reports.rep_id,reports.rep_name,reports.rep_url,reports.update_date as rep_pub_date ,reports.rep_type,reports.cat_id,category.cat_name,category.seo_pagename")->from("reports")->join("category","reports.cat_id=category.category_id")->where("reports.is_custom",'N')->where("reports.rep_id",$id)->get()->result_array();
    	}

    	public function saveRequest($postData){
    		$this->db->insert("leads",$postData);
            
    		if($this->db->insert_id() > 0){
    			return true;
    		}else{
    			return false;
    		}
    	}

        public function GetEmailDetails($id){
            $sql = " SELECT email_to FROM email_setting WHERE id=".$id;
            $emailArr = $this->db->query($sql);
            return $emailArr->row();
        }

        public function getLeadAllocationData($country,$cat_id){
            $cr_id = $this->db->select("id as country_id,region_id")->from("countries")->where("name",$country)->get()->row_array();
            $result = $this->db->query("SELECT user_id FROM user_allocation WHERE LOCATE(',".$cat_id.",',category_id) AND LOCATE(',".$cr_id['region_id'].",',region_id)")->result_array();
            
            if(count($result)>1){

                $user_ids = array();
                foreach($result as $r){
                    $user_ids[] = $r['user_id'];
                }

                $impl_id = implode(",",$user_ids);

                $result = $this->db->query("SELECT user_id FROM user_allocation WHERE LOCATE(',".$cr_id['country_id'].",',country_id) AND user_id IN(".$impl_id.")")->row_array();

            }else if(count($result)==1){
                return $result[0]['user_id'];
            }

            if(empty($result) || !isset($result['user_id'])){

                $unknown_countery_id = $this->db->select("setting")->from("settings")->where("setting_name","UNKNOWN_COUNTRY")->get()->row_array();
                return (int)$unknown_countery_id['setting'];

            }

            return $result['user_id'];
        }
        
        public function getCountries(){
            return $this->db->select("name,code")->from("countries")->order_by("name","ASC")->get()->result_array();
        }

        public function getBlockerData($name,$email,$message,$emailDomain){
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

            if($message!=''){
                $sql[] = "message='".$message."'";
            }

            return $this->db->query("SELECT id from blocker WHERE status='Y' AND ( ".implode(" OR ",$sql)." )")->result_array();
        }
		
		public function getTheUsersData($email, $old_time,$current_time)
		{		 
			$sql = "SELECT name,emailId,message FROM  leads WHERE  emailId = '".$email."'  AND created_date between  '".$old_time."' AND '".$current_time."' ";  
			$rs = $this->db->query($sql);
			return $fetres = $rs->result();
		}
    }
?>

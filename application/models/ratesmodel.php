<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RatesModel extends CI_Model {

	public $id;
	public $user_id;
	public $project_id;
	public $rate;
	public $timecreated;
	
	public function __construct(){
		parent::__construct();
	}

	public function toRate($projectId, $rt){
		$this->user_id = $this->session->userdata('user')->id;
		
		$query = $this->db->get_where("rates", array("user_id"=>$this->user_id, "project_id"=>$projectId, "rate"=>$rt));
		$haveRateEqual = $query->row();

		$this->db->delete('rates', array("project_id"=>$projectId));

		if($haveRateEqual){
			return true;
		}else{
			$this->project_id = $projectId;
			$this->rate = $rt;
			$this->timecreated = time();
			if($this->db->insert('rates', $this)){
	            return $this->db->insert_id();
			}else{
				return false;
			}
		}
	}

	public function getMyRateByProject($projectId){
		$myId = $this->session->userdata('user')->id;
		$query = $this->db->get_where("rates", array("user_id"=>$myId, "project_id"=>$projectId));
		$rate = $query->row();

		if($rate){
			return (int)$rate->rate;
		}else{
			return false;
		}
	}
    
}

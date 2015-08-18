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

		$this->user_id = $this->session->userdata('user');
		
		$query = $this->db->get_where("rates", array("user_id"=>$this->user_id, "project_id"=>$projectId, "rate"=>$rt));
		$rate = $query->row();

		if($rate){
			if($this->db->delete('rates', array('id' => $rate->id))){
				return true;
			}else{
				return false;
			}
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
    
}

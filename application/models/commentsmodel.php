<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CommentsModel extends CI_Model {

	public $id;
	public $comment;
	public $project_id;
	public $user_id;
	public $accepted;
    public $timecreated;
    public $timeaccepted;

	public function __construct(){
		parent::__construct();
	}
    
	public function get($project_id, $page = 1, $limit = 10){
		$this->load->model('UsersModel');
		
		$offset = ($page-1)*$limit;
		
		$query = $this->db->get_where('comments', array('project_id' => $project_id), $limit, $offset);
        $comments = $query->result();
		
		for($i=0; $i<count($comments); $i++){
			$comments[$i]->owner = $this->UsersModel->get($comments[$i]->user_id);
		}
		
		return $comments;
	}
	

	public function toComment($project_id){
		
		$this->comment = $comment;
		$this->user_id = $this->session->userdata('user')->id;
        $this->project_id = $project_id;
        $this->title = $this->input->post('title');
        $this->accepted = 0;
        $this->timecreated = time();
        $this->timeaccepted = 0;

        if($this->db->insert('comments', $this)){
            return $this->db->insert_id();
		}else{
			return false;
		}
	}

}

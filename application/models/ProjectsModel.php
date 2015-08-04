<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProjectsModel extends CI_Model {

	public $id;
	public $category;
	public $title;
	public $description;
    public $lat;
    public $lng;
    public $date;
	public $publish;

	public function __construct(){
		parent::__construct();
	}
    
	public function get($id){
		$this->load->model('UsersModel');
		if(is_null($id)){
			$query = $this->db->get("projects");
            return $query->result();
		}else{
			$query = $this->db->get_where("projects", array("id"=>$id));
            $project = $query->row();
			$project->owner = $this->UsersModel->get($project->owner);
            return $query->row();
        }
	}
    
	public function getByOwnerId($ownerId){
		$query = $this->db->get_where("projects", array("owner"=>$ownerId));
        return $query->result();
	}
	
	public function addProject(){
		
		$this->owner = $this->session->userdata('user')->id;
        $this->category = $this->input->post('category');
        $this->title = $this->input->post('title');
        $this->description = $this->input->post('description');
        $this->lat = $this->input->post('lat');
        $this->lng = $this->input->post('lgn');
        $this->date = time();
        $this->publish = 1;
        
        if($this->db->insert('projects', $this)){
            return $this->db->insert_id();
		}else{
			return false;
		}
	}

}

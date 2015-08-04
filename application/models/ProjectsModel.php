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
    
	public function get($page = 1, $limit = 10){
		$this->load->model('UsersModel');
		
		$offset = ($page-1)*$limit;
		
		$query = $this->db->get('projects', $limit, $offset);
        $projects = $query->result();
		
		for($i=0; $i<count($projects); $i++){
			$projects[$i]->owner = $this->UsersModel->get($projects[$i]->owner);
			
			$projectFileFolder = APPPATH.'../datafiles/projects/'.$projects[$i]->id;
	        $dirOpenned = opendir($projectFileFolder);
	        while (false !== ($filename = readdir($dirOpenned))) {
	            if($filename != '.' && $filename != '..'){
	                $projects[$i]->images[] = 'datafiles/projects/'.$projects[$i]->id.'/'.$filename;
	            }
	        }
		}
		return $projects;
	}
	
	public function getById($id){
		$this->load->model('UsersModel');
		$query = $this->db->get_where("projects", array("id"=>$id));
        $project = $query->row();
		$project->owner = $this->UsersModel->get($project->owner);
		
		$projectFileFolder = APPPATH.'../datafiles/projects/'.$project->id;
        $dirOpenned = opendir($projectFileFolder);
        while(false !== ($filename = readdir($dirOpenned))){
            if($filename != '.' && $filename != '..'){
                $project->images[] = 'datafiles/projects/'.$project->id.'/'.$filename;
            }
        }
		
        return $project;
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

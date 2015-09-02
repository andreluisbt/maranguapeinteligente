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
		$this->load->model('RatesModel');
		
		$offset = ($page-1)*$limit;
		
		$query = $this->db->get('projects', $limit, $offset);
        $projects = $query->result();
		
		for($i=0; $i<count($projects); $i++){
			$projects[$i]->owner = $this->UsersModel->get($projects[$i]->owner);
			$projects[$i]->images = $this->getProjectImages($projects[$i]->id);
			$projects[$i]->myRate = $this->RatesModel->getMyRateByProject($projects[$i]->id);
		}
		
		return $projects;
	}
	
	public function getById($id){
		$this->load->model('UsersModel');
		$this->load->model('RatesModel');
		$query = $this->db->get_where("projects", array("id"=>$id));
        $project = $query->row();
		$project->owner = $this->UsersModel->get($project->owner);
        $project->images = $this->getProjectImages($project->id);
        $project->myRate = $this->RatesModel->getMyRateByProject($project->id);
		
        return $project;
	}

    public function getProjectImages($projectId){
        
        $projectImages = array();
        $projectFileFolder = APPPATH.'../datafiles/projects/'.$projectId;
        
        $dirOpenned = opendir($projectFileFolder);
        while(false !== ($filename = readdir($dirOpenned))){
            if($filename != '.' && $filename != '..'){
                $projectImages[] = $projectFileFolder.'/'.$filename;
            }
        }
        
        return $projectImages;
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

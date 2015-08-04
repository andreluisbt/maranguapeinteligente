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
		if(is_null($id)){
			$query = $this->db->get("projects");
            return $query->result();
		}else{
			$query = $this->db->get_where("projects", array("id"=>$id));
            return $query->row();
        }
	}
    
    /*
    public function checkLogin($username, $password){
        
        $query = $this->db->get_where("users", array("email"=>$username, "password"=>$password));
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }
    */
    
	public function addProject(){
		
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

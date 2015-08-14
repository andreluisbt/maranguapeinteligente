<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersModel extends CI_Model {

	public $id;
	public $represents_group;
	public $group_name;
	public $name;
	public $email;
    public $password;
    public $born;
	public $address;
	public $cpf;
    public $image;

	public function __construct(){
		parent::__construct();
	}

	public function get($id){
		$this->load->model('ProjectsModel');
		if(is_null($id)){
			$query = $this->db->get("users");
			$users = $query->result();
			return $users;
		}else{
			$query = $this->db->get_where("users", array("id"=>$id));
			$user = $query->row();
			$projects = $this->ProjectsModel->getByOwnerId($id);
			$user->countProjects = count($projects);
			return $user;
		}
	}
    
    public function checkLogin($username, $password){
        
        $query = $this->db->get_where("users", array("email"=>$username, "password"=>$password));
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }
    
    
	public function newUser(){
		
		$this->represents_group = $this->input->post('represents_group');
       	if($this->represents_group)
        	$this->group_name = $this->input->post('group_name');
       	else
       		$this->group_name = null;
        $this->name = $this->input->post('name');
        $this->email = $this->input->post('email');
        $this->password = md5($this->input->post('password'));
        $this->born = $this->input->post('born');
        $this->address = $this->input->post('address');
        $this->cpf = $this->input->post('cpf');
        
        $this->image = $this->input->post('image');
        $this->timecreated = time();

        if($this->db->insert('users', $this)){
            return $this->db->insert_id();
		}else{
			return false;
		}

	}
    
}

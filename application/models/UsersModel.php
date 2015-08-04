<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersModel extends CI_Model {

	public $id;
	public $name;
	public $email;
    public $password;
	public $address;
    public $born;
    public $picture;

	public function __construct(){
		parent::__construct();
	}

	public function get($id){
		if(is_null($id)){
			$query = $this->db->get("users");
		}else{
			$query = $this->db->get_where("users", array("id"=>$id));
		}
        return $query->result();
	}
    
    public function checkLogin($username, $password){
        
        $query = $this->db->get_where("users", array("email"=>$username, "password"=>$password));
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }
    
    /*
	public function addContact(){
		
		$contactData = json_decode(file_get_contents("php://input"));

        if($this->db->insert('contacts', $contactData)){
        	return true;
		}else{
			return false;
		}
	}
     */
}

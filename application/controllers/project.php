<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends CI_Controller {
	    
    public function index(){
        
        //$this->load->view('app/home');
        
        /*
        if($this->session->userdata('user')){
           $this->load->view('app/home', array('logged'=>true));
        }else{
            $this->load->view('app/home', array('logged'=>false));
        }
        */
	}

	public function newProject(){
	    
        $pageData = array();
        $pageData['page'] = 'newProject';
        $pageData['logged'] = false;
        
        if($this->session->userdata('user')){
           $pageData['logged'] = true;
        }
        
        $this->load->view('project/new', $pageData);
    }
    
    public function viewProject(){
        
        $pageData = array();
        $pageData['page'] = 'viewProject';
        $pageData['logged'] = false;
        
        if($this->session->userdata('user')){
           $pageData['logged'] = true;
        }
        
        $this->load->view('project/view', $pageData);
    }
    
}
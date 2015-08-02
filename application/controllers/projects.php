<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Projects extends CI_Controller {
	    
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
        
        $this->load->view('project/new', $pageData);
    }
    
    public function viewProject($id){
        
        $pageData = array();
        
        $this->load->model('ProjectsModel');
        $project = $this->ProjectsModel->get($id);
        
        $pageData['page'] = 'viewProject';
        $pageData['project'] = $project;
        
        $this->load->view('project/view', $pageData);
    }
    
    public function actionNewProject(){
        $this->load->model('ProjectsModel');
        
        $response = new stdClass();
        if($response->result = $this->ProjectsModel->addProject()){
            $response->msg = "Sugestão de Projeto cadastrado com sucesso";
        }else{
            $response->msg = "Houve um problema ao tentar casdastrar a sugestão de Projeto";
        }
        
        echo json_encode($response);
    }
    
}
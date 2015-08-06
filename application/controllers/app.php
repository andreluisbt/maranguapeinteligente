<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App extends CI_Controller {
	 
    public function index(){
    	$pageData = array();
        $pageData['page'] = 'home';
        $this->load->view('app/home', $pageData);
	}
	
	public function showAllProjects($page=1){
    	$this->load->model('ProjectsModel');
        
        $pageData = array();
        $pageData['projectPage'] = $page+1;
        $pageData['projects'] = $this->ProjectsModel->get($page);
		
        if(count($pageData['projects']) == 10){
            $pageData['haveMore'] = true;
        }else{
            $pageData['haveMore'] = false;
        }

        $this->load->view('project/projects', $pageData);
	}
	
    
    public function actionLogin(){
        $this->load->model('UsersModel');
        
        $username = $this->input->post('loginUser');
        $password = md5($this->input->post('loginPassword'));
        
        $response = new stdClass();
        if($user = $this->UsersModel->checkLogin($username, $password)){
            unset($user->password);
            $this->session->set_userdata(array('user'=>$user));  
            $response->result = true;
        }else{
            $response->result = false;
            $response->msg = 'Usuário ou senha inválidos.';
        }
        echo json_encode($response);
    }
	
    public function actionLogout(){
        $this->session->sess_destroy();
        redirect('/', 'refresh');
    }
    
	public function signup(){
        $this->load->view('app/signup');
    }

	public function forgotPassword(){
        $this->load->view('app/forgot_password');
    }
    
}
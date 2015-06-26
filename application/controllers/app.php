<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App extends CI_Controller {
	    
    public function index(){
        if($this->session->userdata('user')){
           $this->load->view('app/home', array('logged'=>true));
        }else{
            $this->load->view('app/home', array('logged'=>false));
        }
	}
    
    public function actionLogin(){
        $username = $this->input->post('loginUser');
        $password = $this->input->post('loginPassword');
        
        $response = new stdClass();
        
        if($username == 'user@user.com' && $password == '1234'){
            
            $user = new stdClass();
            $user->username = $username;
            $user->password = $password;
            $this->session->set_userdata(array('user'=>$user));  
            
            $response->result = true;
        }else{
            $response->result = false;
            $response->msg = 'Dados inválidos.';
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
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App extends CI_Controller {
	    
    public function index(){
        
        /*
        $tipo = true;
        if($this->session->userdata('user')){
            if($tipo){
                $this->template->load('templates/main', 'patient/main');
            }else{
                $this->template->load('templates/main', 'doctor/main');
            }
        }else{
         *
         */
        $this->load->view('app/home');
	}
    
    public function actionLogin(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        
        $r = new stdClass();
        
        if($email == 'user@user.com' && $password == '1234'){
            $r->result = true;
        }else{
            $r->result = false;
            $r->msg = 'E-mail ou senha inválidos.';
        }
        echo json_encode($r);
    }
	
	public function signup(){
        $this->load->view('app/signup');
    }

	public function forgotPassword(){
        $this->load->view('app/forgot_password');
    }
    
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
	
    public function index(){
	}

	public function actionNewUser(){
        $this->load->model('UsersModel');
        
        $response = new stdClass();

        if($this->UsersModel->getByEmail($this->input->post('email'))){
            $response->result = false;
            $response->msg = "Já existe um usuário cadastrado com esse e-mail";
        }elseif($this->input->post('password') !== $this->input->post('password_conf')){
            $response->result = false;
            $response->msg = "As senhas informadas não conferem";
        }else{

            if(!$this->input->post('represents_group')){
                $usersFileFolder = APPPATH.'../datafiles/users/';

            	$config_upload['upload_path'] = $usersFileFolder;
                $config_upload['allowed_types'] = 'gif|jpg|png';
                $config_upload['max_size'] = '5120';
                $config_upload['max_width']  = '2500';
                $config_upload['max_height']  = '2500';
                $config_upload['encrypt_name'] = true;

        	    $this->load->library('upload', $config_upload);
                
                $this->upload->do_upload('image');
                $filename = $this->upload->data();
                $filename = $filename['file_name'];

                $config_resize['source_image'] = $usersFileFolder.'/'.$filename;
                $config_resize['image_library'] = 'gd2';
                $config_resize['maintain_ratio'] = true;
                $config_resize['width'] = 65;
                $config_resize['height'] = 65;
                $config_resize['master_dim'] = 'height';

                $this->load->library('image_lib', $config_resize);
                $this->image_lib->resize();

                $_POST['image'] = $filename;
            }

            if($userId = $this->UsersModel->newUser()){
                $response->result = true;
                $response->msg = "Parabéns, seu cadastro foi realizado com sucesso";
            }else{
            	$response->result = false;
                $response->msg = "Houve um problema ao tentar realizar seu cadastro";
            }
            
        }

        echo json_encode($response);
    }

}
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
        
        $projectFileFolder = APPPATH.'../datafiles/projects/'.$project->id;
        $dirOpenned = opendir($projectFileFolder);
        while (false !== ($filename = readdir($dirOpenned))) {
            if($filename != '.' && $filename != '..'){
                $project->images[] = 'datafiles/projects/'.$project->id.'/'.$filename;
            }
        }
        
        $pageData['page'] = 'viewProject';
        $pageData['project'] = $project;
        
        $this->load->view('project/view', $pageData);
    }
    
    public function actionNewProject(){
        $this->load->model('ProjectsModel');
        
        $response = new stdClass();
        if($projectId = $this->ProjectsModel->addProject()){
                
            $response->result = true;
            
            $projectFileFolder = APPPATH.'../datafiles/projects/'.$projectId;
            if(!file_exists($projectFileFolder)) {
                mkdir($projectFileFolder, 0777, true);
            }
            
            $config_upload['upload_path'] = $projectFileFolder;
            $config_upload['allowed_types'] = 'gif|jpg|png';
            $config_upload['max_size'] = '5120';
            $config_upload['max_width']  = '2500';
            $config_upload['max_height']  = '2500';
            $config_upload['remove_spaces'] = true;
            
            
            
            $images = $_FILES;
            $cpt = count($_FILES['image']['name']);
            
            $this->load->library('upload', $config_upload);
            for($i=0; $i<$cpt; $i++){           
                $_FILES['image']['name']= $images['image']['name'][$i];
                $_FILES['image']['type']= $images['image']['type'][$i];
                $_FILES['image']['tmp_name']= $images['image']['tmp_name'][$i];
                $_FILES['image']['error']= $images['image']['error'][$i];
                $_FILES['image']['size']= $images['image']['size'][$i];    
                $this->upload->do_upload('image');
                
                $config_resize['source_image'] = $projectFileFolder.'/'.$_FILES['image']['name'];
                $config_resize['image_library'] = 'gd2';
                $config_resize['maintain_ratio'] = false;
                $config_resize['width'] = 540;
                $config_resize['height'] = 268;
                $this->load->library('image_lib', $config_resize);
                $this->image_lib->resize();
                
            }
            
            
            
            /*
            if (!$this->upload->do_upload('image[]')){
                $error = array('error' => $this->upload->display_errors());
                var_dump($error);die;
                
                //$this->load->view('upload_form', $error);
            }else{
                //$data = array('upload_data' => $this->upload->data());
                //$this->load->view('upload_success', $data);
            }
            */
            
            
            $response->msg = "Sugestão de Projeto cadastrado com sucesso";
        }else{
            $response->msg = "Houve um problema ao tentar casdastrar a sugestão de Projeto";
        }
        
        echo json_encode($response);
    }
    
}
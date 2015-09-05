<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comments extends CI_Controller {
	    
    public function index(){
	}

    public function showComments($project_id, $page=1){
        $this->load->model('CommentsModel');
        
        $pageData = array();
        $pageData['commmentPage'] = $page+1;
        $pageData['comments'] = $this->CommentsModel->get($project_id, $page);

        if(count($pageData['comments']) == 10){
            $pageData['haveMore'] = true;
        }else{
            $pageData['haveMore'] = false;
        }

        $this->load->view('comment/project_comment', $pageData);
    }

    /*
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
            $config_upload['encrypt_name'] = true;
            
            $images = $_FILES;
            $cpt = count($_FILES['image']['name']);
            
            $this->load->library('upload', $config_upload);
			$this->load->library('image_lib');
            for($i=0; $i<$cpt; $i++){           
                $_FILES['image']['name'] = $images['image']['name'][$i];
                $_FILES['image']['type'] = $images['image']['type'][$i];
                $_FILES['image']['tmp_name'] = $images['image']['tmp_name'][$i];
                $_FILES['image']['error'] = $images['image']['error'][$i];
                $_FILES['image']['size'] = $images['image']['size'][$i];    
                $this->upload->do_upload('image');

                $fildata = $this->upload->data();
                $filename = $fildata['file_name'];
                
                $config_resize['source_image'] = $projectFileFolder.'/'.$filename;
                $config_resize['image_library'] = 'gd2';
                $config_resize['maintain_ratio'] = false;
                $config_resize['width'] = 540;
                $config_resize['height'] = 268;
                //$config_resize['master_dim'] = 'width';
                
				$this->image_lib->clear();
   				$this->image_lib->initialize($config_resize);
                $this->image_lib->resize();
            }
            
            $response->msg = "Sugestão de Projeto cadastrado com sucesso";
        }else{
            $response->msg = "Houve um problema ao tentar cadastrar a sugestão de Projeto";
        }
        
        echo json_encode($response);
    }
    public function actionRateProject(){
        $this->load->model('ProjectsModel');

    }
    */

    
}
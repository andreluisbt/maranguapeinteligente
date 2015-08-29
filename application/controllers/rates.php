<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rates extends CI_Controller {
	    
    public function index(){
	}


    public function rateUp($project_id){
        $this->rate($project_id, 1);
    }

    public function rateDown($project_id){
        $this->rate($project_id, 0);
    }

	public function rate($project_id, $rate){
        $this->load->model('RatesModel');
        
        $response = new stdClass();

        $rateResult = $this->RatesModel->toRate($project_id, $rate);

        if($rateResult === true){
            $response->result = true;
            $response->class = '';
        }else if(gettype($rateResult) == 'integer'){
            $response->result = true;
            $response->class = 'active';
        }else{
            $response->result = false;
            $response->class = '';
            $response->msg = "Ops.. tivemos um pequeno problema ao registrar seu voto.";
        }
        
        echo json_encode($response);
    }

    /*
    public function actionRateProject(){
        $this->load->model('ProjectsModel');

    }
    */
    
}
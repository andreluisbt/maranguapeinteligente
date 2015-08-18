<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rates extends CI_Controller {
	    
    public function index(){
	}

	public function rateUp($project_id){
        $this->load->model('RatesModel');
        
        $response = new stdClass();
        if($rate_id = $this->RatesModel->toRate($project_id, 1)){
            $response->result = true;
            $response->msg = "OK OK OK";
        }else{
            $response->result = false;
            $response->msg = "NOK NOK NOK";
        }
        
        echo json_encode($response);
    }

    /*
    public function actionRateProject(){
        $this->load->model('ProjectsModel');

    }
    */
    
}
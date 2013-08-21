<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Modules extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {

			$this->load->model('applicant_model');
			$query = $this->applicant_model->trainee_list();
			$data['records'] = $query;

			$this->load->model('client_model');
			$query = $this->client_model->list_company();
			$data['client_record'] = $query;
			
			$this->load->view('training/modules_view',$data);
		}
		else {

    		$this->load->view('login_view');
		}	
	}

	function list_files($param = "") {

		$this->load->model('module_model');
    	$map = $this->module_model->list_file($param);

		echo json_encode($map);
	}

}

/* End of file modules.php */
/* Location: ./application/controllers/modules.php */
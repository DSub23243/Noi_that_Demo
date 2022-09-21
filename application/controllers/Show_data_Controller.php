<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Show_data_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		$this->load->model('Show_data_model');
		$dulieu = $this->Show_data_model->getdata();
		$this->load->view('show_account',);
	}

 }

/* End of file Show_data_Controller.php */
/* Location: ./application/controllers/Show_data_Controller.php */
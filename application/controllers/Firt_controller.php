<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Firt_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function dang_ky()
	{
		$this->load->view('dang_ky');
	}

	public function noithat()
	{
		$this->load->view('menu-bar');
		$this->load->view('noi_that');
	}

	public function user_quanli()
	{
		$this->load->view('menu-bar');
		$this->load->view('user_account');
		
	}
	public function Product_pages()
	{
		$this->load->view('product_page');
	}
	public function insert_data()
	{
		$reacc = $this->input->post(addslashes('reacc'));
		$repass = $this->input->post(addslashes('repass'));
		$rerepass = $this->input->post(addslashes('rerepass'));
		$name = $this->input->post(addslashes('name'));
		$date = @date('Y-m-d');
		if ($repass == $rerepass) {
			$this->load->model('Insert_data_sql');
			if ($this->Insert_data_sql->insert($reacc , $repass , $name, $date) == 1) {
				$this->noithat();
			}
			else if ($this->Insert_data_sql->insert($reacc , $repass , $name, $date) == 0) {
				$data['alert'] = "Tài khoản đã tồn tại";
				$this->load->view('alert-box', $data);
				$this->load->view('dang_ky');
			}
		}
		else {
				$data['alert'] = "Mật khẩu xác nhận không đúng";
				$this->load->view('alert-box', $data);
				$this->load->view('dang_ky');
		}
	}	
	public function login_data()
	{
		$acc = $this->input->post(addslashes('acc'));
		$pass = $this->input->post(addslashes('pass'));
		$this->load->model('Login_model');
		if ($this->Login_model->Login_data($acc , $pass) == 1) {
			$this->noithat();
		}
		else{
				$data['alert'] = "Tài khoản hoặc mật khẩu bị sai";
				$this->load->view('alert-box', $data);
				$this->load->view('dang_ky');
		}

	}
	public function Log_out()
	{

		$this->load->view('dang_ky');
		session_destroy();
	}
	
	/* End of file Firt_controller.php */
	/* Location: ./application/controllers/Firt_controller.php */


}


/* End of file Firt_controller.php */
/* Location: ./application/models/Firt_controller.php */

/* End of file Firt_controller.php */
/* Location: ./application/controllers/Firt_controller.php */
	
/* End of file firt_controller.php */
/* Location: ./application/controllers/firt_controller.php */
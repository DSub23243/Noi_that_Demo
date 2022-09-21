<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function Login_data($acc , $pass)
	{
		$this->db->where('Name_user', $acc);
		$this->db->where('Password_user', $pass);
		$data_value = $this->db->get('user_account');
		$data_value_result = $data_value->result_array();
		if ($data_value ->num_rows() > 0) {
			foreach ($data_value_result as $key => $value) {
				$value_name= $value['Account_name'];
				session_start();
				$_SESSION['name'] = $value_name;
				return 1;
			}
		}
		else {
			return 0;
		}
	}


}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Show_data_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getdata()
	{
		$this->db->select('Name_user, Password_user');
		$data = $this->db->get('user_account');
		$data = $data->result_array();
		foreach ($data as $key => $value) {
			if ($value['name_user']) {
				// code...
			}
		}
		

	}

}

/* End of file Show_data_model.php */
/* Location: ./application/models/Show_data_model.php */
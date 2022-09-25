<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Insert_data_sql extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function mahoa($temp)
	{
		$string = md5(uniqid($temp),true);
		$base64 = base64_encode($string);
		$convert = substr($base64, 0,10);
		return $convert;
	}
	public function kt_acc($temp)
	{
		$this->db->select('Name_user, Password_user');
		$data = $this->db->get('user_account');
		$data = $data->result_array();
		foreach ($data as $key => $value) {
			if ($value['Name_user'] == $temp) {
				return $temp;
			}
		}
		
	}
	public function insert($acc , $pass, $name, $date)
	{
		$dulieu = array('Name_user' => $acc, 'Password_user' => $pass, 'Account_name' => $name, 'Date_create'=> $date);
		if ($this->kt_acc($acc) != $acc) {
			$this->db->insert('user_account', $dulieu);
			return 1;
		}
		return 0;
	}

}

/* End of file Insert_data_sql.php */
/* Location: ./application/models/Insert_data_sql.php */
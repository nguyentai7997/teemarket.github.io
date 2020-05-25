<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mteemarket extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();

	}

	function getDataByPublicName($publicname)
	{
		$query = $this->db->query("SELECT * FROM account WHERE publicname = '$publicname' ")->result_array();
		return $query;
	}

	function getDataByEmail($email)
		{
			$query = $this->db->query("SELECT * FROM account WHERE email = '$email' ")->result_array();
			return $query;
		}

	public function insertSeller($account_type,$fullname,$publicname,$email,$password)
	{
		$query = $this->db->query("INSERT INTO account (account_type,fullname,publicname,email,password) VALUES ('$account_type','$fullname','$publicname','$email','$password')");
		return $query;
	}

	function checkDataSignIn($email, $password)
	{
		$query = $this->db->query("SELECT * FROM account WHERE email = '$email' and password = '$password' ")->result_array();
		return $query;
	}
}

/* End of file test.php */
/* Location: ./application/models/test.php */

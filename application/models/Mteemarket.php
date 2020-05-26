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

	function getDataSignIn($email, $password)
	{
		$query = $this->db->query("SELECT * FROM account WHERE email = '$email' and password = '$password' and id_account_type = '1'")->result_array();
		return $query;
	}

	function getPassByIdAccount($id)
	{
		$query = $this->db->query("SELECT password FROM account WHERE id = '$id'")->result_array();
		return $query;
	}

	function updatePassword($id, $new_pass)
	{
		$query = $this->db->query("UPDATE account SET password = '$new_pass' WHERE id = '$id'");
		return $query;
	}

	function getDataColor()
	{
		$query = $this->db->query("SELECT * FROM color")->result_array();
		return $query;
	}
}

/* End of file test.php */
/* Location: ./application/models/test.php */

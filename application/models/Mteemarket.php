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

	function getDataByIdSellerAndUrl($id,$url)
	{
		$query = $this->db->query("SELECT id FROM campaign WHERE id_seller = '$id' and url = '$url'")->result_array();
		return $query;
	}

	function getDataCategorize()
	{
		$query = $this->db->query("SELECT * FROM categorize")->result_array();
		return $query;
	}

	function getDataSubCategorize()
	{
		$query = $this->db->query("SELECT * FROM sub_categorize")->result_array();
		return $query;
	}

	function insertCampaign($id,$src_image,$price,$title,$description,$url, $categorize)
	{
		$query = $this->db->query("INSERT INTO campaign (id_seller,design,price,title,description,url,id_sub_categorize,status) VALUES ('$id','$src_image','$price','$title','$description','$url','$categorize','active')");
		return $query;
	}

	function getIdCampByIdSellerAndUrl($id,$url)
	{
		$query = $this->db->query("SELECT id FROM campaign WHERE id_seller = '$id' and url = '$url'")->result_array();
		return $query;
	}

	function getIdColorByColorCode($code)
	{
		$query = $this->db->query("SELECT id FROM color WHERE color_code = '$code'")->result_array();
		return $query;
	}

	function insertCampColors($id_campaign,$id_color)
	{
		$query = $this->db->query("INSERT INTO campaign_colors (id_campaign,id_color) VALUES ('$id_campaign','$id_color')");
		return $query;
	}

	function getDataCampaign()
	{
		$dataCamps = $this->db->query("SELECT * FROM campaign")->result_array();
		return $dataCamps;

	}
	function getDataColorByIdCampaign($idCamp)
	{
		$idColor = $this->db->query("SELECT id_color FROM campaign_colors  WHERE id_campaign = '$idCamp' ")->result_array();
		$id_color = $idColor[0]["id_color"];
		$colorByIdColor = $this->db->query("SELECT * FROM color WHERE id = '$id_color'")->result_array();
		return $colorByIdColor;
	}

	function getDataColorsByIdCam($idCamp){
		$idColors = $this->db->query("SELECT id_color FROM campaign_colors  WHERE id_campaign = '$idCamp' ")->result_array();
		return $idColors;
	}
	function getDataColors ($id){
		$colors = $this->db->query("SELECT * FROM color WHERE id = '$id' ")->result_array();
		return $colors;
	}
	function getPublicnameByIdCamp($idCamp){
		$publicname = $this->db->query("SELECT publicname FROM campaign where id='$idCamp'")->result_array();
		//$id_seller = $dataCamps[0]['id_seller'];
		//$publicName = $this->db->query("SELECT publicname FROM account where id='$id_seller'")->result_array();
		return $publicname ;
	}
	function getDataByPublicnameAndUrl($publicname, $url){
		$data = $this->db->query("SELECT * FROM campaign where publicname ='$publicname' and url='$url'" )->result_array();
		return $data;
	}



}

/* End of file test.php */
/* Location: ./application/models/test.php */

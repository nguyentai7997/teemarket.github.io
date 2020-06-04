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
		$query = $this->db->query("SELECT * FROM account WHERE email = '$email' and password = '$password' and account_type = 'seller'")->result_array();
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

	function getIdColorByColorCode($color_code)
	{
		$query = $this->db->query("SELECT id FROM color WHERE color_code = '$color_code'")->result_array();
		return $query;
	}

	function insertCampColors($id_campaign,$id_color)
	{
		$query = $this->db->query("INSERT INTO campaign_colors (id_campaign,id_color) VALUES ('$id_campaign','$id_color')");
		return $query;
	}

	function getDataCampaign()
	{
		$query = $this->db->query("SELECT * FROM campaign")->result_array();
		return $query;

	}
	function getDataFirstColorByIdCampaign($idCampaign)
	{
		$allIdColor = $this->db->query("SELECT id_color FROM campaign_colors  WHERE id_campaign = '$idCampaign' ")->result_array();
		$idFirstColor = $allIdColor[0]["id_color"];
		$dataFirstColor = $this->db->query("SELECT * FROM color WHERE id = '$idFirstColor'")->result_array();
		return $dataFirstColor;
	}

	function getDataIdColorsByIdCam($idCampaign){
		$query = $this->db->query("SELECT id_color FROM campaign_colors  WHERE id_campaign = '$idCampaign' ")->result_array();
		return $query;
	}
	function getDataColorByIdColor($id){
		$query = $this->db->query("SELECT * FROM color WHERE id = '$id' ")->result_array();
		return $query;
	}
	function getPublicnameByIdCamp($idCampaign){
		$query = $this->db->query("SELECT publicname FROM campaign,account WHERE campaign.id_seller = account.id AND campaign.id = '$idCampaign'")->result_array();
		return $query;
	}
	function getDataByPublicnameAndUrl($publicname, $url){
		$dataIdSeller = $this->db->query("SELECT id FROM account where publicname ='$publicname'")->result_array();
		$idSeller = $dataIdSeller[0]['id'];
		$data = $this->db->query("SELECT * FROM campaign where id_seller ='$idSeller' and url='$url'")->result_array();
		return $data;
	}

	function getDataProductById($id){
		$query = $this->db->query("SELECT * FROM campaign where id ='$id'")->result_array();
		return $query;
	}

	function getDataColorByColorCode($color_code){
		$query = $this->db->query("SELECT * FROM color where color_code ='$color_code'")->result_array();
		return $query;
	}
	function insertInfoCustomer($email,$fullname,$address,$country,$state,$city,$zip)
	{
		$insertInfoCustomer = $this->db->query("INSERT INTO info_customer ( `email`, `fullname`, `address`, `country`, `state`, `city`, `zip`, `datetime`, `status`) VALUES ('$email','$fullname','$address','$country','$state','$city','$zip',CURRENT_TIMESTAMP,'pending')");
		$idCustomer = $this->db->query("SELECT LAST_INSERT_ID()")->result_array();
		return $idCustomer;
	}
	function insertOrder($id_customer,$id_campaign,$size,$id_color,$quantity)
	{
		$query = $this->db->query("INSERT INTO orders ( `id_customer`, `id_campaign`, `size`, `id_color`, `quantity`) VALUES ('$id_customer','$id_campaign','$size','$id_color', '$quantity')");
		return $query;
	}
}

/* End of file test.php */
/* Location: ./application/models/test.php */

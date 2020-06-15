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

	function getDataCategory()
	{
		$query = $this->db->query("SELECT * FROM category")->result_array();
		return $query;
	}

	function getIdCategoryByCategory($category)
	{
		$query = $this->db->query("SELECT id FROM category WHERE category = '$category'")->result_array();
		return $query;
	}

	function getProductByIdCategory($id)
	{
		$query = $this->db->query("SELECT campaign.id,campaign.price,campaign.url,campaign.title FROM campaign,category WHERE campaign.id_category = category.id AND category.id = '$id'")->result_array();
		return $query;
	}

	function insertCampaign($id,$src_image,$price,$title,$description,$url,$category)
	{
		$query = $this->db->query("INSERT INTO campaign (id_seller,design,price,title,description,url,id_category,status,time) VALUES ('$id','$src_image','$price','$title','$description','$url','$category','active',CURRENT_TIMESTAMP)");
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

	function getMockupByColorCode($color_code)
	{
		$query = $this->db->query("SELECT mockup FROM color WHERE color_code = '$color_code'")->result_array();
		return $query;
	}

	function insertCampColors($id_campaign,$id_color,$image_link)
	{
		$query = $this->db->query("INSERT INTO campaign_colors (id_campaign,id_color,image_link) VALUES ('$id_campaign','$id_color','$image_link')");
		return $query;
	}

	function getDataCampaign()
	{
		$query = $this->db->query("SELECT * FROM campaign")->result_array();
		return $query;

	}

	function getFirstImageLinkByIdCampaign($idCampaign)
	{
		$allImageLink = $this->db->query("SELECT image_link FROM campaign_colors WHERE id_campaign = '$idCampaign'")->result_array();
		$firstImageLink = $allImageLink[0]["image_link"];
		return $firstImageLink;
	}

	function getDataColorsByIdCamp($idCampaign){
		$query = $this->db->query("SELECT campaign_colors.id_color,campaign_colors.image_link,color.color,color.color_code FROM campaign_colors,color  WHERE campaign_colors.id_color = color.id AND campaign_colors.id_campaign = '$idCampaign' ")->result_array();
		return $query;
	}

	function getPublicnameByIdCamp($idCampaign){
		$query = $this->db->query("SELECT publicname FROM campaign,account WHERE campaign.id_seller = account.id AND campaign.id = '$idCampaign'")->result_array();
		return $query;
	}

	function getDataByPublicnameAndUrl($publicname, $url)
	{
		$dataIdSeller = $this->db->query("SELECT id FROM account where publicname ='$publicname'")->result_array();
		$idSeller = $dataIdSeller[0]['id'];
		$data = $this->db->query("SELECT * FROM campaign where id_seller ='$idSeller' and url='$url'")->result_array();
		return $data;
	}

	function getDataProductById($id)
	{
		$query = $this->db->query("SELECT title,price FROM campaign where id ='$id'")->result_array();
		return $query;
	}

	function getDataColorByColorCode($color_code)
	{
		$query = $this->db->query("SELECT * FROM color where color_code ='$color_code'")->result_array();
		return $query;
	}

	function insertInfoCustomer($email,$fullname,$address,$country,$state,$city,$zip)
	{
		$insertInfoCustomer = $this->db->query("INSERT INTO info_customer ( `email`, `fullname`, `address`, `country`, `state`, `city`, `zip`, `time`) VALUES ('$email','$fullname','$address','$country','$state','$city','$zip',CURRENT_TIMESTAMP)");
		$idCustomer = $this->db->query("SELECT LAST_INSERT_ID()")->result_array();
		return $idCustomer;
	}

	function insertOrder($id_customer,$id_campaign,$size,$id_color,$quantity)
	{
		$query = $this->db->query("INSERT INTO orders ( `id_customer`, `id_campaign`, `size`, `id_color`, `quantity` , `status`) VALUES ('$id_customer','$id_campaign','$size','$id_color', '$quantity', 'pending')");
		return $query;
	}

	function getAllCampaignsOfSeller($id)
	{
		$query = $this->db->query("SELECT * FROM campaign where id_seller ='$id'")->result_array();
		return $query;
	}

	function getDataPaymentByIdSeller($id)
	{
		$query = $this->db->query("SELECT * FROM payment_method where id_seller ='$id'")->result_array();
		return $query;
	}

	function updatePayment($id,$paypal,$payoneer)
	{
		$query = $this->db->query("UPDATE payment_method SET email_paypal = '$paypal' , email_payoneer = '$payoneer'  WHERE id_seller = '$id'");
		return $query;
	}

	function insertPayment($id,$paypal,$payoneer)
	{
		$query = $this->db->query("INSERT INTO payment_method ( `id_seller`, `email_paypal`, `email_payoneer`) VALUES ('$id','$paypal','$payoneer')");
		return $query;
	}

	function getInfoSeller($id)
	{
		$query = $this->db->query("SELECT * FROM account where id ='$id'")->result_array();
		return $query;
	}

	function updateInfo($id,$fullname,$publicname,$address,$countries,$states,$cities,$zip,$phone)
	{
		$query = $this->db->query("UPDATE account SET fullname = '$fullname' , publicname = '$publicname' , address = '$address' , country = '$countries' , state = '$states' , city = '$cities' , zip = '$zip' , phone = '$phone' WHERE id = '$id'");
		return $query;
	}

	function getOrdersByIdSeller($id)
	{
		$query = $this->db->query("SELECT info_customer.time,campaign.title,orders.id,info_customer.email,info_customer.country,orders.quantity,campaign.price,orders.status FROM info_customer,orders,campaign WHERE info_customer.id = orders.id_customer AND orders.id_campaign = campaign.id AND campaign.id_seller = '$id'")->result_array();
		return $query;
	}

	function getDataByTime($time,$id)
	{
		$query = $this->db->query("SELECT campaign.price,orders.quantity FROM info_customer,orders,campaign WHERE info_customer.id = orders.id_customer AND orders.id_campaign = campaign.id AND campaign.id_seller = '$id' AND info_customer.time LIKE '%$time%'")->result_array();
		return $query;
	}

}

/* End of file test.php */
/* Location: ./application/models/test.php */

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Seller extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Mteemarket');
	}

	public function index()
	{
		redirect('http://localhost:8012/teemarket/seller/campaigns');
	}

	public function campaigns(){
		if (empty($_SESSION['user'])) {
			redirect('http://localhost:8012/teemarket/login');
		} else {
//			$id = $_SESSION['user']['id'];
//			echo $id;
//			die();
			$allCampaigns = $this->Mteemarket->getAllCampaignsOfSeller($_SESSION['user']['id']);
			$this->load->view('campaigns_view',['campaigns' => $allCampaigns]);
		}
	}

	public function campaign_details(){
		if (empty($_SESSION['user'])) {
			redirect('http://localhost:8012/teemarket/login');
		} else {
			$this->load->view('campaign_details_view');
		}
	}

	public function design()
	{
		if (empty($_SESSION['user'])) {
			redirect('http://localhost:8012/teemarket/login');
		} else {
			$data_color = $this->Mteemarket->getDataColor();
			$this->load->view('design_view',['colors' => $data_color]);
		}
	}

	public function get_design(){
		if ($this->input->post('src_image')){
			$src_image = $this->input->post('src_image');
			$color_design = $this->input->post('color_design');

			$colors= array();
			array_push($colors, $color_design);

			$_SESSION['campaign']['src_image'] = $src_image;
			$_SESSION['campaign']['color'] = $colors;
		} else{
			redirect('http://localhost:8012/teemarket/error');
		}
	}

	public function remove_design(){
		unset($_SESSION['campaign']);
		redirect('http://localhost:8012/teemarket/seller/design');
	}

	public function product()
	{
		if (empty($_SESSION['campaign']['src_image']) || empty($_SESSION['campaign']['color'])) {
			redirect('http://localhost:8012/teemarket/seller/design');
		} else {
			$data_color = $this->Mteemarket->getDataColor();
			$this->load->view('product_view',['colors' => $data_color]);
		}
	}

	public function get_product(){
		if ($this->input->post('price')){
			$_SESSION['campaign']['resultColors'] = $this->input->post('resultColors');
			$_SESSION['campaign']['price'] = $this->input->post('price');
		} else{
			redirect('http://localhost:8012/teemarket/error');
		}
	}

	public function launch()
	{
		if (empty($_SESSION['campaign']['resultColors']) || empty($_SESSION['campaign']['price'])) {
			redirect('http://localhost:8012/teemarket/seller/design');
		} else {
			$dataCategory = $this->Mteemarket->getDataCategory();
			$this->load->view('launch_view',['category' => $dataCategory]);
		}
	}

	public function check_url(){
		if ($this->input->post('url')){
			$url = $this->input->post('url');
			$data = $this->Mteemarket->getIdCampByIdSellerAndUrl($_SESSION['user']['id'],$url);
			if (!$data) {
				$status = 0;
				echo $status;
			} else {
				$status = 1;
				echo $status;
			}
		} else{
			redirect('http://localhost:8012/teemarket/error');
		}
	}

	public function get_launch(){
		if ($this->input->post('url')){
			$firstColorDesign = $this->Mteemarket->getDataColorByColorCode($_SESSION['campaign']['color'][0]);
			$arrayIdColor = array(
				array(
					array(
						"id" => $firstColorDesign[0]['id']
					)
				)
			);
			$arrayMockup = array(
				array(
					array(
						"mockup" => $firstColorDesign[0]['mockup']
					)
				)
			);
			$array_str = explode("/",$_SESSION['campaign']['src_image']);
			$image_id= substr($array_str[7],0,-4); //design k doi
			$image_link = 'https://res.cloudinary.com/teemarket/image/upload/c_scale,l_' . $image_id . ',w_216,y_-16/' . $arrayMockup[0][0]['mockup'];
			$arrayImageLink = array(
				array(
					$image_link
				)

			);
//			echo "<pre>";
//			print_r ($arrayIdColor);
//			echo "</pre>";
//			echo "<pre>";
//			print_r ($array_str[7]);
//			echo "</pre>";
//			echo $image_link;
//			die();

			for ($i = 0; $i < count($_SESSION['campaign']['resultColors']); $i++){
				if($_SESSION['campaign']['resultColors'][$i] != $_SESSION['campaign']['color'][0]){
					$dataIdColor = $this->Mteemarket->getIdColorByColorCode($_SESSION['campaign']['resultColors'][$i]);
					$dataMockup = $this->Mteemarket->getMockupByColorCode($_SESSION['campaign']['resultColors'][$i]);
					array_push($arrayIdColor,$dataIdColor);
					array_push($arrayMockup,$dataMockup);
				}
			}


			for ($i = 1; $i < count($arrayMockup); $i++){
				$dataImageLink = array('https://res.cloudinary.com/teemarket/image/upload/c_scale,l_' . $image_id . ',w_216,y_-16/' . $arrayMockup[$i][0]['mockup']);
				array_push($arrayImageLink,$dataImageLink);
			}

			$link_64 = array();
			for ($i = 0; $i < count($arrayImageLink); $i++){
			}

//			echo "<pre>";
//			print_r ($arrayIdColor);
//			echo "</pre>";
			echo "<pre>";
			print_r ($link_64);
			echo "</pre>";
			echo "<pre>";
			print_r ($arrayImageLink);
			echo "</pre>";
			die();

			$_SESSION['campaign']['title'] = $this->input->post('title');
			$_SESSION['campaign']['description'] = $this->input->post('description');
			$_SESSION['campaign']['url'] = $this->input->post('url');
			$_SESSION['campaign']['category'] = $this->input->post('category');

			$addCamp = $this->Mteemarket->insertCampaign($_SESSION['user']['id'],$_SESSION['campaign']['src_image'],$_SESSION['campaign']['price'],$_SESSION['campaign']['title'],$_SESSION['campaign']['description'],$_SESSION['campaign']['url'],$_SESSION['campaign']['category']);

			if ($addCamp) {
				$idCamp = $this->Mteemarket->getIdCampByIdSellerAndUrl($_SESSION['user']['id'],$_SESSION['campaign']['url']);
				if ($idCamp) {
					//Insert Campaign Colors
					for ($i = 0; $i < count($arrayIdColor); $i++){
						$addCampColors = $this->Mteemarket->insertCampColors($idCamp[0]['id'],$arrayIdColor[$i][0]['id']);
					}
					unset($_SESSION['campaign']);
					$status = 0;
					echo $status;
				} else {
					$status = 1;
					echo $status;
				}
			} else {
				$status = 2;
				echo $status;
			}
		} else{
			redirect('http://localhost:8012/teemarket/error');
		}
	}

	public function orders()
	{
		if (empty($_SESSION['user'])) {
			redirect('http://localhost:8012/teemarket/login');
		} else {
			$orders = $this->Mteemarket->getOrdersByIdSeller($_SESSION['user']['id']);
			$this->load->view('orders_view',['orders' => $orders]);
		}
	}

	public function account()
	{
		if (empty($_SESSION['user'])) {
			redirect('http://localhost:8012/teemarket/login');
		} else {
			$infoSeller = $this->Mteemarket->getInfoSeller($_SESSION['user']['id']);
			$this->load->view('account_view',['info' => $infoSeller]);
		}
	}

	public function update_info(){
		if ($this->input->post('publicname')){
			$fullname = $this->input->post('fullname');
			$publicname = $this->input->post('publicname');
			$address = $this->input->post('address');
			$countries = $this->input->post('countries');
			$states = $this->input->post('states');
			$cities = $this->input->post('cities');
			$zip = $this->input->post('zip');
			$phone = $this->input->post('phone');

			$update = $this->Mteemarket->updateInfo($_SESSION['user']['id'],$fullname,$publicname,$address,$countries,$states,$cities,$zip,$phone);

			if ($update) {
				$status = 0;
				echo $status;
			} else {
				$status = 1;
				echo $status;
			}

		} else{
			redirect('http://localhost:8012/teemarket/error');
		}
	}

	public function change_password()
	{
		if ($this->input->post('current_pass')){
			$id = $_SESSION['user']['id'];
			$current_pass = $this->input->post('current_pass');
			$new_pass = $this->input->post('new_pass');

			$data = $this->Mteemarket->getPassByIdAccount($id);

			if ($current_pass == $data[0]['password']){
				$update = $this->Mteemarket->updatePassword($id, $new_pass);
				if ($update) {
					$status = 0;
					echo $status;
				} else {
					$status = 1;
					echo $status;
				}
			} else {
				$status = 2;
				echo $status;
			}
		} else{
			redirect('http://localhost:8012/teemarket/error');
		}
	}

	public function payment()
	{
		if (empty($_SESSION['user'])) {
			redirect('http://localhost:8012/teemarket/login');
		} else {
			$dataPaymentOfSeller = $this->Mteemarket->getDataPaymentByIdSeller($_SESSION['user']['id']);
			$this->load->view('payment_view',['payment' => $dataPaymentOfSeller]);
		}
	}

	public function insert_payment(){
		if ($this->input->post('paypal') || $this->input->post('payoneer')) {
			$paypal = $this->input->post('paypal');
			$payoneer = $this->input->post('payoneer');

			$dataPaymentOfSeller = $this->Mteemarket->getDataPaymentByIdSeller($_SESSION['user']['id']);
			if ($dataPaymentOfSeller) {
				$update = $this->Mteemarket->updatePayment($_SESSION['user']['id'],$paypal,$payoneer);
				if ($update) {
					echo 0;
				} else {
					echo 1;
				}
			} else {
				$add = $this->Mteemarket->insertPayment($_SESSION['user']['id'],$paypal,$payoneer);
				if ($add) {
					echo 0;
				} else {
					echo 1;
				}
			}
		} else {
			redirect('http://localhost:8012/teemarket/error');
		}
	}

	public function payouts()
	{
		if (empty($_SESSION['user'])) {
			redirect('http://localhost:8012/teemarket/login');
		} else {
			$orders = $this->Mteemarket->getOrdersByIdSeller($_SESSION['user']['id']);
			$this->load->view('payouts_view',['orders' => $orders]);
		}
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */

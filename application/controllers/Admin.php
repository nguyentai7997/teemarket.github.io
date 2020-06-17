<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Mteemarket');
	}

	public function index()
	{
		redirect('http://localhost:8012/teemarket/admin/dashboard');
	}

	public function dashboard()
	{
		if (empty($_SESSION['admin'])) {
			redirect('http://localhost:8012/teemarket/admin/login');
		} else {
			$this->load->view('admin_dashboard_view');
		}
	}

	public function login()
	{
		$this->load->view('admin_login_view');
	}

	public function check_sign_in()
	{
		if ($this->input->post('emailSignIn')) {
			$emailSignIn = $this->input->post('emailSignIn');
			$passwordSignIn = $this->input->post('passwordSignIn');

			$data = $this->Mteemarket->getDataSellerSignIn($emailSignIn, $passwordSignIn);

			if ($data) {
				$status = 0;
				echo $status;
				$admin_info = array(
					'id' => $data[0]['id'],
					'publicname' => $data[0]['publicname'],
					'fullname' => $data[0]['fullname'],
					'email' => $data[0]['email'],
				);
				$this->session->set_userdata('admin', $admin_info);
			} else {
				$status = 1;
				echo $status;
			}
		} else {
			redirect('http://localhost:8012/teemarket/error');
		}
	}

	public function campaigns(){
		if (empty($_SESSION['admin'])) {
			redirect('http://localhost:8012/teemarket/admin/login');
		} else {
			$allCampaigns = $this->Mteemarket->getAllCampaigns();

			$arrayOrdersOfCampaign = array();
			for ($i = 0; $i <count($allCampaigns); $i++){
				$ordersOfCampaign = $this->Mteemarket->getAllOrdersOfCampaign($allCampaigns[$i]['id']);
				array_push($arrayOrdersOfCampaign,$ordersOfCampaign);
			}

			$arrayUnitsOfCampaign = array();
			for ($i = 0; $i < count($allCampaigns); $i++){
				$unitsOfCampaign = $this->Mteemarket->getAllUnitsOfCampaign($allCampaigns[$i]['id']);
				array_push($arrayUnitsOfCampaign,$unitsOfCampaign);
			}

			$arrayUnits = array();
			for ($i = 0; $i < count($arrayUnitsOfCampaign); $i++){
				$units = 0;
				for ($k = 0; $k < count($arrayUnitsOfCampaign[$i]); $k++){
					$units += $arrayUnitsOfCampaign[$i][$k]['quantity'];
				}
				array_push($arrayUnits,$units);
			}

			$allData = array();
			for ($i = 0; $i < count($allCampaigns); $i++){
				$firstImageLink = $this->Mteemarket->getFirstImageLinkByIdCampaign($allCampaigns[$i]['id']);
				$data = ['id' => $allCampaigns[$i]['id'], 'image_link' => $firstImageLink, 'orders' => $arrayOrdersOfCampaign[$i][0]['COUNT(DISTINCT id_customer)'], 'units' => $arrayUnits[$i],'price' => $allCampaigns[$i]['price'], 'url' => $allCampaigns[$i]['url'], 'title' => $allCampaigns[$i]['title'], 'publicname' => $allCampaigns[$i]['publicname'], 'status' => $allCampaigns[$i]['status']];
				array_push($allData, $data);
			}

			$this->load->view('admin_campaigns_view',['campaigns' => $allData]);
		}
	}

	public function campaign_details($id_campaign){
		if (empty($_SESSION['admin'])) {
			redirect('http://localhost:8012/teemarket/admin/login');
		} else {
			$dataCampaign = $this->Mteemarket->adminGetDataCampaignById($id_campaign);

			if ($dataCampaign) {
				$dataCategory = $this->Mteemarket->getDataCategory();
				$firstImageLink = $this->Mteemarket->getFirstImageLinkByIdCampaign($id_campaign);
				$this->load->view('admin_campaign_details_view',['category' => $dataCategory,'campaign' => $dataCampaign,'image_link' => $firstImageLink]);
			} else {
				redirect('http://localhost:8012/teemarket/error');
			}
		}
	}

	public function mockups(){

	}

	public function categories(){

	}

	public function orders(){
		if (empty($_SESSION['admin'])) {
			redirect('http://localhost:8012/teemarket/admin/login');
		} else {
			$orders = $this->Mteemarket->getOrders();
			$this->load->view('admin_orders_view',['orders' => $orders]);
		}
	}

	public function payouts(){
		if (empty($_SESSION['admin'])) {
			redirect('http://localhost:8012/teemarket/admin/login');
		} else {
			$this->load->view('admin_payouts_view');
		}
	}

	public function users(){
		if (empty($_SESSION['admin'])) {
			redirect('http://localhost:8012/teemarket/admin/login');
		} else {
			$orders = $this->Mteemarket->getOrders();
			$this->load->view('admin_user_view');
		}
	}

	public function logout()
	{
		unset($_SESSION['admin']);
		redirect('http://localhost:8012/teemarket');
	}
}

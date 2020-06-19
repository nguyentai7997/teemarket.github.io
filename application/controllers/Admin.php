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
		if (empty($_SESSION['admin'])) {
			redirect('http://localhost:8012/teemarket/admin/login');
		} else {
			$mockups = $this->Mteemarket->getMockups();
			$this->load->view('admin_mockups_view',['mockups' => $mockups]);
		}
	}

	public function create_mockup(){
		if ($this->input->post('color_name')) {
			$color_name = $this->input->post('color_name');
			$color_code = $this->input->post('color_code');
			$src_image = $this->input->post('src_image');

			//Convert color_code Hex to rgb
			function hex2rgb( $colour ) {
				if ( $colour[0] == '#' ) {
					$colour = substr( $colour, 1 );
				}
				if ( strlen( $colour ) == 6 ) {
					list( $r, $g, $b ) = array( $colour[0] . $colour[1], $colour[2] . $colour[3], $colour[4] . $colour[5] );
				} elseif ( strlen( $colour ) == 3 ) {
					list( $r, $g, $b ) = array( $colour[0] . $colour[0], $colour[1] . $colour[1], $colour[2] . $colour[2] );
				} else {
					return false;
				}
				$r = hexdec( $r );
				$g = hexdec( $g );
				$b = hexdec( $b );

				return 'rgb('.$r.', '.$g.', '.$b.')';
			}

			$color_code_rgb = hex2rgb($color_code);

			//lay duoi mockup bo di .png hoac .jpg
			$array_str = explode("/",$src_image);
			$fisrt_str = substr($array_str[6],0);
			$second_str = substr($array_str[7],0);
			$mockup = $fisrt_str . '/' . $second_str;

			$insert = $this->Mteemarket->insertMockup($color_name,$color_code_rgb,$mockup);
			if ($insert){
				echo 1;
			} else {
				echo 0;
			}
		} else {
			redirect('http://localhost:8012/teemarket/error');
		}
	}

	public function update_mockup(){
		if ($this->input->post('color_id')) {
			$color_id = $this->input->post('color_id');
			$color_name = $this->input->post('color_name');
			$color_code = $this->input->post('color_code');

			//Convert color_code Hex to rgb
			function hex2rgb( $colour ) {
				if ( $colour[0] == '#' ) {
					$colour = substr( $colour, 1 );
				}
				if ( strlen( $colour ) == 6 ) {
					list( $r, $g, $b ) = array( $colour[0] . $colour[1], $colour[2] . $colour[3], $colour[4] . $colour[5] );
				} elseif ( strlen( $colour ) == 3 ) {
					list( $r, $g, $b ) = array( $colour[0] . $colour[0], $colour[1] . $colour[1], $colour[2] . $colour[2] );
				} else {
					return false;
				}
				$r = hexdec( $r );
				$g = hexdec( $g );
				$b = hexdec( $b );

				return 'rgb('.$r.', '.$g.', '.$b.')';
			}

			$color_code_rgb = hex2rgb($color_code);

			$update = $this->Mteemarket->updateMockup($color_id,$color_name,$color_code_rgb);
			if ($update){
				echo 1;
			} else {
				echo 0;
			}
		} else {
			redirect('http://localhost:8012/teemarket/error');
		}
	}

	public function delete_mockup(){
		if ($this->input->post('id')) {
			$id = $this->input->post('id');
			$checkOrdersByIdColor = $this->Mteemarket->checkOrdersByIdColor($id);
			if ($checkOrdersByIdColor){
				echo 1;
			} else {
				$deleteCampaignColor = $this->Mteemarket->deleteCampaignColor($id);
				$delete = $this->Mteemarket->deleteMockup($id);
				echo 0;
			}
		} else {
			redirect('http://localhost:8012/teemarket/error');
		}
	}

	public function categories(){
		if (empty($_SESSION['admin'])) {
			redirect('http://localhost:8012/teemarket/admin/login');
		} else {
			$categories = $this->Mteemarket->getDataCategory();
			$this->load->view('admin_categories_view',['categories' => $categories]);
		}

	}

	public function create_category(){
		if ($this->input->post('category_name')) {
			$category_name = $this->input->post('category_name');

			$insert = $this->Mteemarket->insertCategory($category_name);
			if ($insert){
				echo 1;
			} else {
				echo 0;
			}
		} else {
			redirect('http://localhost:8012/teemarket/error');
		}
	}

	public function update_category(){
		if ($this->input->post('category_id')) {
			$category_id = $this->input->post('category_id');
			$category_name = $this->input->post('category_name');

			$update = $this->Mteemarket->updateCategory($category_id,$category_name);
			if ($update){
				echo 1;
			} else {
				echo 0;
			}
		} else {
			redirect('http://localhost:8012/teemarket/error');
		}
	}

	public function delete_category(){
		if ($this->input->post('id')) {
			$id = $this->input->post('id');
			$updateCampaignCategory = $this->Mteemarket->updateCampaignCategory($id);
			if ($updateCampaignCategory) {
				$delete = $this->Mteemarket->deleteCategory($id);
				echo 1;
			}
		} else {
			redirect('http://localhost:8012/teemarket/error');
		}
	}

	public function orders(){
		if (empty($_SESSION['admin'])) {
			redirect('http://localhost:8012/teemarket/admin/login');
		} else {
			$orders = $this->Mteemarket->getOrders();
			$this->load->view('admin_orders_view',['orders' => $orders]);
		}
	}

	public function update_order(){
		if ($this->input->post('order_id')) {
			$order_id = $this->input->post('order_id');
			$status = $this->input->post('status');
			$update = $this->Mteemarket->updateOrder($order_id,$status);
			if ($update){
				echo 1;
			} else {
				echo 0;
			}
		} else {
			redirect('http://localhost:8012/teemarket/error');
		}
	}

	public function users(){
		if (empty($_SESSION['admin'])) {
			redirect('http://localhost:8012/teemarket/admin/login');
		} else {
			$users = $this->Mteemarket->getUsers();

			for ($i = 0; $i < count($users); $i++){
				$checkRequestOfUser = $this->Mteemarket->checkRequestOfUser($users[$i]['id']);
				array_push($users[$i],$checkRequestOfUser);
			}
			$this->load->view('admin_users_view',['users'=>$users]);
		}
	}

	public function user_details($id_user){
		if (empty($_SESSION['admin'])) {
			redirect('http://localhost:8012/teemarket/admin/login');
		} else {
			$dataRequested = $this->Mteemarket->getDateRequestedOfUser($id_user);
			if ($dataRequested) {
				for ($i = 0; $i < count($dataRequested); $i++){
					$payment_method = $this->Mteemarket->getPaymentMethodByIdPayout($id_user,$dataRequested[$i]['payment_mode']);
					array_push($dataRequested[$i],$payment_method);
				}
				$this->load->view('admin_user_details_view',['dataRequested' => $dataRequested]);
			} else {
				redirect('http://localhost:8012/teemarket/error');
			}
		}
	}

	public function get_requestes_of_seller(){
		if ($this->input->post('id_user')) {
			$id_user = $this->input->post('id_user');
			$dataRequested = $this->Mteemarket->getDateRequestedOfUser($id_user);
			if ($dataRequested) {
				for ($i = 0; $i < count($dataRequested); $i++){
					$payment_method = $this->Mteemarket->getPaymentMethodByIdPayout($id_user,$dataRequested[$i]['payment_mode']);
					if ($dataRequested[$i]['payment_mode'] == 'paypal'){
						array_push($dataRequested[$i],$payment_method[0]['paypal']);
					} else {
						array_push($dataRequested[$i],$payment_method[0]['payoneer']);
					}
				}

				echo json_encode($dataRequested);
			} else {
				redirect('http://localhost:8012/teemarket/error');
			}
		} else {
			redirect('http://localhost:8012/teemarket/error');
		}
	}

	public function get_orders_of_seller(){
		if ($this->input->post('id_user')) {
			$id_user = $this->input->post('id_user');
			$ordersOfSeller = $this->Mteemarket->getOrdersByIdSeller($id_user);

			echo json_encode($ordersOfSeller);
		} else {
			redirect('http://localhost:8012/teemarket/error');
		}
	}

	public function logout()
	{
		unset($_SESSION['admin']);
		redirect('http://localhost:8012/teemarket');
	}
}

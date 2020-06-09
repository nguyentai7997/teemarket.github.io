<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Teemarket extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Mteemarket');
	}

	public function index()
	{
		$dataCategory = $this->Mteemarket->getDataCategory();
		$dataCampaign = $this->Mteemarket->getDataCampaign();
        $allData  = array();

        for ($i = 0; $i< count($dataCampaign); $i++ ){
			$dataPublicname = $this->Mteemarket->getPublicnameByIdCamp($dataCampaign[$i]['id']);
			$dataFirstColorOfCampaign = $this->Mteemarket->getDataFirstColorByIdCampaign($dataCampaign[$i]['id']);
			$data = ['idCampaign' => $dataCampaign[$i]['id'], 'colorCode' => $dataFirstColorOfCampaign[0]['color_code'], 'price'=> $dataCampaign[$i]['price'], 'url' => $dataCampaign[$i]['url'], 'design' => $dataCampaign[$i]['design'], 'title' => $dataCampaign[$i]['title'], 'publicname'=> $dataPublicname[0]['publicname']];
            array_push($allData, $data);
		}
		$this->load->view('teemarket_view',['category' => $dataCategory,'allData'=>$allData]);
	}

	public function error(){
		$dataCategory = $this->Mteemarket->getDataCategory();
		$this->load->view('404_view',['category' => $dataCategory]);
	}

	public function login()
	{
		$dataCategory = $this->Mteemarket->getDataCategory();
		$this->load->view('login_view',['category' => $dataCategory]);
	}

	public function check_sign_in()
	{
		if ($this->input->post('emailSignIn')){
			$emailSignIn = $this->input->post('emailSignIn');
			$passwordSignIn = $this->input->post('passwordSignIn');

			$data = $this->Mteemarket->getDataSignIn($emailSignIn, $passwordSignIn);

			if ($data) {
				$status = 0;
				echo $status;
				$seller_info = array(
					'id' => $data[0]['id'],
					'publicname' => $data[0]['publicname'],
					'fullname' => $data[0]['fullname'],
					'email' => $data[0]['email'],
				);
				$this->session->set_userdata('user', $seller_info);
			} else {
				$status = 1;
				echo $status;
			}
		} else{
			redirect('http://localhost:8012/teemarket/error');
		}
	}

	public function register()
	{
		$dataCategory = $this->Mteemarket->getDataCategory();
		$this->load->view('register_view',['category' => $dataCategory]);
	}

	public function check_public_name()
	{
		if ($this->input->post('publicname')){
			$publicname = $this->input->post('publicname');
			$res = $this->Mteemarket->getDataByPublicName($publicname);
			if (!$res) {
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

	public function check_email()
	{
		if ($this->input->post('email')){
			$email = $this->input->post('email');
			$res = $this->Mteemarket->getDataByEmail($email);
			if (!$res) {
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

	public function insert_seller()
	{
		if ($this->input->post('fullname')){
			$account_type = $this->input->post('account_type');
			$fullname = $this->input->post('fullname');
			$publicname = $this->input->post('publicname');
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$add = $this->Mteemarket->insertSeller($account_type,$fullname, $publicname, $email, $password);
			if ($add) {
				$status = 0;
				echo $status;
				$seller_info = array(
					//thieu id de co gi con doi mat khau duoc
					'publicname' => $publicname,
					'fullname' => $fullname,
					'email' => $email
				);
				$this->session->set_userdata('user', $seller_info);
			} else {
				$status = 1;
				echo $status;
			}
		} else{
			redirect('http://localhost:8012/teemarket/error');
		}
	}

	public function marketplace(){
		$dataCategory = $this->Mteemarket->getDataCategory();
		$dataCampaign = $this->Mteemarket->getDataCampaign();
		$allData  = array();

		for ($i = 0; $i< count($dataCampaign); $i++ ){
			$dataPublicname = $this->Mteemarket->getPublicnameByIdCamp($dataCampaign[$i]['id']);
			$dataFirstColorOfCampaign = $this->Mteemarket->getDataFirstColorByIdCampaign($dataCampaign[$i]['id']);
			$data = ['idCampaign' => $dataCampaign[$i]['id'], 'colorCode' => $dataFirstColorOfCampaign[0]['color_code'], 'price'=> $dataCampaign[$i]['price'], 'url' => $dataCampaign[$i]['url'], 'design' => $dataCampaign[$i]['design'], 'title' => $dataCampaign[$i]['title'], 'publicname'=> $dataPublicname[0]['publicname']];
			array_push($allData, $data);
		}
		$this->load->view('marketplace_view',['category' => $dataCategory,'allData'=>$allData]);
	}

	public function view_product($publicname,$url)
	{
		if ($this->Mteemarket->getDataByPublicnameAndUrl($publicname, $url)){
			$dataCategory = $this->Mteemarket->getDataCategory();
			$dataProduct = $this->Mteemarket->getDataByPublicnameAndUrl($publicname, $url);
			$dataIdColorsByIdCamp = $this->Mteemarket->getDataIdColorsByIdCam($dataProduct[0]['id']);

			$colors = array();
			for ( $i = 0; $i < count($dataIdColorsByIdCamp); $i++ ){
				$dataColor = $this->Mteemarket->getDataColorByIdColor($dataIdColorsByIdCamp[$i]['id_color']);
				array_push($colors, $dataColor);
			}
			$this->load->view('product_details_view', ['category' => $dataCategory,'colors' => $colors, 'dataCamp'=> $dataProduct]);
		} else{
			redirect('http://localhost:8012/teemarket/error');
		}
	}

	public function cart()
	{
		$dataCategory = $this->Mteemarket->getDataCategory();
		$this->load->view('cart_view',['category' => $dataCategory]);
	}

	public function add_to_cart(){
		if ($this->input->post('id')){
			$id = $this->input->post('id');
			$color_code = $this->input->post('color_code');
			$size = $this->input->post('size');
			$quantity = $this->input->post('quantity');

			$dataProduct=$this->Mteemarket->getDataProductById($id);
			$dataColor=$this->Mteemarket->getDataColorByColorCode($color_code);
			$new_product = array(
				array(
					'id'			=> $id,
					'design'		=> $dataProduct[0]['design'],
					'id_color'		=> $dataColor[0]['id'],
					'color'			=> $dataColor[0]['color'],
					'color_code' 	=> $color_code,
					'title'			=> $dataProduct[0]['title'],
					'price'			=> $dataProduct[0]['price'],
					'size' 			=> $size,
					'quantity'		=> $quantity,
				)
			);
			if(isset($_SESSION['product'])){// Neu co Session product
				$found = false;
				foreach($_SESSION['product'] as $cart_item){
					if(($cart_item['id'] == $id) && ($cart_item['$color_code'] == $color_code) && ($cart_item['size'] == $size)){
						$product[] = array(
							'id'			=> $cart_item['id'],
							'design'		=> $cart_item['design'],
							'id_color'		=> $cart_item['id_color'],
							'color'			=> $cart_item['color'],
							'color_code'	=> $cart_item['color_code'],
							'title'			=> $cart_item['title'],
							'price'			=> $cart_item['price'],
							'size'			=> $cart_item['size'],
							'quantity'		=> ($quantity + $cart_item['quantity'])
						);
						$found = true;
					} else {
						$product[] = array(
							'id'			=> $cart_item['id'],
							'design'		=> $cart_item['design'],
							'id_color'		=> $cart_item['id_color'],
							'color'			=> $cart_item['color'],
							'color_code'	=> $cart_item['color_code'],
							'title'			=> $cart_item['title'],
							'price'			=> $cart_item['price'],
							'size'			=> $cart_item['size'],
							'quantity'		=> $cart_item['quantity']
						);
					}
				}
				if($found == true){ //Neu 2 san pham giong nhau
					$_SESSION['product'] = $product;
					unset($_SESSION['success']);
					$_SESSION['success']='thanh cong';

				}else{ //Neu 2 san pham khac nhau
					$_SESSION['product'] = array_merge($product,$new_product);
					unset($_SESSION['success']);
					$_SESSION['success']='thanh cong';
				}
			} else {// Neu khong co Session product
				$_SESSION['product'] = $new_product;
				unset($_SESSION['success']);
				$_SESSION['success']='thanh cong';
			}
		} else{
			redirect('http://localhost:8012/teemarket/error');
		}
	}

	public function update_cart(){
		if ($this->input->post('quantityString')){
			$quantityString =  $this->input->post('quantityString');
			$quantityArray = explode("-",$quantityString);

			foreach ($_SESSION['product'] as $keyUpdate => $value) {
				$_SESSION['product'][$keyUpdate]['quantity'] = $quantityArray[$keyUpdate];
			}
			$result = [
				'status' => true,
				'kq'     => $_SESSION['product']
			];
			echo json_encode($result);
		} else{
			redirect('http://localhost:8012/teemarket/error');
		}
	}

	public function remove_product($id,$id_color,$size){
		$found = false;
		if (isset($_SESSION['product'])){
			foreach ($_SESSION['product'] as $key => $value) {
				if(($value['id'] == $id) && ($value['id_color'] == $id_color) && ($value['size'] == $size)){
					$found = true;
					\array_splice($_SESSION['product'],$key,1);
					redirect($_SERVER['HTTP_REFERER']);
				}
			}
			if($_SESSION['product'] == array()){
				unset($_SESSION['product']);
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
		if ($found == false){
			redirect('http://localhost:8012/teemarket/error');
		}
	}

	public function checkout(){
		if (empty($_SESSION['product'])){
			redirect('http://localhost:8012/teemarket/cart');
		} else{
			$dataCategory = $this->Mteemarket->getDataCategory();
			$this->load->view('checkout_view',['category' => $dataCategory]);
		}
	}

	public function insert_order(){
		if ($this->input->post('idString')){
			$email = $this->input->post('email');
			$fullname = $this->input->post('fullname');
			$address = $this->input->post('address');
			$countries = $this->input->post('countries');
			$states = $this->input->post('states');
			$cities = $this->input->post('cities');
			$zip = $this->input->post('zip');
			$idString = $this->input->post('idString');
			$sizeString = $this->input->post('sizeString');
			$idColorString = $this->input->post('idColorString');
			$quantityString = $this->input->post('quantityString');

			$idArray = explode("-",$idString);
			$sizeArray = explode("-",$sizeString);
			$idColorArray = explode("-",$idColorString);
			$quantityArray = explode("-",$quantityString);

			$inserInfoCustomer = $this->Mteemarket->insertInfoCustomer($email, $fullname, $address, $countries, $states, $cities, $zip);
			$id_customer = $inserInfoCustomer[0]['LAST_INSERT_ID()'];

			$order = array(
				array(
				)
			);
			for ($i = 0; $i < count($idArray); $i++){
				$order[$i] = array(
					'id_customer' 	=> $id_customer,
					'id_campaign' 	=> $idArray[$i],
					'size' 			=> $sizeArray[$i],
					'id_color' 		=> $idColorArray[$i],
					'quantity' 		=> $quantityArray[$i]
				);
			}
			foreach ($order as $key => $value) {
				$this->Mteemarket->insertOrder($value['id_customer'],$value['id_campaign'],$value['size'],$value['id_color'],$value['quantity']);
			}
			unset($_SESSION['product']);
		} else{
			redirect('http://localhost:8012/teemarket/error');
		}
	}

	public function campaigns(){
		if (empty($_SESSION['user'])) {
			redirect('http://localhost:8012/teemarket/login');
		} else {
			$this->load->view('campaigns_view');
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
		redirect('http://localhost:8012/teemarket/design');
	}

	public function product()
	{
		if (empty($_SESSION['campaign']['src_image']) || empty($_SESSION['campaign']['color'])) {
			redirect('http://localhost:8012/teemarket/design');
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
			redirect('http://localhost:8012/teemarket/design');
		} else {
			$dataCategory = $this->Mteemarket->getDataCategory();
			$this->load->view('launch_view',['category' => $dataCategory]);
		}
	}

	public function check_url(){
		if ($this->input->post('url')){
			$url = $this->input->post('url');
			$dataUrl = $this->Mteemarket->getDataByIdSellerAndUrl($_SESSION['user']['id'],$url);
			if (!$dataUrl) {
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
			$idColorDesign = $this->Mteemarket->getIdColorByColorCode($_SESSION['campaign']['color'][0]);
			$arrayIdColor = array($idColorDesign);
			for ($i = 0; $i < count($_SESSION['campaign']['resultColors']); $i++){
				if($_SESSION['campaign']['resultColors'][$i] != $_SESSION['campaign']['color'][0]){
					$dataIdColor = $this->Mteemarket->getIdColorByColorCode($_SESSION['campaign']['resultColors'][$i]);
					array_push($arrayIdColor,$dataIdColor);
				}
			}
			$_SESSION['campaign']['title'] = $this->input->post('title');
			$_SESSION['campaign']['description'] = $this->input->post('description');
			$_SESSION['campaign']['url'] = $this->input->post('url');
			$_SESSION['campaign']['category'] = $this->input->post('category');

			$addCamp = $this->Mteemarket->insertCampaign($_SESSION['user']['id'],$_SESSION['campaign']['src_image'],$_SESSION['campaign']['price'],$_SESSION['campaign']['title'],$_SESSION['campaign']['description'],$_SESSION['campaign']['url'],$_SESSION['campaign']['category']);
//			echo "<pre>";
//			print_r ($addCamp);
//			echo "</pre>";
//			die();

			if ($addCamp) {
				$dataIdCamp = $this->Mteemarket->getIdCampByIdSellerAndUrl($_SESSION['user']['id'],$_SESSION['campaign']['url']);
				if ($dataIdCamp) {
					//Insert Campaign Colors
					for ($i = 0; $i < count($arrayIdColor); $i++){
						$addCampColors = $this->Mteemarket->insertCampColors($dataIdCamp[0]['id'],$arrayIdColor[$i][0]['id']);
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
			$this->load->view('orders_view');
		}
	}

	public function account()
	{
		if (empty($_SESSION['user'])) {
			redirect('http://localhost:8012/teemarket/login');
		} else {
			$this->load->view('account_view');
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
			$this->load->view('payment_view');
		}
	}

	public function payouts()
	{
		if (empty($_SESSION['user'])) {
			redirect('http://localhost:8012/teemarket/login');
		} else {
			$this->load->view('payouts_view');
		}
	}

	public function logout()
	{
		// Xóa session name
		unset($_SESSION['user']);
		unset($_SESSION['campaign']);
		redirect('http://localhost:8012/teemarket');
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */

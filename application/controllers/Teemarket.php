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
			$firstImageLinkOfCampaign = $this->Mteemarket->getFirstImageLinkByIdCampaign($dataCampaign[$i]['id']);
			$data = ['idCampaign' => $dataCampaign[$i]['id'], 'image_link' => $firstImageLinkOfCampaign, 'price'=> $dataCampaign[$i]['price'], 'url' => $dataCampaign[$i]['url'], 'title' => $dataCampaign[$i]['title'], 'publicname'=> $dataPublicname[0]['publicname']];
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

		for ($i = 0; $i < count($dataCampaign); $i++ ){
			$dataPublicname = $this->Mteemarket->getPublicnameByIdCamp($dataCampaign[$i]['id']);
			$firstImageLinkOfCampaign = $this->Mteemarket->getFirstImageLinkByIdCampaign($dataCampaign[$i]['id']);
			$data = ['idCampaign' => $dataCampaign[$i]['id'], 'image_link' => $firstImageLinkOfCampaign, 'price'=> $dataCampaign[$i]['price'], 'url' => $dataCampaign[$i]['url'], 'design' => $dataCampaign[$i]['design'], 'title' => $dataCampaign[$i]['title'], 'publicname'=> $dataPublicname[0]['publicname']];
			array_push($allData, $data);
		}
//		echo "<pre>";
//		print_r ($dataCategory);
//		echo "</pre>";
//		die();

		$this->load->view('marketplace_view',['category' => $dataCategory,'allData'=>$allData]);
	}

	public function view_product($publicname,$url)
	{
		if ($this->Mteemarket->getDataByPublicnameAndUrl($publicname, $url)){
			$dataCategory = $this->Mteemarket->getDataCategory();
			$dataProduct = $this->Mteemarket->getDataByPublicnameAndUrl($publicname, $url);
			$dataCampaignColor = $this->Mteemarket->getDataColorsByIdCamp($dataProduct[0]['id']);

			$this->load->view('product_details_view', ['category' => $dataCategory,'campaign_color' => $dataCampaignColor, 'dataCamp'=> $dataProduct]);
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
			$image_link = $this->input->post('image_link');
			$color_code = $this->input->post('color_code');
			$size = $this->input->post('size');
			$quantity = $this->input->post('quantity');

			$dataProduct=$this->Mteemarket->getDataProductById($id);
			$dataColor=$this->Mteemarket->getDataColorByColorCode($color_code);
			$new_product = array(
				array(
					'id'			=> $id,
					'image_link'	=> $image_link,
					'id_color'		=> $dataColor[0]['id'],
					'color'			=> $dataColor[0]['color'],
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
							'image_link'	=> $cart_item['image_link'],
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
							'image_link'	=> $cart_item['image_link'],
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

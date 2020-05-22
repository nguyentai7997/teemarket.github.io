<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Teemarket extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Mteemarket');
	}

	public function index()
	{
//		$res = $this->Mporto->getDataAdidas();
//		$res_1 = $this->Mporto->getDataNike();
//		$res_2 = $this->Mporto->getProductTypeAdidas();
//		$res_3 = $this->Mporto->getProductTypeNike();
		$this->load->view('teemarket_view');
	}

	public function trackOrder()
	{
		$this->load->view('track_order_view');
	}

	public function login()
	{
		$this->load->view('login_view');
	}

	public function checkSignIn(){
		$emailSignIn = $this->input->post('emailSignIn');
		$passwordSignIn=$this->input->post('passwordSignIn');

		$data=$this->Mteemarket->checkDataSignIn($emailSignIn,$passwordSignIn);

		if($data){
			$status = 0;
			echo $status;
			$seller_info = array(
				'fullname' 	=> $data[0]['fullname'],
				'email' 	=> $data[0]['email']
			);
			$this->session->set_userdata('user',$seller_info);
		} else{
			$status = 1;
			echo $status;
		}
	}

	public function register()
	{
		$this->load->view('register_view');
	}

	public function checkPublicName()
	{
		$publicname = $this->input->post('publicname');
		$res = $this->Mteemarket->getDataByPublicName($publicname);
		if(!$res) {
			$status = 0;
			echo $status;
		} else {
			$status = 1;
			echo $status;
		}

	}

	public function checkEmail()
	{
		$email = $this->input->post('email');
		$res = $this->Mteemarket->getDataByEmail($email);
		if(!$res) {
			$status = 0;
			echo $status;
		} else {
			$status = 1;
			echo $status;
		}
	}

	public function insertSeller()
	{
		$fullname = $this->input->post('fullname');
		$publicname=$this->input->post('publicname');
		$email=$this->input->post('email');
		$password=$this->input->post('password');

		$add=$this->Mteemarket->insertSeller($fullname,$publicname,$email,$password);
		if($add){
			$status = 0;
			echo $status;
			$seller_info = array(
				'fullname' 	=> $fullname,
				'email' 	=> $email
			);
			$this->session->set_userdata('user',$seller_info);
		} else{
			$status = 1;
			echo $status;
		}
	}

	public function campaigns()
	{
		if(empty($_SESSION['user'])){
			redirect('http://localhost:8012/teemarket/login');
		} else {
			$this->load->view('campaigns_view');
		}
	}

	public function create()
	{
		$this->load->view('create_view');
	}

	public function orders()
	{
		$this->load->view('orders_view');
	}

	public function account()
	{
		$this->load->view('account_view');
	}

	public function payment()
	{
		$this->load->view('payment_view');
	}

	public function payouts()
	{
		$this->load->view('payouts_view');
	}

	public function logout()
	{
		// Xóa session name
		unset($_SESSION['user']);
		redirect('http://localhost:8012/teemarket/');
	}

	public function forgotPassword()
	{
		$this->load->view('forgot_password_view');
	}

//	public function adidas()
//	{
//		$res = $this->Mporto->getAdidasByOffset(8,0);
//		$res_2 = $this->Mporto->getProductTypeAdidas();
//		$res_3 = $this->Mporto->getProductTypeNike();
//		$res_4 = $this->Mporto->getAllProductByManufacturer(0);
//
//		$limit=8;
//		$countAdidas=ceil(count($res_4)/$limit);
//		$this->load->view('adidas_view',['kq'=>$res,'kq2'=>$res_2,'kq3'=>$res_3,'countAdidas'=>$countAdidas]);
//	}
//	public function PaginationAdidas()
//	{
//		$page=$this->input->post('page');
//		$offset=($page-1)*8;
//		$result=$this->Mporto->getAdidasByOffset(8,$offset);
//
//		$mang=[
//			'status' => true,
//			'kq'     =>$result
//		];
//		echo json_encode($mang);
//	}
//
//	public function nike()
//	{
//		$res = $this->Mporto->getNikeByOffset(8,0);
//		$res_2 = $this->Mporto->getProductTypeAdidas();
//		$res_3 = $this->Mporto->getProductTypeNike();
//		$res_4 = $this->Mporto->getAllProductByManufacturer(1);
//		$limit=8;
//		$countNike=ceil(count($res_4)/$limit);
//		$this->load->view('nike_view',['kq'=>$res,'kq2'=>$res_2,'kq3'=>$res_3,'countNike'=>$countNike]);
//	}
//	public function PaginationNike()
//	{
//		$page=$this->input->post('page');
//		$offset=($page-1)*8;
//		$result=$this->Mporto->getNikeByOffset(8,$offset);
//
//		$mang=[
//			'status' => true,
//			'kq'     =>$result
//		];
//		echo json_encode($mang);
//	}
//
//	public function viewProductType($id_product_type)
//	{
//		// $res = $this->Mporto->getDataAdidas();
//		// $res_1 = $this->Mporto->getDataNike();
//		$res_2 = $this->Mporto->getProductTypeAdidas();
//		$res_3 = $this->Mporto->getProductTypeNike();
//		$res_4 = $this->Mporto->getProductByIdProducType($id_product_type);
//		$this->load->view('porto_product_type_view', ['kq2'=>$res_2,'kq3'=>$res_3,'kq4'=>$res_4]);
//	}
//
//	public function checkLogin()
//	{
//		$username = $this->input->post('username');
//		$password = $this->input->post('password');
//		$_status  = $this->Mporto->checkDataLogin($username,$password);
//		if($_status){
//			$user_info = array(
//				'id_user'  => $_status[0]['id_user'],
//				'username' => $username,
//				'password' => $password
//			);
//			$this->session->set_userdata('user',$user_info);
//			$_status2 = $this->Mporto->getProductByIdUser($user_info['id_user']);
//			foreach ($_status2 as $key => $value) {
//				$res_product = $this->Mporto->getDataById($value['id_product']);
//				$_SESSION['product'][$key] = array(
//					'id_product' => $value['id_product'],
//					'product_name'=>$res_product[0]['product_name'],
//					'product_price'=>$res_product[0]['product_price'],
//					'product_image'=>$res_product[0]['product_image'],
//					'size' => $value['size'],
//					'quantity'=>$value['quantity'],
//				);
//			}
//			$result=[
//				'status' => true,
//				'kq'     =>'success'
//			];
//			echo json_encode($result);
//		}
//		else{
//			$result=[
//				'status' => true,
//				'kq'     =>'fail'
//			];
//			echo json_encode($result);
//		}
//	}



//	public function viewProductDetail($id)
//	{
//		$kq = $this->Mporto->getDataById($id);
//		$res_1 = $this->Mporto->getSizeById($id);
//		$res_2 = $this->Mporto->getProductTypeAdidas();
//		$res_3 = $this->Mporto->getProductTypeNike();
//		$res_4 = $this->Mporto->getGalleryById($id);
//		$this->load->view('product_detail_view',['data'=>$kq,'kq1'=>$res_1,'kq2'=>$res_2,'kq3'=>$res_3,'kq4'=>$res_4]);
//	}
//
//	public function addToCart()
//	{
//		$id_product = $this->input->post('id_product');
//		$size = $this->input->post('size');
//		$quantity = $this->input->post('quantity');
//		$mang=$this->Mporto->getDataById($id_product);
//
//		$new_product=array(
//			array(
//				'id_product'=>$id_product,
//				'product_name'=>$mang[0]['product_name'],
//				'product_price'=>$mang[0]['product_price'],
//				'product_image'=>$mang[0]['product_image'],
//				'size' => $size,
//				'quantity'=>$quantity,
//			)
//		);
//		if(isset($_SESSION['product'])){
//			$found=false;
//			foreach($_SESSION['product'] as $cart_item){
//				if(($cart_item['id_product'] == $id_product) && ($cart_item['size'] == $size) ){
//					$product[]=array(
//						'id_product'=>$cart_item['id_product'],
//						'product_name'=>$cart_item['product_name'],
//						'product_image'=>$cart_item['product_image'],
//						'product_price'=>$cart_item['product_price'],
//						'size'=>$cart_item['size'],
//						'quantity'=>($quantity + $cart_item['quantity'])
//					);
//					$found=true;
//
//				} else {
//					$product[]=array(
//						'id_product'=>$cart_item['id_product'],
//						'product_name'=>$cart_item['product_name'],
//						'product_image'=>$cart_item['product_image'],
//						'product_price'=>$cart_item['product_price'],
//						'size'=>$cart_item['size'],
//						'quantity'=>$cart_item['quantity']
//					);
//				}
//			}
//			if($found==false){
//				$_SESSION['product']=array_merge($product,$new_product);
//				if($_SESSION['user']){
//					$addProductToCart = $this->Mporto->insertCart($id_product,$_SESSION['user']['id_user'],$size,$quantity);
//				}
//				unset($_SESSION['success']);
//				$_SESSION['success']='thanh cong';
//			}else{
//				$_SESSION['product']=$product;
//				if($_SESSION['user']){
//					$updateProductToCart = $this->Mporto->updateCart($id_product,$_SESSION['user']['id_user'],$size,$quantity + $cart_item['quantity']);
//				}
//				unset($_SESSION['success']);
//				$_SESSION['success']='thanh cong';
//			}
//		} else {
//			$_SESSION['product'] = $new_product;
//			if($_SESSION['user']){
//				$addProductToCart = $this->Mporto->insertCart($id_product,$_SESSION['user']['id_user'],$size,$quantity);
//			}
//			unset($_SESSION['success']);
//			$_SESSION['success']='thanh cong';
//		}
//
//		redirect($_SERVER['HTTP_REFERER']);
//	}
//
//	public function cart()
//	{
//		$res = $this->Mporto->getDataAdidas();
//		$res_1 = $this->Mporto->getDataNike();
//		$res_2 = $this->Mporto->getProductTypeAdidas();
//		$res_3 = $this->Mporto->getProductTypeNike();
//		$this->load->view('cart_view',['kq'=>$res,'kq1'=>$res_1,'kq2'=>$res_2,'kq3'=>$res_3]);
//	}
//	public function updateCart()
//	{
//		$qty=$this->input->post('quantity');
//		$mangSoLuong=explode("-",$qty);
//
//
//		if(isset($_SESSION['user'])){
//			foreach ($_SESSION['product'] as $key => $value) {
//				$_SESSION['product'][$key]['quantity']=$mangSoLuong[$key];
//				$this->Mporto->updateCart($value['id_product'],$_SESSION['user']['id_user'],$value['size'],$_SESSION['product'][$key]['quantity']);
//			}
//			$result = [
//				'status' => true,
//				'kq'     => $_SESSION['product']
//			];
//			echo json_encode($result);
//		} else {
//			foreach ($_SESSION['product'] as $key => $value) {
//				$_SESSION['product'][$key]['quantity']=$mangSoLuong[$key];
//			}
//
//			$result = [
//				'status' => true,
//				'kq'     => $_SESSION['product']
//			];
//			echo json_encode($result);
//		}
//
//	}
//	public function removeItem($id_product,$size)
//	{
//		if(isset($_SESSION['user'])){
//			$this->Mporto->deleteItem($id_product,$size);
//			foreach ($_SESSION['product'] as $key => $value) {
//				if(($value['id_product'] == $id_product) && ($value['size'] == $size)){
//					unset($_SESSION['product'][$key]);
//				}
//			}
//			if($_SESSION['product'] == array()){
//				unset($_SESSION['product']);
//			}
//			redirect($_SERVER['HTTP_REFERER']);
//		} else {
//			foreach ($_SESSION['product'] as $key => $value) {
//				if(($value['id_product'] == $id_product) && ($value['size'] == $size)){
//					unset($_SESSION['product'][$key]);
//				}
//			}
//			if($_SESSION['product'] == array()){
//				unset($_SESSION['product']);
//			}
//			redirect($_SERVER['HTTP_REFERER']);
//		}
//	}
//
//	public function checkout()
//	{
//		if(isset($_SESSION['product'])){
//			$this->load->view('checkout_view');
//		} else {
//			$this->load->view('cart_view');
//		}
//	}
//
//	public function orderSuccess()
//	{
//		if(isset($_SESSION['product'])){
//			$name=$this->input->post('name');
//			$address=$this->input->post('address');
//			$phone=$this->input->post('phone');
//			$shipping_method = $this->input->post('shipping_method');
//
//			$this->Mporto->insertBill($name,$address,$phone,$shipping_method);
//
//			$id_bill=$this->Mporto->getMaxIdBill();
//
//			foreach ($_SESSION['product'] as $key => $value) {
//				$this->Mporto->insertBillDetail($id_bill[0]['MAX(id_bill)'],$value['id_product'],$value['size'],$value['quantity']);
//			}
//			unset($_SESSION['product']);
//			$this->load->view('order_success_view');
//		} else {
//			$this->load->view('cart_view');
//		}
//
//	}
//
//	public function clearCart()
//	{
//		unset($_SESSION['product']);
//		redirect($_SERVER['HTTP_REFERER']);
//	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */

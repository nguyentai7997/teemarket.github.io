<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'teemarket';
//$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'teemarket/login';
$route['check_sign_in'] = 'teemarket/check_sign_in';
$route['register'] = 'teemarket/register';
$route['check_public_name'] = 'teemarket/check_public_name';
$route['check_email'] = 'teemarket/check_email';
$route['insert_seller'] = 'teemarket/insert_seller';

$route['campaigns'] = 'teemarket/campaigns';
$route['design'] = 'teemarket/design';
$route['get_design'] = 'teemarket/get_design';
$route['remove_design'] = 'teemarket/remove_design';
$route['product'] = 'teemarket/product';
$route['get_product'] = 'teemarket/get_product';
$route['launch'] = 'teemarket/launch';
$route['check_url'] = 'teemarket/check_url';
$route['get_launch'] = 'teemarket/get_launch';
$route['orders'] = 'teemarket/orders';
$route['account'] = 'teemarket/account';
$route['change_password'] = 'teemarket/change_password';
$route['payment'] = 'teemarket/payment';
$route['payouts'] = 'teemarket/payouts';
$route['logout'] = 'teemarket/logout';

$route['(:any)/(:any)'] = 'teemarket/view_product/$1/$2';
$route['add_to_cart'] = 'teemarket/add_to_cart';
$route['cart'] = 'teemarket/cart';
$route['update_cart'] = 'teemarket/update_cart';
$route['remove_product/(:num)/(:num)/(:any)'] = 'teemarket/remove_product/$1/$2/$3';
$route['checkout'] = 'teemarket/checkout';
$route['insert_order'] = 'teemarket/insert_order';
$route['order_success'] = 'teemarket/order_success';
$route['(:any)'] = 'teemarket/error';

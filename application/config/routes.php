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
$route['default_controller'] = 'uicontroller';

// frontend
$route['index'] = 'uicontroller/index';
$route['men'] = 'uicontroller/men';
$route['women'] = 'uicontroller/women';
$route['about'] = 'uicontroller/about';
$route['contact'] = 'uicontroller/contact';
$route['cart'] = 'uicontroller/cart';
$route['product-detail/(:any)'] = 'uicontroller/product_detail/$1';
$route['product-detail/(:any)/(:any)'] = 'uicontroller/product_detail/$1/$2';

// authentication
$route['login'] = 'authcontroller/login';
$route['register'] = 'authcontroller/register';
$route['verify_otp_page'] = 'authcontroller/verify_otp_page';
$route['send_mobile_otp'] = 'authcontroller/send_mobile_otp';
$route['check_mobile_otp'] = 'authcontroller/check_mobile_otp';
$route['send_email_otp'] = 'authcontroller/send_email_otp';
$route['check_email_otp'] = 'authcontroller/check_email_otp';
$route['completeverify'] = 'authcontroller/completeverify';
$route['forgot_pass'] = 'authcontroller/forgot_pass';
$route['forgot_email'] = 'authcontroller/forgot_email';
$route['forgot_send_mobile_otp'] = 'authcontroller/forgot_send_mobile_otp';
$route['forgot_check_mobile_otp'] = 'authcontroller/forgot_check_mobile_otp';
$route['forgot_send_email_otp'] = 'authcontroller/forgot_send_email_otp';
$route['forgot_check_email_otp'] = 'authcontroller/forgot_check_email_otp';
$route['change_pass'] = 'authcontroller/change_pass';

// backend
$route['dashboard'] = 'dashcontroller/dashboard';
$route['products'] = 'dashcontroller/products';
$route['products_add'] = 'dashcontroller/products_add';
$route['product_edit/(:any)'] = 'dashcontroller/product_edit/$1';
$route['product_delete/(:any)'] = 'dashcontroller/product_delete/$1';

$route['varients/(:any)'] = 'dashcontroller/varients/$1';
$route['varients_add/(:any)'] = 'dashcontroller/varients_add/$1';
$route['varient_edit/(:num)/(:num)'] = 'dashcontroller/varient_edit/$1/$2';
$route['varient_edit/(:num)'] = 'dashcontroller/varient_edit/$1';
$route['varient_delete/(:any)/(:any)'] = 'dashcontroller/varient_delete/$1/$2';

$route['images/(:num)/(:num)'] = 'dashcontroller/images/$1/$2';
$route['images/(:num)'] = 'dashcontroller/images/$1';
$route['images_add/(:any)'] = 'dashcontroller/images_add/$1';
$route['image_edit/(:num)/(:num)'] = 'dashcontroller/image_edit/$1/$2';
$route['image_edit/(:num)'] = 'dashcontroller/image_edit/$1';
$route['image_delete/(:any)/(:any)'] = 'dashcontroller/image_delete/$1/$2';

$route['category'] = 'dashcontroller/category';
$route['category_add'] = 'dashcontroller/category_add';
$route['category_update/(:any)'] = 'dashcontroller/category_update/$1';

// extras
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

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

// authentication
$route['login'] = 'uicontroller/login';
$route['register'] = 'uicontroller/register';
$route['verify_otp_page'] = 'uicontroller/verify_otp_page';
$route['send_mobile_otp'] = 'uicontroller/send_mobile_otp';
$route['check_mobile_otp'] = 'uicontroller/check_mobile_otp';
$route['send_email_otp'] = 'uicontroller/send_email_otp';
$route['check_email_otp'] = 'uicontroller/check_email_otp';
$route['completeverify'] = 'uicontroller/completeverify';
$route['forgot_pass'] = 'uicontroller/forgot_pass';
$route['forgot_email'] = 'uicontroller/forgot_email';
$route['forgot_send_mobile_otp'] = 'uicontroller/forgot_send_mobile_otp';
$route['forgot_check_mobile_otp'] = 'uicontroller/forgot_check_mobile_otp';
$route['forgot_send_email_otp'] = 'uicontroller/forgot_send_email_otp';
$route['forgot_check_email_otp'] = 'uicontroller/forgot_check_email_otp';
$route['change_pass'] = 'uicontroller/change_pass';


$route['login_check'] = 'uicontroller/login_check';




// backend
$route['dashboard'] = 'dashcontroller/dashboard';
$route['products'] = 'dashcontroller/products';
$route['add_products'] = 'dashcontroller/add_products';

// extras
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthController extends CI_Controller
{
	public function __construct()
	{
		/*call CodeIgniter's default Constructor*/
		parent::__construct();

		/*load database libray manually*/
		$this->load->database();

		/*load Model*/
		$this->load->model('auth_model');
		// $this->load->model('dashboard_model');
		/*load session */
		$this->load->library('session');
	}
	//Login
	public function login(){
		if ($this->input->server('REQUEST_METHOD') === 'GET') {
			$data['title'] = "login_check";
			$data['content'] = $this->load->view('auth/pages/login', $data, true);
			$this->load->view('auth/layout/cst_vfy_layout', $data);
		} elseif ($this->input->server('REQUEST_METHOD') === 'POST') {
			$data['is_login']=$this->auth_model->login_check($_POST);
			if($data['is_login']=='true'){
				$data['content'] = $this->load->view('customer/admin/pages/home', $data, true);
				$this->load->view('customer/admin/layout/customer_layout', $data);
			}
			else{
				$data['content'] = $this->load->view('auth/pages/login', $data, true);
				$this->load->view('auth/layout/cst_vfy_layout', $data);
			}
		}
	}

	//Registration
	public function register()
	{
		if ($this->input->server('REQUEST_METHOD') === 'GET') {
			$data['title'] = "LOGIN";
			$data['content'] = $this->load->view('auth/pages/register', $data, true);
			$this->load->view('auth/layout/cst_vfy_layout', $data);
		} elseif ($this->input->server('REQUEST_METHOD') === 'POST') {
			$this->auth_model->register_user($_POST);
			redirect("verify_otp_page");
		}
	}
	public function verify_otp_page()
	{
		if ($this->input->server('REQUEST_METHOD') === 'GET') {
			$data['title'] = "verify_otp";
			$data['content'] = $this->load->view('auth/pages/verifyotp', $data, true);
			$this->load->view('auth/layout/cst_vfy_layout', $data);
		} elseif ($this->input->server('REQUEST_METHOD') === 'POST') {
			$this->auth_model->verify_otp($_POST);
			redirect("verify_otp_page");
		}
	}
	public function send_mobile_otp()
	{
		$data['title'] = "verify_mobile";
		$this->auth_model->upload_mobile_otp($_POST);
		$data['content'] = $this->load->view('auth/pages/verifyotp', $data, true);
		$this->load->view('auth/layout/cst_vfy_layout', $data);
	}
	public function check_mobile_otp()
	{
		$data['title'] = "verify_mobile";
		$this->auth_model->check_mobile_otp($_POST);
		$data['content'] = $this->load->view('auth/pages/verifyotp', $data, true);
		$this->load->view('auth/layout/cst_vfy_layout', $data);
	}
	public function send_email_otp()
	{
		$data['title'] = "verify_email";
		$this->auth_model->upload_email_otp($_POST);
		$data['content'] = $this->load->view('auth/pages/verifyotp', $data, true);
		$this->load->view('auth/layout/cst_vfy_layout', $data);
	}
	public function check_email_otp()
	{
		$data['title'] = "verify_email";
		$this->auth_model->check_email_otp($_POST);
		$data['content'] = $this->load->view('auth/pages/verifyotp', $data, true);
		$this->load->view('auth/layout/cst_vfy_layout', $data);
	}
	public function completeverify(){
		$data['title'] = "verify_email";
		$this->auth_model->completeverify($_POST);
		$data['content'] = $this->load->view('auth/pages/login', $data, true);
		$this->load->view('auth/layout/cst_vfy_layout', $data);
	}

	// forgot password

	public function forgot_pass()
	{
		if ($this->input->server('REQUEST_METHOD') === 'GET') {
			$data['title'] = "forgot_pass";
			$data['content'] = $this->load->view('auth/pages/forgot_pass', $data, true);
			$this->load->view('auth/layout/cst_vfy_layout', $data);
		} elseif ($this->input->server('REQUEST_METHOD') === 'POST') {
			$this->auth_model->forgot_pass($_POST);
			redirect("login");
		}
	}
	public function forgot_email()
	{
		if ($this->input->server('REQUEST_METHOD') === 'GET') {
			$data['title'] = "forgot_email";
			$data['content'] = $this->load->view('auth/pages/forgot_email', $data, true);
			$this->load->view('auth/layout/cst_vfy_layout', $data);
		} elseif ($this->input->server('REQUEST_METHOD') === 'POST') {
			$this->auth_model->forgot_email($_POST);
			redirect("login");
		}
	}
	public function forgot_send_mobile_otp(){
		if ($this->input->server('REQUEST_METHOD') === 'GET') {
			$data['title'] = "forgot_send_mobile_otp";
			$data['content'] = $this->load->view('auth/pages/forgot_pass', $data, true);
			$this->load->view('auth/layout/cst_vfy_layout', $data);
		} elseif ($this->input->server('REQUEST_METHOD') === 'POST') {
			$this->auth_model->forgot_send_mobile_otp($_POST);
			redirect("forgot_pass");
		}
	}
	public function forgot_check_mobile_otp()
	{
		$data['title'] = "forgot_check_mobile_otp";
		$data['forgot_otp_check']=$this->auth_model->forgot_check_mobile_otp($_POST);
		if($data['forgot_otp_check']==true){
			redirect('change_pass');
		}
		else{
			redirect('forgot_pass');
		}
	}
	public function forgot_send_email_otp(){
		if ($this->input->server('REQUEST_METHOD') === 'GET') {
			$data['title'] = "forgot_send_email_otp";
			$data['content'] = $this->load->view('auth/pages/forgot_email', $data, true);
			$this->load->view('auth/layout/cst_vfy_layout', $data);
		} elseif ($this->input->server('REQUEST_METHOD') === 'POST') {
			$this->auth_model->forgot_send_email_otp($_POST);
			redirect("forgot_email");
		}
	}
	public function forgot_check_email_otp()
	{
		$data['title'] = "forgot_check_mobile_otp";
		$data['forgot_otp_check']=$this->auth_model->forgot_check_email_otp($_POST);
		if($data['forgot_otp_check']==true){
			redirect('change_pass');
		}
		else{
			redirect('forgot_email');
		}
	}
	public function change_pass(){
		if($this->input->server('REQUEST_METHOD') === 'GET'){
			$data['title'] = "change_pass";
			$data['content'] = $this->load->view('auth/pages/change_pass', $data, true);
			$this->load->view('auth/layout/cst_vfy_layout', $data);
		}
		elseif($this->input->server('REQUEST_METHOD') === 'POST')
		{
			$pass_change=$this->auth_model->change_pass($_POST);
			var_dump($pass_change);
			if($pass_change === true){
				redirect('login');
			}
			else{
				redirect('change_pass');
			}
		}
		
	}
	
}
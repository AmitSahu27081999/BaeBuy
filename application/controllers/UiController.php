<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UiController extends CI_Controller
{
	public function __construct()
	{
		/*call CodeIgniter's default Constructor*/
		parent::__construct();

		/*load database libray manually*/
		$this->load->database();

		/*load Model*/
		$this->load->model('customer_model');
		// $this->load->model('dashboard_model');
		/*load session */
		$this->load->library('session');
	}
	public function index()
	{
		$data['title'] = "UI";

		$data['content'] = $this->load->view('customer/admin/pages/home', $data, true);
		$this->load->view('customer/admin/layout/customer_layout', $data);
	}
	public function login()
	{
		$data['title'] = "LOGIN";
		$data['content'] = $this->load->view('auth/pages/login', $data, true);
		$this->load->view('auth/layout/cst_vfy_layout', $data);
	}
	public function register()
	{
		if ($this->input->server('REQUEST_METHOD') === 'GET') {
			$data['title'] = "LOGIN";
			$data['content'] = $this->load->view('auth/pages/register', $data, true);
			$this->load->view('auth/layout/cst_vfy_layout', $data);
		} elseif ($this->input->server('REQUEST_METHOD') === 'POST') {
			$this->customer_model->register_user($_POST);
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
			$this->customer_model->verify_otp($_POST);
			redirect("verify_otp_page");
		}
	}
	public function send_mobile_otp()
	{
		$data['title'] = "verify_mobile";
		$this->customer_model->upload_mobile_otp($_POST);
		$data['content'] = $this->load->view('auth/pages/verifyotp', $data, true);
		$this->load->view('auth/layout/cst_vfy_layout', $data);
	}
	public function check_mobile_otp()
	{
		$data['title'] = "verify_mobile";
		$this->customer_model->check_mobile_otp($_POST);
		$data['content'] = $this->load->view('auth/pages/verifyotp', $data, true);
		$this->load->view('auth/layout/cst_vfy_layout', $data);
	}

	
}

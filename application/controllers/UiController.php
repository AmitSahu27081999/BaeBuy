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
		$this->load->model('ui_model');
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
	public function men()
	{
		$data['title'] = "Men Collection";

		$data['content'] = $this->load->view('customer/admin/pages/men', $data, true);
		$this->load->view('customer/admin/layout/customer_layout', $data);
	}
	public function women()
	{
		$data['title'] = "Men Collection";

		$data['content'] = $this->load->view('customer/admin/pages/women', $data, true);
		$this->load->view('customer/admin/layout/customer_layout', $data);
	}
	public function about()
	{
		$data['title'] = "Men Collection";

		$data['content'] = $this->load->view('customer/admin/pages/about', $data, true);
		$this->load->view('customer/admin/layout/customer_layout', $data);
	}
	public function contact()
	{
		$data['title'] = "Men Collection";

		$data['content'] = $this->load->view('customer/admin/pages/contact', $data, true);
		$this->load->view('customer/admin/layout/customer_layout', $data);
	}
	public function cart()
	{
		$data['title'] = "Men Collection";

		$data['content'] = $this->load->view('customer/admin/pages/cart', $data, true);
		$this->load->view('customer/admin/layout/customer_layout', $data);
	}

	
}

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
		$this->load->model('dashboard_model');
		$this->load->model('category_model');
		$this->load->model('auth_model');
		/*load session */
		$this->load->library('session');
	}
	public function index()
	{
		$data['title'] = "BaeBuy";

		$selected =  $this->dashboard_model->select();
		foreach ($selected as $key => $value) {
			$selected[$key]->varient =  $this->dashboard_model->show_varients($value->id);
			foreach ($selected[$key]->varient as $key1 => $value1) {
				$selected[$key]->varient[$key1]->images = $this->dashboard_model->show_images($value1->id);
			}
		}
		$data['selected'] = $selected;
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
	public function product_detail($id)
	{
		$data['title'] = "Product Detail";

		$selected =  $this->dashboard_model->select_by_id($id);
		$selected->varient =  $this->dashboard_model->show_varients($selected->id);
		foreach ($selected->varient as $key => $value) {
			$selected->varient[$key]->images = $this->dashboard_model->show_images($value->id);
		}
		// var_dump($selected);
		// die;

		$data['selected'] = $selected;

		$data['content'] = $this->load->view('customer/admin/pages/product_detail', $data, true);
		$this->load->view('customer/admin/layout/customer_layout', $data);
	}
}

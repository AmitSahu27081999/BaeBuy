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

		$selected =  $this->ui_model->select();
		foreach ($selected as $key => $value) {
			$selected[$key]->varient =  $this->ui_model->show_varients($value->id);
			foreach ($selected[$key]->varient as $key1 => $value1) {
				$selected[$key]->varient[$key1]->images = $this->ui_model->show_images($value1->id);
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
	public function product_detail($id,$varient_id="")
	{
		$data['title'] = "Product Detail";
		
		// var_dump('Product---------------------------------------------------------------------------');
		$selected =  $this->ui_model->select_product_by_id($id);
		// var_dump($selected);

		// var_dump('$varient_id-------------------------------------------------------------------------');
		if($varient_id==""){
			$varient_id =  $this->ui_model->select_varient($id);
			$varient_id = $varient_id[0]->id;
		}
		// var_dump($varient_id);

		// var_dump('Choosen_varient---------------------------------------------------------------------');
		$varient =  $this->ui_model->select_varient_by_id($selected->id,$varient_id);
		foreach ($varient as $key => $value) {
			$varient[$key]->images = $this->ui_model->show_images($value->id);
		}
		// var_dump($varient);

		// var_dump('$varients---------------------------------------------------------------------------');
		$varients =  $this->ui_model->show_varients($selected->id);
		
		foreach ($varients as $key => $value) {
			$varients[$key]->images = $this->ui_model->show_images_by_id($value->id);
		}
		// var_dump($varients);
		
		// PUT-----------------------
		$data['selected'] = $selected;
		$data['varient_id'] = $varient_id;
		$data['varient'] = $varient;
		$data['varients'] = $varients;
		// var_dump('DATA------------------------------------------------------------------------------');
		// var_dump($data);
		// die;
		
		$data['content'] = $this->load->view('customer/admin/pages/product_detail', $data, true);
		$this->load->view('customer/admin/layout/customer_layout', $data);
	}
}

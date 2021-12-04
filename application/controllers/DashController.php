<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashController extends CI_Controller
{
	public function __construct()
	{
		/*call CodeIgniter's default Constructor*/
		parent::__construct();

		/*load database libray manually*/
		$this->load->database();

		/*load Model*/
		$this->load->model('dashboard_model');
		// $this->load->model('dashboard_model');
		/*load session */
		$this->load->library('session');
	}
	public function dashboard()
	{
		$data['title'] = "Dashboard";

		$data['content'] = $this->load->view('product_admin/pages/products/product_details', $data, true);
		$this->load->view('product_admin/layout/dashboard_layout', $data);
	}

	//Products   ----------------------------------------------------------------

	public function products()
	{
		$data['title'] = "Products";

		$data['selected'] =  $this->dashboard_model->select();

		$data['content'] = $this->load->view('product_admin/pages/products/products', $data, true);
		$this->load->view('product_admin/layout/dashboard_layout', $data);
	}
	public function products_add()
	{
		if ($this->input->server('REQUEST_METHOD') === 'GET') {
			$data['title'] = "Add_products";
			$data['content'] = $this->load->view('product_admin/pages/products/products_add', $data, true);
			$this->load->view('product_admin/layout/dashboard_layout', $data);
		} elseif ($this->input->server('REQUEST_METHOD') === 'POST') {
			$this->dashboard_model->products_add($_POST);
			redirect("products");
		}
	}
	public function product_edit($id)
	{
		$data['title'] = "update";
		$data['id'] = $id;

		$data['content'] = $this->load->view('admin/pages/products/edit', $data, true);
		$this->load->view('admin/layouts/dashboard', $data);
	}
	public function product_update($id)
	{
		if ($this->input->server('REQUEST_METHOD') === 'GET') {
			$data['title'] = "update";
			$data['id'] = $id;

			$data['content'] = $this->load->view('admin/pages/products/edit', $data, true);
			$this->load->view('admin/layouts/dashboard', $data);
		} elseif ($this->input->server('REQUEST_METHOD') === 'POST') {
			$this->dashboard_model->update($id);
			redirect("products");
		}		
	}
	public function product_delete($id)
	{
		$data['title'] = "delete";
		$this->dashboard_model->delete($id);
		redirect("products");
	}
}

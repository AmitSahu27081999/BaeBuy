<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashController extends CI_Controller {
	public function dashboard()
	{	$data['title'] = "Dashboard";

		$data['content']=$this->load->view('product_admin/admin/pages/product_details',$data,true);
		$this->load->view('product_admin/admin/layout/dashboard_layout',$data);
	}
	public function products()
	{	$data['title'] = "Products";

		$data['content']=$this->load->view('product_admin/admin/pages/products',$data,true);
		$this->load->view('product_admin/admin/layout/dashboard_layout',$data);
	}
	public function add_products()
	{
		if ($this->input->server('REQUEST_METHOD') === 'GET') {
			$data['title'] = "Add_products";
			$data['content'] = $this->load->view('product_admin/admin/pages/add_products', $data, true);
			$this->load->view('product_admin/admin/layout/dashboard_layout', $data);
		} elseif ($this->input->server('REQUEST_METHOD') === 'POST') {
			$this->customer_model->register_user($_POST);
			redirect("verify_otp_page");
		}
	}
}
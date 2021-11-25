<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashController extends CI_Controller {
	public function dashboard()
	{	$data['title'] = "Dashboard";

		$data['content']=$this->load->view('product_admin/admin/pages/product_details',$data,true);
		$this->load->view('product_admin/admin/layout/dashboard_layout',$data);
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UiController extends CI_Controller {
	public function index()
	{	$data['title'] = "UI";

		$data['content']=$this->load->view('customer/admin/pages/home',$data,true);
		$this->load->view('customer/admin/layout/customer_layout',$data);
	}
}

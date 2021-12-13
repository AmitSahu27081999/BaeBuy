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
		$this->load->model('category_model');
		/*load session */
		$this->load->library('session');
	}
	public function dashboard()
	{
		$data['title'] = "Dashboard";

		$data['content'] = $this->load->view('product_admin/pages/home/home', $data, true);
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
			$data['title'] = "Add Product";
			$data['selected_category'] =  $this->category_model->select();
			$data['content'] = $this->load->view('product_admin/pages/products/products_add', $data, true);
			$this->load->view('product_admin/layout/dashboard_layout', $data);
		} elseif ($this->input->server('REQUEST_METHOD') === 'POST') {

			$name = $this->input->post('name');
			$brand = $this->input->post('brand');
			$gender = $this->input->post('gender');
			$category = $this->input->post('category');

			$data = array(
				'name' => $name,
				'brand' => $brand,
				'gender' => $gender,
				'category' => $category

			);
			$this->dashboard_model->products_add($data);
			redirect("products");
		}
	}
	public function product_edit($id)
	{
		if ($this->input->server('REQUEST_METHOD') === 'GET') {
			$data['title'] = "Product Edit";
			$data['id'] = $id;
			$data['selected_edit'] =  $this->dashboard_model->select_edit($id);
			$data['selected_category'] =  $this->category_model->select();
			$data['content'] = $this->load->view('product_admin/pages/products/product_edit', $data, true);
			$this->load->view('product_admin/layout/dashboard_layout', $data);
		} elseif ($this->input->server('REQUEST_METHOD') === 'POST') {

			$name = $this->input->post('name');
			$brand = $this->input->post('brand');
			$gender = $this->input->post('gender');
			$category = $this->input->post('category');

			$data = array(
				'name' => $name,
				'brand' => $brand,
				'gender' => $gender,
				'category' => $category
			);
			$this->dashboard_model->product_update($data, $id);
			redirect("products");
		}
	}
	public function product_delete($id)
	{
		$data['title'] = "delete";
		$this->dashboard_model->product_delete($id);
		redirect("products");
	}

	//Product Varients ---------------------------------------------------------------------------------

	public function varients($id)
	{
		$data['title'] = "Show_Varients";
		$data['id'] = $id;
		$data['selected'] =  $this->dashboard_model->show_varients($id);
		$data['content'] = $this->load->view('product_admin/pages/products/varients', $data, true);
		$this->load->view('product_admin/layout/dashboard_layout', $data);
	}
	public function varients_add($id)
	{
		if ($this->input->server('REQUEST_METHOD') === 'GET') {
			$data['title'] = "Add_Varients";
			$data['id'] = $id;
			$data['content'] = $this->load->view('product_admin/pages/products/varients_add', $data, true);
			$this->load->view('product_admin/layout/dashboard_layout', $data);
		} elseif ($this->input->server('REQUEST_METHOD') === 'POST') {

			$color = $this->input->post('color');
			$price = $this->input->post('price');
			$stock = $this->input->post('stock');
			$size = $this->input->post('size');

			$length = count($this->input->post('size'));

			for ($i = 0; $i < $length; $i++) {
				$data1 = array(
					'product_id' => $id,
					'size' => $size[$i],
					'color' => $color[$i],
					'price' => $price[$i],
					'stock' => $stock[$i]
				);
				$this->dashboard_model->varients_add($data1, $id);
			}
			redirect("products");
		}
	}
	public function varient_edit($id)
	{
		if ($this->input->server('REQUEST_METHOD') === 'GET') {
			$data['title'] = "Edit Varient";
			$data['id'] = $id;
			$data['select_varient_edit'] =  $this->dashboard_model->select_varient_edit($id);
			$data['content'] = $this->load->view('product_admin/pages/products/varient_edit', $data, true);
			$this->load->view('product_admin/layout/dashboard_layout', $data);
		} elseif ($this->input->server('REQUEST_METHOD') === 'POST') {

			$color = $this->input->post('color');
			$price = $this->input->post('price');
			$stock = $this->input->post('stock');
			$size = $this->input->post('size');

			$length = count($this->input->post('size'));

			for ($i = 0; $i < $length; $i++) {
				$data1 = array(
					'size' => $size[$i],
					'color' => $color[$i],
					'price' => $price[$i],
					'stock' => $stock[$i]
				);
				$this->dashboard_model->varient_update($data1, $id);
			}
			redirect("products");
		}
	}
	public function varient_delete($id)
	{
		$data['title'] = "Delete Varient";
		$this->dashboard_model->Varient_delete($id);
		redirect("products");
	}

	//Product Images ---------------------------------------------------------------------------------
	public function images($id)
	{
		$data['title'] = "Show Images";
		$data['id'] = $id;
		$data['selected_images'] =  $this->dashboard_model->show_images($id);
		$data['content'] = $this->load->view('product_admin/pages/products/images', $data, true);
		$this->load->view('product_admin/layout/dashboard_layout', $data);
	}
	public function images_add($id)
	{
		if ($this->input->server('REQUEST_METHOD') === 'GET') {
			$data['title'] = "Add_Image";
			$data['id'] = $id;
			$data['content'] = $this->load->view('product_admin/pages/products/images_add', $data, true);
			$this->load->view('product_admin/layout/dashboard_layout', $data);
		} elseif ($this->input->server('REQUEST_METHOD') === 'POST') {

			$length = count($_FILES["image"]["name"]);

			for ($i = 0; $i < $length; $i++) {
				$filename = $_FILES["image"]["tmp_name"][$i];
				$destination = "assets/uploads/" . $_FILES["image"]["name"][$i];
				move_uploaded_file($filename, $destination);
				$img[$i] = $_FILES["image"]["name"][$i];
				$data2 = array(
					'product_id' => $id,
					'image' => $img[$i]
				);
				$this->dashboard_model->images_add($data2);
			}
			redirect("products");
		}
	}
	public function image_edit($id)
	{
		if ($this->input->server('REQUEST_METHOD') === 'GET') {
			$data['title'] = "Add_Image";
			$data['id'] = $id;
			// die('edit show');
			$data['content'] = $this->load->view('product_admin/pages/products/image_edit', $data, true);
			$this->load->view('product_admin/layout/dashboard_layout', $data);
		} elseif ($this->input->server('REQUEST_METHOD') === 'POST') {

			$length = count($_FILES["image"]["name"]);

			for ($i = 0; $i < $length; $i++) {
				$filename = $_FILES["image"]["tmp_name"][$i];
				$destination = "assets/uploads/" . $_FILES["image"]["name"][$i];
				move_uploaded_file($filename, $destination);
				$img[$i] = $_FILES["image"]["name"][$i];
				$data2 = array(
					'image' => $img[$i]
				);
				$this->dashboard_model->image_update($data2,$id);
			}
			redirect("products");
		}
	}
	public function image_delete($id)
	{
		$data['title'] = "Delete Image";
		$this->dashboard_model->image_delete($id);
		redirect("products");
	}

	//Category-----------------------------------------------------------------------------------------


	public function category()
	{
		$data['title'] = "Categories";

		$data['selected_category'] =  $this->category_model->select();

		$data['content'] = $this->load->view('product_admin/pages/products/category', $data, true);
		$this->load->view('product_admin/layout/dashboard_layout', $data);
	}

	public function category_add()
	{
		if ($this->input->server('REQUEST_METHOD') === 'GET') {
			$data['title'] = "Add_Category";
			$data['content'] = $this->load->view('product_admin/pages/products/category_add', $data, true);
			$this->load->view('product_admin/layout/dashboard_layout', $data);
		} elseif ($this->input->server('REQUEST_METHOD') === 'POST') {

			$category = $this->input->post('category');
			$data = array(
				'category' => $category
			);
			$this->category_model->add($data);
			redirect("category");
		}
	}
	public function category_update($id)
	{
		if ($this->input->server('REQUEST_METHOD') === 'GET') {
			$data['title'] = "update";
			$data['id'] = $id;

			$data['content'] = $this->load->view('product_admin/pages/products/category_edit', $data, true);
			$this->load->view('product_admin/layout/dashboard_layout', $data);
		} elseif ($this->input->server('REQUEST_METHOD') === 'POST') {

			$category = $this->input->post('category');
			$data = array(
				'category' => $category
			);

			$this->category_model->update($id, $data);
			redirect("category");
		}
	}
}

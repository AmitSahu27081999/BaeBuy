<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
    // Products
    function select()
    {
        $sql = $this->db->query('SELECT * FROM products');
        return $sql->result();
    }
    function products_add($data)
    {
        $product_id = $this->input->post('product_id');
        $name = $this->input->post('name');
        $comp_name = $this->input->post('comp_name');
        $price = $this->input->post('price');
        $gender = $this->input->post('gender');
        $category = $this->input->post('category');
        
        $data = array(
            'product_id'=> $product_id,
            'name' => $name,
            'brand' => $comp_name,
            'price' => $price,
            'gender' => $gender,
            'category' => $category,
        );
        
        $this->db->insert('products', $data);
        $insertId = $this->db->insert_id();
        $_SESSION['id'] = $insertId;
        
        // $size = $this->input->post('Size[]');
    }
    function update($id)
    {
        $product_id = $this->input->post('product_id');
        $name = $this->input->post('name');
        $comp_name = $this->input->post('comp_name');
        $price = $this->input->post('price');
        $gender = $this->input->post('gender');
        $category = $this->input->post('category');
        
        $data = array(
            'product_id'=> $product_id,
            'name' => $name,
            'brand' => $comp_name,
            'price' => $price,
            'gender' => $gender,
            'category' => $category,
        );

        $this->db->where('id', $id);
        $this->db->update('products', $data);
    }
    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('products');
    }
}
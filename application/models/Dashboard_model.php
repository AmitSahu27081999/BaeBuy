<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
    // Registration
    function register_user($data)
    {
        $name = $this->input->post('name');
        $comp_name = $this->input->post('comp_name');
        $price = $this->input->post('price');
        $heading[] = $this->input->post('heading[]');
        $gender = $this->input->post('gender');
        $category = $this->input->post('category');
        $color = $this->input->post('color');

        $data = array(
            'name' => $name,
            'company' => $comp_name,
            'price' => $price,
            'gender' => $gender,
            'category' => $category,
            'color' => $color
        );

        $this->db->insert('users', $data);
        $insertId = $this->db->insert_id();
        $_SESSION['id'] = $insertId;
    }
}
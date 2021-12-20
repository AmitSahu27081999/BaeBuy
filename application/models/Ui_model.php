<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Ui_model extends CI_Model
{

    function select()
    {
        $sql = $this->db->query('SELECT * FROM products');
        return $sql->result();
    }
    function show_varients($id)
    {
        $sql = $this->db->query("SELECT * FROM products_varients where product_id = $id");
        return $sql->result();
    }
    function show_images($id)
    {
        $sql = $this->db->query("SELECT * FROM products_images where varient_id = $id");
        return $sql->result();
    }
    function select_product_by_id($id)
    {
        $sql = $this->db->query("SELECT * FROM products WHERE id=$id");
        return $sql->row();
    }
    function select_varient($id){
        $sql = $this->db->query("SELECT id FROM products_varients where product_id = $id");
        return $sql->result();
    }
    function select_varient_by_id($id,$varient_id)
    {
        $sql = $this->db->query("SELECT * FROM products_varients where product_id = $id and id=$varient_id");
        return $sql->result();
    }
    function show_images_by_id($id)
    {
        $sql = $this->db->query("SELECT * FROM products_images where varient_id = $id");
        return $sql->row();
    }
    
}

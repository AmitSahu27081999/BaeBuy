<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
    // Products ---------------------------------------------------------------------
    function select()
    {
        $sql = $this->db->query('SELECT * FROM products');
        return $sql->result();
    }
    function products_add($data)
    {
        $this->db->insert('products', $data);
    }
    function select_edit($id)
    {
        $sql = $this->db->query("SELECT * FROM products where id = $id");
        return $sql->result();
    }
    function product_update($data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update('products', $data);
    }
    function product_delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('products');
    }

    //Varients--------------------------------------------------------------------------

    function show_varients($id)
    {
        $sql = $this->db->query("SELECT * FROM products_varients where product_id = $id");
        return $sql->result();
    }
    function select_varient_edit($id)
    {
        $sql = $this->db->query("SELECT * FROM products_varients where id = $id");
        return $sql->result();
    }
    function varients_add($data2)
    {
        $this->db->insert('products_varients', $data2);
    }
    function varient_update($data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update('products_varients', $data);
    }
    function varient_delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('products_varients');
    }

    //Image------------------------------------------------------------------------------
    function show_images($id)
    {
        $sql = $this->db->query("SELECT * FROM products_images where product_id = $id");
        return $sql->result();
    }
    function select_Image_edit($id)
    {
        $sql = $this->db->query("SELECT * FROM products_images where id = $id");
        return $sql->result();
    }
    function images_add($data)
    {
        $this->db->insert('products_images', $data);
    }
    function image_update($data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update('products_images', $data);
    }
    function image_delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('products_images');
    }
}

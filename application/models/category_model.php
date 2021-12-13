<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class category_model extends CI_Model
{
    // Products
    function select()
    {
        $sql = $this->db->query('SELECT * FROM products_category');
        return $sql->result();
    }
    function add($data)
    {
        $this->db->insert('products_category', $data);
    }
    function update($id,$data)
    {
        $this->db->where('id', $id);
        $this->db->update('products_category', $data);
    }
    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('products_category');
    }
}

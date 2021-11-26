<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Customer_model extends CI_Model
{
    function register_user($data)
    {
        $name = $this->input->post('name');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $mobile = $this->input->post('mobile');

        $data = array(
            'name' => $name,
            'password' => $password,
            'email' => $email,
            'mobile' => $mobile
        );

        $this->db->insert('users', $data);
        $insertId = $this->db->insert_id();
        $_SESSION['id'] = $insertId;
?>
        <script>
            alert("<?= $insertId ?>")
        </script>
    <?php
    }
    function upload_mobile_otp()
    {
        $Random = rand(1000, 9999);
        $last_id = $this->session->id;
        $data = array(
            'mobile_otp' => $Random
        );
        $this->db->where('id', $last_id);
        $this->db->update('users', $data);
        ?><script>
            alert("<?= $Random ?>")
        </script><?php
    }
    function check_mobile_otp($data)
    {
        $entotp = $this->input->post('enteredotp');
        $last_id = $this->session->id;

        $this->db->select("mobile_otp");
        $this->db->from("users");
        $this->db->where('id', $last_id);
        $sql = $this->db->get();
        $result = $sql->result();

        foreach($result as $ans){
            $answer = $ans->mobile_otp;
        }

        if ($answer == $entotp) {
            $data = array(
                'is_mobile_verified' => 'true'
            );
            $this->db->where('id', $last_id);
            $this->db->update('users', $data);
        }
    }
    function upload_email_otp()
    {
        $Random = rand(1000, 9999);
        $last_id = $this->session->id;
        $data = array(
            'email_otp' => $Random
        );
        $this->db->where('id', $last_id);
        $this->db->update('users', $data);
        ?><script>
            alert("<?= $Random ?>")
        </script><?php
    }
    function check_email_otp($data)
    {
        $entotp = $this->input->post('enteredotp');
        $last_id = $this->session->id;

        $this->db->select("email_otp");
        $this->db->from("users");
        $this->db->where('id', $last_id);
        $sql = $this->db->get();
        $result = $sql->result();

        foreach($result as $ans){
            $answer = $ans->email_otp;
        }

        if ($answer == $entotp) {
            $data = array(
                'is_email_verified' => 'true'
            );
            $this->db->where('id', $last_id);
            $this->db->update('users', $data);
        }
    }
    function completeverify($data){
        
    }
}

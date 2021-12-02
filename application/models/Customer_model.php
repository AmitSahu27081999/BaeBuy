<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Customer_model extends CI_Model
{
    // Registration
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
        $last_id = $this->session->id;

        $this->db->select("is_email_verified,is_mobile_verified");
        $this->db->from("users");
        $this->db->where('id', $last_id);
        $sql = $this->db->get();
        $result = $sql->result();

        foreach($result as $ans){
            $emailans = $ans->is_email_verified;
            $mobileans = $ans->is_mobile_verified;
        }

        if ($emailans=='true'&&$mobileans=='true') {
            $data = array(
                'complete_verified' => 'true'
            );
            $this->db->where('id', $last_id);
            $this->db->update('users', $data);
        }
        else{

        }
    }


    //Forgot password

    function forgot_send_mobile_otp($data)
    {
        $Random = rand(1000, 9999);
        $enterednumber= $this->input->post('enterednumber');

        $this->db->select("mobile");
        $this->db->from("users");
        $sql = $this->db->get();
        $result = $sql->result();

        foreach($result as $ans){
            $mobileans = $ans->mobile;
            if($mobileans==$enterednumber){
                $data = array(
                    'mobile_otp' => $Random
                );
                $this->db->where('mobile', $enterednumber);
                $this->db->update('users', $data);
                $_SESSION['mobile']=$enterednumber;
                ?><script>
                alert("<?= $Random ?>")
                </script><?php
            }
        }
    }
    function forgot_check_mobile_otp($data)
    {
        $entotp = $this->input->post('enteredotp');
        $enterednumber = $this->session->mobile;

        $this->db->select("mobile_otp");
        $this->db->from("users");
        $this->db->where('mobile', $enterednumber);
        $sql = $this->db->get();
        $result = $sql->result();

        foreach($result as $ans){
            $answer = $ans->mobile_otp;
        }

        if ($answer == $entotp) {
            $_SESSION['verify_method'] = 'mobilemethod';
            return true;
        }
    }
    function forgot_send_email_otp($data)
    {
        $Random = rand(1000, 9999);
        $enteredemail= $this->input->post('enteredemail');

        $this->db->select("email");
        $this->db->from("users");
        $sql = $this->db->get();
        $result = $sql->result();

        foreach($result as $ans){
            $emailans = $ans->email;
            if($emailans==$enteredemail){
                $data = array(
                    'email_otp' => $Random
                );
                $this->db->where('email', $enteredemail);
                $this->db->update('users', $data);
                $_SESSION['email']=$enteredemail;
                ?><script>
                alert("<?= $Random ?>")
                </script><?php
            }
        }
    }
    function forgot_check_email_otp($data)
    {
        $entotp = $this->input->post('enteredotp');
        $enteredemail = $this->session->email;


        $this->db->select("email_otp");
        $this->db->from("users");
        $this->db->where('email', $enteredemail);
        $sql = $this->db->get();
        $result = $sql->result();

        foreach($result as $ans){
            $answer = $ans->email_otp;
        }
        if ($answer == $entotp) {
            $_SESSION['verify_method'] = 'emailmethod';
            return true;
        }
    }
    function change_pass($data){
        $new_pass = $this->input->post('new_pass');
        $confirm_pass = $this->input->post('confirm_pass');
        $method = $enteredemail = $this->session->verify_method;
        if($method=='mobilemethod'){
            $enterednumber = $this->session->mobile;
            if($new_pass==$confirm_pass){
                $data = array(
                    'password' => $new_pass
                );
                $this->db->where('mobile', $enterednumber);
                $this->db->update('users', $data);
                return true;
            }
        }
        else{
            $enteredemail = $this->session->email;
            if($new_pass==$confirm_pass){
                $data = array(
                    'password' => $new_pass
                );
                $this->db->where('email', $enteredemail);
                $this->db->update('users', $data);
                return true;
            }
        }
    }


    // Login
    function login_check($data){
        $email = $this->input->post('login_email');
        $password = $this->input->post('login_pass');

        $this->db->select("email,password");
        $this->db->from("users");
        $sql = $this->db->get();
        $result = $sql->result();

        foreach($result as $ans){
            $emailans = $ans->email;
            $passans = $ans->password;
            if($emailans==$email && $passans==$password){
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                $donelogin = 'true';
                return $donelogin;
            }
            else{
                $donelogin = 'false';
            }
        }
    }


    
    
}

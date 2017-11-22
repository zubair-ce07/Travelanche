<?php

class User_model extends CI_model{

    public function _construct(){
        parent::_construct();
        $this->load->helper(array('form','url','form_validation'));
        $this->load->database();
    }

    public function insert_data(){

        $this->load->database();
        //$this->form_validation->set_rules();
        if(isset($_POST['submit']))
        {
        $f_name = $_POST['first_name'];
        $l_name = $_POST['last_name'];
        $user_name = $_POST['user_name'];
        $pass = $_POST['user_password'];
        $confirm_pass = $_POST['confirm_password'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $phone = $_POST['contact_no'];
        }

        $sql = "INSERT INTO users(first_name, last_name, user_name, pass, rep_pass, address, email, phone) 
                          VALUES('$f_name','$l_name','$user_name','$pass','$confirm_pass','$address','$email','$phone')";
        
        $this->db->query($sql);
    }
    public function fetch_data($email,$pass){
        
        //$this->db->select('email','pass');
        //$this->db->from('users');
        $this->db->where('email', $email);
        $this->db->where('pass', $pass);
        $this->db->limit(1);
        $query = $this->db->get('users');
        if ($query-> num_rows() > 0) {
            return true;
        }
        else{
            return false;
            }
    }

    public function check_phone($phone){
        if (isset($_POST['phone'])) 
         $phone = $_POST['phone'];
         $this->db->where('phone', $phone);
         $query = $this->db->get('users');
         $data = $query->result();      
         foreach ($data as $row)
         {   
             $code = $row->phone;
             if( $code == NULL)
             return false;
             else 
             return true; 
         }
     }
    public function update_otp($phone,$otp){

        $this->db->where('otp' , $otp);
        $this->db->where('phone', $phone);
        $sql = "UPDATE users SET otp = $otp WHERE phone = $phone ";
        $this->db->query($sql);
    }

    public function check_otp($otp){
        $this->db->where('otp' , $otp);
        $query = $this->db->get('users');
        return $query->result_array();
    }

    public function update_pwd($pwd,$phone){
        $this->db->where('pass', $pwd);
        $sql = "UPDATE users SET pass = $pwd WHERE phone = $phone ";
        $this->db->query($sql);
    }
}
?>
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

    public function checkOldPass($old_password)
    {
        $this->db->where('email', $this->session->userdata('email'));
        $this->db->where('password', $old_password);
        $query = $this->db->get('users');
        if($query->num_rows() > 0)
            return 1;
        else
            return 0;
    }

    public function update_pwd($email,$pass){

        $this->db->where('email', $email);
        $this->db->where('pass',$pass);
        $this->db->limit(1);
        $query = $this->db->get('users');
        if($query->num_rows() > 0){
            $this->db->update('pass',$pass);
        }
        else{ return false;
        }
    }
     public function Send_Code($phone)
     {
        if (isset($_POST['phone'])) 
        {
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
        else 
            return false;
    }
    
    public function checks(){
            
        if(isset($_POST['submit']))
                $code = $_POST['code'];
                return $code;
    }
//    public function selectUser()
//    {
//       // $this->db->select('*');
//        //$this->db->from('users');
//        //$this->db->where('email',$email);
//        //$this->db->where('pass',$password);
//        $query = $this->db->get('users');
//        if($query->num_rows() > 0)
//        {
//            foreach ($query->result() as $row){
//                $data[] = $row;
//            }
//            return $data;
//        }
//        //return $query->num_rows();
//        
//    }
}
?>
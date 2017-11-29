<head>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>

<?php

class User_model extends CI_model{

    public function _construct(){
        parent::_construct();
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');
        $this->load->database();
    }

    public function insert_data()
    {
        $this->load->library('form_validation');
        if (isset($_POST['submit'])) {
            $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
            $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('user_name', 'Username', 'callback_username_check');
            $this->form_validation->set_rules('password', 'Password', 'required|required|min_length[8]');
            $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
            if ($this->form_validation->run() == false) {
                $this->load->view('signup');
            } else {
                $f_name = $_POST['first_name'];
                $l_name = $_POST['last_name'];
                $user_name = $_POST['user_name'];
                $pass = $_POST['user_password'];
                $conf_pass = $_POST['confirm_password'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $phone = $_POST['contact_no'];
                $sql = "INSERT INTO users(first_name, last_name, user_name, pass,email,address, phone)
                          VALUES('$f_name','$l_name','$user_name','$pass','$address','$email','$phone')";
                $this->db->query($sql);
            }
        }
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
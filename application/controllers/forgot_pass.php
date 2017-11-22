

<?php
define('SMSUSER','Fatima456');
define('PASSWORD','123456789');
$otp;

class Forgot_pass extends CI_controller{

    public function _construct(){
        parent::_construct();
        // $otp = rand(100000, 999999);
        $this->load->helper(array('url' , 'form'));
        $this->load->library(array('session' ,'form_validation'));
    }

    public function forgot(){
        $this->load->view('forgot_pass');
    }
    public function code(){
        $this->load->view('code');
    }

    //$otp = rand(100000, 999999);
     public function send_code(){

         $this->load->model('user_model');
         $phone = $this->input->post('phone');
         $var = $this->user_model->Send_Code($phone);
         if($var==true)
         {
            $otp = rand(100000, 999999);
            /* sending generated code to database */ 
            $this->user_model->update_otp($phone,$otp);
            $sms_content = "Your Password reset code for Travelanche is ".$otp;
            echo $sms_content;
            /* Encoding the text in url format */
            $sms_text = urlencode($sms_content); 
            //$api_url='https://bulksms.vsms.net/eapi/submission/send_sms/2/2.0?username='.SMSUSER.'&password='.PASSWORD.'&message='.$sms_text.'&msisdn='.$phone.''; 
            //$response = file_get_contents($api_url); //Envoking the API url and getting the response
            //echo $response;
            //echo "Code has been sent to your phone! Please enter to proceed";
            $this->load->view('code'); //view to enter code
         }
         else 
         {
            echo $sms_content;
            redirect('forgot_pass/forgot' , 'refresh');
         }
}
public function check_code(){

    if(isset($_POST['submit'])){
        $code = $_POST['code'];
        $this->load->model('user_model');
        $sms_code = $this ->user_model->check_otp($code);
        //var_dump($sms_code);
        if($code == $sms_code[0]['otp']){
             $data['phone']=$sms_code[0]['phone'];
            $this->load->view('reset_pwd',$data);
         }else{
         redirect('forgot_pass/code', 'refresh');
         }
    }
}
public function reset(){
    if(isset($_POST['submit'])){
        $new_pass = $_POST['new_pass'];
        $phone = $_POST['phone'];
        $this->load->model('user_model');
        //if($new_pass == $rep_new
        $this->user_model->update_pwd($new_pass, $phone);
        $this->load->view('success');
}

}
?>
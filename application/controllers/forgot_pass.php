

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
             $otp = 454545;
             //rand(100000, 999999);
             $sms_content = "Your Password reset code for Travelanche is $otp"; //send sms  
             //Encoding the text in url format
             $sms_text = urlencode($sms_content);
             //This is the Actual API URL concatnated with required values 
             $api_url='https://bulksms.vsms.net/eapi/submission/send_sms/2/2.0?username='.SMSUSER.'&password='.PASSWORD.'&message='.$sms_text.'&msisdn='.$phone.''; 
             $response = file_get_contents( $api_url); //Envoking the API url and getting the response
             echo $response;
             //echo "Code has been sent to your phone! Please enter to proceed";
             $this->load->view('code'); //view to enter code
         }
         else 
         {
            redirect('forgot_pass/forgot' , 'refresh');
         }
}
public function check(){

    $this->load->model('user_model');
    $phone = $this->input->post('code');
    $code = $this->user_model->checks();
   
  //  if(isset($_POST['submit']))
    //    $code = $_POST['code'];
        if($otp == $code)
            $this->load->view('reset_pass');
        else
            redirect('forgot_pass/code', 'refresh');
}
public function reset(){
    $this->load->view('reset_pass');
}

}
?>
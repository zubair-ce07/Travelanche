<!DOCTYPE HTML>
<html>

<body>
<form action="<?php echo site_url('forgot_pass/reset'); ?>" method="POST">
<?php
// $phone = '';
// $this->load->model('user_model');
// $phone = $this->user_model->check_phone($phone);

?>
<input type="hidden" name="phone" value="<?php if(isset($phone)){echo $phone;}?>" >
new password: <input type="password" name="new_pass"> <br>
confirm password: <input type="password" name="rep_pass"> <br>

<button type="submit" name="submit">Reset password</button>
</form>
</body>


</html>
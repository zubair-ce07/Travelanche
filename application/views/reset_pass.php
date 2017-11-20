<!DOCTYPE HTML>
<html>

<body>
<form action="<?php echo base_url('forgot_pass/reset'); ?>" method="POST">

new password: <input type="password" name="new_pass"> <br>
repeat new password: <input type="password" name="rep_pass"> <br>

<button type="submit" name="submit">Reset password</button>
</form>
</body>


</html>
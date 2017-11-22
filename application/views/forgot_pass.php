<!DOCTYPE HTML>
<html>
<head>
<title>Reset Password</title>
</head>

<body>

<h1> Reset Password </h1>
<form action="<?php echo site_url('forgot_pass/send_code') ?>" method="POST">

Phone:  <input type="text" name="phone" placeholder="Enter Phone number" autofocus="" /> <br> <br>
<button type="submit" name="submit">Send Code</button>
</form>
    
</body>



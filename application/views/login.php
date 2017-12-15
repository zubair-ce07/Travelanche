
<!DOCTYPE html>
<html lang='en-US'>

<style>
    
/*@import "bourbon";*/
body {
	background: #eee !important;	
}

.wrapper {	
	margin-top: 80px;
  margin-bottom: 80px;
}

.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0,0,0,0.1);  
}
	.checkbox {
	  margin-bottom: 30px;
      color: black;
      text-align: left;
	}
    .form-signin-heading{
        margin-bottom: 30px;
        text-align: center;
        color: #B22222;
    }
    .form-signin-heading{
        margin-bottom: 30px;
        text-align: center;
        color: black;
    }

	.checkbox {
	  font-weight: normal;
	}

	.form-control {
	  position: relative;
	  font-size: 16px;
	  height: auto;
	  padding: 10px;
		@include box-sizing(border-box);
		&:focus {
		  z-index: 2;
		}
	}
	input[type="text"] {
	  margin-bottom: -1px;
	  border-bottom-left-radius: 0;
	  border-bottom-right-radius: 0;
	}
	input[type="password"] {
	  margin-bottom: 20px;
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;
	}

</style>

<div class="wrapper">
<body>
<div class="container">
    <form class="form-signin" method="POST" action="<?php echo site_url('user_login/user'); ?>" >
       
      <h1 class="form-signin-heading">Welcome to Travelanche</h1>      
      <h2 class="form-signin-heading">Login</h2>

      <input type="text" class="form-control" name="phone" placeholder="Phone no."  autofocus="" />

      <span class="text-danger"> <?php echo form_error('phone'); ?></span>

      <input type="password" class="form-control" name="password" placeholder="Password" autofocus="" />

      <span class="text-danger"> <?php echo form_error('password'); ?></span> 

        <label class="checkbox">
           <input type="checkbox" value="remember-me" id="rememberMe" name="remember_me"> Remember me
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <a href="<?php echo site_url('forgot_pass/forgot'); ?>" > <u>Forgot password?</u> </a>
        </label>
        <button class="btn btn-lg btn-primary btn-block" name="login" type="submit">Login</button>
      <span><?php
      echo $this->session->flashdata("error");
      ?>
      </span>

      <h3> Don't have an account? &nbsp;<a href="<?php echo site_url('home/signup'); ?>" > <u>Sign up</u> </a></h3>
  </form>
</div>
</body>
</div>
</html>

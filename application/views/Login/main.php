<?php
$session_data = $this->session->userdata('logged_in');
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Home | Travelanche</title>
	
	<!-- core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/jumbotron.css" rel="stylesheet"> 
    
    <!--[if lt IE 9]>
    <script src="<?php echo base_url('assets/js/html5shiv.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/respond.min.js'); ?>"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/ico/favicon.ico'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('assets/images/ico/apple-touch-icon-144-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('assets/images/ico/apple-touch-icon-114-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('assets/images/ico/apple-touch-icon-72-precomposed.png'); ?> ">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('assets/images/ico/apple-touch-icon-57-precomposed.png'); ?> ">
</head><!--/head-->

<style>
a.btn-default{
    width:100%;
    border:1px solid #111111;
    margin:10px; 
    border-radius: 10px;
    color: #bf0f09;
}
.centered {
    position: absolute;
    top: 35%;
    left: 50%;
    font-size: 4em;
    color: white;
    transform: translate(-50%, -50%);
}
</style>

<body>
    <img class="img-responsive" style="width:100%; height:400px; " src="<?php echo base_url('assets/images/Bost.png'); ?>" > </img>
    <div class="centered"  style="">Travelanche</div>
                <!-- <a href = "<?php echo site_url('Logged_in/Choice'); ?>" class = "btn btn-lg btn-success"> Plan a trip </a> -->
            </div>
       </div>
    </div> 

    
    <div class="container">
    <h1 style="text-align: center;"> Travelanche </h1>
    <h2 style="text-align: center;">Choose Whatever you want</h2>
    <hr>
    <div class="row">
    <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> --> 
        <a href="<?php echo site_url('Logged_in/Choice'); ?>" type="button" class="btn btn-default btn-lg btn-block" name="plan_a_trip"> Plan a trip</a>
        <a href="#" type="button" class="btn btn-default btn-lg btn-block" name="share_a_ride"> Share a ride</a>
        <a href="#" type="button" class="btn btn-default btn-lg btn-block" name="find_a_ride"> Find a ride</a>
        <a href="#" type="button" class="btn btn-default btn-lg btn-block" name="my_trips"> My trips</a>
        <a href="#" type="button" class="btn btn-default btn-lg btn-block" name="companies"> Companies</a>
    </div>
        </div>
    </div>
    <hr>   
</div>
    

    <div id="profile">
        <?php
        echo "Hello <b id='welcome'><i>" . $session_data['email'] . "</i> !</b>";
        echo "Welcome to Admin Page";
        ?>
    </div>
    <b id="logout"><a href="logout">Logout</a></b>
</div>



</body>
</html>
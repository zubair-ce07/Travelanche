<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Travelanche</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link href="<?php echo base_url(); ?>assets2/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!--Custom-Theme-files-->

    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets2/css/style.css" rel='stylesheet' type='text/css' />
    <link href="<?php echo base_url(); ?>assets2/css/component.css" rel='stylesheet' type='text/css' />
    <link href="<?php echo base_url(); ?>assets2/css/font-awesome.css" rel='stylesheet' type='text/css' />
    <!--Custom-Theme-files-->
</head>
<body>

<div class="inner-content" id="services">
    <div class="wrap">
        <h3 class="tittle wow fadeInUp animated animated" data-wow-delay=".5s">Services</h3>
        <!--start-top_section-->
        <div class="top_section">
            <div class="bnr-btm-left grid">
                <figure class="effect-ming wow fadeInLeft animated animated" data-wow-delay=".5s">
                    <img src="<?php echo base_url(); ?>assets2/images/1.jpg" alt="img09"/>
                    <figcaption>
                        <h3><span>Travelanche</span></h3>
                        <p>Lorem ipsum dolor sit amet..</p>
                        <a href="#">View more</a>
                    </figcaption>
                </figure>

            </div>
            <div class="bnr-btm-right">
                <h3>User Trip Details</h3>
                <p>Here All user trip detail will be showed..</p>
                <a href="#" data-toggle="modal" data-target="#myModal1" class="buy btn-wayra">Read More</a>
                <a href="#" data-toggle="modal" data-target="#myModal1" class="buy btn-wayra">Read More</a>
                <a href="#" data-toggle="modal" data-target="#myModal1" class="buy btn-wayra">Read More</a>

            </div>
            <div class="clearfix"></div>
        </div>
        <!--top_section2-->
      <?php  foreach ($trips as $row){ ?>
        <div class="top_section two">
            <div class="bnr-btm-right two">
                <h3>User Trip Details</h3>
                <p>Here I will Put All my Trip Details..</p>
                <div class="form-group">
                    <label class="col-md-6 control-label">User City.</label>
                    <div class="col-md-6 inputGroupContainer">
                        <div class="input-group">
                           <strong> <?php echo "ZUBAIR"; /*$row->user_city*/ ?> </strong>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-6 control-label"> Vehicle.</label>
                    <div class="col-md-6 inputGroupContainer">
                        <div class="input-group">
                            <strong> <?php echo $row->vehicle; ?> </strong>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-6 control-label">Destination.</label>
                    <div class="col-md-6 inputGroupContainer">
                        <div class="input-group">
                            <strong> <?php echo $row->destination; ?> </strong>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-6 control-label">Start Date.</label>
                    <div class="col-md-6 inputGroupContainer">
                        <div class="input-group">
                            <strong> <?php echo $row->start_date; ?> </strong>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-6 control-label">End Date.</label>
                    <div class="col-md-6 inputGroupContainer">
                        <div class="input-group">
                            <strong> <?php echo $row->end_date; ?> </strong>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-6 control-label">Pickup Time.</label>
                    <div class="col-md-6 inputGroupContainer">
                        <div class="input-group">
                            <strong> <?php echo $row->time_pickup; ?> </strong>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-6 control-label">Pickup Location.</label>
                    <div class="col-md-6 inputGroupContainer">
                        <div class="input-group">
                            <strong> <?php echo $row->location_pickup; ?> </strong>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-6 control-label">Trip Discription.</label>
                    <div class="col-md-6 inputGroupContainer">
                        <div class="input-group">
                        </div>
                    </div>
                </div>
            <div class="btn-group">
                <a href="#" data-toggle="modal"  data-target="#myModal1" class="buy btn-wayra">&nbsp;Bid Now</a>
                <a href="#" data-toggle="modal"  data-target="#myModal1" class="buy btn-wayra">&nbsp;Status</a>
                <a href="#" data-toggle="modal"  data-target="#myModal1" class="buy btn-wayra">&nbsp;Total Bids</a>
            </div>
            </div>
            <div class="bnr-btm-left two grid">
                <figure class="effect-ming wow fadeInRight animated animated" data-wow-delay=".5s">
                    <img src="<?php echo base_url(); ?>assets2/images/2.jpg" alt="img09"/>
                    <figcaption>
                        <h3><span>Travelanche</span></h3>
                        <p>We Share What's Rare..</p>
                    </figcaption>
                </figure>

            </div>

            <div class="clearfix"></div>
        </div>
        <?php }?>
        <!--//end-top_section-->
    </div>
</div>
<!-- app-->
<!-- //app-->

<!--//end-inner-content-->

</body>
</html>

<!DOCTYPE html>
<html lang='en-US'>

<head>
<!--  jquery  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!--link jquery ui css-->
</head>

<style>
#success_message{ display: none;}
</style>

<body>
<div class="container" >

<form class="well form-horizontal" action="<?php echo site_url('logged_in/Trip_info'); ?> " method="post"  id="contact_form">
<fieldset>
<!-- Form Name -->
<legend><center><h2><b>Plan Your Trip</b></h2></center></legend>
<br>

<!-- Text input-->


<div class="form-group" >
  <label class="col-md-4 control-label">Choose Destination</label>  
  <div class="col-md-4 inputGroupContainer">
     <div class="input-group">
       <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
       <select name="destination" class ="form-control" required=""  >
         <option value="none" selected="selected"  >-----------------Select City----------------------</option>
         <!----- Displaying fetched cities in options using foreach loop ---->
         <?php foreach($destination as $row):?>
           <option value="<?php echo $row->destination?>"><?php echo $row->destination?></option>
         <?php endforeach;?>
       </select>
     </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Choose Vehicle</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="	glyphicon glyphicon-plane"></i></span>
      <select name="vehicle" class ="form-control" required=""  >
        <option value="none" selected="selected"  >-----------------Select City----------------------</option>
        <!----- Displaying fetched cities in options using foreach loop ---->
        <?php foreach($vehicle_type as $row):?>
          <option value="<?php echo $row->vehicle_type?>"><?php echo $row->vehicle_type?></option>
        <?php endforeach;?>
      </select>

    </div>
  </div>
</div>
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Choose Pickup Location</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
    <select name="pickup_location" class ="form-control" required=""  >
      <option value="none" selected="selected"  >-----------------Select City----------------------</option>
      <!----- Displaying fetched cities in options using foreach loop ---->
      <?php foreach($pickup_location as $row):?>
        <option value="<?php echo $row->pickup_location?>"><?php echo $row->pickup_location?></option>
      <?php endforeach;?>
    </select>
  </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Choose Start Date</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
  <input name="start_date" placeholder="  Start Date" class="form-control" required=""  type="date">


    </div>
  </div>
</div>

<!-- Text input -->

<div class="form-group">
  <label class="col-md-4 control-label" >Choose End Date</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
  <input name="end_date" placeholder="  End Date" class="form-control" required=""   type="date">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Choose Pickup Time</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="	glyphicon glyphicon-time"></i></span>
  <input name="pickup_time" placeholder="  Pickup Time" class="form-control" required=""  type="time">
    </div>
  </div>
</div>

<!-- Text input-->
  <div class="form-group">
  <label class="col-md-4 control-label">Choose Drop Time</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="	glyphicon glyphicon-time"></i></span>
  <input name="drop_time" placeholder="  Drop Time" class="form-control" required="" type="time">
    </div>
  </div>
</div>

<!-- Text input-->

  <div class="form-group">
    <label class="col-md-4 control-label">Select Your City .</label>
    <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
        <select name="city" class ="form-control" required="" placeholder="  Trip Discription" >
          <option value="none" selected="selected"  >-----------------Select City----------------------</option>
          <!----- Displaying fetched cities in options using foreach loop ---->
          <?php foreach($city as $row):?>
            <option value="<?php echo $row->city?>"><?php echo $row->city?></option>
          <?php endforeach;?>
        </select>
      </div>
    </div>
  </div>

  <!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">Any Discription for Trip.</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
        <input name="trip_disc" placeholder="  Trip Discription" class="form-control" required=""  type="text">
    </div>
  </div>
</div>

<!-- Select Basic -->

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button name="Enter" type="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
  </div>
</div>


  </div>
</fieldset>
</form>
</div>
</div><!-- /.container -->

</body>
</html>

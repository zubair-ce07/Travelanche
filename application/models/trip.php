<?php

class Trip extends CI_model
{

    public function _construct()
    {
        parent::_construct();
        $this->load->helper(array('form', 'url', 'form_validation'));
        $this->load->database();
        $this->load->library('session');
    }

    public function Trip_details()
    {
        $this->load->database();
        $user_data = $this->session->userdata('logged_in');
        $phone = $user_data['phone'];
        if (isset($_POST['Enter']))
        {

            $destination = $_POST['destination'];
            $vehicle = $_POST['vehicle'];
            $pickup_location = $_POST['pickup_location'];
            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];
            $pickup_time = $_POST['pickup_time'];
            $drop_time = $_POST['drop_time'];
            $trip_disc = $_POST['trip_disc'];
            $user_city = $_POST['city'];
            $sql = "INSERT INTO trip(destination, vehicle, start_date, end_date, time_pickup, time_drop, trip_description, location_pickup,user_phone,timestamp,user_city)
                      VALUES('$destination','$vehicle','$start_date','$end_date','$pickup_time','$drop_time','$trip_disc','$pickup_location','$phone',CURTIME(),'$user_city')";

            $this->db->query($sql);
            }

    }
    public function My_trips()
    {
        $user_data = $this->session->userdata('logged_in');
        $phone = $user_data['phone'];
        $this->db->where('user_phone', $phone);
        $query = $this->db->get('trip');
        $data = $query->result();
        return $data;
    }
    public function Trip_data()
    {
        $query = $this->db->get('trip_data');
        $data = $query->result();
        return $data;
    }
    public function Vehicle_type()
    {
        $query = $this->db->get('vehicle_type');
        $data = $query->result();
        return $data;
    }
    public function Destination()
    {
        $query = $this->db->get('destination');
        $data = $query->result();
        return $data;
    }
    public function City()
    {
        $query = $this->db->get('city');
        $data = $query->result();
        return $data;
    }
    public function Pickup_location()
    {
        $query = $this->db->get('pickup_location');
        $data = $query->result();
        return $data;
    }

}
?>
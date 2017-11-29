<?php

class Trip extends CI_model
{

    public function _construct()
    {
        parent::_construct();
        $this->load->helper(array('form', 'url', 'form_validation'));
        $this->load->database();
    }

    public function Trip_details()
    {
        $this->load->database();
        if (isset($_POST['Enter'])) {
            $destination = $_POST['destination'];
            $vehicle = $_POST['vehicle'];
            $pickup_location = $_POST['pickup_location'];
            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];
            $pickup_time = $_POST['pickup_time'];
            $drop_time = $_POST['drop_time'];
            $trip_disc = $_POST['trip_disc'];
        }

        $sql = "INSERT INTO trip(destination, vehicle, start_date, end_date, time_pickup, time_drop, trip_description, location_pickup) 
                          VALUES('$destination','$vehicle','$start_date','$end_date','$pickup_time','$drop_time','$trip_disc','$pickup_location')";

        $this->db->query($sql);
    }

    public function My_trips($email)
    {
        //if (isset($_POST['plan_a_trip']))
        echo "my mail is" .$email;
        $this->db->where('user_city', 'Lahore');
        $query = $this->db->get('trip');
        $data = $query->result();
       /* foreach ($data as $row) {
            $code = $row->phone;
            if ($code == NULL)
                return false;
            else
                return true;
        }*/
        return $data;
    }
}
?>
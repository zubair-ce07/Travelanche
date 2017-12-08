
<?php
echo "data inserted successfully" ;

foreach ($trips as $row)
{
    echo $row->vehicle;
    echo  " ";
    echo $row->location_pickup;
}

?>
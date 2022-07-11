<?php 

$con = new mysqli('localhost', 'root', '', 'udeshika');

if(!$con)
{
    die(mysqli_error($con));
}

?>
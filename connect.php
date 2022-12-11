<?php

$con=new mysqli('localhost' , 'root' , '' , 'cruding');

if(!$con)
{
    die(mysqli_error($con));
}

?>
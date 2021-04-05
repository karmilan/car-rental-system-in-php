<?php

$dbconn=mysqli_connect('localhost','root','','carrental');

if($dbconn)
{
    
}

else
{
    die ("connection failed:".mysqli_connect_error());
}

?>
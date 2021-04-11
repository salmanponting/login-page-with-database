<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "zd#qDtgR";
$dbname = "formuser";

if($con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

    die("connect!");
}
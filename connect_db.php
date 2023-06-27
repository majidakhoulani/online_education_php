<?php
$servername="localhost";
$username="root";
$password="";
$dbname="online_education";
$conn=new mysqli($servername,$username,$password,$dbname);
// print_r("connection succesfully");
if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}
?>
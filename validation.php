<?php
include('connect_db.php');
include('login.php');

session_start();
$user_check=$_SESSION['user_name'];

$ses_sql = mysqli_query($db,"SELECT 	user_name FROM users WHERE 	user_name='$user_check' ");
$result = $conn->query($sql);
$res=mysqli_fetch_assoc($result);
// $rows = mysqli_num_rows($result);

// $row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_user=$row['user_name'];

if(!isset($user_check))
{
header("Location: index.php");
}
?>
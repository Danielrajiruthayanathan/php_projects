<?php
$server="localhost";
$uname="root";
$pwd="";
$db="kvcet";
$con=mysqli_connect($server,$uname,$pwd,$db) or die("db not connect");

$mail=$_POST['mail'];
$pass=$_POST['Pass'];



$query="insert into reg3 values('$mail','$pass')";
if($res=mysqli_query($con,$query))
{

   $res=mysqli_query($con,$query);
   echo"<script> alert('data saved');
   window.location.href='slog.php';</script>";    
}
else
{

    echo"<script>alert('data unsaved')</script>";
}
?>
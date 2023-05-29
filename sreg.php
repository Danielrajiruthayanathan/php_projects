<?php
$server="localhost";
$uname="root";
$pwd="";
$db="kvcet";
$con=mysqli_connect($server,$uname,$pwd,$db) or die("db not connect");

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$gen=$_POST['gen'];
$email=$_POST['email'];
$pno=$_POST['pno'];
$sub=$_POST['sub'];


$query="insert into reg1 values('$fname','$lname','$dob','$gen','$email',$pno,'$sub')";
if($res=mysqli_query($con,$query))
{

   $res=mysqli_query($con,$query);
   echo"<script> alert('data saved');
   window.location.href='sreg1.php';</script>";    
}
else
{

    echo"<script>alert('data unsaved')</script>";
}
?>
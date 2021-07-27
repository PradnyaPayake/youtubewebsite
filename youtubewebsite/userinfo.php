<?php

$con=mysqli_connect('localhost','root');
if ($con){
	echo "Connection successfull";
	# code...
}else{
	echo "No Connection";
}
mysqli_select_db($con,'userdata');

$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comments=$_POST['comment'];

$query="insert into userinfodata(user,email,mobile,comment)
values('$user','$email','$mobile','$comments')";
echo "$query";
mysqli_query($con,$query);
header('location:index.php')
 

 ?>
<?php
$con = mysqli_connect("localhost","root","","foodow") or die("connection failed");

$name = $_POST['name'];
$lname = $_POST['lname'];
$message = $_POST['maessage'];
$custadd = $_POST['address'];
$custcity = $_POST['city'];
$custpincode = $_POST['pincode'];
$phone = $_POST['mobile'];
$email = $_POST['email'];

$sql = "INSERT INTO fooduser(NAME,LASTNAME,MESSAGE,ADDRESS,CITY,PINCODE,FIRSTTEL,EMAIL)
 VALUES('{$name}','{$lname}','{$message}','{$custadd}','{$custcity}','{$custpincode}','{$phone}','{$email}')";

$rel = mysqli_query($con,$sql) or die("query faild");
header("Location: http://Localhost/FOOD BLOGS/index.html.html");

mysqli_close($con);






?>
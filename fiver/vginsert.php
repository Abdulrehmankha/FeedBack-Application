<?php

session_start();



// for redirect

header('location:index.php');

// end redirect

$con = mysqli_connect('localhost','root');
if ($con) {
	echo "connect successfull";
}else{
	echo "not connect";
}

mysqli_select_db($con, 'register');


//for initialize variable for vegetable
$veg_desc = $_POST['veg_desc'];

// for user getting name
$name = $_POST['username'];


// then query for vegetable
$qc = "select * from myvegitable where veg_desc = '$veg_desc'";
$result3 = mysqli_query($con ,$zx);
$num3 = mysqli_num_rows($result3);

if ($num3 == 1) {
	echo "duplicate data";
}else{
	$username=$_SESSION['username'];
	$user_id = $_SESSION['user_id'];
	$yz="insert into myvegitable(veg_id,veg_desc,name ) values ('$user_id','$veg_desc','$username')";
	mysqli_query($con , $yz);
}

?>
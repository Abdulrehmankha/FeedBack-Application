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





$animal_desc = $_POST['animal_desc'];

// for user getting name
$name = $_POST['username'];


//for initialize variable for mineral
$mine_desc = $_POST['mine_desc'];

//for initialize variable for vegetable
// $veg_name = $_POST['veg_name'];


// then query for animal
$q = "select * from animal where animal_desc = '$animal_desc'";

$result = mysqli_query($con ,$q);
$num = mysqli_num_rows($result);

if ($num == 1) {
	echo "duplicate data";
	
}else{

	$username=$_SESSION['username'];
	$user_id = $_SESSION['user_id'];
	$qy="insert into animal(anim_id,animal_desc,name) values ('$user_id','$animal_desc','$username')";
	mysqli_query($con , $qy);
}



// then query for mineral
$ab = "select * from mineral where mine_desc = '$mine_desc'";
$result1 = mysqli_query($con ,$ab);
$num1 = mysqli_num_rows($result1);

if ($num1 == 1) {
	echo "duplicate data";
}else{

	$username=$_SESSION['username'];
	$user_id = $_SESSION['user_id'];
	$ac="insert into mineral(mine_id,mine_desc,name) values ('$user_id','$mine_desc','$username')";
	mysqli_query($con , $ac);
}


// then query for vegetable
// $qc = "select * from vegitable where veg_name = '$veg_name'";
// $result2 = mysqli_query($con ,$qb);
// $num2 = mysqli_num_rows($result2);

// if ($num2 == 1) {
// 	echo "duplicate data";
// }else{
// 	$username=$_SESSION['username'];
// 	$user_id = $_SESSION['user_id'];
// 	$qx="insert into vegitable(veg_id,veg_name,name ) values ('$user_id','$veg_name','$username')";
// 	mysqli_query($con , $qx);
// }


?>
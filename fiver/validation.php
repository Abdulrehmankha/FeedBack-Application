<?php

session_start();

// for redirect

// header('location:login.php');

// end redirect

$con = mysqli_connect('localhost','root');
if ($con) {
	echo "connect successfull";
}else{
	echo "not connect";
}

mysqli_select_db($con, 'register');

//for initialize variable

$name = $_POST['user'];
$pass = $_POST['password'];

// then query  //Login 
$q = "select * from admin where name = '$name' && password = '$pass' ";
$result = $con-> query($q);
if ($result-> num_rows > 0) {
	while ($row = $result-> fetch_assoc()) {
		$_SESSION['user_id'] = $row['user_id'];
		
	}
	$_SESSION['username'] = $name;
	header('location:index.php');
	
}

// $result = mysqli_query($con ,$q);
// $num = mysqli_num_rows($result);

// if ($num == 1) {
// 	while ($row = $result-> fetch_assoc()) {
// 		$_SESSION['user_id'] = $row['user_id'];
// 	}
	
// 	$_SESSION['username'] = $name;
// 	header('location:index.php');


// }
else{
	header('login.php');
}

?>
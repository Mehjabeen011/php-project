43e<?php 
$s_nrame ="localhost";
$u_id="root";
$u_password ="";
$db = "test1"; 

$conn = mysqli_connect($s_name,$u_id,$u_password,$db);
if ($conn) {
    echo ("Connect");
} else {
    die("Not Connected".mysqli_connect_error());
}


$name = $_POST['username'];
$password = $_POST['password'];
$c_password = $_POST['c_password'];

$q = "INSERT INTO `signin` (`email`, `password`, `c_password`) VALUES ('$name', '$password', '$c_password');";
$result = mysqli_query($conn, $q);

$num = mysqli_num_rows($result);

if ($num == 1) {
	echo "Dupilcate data";
} else {
	// $qy = "INSERT INTO signin (name, mobile, email, password, confirm_password) VALUES ('$name', '$num', '$email', '$password', '$con_password')";
	$qy = "INSERT INTO `signin` (`name`, `mobile`, `email`, `password`, `confirm_password`) VALUES ('$name', '$num', '$email', '$password', '$con_password');";


	mysqli_query($conn,$qy);
	echo "Data Inserted";
	header('location:index.html');
}
?>









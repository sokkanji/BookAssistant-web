<?php
require_once("../base/dbconfig.php");

$u_name=$_POST['u_name'];
$email=$_POST['email'];
$pw=$_POST['pw'];

 
$sql = 'INSERT INTO user(u_name, email, pw) 
VALUES("' . $u_name . '","'. $email . '","' . $pw .'")';

$result = mysqli_query($con, $sql);
if($result){ 
	echo "<script>alert('회원가입 완료되었습니다.'); 
	location.href='../login/login.html'; 
	</script>";
} else{
	echo "<script>alert('회원가입 실패했습니다.');
	history.back();
	</script>";
} 

mysqli_close($con);
?>
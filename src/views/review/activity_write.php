<?php
require_once("../base/dbconfig.php");

$a_title=$_POST['a_title'];
$a_content=$_POST['a_content'];
$a_date=date("Y-m-d");                          

$mq = 'ALTER TABLE activity auto_increment = 1'; //auto_increment 값 초기화
$result1 = mysqli_query($con, $mq);

$sql = 'INSERT INTO activity(a_title, a_content, u_name, a_date) VALUES("' . $a_title . '", "' . $a_content . '","' . $_SESSION['u_name'] .'","' . $a_date . '")';

$result2 = mysqli_query($con, $sql);
if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if($result2){ 
	echo "<script>alert('정상적으로 글이 등록되었습니다.'); 
	location.href='../review/activity.php'; 
	</script>";
} else{
	echo "<script>alert('글을 등록하지 못했습니다.'); 
	history.back();
	</script>";	
} 

mysqli_close($con);
?>
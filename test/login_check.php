<?php
session_start(); // 세션
include ("connect.php"); // DB접속

$id = $_POST['id']; // 아이디
$pw = $_POST['pw']; // 패스워드
$query = "select * from lost_and_found.found where stu_id='$id' and stu_pwd='$pw'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

if($id==$row['stu_id'] && $pw==$row['stu_pw']){ // id와 pw가 맞다면 login
   $_SESSION['id']=$row['stu_id'];
   $_SESSION['name']=$row['name'];
   echo "<script>location.href='login.php';</script>";
}else{ // id 또는 pw가 다르다면 login 폼으로
   echo "<script>window.alert('invalid username or password');</script>"; // 잘못된 아이디 또는 비빌번호 입니다
   echo "<script>location.href='login.php';</script>";
}
?>
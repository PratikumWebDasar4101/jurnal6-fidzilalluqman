<?php  
include("db_login.php"); 
$username = $_POST['username'];
$password = $_POST['password'];
 
$login = mysql_query("SELECT * FROM login_user where username='$username' and password='$password'");   
$cek = mysql_num_rows($login);
 
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
}else{
	header("location:form_login.php");	
}
?>
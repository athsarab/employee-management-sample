<?php
session_start();

$username=$_POST['username'];
$password=$_POST['password'];
$role=$_POST['role'];



$accountadminusername="accountadmin";
$accountadminpassword="accountpass";



?>

<?php



if (($username==$accountadminusername) AND ($password==$accountadminpassword) AND ($role=="accountadmin")) {

	$_SESSION['sessionaccountadmin']="2";

	echo ("<script LANGUAGE='JavaScript'> window.alert('Welcome Account Admin.');window.location.href='accountadmin.html';</script>");
}



else
{
	echo ("<script LANGUAGE='JavaScript'> window.alert('You are not an registered admin .');window.location.href='login-user.php';</script>");
}

?>
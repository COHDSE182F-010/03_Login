<?php
$userName=$_POST["txt_userName"];
$pwd=$_POST["txt_password"];
if($userName=="admin" && $pwd=="123")
{       
        session_start();
        $_SESSION["txt_userName"]=$userName;
		$_SESSION["LAST_ACTIVITY_TIME"]=time();
		header('location:welcome.html');
		
}
else
{
 	header('location:Login.html');
}

$_SESSION["LAST_ACTIVITY_TIME"]=time();
if($_SESSION["txt_userName"] && time()>=$_SESSION["LAST_ACTIVITY_TIME"]+10)
{    
      

     header('location:Login.html');
}



?>
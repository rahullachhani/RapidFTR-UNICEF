<?php
session_start();
$pid =  $_SESSION['uid'];
$cid =   $_SESSION['childId'];
include("connection.php");

$result = mysql_query("SELECT name,currently_at_NGO FROM information WHERE Unicef_id='$cid'");
    $row1=mysql_fetch_array($result);
    $cname = $row1['name'];
    $loc = $row1['currently_at_NGO'];
    $result1 = mysql_query("SELECT email FROM parents WHERE pid='$pid'");
    $row2=mysql_fetch_array($result1);
    $pemail = $row2['email'];
    

    require_once "Mail-1.2.0/Mail-1.2.0/Mail.php";
    $from    = "mohitgurnani1@gmail.com";  
     $to      = $pemail;  
     $subject = "With respect to your missing family member";  
     $body    = "Hello ".$pemail." ,We are pleased to inform you, one of your family member ".$cname." is found at our rehab location with following details:".$loc;  
      
    /* SMTP server name, port, user/passwd */  
    $smtpinfo["host"] = "ssl://smtp.gmail.com";  
    $smtpinfo["port"] = "465";  
    $smtpinfo["auth"] = true;  
    $smtpinfo["username"] = "mohitgurnani1@gmail.com";  
    $smtpinfo["password"] = "kavita@LX_12";  
      
    $headers = array ('From' => $from,'To' => $to,'Subject' => $subject);  
    $smtp = &Mail::factory('smtp', $smtpinfo );  
      
    $mail = $smtp->send($to, $headers, $body);  
      
    if (PEAR::isError($mail)) {  
      echo("<p>" . $mail->getMessage() . "</p>");  
     } else {  
      echo "Messsage Sent successfully to: " . $pemail; 
     }  



 ?>
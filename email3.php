    <?php  
    require_once "Mail-1.2.0/Mail-1.2.0/Mail.php";  
      if (!isset($_POST['parentid'], $_POST['childname'], $_POST['child_data'], $_POST['Parentname'))
	  {
	 $parentid=$_POST['parentid'];
	 $childname=$_POST['childname'];
	 $child_data=$_POST['child_data'];
	 $parentName=$_POST['Parentname'];
	  
	 }
	 else{
	 $parentid='';
	 $childname='';
	 $child_data='';
	 $parentName='';
	 };
     $from    = "mohitgurnani1@gmail.com";  
     $to      = $parentid;  
     $subject = "With respect to your missing family member";  
     $body    = "hello ".$parentName." ,We are pleased to inform you, one of your family member ".$childname." is found at our rehab location ".$child_data;  
      
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
      echo("<p>Message successfully sent!</p>");  
     }  
    ?>  
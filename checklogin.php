<?php
  session_start();
  //if($_POST['pers']=='1'){
  if($_SERVER['REQUEST_METHOD'] == "POST") {
   include("connection.php");
    $email = mysql_real_escape_string($_POST['email']);
    $password = mysql_real_escape_string($_POST['password']);
    //$password = md5($password);
    //echo "ID" . $email;
    //echo "Pass" . $password;
    $result = mysql_query("SELECT Cid,CName FROM child WHERE CName='$email' AND CPass='$password'");
    $row1=mysql_fetch_array($result);
    $id1 = $row1['Cid'];
    /*
    $sql= mysql_query("SELECT authorid FROM author WHERE authorid='$id1'");
    $row=mysql_fetch_array($sql);
    $id = $row['authorid'];
    */

    if(mysql_num_rows($result) > 0) {
      $_SESSION['name']=$email;
      $_SESSION['uid']=$id1;
      $_SESSION['is_logged_in'] = 1;
    }
 // }

  if(!isset($_SESSION['is_logged_in'])) {
    include("index.php");
  } else {
    include("addachild.php");
  }

}/*
elseif ($_POST['pers']=='2') {
  
  if($_SERVER['REQUEST_METHOD'] == "POST") {
   include("connection.php");
    $email = mysql_real_escape_string($_POST['email']);
    $password = mysql_real_escape_string($_POST['password']);
    

    if($email=="rdshah171@gmail.com" && $password=="raveenashah") {
      $_SESSION['name']=$email;
      $_SESSION['uid']='111081041';
      $_SESSION['is_logged_in'] = 1;
    }
  }

  if(!isset($_SESSION['is_logged_in'])) {
    header("location:index.php");
  } else {
    include("cm.php");
  }
}
elseif ($_POST['pers']=='3') {
  
  if($_SERVER['REQUEST_METHOD'] == "POST") {
   include("connection.php");
    $email = mysql_real_escape_string($_POST['email']);
    $password = mysql_real_escape_string($_POST['password']);
    

    if($email=="lachhani.rahul@gmail.com" && $password=="rahullachhani") {
      $_SESSION['name']=$email;
      $_SESSION['uid']='111081023';
      $_SESSION['is_logged_in'] = 1;
    }
  }

  if(!isset($_SESSION['is_logged_in'])) {
    header("location:index.php");
  } else {
    include("admin.php");
  }
}*/
?> 
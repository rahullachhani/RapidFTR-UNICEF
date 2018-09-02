<?php
  session_start();
  if($_POST['pers']=='1'){
  if($_SERVER['REQUEST_METHOD'] == "POST") {
   include("connection.php");
    $email = mysql_real_escape_string($_POST['email']);
    $password = mysql_real_escape_string($_POST['password']);
    //$password = md5($password);
    $result = mysql_query("SELECT pid,email,name FROM parents WHERE email='$email' AND password='$password'");
    $row1=mysql_fetch_array($result);
    $id1 = $row1['pid'];
    echo "My id gen.:" . $id1;
    $_SESSION['parent'] = 'yes';
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
}
}
elseif ($_POST['pers']=='2') {
  
  if($_SERVER['REQUEST_METHOD'] == "POST") {
   include("connection.php");
    $email = mysql_real_escape_string($_POST['email']);
    $password = mysql_real_escape_string($_POST['password']);
    

    if($email=="admin@gmail.com" && $password=="admin") {
      $_SESSION['name']=$email;
      $_SESSION['uid']='111080026';
      $_SESSION['is_logged_in'] = 1;
    }
  }

  if(!isset($_SESSION['is_logged_in'])) {
    header("location:index.php");
  } else {
    include("adminpage.php");
  }
}/*
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
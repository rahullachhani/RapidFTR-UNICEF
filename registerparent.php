<?php
include("connection.php");
$email = $_POST['email'];
$name = $_POST['name'];
$password = $_POST['password'];
$age = $_POST['age'];
$gender = $_POST['gendr'];
$apartment = $_POST['apt'];
$city = $_POST['city'];
$contactinfo = $_POST['cinfo'];

if(empty($name)){
  echo "<script type=\"text/javascript\">" .
   "window.alert('The Name Field cannot be blank')" .
   "</script>;";
}

elseif(strlen($password) == 0){
  echo "<script type=\"text/javascript\">" .
   "window.alert('The password Field cannot be blank')" .
   "</script>;";;
}

elseif (!preg_match("/^[a-zA-Z ]*$/",$name)){
  echo "<script type=\"text/javascript\">" .
   "window.alert('Only Letters and Spaces are allowed in Name')" .
   "</script>;";
}

elseif (preg_match("/^[0-9a-zA-Z_]{5,}$/", $password) === 0){
  echo "<script type=\"text/javascript\">" .
   "window.alert('your password should use only alphanumeric characters')" .
   "</script>;";
}
else{
//$password = md5($password);
$sql="INSERT INTO parents (email,name,password,age,gender,apartment,city,contactinfo) VALUES ('$email','$name','$password','$age','$gender','$apartment','$city','$contactinfo')";

if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error($con));
  }

  echo '<script type="javascript">'; 
  echo 'window.alert("Your Registration is Completed")';
  echo '</script>'; 
}
include("index.php");
?>
<?php
include("connection.php");
$id = $_POST['id'];
$name = $_POST['name'];
$password = $_POST['password'];
$age = $_POST['age'];
$gender = $_POST['gendr'];
$nationality = $_POST['nationality'];
$caste = $_POST['cr'];
$apartment = $_POST['apt'];
$city = $_POST['city'];
$landmark = $_POST['landmrk'];
$keyword_location = $_POST['locn'];
$keyword_person = $_POST['relatPerson'];
$keyword_others = $_POST['other'];
$birthmark = $_POST['birthmark'];
$nickname = $_POST['nickname'];
$currently_at_NGO = $_POST['ngo'];
$pincode = $_POST['pincode'];
$last_known_location = $_POST['last_known_location'];
$complexion = $_POST['complexion'];
$last_clothes_color = $_POST['clothes'];

if(empty($name)){
  echo "<script type=\"text/javascript\">" .
   "window.alert('The Name Field cannot be blank')" .
   "</script>;";
}

elseif (!preg_match("/^[a-zA-Z ]*$/",$name)){
  echo "<script type=\"text/javascript\">" .
   "window.alert('Only Letters and Spaces are allowed in Name')" .
   "</script>;";
}
else{
//$password = md5($password);
$sql="UPDATE information set name='$name',nationality='$nationality',caste='$caste',age='$age',gender='$gender',apartment='$apartment',landmark='$landmark',city='$city',pincode='$pincode',last_known_location='$last_known_location',birthmark='$birthmark',keyword_location='$keyword_location',keyword_person='$keyword_persons',keyword_others='$keyword_others',currently_at_NGO='$currently_at_NGO',nickname='$nickname',complexion='$complexion',last_clothes_color='$last_clothes_color' where Unicef_id='$id'";

if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error($con));
  }

  echo '<script type="javascript">'; 
  echo 'window.alert("Your Registration is Completed")';
  echo '</script>'; 
include("index.php");
}
?>
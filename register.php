<?php
include("connection.php");

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
if($name=='') 
  $count=$count+1;
if($password=='') 
  $count=$count+1;
if($age=='') 
  $count=$count+1;
if($gender=='') 
  $count=$count+1;
if($nationality=='') 
  $count=$count+1;
if($caste=='') 
  $count=$count+1;
if($apartment=='') 
  $count=$count+1;
if($city=='') 
  $count=$count+1;
if($landmark=='') 
  $count=$count+1;
if($keyword_location=='') 
  $count=$count+1;
if($keyword_person=='') 
  $count=$count+1;
if($keyword_others=='') 
  $count=$count+1;
if($birthmark=='') 
  $count=$count+1;
if($nickname=='') 
  $count=$count+1;
if($currently_at_NGO=='') 
  $count=$count+1;
if($pincode=='') 
  $count=$count+1;
if($last_known_location=='') 
  $count=$count+1;
if($last_clothes_color=='') 
  $count=$count+1;
if($complexion=='') 
  $count=$count+1;

$count=19-$count;



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
  session_start();
  $xyz = $_SESSION['uid'];
  echo "dchwj" . $xyz . $_SESSION['name'];
  if(!isset($_SESSION['parent']))
{
$sql="INSERT INTO information (name,nationality,caste,age,gender,apartment,landmark,city,pincode,last_known_location,birthmark,keyword_location,keyword_person,keyword_others,currently_at_NGO,nickname,complexion,last_clothes_color,pid,ngo_id,count) VALUES('$name','$nationality','$caste','$age','$gender','$apartment','$landmark','$city','$pincode','$last_known_location','$birthmark','$keyword_location','$keyword_person','$keyword_others','$currently_at_NGO','$nickname','$complexion','$last_clothes_color','1','$xyz','$count')";
$sql1="SELECT `AUTO_INCREMENT`
FROM  INFORMATION_SCHEMA.TABLES
WHERE TABLE_SCHEMA = 'unicef2'
AND   TABLE_NAME   = 'information';";

$result=mysql_query($sql1);
$row1=mysql_fetch_array($result);
    $id1 = $row1['AUTO_INCREMENT'];
    //$connection = mysqli_connect("localhost", "root", "root", "unicef2");
//echo "Hey" . $id1;
    $mysqli = new mysqli("localhost", "root", "root");
if(!$mysqli) die('Could not connect: ' . mysql_error());
mysqli_select_db($mysqli, "unicef2");
if(!$mysqli) die('Could not connect to DB: ' . mysql_error());
 
// Prepare IN and OUT parameters
$mysqli->query("SET @un = " . "'" . $id1 . "'");
echo "UN" . @un;
// Call sproc 
// IsSupervisor(IN username CHAR(20), OUT success BOOLEAN)
if(!$mysqli->query("CALL myprocedure2(@un)"))
die("CALL failed: (" . $mysqli->errno . ") " . $mysqli->error);
    

  //run the store proc
 // $result = mysqli_query($connection, 
   //  "CALL myprocedure2($id1)") or die("Query fail: " . mysqli_error());

}
else
{
$sql="INSERT INTO information (name,nationality,caste,age,gender,apartment,landmark,city,pincode,last_known_location,birthmark,keyword_location,keyword_person,keyword_others,currently_at_NGO,nickname,complexion,last_clothes_color,pid,count) VALUES('$name','$nationality','$caste','$age','$gender','$apartment','$landmark','$city','$pincode','$last_known_location','$birthmark','$keyword_location','$keyword_person','$keyword_others','$currently_at_NGO','$nickname','$complexion','$last_clothes_color','$xyz','$count')";
$sql1="SELECT `AUTO_INCREMENT`
FROM  INFORMATION_SCHEMA.TABLES
WHERE TABLE_SCHEMA = 'unicef2'
AND   TABLE_NAME   = 'information';";

$result=mysql_query($sql1);
$row1=mysql_fetch_array($result);
    $id1 = $row1['AUTO_INCREMENT'];
//echo "Hey" . $id1;
    $mysqli = new mysqli("localhost", "root", "root");
if(!$mysqli) die('Could not connect: ' . mysql_error());
mysqli_select_db($mysqli, "unicef2");
if(!$mysqli) die('Could not connect to DB: ' . mysql_error());
 
// Prepare IN and OUT parameters

$mysqli->query("SET @un = " . "'" . $id1 . "'");
echo "UN" . @un;
// Call sproc 
// IsSupervisor(IN username CHAR(20), OUT success BOOLEAN)
if (!$mysqli->query("CALL myprocedure(@un)")) {
    echo "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;
}
}


    

if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error($con));
  }

  echo '<script type="javascript">'; 
  echo 'window.alert("Your Registration is Completed")';
  echo '</script>'; 
}
include("addachild.php");
?>
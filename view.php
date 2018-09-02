<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Virtual Library | Student's Page</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
<script type="text/javascript" src="js/news_scroller_loader.js"></script>
</head>
<body id="top">

<?php include("header.html"); ?>
<br><br><br>
<div class="wrapper row4">
  <div id="quicknav" class="clear">
    <ul>
      <li><a href="addachild.php">Add a Child</a>
      </li>
      <li><a href="showall.php">Show all registered childeren</a>
      </li>
      <li><a href="findmatches.php">Find Matches</a>
      </li>
      <li><a href="keypad/dropdown.php">Language Barrier</a>
      </li>
    </ul>
  </div>
</div>


<div class="wrapper row5">
  <div id="container" class="clear">
    <!-- ####################################################################################################### -->
    <div id="portfolio">

        <h2>Welcome 
      <?php
  
      echo $_SESSION['name'];
?> , &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
 <a href="logout.php">Log Out</a></h2>
        <h1 style="font-size:30px;">Update the information of student : </h1>
  </div>
</div>
</div>
<?php
include("connection.php");
session_start();
$id= $_SESSION['uid'];
$rid = $_GET['rid'];
$sql =  "SELECT * FROM information where Unicef_id = '$rid'";
$result = mysql_query($sql);
$row1=mysql_fetch_array($result);
?>
<div style="position:absolute;left:40%">
<form method="post" action="updateregister.php" style="font-size:14px;font-family:Georgia,serif;color:#666666;width:400px;">
      
 		<input name="id" value="<?php echo $rid; ?>" type="text" style="display=none;">
      Name : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <input name="name" value="<?php echo $row1["name"];?>" type="text" autocomplete="on" placeholder="Name" size="35"/><br><br>
 
      Age :&nbsp; &nbsp;
      <input name="age" value="<?php echo $row1["age"];?>" type="text" placeholder="Date of Birth" size="20"/>

      Gender : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <input name="gendr" value="<?php echo $row1["gender"];?>" type="text" placeholder="M/F" size="10"/><br><br>

      Nationality : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <input name="nationality" value="<?php echo $row1["nationality"];?>" type="text" placeholder="Enter nationality" size="20"/><br><br>

      Caste/Religion : &nbsp; &nbsp;
      <input name="cr" value="<?php echo $row1["caste"];?>" type="text" placeholder="Enter Caste/Religion" size="20"/><br><br>

      Address Basic Information:
      <hr>
      Apartment : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <input name="apt" value="<?php echo $row1["apartment"];?>" type="text" placeholder="Apartment,if known" size="20"/><br><br>

      City :&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <input name="city" value="<?php echo $row1["city"];?>" type="text" placeholder="City of residence" size="20"/><br><br>

      Landmark :&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <input name="landmrk" value="<?php echo $row1["landmark"];?>" type="text" placeholder="Landmark,If any" size="20"/><br><br>

      Keywords:
      <hr>
      Location Information :&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <input name="locn" value="<?php echo $row1["keyword_location"];?>" type="text" placeholder="Location, If any" size="20"/><br><br>

      Relating Person :&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <input name="relatPerson" value="<?php echo $row1["keyword_person"];?>" type="text" placeholder="Any other information" size="20"/><br><br>

      Others,If any : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <input name="other" value="<?php echo $row1["keyword_others"];?>" type="text" placeholder="Any other informative keyword" size="20"/><br><br>

      Birthmark : &nbsp; &nbsp; &nbsp; &nbsp;
      <input name="birthmark" value="<?php echo $row1["birthmark"];?>" type="text" placeholder="Birthmark,If any" size="20"/><br><br>

      Nickname(if any) : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <input name="nickname" value="<?php echo $row1["nickname"];?>" type="text" placeholder="Nickname" size="20"/><br><br>

      Complexion : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <input name="complexion" value="<?php echo $row1["complexion"];?>" type="text" placeholder="Enter child's Complexion!" size="20"/><br><br>

      Last worn clothes color : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <input name="clothes" value="<?php echo $row1["last_clothes_color"];?>" type="text" placeholder="Color of clothes" size="20"/><br><br>


      Currently at which NGO :
      &nbsp; &nbsp; &nbsp; &nbsp;
      <select name="ngo">
        <option value="UNICEF">UNICEF</option>
        <option value="HumanRights">HumanRights</option>
        <option value="SaveGirls">SaveGirls</option>
        <option value="StopTrafficking">StopTrafficking</option>
      </select>

      <br/>
      <br/>
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
 <input type="Submit"/>

      </form>
      </div>
  </div>
</body>
</html>
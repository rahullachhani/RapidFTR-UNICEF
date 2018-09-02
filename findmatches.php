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
        <h1 style="font-size:30px;">Matches found : </h1>
  </div>
</div>
</div>
<?php
include("connection.php");
?>
<div id="content">
  <h1>Your Best Results</h1>
    <div id="comments">
       <?php
        $id = $_SESSION['uid'];
        //echo "PID" . $id;
        $query="select link.unicef_id,information.name,information.age,information.gender,information.currently_at_NGO from link,information where link.unicef_id=information.Unicef_id and link.pid='$id' and ((count*100)/percent)>=75";
        $result=mysql_query($query);
        $num=mysql_num_rows($result);
        $_SESSION['childId'] = mysql_result($result,0,"link.unicef_id");
        ?>
      <ul class="commentlist">
        <?php
          $i=0;
          while ($i < $num) {


          $f1=mysql_result($result,$i,"name");
          $f2=mysql_result($result,$i,"age");
          $f3=mysql_result($result,$i,"gender");
          $f4=mysql_result($result,$i,"currently_at_NGO");
          //$f5=mysql_result($result,$i,"img");


          if ($i%2==0) $f13="comment_odd";
          else $f13="comment_even";
          ?>
          <li class="<?php echo $f13; ?>">
          <h3>Name: <?php if($f1 == "") echo "N/A"; else echo $f1; ?></a></h3>
          <div class="author"><img class="avatar" src="images/e-book.jpg" width="100" height="100" alt="" style="float:right;"/></div>
          <br>
          <br>
            <div class="submitdate"><b>Age: </b><p><?php if($f2 == "") echo "N/A"; else echo $f2;?></p><br><br>
            Child currently at: </b> <?php if($f4 == "") echo "N/A"; else echo $f4; ?> <br><br>
            </div>
          
        </li>
      </a>
        <?php $i++; } include('mobile.php');?>
        </div>
      </ul>

</div>
</div>
</body>
</html>
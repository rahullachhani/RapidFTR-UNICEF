<?php include("connection.php");
session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Virtual Library | Resources | Ebooks</title>
</head>
<body id="top">
  <?php include("header.html"); ?>
<div class="wrapper row4">
  <div id="quicknav" class="clear">
    <ul>
      <li><a href="addachild.php">Add a child</a>
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
<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="container" class="clear">
    <div id="portfolio">
      <?php
        if(isset($_SESSION['uid'])){
        ?>
        <h2>Welcome Student 
      <?php
  
      echo $_SESSION['name'];
?> , &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
 <a href="logout.php">Log Out</a></h2>
<?php } ?>
</div>
<div id="content">
    <div id="comments">
       <?php
        $id = $_SESSION['uid'];
        
        $query="select * from information where ngo_id = '$id' or pid = '$id'";
        $result=mysql_query($query);
        $num=mysql_num_rows($result);

        ?>
      <ul class="commentlist">
        <?php
          $i=0;
          while ($i < $num) {

          $f1=mysql_result($result,$i,"name");
          $f2=mysql_result($result,$i,"nationality");
          $f3=mysql_result($result,$i,"name");
          $f4=mysql_result($result,$i,"keyword_location");
          $f5=mysql_result($result,$i,"keyword_person");
          $f6=mysql_result($result,$i,"keyword_others");
          $f7=mysql_result($result,$i,"birthmark");
          $f8=mysql_result($result,$i,"nickname");
          $f11=mysql_result($result,$i,"last_clothes_color");
          $f12=mysql_result($result,$i,"Unicef_id");


          if ($i%2==0) $f13="comment_odd";
          else $f13="comment_even";
          ?>
          <a href="<?php echo "view.php?rid=" . $f12 ;?>">
          <li class="<?php echo $f13; ?>">
          <h3><a href="<?php echo "view.php?rid=" . $f12 ;?>"><?php if($f1 == "") echo "N/A"; else echo $f1; ?></a></h3>
          <br>
            <div class="submitdate"><b>Nationality: </b><p><?php if($f2 == "") echo "N/A"; else echo $f2;?></p>
            <p><b>Keywords(if any):</b> <?php if($f4 == "" && $f5 == "" && $f6 = "") echo "N/A"; else echo $f4 . $f5 . $f6; ?> <br><br><b>Birth Mark: </b> <?php if($f7 == "") echo "N/A"; else echo $f7; ?> <br><br><b>Nickname (if any):  </b> <?php if($f8 == "") echo "N/A"; else echo $f8; ?><br><br>
              <b>Clothes worn last:  </b> <?php if($f11 == "") echo "N/A"; else echo $f11; ?><br><br>
            </div>
          
        </li>
      </a>
        <?php $i++; }?>
        </div>
      </ul>

</div>
</div>
</body>
</html>
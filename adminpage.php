<?php
include("connection.php");
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Admin | Moderate Forum</title>
</head>


<body id="top">
<?php include("header.html"); ?>


<div class="wrapper row5">
  <div id="container" class="clear">
    <!-- ####################################################################################################### -->
    <div id="portfolio">
        <h2>Welcome Admin 
      <?php
  
      echo $_SESSION['name'];
?> , &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
 <a href="logout.php">Log Out</a></h2>
  

 	<h1 style="font-size:25px;">Here You can Delete Existing Users</h1>


  </div>

  <div id="content">
    <table summary="Summary Here" cellpadding="0" cellspacing="0" width="200px">
        <?php
        include("connection.php");
        $id = $_SESSION['uid'];
        $query="select * FROM information";
        $result=mysql_query($query);
        $num=mysql_num_rows($result);
        ?>
        <thead>
          <tr>
            <th>Unique Id</th>
            <th>Name</th>
            <th>Child currently at?</th>
            <th>Clothes worn by child when lost</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i=0;
          while ($i < $num) {

          $f1=mysql_result($result,$i,"Unicef_id");
          $f2=mysql_result($result,$i,"name");
          $f3=mysql_result($result,$i,"currently_at_NGO");
          $f4=mysql_result($result,$i,"last_clothes_color");
          if ($i%2==0) $f7="dark";
          else $f7="light";
          ?>
          <tr class="<?php echo $f7; ?>">
            <td width="40%"><?php echo $f1 ?></td>
            <td><?php echo $f2 ?></td>
            <td><?php echo $f3 ?></td>
            <td><?php echo $f4 ?></td>
            <td><a href="delete_user.php?id=<?php echo $f1; ?>">Delete</a></td>
          </tr>
          <?php $i++; } ?>
        </tbody>
      </table>
  </div>
    <!-- ####################################################################################################### -->
  </div>
</div>
</body>
</html>
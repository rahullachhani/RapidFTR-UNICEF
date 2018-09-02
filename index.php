<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>RapidFTR</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<link rel="stylesheet" href="styles/popup1.css" type="text/css" />
<!-- Featured Slider Elements -->
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery-s3slider.js"></script>
<script type="text/javascript" src="scripts/jquery-s3slider.setup.js"></script>
<!-- End Featured Slider Elements -->
<script language=JavaScript> var message="Function Disabled!"; function clickIE4(){ if (event.button==2){ alert(message); return false; } } function clickNS4(e){ if (document.layers||document.getElementById&&!document.all){ if (e.which==2||e.which==3){ alert(message); return false; } } } if (document.layers){ document.captureEvents(Event.MOUSEDOWN); document.onmousedown=clickNS4; } else if (document.all&&!document.getElementById){ document.onmousedown=clickIE4; } document.oncontextmenu=new Function("alert(message);return false") </script>

<script type="text/javascript">
 
  $(document).ready(function() {
 
  $('a.login-window').click(function() {
 
  
 
  // Getting the variable's value from a link 
 
  var loginBox = $(this).attr('href');
 
  
 
  //Fade in the Popup and add close button
 
  $(loginBox).fadeIn(300);
 
  
 
  //Set the center alignment padding + border
 
  var popMargTop = ($(loginBox).height() + 24) / 2; 
 
  var popMargLeft = ($(loginBox).width() + 24) / 2; 
 
  
 
  $(loginBox).css({ 
 
  'margin-top' : -popMargTop,
 
  'margin-left' : -popMargLeft
 
  });
  // Add the mask to body
 
  $('body').append('<div id="mask"></div>');
 
  $('#mask').fadeIn(300);
 
  
 
  return false;
 
  });
 
  
 
  // When clicking on the button close or the mask layer the popup closed
 
  $('a.close, #mask').live('click', function() { 
 
  $('#mask , .login-popup').fadeOut(300 , function() {
 
  $('#mask').remove(); 
 
  }); 
 
  return false;
 
  });
 
  });
 
  </script>



</head>
<body id="top">
<div class="wrapper row1">
  <div id="topnav">
    <ul>
      <li><a href="index.php"><strong>&nbsp; &nbsp; Home</strong></a></li>
      <li><a href="courses.php"><strong>&nbsp; &nbsp; Who we work for?</strong></a></li>
      <li><a href="forum.php"><strong>&nbsp; &nbsp; Who are we?</strong></a></li>
      <li><a href="contactus.php"><strong>&nbsp; &nbsp; Contact Us</strong></a></li>
      <li><a href="help.php"><strong>&nbsp; &nbsp; Help</strong></a></li>
    </ul>
  </div>
</div>






  <div id="login-box" class="login-popup">
 
      <a href="#" class="close"><img src="images/close.png" class="btn_close" title="Close Window" alt="Close" /></a>
 
      <form method="post" action="checklogin1.php" style="font-size:14px;font-family:Georgia,serif;color:#666666;width:200px;">

      Your Id : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <input name="email" value="" type="text" autocomplete="on" placeholder="Enter your ID" size="25"/><br><br>
  
      Password : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <input name="password" value="" type="password" placeholder="Enter your valid Password" size="25" /><br><br>
      Login As?<br>
          <input type="radio" name="pers" value="1"> Parent <br>
          <input type="radio" name="pers" value="2" checked> Admin <br><br>

      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 

      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="Submit" value="Login"/>
      </form>
 	
      New Parent? Create an account<hr>

      <form method="post" action="registerparent.php" style="font-size:14px;font-family:Georgia,serif;color:#666666;width:200px;">

      Name : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <input name="name" value="" type="text" autocomplete="on" placeholder="Enter your ID" size="25"/><br><br>
  		
  	  Email Address : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <input name="email" value="" type="text" autocomplete="on" placeholder="Enter your ID" size="25"/><br><br>

      Password : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <input name="password" value="" type="password" placeholder="Enter your valid Password" size="25" /><br><br>

      Age : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <input name="age" value="" type="text" autocomplete="on" placeholder="Enter your ID" size="25"/><br><br>

      Gender : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <input name="gendr" value="" type="text" autocomplete="on" placeholder="Enter your ID" size="25"/><br><br>

      Apartment : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <input name="apartmnt" value="" type="text" autocomplete="on" placeholder="Enter your ID" size="25"/><br><br>

      City : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <input name="city" value="" type="text" autocomplete="on" placeholder="Enter your ID" size="25"/><br><br>

      Contact Info : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <input name="cinfo" value="" type="text" autocomplete="on" placeholder="Enter your ID" size="25"/><br><br>
      
      <input type="Submit" value="Register"/>
      </form>
    </div>
 
 
    <div id="register-box" class="login-popup">
 
      <a href="#" class="close"><img src="images/close.png" class="btn_close" title="Close Window" alt="Close" /></a>
  		<form method="post" action="checklogin.php" style="font-size:14px;font-family:Georgia,serif;color:#666666;width:200px;">

      Your Id : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <input name="email" value="" type="text" autocomplete="on" placeholder="Enter your Unique NGO ID" size="25"/><br><br>
  
      Password : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <input name="password" value="" type="password" placeholder="Enter your valid Password" size="25" /><br><br>
      
      NGO Name :
      &nbsp; &nbsp; &nbsp; &nbsp;
      <select name="ngo">
        <option value="UNICEF">UNICEF</option>
        <option value="HumanRights">HumanRights</option>
        <option value="SaveGirls">SaveGirls</option>
        <option value="StopTrafficking">StopTrafficking</option>
      </select>
      <br>
      <br>

      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="Submit" value="Login"/>
      </form>
    </div>
<!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div id="featured_slide_">
    <ul id="featured_slide_Content">
      <li class="featured_slide_Image"><a href="#"><img src="images/download.jpg" alt="" /></a>
        <div class="introtext">
          <h2>What is RapidFTR?</h2>
          <p>In every emergency, whether a natural disaster or an armed conflict, the commotion of survival and flight leads to the separation of children from their caregivers, leaving children vulnerable to violence, economic and sexual exploitation, and trafficking. </p>
        </div>
      </li>
      <li class="featured_slide_Image"><a href="#"><img src="images/lib4.jpg" alt="" /></a>
        <div class="introtext">
          <h2>Who we are?</h2>
          <p>RapidFTR is open-source and volunteer driven.Current practices to document separated children are outdated, inefficient and paper-driven. As a result, precious hours and days are lost in efforts to reunite children with their caregivers.</p>
        </div>
      </li>
      <li class="featured_slide_Image"><a href="#"><img src="images/lib5.jpg" alt="" /></a>
        <div class="introtext">
          <h2>Lets Reunite together</h2>
          <p>We're gonna unite The Families once more, because the Ballas have been pumpin' our guys full of base for too long while we argue among ourselves.</p>
        </div>
      </li>
      <li class="clear featured_slide_Image">
        <!-- Important - Leave This Empty -->
      </li>
    </ul>
  </div>
  <div id="hpage_featured_info" class="clear">
    <ul>
      <div style="float:left;"><li><a href="#register-box" class="login-window"><img src="images/register.jpg" alt="" /> <strong>1. Login to add child</strong></a></li></div>
      <div style="float:right;"><li><a href="#login-box" class="login-window"><img src="images/login1.jpg" alt="" /> <strong>2. Admin /Parent Login</strong></a></li></div>
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->    <!-- ####################################################################################################### -->
  </div>
</div>
<!--<?php include("footer.html"); ?>-->
</body>
</html>
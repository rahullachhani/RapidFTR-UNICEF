
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>jQuery Multilanguage Keyboard</title>

  <link rel="stylesheet" type="text/css" href="jquery.ml-keyboard.css">
  <link rel="stylesheet" type="text/css" href="demo.css">

  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="jquery.ml-keyboard.js"></script>
  <script src="demo.js"></script>
</head>
<body>
 <!--
<button>Button #1</button>
<button>Button #2</button>
<div><span>0</span> button #1 clicks.</div>
<div><span>0</span> button #2 clicks.</div>


<form name="jump">
<p align="center">
<select name="menu">
<option value="1" id="1">Text that will appear in the choices</option>
<option value="2" id="2">Text that will appear in the choices</option>
<option value="3" id="3">Text that will appear in the choices</option>
</select>
<input type="button" onClick="function($value)" value="GO">
</p>
</form>

<select>
<option name="English" value="1" onclick="color(this.value)"  >English</option>
<option name="French" value="2" onclick="color(this.value)" data-mlkeyboard-layout="ru">French</option>
<option name="Spanish" value="3" onclick="color(this.value)" data-mlkeyboard-layout="es">Spanish</option>


</select>

-->
<br>
<br>
<br>
<br>

      <div id="1">
        <h3>English</h3>
        <input type="text" id="example-1" class="col-md-12" placeholder="Try"/>
            </div>
			<div id="2">
        <h3>Russian</h3>
        <input type="text" id="example-2" class="col-md-12" placeholder="Try" data-mlkeyboard-layout="ru"/>
        </div>
<div id="3">
		<h3>Spanish</h3>
        <input type="text" id="example-2" class="col-md-12" placeholder="Try" data-mlkeyboard-layout="es"/>
       
	   
	   </div>
    
<script>


/*
$( "button:first" ).click(function() {
  update( $( "span:first" ) );
});
 
$( "button:last" ).click(function() {
  $( "button:first" ).trigger( "click" );
  update( $( "span:last" ) );
});*/
 function color(color_type){
if (color_type == '1'){

 var elem = document.getElementById('1');
elem.style.visibility='visible' 

 var elem = document.getElementById('2');
elem.style.visibility='hidden' 
 var elem = document.getElementById('3');
elem.style.visibility='hidden' 



} 
else if(color_type == '2'){
 var elem = document.getElementById('2');
elem.style.visibility='true' 

 var elem = document.getElementById('1');
elem.style.visibility='hidden' 

 var elem = document.getElementById('3');
elem.style.visibility='hidden' 
}
else{
 var elem = document.getElementById('3');
elem.style.visibility='visible'

 var elem = document.getElementById('1');
elem.style.visibility='hidden' 

 var elem = document.getElementById('2');
elem.style.visibility='hidden'  

}
}
/*
function update( j ) {
  var n = parseInt( j.text(), 10 );
  j.text( n + 1 );
}*/
</script>
 
</body>
</html>
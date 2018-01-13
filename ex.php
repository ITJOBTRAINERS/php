<html>

<head>
  <title>javascript</title>
  <h1>add click event</h1>
</head>
<body>

<input type = "text" id ="Textbox1" value=""></br>
<input type="button" value = "clickme" onclick ="fun1();"></br>
<span id= "red">Display result here:</span>
<script type="text/javascript"> 
function fun1()
{
	var txt = document.getElementById("Textbox1").value;
	vas s = txt.value;
	var msg = "The Value Which You Entered is:" +txt;
	var sp =  document.getElementById("red");
	sp.innerHTML = msg;
}

</script>
</body>
</html>
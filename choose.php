

<!DOCTYPE html>
<html>
<head><title></title></head>
<body>
<h2>select your car</h2>
<form method="post" action="car.php">
Type: <br/>
<select name="seltype">
<option value="porsche 911">porsche 911</option>
<option value="volkswagen beetle">volkswagen beetle</option>
<option value="ford taurus">ford taurus</option>
</select>
<p>
color: <br>
<input type="text" name="txtcolor"><p>
<input type="submit">
type:<br/>
<select name="language">
<option value="html">html</option>
<option value="php">php</option>
<option value="css">css</option>
</select><p>
color: <br>
<?php
echo '<p style="color:red; padding:20px; background-color:#444;"">aaaaaaaaaaaaa</p>';
?>
</form>
</body>
</html>
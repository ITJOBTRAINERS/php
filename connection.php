<?php
$host = "localhost";
$dbuser = "gowrikumar"
$pass = "9966246136"
$dbname = " ";
$conn=mysqli_connect($host,$dbuser,$pass,$dbname);
if(mysqli_connect_error())
{
	die("connection Failed".mysqli_connect_error());
}
else
{
	echo "connected to database($dbname)";
}
?>
<html>
<head>
<title>database connection</title>
</head>
<body>
</body>
</html>
<?php
mysqli_close($conn);
?>
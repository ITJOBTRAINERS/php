<DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "enqiry";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT name, mobile_number, email, alternate_number, courses, isactive FROM enqiry";
//echo $sql;
$result = mysqli_query($conn, $sql);
?>
<table border="1" width="500px">
<tr><th>Name</th><th>Mobile Number</th><th>Email</th><th>Alt_number</th><th>Courses</th><th>Status</th><tr>

<?php
if(mysqli_num_rows($result)>0){
	while($row = mysqli_fetch_assoc($result)){
?>
<tr><td><?php echo $row["name"] ?></td><td><?php echo $row["mobile_number"]?></td><td><?php echo $row["email"];?></td><td><?php echo $row["alternate_number"];?></td><td><?php echo $row["courses"];?></td><td><?php echo $row["isactive"];?></td></tr>
		
<?php	} ?></table>
<?php
}
else{
	echo "result 0";
}
mysqli_close($conn);

?>

</body>
</html>
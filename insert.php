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

$sql = " name, mobile_number, email, alternate_number, courses, isactive FROM enqiry";
echo $sql;
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
	while($row = mysqli_fetch_assoc($result)){
		echo "Name".$row["name"]."Mobilenumber".$row["mobile_number"]."Alternatenumber".$row["alternate_number"]."Courses".$row["courses"]."Isactive".$row["isactive"];
	}
}
else{
	echo "result 0";
}
mysqli_close($conn);

?>

</body>
</html>
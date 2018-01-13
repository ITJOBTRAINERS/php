<?php
$name = $_POST['name'];
echo($name);
$MobileNumber = $_POST['mobile'];
echo ($MobileNumber);
$Email = $_POST['email'];
echo ($Email);
$Alternatenumber = $_POST['alt_number'];
echo ($Alternatenumber);
$Courses = $_POST['courses'];
echo ($Courses);
$Isactive = $_POST['isactive'];
echo ($Isactive);
//connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "enqiry";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//if (!$conn) {
  //  die("Connection failed: " . mysqli_connect_error());
//}

$sql = "INSERT INTO enqiry (name, mobile_number, email,alternate_number,courses,isactive)
VALUES ('$name',$MobileNumber,'$Email',$Alternatenumber,$Courses,$Isactive)";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
//echo $sql;
//if (mysqli_query($conn, $sql)) {
  //  echo "New record created successfully";
//} else {
 //   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//}

//mysqli_close($conn);

?>

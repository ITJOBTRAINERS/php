<?php
//php include
include 'db_connection.php';

$name = $_POST['name'];
echo($name);
$Mobile_number = $_POST['mobile'];
echo ($Mobile_number);
$Email = $_POST['email'];
echo ($Email);
$Alternatenumber = $_POST['alt_number'];
echo ($Alternatenumber);
$Courses = $_POST['courses'];
echo ($Courses);
$Isactive = $_POST['isactive'];
echo ($Isactive);
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "enqiry";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
*/
$sql = "INSERT INTO enquiry (name, mobile_number, email,alternate_number,courses,isactive)
VALUES ('$name',$Mobile_number,'$Email',$Alternatenumber,'$Courses',$Isactive)";
echo $sql;
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
header("Location: enq.php"); /* Redirect browser */
exit();
?>

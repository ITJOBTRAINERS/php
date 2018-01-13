<?php
$name = $_POST['name'];
echo($name);
$mobile = $_POST['mobile'];
echo ($mobile);
$alt_number = $_POST['alt_number'];
echo ($alt_number);
$email = $_POST['email'];
echo ($email);
$address = $_POST['address'];
echo ($address);
$message = $_POST['message'];
echo ($message);
$courses=0;
$isactive=1;

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

$sql = "INSERT INTO enqiry (name, mobile_number, email,alternate_number,address,message,courses,isactive)
VALUES ('$name',$mobile,'$email',$alt_number,'$address','$message',$courses,$isactive)";
//echo $sql;
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header('Location: enq.php'); 

?>
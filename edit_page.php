<?php
$id = $_POST['id'];
$name = $_POST['name'];
echo($name);
$mobile_number = $_POST['mobile'];
echo ($mobile_number);
$alternate_number = $_POST['alt_number'];
echo ($alternate_number);
$email = $_POST['email'];
echo ($email);
$courses = $_POST['courses'];
echo ($courses);
$address = $_POST['address'];
echo ($address);
$message = $_POST['message'];
echo ($message);
$isactive = $_POST['isactive'];
echo ($isactive);
/* database connection*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "enquiry_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE  enquiry SET name ='$name',mobile_number = $mobile_number,alternate_number = $alternate_number,email = '$email',courses = '$courses',address= '$address',message = '$message' ,isactive = '$isactive' WHERE enquiry_id='$id'";
echo $sql;
if (mysqli_query($conn, $sql)) {
    echo "New record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header('Location: enq.php');

?>

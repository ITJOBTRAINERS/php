<?php
$id = $_POST['id'];
$name = $_POST['name'];
echo($name);
$mobile = $_POST['mobile'];
echo ($mobile);
$email = $_POST['email'];
echo ($email);

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
$sql = "UPDATE  faculties SET name ='$name',mobile = $mobile,email = '$email'WHERE faculty_id='$id'";
echo $sql;
if (mysqli_query($conn, $sql)) {
    echo "New record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
header('Location: faculties.php');
?>

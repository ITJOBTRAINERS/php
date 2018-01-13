<?php
$Studentid = $_POST['studentid'];
echo ($Studentid);
$Name = $_POST['name'];
echo ($Name);
$selected_radio = $_POST['gender'];
echo ($selected_radio);
$Dob =$_POST['edob'];
echo ($Dob);
$Percentage = $_POST['percentage'];
echo ($Percentage);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO student (studentid,name,gender,dob,percentage)
VALUES ('$Studentid','$Name',$Gender,'$Dob','$Percentage')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>

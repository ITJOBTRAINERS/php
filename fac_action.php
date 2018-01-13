<?php
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
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "INSERT INTO faculties (name, mobile, email)
VALUES ('$name',$mobile,'$email')";

$conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;
header('Location:faculties.php');
?>

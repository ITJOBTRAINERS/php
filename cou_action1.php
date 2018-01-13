<?php
$name = $_POST['name'];
echo($name);
$description = $_POST['description'];
echo ($description);
$email = $_POST['email'];
echo ($email);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "enqiry";

// Create connection
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "INSERT INTO courses (name, description, email)
VALUES ('$name','$description','$email')";
//echo $sql;
$conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
header('Location: course.php'); 

?>
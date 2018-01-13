<?php
$uname = $_POST['username'];
echo ($uname);
$pcode = $_POST['password'];
echo ($pcode);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "enquiry_db";

$conn = mysqli_connect($servername,$username,$password,$dbname);
 if (!$conn) {
 	die("connection failed: ". mysqli_connect_error());
 }

 $sql = "SELECT user_id,isactive FROM user_info WHERE  user_name = '$uname' and password = '$pcode'";
 echo $sql;
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['isactive'];

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
         //session_register("username");
         $_SESSION['login_user'] = $uname;

         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }

   ?>

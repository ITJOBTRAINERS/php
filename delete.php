<?php  
 $connect = mysqli_connect("localhost", "root", "", "enqiry");  
 $sql = "DELETE FROM gowri WHERE id = '".$_POST["id"]."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Deleted';  
 }  
 ?>
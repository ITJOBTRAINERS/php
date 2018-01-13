<!DOCTYPE html>
<html>
<head>
<script src ="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src ="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src ="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<link rel=StyleSheet href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.css" TYPE="text/css" MEDIA="screen">
<link rel=StyleSheet href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" TYPE="text/css" MEDIA="screen">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="#">My PHP CRUDE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Service</a>
        </li>
      </ul>
    </div>
  </nav>
<div class="container-fluid">
<div class="row">
<div class="col-md-2 col-lg-2 col-xl-2">
  <a href="enq.php">ENQUIRY</a><br/>
  <a href="faculties.php">FACULTIES</a><br/>
  <a href="course.php">COURSE</a><br/>
</div>
<div class="col-md-9 col-lg-9 col-xl-9">
<a href="course.php"><button type="button" class="btn btn-info">&nbsp;View Course&nbsp;</button></a>
<hr>
<?php
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

$id=$_GET['id'];
$sql="SELECT course_id,name,description FROM courses WHERE course_id=$id";
//echo $sql;
$result=mysqli_query($conn, $sql);
   if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

?>
<form class="form-horizontal" method="post"action="edit_course.php">
    <div class="form-group row">
    <label for="inputname" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-4">
      <input type="hidden" name="id" value="<?php echo $row["course_id"]?>">
      <input type="text" class="form-control" id="name"  placeholder="Enter Name" name="name" value="<?php echo $row["name"]?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputmobile" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-4">
      <textarea name="description" class ="from-control" rows="5" cols="40" placeholder="Description"><?php echo $row["description"]?></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputmessage" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-4">
      <input type="submit" class="btn btn-info" value="UPDATE">
    </div>
  </div>
</form>
<?php
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

?>

    </div>
    </div>
    </div>
    <script>

    </script>
   </body>
   </html>

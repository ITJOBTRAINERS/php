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
</div>
<div class="col-md-9 col-lg-9 col-xl-9">
<a href="enq.php"><button type="button" class="btn btn-info">&nbsp;View Enquiry&nbsp;</button></a>
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
$sql="SELECT enquiry_id,name,mobile_number,email,alternate_number,address,message,courses,isactive FROM enquiry WHERE enquiry_id=$id";
//echo $sql;
$result=mysqli_query($conn, $sql);
   if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

?>
<form class="form-horizontal" method="post"action="edit_page.php">
    <div class="form-group row">
    <label for="inputname" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-4">
      <input type="hidden" name="id" value="<?php echo $row["enquiry_id"]?>">
      <input type="text" class="form-control" id="name"  placeholder="Enter Name" name="name" value="<?php echo $row["name"]?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputmobile" class="col-sm-2 col-form-label">Mobile</label>
    <div class="col-sm-4">
      <input type="number" class="form-control" id="inputmobile" placeholder="Enter Mobile" name="mobile" value="<?php echo $row["mobile_number"]?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputmobile" class="col-sm-2 col-form-label">Alt Number</label>
    <div class="col-sm-4">
      <input type="name" class="form-control" id="inputmobile" placeholder="Enter Mobile" name = "alt number" value="<?php echo $row["alternate_number"]?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputemail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-4">
      <input type="name" class="form-control" id="inputemail" placeholder="Enter Email" name = "email" value="<?php echo $row["email"]?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputname" class="col-sm-2 col-form-label">Courses</label>
    <div class="col-sm-4">
    <select name="courses">
      <option value="<?php echo $row["courses"]?>"><?php echo $row["courses"]?></option>
      <option value="">Select</option>
      <option value="PHP">PHP</option>
      <option value="HTML">HTML</option>
      <option value="CSS">CSS</option>
      <option value="Java">Java</option>
      <option value="SQL">SQL</option>
    </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputmessage" class="col-sm-2 col-form-label">Status</label>
    <div class="col-sm-4"><?php $isa= $row["isactive"];?>
      <input type="radio" name="isactive" value="1" <?php if($isa==1)echo "checked"?>>Active
      <input type="radio" name="isactive" value="0" <?php if($isa==0)echo "checked"?>>Inactive
    </div>
  </div>
  <div class="form-group row">
    <label for="inputname" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-4">
    <textarea class="form-control" rows="4" id="inputaddress" placeholder="Enter Address" name = "address"><?php echo $row["address"]?></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputmessage" class="col-sm-2 col-form-label">Message</label>
    <div class="col-sm-4">
      <textarea class="form-control" rows="5" id="inputmessage" placeholder="Enter Address" name = "message"><?php echo $row["message"]?></textarea>
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
}
else {
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

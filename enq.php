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
<a href="addenquiry.php"><button type="button" class="btn btn-info">&nbsp;Add Enquiry&nbsp;</button></a>
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
if(isset($_GET['id'])){
$id = $_GET['id'];
$delsql = "DELETE FROM enquiry WHERE enquiry_id=$id";
if (mysqli_query($conn, $delsql)) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }
}
$sql = "SELECT enquiry_id, name, mobile_number, email, alternate_number, address FROM enquiry ORDER BY enquiry_id DESC";
//echo $sql;
$result=mysqli_query($conn, $sql);
?>
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Edit</th>
            </tr>
        </tfoot>
        <tbody>
    <?php
        if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

?>
            <tr>
                <td><?php echo $row["name"]?></td>
                <td><?php echo $row["mobile_number"]?></td>
                <td><?php echo $row["email"] ?></td>
                <td>
                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>&nbsp;&nbsp;
                <a href="editenq.php?id=<?php echo $row["enquiry_id"]?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>&nbsp;&nbsp;
                <a href="enq.php?id=<?php echo $row["enquiry_id"]?>"><i class="fa fa-trash-o fa-stack text-danger"></i></a>
          </td>
            </tr>
<?php
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

?>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
   </body>
   </html>

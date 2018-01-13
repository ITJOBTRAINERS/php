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
<a href="course.php"><button type="button" class="btn btn-info">&nbsp;view Courses&nbsp;</button></a>
<hr>
<form class="form-horizontal" method="post"action="cou_action1.php">
    <div class="form-group row">
    <label for="inputname" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="inputname"  placeholder="Enter Name" name="name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputmobile" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-4">
      <textarea name="description" class ="from-control" rows="5" cols="40" placeholder="Description"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputmessage" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-4">
      <input type="submit" class="btn btn-info" value="SUBMIT">
    </div>
  </div>
</form>

    </div>
    </div>
    </div>
    <script>

    </script>
   </body>
   </html>

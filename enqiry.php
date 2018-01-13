<DOCTYPE html>
<html>
<head>
</head>
<body>
<form method = "POST" action = "enquiryaction.php">
<label>Name</lable><input type ="text" name = "name"></br>
<label>Mobile Number</lable><input type ="text" name = "mobileone"></br>
<label>Email</lable><input type ="text" name = "email"></br>
<label>Alternate number</lable><input type ="text" name = "mobiletwo"></br>
<label>Address</lable><textarea></textarea></br>
<label>Course</lable><select name="courses">
                      <option value = "1">core java</option>
                      <option value = "2">advanced</option>
                      </select><br/>
<label>Status</label><select name="isactive">
                        <option value = "1">Active</option>
                        <option value = "2">inactive</option>
                        </select></br>
<button>Submit</button><input type = "submit" value "SUBMIT">                        
</body>
</html>
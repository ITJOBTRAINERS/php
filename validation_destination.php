<html>
<head>
<title>form_destination</title>
</head>
<body>
<?php
 if(isset ($_POST ['submit']))
 {
 	$name = $_POST['name'];
 	$age = $_POST['age'];
 	$email = $_POST['age'];
 	if (strlen($name)<6)
 	{
 		echo "username too short!";
 	}
 	elseif (!is_numeric($age))
 	{
 		echo "only digits are allowed!";
 	}
 	elseif (empty($email))
 	{
 		echo "please enter valid email address!";
 	}
 	else
 	{
 		echo "you logged successfully!";
 	}
}
?>
</body>
</html>
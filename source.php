<html>
<head>
<title>passing values through query string</title>
</head>
<body>
<?php
$name = "gowri";
$age = 22;
$email = "gowri@gmail.com";
$str = "name = {$name}&age={$age}&email={$email}";
?>
<a href="destination.php?<?php echo $str; ?>">destination</a>
</body>
</html>
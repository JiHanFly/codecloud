

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
$email= $_GET["email"];
$password = $_GET["password"];
$confirmPassword = $_GET["confirmPassword"];
$passwordHash=sha1($password);
if ($password !== $confirmPassword)
	echo "Passwords do not match kindly go back and re enter.";
else
$mysql = new mysqli('localhost', 'root', 'thisismylife', 'code_cloud') or die('you\'re dead');
$result= $mysql -> query (" INSERT INTO user_data(userEmail,userPassword) VALUES('$email' , '$passwordHash' )  " ) or die ($mysql -> error);
mkdir("C:\wamp\www\code_cloud\ $email",0777,true);


 ?>

</body>
</html>



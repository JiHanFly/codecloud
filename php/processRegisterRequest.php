

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
echo $password;
if ($password !== $confirmPassword)
	echo "Passwords do not match kindly go back and re enter.";
else


 try {
                require_once 'conf.php';
                $conn = mysqlConnector();
                $stmt = $conn->prepare('INSERT INTO user_data(userEmail,userPassword) VALUES('$email' , '$passwordHash' )');
                $stmt->execute();
                mkdir("~/$email",0777,true);


               


        } catch(PDOException $e) {
                echo 'ERROR: ' . $e->getMessage();
        }




 ?>

</body>
</html>



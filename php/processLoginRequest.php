<!DOCTYPE html>
<html>
<head>
	<title></title>
<? 

$email= $_GET["email"];
$password = $_GET["password"];
$passwordHash = sha1($password);


 try {
        require 'conf.php';
        $conn = mysqlConnector();
       # $query= "SELECT * FROM user_data WHERE userEmail='$email'";
   

	$sth = $conn->prepare("SELECT * FROM user_data WHERE userEmail='$email'");
	$sth->execute();
   	$result = $sth->fetch(PDO::FETCH_OBJ);
	print $result->userPassword;
	print("\n");


    }


         catch(PDOException $e) {
                echo 'ERROR: ' . $e->getMessage();
        }


?>

</head>
<body>



</body>
</html>
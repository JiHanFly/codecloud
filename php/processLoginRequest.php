<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<? 

$email= $_GET["email"];
$password = $_GET["password"];
$passwordHash = sha1($password);


 try {
        require_once 'conf.php';
        $conn = mysqlConnector();
        $query="SELECT * FROM user_data WHERE userEmail='$email' ";
		$result= $conn -> query($query) or die ($conn -> error);
		
       	if($result) {
        while($row = $result->fetch_object()) {
        $userPassword = $row-> userPassword;
        echo $userPassword;

        }
        $result->close();
     
    }
    else
    	{
    		echo "something went wrong";
    	}
             
       
		
	
	


    }


         catch(PDOException $e) {
                echo 'ERROR: ' . $e->getMessage();
        }


?>

</body>
</html>
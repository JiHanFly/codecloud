<html>
<head>  </head>
<body>
<?php 
$fileData=$_POST['fileContents'];
$fileName=$_POST['fileName'];
session_start();
$email = $_SESSION['sessionVar'];

$filePath='/var/lib/openshift/52106d8ce0b8cd5b44000013/app-root/data/'.$email."/".$fileName;
$handle=fopen($filePath,"w+");
$x=fwrite($handle,$fileData);

if($x!=NULL)
{
    header("Location: myFiles.php");
			die();

}else
{
    echo "Something went wrong. Your file wasn't saved! :( ";
}


?>    
    
</body>


</html>

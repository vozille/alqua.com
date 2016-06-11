<!DOCTYPE html>
<html>
<head>
    <title>login</title>
</head>
<body>
<?php 
    $server = "localhost";
	$user = "root";
	$password = "fakechintu";
	$db = "test_database";

	$login_user =  $_POST["user_register"];
    $login_pass = $_POST["pass_register"];
    $login_mail = $_POST["email"];

    $conn = mysqli_connect($server, $user, $password, $db);
    if(! $conn){
        include('404.html');
    }
    else{
        $sql = "INSERT INTO `login` VALUES("."NULL,"."\"".$login_user."\"".','."\"".sha1($login_pass)."\"".','."\"".$login_mail."\"".")";
        echo $sql;
        $result = mysqli_query($conn, $sql);
        echo "Successfully Registered";
    }
?>

</body>
</html>

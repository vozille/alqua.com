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

	$login_user =  $_POST["user"];
    $login_pass = $_POST["pass"];

    $conn = mysqli_connect($server, $user, $password, $db);
    $sql = "SELECT password FROM `login` where username = \"".$login_user."\"";
    $result = mysqli_query($conn, $sql);
    $rows = array();
    $row = mysqli_fetch_assoc($result);

    $check = $row["password"];
    if(strcmp($check, sha1($login_pass)) != 0){
        echo "Incorrect Username or password";
    }
    else{
        echo "Welcome Home my love";
    }
?>

</body>
</html>

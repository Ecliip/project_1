<?php
if(isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = 'root';
    $password = 'root';
    $db = 'mydb1';
    $host = 'localhost';
    $port = 3307;

    $link = mysqli_init();
    $connection = mysqli_connect(

        $host,
        $user,
        $password,
        $db,
        $port
    );

    if($connection){
        echo "we are connected <br>";
    } else {
        die("DB connection failed!");
    }
}





//    if($username && $password){
//        echo "it is ok <br>";
//    }
//} else {
//    echo "i didnt get the data";
//}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action=<?php $_SERVER['PHP_SELF'] ?>>
    <div>
        name: <input type="text" name="username">
    </div>
    <div>
        password: <input type="password" name="password">
    </div>
    <div>
        <input type="submit" name="submit">
    </div>
    <?php

    ?>

</form>
</body>
</html>
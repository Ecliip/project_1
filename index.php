<?php
include "utilities.php";

if(isset($_POST['submit'])){
    $username = $_POST['name'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    echo "<br> $username, $password, $id";

    $res = mysqli_query(
            $con,
            "UPDATE users
            SET
            username = '$username',
            password = '$password'
            WHERE
            id = $id"

    );
    if(!$res){
        die("Query doesn't work: " . mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action="index.php">
    <div>
        name: <input type="text" name="name">
    </div>
    <div>
        password: <input type="text" name="password">
    </div>
    <div>
        id: <select name="id" id="">
            <?php
            printOptions();
            ?>

        </select>
    </div>

    <div>
        <input type="submit" name="submit" value="Update">
    </div>

</form>

</body>
</html>
<?php
$user = 'root';
$password = 'root';
$db = 'mydb1';
$host = 'localhost';
$port = 3307;

$con = mysqli_connect(
        $host,
        $user,
        $password,
        $db,
        $port);

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
} else {
    echo "it is connected <br>";
}
$result = mysqli_query(
        $con,
        "SELECT * FROM users");
if ($result) {
    echo "Returned rows are: " . mysqli_num_rows($result) . "<br>";
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
        email: <input type="email" name="email">
    </div>
    <div>
        email: <select name="id" id="">
            <?php
            while($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                echo "<option value='$id'>$id</option>";
            } ?>

        </select>
    </div>

    <div>
        <input type="submit" name="submit" value="Submit">
    </div>

</form>

</body>
</html>
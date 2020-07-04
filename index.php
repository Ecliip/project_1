<?php
include "utilities.php";

if(isset($_POST['submit'])){
    updateData(
        $_POST['name'],
        $_POST['password'],
        $_POST['id']
    );
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
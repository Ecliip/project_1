<?php
include "utilities.php";

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
            printData();
            ?>

        </select>
    </div>

    <div>
        <input type="submit" name="submit" value="Submit">
    </div>

</form>

</body>
</html>
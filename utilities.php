<?php include "DBConnection.php";

function printOptions(){
global $result;
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}

function updateData($username, $password, $id){
    global $result, $con;
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
    if(!$result){
        die("Query doesn't work: " . mysqli_error($con));
    }
}

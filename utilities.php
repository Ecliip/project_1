<?php include "DBConnection.php";

function printOptions(){
    global $con;

    $result = mysqli_query(
        $con,
        "SELECT * FROM users");
    if ($result) {
        echo "Returned rows are: " . mysqli_num_rows($result) . "<br>";
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            echo "<option value='$id'>$id</option>";
        }
    }
}

function updateData($username, $password, $id){
    global $result, $con;

    $result = mysqli_query(
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

function deleteData($id){
    global  $con;

    $result = mysqli_query(
        $con,
        "DELETE FROM users
            WHERE id = $id"
    );
    if(!$result){
        die("Query doesn't work: " . mysqli_error($con));
    }
}

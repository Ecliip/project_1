<?php include "DBConnection.php";

function printData(){
    global $result;
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}
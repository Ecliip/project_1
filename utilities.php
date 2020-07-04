<?php include "DBConnection.php";

function printOptions(){
global $result;
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}
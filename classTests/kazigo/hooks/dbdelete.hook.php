<?php
require './hooks/dbinsert.hook.php';
function dbdelete($conn){
$table= "";
$where = "";
$i=0;
$sql = 'DELETE FROM ' .$table.'WHERE'.$where=$i;

    if (mysqli_query($conn, $sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
}
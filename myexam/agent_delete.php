<?php
include "dbconnection.php";

if (isset($_GET["agid"])) {
    $agid = $conn->real_escape_string($_GET["agid"]);

    // Prepare DELETE statement
    $sql = "DELETE FROM agent WHERE agid = $agid";

    // Execute DELETE statement
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
         header("Location: agent_table.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
$conn->close();
?>
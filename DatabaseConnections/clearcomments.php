<?php

include 'connect.php';

$sql = "DELETE FROM dog_mp4";

if ($conn->query($sql) === TRUE) {
    echo "All comments have been deleted successfully.";
} else {
    echo "Error deleting comments: " . $conn->error;
}

$conn->close();
?>
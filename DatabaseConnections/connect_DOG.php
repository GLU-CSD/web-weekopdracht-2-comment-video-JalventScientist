<?php

include "connect.php";

$sql = "SELECT _name, _mail, _comment FROM dog_mp4";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='comment'>
        <p id='username'>" .$row["_name"]. "</p>
        <p id='email'>" .$row["_mail"]. "</p>
        <p id='content'>" .$row["_comment"]. "</p>
        </div>";
    }
} else {
    echo "There are no comments on this video yet. Be the first to comment!";
}

$conn->close();
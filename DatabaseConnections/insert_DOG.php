<?php

include 'connect.php';



$sql = "INSERT INTO dog_mp4 (_name, _mail, _comment)

VALUES ('". $_POST['_name']. "', '".$_POST['_mail']."', '".$_POST['_comment']."')";
if($conn->query($sql)){
    header("Location: ../index.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
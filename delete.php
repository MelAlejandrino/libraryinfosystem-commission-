<?php
include "config.php";
if (isset($_GET['BookID'])) {
    $id = $_GET['BookID'];
    $sql = "DELETE FROM `books` WHERE `BookId`='$id'";
    $result = $conn->query($sql);
    if ($result == TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}

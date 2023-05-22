<?php
include 'config.php';
if (isset($_POST['update'])) {
    $BookID = isset($_POST['BookID']) ? $_POST['BookID'] : "";
    $Name = $_POST['Name'];
    $Writer = $_POST['Writer'];
    $AvailableCopy = $_POST['AvailableCopy'];
    $sql = "UPDATE `books` SET `Name`='$Name',`Writer`='$Writer',`AvailableCopy`='$AvailableCopy' WHERE `BookID`='$BookID'";
    $result = $conn->query($sql);
    if ($result == TRUE) {
        header("Location:index.php");
    } else {
        echo "Error:" . $sql . "<br>" . $conn->$error;
    }
}
$conn->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Add a Book</title>
</head>

<body class="container bg-opacity-75 p-3 min-vh-100 | bg-black">
    <section class="border gap-1 rounded-5 position-relative bg-white border-secondary h-100 d-flex | p-3" style="min-height: 95vh">
        <div class="w-100 justify-content-center  d-flex flex-column | ">
            <h1>ADD A BOOK</h1>
            <form action="" method="post" class="d-flex gap-2 w-100 flex-column">
                <label for="BookID">Book ID:</label>
                <input type="text" name="BookID">

                <label for="Name">Book Name:</label>
                <input type="text" name="Name">

                <label for="Writer">Book Writer</label>
                <input type="text" name="Writer">

                <label for="AvailableCopy">Available Copy</label>
                <input type="text" name="AvailableCopy">

                <input type="submit" name="submit" value="ADD BOOK" class="bg-black border-0 p-3 text-white rounded w-100 text-center">
            </form>
            <a href="index.php" class="border bg-black text-white text-decoration-none p-2 rounded w-100 text-center">VIEW BOOKS</a>
        </div>
        <div class="w-100 align-items-center d-flex">
            <img class="w-100 h-100" src="https://images.unsplash.com/photo-1481627834876-b7833e8f5570?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=928&q=80" alt="">
        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>

<?php
include "config.php";
if (isset($_POST['submit'])) {
    $bookID = $_POST['BookID'];
    $Name = $_POST['Name'];
    $Writer = $_POST['Writer'];
    $AvailableCopy = $_POST['AvailableCopy'];
    $sql = "INSERT INTO `books` (`BookID`, `Name`, `Writer`, `AvailableCopy`) VALUES ('$bookID', '$Name','$Writer',$AvailableCopy);";
    $result = $conn->query($sql);
    if ($result == TRUE) {
    } else {
        echo "Error:" . $sql . "<br>" . $conn->$error;
    }
    $conn->close();
}
?>
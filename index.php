<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Library Information System</title>
</head>

<body class="container bg-opacity-75 p-3 min-vh-100 | bg-black">
    <section class="border rounded-5 position-relative bg-white border-secondary h-100 d-flex align-items-center | flex-column | p-3" style="min-height: 95vh">
        <h1 class="text-center">LIBRARY INFORMATION SYSTEM</h1>
        <table id='table' border=2 class="table table-striped table-hover table-dark table-bordered"> 
            <tr>
                <td>Book Id</td>
                <td>Name</td>
                <td>Writer</td>
                <td>Available Copy</td>
                <td>Action</td>
            </tr>
            <?php
            include 'config.php';
            $sql = "SELECT * FROM books";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["BookID"] . "</td><td>" . $row["Name"] . "</td><td> " . $row["Writer"] .  "</td><td>" . $row["AvailableCopy"] .   "</td><td class='d-flex gap-1'><a href=delete.php?BookID=" . $row["BookID"] . " class='bg-black text-decoration-none text-uppercase text-white border p-1 text-center rounded px-3'>Delete </a>  <a href='edit.php?BookID=" . $row["BookID"] . "' class='text-decoration-none text-uppercase text-white border p-1 text-center rounded bg-black px-3'>Edit </a>    </td></tr>";
                }
            }
            $conn->close();


            ?>
        </table>
        <a href="add.php" class="border bg-black text-white text-decoration-none p-2 rounded end-0 bottom-0 position-absolute ">ADD BOOK</a>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>

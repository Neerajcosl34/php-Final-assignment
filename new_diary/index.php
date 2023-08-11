<?php
$connection = mysqli_connect("localhost", "root", "Admin@1234", "notes_db");
echo "hello world";
if (!$connection) {
    
    die("Connection failed: " . mysqli_connect_error());
}

$filter_date = $_GET["filter_date"] ?? "";

if ($filter_date) {
    $query = "SELECT * FROM tbl_note WHERE date = '$filter_date'";
} else {
    $query = "SELECT * FROM tbl_note";
}

$result = mysqli_query($connection, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Date: " . $row["date"] . "<br>";
        echo "Note: " . $row["note"] . "<br><br>";
    }
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);
?>

<?php
$connection = mysqli_connect("localhost", "root", "Admin@1234", "notes_db");
echo "hello world";
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}   
print_r($_SERVER['REQUEST_METHOD']);
    echo "hello osl";
    // $id=$_POST["id"];
    $date = $_POST['date'];
    $note = $_POST["note"];
    $query = "INSERT INTO tbl_note (date, note) VALUES ('$date','$note')";
    $res=mysqli_query($connection,$query);
    if($res)
    {
        echo "Note added successfully.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }

mysqli_close($connection);
?>

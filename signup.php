<?php

$username = $_REQUEST['username'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

if (isset($_POST['btntest'])) {
    $host = "localhost";
    $user = "root";
    $password = ""; 
    $db = "web";

    $conn = mysqli_connect($host, $user, $password, $db);

    $insert = "INSERT INTO w VALUES ('$username', '$email', '$password')";

    if (mysqli_query($conn, $insert)) {
        echo "<h1 style='color:blue;'>Done</h1>";
    } else {
        echo "<h1 style='color:red;'>Failed: " . mysqli_error($conn) . "</h1>";
    }

    mysqli_close($conn);
}
?>

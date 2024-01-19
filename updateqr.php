<?php
require_once 'connection.php';
echo "php code executed<br>";

if (isset($_POST['name'])) {
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $datetime = 'NOW()';

    $update_query = mysqli_query($connection, "insert into scannning_details (scanned_at, name) values ($datetime, '$name')");
    if ($update_query) {
        echo "<script>alert('Data saved successfully');</script>";
    }
}
?>
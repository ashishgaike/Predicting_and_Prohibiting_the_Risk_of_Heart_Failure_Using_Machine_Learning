<?php
@include '../signin_up/db_connection.php';

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM doctor where id = $id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location:doctor.php');
    } else {
        echo "Failed";
    }
}

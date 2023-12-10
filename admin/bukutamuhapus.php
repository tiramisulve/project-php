<?php
require_once('../../required/database.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM bukutamu WHERE id='{$id}'";
    $result = mysqli_query($connectDb, $query);
    
    if ($result) {
        header('location: bukutamu.php?delete=sukses');
    } else {
        header('location: bukutamu.php?delete=gagal');
    }
}
else {
    header('location: bukutamu.php');
}
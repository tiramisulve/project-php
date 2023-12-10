<?php
require_once('../required/database.php');

if (isset($_GET['id'])) {
    $experience_id = strip_tags(mysqli_escape_string($connectDb, $_GET['id']));

    $query = "DELETE FROM experience WHERE id = {$experience_id}";
    $result = mysqli_query($connectDb, $query);

    if ($result) {
        header("Location: index.php?successMessage=Experience berhasil dihapus");
        exit();
    } else {
        header("Location: index.php?errorMessage=Experience berhasil dihapus");        
        exit();
    }
} else {
    header("Location: index.php?errorMessage=Experience ID Tidak Ada");
    exit();
}
?>
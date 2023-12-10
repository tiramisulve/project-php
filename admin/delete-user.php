<?php
require_once('../required/database.php');

if (isset($_GET['id'])) {
    $user = strip_tags(mysqli_escape_string($connectDb, $_GET['id']));

    $query = "DELETE FROM User WHERE id = {$user}";
    $result = mysqli_query($connectDb, $query);

    if ($result) {
        header("Location: index.php?successMessage=User berhasil dihapus");
        exit();
    } else {
        header("Location: index.php?errorMessage=User berhasil dihapus");        
        exit();
    }
} else {
    header("Location: index.php?errorMessage=User ID Tidak Ada");
    exit();
}
?>
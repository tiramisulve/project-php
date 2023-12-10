<?php
require_once('../required/database.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = isset($_POST['id']) ? strip_tags(mysqli_escape_string($connectDb, $_POST['id'])) : null;
    $username = strip_tags(mysqli_escape_string($connectDb, $_POST['username']));
    $password = strip_tags(mysqli_escape_string($connectDb, $_POST['password']));

    // Hash the password using MD5
    $passwordHash = md5($password);

    $query = "UPDATE user SET username = '{$username}', password = '{$passwordHash}' WHERE id = {$id}";
    $result = mysqli_query($connectDb, $query);

        if ($result) {
            header("Location: index.php?successMessage=Berhasil Memperbarui User");
            exit();
        }
    } else {
        // Handle the case where no ID is provided for update
        echo "Invalid request for update. Missing ID.";
        exit();
    }
?>

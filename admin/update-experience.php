<?php
require_once('../required/database.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = strip_tags(mysqli_escape_string($connectDb, $_POST['id']));
    $date_start = strip_tags(mysqli_escape_string($connectDb, $_POST['date_start']));
    $date_end = strip_tags(mysqli_escape_string($connectDb, $_POST['date_end']));
    $title = strip_tags(mysqli_escape_string($connectDb, $_POST['title']));
    $tools = strip_tags(mysqli_escape_string($connectDb, $_POST['tools']));
    $description = strip_tags(mysqli_escape_string($connectDb, $_POST['description']));

    
    $query = "UPDATE experience SET
              date_start = '{$date_start}',
              date_end = '{$date_end}',
              title = '{$title}',
              tools = '{$tools}',
              description = '{$description}'
              WHERE id = {$id}";

    $result = mysqli_query($connectDb, $query);

    if ($result) {    
        header("Location: index.php?successMessage=Experience Berhasil Diubah");
        exit();
    }
}
?>
<?php
require_once('required/database.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $date_start = strip_tags(mysqli_escape_string($connectDb, $_POST['date_start']));
    $date_end = strip_tags(mysqli_escape_string($connectDb, $_POST['date_end']));
    $title = strip_tags(mysqli_escape_string($connectDb, $_POST['title']));
    $tools = strip_tags(mysqli_escape_string($connectDb, $_POST['tools']));
    $description = strip_tags(mysqli_escape_string($connectDb, $_POST['description']));

    $query = "INSERT INTO experience(date_start, date_end, title,tools,description) VALUES('{$date_start}', '{$date_end}', '{$title}','{$tools}','{$description}')";
    $result = mysqli_query($connectDb, $query);

    if($result){
        header("Location: index.php?successMessage=Berhasil Menambahkan Experience");
        exit();
        
    }
}
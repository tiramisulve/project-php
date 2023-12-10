<?php
session_start();
require_once('required/database.php');
require_once('required/auth.php');

onlyAdmin();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <link rel="stylesheet" href="../styles.css" />
    <title>Tambah Experience</title>
</head>
<nav>
    <div class="nav__content">
        <div class="logo"><a href="#">Firly Ananda</a></div>
        <label for="check" class="checkbox">
            <i class="ri-menu-line"></i>
        </label>
        <input type="checkbox" name="check" id="check" />
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="index.php">Buku Tamu</a></li>
            <li><a href="index.php">Experience</a></li>
            <li><a href="">Portfolio</a></li>
        </ul>
    </div>
</nav>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card" style="margin: 6rem;">
                <div class="card-body">
                    <h5 class="card-title">Tambah Experience</h5>
                    <form action="experience-save.php" method="POST">
                        <div class="row mb-3">
                            <label for="date_start" class="col-sm-2 col-form-label">Waktu Mulai</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="date_start" id="date_start">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="date_end" class="col-sm-2 col-form-label">Waktu Selesai</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="date_end" id="date_end">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="title" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="title" id="title">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tools" class="col-sm-2 col-form-label">Tools</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="tools" id="tools">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="description" class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control" name="description" id="description"></textarea>  
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-10">
                                <button type="submit"  class="btn btn-primary "
                      style="font-size: 10px; color: black;">SImpan</button>
                            </div>
                            
                        </div>

                    </form><!-- End General Form Elements -->

                </div>
            </div>

        </div>
    </div>
</section>
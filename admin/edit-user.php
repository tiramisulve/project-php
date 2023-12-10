<?php
session_start();
require_once('../required/auth.php');
onlyAdmin();
    require_once('../required/database.php');
    if (isset($_GET['id'])) {
        $id = strip_tags(mysqli_escape_string($connectDb, $_GET['id']));
    
        $query = "SELECT * FROM user WHERE id = {$id}";
        $result = mysqli_query($connectDb, $query);
    
        if ($result && mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
    
            $username = $user['username'];
            $password = $user['password'];
        } else {
            echo "Data Id Tidak Di Temukan.";
            exit();
        }
    } else {
        
        echo "Id Tidak Ada";
        exit();
    }
    
    ?>
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
    <title>Edit Experience</title>
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
                    <h5 class="card-title">Edit Experience</h5>
                    <form action="update-user.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <div class="row mb-3">
                            <label for="usename" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="username" id="usename" value="<?php echo $username; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="password" id="password" value="<?php echo $password; ?>">
                            </div>
                        </div>
                        

                        <div class="row mb-3">
                            <div class="col-sm-10">
                                <button type="submit"  class="btn btn-primary "
                      style="font-size: 10px; color: black;">Update</button>
                            </div>
                            
                        </div>

                    </form><!-- End General Form Elements -->

                </div>
            </div>

        </div>
    </div>
</section>
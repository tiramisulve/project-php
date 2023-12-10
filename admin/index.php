<?php
  session_start();
  require_once('../required/database.php');
  require_once('../required/auth.php');
  onlyAdmin();
  $bukutamu = "SELECT * FROM bukutamu ORDER BY id DESC";
  $result_bukutamu = mysqli_query($connectDb, $bukutamu);
  $experience = "SELECT * FROM experience ORDER BY id DESC";
  $result_experience = mysqli_query($connectDb, $experience);
  $user = "SELECT * FROM user ORDER BY id DESC";
  $result_user = mysqli_query($connectDb, $user);
  
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
  <title>Buku Tamu</title>
</head>

<body>
  <?php require_once('layout/navbar.php') ?>
  <section class="section" id="buku_tamu">
    <div class="row" style="margin-top: 6rem;">
      <div class="col-lg-12">
        <div class="card" style="margin: 2rem;">
          <div class="card-body">
            <h5 class="card-title text-center">Buku Tamu</h5>
            <table class="table text-center">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">Nama</th>
                  <th scope="col">Email</th>
                  <th scope="col">Pesan</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                        $no = 1;
                        while ($data = mysqli_fetch_array($result_bukutamu)) : ?>
                <tr>
                  <td><?= $no; ?></th>
                  <td><?= $data['nama']; ?></td>
                  <td><?= $data['email']; ?></td>
                  <td><?= $data['pesan']; ?></td>
                  <td>
                    <a href="=.php?id=<?= $data['id']; ?>" class="btn btn-danger btn-sm"
                      style="font-size: 10px; color: black;">Hapus</a>
                  </td>
                </tr>
                <?php $no++; endwhile; ?>
              </tbody>
            </table>
        
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="section" id="experience">
    <h2>Experience <a href="tambah-experience.php" class="btn btn-primary" style="font-size: 10px; color: black;">Tambah data</a></h2>
    
    <div class="row" style="margin-top: 1rem;">
      <div class="col-lg-12">
        <div class="card" style="margin: 2rem;">
          <div class="card-body">
            <table class="table text-center">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">Waktu Mulai</th>
                  <th scope="col">Waktu Selesai</th>
                  <th scope="col">Title</th>
                  <th scope="col">Tools</th>
                  <th scope="col">Deskripsi</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                        $no = 1;
                        while ($data = mysqli_fetch_array($result_experience)) : ?>
                <tr>
                  <td><?= $no; ?></th>
                  <td><?= $data['date_start']; ?></td>
                  <td><?= $data['date_end']; ?></td>
                  <td><?= $data['title']; ?></td>
                  <td><?= $data['tools']; ?></td>
                  <td><?= $data['description']; ?></td>
                  <td>
                    <a href="edit-experience.php?id=<?= $data['id']; ?>" class="btn btn-primary btn-sm"
                      style="font-size: 10px; color: black;">Edit</a>
                      
                    <a href="delete-experience.php?id=<?= $data['id']; ?>" class="btn btn-danger btn-sm"
                      style="font-size: 10px; color: black; margin-top: 10px;">Hapus</a>
                  </td>
                </tr>
                <?php $no++; endwhile; ?>
              </tbody>
            </table>          
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section" id="user">
    <h2>User <a href="tambah-user.php" class="btn btn-primary" style="font-size: 10px; color: black;">Tambah data</a></h2>
    
    <div class="row" style="margin-top: 1rem;">
      <div class="col-lg-12">
        <div class="card" style="margin: 2rem;">
          <div class="card-body">
            <table class="table text-center">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">USername</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                        $no = 1;
                        while ($data = mysqli_fetch_array($result_user)) : ?>
                <tr>
                  <td><?= $no; ?></th>
                  <td><?= $data['username']; ?></td>
                  <td>
                    <a href="edit-user.php?id=<?= $data['id']; ?>" class="btn btn-primary btn-sm"
                      style="font-size: 10px; color: black;">Edit</a>
                    <a href="delete-user.php?id=<?= $data['id']; ?>" class="btn btn-danger btn-sm"
                      style="font-size: 10px; color: black;">Hapus</a>
                  </td>
                </tr>
                <?php $no++; endwhile; ?>
              </tbody>
            </table>          
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- <section class="contact" id="contact">
    <h2 class="heading">Buku <span>Tamu</span></h2>

    <form action="#" method="post">
      <div class="input-box">
        <input type="text" placeholder="Full Name">
        <input type="text" placeholder="Email Address">
      </div>
      <div class="input-box">
        <input type="number" placeholder="Phone">
        <input type="text" placeholder="Email Subject">
      </div>
      <textarea name="" id="" cols="30" rows="10" placeholder="Your Mesage"></textarea>
      <button type="sub" class="btn">Send Message</button>
    </form>
  </section> -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>
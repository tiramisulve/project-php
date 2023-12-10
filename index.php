<?php
  session_start();
  require_once('required/database.php');
  require_once('required/auth.php');
  
  $experience = "SELECT * FROM experience ORDER BY id DESC";
  $result_experience = mysqli_query($connectDb, $experience);
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="styles.css" />
    <title>Portfolio</title>
  </head>
  <body>
    <nav>
      <div class="nav__content">
        <div class="logo"><a href="#">Firly Ananda</a></div>
        <label for="check" class="checkbox">
          <i class="ri-menu-line"></i>
        </label>
        <input type="checkbox" name="check" id="check" />
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#experience">Experience</a></li>
          <li><a href="#contact">Buku Tamu</a></li>
          <?php if(checkLogin()) : ?>
                <a href="admin/index.php" class="nav-link">Admin</a>
            <?php else: ?>
                <a href="login.php" class="nav-link">Login</a>
            <?php endif; ?>
        </ul>
      </div>
    </nav>
    <section class="section" id="home">
      <div class="section__container">
        <div class="content">
          <p class="subtitle">HELLO</p>
          <h1 class="title">
            I'm <span>Firly Ananda<br />a</span> Web Developer
          </h1>
          <p class="description">
            Welcome to my web developer portfolio! I'm Firly Ananda, a skilled and
            creative web developer with a passion for creating beautiful,
            responsive, and user-friendly websites. I've worked on a variety of
            web projects, ranging from personal blogs to e-commerce platforms.
          </p>
          <div class="action__btns">
            <a href="#contact" class="btn btn-primary">Buku Tamu</a>
          </div>
        </div>
        <div class="image">
          <img src="assets/profile_hom.jpg" alt="profile" />
        </div>
      </div>
    </section>
   
    <section class="section" id="experience">
      <h2 class="heading">Experience <span>Project</span></h2>
  
      <div class="section__container_portfolio ">
      <?php 
          $no = 1;
          while ($data = mysqli_fetch_array($result_experience)) : ?>
          <div class="portfolio-box">
              <img src="assets/portofolio-online.jpg" alt="">
              <div class="portfolio-layer">
                  <h4>Start <?= $data['date_start']; ?></h4>
                  <h4>End <?= $data['date_end']; ?></h4>
                  <p><?= $data['title']; ?></p>
                  <p><strong></p><?= $data['tools']; ?></strong></p>
                  <p><?= $data['description']; ?></p>
              </div>
          </div>
          <?php $no++; endwhile; ?>
      </div>
    </section>
        <section class="contact" id="contact">
          <h2 class="heading">Buku <span>Tamu</span></h2>
  
          <form action="buku-tamu-save.php" method="post">
              <div class="input-box">
                  <input type="text" placeholder="Nama" name="nama">
                  <input type="text" placeholder="Email Address" name="email">
              </div>
              <textarea name="pesan" id="" cols="30" rows="10" placeholder="Your Mesage"></textarea>
              <button type="sub" class="btn">Send Message</button>
          </form>
      </section>
      <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2023 Firly Ananda | All Rights Reserved.</p>
        </div>
        <div class="footer-iconTop">
            <a href="#home"><i class="bx bx-up-arrow-alt"></i></a>
        </div>
    </footer>
  </body>
</html>

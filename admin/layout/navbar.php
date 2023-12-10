<nav>
    <div class="nav__content">
      <div class="logo"><a href="#">Firly Ananda</a></div>
      <label for="check" class="checkbox">
        <i class="ri-menu-line"></i>
      </label>
      <input type="checkbox" name="check" id="check" />
      <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="#buku_tamu">Buku Tamu</a></li>
        <li><a href="#experience">Experience</a></li>
        <li><a href="#user">User</a></li>
        <?php if(checkLogin()) : ?>
                <a href="../admin/index.php" class="nav-link">Admin</a>
                <a href="../admin/logout.php" class="nav-link">Logout</a>
            <?php else: ?>
                <a href="login.php" class="nav-link">Login</a>
            <?php endif; ?>
      </ul>
    </div>
  </nav>
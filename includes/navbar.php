<style>
  .nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 25px;
    background: #2c3e50;
    color: white;
  }
  .nav a {
    color: white;
    text-decoration: none;
    margin-left: 20px;
    font-size: 16px;
  }
  .nav .links {
    display: flex;
    align-items: center;
  }
  .nav .brand {
    font-weight: bold;
    font-size: 20px;
  }
  .nav .btn {
    padding: 8px 14px;
    border: 1px solid white;
    border-radius: 5px;
  }

  /* Responsive */
  @media(max-width: 768px) {
    .nav {
      flex-direction: column;
      align-items: flex-start;
    }
    .nav .links {
      flex-direction: column;
      margin-top: 10px;
    }
    .nav a {
      margin: 8px 0;
    }
  }
</style>

<nav class="nav">
  <div class="brand">GMKI</div>
  <div class="links">
    <a href="./">Home</a>
    <a href="./learning.php">E-Learning</a>
    <a href="renungan.php">Beasiswa</a>

    <?php if(isset($_SESSION['role']) && $_SESSION['role'] !== 'user') {?>
      <?php if($_SESSION['role'] === 'admin') { ?>
        <a href="./admin/index.php">Admin</a>
      <?php } ?>
      <?php if($_SESSION['role'] === 'instructor') { ?>
        <a href="./instructor/index.php">POST</a>
      <?php } ?>
    <?php }?>

    <?php if (isset($_SESSION['user_id'])) { ?>
      <a href="./logout.php" class="btn">Logout</a>
    <?php } else { ?>
      <a href="./login.php" class="btn">Login</a>
    <?php } ?>
  </div>
</nav>

<script>
  function toggleDropdown(event) {
    event.preventDefault();
    const menu = document.getElementById("dropdown-menu");
    menu.style.display = menu.style.display === "block" ? "none" : "block";
  }
  document.addEventListener("click", function(e){
    const menu = document.getElementById("dropdown-menu");
    if(!event.target.closest('.dropdown')) menu.style.display = 'none';
  });
</script>

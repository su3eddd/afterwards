<?php 

@include '../config.php';
 
session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>
   <link rel="stylesheet" href="..\assets\css\admin_style.css">
   <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

</head>
<body>
   
<div class="container">
   <div class="content">
    <h1 class="welcome-message">Welcome back <span><?php echo $_SESSION['admin_name'] ?></span></h1>
   </div>
</div>

<!-- navbar -->
<nav class="navbar">
      <div class="logo_item">
         <i class="bx bx-menu" id="sidebarOpen"></i>
         JA'S KMART
      </div>

      <div class="navbar_content">
        <i class="bi bi-grid"></i>
        <a href="logout.php" class="btn">logout</a>
      </div>
    </nav>

    <!-- sidebar -->
    <nav class="sidebar">
      <div class="menu_content">
        <ul class="menu_items">
        <li class="item">
            <a href="admin_index.php" class="nav_link">
              <span class="navlink_icon">
              <i class='bx bxs-home'></i>
              </span>
              <span class="navlink">home</span>
            </a>
          </li>
          <li class="item">
            <a href="admin_dp.php" class="nav_link">
              <span class="navlink_icon">
               <i class='bx bxs-bowl-hot'></i>
              </span>
              <span class="navlink">Products</span>
            </a>
          </li>
          <li class="item">
            <a href="addproduct.php" class="nav_link">
              <span class="navlink_icon">
               <i class='bx bx-plus'></i>
              </span>
              <span class="navlink">Add Products</span>
            </a>
          </li>
          <li class="item">
            <a href="admin_about.php" class="nav_link">
              <span class="navlink_icon">
               <i class='bx bxs-info-circle' ></i>
              </span>
              <span class="navlink">about us</span>
            </a>
          </li>
          <li class="item">
            <a href="admin_contact.php" class="nav_link">
              <span class="navlink_icon">
              <i class='bx bxs-message-rounded-dots'></i>
              </span>
              <span class="navlink">Contact</span>
            </a>
          </li>
        </ul>
        <ul class="menu_items">
          <li class="item">
            <a href="admin_footer.php" class="nav_link">
              <span class="navlink_icon">
              <i class='bx bxs-store-alt'></i>
              </span>
              <span class="navlink">Footer</span>
            </a>
          </li>

        <!-- Sidebar Open / Close -->
        <div class="bottom_content">
          <div class="bottom expand_sidebar">
            <span> Expand</span>
            <i class='bx bx-log-in' ></i>
          </div>
          <div class="bottom collapse_sidebar">
            <span> Collapse</span>
            <i class='bx bx-log-out'></i>
          </div>
        </div>
      </div>
    </nav>
    <!-- JavaScript -->
    <script src="assets/js/admin_script.js"></script>

</body>
</html>
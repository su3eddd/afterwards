<?php

@include 'config.php';

if (isset($_POST['add_product'])) {

  $select = $_POST['select'];
  $product_name = $_POST['product_name'];
  $product_price = $_POST['product_price'];
  $product_image = $_FILES['product_image']['name'];
  $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
  $product_image_folder = 'uploaded_img/' . $product_image;


  if (empty($select) || empty($product_name) || empty($product_price) || empty($product_image)) {
    $message[] = 'please fill out all';
  }

  switch ($select) {
    case 'Espresso':
      $tablename = 'espresso';
      break;

    case 'BestSeller':
      $tablename = 'bestseller';
      break;

    case 'NewArrival':
      $tablename = 'newarrival';
      break;

    case 'House Blend':
      $tablename = 'houseblend';
      break;

    case 'Appetizer':
      $tablename = 'appetizer';
      break;

    case 'Non-Coffee':
      $tablename = 'non_coffee';
      break;

    case 'Matcha Based':
      $tablename = 'matcha_based';
      break;

    case 'Rice Meal':
      $tablename = 'ricemeal';
      break;

    case 'Pastries':
      $tablename = 'pastries';
      break;

    default:
      echo "Invalid Category";
      break;
  }

  $insert = "INSERT INTO $tablename(name, price, image) VALUES('$product_name', '$product_price', '$product_image')";
  $upload = mysqli_query($conn, $insert);
  if ($upload) {
    move_uploaded_file($product_image_tmp_name, $product_image_folder);
    echo "<script> 
                alert('New Product Added Successfully!');
                window.open('admin_addp.php','_self');
              </script>";
  } else {
    $message[] = 'could not add the product';
  }
}
;

if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  mysqli_query($conn, "DELETE FROM product WHERE id = $id");
  header('location: admin_addp.php');
}
;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ja's K-Mart</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/index-style.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>

  <!-- navigation bar -->
  <nav>
    <div class="navbar-container">
      <div class="navbar">
        <div class="logo"><a href="index.php">Afterwards</a></div>
        <form action="searchrest.php" method="post" class="search-bar">
          <input type="text" name="search_query" placeholder="Search...">
        </form>
        <div class="nav-links">
          <ul class="links">
            <li><a href="index.php">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="about.php">About us</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="signup.html">Signup</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- navigation bar end -->




  <!-- features -->
  <div class="slider">
    <div class="list">
      <div class="item">
        <img src="images/banner.jpg">
      </div>
      <div class="item">
        <img src="images/banner.jpg">
      </div>
      <div class="item">
        <img src="images/banner.jpg">
      </div>
      <div class="item">
        <img src="images/banner.jpg">
      </div>
    </div>

    <!-- button prev next -->
    <div class="button">
      <button id="prev">
      </button>
      <button id="next">></button>
    </div>

    <!-- dots -->
    <ul class="dots">
      <li class="active"></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>
  <!-- features end -->


  <!-- PRODUCTS -->
  <h3 class="title">BEST SELLER</h3>
  <div class="container">
    <div class="products-container">

      <?php
      $select_product = mysqli_query($conn, "SELECT * FROM `bestseller`");

      if (mysqli_num_rows($select_product) > 0) {
        while ($fetch_product = mysqli_fetch_assoc($select_product)) {
          ?>
          <form action="" method="post">
            <div class="product">
              <a href="menu.php"><img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt=""></a>
              <h3><?php echo $fetch_product['name']; ?></h3>
              <div class="price">₱<?php echo $fetch_product['price']; ?></div>
            </div>
          </form>
          <?php
        }
      }
      ?>

    </div>
  </div>

  <!-- PRODUCTS -->
  <h3 class="title">NEW ARRIVALS</h3>
  <div class="container">
    <div class="products-container">

      <?php
      $select_product = mysqli_query($conn, "SELECT * FROM `newarrival`");

      if (mysqli_num_rows($select_product) > 0) {
        while ($fetch_product = mysqli_fetch_assoc($select_product)) {
          ?>
          <form action="" method="post">
            <div class="product">
            <a href="menu.php"><img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt=""></a>
              <h3><?php echo $fetch_product['name']; ?></h3>
              <div class="price">₱<?php echo $fetch_product['price']; ?></div>
            </div>
          </form>
          <?php
        }
      }
      ?>

    </div>
  </div>



  <!-- footer -->
  <footer>
    <div class="foot-quick">
      <h3>Quick Links</h3>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="espresso.php">Espresso</a></li>
        <li><a href="houseblend.php">House Blends</a></li>
        <li><a href="appetizer.php">Apppetizer</a></li>
        <li><a href="noncoffee.php">Non-Coffee</a></li>
        <li><a href="matcha.php">Matcha Based</a></li>
        <li><a href="ricemeal.php">Rice Meal</a></li>
        <li><a href="pastries.php">Pastries</a></li>
      </ul>
    </div>
    <div class="foot">
      <h3>Contact Us</h3>
      <p><?php echo file_exists('footer_contacts.txt') ? file_get_contents('footer_contacts.txt') : ''; ?></p>

      <h3 class="soc">Socials</h3>
      <ul class="social-links">
        <li><a href="https://www.facebook.com/profile.php?id=61555746488662"><i class="bx bxl-facebook-square"></i></a>
        </li>
      </ul>
    </div>
    <div class="foot">
      <h3>Address</h3>
      <p><?php echo file_exists('address.txt') ? file_get_contents('address.txt') : ''; ?></p>
    </div>
    <div class="foot">
      <h3>Opening Hours</h3>
      <p><?php echo file_exists('opening_hours.txt') ? file_get_contents('opening_hours.txt') : ''; ?></p>
    </div>
  </footer>
  <!-- footer end -->


  <script src="assets/js/index-script.js"></script>
</body>

</html>
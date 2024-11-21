<?php

include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afterwards Menu</title>
    <link rel="stylesheet" href="assets/css/menu.css">
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
                        <li><a href="menu.html">Menu</a></li>
                        <li><a href="about.php">About us</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Signup</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- navigation bar end -->


    <section class="categories">
        <ul class="categories-list">
            <li><a href="menu.php">BestSeller</a></li>
            <li><a href="espresso.php">Espresso</a></li>
            <li><a href="houseblend.php">House Blends</a></li>
            <li><a href="appetizer.php">Apppetizer</a></li>
            <li><a href="noncoffee.php">Non-Coffee</a></li>
            <li><a href="matcha.php">Matcha Based</a></li>
            <li><a href="ricemeal.php">Rice Meal</a></li>
            <li><a href="pastries.php">Pastries</a></li>
        </ul>
    </section>
    <section class="container">
        <div class="products-container">

            <?php
      $select_product = mysqli_query($conn, "SELECT * FROM `pastries`");

      if (mysqli_num_rows($select_product) > 0) {
        while ($fetch_product = mysqli_fetch_assoc($select_product)) {
          ?>
            <form action="" method="post">
                <div class="product">
                    <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
                    <h3><?php echo $fetch_product['name']; ?></h3>
                    <div class="price">₱<?php echo $fetch_product['price']; ?></div>
                </div>
            </form>
            <?php
        }
      }
      ?>

        </div>
    </section>

        <!-- footer -->
        <footer>
        <div class="foot-quick">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="noodles.php">Noodles</a></li>
                <li><a href="snacks.php">Snacks</a></li>
                <li><a href="drinks.php">Drinks</a></li>
                <li><a href="Ice-cream.php">Ice Creams</a></li>
                <li><a href="meat.php">Meats/Dumplings</a></li>
                <li><a href="seaweed.php">Homemade Dishes</a></li>
                <li><a href="seasoned.php">Seasoned</a></li>
            </ul>
        </div>
        <div class="foot">
            <h3>Contact Us</h3>
            <p><?php echo file_exists('footer_contacts.txt') ? file_get_contents('footer_contacts.txt') : ''; ?></p>

            <h3 class="soc">Socials</h3>
            <ul class="social-links">
                <li><a href="https://www.facebook.com/profile.php?id=61555746488662"><i class="bx bxl-facebook-square"></i></a></li>
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
    
    <script src="assets/js/script-nood.js"></script>
</body>

</html>
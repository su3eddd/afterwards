<?php

include 'config.php';

if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
    $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
    $image = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = 'uploaded_img/' . $image;

    $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

    if (mysqli_num_rows($select) > 0) {
        $message[] = 'user already exist';
    } else {
        if ($pass != $cpass) {
            $message[] = 'confirm password not matched!';
        } elseif ($image_size > 2000000) {
            $message[] = 'image size is too large!';
        } else {
            $insert = mysqli_query($conn, "INSERT INTO `user_form`(name, email, password, image) VALUES('$name', '$email', '$pass', '$image')") or die('query failed');

            if ($insert) {
                move_uploaded_file($image_tmp_name, $image_folder);
                $message[] = 'registered successfully!';
                header('location:acc_login.php');
            } else {
                $message[] = 'registeration failed!';
            }
        }
    }

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/signup.css"> <!-- Link to the external CSS file -->
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="custom-container">
            <button class="back-btn btn btn-link">
                <a href="index.php" class="text-white"><i class="fas fa-arrow-left"></i></a>
            </button>
            <div class="form">
                <h2 class="title text-white">Register</h2>
                <?php
                if (isset($message)) {
                    foreach ($message as $message) {
                        echo '<div class="message">' . $message . '</div>';
                    }
                }
                ?>
                <p class="subtext text-white">Create your account</p>
                <form>
                    <div class="form-group position-relative">
                        <i class="fas fa-user icon"></i>
                        <input type="text" class="form-control" placeholder="First Name" required>
                    </div>
                    <div class="form-group position-relative">
                        <i class="fas fa-user icon"></i>
                        <input type="text" class="form-control" placeholder="Surname" required>
                    </div>
                    <div class="form-group position-relative">
                        <i class="fas fa-envelope icon"></i>
                        <input type="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group position-relative">
                        <i class="fas fa-lock icon"></i>
                        <input type="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group position-relative">
                        <i class="fas fa-lock icon"></i>
                        <input type="password" class="form-control" placeholder="Confirm Password" required>
                    </div>
                    <button type="submit" class="submit-btn">Create Account</button>
                    <p class=" subtext mt-2 text-white">Or continue with</p>
                    <div class="subtext social-buttons mb-2">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-google"></i></a>
                    </div>
                    <p class="subtext text-white">Already have an account? <a href="login.html"
                            class="text-white">Login</a></p>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
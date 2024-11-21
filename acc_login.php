<?php

include 'config.php';
session_start();

if (isset($_POST['submit'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

    $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

    if (mysqli_num_rows($select) > 0) {
        $row = mysqli_fetch_assoc($select);
        $_SESSION['user_id'] = $row['id'];
        header('location:acc_homepage.php');
    } else {
        $message[] = 'incorrect email or password!';
    }

}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/login.css"> <!-- Link to the external CSS file -->
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="custom-container">
            <button class="back-btn btn btn-link">
                <a href="index.php" class="text-white"><i class="fas fa-arrow-left"></i></a>
            </button>
            <div class="form">
                <h2 class="title text-white">Login</h2>
                <?php
                if (isset($message)) {
                    foreach ($message as $message) {
                        echo '<div class="message">' . $message . '</div>';
                    }
                }
                ?>
                <form>
                    <div class="form-group position-relative">
                        <i class="fas fa-user icon"></i>
                        <input type="text" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group position-relative">
                        <i class="fas fa-lock icon"></i>
                        <input type="password" class="form-control" placeholder="Password" required>
                    </div>
                    <button type="submit" class="submit-btn">Submit</button>
                    <p class="subtext text-white">Don't have an account? <a href="acc_signup.php" class="text-white">Signup</a></p>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
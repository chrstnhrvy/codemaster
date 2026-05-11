<?php
date_default_timezone_set('Asia/Hong_Kong');
include '../includes/dbh.inc.php';
session_start();
function getLogin($conn) {
    if (isset($_POST['loginSubmit'])) {
        $email=$_POST['email'];
        $password=$_POST['password'];
        $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
        $result = $conn->query($sql);
        if (mysqli_num_rows($result) > 0){
            if ($row = $result->fetch_assoc()) {
                $_SESSION['id'] = $row['id'];
                header("Location: ../index.html?loginsuccess");
                exit();
                echo "<script>alert('Log in success');</script>";
            } 
        }
        else {
            header("Location: ../videos/python/pyvid1.php?loginfailed");
            exit();
            echo "<script>alert('Log in failed.');</script>";
        }
    } 
}

function userLogout(){
    if (isset($_POST['logoutSubmit'])) {
        session_start();
        session_destroy();
        header("Location: ../videos/python/pyvid1.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../assets/css/auth.css">
    <style>
        body{
            background: linear-gradient(to right, #151B54, #123456);
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">  <img src="../assets/images/logo.png" height="30" class="d-inline-block align-top" alt=""></a>
              
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>        
              <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../index.html">Home</a>
                  </li>
                  <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="../index.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categories
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="../pages/pythonvids.html">Python</a></li>
                <li><a class="dropdown-item" href="../pages/javascriptvids.html">JavaScript</a></li>
                <li><a class="dropdown-item" href="../pages/csharpvids.html">C#</a></li>
                <li><a class="dropdown-item" href="../pages/phpvids.html">PHP</a></li>
                <li><a class="dropdown-item" href="../pages/cssvids.html">CSS</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="../index.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Account
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../auth/login.php">Log In</a></li>
            <li><a class="dropdown-item" href="../auth/logout.php">Log Out</a></li>
            </ul>
            <li class="nav-item">
                <a class="nav-link active" href="../pages/about.html">About Us</a>
            </li>
            </ul>
          </div>
        </div>
        </nav>
        <div class="con">
        <?php
        
        echo"
            <form method='POST' action='".getLogin($conn)."'>
                <input type='text' name='email' placeholder='Email'>
                <input type='password' name='password' placeholder='Password'>
                <button class='btnSignup' type='submit' name='loginSubmit' >Login</button>
                <div>
                    <div class='login'>
                    <p>Don't have an account yet? <a href='register.php'>Register Here.</a></p>
                    </div>
                </div>
            </form>";
        /*echo"
            <form method='POST' action='".userLogout()."'>
                <button class='btnSignup' type='submit' name='logoutSubmit'>Logout</button>
            </form>";*/
        ?>
        </div>
    <!--<div class="con">
        <form class="form" action="register.php" method="post" name="form" onsubmit="return validateForm()">
            <h1>Sign-Up</h1>
            <p>Please fill up the following details to create an account.</p>
            <hr>
            <div class="input-box">
                <input type="text" name="firstName" placeholder="First Name"/>
            </div>
            <div class="input-box">
                <input type="text" name="lastName" placeholder="Last Name"/>
            </div>
            <div class="input-box">
                <input type="email" name="email" placeholder="Email Adress"/>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password"/>
            </div>
            <div class="input-box">
                <input type="password" name="retypePassword" placeholder="Re-type Password"/>
            </div>
            <div>
                <p style="color: black;">By creating an account, you agree to the <a href="#">Terms and Conditions</a> of the company.</p>
            </div>
            <div>
                <button class="btnSignup" name="submit" type="submit">Sign Up</button>
            </div>
            <div>
                <div class="login">
                <p>Do you have already have an account? <a href="#">Login Here.</a></p>
                </div>
            </div>
            
        </form>
    </div>
    -->
</body>
<script src="../assets/js/app.js"></script>
</html>

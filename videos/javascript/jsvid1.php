<?php
    date_default_timezone_set('Asia/Hong_Kong');
    include '../../includes/dbh.inc.php';
    include '../../includes/comments.inc7.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <title>Categories</title>
    <style>
        body{
            background-color: #35374B;
            color: white;
        }
        
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">  <img src="../../assets/images/logo.png" height="30" class="d-inline-block align-top" alt=""></a>
              
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>        
              <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../../index.html">Home</a>
                  </li>
                  <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="../../index.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categories
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="../../pages/pythonvids.html">Python</a></li>
                <li><a class="dropdown-item" href="../../pages/javascriptvids.html">JavaScript</a></li>
                <li><a class="dropdown-item" href="../../pages/csharpvids.html">C#</a></li>
                <li><a class="dropdown-item" href="../../pages/phpvids.html">PHP</a></li>
                <li><a class="dropdown-item" href="../../pages/cssvids.html">CSS</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="../../index.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Account
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../../auth/login.php">Log In</a></li>
            <li><a class="dropdown-item" href="../../auth/logout.php">Log Out</a></li>
            </ul>
            <li class="nav-item">
                <a class="nav-link active" href="../../pages/about.html">About Us</a>
            </li>
            </ul>
          </div>
        </div>
        </nav>
        <?php
        /*echo"
            <form method='POST' action='".getLogin($conn)."'>
                <input type='text' name='email'>
                <input type='password' name='password'>
                <button type='submit' name='loginSubmit'>Login</button>
            </form>";
        echo"
            <form method='POST' action='".userLogout()."'>
                <button type='submit' name='logoutSubmit'>Logout</button>
            </form>";

        if (isset($_SESSION['id'])){
            echo"You are logged in!";
        }
        else{
            echo"You are not logged in!";
        }*/
        ?>
      <br><br>
    
    <div class="container-fluid"> 
     <div class="sep">
        <div class="row">
            <div class="col-lg-8" id="img">
            <iframe src="https://www.youtube.com/embed/W6NZfCO5SIk"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <p style="font-size: 18pt; font-weight: semi-bold;">JavaScript Tutorial for Beginners: Learn JavaScript in 1 Hour</p>
            <p id="by">by Programming with Mosh | Apr 24, 2018</p>
            <br><br>
            <?php
            if (isset($_SESSION['id'])){
                echo "<form method='POST' action='".setComments($conn)."'>
                <input style='font-weight: bold' type='hidden' name='firstName' value='".$_SESSION['id']."'>
                <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
                <textarea name='message'></textarea><br>
                <button name='commentSubmit' type='submit'>Comment</button>
                </form>";
            }
            else{
                echo"You need to be logged in to comment.
                <br><br>";
            }
            getComments($conn)
            ?>
            </div> 
             
            <div class="col-lg-4" id="img">
            <div class="bot-sec">
            <a href="jsvid2.php">
              <img src="../../assets/images/js2.jpg" height="275" alt="Description of Image">
              <p style="font-size: 12pt;">JavaScript In 10 Minutes | JavaScript Tutorial For Beginners | Learn JavaScript | Simplilearn</p>
              <p id="by">by Simplilearn | Nov 23, 2020</p>
            </a>
            </div>
            <br>
            <br>
            <div class="bot-sec">
            <a href="jsvid3.php">
              <img src="../../assets/images/js3.jpg" height="275" alt="Description of Image">
              <p style="font-size: 12pt;">Learn JavaScript - Full Course for Beginners</p>
              <p id="by">by freeCodeCamp.org | Dec 10, 2018</p>
            </a>
            </div>
        </div>
    </div>
    
    </div>
      
</body>
<script src="../../assets/js/app.js"></script>
</html>

<?php
    date_default_timezone_set('Asia/Hong_Kong');
    include '../../includes/dbh.inc.php';
    include '../../includes/comments.inc8.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Comment</title>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <style>
        body{
            background: linear-gradient(to right, #151B54, #123456);
        }
        textarea {
            width: 853px;
            height: 150px;
            background-color: transparent;
            color: aliceblue;
            resize: none;
            border-color: white;
            border-radius: 6px;
        }

        button {
            width: 100px;
            height: 30px;
            background-color: #282828;
            border: none;
            color: #fff;
            font-family: arial;
            font-weight: 400;
            cursor: pointer;
            margin-bottom: 60px;
        }
        .element {
            padding-top: 100px;
            max-width: fit-content;
            margin-inline: auto;
        }

        .btnSignup{
            height: 40px;
            background-color: #0041C2;
            color:white;
            padding: 8px;
            margin:px;
            cursor: pointer;
            width: 100%;
            opacity: .9;
            border: none;
            border-radius: 20px;
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
    <div class="element">
    <?php
    $cid = $_POST['cid'];
    $firstName = $_POST['firstName'];
    $date = $_POST['date'];
    $message = $_POST['message'];

        echo "<form method='POST' action='".editComments($conn)."'>
            <input type='hidden' name='cid' value='".$cid."'>
            <input type='hidden' name='firstName' value='".$firstName."'>
            <input type='hidden' name='date' value='".$date."'>
            <textarea name='message'>".$message."</textarea><br>
             <button name='commentEdit' style='width:100px;' class='btnSignup' type='submit'>Edit</button>
        </form>";

        ?>
    </div>
</body>
<script src="../../assets/js/app.js">
        function redirectTo(url) {
    window.location.href = url;
}
</script>
</html>

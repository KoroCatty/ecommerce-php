<?php
session_start();
// for local server
$dbhost = "localhost"; //ホスト名またはIPアドレス
$dbuser = "root"; //MySQLのユーザー名
$dbpass = "root"; //$usernameのパスワード
$db = "";

// server接続用
// $dbhost = "sql206.epizy.com";
// $dbuser = "epiz_31157109";
// $dbpass = "b3XC96GKERoUO1y";
// $db = "epiz_31157109_kay_php";

// Create connection
$mysqli = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

// Check connection
if (!$mysqli) {
  die("Connection failed: " . mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />

  <!-- Internet Explorerを使用している人が最新バージョンでサイトを表示する -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- オリジナルの（Favicon）を指定 -->
  <!-- <link rel="icon" href="dist/images/favicon.png" type="image/gif" /> -->

  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- <title>PHP EC Site Home</title> -->


  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet"> <!-- range slider -->

  <!-- font awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

  <!-- Bootstrap CDN-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- CSS キャッシュ対策 -->
  <link rel="stylesheet" href="src/stylesheets/main.css?php echo time(); ?>">


</head>





<body>



  <!-- Nav bar -->
  <nav class="navbar navbar-expand-lg navbar-light py-3 fixed-top">
    <div class="container">

      <img src="src/images/k.png" alt="" class="navLogo">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-buttons__ul">

          <li class="nav-item">
            <a class="nav-link nav__itemLink" href="http://localhost/ecommerce-php/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav__itemLink" href="http://localhost/ecommerce-php/shop.php">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav__itemLink" href="#">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav__itemLink" href="#">Contact</a>
          </li>

          <!-- icons -->
          <li class="nav-item">
            <i class="fa-solid fa-bag-shopping nav__itemIcon"></i>
            <i class="fa-solid fa-cart-shopping nav__itemIcon"></i>
          </li>
        </ul>

      </div>
    </div>
  </nav>


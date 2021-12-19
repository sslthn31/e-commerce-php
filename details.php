<?php
 $conmodal = mysqli_connect('localhost', 'root');
 mysqli_select_db($conmodal, 'techcommerce');
 $sqlmodal = "SELECT * FROM products WHERE featured=1";
 $featuredmodal = $conmodal->query($sqlmodal);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script dever src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script><meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script dever src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <style>
        .product-container img{
            width: 300px;
            height: 300px;
            object-fit: cover;
        }
    </style>
</head>
<body>
  <!-- Nav-Bar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          TECH COMMERCE
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Category </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="#hardware">Hardware</a></li>
                <li><a class="dropdown-item" href="#pclaptop">Pc & Laptop</a></li>
                <li><a class="dropdown-item" href="#gears">Gaming Gears</a></li>
              </ul> 
            </li>
             <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#contact">Contact us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav> 
    <div class="product">
    <?php
          while($productmodal = mysqli_fetch_assoc($featuredmodal)):
    ?>
        <div class="product-container">
            <h3 class="price">RP <?= $productmodal['price'];?></h3>
            <h3 class="title"><?= $productmodal['title'];?></h3>
            <p class="description"><?= $productmodal['description'];?></p>
            <img src="<?= $productmodal['img'];?>" alt="">
        </div>
    <?php endwhile;?>
    </div>
</body>
</html>
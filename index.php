<?php
  $con = mysqli_connect('localhost', 'root');
  mysqli_select_db($con, 'techcommerce');
  $sql = "SELECT * FROM products WHERE featured=1";
  $featured = $con->query($sql);

  
  $con2 = mysqli_connect('localhost', 'root');
  mysqli_select_db($con2, 'techcommerce');
  $sql2 = "SELECT * FROM products WHERE featured=2";
  $featured2 = $con2->query($sql2);
  
  $con3 = mysqli_connect('localhost', 'root');
  mysqli_select_db($con3, 'techcommerce');
  $sql3 = "SELECT * FROM products WHERE featured=3";
  $featured3 = $con3->query($sql3);
  
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
    <script dever src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <style>
      .modal-picture{
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .modal-body img {
      width: 300px;
      height: 300px;
      object-fit: cover;
    }
      .modal-desc{
        margin-top: 3rem;
      }
      .pricemodal{
        font-size: 25px;
      }
      .card {
  margin: 0 1rem;
  height: 500px;
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
      <!-- carousel -->
       <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" id="home">
            <img src="asset/carousel/carousel-1.jpg" class="d-block w-100" height="640px" alt="...">
          </div>
          <div class="carousel-item">
            <img src="asset/carousel/carousel-2.jpg" class="d-block w-100" height="640px" alt="...">
          </div>
          <div class="carousel-item">
            <img src="asset/carousel/carousel-3.jpg" class="d-block w-100" height="640px" alt="...">
          </div>
          <div class="carousel-item">
            <img src="asset/carousel/carousel-4.jpg" class="d-block w-100" height="640px" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- product 1 -->
      <div class="product-container" id="hardware">
      <h4>HARDWARE</h4>
      <div class="card-container">
      <div class="card-group">
        <?php
          while($product = mysqli_fetch_assoc($featured)):
            ?>
            <div class="card">
          <img src="<?= $product['img'];?>" class="card-img-top " alt="...">
          <div class="card-body">
            <h5 class="card-title">RP <?= $product['price'];?></h5>
            <p class="card-text"><?= $product['title'];?></p>
            <p class="card-text"><?= $product['description'];?></p>
            <div class="dua-tombol">
            <a type="button" class="btn btn-primary" href="details.php">
             DETAILS
          </a>
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
            BUY
            </button>
            </div>
          </div>
        </div>          
        <?php endwhile;?>
<!-- Modal 1-->
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Ups...</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h3>Sorry, we're maintenance RN :(</h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
    <div class="product-container" id="hardware">
      <h4>HARDWARE</h4>
      <div class="card-container">
      <div class="card-group">
        <?php
          while($product2 = mysqli_fetch_assoc($featured2)):
        ?>
        <div class="card">
          <img src="<?= $product2['img'];?>" class="card-img-top " alt="...">
          <div class="card-body">
            <h5 class="card-title">RP <?= $product2['price'];?></h5>
            <p class="card-text"><?= $product2['title'];?></p>
            <p class="card-text"><?= $product2['description'];?></p>
          </div>
        </div>         
        <?php endwhile; ?>
      </div>
    </div>
  </div>
    <div class="product-container" id="hardware">
      <h4>HARDWARE</h4>
      <div class="card-container">
      <div class="card-group">
        <?php
          while($product3 = mysqli_fetch_assoc($featured3)):
        ?>
        <div class="card">
          <img src="<?= $product3['img'];?>" class="card-img-top " alt="...">
          <div class="card-body">
            <h5 class="card-title">RP <?= $product3['price'];?></h5>
            <p class="card-text"><?= $product3['title'];?></p>
            <p class="card-text"><?= $product3['description'];?></p>
          </div>
        </div>         
        <?php endwhile; ?>
      </div>
    </div>
  </div>
  <!-- footer section -->
    <div class="footer-container" id="contact">
        <div class="footer-links">
          <div class="footer-link-wrapper">
            <div class="footer-link-items">
              <h2>Tentang Kami</h2>
              <a href="#">Tentang Kami</a>
              <a href="#">Marketplace Kami</a>
              <a href="#">Kebijakan Kami</a>
            </div>
            <div class="footer-link-items">
              <h2>Bantuan</h2>
              <a href="#">Cara Belanja</a>
              <a href="#">Cara Pembayaran</a>
              <a href="#">Pengiriman</a>
              <a href="#">Pengembalian</a>
              <a href="#">Hubungi Kami</a>
            </div>
            <div class="footer-link-items">
              <h2>Social Media</h2>
              <a href="#">Instagram</a>
              <a href="#">Facebook</a>
              <a href="#">Twitter</a>
              <a href="#">Youtube</a>
            </div>
            <div class="footer-link-items">
              <h2>Toko Kami</h2>
              <a href="#">ITC DEPOK LT.4 No.42 Depok</a>
              <a href="#">Buka Senin-Sabtu 09:00-20-00 WIB</a>
              <a href="#">021-79813726</a>
              <a href="#">sales@techcommerce.com</a>
            </div>
          </div>
        </div>
    </div>
          <section>
          <div class="footer-mark">
             <p>Sulthan Alhambra || 183112706450175</p>
          </div>
        </section>
        </body>
</html>
<?php require "db_conn.php";
session_start(); ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hamza's Photography</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="home.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <!-- nav -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
    <div class="container-fluid" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,.2);">
      <a href="#" class="navbar-brand ms-auto mb-1" id="nav">Hamza's Photography</a>
      <div class="navbar-nav ms-auto">
        <?php
        if(isset($_SESSION['user'])) {
            ?>
            <a href="logout.php" class="nav-item nav-link" style="background-color: red; color:azure">logout </a>
            <a href="upl.php" class="nav-item nav-link" style="background-color: green; color:azure">Upload </a>
            <?php
        }
        ?>
        <?php
        if(!isset($_SESSION['user'])) {
            ?>
            <a href="login.html" class="nav-item nav-link" style="background-color: red; color:azure">login </a>
            <?php
        }
        ?>
      </div>
    </div>
  </nav>

  <div id="demo" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>
    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active" style="height:500px;">
        <img src="andrew-svk-7IBuoQQlCKY-unsplash.jpg" alt="Los Angeles" class="img-fluid">
        <div class="carousel-caption">
          <h3>Great Photos</h3>
          <p>We had such a great scapes for you!</p>
        </div>
      </div>
      <div class="carousel-item" style="height:500px;">
        <img src="kalen-emsley-G1qxBDxM8vE-unsplash.jpg" alt="Chicago" class="img-fluid">
        <div class="carousel-caption">
          <h3>Always Free</h3>
          <p>We had such a great scapes for you!</p>
        </div>
      </div>
      <div class="carousel-item" style="height:500px;">
        <img src="hans-ott-AxSaRriVy0E-unsplash.jpg" alt="New York" class="img-fluid">
        <div class="carousel-caption">
          <h3>Download Now</h3>
          <p>We had such a great scapes for you!</p>
        </div>
      </div>
      <!-- Left and right controls/icons -->
      <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </div>
  <!-- @@@@@@@@@@@@@@@@@@@@@@ IMAGES AFTER SLIDER @@@@@@@@@@@@@@@@@@@@@ -->
  <div class="row">
    <?php 
      $sql = "SELECT * FROM images ORDER BY id DESC";
      $res = mysqli_query($connect, $sql);

      if (mysqli_num_rows($res) > 0) {
        while ($images = mysqli_fetch_assoc($res)) {
    ?>
      <div class="col-lg-4 col-md-0 mb-4 mb-lg-0">
        <button style="background-color:transparent; border-color:transparent;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal<?=$images['id']?>">
          <img src="uploads/<?=$images['image_url']?>" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
        </button>
      </div>
    <?php
        }
      }
    ?>
  </div>
  <?php 
    if (mysqli_num_rows($res) > 0) {
      mysqli_data_seek($res, 0);
      while ($images = mysqli_fetch_assoc($res)) {
  ?>
      <div class="modal" id="myModal<?=$images['id']?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <a id="downloadbtn" href="uploads/<?=$images['image_url']?>" download>Save</a>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
              <img src="uploads/<?=$images['image_url']?>" alt="<?=$images['image_caption']?>" style="height:100%;width:100%;">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
  <?php
      }
    }
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Unitech Label</title>
  <link rel="icon" type="image/x-icon" href="logo/viewport2.png">
  <!-- bootstrap css cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- second carousel jquery -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <!-- css -->
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <!-- navbar -->
  <section id="menubar" class="">
    <nav class="navbar navbar-expand-lg fixed-top shadow p-1 mb-5 bg-body" id="navbar">
      <div class="container-fluid">
        <!-- <a class="navbar-brand" href="#"
          style="padding-left: 2em; font-size: 30px; color: white;"><span>U</span>nitech<span>L</span>abel</a> -->
        <a class="navbar-brand" href="#" style="padding-left: 3em; ">
          <img src="logo/logo.png" style="width:90px; height:50px" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <!-- <span class="navbar-toggler-icon bg-dark" style="color: black;"></span> -->
          <span class="line"></span> 
          <span class="line"></span> 
          <span class="line" style="margin-bottom: 0;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 10%;">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href=""></a>
              <a class="nav-link active menuItem" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  menuItem" aria-current="page" href="#about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  menuItem" aria-current="page" href="#products">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  menuItem" aria-current="page" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  menuItem" aria-current="page" href="#gallery">Gallery</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link  menuItem" aria-current="page" href="#slider">Our Team</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link  menuItem" aria-current="page" href="#client">Our Clients</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active menuItem" aria-current="page" href="overview.html">Company
                    Overview</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  menuItem" aria-current="page" href="#contact">Contact Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle menuItem" href="#" id="navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Our Profiles
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item menuItem" target="blank" href="https://drive.google.com/file/d/1dJqNJEWI0q85sOgzldg_o_RJPhuieiNL/view?usp=sharing">Unitech Label</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item menuItem" target="blank" href="https://drive.google.com/file/d/1QWtdppMyJx5rcTvas20vzB0l3o3piB0V/view?usp=sharing">Unitek Trims</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </section>
  <!-- end navbar -->

@yield('content');

  <!-- footer -->
  <section id="footer"
    style="background-image: linear-gradient(to bottom, #2E3192, #040636); color: white; overflow-x: hidden;">
    <p class="text-center p-3">© 2022 Unitech Label & Tag. All rights reserved. </p>
  </section>
  <!-- end footer -->

  <!-- js -->
  <script src="script.js"></script>
  <!-- bootstrap js cdn -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <!-- second carousel js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
</body>

</html>
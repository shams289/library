<?php include 'include/DB.php'; ?>
<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <title>Sidebar Menu | Side Navigation Bar</title>

  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="testCSS/style.css" />
  <!-- Boxicons CSS -->
  <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />

  <style>
    .space-between {
      margin-right: -5px;
      margin-top: 20px;
    }
  </style>
</head>

<body>
  <center>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="searchIcon"><img class="searchimg" src="img/search.png" alt="" style="height: 30px;width: 30px;"></div>

          <form class="d-flex" role="search">

            <input class=" form-control me-2 serachHolder" type="search" placeholder="گەڕان بۆ کتێب" aria-label="Search">
            <!-- <button class="btn btn-outline-success" type="submit">گەڕان</button> -->

          </form>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">گشتی</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">بەشەکان</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">نووسەر</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">جاپخانە</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">کتێبی دەنگی</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">دەربارە</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">پەیوەندی</a>
            </li>


          </ul>
          <img src="img/logo-removebg-preview.png" alt="" class="logo">
        </div>
      </div>
    </nav>
  </center>

  <center>
    <div class="q" style=" width: 95%; height: 370px; margin: 50px; ">



      <div class="w3-content w3-display-container" style="max-width:1000px; margin-top: 80px; margin-bottom: 50px;">
        <img class="mySlides" src="img/m.jpg" style="width:100% ">
        <img class="mySlides" src="img/m.jpg" style="width:100% ">
        <img class="mySlides" src="img/m.jpg" style="width:100% ">

        <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">

          <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
          <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
          <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
          <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
          <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
        </div>
      </div>


    </div>
  </center>
  <div style="float: left; width: 100%; height: 100px; display: flex; align-items: center; justify-content: center; font-size: 26px; color: #8A8AFF; margin-top: 50px;">
    <div style="float: left; width: 80%; height: 200px; display: flex; align-items: center; justify-content: center;">
      <div style="float: left; width: 50%; height: 2px;background-color: #8A8AFF;margin: 20px;"></div> نویترین <div style="float: left; width: 50%; height: 2px;background-color: #8A8AFF; margin: 20px;"></div>
    </div>
  </div>
  </div>


  <?php
  $select = 'SELECT * from library.book';
 
  $query = mysqli_query($connection, $select);

  while ($row = mysqli_fetch_assoc($query)) {
    $id='SELECT book_id from library.book';
  ?>
    <div class="card">
      <?php echo '<img src="data:image;base64,' . base64_encode($row['img']) . '"class="img"  height=280 >' ?>
      <br>
      <div style=" display: flex;
    align-items: center;
    justify-content: center; border: none;">

         

        <form method="post" action="bookDetaile.php">
        <input type="hidden" name="my_variable" value="<?php echo $my_variable=$row['book_id']; ?>">

<input type="submit" value="Submit">
</form>

      </div>



    </div>





  <?php }

  ?>
  <div class="container-sm text-center">
    <div class="row" style="float:left">





      <!-- <div class="col  space-between"><a href="kteb.html"><img width="170" src="i/aa3.jpg" alt=""></a><br><br><h3>ناوی کتێب</h3></div>
          <div class="col  space-between"><a href="kteb.html"><img width="170" src="i/aa5.jpg" alt=""></a><br><br><h3>ناوی کتێب</h3></div>
          <div class="col  space-between"><a href="kteb.html"><img width="170" src="i/d2.jpg" alt=""></a><br><br><h3>ناوی کتێب</h3></div>
          <div class="col  space-between"><a href="kteb.html"><img width="170" src="i/a23.jpg" alt=""></a><br><br><h3>ناوی کتێب</h3></div>
          <div class="col  space-between"><a href="kteb.html"><img width="170" src="i/aa9.jpg" alt=""></a><br><br><h3>ناوی کتێب</h3></div>
          <div class="col  space-between"><a href="kteb.html"><img width="170" src="i/d13.jpg" alt=""></a><br><br><h3>ناوی کتێب</h3></div>
          
           -->

    </div>
  </div>


  <div style="float: left; width: 100%; height: 100px; display: flex; align-items: center; justify-content: center; font-size: 26px; color: #8A8AFF;">
    <div style="float: left; width: 80%; height: 200px; display: flex; align-items: center; justify-content: center;">
      <div style="float: left; width: 50%; height: 2px;background-color: #8A8AFF;margin: 20px;"></div> نویترین <div style="float: left; width: 50%; height: 2px;background-color: #8A8AFF; margin: 20px;"></div>
    </div>
  </div>
  </div>
  <div class="container-sm text-center">
    <div class="row">

      <div class="col space-between"><a href="kteb.html"><img width="170" src="i/r13.jpg" alt=""></a><br><br>
        <h3>ناوی کتێب</h3>
      </div>
      <div class="col space-between"><a href="kteb.html"><img width="170" src="i/r14.jpg" alt=""></a><br><br>
        <h3>ناوی کتێب</h3>
      </div>
      <div class="col space-between"><a href="kteb.html"><img width="170" src="i/r15.jpg" alt=""></a><br><br>
        <h3>ناوی کتێب</h3>
      </div>
      <div class="col space-between"><a href="kteb.html"><img width="170" src="i/r16.jpg" alt=""></a><br><br>
        <h3>ناوی کتێب</h3>
      </div>
      <div class="col space-between"><a href="kteb.html"><img width="170" src="i/d13.jpg" alt=""></a><br><br>
        <h3>ناوی کتێب</h3>
      </div>
      <div class="col space-between"><a href="kteb.html"><img width="170" src="i/d13.jpg" alt=""></a><br><br>
        <h3>ناوی کتێب</h3>
      </div>




    </div>
  </div>


  <div style="float: left; width: 100%; height: 100px; display: flex; align-items: center; justify-content: center; font-size: 26px; color: #8A8AFF;">
    <div style="float: left; width: 80%; height: 200px; display: flex; align-items: center; justify-content: center;">
      <div style="float: left; width: 50%; height: 2px;background-color: #8A8AFF;margin: 20px;"></div> نویترین <div style="float: left; width: 50%; height: 2px;background-color: #8A8AFF; margin: 20px;"></div>
    </div>
  </div>
  </div>
  <div class="container-sm text-center">
    <div class="row">

      <div class="col space-between"><a href="kteb.html"><img width="170" src="i/aa3.jpg" alt=""></a><br><br>
        <h3>ناوی کتێب</h3>
      </div>
      <div class="col space-between"><a href="kteb.html"><img width="170" src="i/aa5.jpg" alt=""></a><br><br>
        <h3>ناوی کتێب</h3>
      </div>
      <div class="col space-between"><a href="kteb.html"><img width="170" src="i/d2.jpg" alt=""></a><br><br>
        <h3>ناوی کتێب</h3>
      </div>
      <div class="col space-between"><a href="kteb.html"><img width="170" src="i/a23.jpg" alt=""></a><br><br>
        <h3>ناوی کتێب</h3>
      </div>
      <div class="col space-between"><a href="kteb.html"><img width="170" src="i/aa9.jpg" alt=""></a><br><br>
        <h3>ناوی کتێب</h3>
      </div>
      <div class="col space-between"><a href="kteb.html"><img width="170" src="i/d13.jpg" alt=""></a><br><br>
        <h3>ناوی کتێب</h3>
      </div>




    </div>
  </div>


  <!-- Footer -->
  <footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->

      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4" style="text-align: center;">
            <!-- Content -->
            <h4 class="text-uppercase fw-bold mb-4" style="color: #8A8AFF;">
              <i class="fas fa-gem me-3"></i>دەربارە
            </h4>
            <p style="font-size :20px;">
              نـالـی پـێـگـەیـەک بـۆ زیـاتـر ئـاشــنــابــوونــی کۆمەڵگەکەمان بە خوێندن و خوێندنەوەی کتێب.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4" style="text-align: center;">
            <!-- Links -->
            <h4 class="text-uppercase fw-bold mb-4" style="color: #8A8AFF;">
              بەشەکان
            </h4>
            <p>
              <a href="#!" class="text-reset" style="font-size :20px;">ئــایــیــنـــی</a>
            </p>
            <p>
              <a href="#!" class="text-reset " style="font-size :20px;">کۆمەڵایەتی</a>
            </p>
            <p>
              <a href="#!" class="text-reset" style="font-size :20px;">فـەلـسـەفـی</a>
            </p>
            <p>
              <a href="#!" class="text-reset" style="font-size :20px;">مـێـژوویـی</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4" style="text-align: center;">
            <!-- Links -->
            <h4 class="text-uppercase fw-bold mb-4" style="color: #8A8AFF;">
              پێکهاتەکان
            </h4>
            <p>
              <a href="#!" class="text-reset" style="font-size :20px;">نووسەرەکان</a>
            </p>
            <p>
              <a href="#!" class="text-reset" style="font-size :20px;">چاپخـانـەکـان</a>
            </p>
            <p>
              <a href="#!" class="text-reset" style="font-size :20px;">کتێبی دەنگی</a>
            </p>
            <p>
              <a href="#!" class="text-reset" style="font-size :20px;">دەربـــــــارە</a>
            </p>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4" style="text-align: center;">
            <!-- Links -->
            <h4 class="text-uppercase fw-bold mb-4" style="color: #8A8AFF;">پەیوەندی</h4>
            <p style="font-size :20px;"><i class="fas fa-home me-3"></i>سەرۆکایەتی زانکۆی هەڵەبجە</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              example@gmail.com
            </p>


          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: #8A8AFF; color: aliceblue;">
      © 2023 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Nali.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->


  <script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
      showDivs(slideIndex += n);
    }

    function currentDiv(n) {
      showDivs(slideIndex = n);
    }

    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      if (n > x.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = x.length
      }
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-white", "");
      }
      x[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " w3-white";
    }
  </script>
</body>

</html>
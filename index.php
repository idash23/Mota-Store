<!doctype html>
<html lang="en">

<head>
  <title>Mota Store</title>

  <!-- Linking all jquery,bootstrap,css,owltheme & bxslider -->
  <link href="css/jquery.bxslider.min.css" rel="stylesheet">
  <link href="css/owl.carousel.min.css" rel="stylesheet">
  <link href="css/owl.theme.default.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

  <meta charset="UTF-8">
  <!-- Important to make website responsive -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

  <header>
    <!-- Navigation section begins here -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">MOTA Exotic Cars</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="car-buy.php">Featured Cars</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="cars.php">Car Inventory</a>
            </li>
            <a class="nav-link" href="admin/index.php">Admin</a>
            </li>
          </ul>
          <!-- Naviagation section ends here-->

          <!-- Car search section -->
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </header>


    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
          aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="images/2016-white-rolls-royce-dawn-for-sale-mph-club15.jpg" alt="slide 1">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="#777" />
          </svg>

          <!-- Sliders begin here-->
          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Luxury is a lifestyle.</h1>
              <p>Become a member and get access to the most exclusive exotic car services in the US.</p>
              <p><a class="btn btn-lg btn-primary" href="signup.php">Sign up today!</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/dmc_ferrari.jpg" alt="slide 2">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="#777" />
          </svg>

          <div class="container">
            <div class="carousel-caption">
              <h1>Quality Over Quantity Assured.</h1>
              <p>We offer a variety of services designed to make your life easier. For example, we can ship vehicles
                that is in our available locations to your door. You can buy or rent cars in our available inventory!.
              </p>
              <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/Lbu4D7.jpg" alt="slide 3">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="#777" />
          </svg>

          <div class="container">
            <div class="carousel-caption text-end">
              <h1>Explore your dream ride</h1>
              <p>Everyone has that car they have always dreamed of owning. Whether it is a classic Ferrari or a stunning
                Lamborghini, there is always that one vehicle that makes the heart pound. What vehicle do you dream of
                owning?
                Let MOTA Exotics make that dream a reality with our incredible selection of high-end exotic, classic,
                and collector vehicles.</p>
              <p><a class="btn btn-lg btn-primary" href="cars.php">Browse our car inventory</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <!-- Three columns of text below the carousel -->
    <section id="Locations">
      <div class="container">
        <div class="title">
          <h1>Locations Available</h1>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="card text-center">
              <img src="images/miami tilte.jfif" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Miami,FL</h5>
                <p class="card-text">Check out inventory in Miami.</p>
                <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-center">
              <img src="images/la title.jfif" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Los Angeles,CA</h5>
                <p class="card-text">Check out inventory in Los Angeles.</p>
                <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card text-center">
              <img src="images/okc tilte.jfif" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Oklahoma City,OK</h5>
                <p class="card-text">Check out inventory in Oklahoma City & Tulsa areas.</p>
                <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
              </div>
            </div>
          </div>
    </section>


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Popular Featured Cars<span class="text-muted"> Lamborghini Huracan. </span></h2>
        <p class="lead">The V10-powered Huracán line currently includes the all-wheel-drive LP 610-4 coupé and spyder,
          the low cost rear-wheel-drive LP 580-2 coupé and spyder and the most powerful, track oriented LP 640-4
          Performanté coupé and spyder.</p>
      </div>
      <div class="col-md-5">
        <img src="images/huracan orange.jfif" alt="lambo" class="img-responsive img-curve">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
    -->
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">American exotic <span class="text-muted"> Chevrolet Corvette C8 (Stingray).
          </span></h2>
        <p class="lead">With a lineage that stretches back to the 1950s, the Chevrolet Corvette is a mainstay of
          performance-car culture, and the current C8 model takes that tradition to a new place with a 490-hp V-8
          engine.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="images/chevy c8.jpg" alt="corvette" class="img-responsive img-curve">
        <!--  <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
    -->
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">And lastly. <span class="text-muted"> Rolls-Royce Cullinan </span></h2>
        <p class="lead"> The Rolls-Royce Cullinan is a full-sized luxury sport utility vehicle (SUV) produced by
          Rolls-Royce Motor Cars. The Cullinan is the unique SUV launched by Rolls-Royce, and is also the brand's first
          all-wheel drive vehicle.It is named after the Cullinan Diamond, the largest gem-quality rough diamond ever
          discovered.</p>
      </div>
      <div class="col-md-5">
        <img src="images/2019_Rolls-Royce_Cullinan_V12_Automatic_6.75_Front.jpg" alt="cullinan"
          class="img-responsive img-curve">
        <!--  <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
    -->
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->



  </main>

  <!-- social Section Starts Here -->
  <section class="social">
    <div class="container">
      <h5>Social Media</h5>

      <ul>
        <li>
          <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png" /></a>
        </li>
        <li>
          <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png" /></a>
        </li>
        <li>
          <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png" /></a>
        </li>
      </ul>
    </div>
  </section>
  <!-- social Section Ends Here -->

  <!-- footer Section Starts Here -->
  <section class="footer">
    <div class="container text-center">
      <p>All rights reserved. Designed By <a href="#">Cliford Charuka</a></p>
    </div>
  </section>
  <!-- FOOTER -->

  <!-- footer Section Ends Here -->

  <!-- footer Section ends here -->
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="js/jquery-3.6.0.min.js"> </script>
  <script src="js/jquery.bxslider.min.js"> </script>
  <script src="js/owl.carousel.js"> </script>
  <script src="js/bootstrap.bundle.min.js"> </script>
  <script src="js/bootstrap.min.js"> </script>
  <script src="js/main.js">

  </script>
</body>

</html>
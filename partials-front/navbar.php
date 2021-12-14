<? include('config/constants.php'); ?>

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
              <a class="nav-link" href="car-buy.php">Buy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="car-rent.php">Rent</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cars.php">Car inventory</a>
            </li>
            <a class="nav-link" href="admin/index.php">Admin</a>
            </li>
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

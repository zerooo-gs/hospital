<?php
  include 'function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>General Hospital Badulla</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid py-2 border-bottom d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-decoration-none text-body pe-3" href=""><i class="bi bi-telephone me-2"></i>+94 55 222 22 61</a>
                        <span class="text-body">|</span>
                        <a class="text-decoration-none text-body pe-3" href=""> &nbsp;Provincial General Hospital - Badulla</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-white shadow-sm mb-5">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-clinic-medical me-2"></i>PGH - Badulla</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="contact.php" class="nav-item nav-link active">Contact</a>
                        <a href="login.php" class="nav-item nav-link">Login</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Any Questions?</h5>
                <h1 class="display-4">Please Feel Free To Contact Us</h1>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="bg-light rounded d-flex flex-column align-items-center justify-content-center text-center" style="height: 200px;">
                        <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle mb-4" style="width: 100px; height: 70px; transform: rotate(-15deg);">
                            <i class="fa fa-2x fa-location-arrow text-white" style="transform: rotate(15deg);"></i>
                        </div>
                        <h6 class="mb-0">PGH, Bandarawela Rd, Badulla.</h6>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-light rounded d-flex flex-column align-items-center justify-content-center text-center" style="height: 200px;">
                        <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle mb-4" style="width: 100px; height: 70px; transform: rotate(-15deg);">
                            <i class="fa fa-2x fa-phone text-white" style="transform: rotate(15deg);"></i>
                        </div>
                        <h6 class="mb-0">+94 55 222 22 61</h6>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-light rounded d-flex flex-column align-items-center justify-content-center text-center" style="height: 200px;">
                        <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle mb-4" style="width: 100px; height: 70px; transform: rotate(-15deg);">
                            <i class="fa fa-2x fa-envelope-open text-white" style="transform: rotate(15deg);"></i>
                        </div>
                        <h6 class="mb-0">info@pghb.lk</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


<?php include 'footer.php';?>
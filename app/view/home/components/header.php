<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Put your description here.">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <title>Home</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?php base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php base_url('assets/css/style.css') ?>" rel="stylesheet">
</head>

<body>
  <header class="bg-body border-bottom border-primary fixed-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3 d-none d-lg-block">
          <a href="<?php base_url() ?>" class="d-flex  col-lg-4 mb-2 mb-lg-0 link-dark text-decoration-none" data-label="Site logo">
            <img src="<?php base_url('assets/img/bisabos.png') ?>" height="40px" width="40px" alt="Bisabos.com">
          </a>
        </div>
        <div class="col-md-6 d-none d-lg-block">
          <div class="d-flex align-items-center">
            <form class="w-100 me-3">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="type something to start the search" aria-label="type something to start the search" aria-describedby="searchButton">
                <button class="btn btn-primary" type="submit" id="searchButton" aria-label="searchButton">
                  <span aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                  </span>
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-3 d-none d-lg-block text-end">
        <?php
        if ($_SESSION['loggedin'] ?? false) {
        ?>
            <div class="d-flex justify-content-end align-items-center">
              <h5 class="m-0 me-2">Welcome, <?php echo $_SESSION['firstName'] ?></h5>
              <a href="<?php base_url('login/end_session') ?>" class="btn btn-primary">Logout</a>
            </div>
        <?php
        } else {
        ?>
          
            <a href="<?php base_url('login') ?>" class="btn btn-light me-2">Login</a>
            <a href="<?php base_url('register') ?>" class="btn btn-primary">Create account</a>
          
        <?php
        }
        ?>
        </div>
      </div>
    </div>

    <!-- navbar on mobile -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light d-lg-none d-xl-none">
      <div class="container-fluid">

        <a class="navbar-brand" href="index.html">
          <img src="<?php base_url('/img/bisbos.png') ?>" alt="Bisabos - Media Pemrograman Indonesia" height="40px" width="40px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact us</a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Privacy Policy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Disclaimer</a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('login') ?> ">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php base_url('register') ?>">Create Account</a>
            </li>
            <?php echo base_url('register') ?>
            <li>
              <hr class="dropdown-divider">
            </li>

          </ul>
          <form class="w-100 me-3">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="type something to start the search" aria-label="type something to start the search" aria-describedby="searchBtn">
              <button class="btn btn-primary" type="submit" id="searchBtn" aria-label="searchBtn">
                <span aria-hidden="true">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                  </svg>
                </span>
              </button>
            </div>
          </form>
        </div>
      </div>
    </nav>
  </header>
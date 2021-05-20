<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <title>blog</title>
        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="assets/css/style.css" rel="stylesheet">
    </head>
    <body>
        <header class="bg-body border-bottom border-primary fixed-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 d-none d-lg-block">
                        <a href="index.html" class="d-flex  col-lg-4 mb-2 mb-lg-0 link-dark text-decoration-none" data-label="Site logo">
                        <img src="assets/img/bisabos.png" height="40px" width="40px" alt="Bisabos.com">
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
                                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3 d-none d-lg-block text-end">
                        <a href="login.html" class="btn btn-light me-2">Login</a>
                        <a href="register.html" class="btn btn-primary">Create account</a>
                    </div>
                </div>
            </div>

            <!-- navbar on mobile -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light d-lg-none d-xl-none">
              <div class="container-fluid">
                
                  <a class="navbar-brand" href="index.html">
                    <img src="assets/img/bisabos.png" alt="Bisabos - Media Pemrograman Indonesia" height="40px" width="40px">
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
                    <li><hr class="dropdown-divider"></li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Privacy Policy</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Disclaimer</a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li class="nav-item">
                      <a class="nav-link" href="login.html">Login</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="register.html">Create Account</a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    
                  </ul>
                  <form class="w-100 me-3">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="type something to start the search" aria-label="type something to start the search" aria-describedby="searchBtn">
                        <button class="btn btn-primary" type="submit" id="searchBtn" aria-label="searchBtn">
                            <span aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                </svg>
                            </span>
                        </button>
                    </div>
                </form>
                </div>
              </div>
            </nav>
        </header>
        <main class="mb-3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-header bg-primary bg-gradient text-center text-white fw-bold fs-5">
                                Create Account
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="email" placeholder="Ex: hilmi@bisabos.com" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password1" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password1" placeholder="Your Password" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password2" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" id="password2" placeholder="Re type Your Password" required>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        I agree with the <a href="">Privacy Policy</a>
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100">Create Account</button>
                                </form>
                                <div class="border-bottom border-2 mb-2 mt-2"></div>
                                <div class="pt-2 mb-3">
                                    <a href="" class="btn facebook w-100 mb-3 text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook me-2" viewBox="0 0 16 16">
                                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                        </svg>
                                        Continue with Facebook
                                    </a>
                                    <a href="" class="btn btn-secondary w-100 mb-3 text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github me-2" viewBox="0 0 16 16">
                                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                                        </svg>
                                        Continue with Github
                                    </a>
                                    <a href="" class="btn btn-primary w-100 text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google me-2" viewBox="0 0 16 16">
                                            <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
                                        </svg>
                                        Continue with Google
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- ======= Footer ======= -->
        <footer id="footer" class="border-1 border-top border-primary">
            <div class="container-fluid py-4">
                <div class="copyright">
                    &copy; Copyright <strong><span>Blogobox</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    Designed by <a href="https://bisabos.com/">Bisabos</a>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
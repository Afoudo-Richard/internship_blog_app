<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Put your description here.">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <title>Bisabos</title>
        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="preload" as="style">
        <!-- sweet alert -->
        <link rel="stylesheet" href="assets/vendor/sweetalert/dist/sweetalert2.min.css">
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
            <nav class="navbar navbar-expand-lg navbar-light bg-light d-md-none d-lg-none d-xl-none">
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
                                <a class="nav-link" href="#">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Create Account</a>
                            </li>
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 d-none d-lg-block">
                        <div class="sticky-top">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <a href="https://bisabos.com" rel="noreferrer" target="_blank"><img src="assets/img/ads.png" alt="Bisabos.com - Media Pemrograman Indonesia" height="300" width="279"  class="card-img-top img-fluid" /></a>
                                </div>
                            </div>
                            <div class="d-flex flex-column p-3 bg-light mb-3 shadow">
                                <ul class="nav nav-pills flex-column mb-auto">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link active">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house me-2" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                                            </svg>
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link link-dark">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-person me-2" viewBox="0 0 16 16">
                                                <path d="M12 1a1 1 0 0 1 1 1v10.755S12 11 8 11s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
                                                <path d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                            </svg>
                                            About us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link link-dark">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill me-2" viewBox="0 0 16 16">
                                                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
                                            </svg>
                                            Contact us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link link-dark">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-check me-2" viewBox="0 0 16 16">
                                                <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
                                                <path d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                            </svg>
                                            Privacy Policy
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link link-dark">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-text me-2" viewBox="0 0 16 16">
                                                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                                <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                                            </svg>
                                            Disclaimer
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-flex flex-column p-3 bg-light mb-3 bg-body shadow-lg rounded-3">
                                <div class="border-bottom border-2 p-1 mb-2 fw-bold fs-5">Share This Article</div>
                                <div class="input-group mb-2">
                                    <input type="text" class="copyURL form-control" value="https://bisabos.com/blog/cara-membuat-animasi-mengetik-teks-dengan-css-dan-javascript" id="copyText" readonly aria-label="URL Copy">
                                    <button class="btn btn-outline-primary"  id="copyBtn" aria-label="URL Copy">
                                        <span aria-hidden="true">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16">
                                                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                                <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                                <ul class="list-group list-group-flush rounded-3">
                                    <li class="list-group-item bg-primary border border-light">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=PAGE_URL" target="_blank" rel="noreferrer" class="fw-bold text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook me-2" viewBox="0 0 16 16">
                                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                            </svg>
                                            Facebook
                                        </a>
                                    </li>
                                    <li class="list-group-item bg-primary border border-light">
                                        <a href="whatsapp://send?text=Hello%20World!" target="_blank" rel="noreferrer" class="fw-bold text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp me-2" viewBox="0 0 16 16">
                                                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                            </svg>
                                            Whatsapp
                                        </a>
                                    </li>
                                    <li class="list-group-item bg-primary border border-light">
                                        <a href="https://t.me/share/url?url={url}&text={text}" target="_blank" rel="noreferrer" class="fw-bold text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telegram me-2" viewBox="0 0 16 16">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
                                            </svg>
                                            Telegram
                                        </a>
                                    </li>
                                    <li class="list-group-item bg-primary border border-light">
                                        <a href="https://twitter.com/intent/tweet?text=PAGE_TITLE&amp;url=PAGE_URL" target="_blank" rel="noreferrer" class="fw-bold text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter me-2" viewBox="0 0 16 16">
                                                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                            </svg>
                                            Twitter
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-flex flex-column bg-light bg-body shadow-lg rounded-3">
                                <div class="card-header bg-primary bg-gradient text-white fw-bold fs-5">
                                    Tags
                                </div>
                                <div class="p-3 overflow-auto" style="max-height: 42vh">
                                    <div class="nav tag-cloud">
                                        <a href="https://laros.id/tags/laravel">Laravel</a>
                                        <a href="https://laros.id/tags/bisnis">Bisnis</a>
                                        <a href="https://laros.id/tags/blogging">Blogging</a>
                                        <a href="https://laros.id/tags/template">Template</a>
                                        <a href="https://laros.id/tags/bootstrap">Bootstrap</a>
                                        <a href="https://laros.id/tags/security">Security</a>
                                        <a href="https://laros.id/tags/nexmo">Nexmo</a>
                                        <a href="https://laros.id/tags/seo">SEO</a>
                                        <a href="https://laros.id/tags/toko-online">Toko Online</a>
                                        <a href="https://laros.id/tags/jivochat">Jivochat</a>
                                        <a href="https://laros.id/tags/plugin">Plugin</a>
                                        <a href="https://laros.id/tags/tawkto">Tawkto</a>
                                        <a href="https://laros.id/tags/tokopedia">Tokopedia</a>
                                        <a href="https://laros.id/tags/ruang-guru">Ruang Guru</a>
                                        <a href="https://laros.id/tags/stack">Stack</a>
                                        <a href="https://laros.id/tags/wfh">WFH</a>
                                        <a href="https://laros.id/tags/disqus">Disqus</a>
                                        <a href="https://laros.id/tags/katalon">Katalon</a>
                                        <a href="https://laros.id/tags/selenium">Selenium</a>
                                        <a href="https://laros.id/tags/vonage">Vonage</a>
                                        <a href="https://laros.id/tags/twilio">Twilio</a>
                                        <a href="https://laros.id/tags/xampp">Xampp</a>
                                        <a href="https://laros.id/tags/larablog">Larablog</a>
                                        <a href="https://laros.id/tags/tinymce">TinyMCE</a>
                                        <a href="https://laros.id/tags/animation">Animation</a>
                                        <a href="https://laros.id/tags/restapi">RestAPI</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mobile-space">
                        <div class="card border-primary mb-3">
                            <div class="card-body text-dark">
                                <h1 class="card-title mb-2">Navbar on Scroll, Membuat Animasi Navbar Saat Scroll Up & Scroll Down</h1>
                                <small class="text-muted">Written by <strong>Hilmi Hidayat</strong>, published on April 22, 2021</small>
                                <img src="assets/img/cover.png" height="390" width="730" class="card-img-top img-fluid" alt="...">
                                <p class="card-text mt-2"><strong>Sample Post Detail -</strong> Some quick example text to build on the card title and make up the bulk of the card's content.
                                    Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.
                                </p>
                                <figure>
                                    <blockquote class="blockquote">
                                        <p>A well-known quote, contained in a blockquote element.</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer">
                                        Someone famous in <cite title="Source Title">Source Title</cite>
                                    </figcaption>
                                </figure>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. 
                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                    Some quick example text to build on the card title and make up the bulk of the card's content
                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                </p>
                                <figure>
                                    <blockquote class="blockquote">
                                        <p>A well-known quote, contained in a blockquote element.</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer">
                                        Someone famous in <cite title="Source Title">Source Title</cite>
                                    </figcaption>
                                </figure>
                                <p class="card-text mt-2">Some quick example text to build on the card title and make up the bulk of the card's content.
                                    Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.
                                </p>
                                <div class="entry-footer clearfix">
                                    <div class="mb-2 float-left">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
                                            <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/>
                                            <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
                                        </svg>
                                        <ul class="cats">
                                            <li><a href="#">Web Development</a></li>
                                        </ul>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tags" viewBox="0 0 16 16">
                                            <path d="M3 2v4.586l7 7L14.586 9l-7-7H3zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2z"/>
                                            <path d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z"/>
                                        </svg>
                                        <ul class="tags">
                                            <li><a href="#">Laravel</a></li>
                                            <li><a href="#">PHP</a></li>
                                            <li><a href="#">Javascript</a></li>
                                        </ul>
                                    </div>
                                    <div class="d-flex border-top border-1 pt-2">
                                        <small class="pt-2 pb-2 me-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                            </svg>
                                            47 Reactions
                                        </small>
                                        <small class="pt-2 pb-2 me-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                                                <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                                <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                            </svg>
                                            10 Comments
                                        </small>
                                        <small class="pt-2 pb-2 me-2 ms-auto">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                                                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                                            </svg>
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-primary mb-3 d-md-none d-lg-none d-xl-none">
                            <div class="p-2 border-bottom border-2">
                                <div class="input-group mb-2">
                                    <input type="text" class="copyURL form-control" value="https://bisabos.com/blog/cara-membuat-animasi-mengetik-teks-dengan-css-dan-javascript" id="copyURL" readonly aria-label="URL Copy">
                                    <button class="btn btn-primary" id="copyButton" aria-label="URL Copy">
                                        <span aria-hidden="true">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16">
                                                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                                <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body text-dark d-flex justify-content-between">
                                <a href="https://www.facebook.com/sharer/sharer.php?u=PAGE_URL" target="_blank" rel="noreferrer" class="btn facebook text-white" title="Share this post on Facebook">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook me-2" viewBox="0 0 16 16">
                                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                    </svg>
                                    Share
                                </a>
                                <a href="whatsapp://send?text=Hello%20World!" target="_blank" rel="noreferrer" class="btn whatsapp text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp me-2" viewBox="0 0 16 16">
                                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                    </svg>
                                    Share
                                </a>
                                <a href="https://twitter.com/intent/tweet?text=PAGE_TITLE&amp;url=PAGE_URL" target="_blank" rel="noreferrer" class="btn twitter text-white" title="Share this post on Twitter">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter me-2" viewBox="0 0 16 16">
                                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                    </svg>
                                    Share
                                </a>
                            </div>
                        </div>
                        <div class="card border-primary mb-3">
                            <div class="card-body text-dark">
                                <div class="contact-form article-comment">
                                    <div class="fw-bold fs-5 mb-2">Leave a Reply</div>
                                    <form id="contact-form" method="POST">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input name="Name" id="username" placeholder="Name *" class="form-control" type="text" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input name="Email" id="userEmail" placeholder="Email *" class="form-control" type="email" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea name="message" id="message" placeholder="Your message *" rows="4" class="form-control" required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="send">
                                                    <button class="btn btn-primary"><span>Submit</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="sticky-top">
                            <div class="card mb-3 shadow-lg rounded-3">
                                <div class="card-body">
                                    <div class="d-flex text-center" style="width: 100%;">
                                        <div class="authorImage">
                                            <img src="assets/img/foto.png" height="48px" width="48px" class="rounded-circle img-fluid" alt="">
                                        </div>
                                        <div class="author pt-3 pb-3">
                                            <span >
                                            Hilmi Hidayat
                                            </span>
                                        </div>
                                    </div>
                                    <p class="card-text border-top mt-2 pt-1">Hello, I am a QA Engineer who likes to write whatever I know and present it in an article</p>
                                </div>
                                <div class="card-footer bg-transparent border">
                                    <div class="social-links text-center">
                                        <a href="https://twitter.com/larosweb" target="_blank" rel="noreferrer" class="web" data-label="web author">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
                                                <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z"/>
                                            </svg>
                                        </a>
                                        <a href="https://twitter.com/larosweb" target="_blank" rel="noreferrer" class="twitter" data-label="twitter author">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                            </svg>
                                        </a>
                                        <a href="https://www.facebook.com/Joolang-108822371250228/" target="_blank" rel="noreferrer" class="facebook" data-label="facebook author">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                            </svg>
                                        </a>
                                        <a href="https://instagram.com/joolang.id" target="_blank" rel="noreferrer" class="instagram" data-label="instagram author">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                            </svg>
                                        </a>
                                        <a href="https://instagram.com/joolang.id" target="_blank" rel="noreferrer" class="linkedin" data-label="instagram author">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3 shadow-lg rounded-3">
                                <div class="card-body">
                                    <img src="assets/img/ads1.png" height="117" width="279" class="card-img-top img-fluid" alt="...">
                                </div>
                            </div>
                            <div class="card text-dark bg-light shadow-lg bg-body rounded-3 mb-3">
                                <div class="card-header bg-primary bg-gradient text-white fw-bold fs-5">
                                    Newsletter
                                </div>
                                <div class="card-body">
                                    <p>Get the latest information from us via email</p>
                                    <form>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="name" placeholder="Nama">
                                        </div>
                                        <div class="mb-3">
                                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email">
                                        </div>
                                        <button type="submit" class="btn btn-primary" aria-label="Subscribe">
                                        <span aria-hidden="true">Subscribe</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="bg-light bg-body shadow-lg rounded-3 mb-3">
                                <div class="card-header bg-primary bg-gradient text-white fw-bold fs-5">
                                    7 Most Popular Articles
                                </div>
                                <ul class="list-group list-group-flush mb-2">
                                    <li class="list-group-item">
                                        Integrasi Ckeditor dengan Laravel File Manager di Laravel 8
                                        <div>
                                            <small class="text-muted">27 April 2021,</small>
                                            <small class="text-muted">5500 views </small>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        Integrasi Ckeditor dengan Laravel File Manager di Laravel 8
                                        <div>
                                            <small class="text-muted">27 April 2021,</small>
                                            <small class="text-muted">5500 views </small>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        Integrasi Ckeditor dengan Laravel File Manager di Laravel 8
                                        <div>
                                            <small class="text-muted">27 April 2021,</small>
                                            <small class="text-muted">5500 views </small>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        Integrasi Ckeditor dengan Laravel File Manager di Laravel 8
                                        <div>
                                            <small class="text-muted">27 April 2021,</small>
                                            <small class="text-muted">5500 views </small>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        Integrasi Ckeditor dengan Laravel File Manager di Laravel 8
                                        <div>
                                            <small class="text-muted">27 April 2021,</small>
                                            <small class="text-muted">5500 views </small>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        Integrasi Ckeditor dengan Laravel File Manager di Laravel 8
                                        <div>
                                            <small class="text-muted">27 April 2021,</small>
                                            <small class="text-muted">5500 views </small>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        Integrasi Ckeditor dengan Laravel File Manager di Laravel 8
                                        <div>
                                            <small class="text-muted">27 April 2021,</small>
                                            <small class="text-muted">5500 views </small>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-flex flex-column mb-3 bg-light shadow bg-body rounded">
                                <div class="card-header bg-primary bg-gradient text-white fw-bold fs-5">
                                    Categories
                                </div>
                                <div class="overflow-auto" style="max-height: 42vh">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Hot News
                                            <span class="badge bg-primary rounded-pill">3432</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Technology
                                            <span class="badge bg-primary rounded-pill">1423</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Lifestyle
                                            <span class="badge bg-primary rounded-pill">982</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Health
                                            <span class="badge bg-primary rounded-pill">743</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Ramadhan
                                            <span class="badge bg-primary rounded-pill">232</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Automotive
                                            <span class="badge bg-primary rounded-pill">232</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Finance
                                            <span class="badge bg-primary rounded-pill">231</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Travel
                                            <span class="badge bg-primary rounded-pill">172</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Sport
                                            <span class="badge bg-primary rounded-pill">123</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex flex-column bg-light bg-body shadow-lg rounded-3 d-md-none d-lg-none d-xl-none">
                                <div class="card-header bg-primary bg-gradient text-white fw-bold fs-5">
                                    Tags
                                </div>
                                <div class="p-3 overflow-auto" style="max-height: 42vh">
                                    <div class="nav tag-cloud">
                                        <a href="https://laros.id/tags/laravel">Laravel</a>
                                        <a href="https://laros.id/tags/bisnis">Bisnis</a>
                                        <a href="https://laros.id/tags/blogging">Blogging</a>
                                        <a href="https://laros.id/tags/template">Template</a>
                                        <a href="https://laros.id/tags/bootstrap">Bootstrap</a>
                                        <a href="https://laros.id/tags/security">Security</a>
                                        <a href="https://laros.id/tags/nexmo">Nexmo</a>
                                        <a href="https://laros.id/tags/seo">SEO</a>
                                        <a href="https://laros.id/tags/toko-online">Toko Online</a>
                                        <a href="https://laros.id/tags/jivochat">Jivochat</a>
                                        <a href="https://laros.id/tags/plugin">Plugin</a>
                                        <a href="https://laros.id/tags/tawkto">Tawkto</a>
                                        <a href="https://laros.id/tags/tokopedia">Tokopedia</a>
                                        <a href="https://laros.id/tags/ruang-guru">Ruang Guru</a>
                                        <a href="https://laros.id/tags/stack">Stack</a>
                                        <a href="https://laros.id/tags/wfh">WFH</a>
                                        <a href="https://laros.id/tags/disqus">Disqus</a>
                                        <a href="https://laros.id/tags/katalon">Katalon</a>
                                        <a href="https://laros.id/tags/selenium">Selenium</a>
                                        <a href="https://laros.id/tags/vonage">Vonage</a>
                                        <a href="https://laros.id/tags/twilio">Twilio</a>
                                        <a href="https://laros.id/tags/xampp">Xampp</a>
                                        <a href="https://laros.id/tags/larablog">Larablog</a>
                                        <a href="https://laros.id/tags/tinymce">TinyMCE</a>
                                        <a href="https://laros.id/tags/animation">Animation</a>
                                        <a href="https://laros.id/tags/restapi">RestAPI</a>
                                    </div>
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
        <script src="assets/vendor/sweetalert/dist/sweetalert2.min.js"></script>
        <script>
            const copyBtn = document.getElementById('copyBtn')
            const copyText = document.getElementById('copyText')
            
            copyBtn.onclick = () => {
                copyText.select();    // Selects the text inside the input
                document.execCommand('copy');    // Simply copies the selected text to clipboard 
                Swal.fire({
                    icon: 'success',
                    title: 'Text copied to clipboard',
                    showConfirmButton: false,
                    timer: 2000
                });
            }
        </script>
        <script>
            const copyButton = document.getElementById('copyButton')
            const copyURL = document.getElementById('copyURL')
            
            copyButton.onclick = () => {
                copyURL.select();    // Selects the text inside the input
                document.execCommand('copy');    // Simply copies the selected text to clipboard 
                Swal.fire({
                    icon: 'success',
                    title: 'Text copied to clipboard',
                    showConfirmButton: false,
                    timer: 1000
                });
            }
        </script>
    </body>
</html>
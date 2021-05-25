<?php include_once('components/header.php'); ?>

<main class="mb-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header bg-primary bg-gradient text-center text-white fw-bold fs-5">
                        Login
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($errors)) {
                        ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php
                                    foreach ($errors as $error => $value) {
                                    ?>
                                        <li><?php echo $error . " : " . $value ?></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        <?php
                        }
                        ?>
                        <form action="<?php echo site_url('login/loginAuth'); ?>" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="Ex: hilmi@bisabos.com" required name="email">
                            </div>
                            <div class="mb-3">
                                <label for="password1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password1" placeholder="Your Password" required name="password">
                            </div>
                            
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                        </form>
                        <div class="border-bottom border-2 mb-2 mt-2"></div>
                        
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
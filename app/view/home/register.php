<?php include_once('components/header.php') ?>
        <main class="mb-3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-header bg-primary bg-gradient text-center text-white fw-bold fs-5">
                                Create Account
                            </div>
                            <div class="card-body">
                                <?php
                                    if(isset($errors)){
                                ?>
                                        <div class="alert alert-danger">
                                            <ul>
                                            <?php
                                                foreach($errors as $error => $value){
                                            ?>
                                                <li><?php echo $error." : ".$value ?></li>
                                            <?php
                                                }
                                            ?>
                                            </ul>
                                        </div>
                                <?php
                                    }
                                ?>
                                <form action="<?php echo site_url('register/registerUser'); ?>" method="POST">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Your First Name" required name="firstName" value="<?php echo $_POST['firstName'] ?? "" ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Your Last Name" required name="lastName" value="<?php echo $_POST['lastName'] ?? "" ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="email" placeholder="Ex: hilmi@bisabos.com" required name="email" value="<?php echo $_POST['email'] ?? "" ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password1" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password1" placeholder="Your Password" required name="password" value="<?php echo $_POST['password'] ?? "" ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password2" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" id="password2" placeholder="Re type Your Password" required name="confirm_password" value="<?php echo $_POST['confirm_password'] ?? "" ?>">
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary w-100">Create Account</button>
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
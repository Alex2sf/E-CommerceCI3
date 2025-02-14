
<!DOCTYPE html>
<html lang="en">



<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Form Login!</h1>
                                    </div>
                                    <?php echo $this->session->flashdata('pesan')?>
                                    <form method="post" action="<?php echo base_url('auth/login')?>" class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..." name="username">
                                                <?php echo form_error('username', '<div class="text-danger small">', '</div>'); ?>

                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="password">
                                                <?php echo form_error('password', '<div class="text-danger small">', '</div>'); ?>

                                        </div>
                                        <div class="form-group">
                                       
                                        </div>
                                        <button type='submit' class='btn btn-primary form-control'>
                                            Login</button>
                                        <hr>
                                    
                                    </form>
                                    <hr>
                                    
                                    <div class="text-center">
                                        <a class="small" href="register.html">Daftar Akun!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
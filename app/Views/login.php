<?= $this->extend('layout_clear') ?>
<?= $this->section('content') ?>

<div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome!</h1>
                                    </div>
                                    
                                    <?php
                                        if (session()->getFlashData('failed')) {
                                        ?>
                                        <div class="col-12 alert alert-danger" role="alert">
                                            <hr>
                                            <p class="mb-0">
                                                <?= session()->getFlashData('failed') ?>
                                            </p>
                                        </div>
                                    <?php
                                        }
                                    ?>
                                    
                                    <?= form_open('login', 'class = "user"') ?>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputUsername" name="username"
                                                placeholder="Enter Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="password">
                                        </div>
                                        <?= form_submit('submit', 'Login', ['class' => 'btn btn-primary btn-user btn-block']) ?>
                                        <hr>
                                        <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a>
                                    <?= form_close() ?>

                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

<?= $this->endSection() ?>
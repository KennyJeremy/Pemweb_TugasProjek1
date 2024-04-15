<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 offset-md-3 d-flex justify-content-center align-items-center">
                    <div class="card col-md-12">
                        <div class="card-header text-center">
                            Login
                        </div>
                        <div class="card-body">
                            <?php
                            if(isset($_GET['alert'])) {
                                if($_GET['alert'] == "terdaftar") {
                                    ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <span class="alert-inner--icon"><i class="ni ni-bell-55"></i></span>
                                        <span class="alert-inner--text"><strong>Pendaftaran Berhasil.</strong> Silahkan login!</span>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <?php
                                }elseif($_GET['alert'] == "gagal"){
                                    ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <span class="alert-inner--icon"><i class="ni ni-bell-55"></i></span>
                                        <span class="alert-inner--text"><strong>Email dan Password salah!</strong> coba lagi!</span>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <?php
                                }elseif($_GET['alert'] == "login-dulu"){
                                    ?>
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <span class="alert-inner--icon"><i class="ni ni-bell-55"></i></span>
                                        <span class="alert-inner--text"><strong>Warning!</strong> <br/> Silahkan login terlebih dulu untuk membuat diskusi baru!</span>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                            <form action="login.php" method="post">
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" required="required" id="email" name="email" placeholder="Masukkan email .."/>
                                </div>

                                <div class="form-group">
                                    <label for="password">Password:</label>
                                    <input type="password" class="form-control" required="required" id="password" name="password" placeholder="Masukkan password .."/>
                                </div>
                                <br>

                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" required="required" value="Login" />
                                </div>
                                

                                <div class="form-group">
                                    <a href="#">Forget Password</a>
                                    <a href="register_page.php" class="btn btn-warning pull-right">Register</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

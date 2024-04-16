<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registrasi</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <style>
            .password-wrapper {
                position: relative;
            }

            .eye-icon {
                position: absolute;
                top: 50%;
                right: 10px;
                transform: translateY(-50%);
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 offset-md-3 d-flex justify-content-center align-items-center">
                    <div class="card col-md-12">
                        <div class="card-header text-center">
                            Registrasi
                        </div>
                        <div class="card-body">
                            
                            <?php
                            if(isset($_GET['alert'])){
                                if($_GET['alert'] == 'duplikat'){
                                    ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <span class="alert-inner--icon"><i class="ni ni-bell-55"></i></span>
                                        <span class="alert-inner--text"><strong>Gagal!</strong> Email sudah pernah digunakan, silahkan gunakan email yang lain!</span>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <?php
                                }
                            }
                            ?> 
                            <form id="registerForm" method="POST">
                                <div class="form-group">
                                    <label for="nama">Nama:</label>
                                    <input type="text" class="form-control" required="required" id="name" name="name" placeholder="Masukkan nama user/nama toko ..">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" required="required" id="email" name="email" placeholder="Masukkan email ..">
                                </div>
                                
                                <div class="form-group">
                                    <label for="hp">No.Telp:</label>
                                    <input type="tel" class="form-control" required="required" id="hp" name="hp" placeholder="Masukkan nomor telepon ..">
                                </div>

                                <div class="form-group">
                                    <label for="alamat">Alamat:</label>
                                    <input type="text" class="form-control" required="required" id="alamat" name="alamat" placeholder="Masukkan alamat rumah/alamat toko ..">
                                </div>

                                <div class="form-group">
                                    <label for="password">Password:</label>
                                    <div class="password-wrapper">
                                        <input type="password" class="form-control" required="required" id="password" name="password" placeholder="Masukkan password ..">
                                        <span class="eye-icon">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="30"
                                                height="20"
                                                viewBox="0 0 89 63"
                                                fill="none">
                                                <path
                                                    d="M57.7458 31.4177C57.7458 34.9521 56.3418 38.3418 53.8426 40.841C51.3434 43.3402 47.9537 44.7442 44.4193 44.7442C40.8849 44.7442 37.4952 43.3402 34.996 40.841C32.4968 38.3418 31.0928 34.9521 31.0928 31.4177C31.0928 27.8833 32.4968 24.4936 34.996 21.9944C37.4952 19.4952 40.8849 18.0912 44.4193 18.0912C47.9537 18.0912 51.3434 19.4952 53.8426 21.9944C56.3418 24.4936 57.7458 27.8833 57.7458 31.4177Z"
                                                    fill="#626B96"
                                                />
                                                <path
                                                    d="M88.3702 29.4321C78.784 10.2552 61.7616 0.32251 44.4194 0.32251C27.0816 0.32251 10.0547 10.2552 0.468498 29.4321C0.160395 30.0486 0 30.7285 0 31.4177C0 32.107 0.160395 32.7868 0.468498 33.4034C10.0547 52.5802 27.0771 62.5129 44.4194 62.5129C61.7572 62.5129 78.784 52.5802 88.3702 33.4034C88.6783 32.7868 88.8387 32.107 88.8387 31.4177C88.8387 30.7285 88.6783 30.0486 88.3702 29.4321ZM44.4194 53.6286C31.2305 53.6286 17.7574 46.4323 9.45946 31.4177C17.7574 16.4032 31.2261 9.20685 44.4194 9.20685C57.6082 9.20685 71.0813 16.4032 79.3793 31.4177C71.0813 46.4323 57.6082 53.6286 44.4194 53.6286Z"
                                                    fill="#626B96"
                                                />
                                            </svg>
                                        </span> 
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="konfirmasi_password">Konfirmasi Password:</label>
                                    <div class="password-wrapper">
                                        <input type="password" class="form-control" required="required" id="konfirmasi_password" name="konfirmasi_password" placeholder="Tulis ulang password ..">
                                        <span class="eye-icon">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="30"
                                                height="20"
                                                viewBox="0 0 89 63"
                                                fill="none">
                                                <path
                                                    d="M57.7458 31.4177C57.7458 34.9521 56.3418 38.3418 53.8426 40.841C51.3434 43.3402 47.9537 44.7442 44.4193 44.7442C40.8849 44.7442 37.4952 43.3402 34.996 40.841C32.4968 38.3418 31.0928 34.9521 31.0928 31.4177C31.0928 27.8833 32.4968 24.4936 34.996 21.9944C37.4952 19.4952 40.8849 18.0912 44.4193 18.0912C47.9537 18.0912 51.3434 19.4952 53.8426 21.9944C56.3418 24.4936 57.7458 27.8833 57.7458 31.4177Z"
                                                    fill="#626B96"
                                                />
                                                <path
                                                    d="M88.3702 29.4321C78.784 10.2552 61.7616 0.32251 44.4194 0.32251C27.0816 0.32251 10.0547 10.2552 0.468498 29.4321C0.160395 30.0486 0 30.7285 0 31.4177C0 32.107 0.160395 32.7868 0.468498 33.4034C10.0547 52.5802 27.0771 62.5129 44.4194 62.5129C61.7572 62.5129 78.784 52.5802 88.3702 33.4034C88.6783 32.7868 88.8387 32.107 88.8387 31.4177C88.8387 30.7285 88.6783 30.0486 88.3702 29.4321ZM44.4194 53.6286C31.2305 53.6286 17.7574 46.4323 9.45946 31.4177C17.7574 16.4032 31.2261 9.20685 44.4194 9.20685C57.6082 9.20685 71.0813 16.4032 79.3793 31.4177C71.0813 46.4323 57.6082 53.6286 44.4194 53.6286Z"
                                                    fill="#626B96"
                                                />
                                            </svg>
                                        </span> 
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="role">Role:</label>
                                    <br>
                                    <input type="radio" required="required" id="seller" name="role" value="seller">
                                    <label for="seller">Seller</label>
                                    <br>
                                    <input type="radio" required="required" id="buyer" name="role" value="buyer">
                                    <label for="buyer">Buyer</label>
                                </div>

                                <div class="form-group">
                                    <input type="button" class="btn btn-primary" value="Daftar" onclick="submitRegistForm()">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

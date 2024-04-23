<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registrasi</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="stylereg.css" />
    </head>
    <body>
        <div class="container-fluid d-flex justify-content-center align-items-center">
            <div class="row">
                <div class="col-sm-6 grid-gambar">
                    <img src="../assets/images/reg-image.png" alt="background" width="100%">
                </div>
                <div class="col-sm-6 grid-input">            
                    <?php
                        include '../components/alert.php';
                    ?> 

                    <form id="registerForm" class="align-items-center" method="POST">
                        <p class="text-center" id="registrasi">REGISTRASI</p>
                        <div class="form-group">
                            <label for="nama" style="display: flex; align-items: center;">
                                <span class="material-symbols-outlined custom-span">person</span>Nama
                            </label>
                            <input type="text" class="form-control" required="required" id="name" name="name" placeholder="Masukkan nama user/nama toko ..">
                        </div>

                        <div class="form-group">
                            <label for="email"style="display: flex; align-items: center;">
                                <span class="material-symbols-outlined custom-span">mail</span>Email
                            </label>
                            <input type="email" class="form-control" required="required" id="email" name="email" placeholder="Masukkan email ..">
                        </div>
                                        
                        <div class="form-group">
                            <label for="hp"style="display: flex; align-items: center;">
                                <span class="material-symbols-outlined custom-span">call</span>No.Telp
                            </label>
                            <input type="tel" class="form-control" required="required" id="hp" name="hp" placeholder="Masukkan nomor telepon ..">
                        </div>

                        <div class="form-group">
                            <label for="alamat"style="display: flex; align-items: center;">
                                <span class="material-symbols-outlined custom-span">location_on</span>Alamat
                            </label>
                            <input type="text" class="form-control" required="required" id="alamat" name="alamat" placeholder="Masukkan alamat rumah/alamat toko ..">
                        </div>

                        <div class="form-group">
                            <label for="password"style="display: flex; align-items: center;">
                                <span class="material-symbols-outlined custom-span">lock</span>
                                Password
                            </label>
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
                            <label for="konfirmasi_password"style="display: flex; align-items: center;">
                                <span class="material-symbols-outlined custom-span">lock</span>Konfirmasi Password
                            </label>
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
                            <label for="role" style="display: flex; align-items: center;" id="seller">
                                <span class="material-symbols-outlined custom-span">sell</span> 
                                     Role
                            </label>
                            <input type="radio" required="required" id="seller" name="role" value="seller">
                            <label class="custom-seller" for="seller">Seller</label>
                            <input type="radio" required="required" id="buyer" name="role" value="buyer">
                            <label class="custom-buyer" for="buyer">Buyer</label>
                        </div>
                        <div class="form-group text-center">
                            <input type="button" class="btn btn-primary" onclick="submitRegistForm()" value="Daftar"></input>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="../assets/js/register.js"></script>
    </body>
</html>

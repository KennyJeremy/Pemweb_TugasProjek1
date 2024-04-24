<?php include '../components/header.php'; ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 offset-md-4 d-flex justify-content-center align-items-center">
                    <div class="card col-md-12">
                        <div class="card-header text-center">
                            <img src="../assets/images/log-image.png" alt="">LOGIN
                        </div>
                        <div class="card-body">
                            <?php
                                include '../components/alert.php';
                            ?>
                            <form id="loginForm" class="align-items-center" method="post">
                                <div class="form-group">
                                    <label for="email"style="display: flex; align-items: center;">
                                        <span class="material-symbols-outlined custom-span">mail</span>Email
                                    </label>
                                    <input type="email" class="form-control" required="required" id="email" name="email" placeholder="Masukkan email .."/>
                                </div>

                                <div class="form-group">
                                    <label for="password"style="display: flex; align-items: center;">
                                        <span class="material-symbols-outlined custom-span">lock</span>Password
                                    </label>
                                    <input type="password" class="form-control" required="required" id="password" name="password" placeholder="Masukkan password .."/>
                                </div>

                                <div class="form-group d-flex justify-content-between mt-3 mb-3" id="bottom-side" style="text-align: center;">
                                    <div class="form-group d-flex" id="left-side">
                                        <a href="register_page.php" id="register">Register now</a>
                                        <a href="javascript:alert('Mohon maaf fitur ini belum tersedia untuk saat ini!')">Forget Password</a>
                                    </div>
                                    <div class="form-group d-flex align-items-center" id="right-side">
                                        <input type="button" id="login" class="btn btn-primary" required="required" onclick="submitLoginForm()" value="Login"></input>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="../assets/js/login.js"></script>
    </body>
</html>
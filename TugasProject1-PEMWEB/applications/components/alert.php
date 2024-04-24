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
    } elseif($_GET['alert'] == "gagal") {
        ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <span class="alert-inner--icon"><i class="ni ni-bell-55"></i></span>
            <span class="alert-inner--text"><strong>Email dan Password salah!</strong> coba lagi!</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <?php
    } elseif($_GET['alert'] == "login-dulu") {
        ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <span class="alert-inner--icon"><i class="ni ni-bell-55"></i></span>
            <span class="alert-inner--text"><strong>Warning!</strong> <br/> Silahkan login terlebih dulu untuk memposting barang baru!</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <?php
    } elseif($_GET['alert'] == 'duplikat') {
        ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <span class="alert-inner--icon"><i class="ni ni-bell-55"></i></span>
            <span class="alert-inner--text"><strong>Gagal!</strong> Email sudah pernah digunakan, silahkan gunakan email yang lain!</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <?php
    } elseif($_GET['alert'] == "login-berhasil") {
        ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <span class="alert-inner--icon"><i class="ni ni-bell-55"></i></span>
            <span class="alert-inner--text"><strong>Login berhasil!</strong></span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <?php
    }
}
?>
<?php

    if($_SESSION['user_role'] == 'buyer') {
        ?>
        <nav class="navbar navbar-expand-sm">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"
            class="d-flex align-items-center link-body-emphasis text-decoration-none"
          >
            <img
              src="./applications/assets/images/log-image.png"
              alt="logo-icon"
            />
            <span class="logo-name">Beli Barang.id</span></a>
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
              <ul class="navbar-nav d-flex align-items-center">
                <li class="nav-item">
                    <button type="button" class="btn btn-primary">Logout</button>
                </li>
                <li class="nav-item">
                  <img src="./applications/assets/images/orang.jpg" class="rounded-circle" alt="Cinque Terre">
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <?php
    } elseif ($_SESSION['user_role'] == 'seller') {
        ?>
        <nav class="navbar navbar-expand-sm">
          <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center link-body-emphasis text-decoration-none" href="index.php">
              <img
                src="./applications/assets/images/log-image.png"
                alt="logo-icon"
              />
              <span class="logo-name">BeliBarang.id</span>
            </a>
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
              <ul class="navbar-nav d-flex align-items-center">
                <li class="nav-item">
                  <a class="nav-link" href="./applications/views/posting_page.php">
                    <button type="button" class="btn btn-primary">
                      Jual
                    </button>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./applications/controllers/logout.php">
                    <button type="button" class="btn btn-primary">Logout</button>
                  </a>
                </li>
                <li class="nav-item">
                  <img src="./applications/assets/images/orang.jpg" class="rounded-circle" alt="Cinque Terre">
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <?php
    }
?> 
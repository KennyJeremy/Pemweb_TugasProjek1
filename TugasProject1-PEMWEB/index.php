<?php include './applications/components/header.php' ?>
    <div class="wrapper-container">
      
      <!-- Navigation Bar-->
      <div class="header-container fixed-top">
        <?php include './applications/components/navbar.php' ?>
      </div>

      <div class="container mt-3">
        <div class="title-up">
        <h2>Rekomendasi Barang</h2>
        <p>Barang yang mungkin anda suka dan cari</p>
      </div>

      <?php include './applications/controllers/products.php' ?>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>

  </body>
</html>

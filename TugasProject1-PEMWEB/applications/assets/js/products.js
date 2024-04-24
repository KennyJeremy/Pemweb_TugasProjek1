// Mengambil data produk dari server menggunakan Axios
function showProduct(seller_id) {
  axios
    .get("url_ke_php_endpoint_produk_user_seller?seller_id=") // Ganti "1" dengan seller_id yang sesuai
    .then((response) => {
      // Jika berhasil, buat div produk untuk setiap item dalam response
      response.data.forEach(function (product) {
        var productDiv = document.createElement("div");
        productDiv.className = "feature col";
        productDiv.innerHTML = `
          <div class="feature-icon bg-primary bg-gradient">
            <img src=${product.file_path} alt="Foto Produk">
          </div>
          <h2>${product.title}</h2>
          <h3>${product.price}</h3>
          <p>${product.description}</p>
          <a href="#" class="icon-link">
            Lihat detail produk
            <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
          </a>
        `;

        // Memasukkan div produk ke dalam wadah "productRow"
        document.getElementById("productsRow").appendChild(productDiv);
      });
    })
    .catch((error) => {
      console.error("Terjadi kesalahan saat memuat data produk:", error);
    });
}

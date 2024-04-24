 <?php include '../components/header.php' ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 offset-md-3 d-flex justify-content-center align-items-center">
                    <div class="card col-md-12">
                        <div class="card-header text-center">
                            Form Posting
                        </div>
                        <div class="card-body">
                            <form id="postingForm" class="align-items-center" enctype="multipart/form-data" method="POST">
                                <div class="form-group">
                                    <label for="nama"style="display: flex; align-items: center;">
                                    <span class="material-symbols-outlined custom-span">inventory</span>Nama Produk
                                    </label>
                                    <input id="nama" name="nama" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi"style="display: flex; align-items: center;">
                                    <span class="material-symbols-outlined custom-span">description</span>Deskripsi Produk
                                    </label>
                                    <input id="deskripsi" name="deskripsi" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah"style="display: flex; align-items: center;">
                                    <span class="material-symbols-outlined custom-span">inventory_2</span>Jumlah Stok
                                    </label>
                                    <input id="jumlah" name="jumlah" type="number" min="1" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="harga"style="display: flex; align-items: center;">
                                    <span class="material-symbols-outlined custom-span">payments</span>Harga Produk
                                    </label>
                                    <input id="harga" name="harga" type="number" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="uploadedfile"style="display: flex; align-items: center;">
                                    <span class="material-symbols-outlined custom-span">image</span>Foto Produk
                                    </label>
                                    <input id="uploadedfile" name="uploadedfile" type="file" class="form-control-file" required>
                                </div>
                                <div class="form-group" style="text-align: center;">
                                    <input type="button" class="btn btn-primary" onclick="submitPostingForm()" value="Submit"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="../assets/js/posting.js"></script>
</body>
</html>



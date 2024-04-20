<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Malang Commerce</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>     
    <body>    
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 offset-md-3 d-flex justify-content-center align-items-center">
                    <div class="card col-md-12">
                        <div class="card-header text-center">
                            Form Posting
                        </div>
                        <div class="card-body">
                            <form id="postingForm" enctype="multipart/form-data" method="POST">
                                <div class="form-group">
                                    <label for="nama">Nama Produk:</label>
                                    <input id="nama" name="nama" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi Produk:</label>
                                    <input id="deskripsi" name="deskripsi" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">Jumlah Stok:</label>
                                    <input id="jumlah" name="jumlah" type="number" min="1" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="harga">Harga Produk:</label>
                                    <input id="harga" name="harga" type="number" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="uploadedfile">Foto Produk:</label>
                                    <input id="uploadedfile" name="uploadedfile" type="file" class="form-control-file" required>
                                </div>
                                <button type="submit" class="btn btn-primary" onclick="submitPostingForm()">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="posting.js"></script>
    </body>
</html>

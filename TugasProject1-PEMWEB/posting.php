<html>
    <body>
    <h1>Form Posting</h1>
        <form method="post" enctype="multipart/form-data">
            Nama Produk : <input name ="nama" type="text"/><br/>
            Deskripsi Produk : <input name="deskripsi" type="text"/><br/>
            Jumlah Stok : <input name="jumlah" type="number" min="1"/><br/>
            Harga Produk : <input name="harga" type="number"/><br/>
            Foto Produk: <input name="uploadedfile" type="file" /> <br>
            <input type="submit" value="Submit"/>
        </form>
        <?php
        session_start();
        $_SESSION["alert"] = "Data Telah Disimpan";
        ?>

        <?php
        if (isset($_SESSION["alert"])) {
            echo "<script>alert('" . $_SESSION["alert"] . "');</script>";
            unset($_SESSION["alert"]); // Hapus session alert setelah ditampilkan
        }
        ?>
    </body>
</html>
<?php
include './applications/config/connection.php';
session_start();
function showProducts($data, $conn) {
    $sql = "SELECT name AS product_name, description, price, stock, file_path FROM products WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $data['user_id']);
    $stmt->execute();
    $result = $stmt->get_result();
    $products = array();

    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }

    // Memasukkan kode HTML di luar loop foreach
?>
    <div class="col-12 mt-5 p-4 wrapper-toko">
        <ul class="toko d-flex align-items-center">
            <li class="toko-item">
                <img src="./applications/assets/images/logo shop.jpg" class="rounded-circle" alt="Cinque Terre">
            </li>
            <li class="toko-item">
                <a class="nama-toko" href="#"><?php echo $data['user_name'] ?></a> 
                <p class="nama-lokasi">
                    <span class="material-symbols-outlined" id="location-icon">
                        location_on
                    </span>
                    <?php echo $data['alamat'] ?>
                </p>
            </li>
        </ul>

        <div class="row">
            <div class="d-flex justify-content-start">
<?php
    foreach ($products as $product) {
?>
                <div class="col-3 p-2">
                    <div class="card" style="width:250px">
                        <img class="card-img-top" src="<?php echo $product['file_path']; ?>" alt="Card image" style="width:60%">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $product['product_name']; ?></h4>
                            <h4 class="card-price">Rp<?php echo number_format($product['price'], 2, ',', '.'); ?></h4>
                            <br>
                            <p class="card-text"><?php echo $product['description']; ?></p>
                            <p class="card-stok">
                                Stok : <?php echo $product['stock']; ?>
                            </p>
                        </div>
                    </div>
                </div>
<?php
    }
?>
            </div>
        </div>
    </div>
<?php
}

function showSellerID($conn) {
    $sql = "
        SELECT name AS user_name, alamat, user_id FROM users WHERE role='seller'
    ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($data = $result->fetch_assoc()) {
            showProducts($data, $conn);
        }
    }
}

showSellerID($conn);

$conn->close();
?>

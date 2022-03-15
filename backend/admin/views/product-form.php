<?php

if($_GET['action'] == "add"){

    $title = "Tambah Produk";
    $product_id = "";
    $nama_produk = "";
    $deskripsi = "";
    $gambar = "";
    $kategori = "";

}else if($_GET['action'] == "edit") {

    require 'function.php';
    $conn = connectionDB();

    $sql = "SELECT * FROM product WHERE product_id = ?";
    $result = $conn->prepare($sql);
    $result->execute([$_GET['id']]);
    $show = $result->fetch();

    $title = "Edit Produk";
    $product_id = $show['product_id'];
    $nama_produk = $show['product_name'];
    $deskripsi = $show['product_description'];
    $gambar = $show['product_picture'];
    $kategori = $show['product_category'];
    

}
?>

<h1 class="h2 mt-3"><?= $title; ?></h1>
<form action="process/product.php?action=<?= $_GET['action']; ?>" method="post" enctype="multipart/form-data">
    <?php if (isset($_GET['error'])) { ?>
     	<p class="error" style="color:red;"><?php echo $_GET['error']; ?></p>
    <?php } ?>
    <div class="form-group">
        <label>Product Id</label>
        <input type="text" name="product_id" value="<?= $product_id; ?>" class="form-control" />
    </div>
    <div class="form-group">
        <label>Product Name</label>
        <input type="text" name="product_name" value="<?= $nama_produk; ?>" class="form-control" />
    </div>
    <div class="form-group">
        <label>Description</label>
        <input type="text" name="product_description" value="<?= $deskripsi; ?>" class="form-control" />
    </div>
    <div class="form-group">
        <label>Product Picture</label><br>
        <input type="file" name="file" />
    </div>
    <div class="form-group">
        <p>Product Category :</p>
            <input type="radio" id="Dumbbell" name="product_category" value="Dumbbell">
            <label for="Dumbbell">Dumbbell</label><br>
            <input type="radio" id="Accessories" name="product_category" value="Accessories">
            <label for="Accessories">Aksesoris</label><br>
            <input type="radio" id="Supplement" name="product_category" value="Supplement">
            <label for="Supplement">Suplemen</label>
    </div>
    
    
    <button type="submit" name = "submit" type="submit" class="btn btn-success">Save</button>
</form>
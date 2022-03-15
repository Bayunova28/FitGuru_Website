<?php

require 'function.php';
$conn = connectionDB();

$sql = "SELECT * FROM product";
$result = $conn->query($sql);



?>


<h1 class="mt-3 h2">Product</h1>
<a href="index.php?page=product-form&action=add" class="btn btn-primary">
<span data-feather="plus"></span>Daftar Produk</a>

<div class="table-responsive mt-3">
    <table class="table">
        <tr>
            <th>Product Id</th>
            <th>Product Name</th>
            <th>Description</th>
            <th>Product Picture</th>
            <th>Product Category</th>
            <th>Action</th>
        </tr>
        <?php 
        // $i = 0;
        while($row = $result->fetch()):
        // $i++; ?>
        <tr>
            <td><?= $row['product_id']; ?></td>
            <td><?= $row['product_name']; ?></td>
            <td><?= $row['product_description']; ?></td>
            <td><img src="<?php echo $row['product_picture']; ?>" width="200" height="200" /></td>
            <td><?= $row['product_category']; ?></td>
            <td>
                <a href="index.php?page=product-form&action=edit&id=<?= $row['product_id']; ?>" class="btn btn-warning btn-sm">
                <span data-feather="edit-2"></span>Edit</a>
                <a href="process/product.php?action=delete&id=<?= $row['product_id']; ?>" class="btn btn-danger btn-sm">
                <span data-feather="delete"></span>Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>

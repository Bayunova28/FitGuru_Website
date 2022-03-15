<?php

    $exp = explode(".", $_FILES['foto']['name']);
    $exp = end($exp);
    $exp = strtolower($exp);
    echo "<pre>";
    var_dump($exp);

    $confirm = ["jpg", "jpeg", "png", "gif"];
    $size = 2*1024*1024;
    if( in_array($exp, $confirm) && $_FILES['foto']['size'] <= $size) {
        
        $tmp = $_FILES['foto']['tmp_name'];
        $permanent = "uploads/" . $_FILES['foto']['name'];
        move_uploaded_file($tmp, $permanent);

        $dsn = "mysql:host=localhost;dbname=Universitas";
        $pdo = new PDO($dsn , "root", "");

        $sql = "INSERT INTO product (product_id, product_name, product_description, product_picture, category_product)
                VALUES (?, ?, ?, ?, ?)";
        $result = $pdo->prepare($sql);
        $result->execute([$_POST['judul'], $permanent]);
        
    } else {
      echo "FILE TIDAK VALID. UPLOAD DITOLAK";
    }

?>
<?php

require '../function.php';

$pdo = connectionDb();
$product_id = $_POST['product_id'];

if($_GET['action'] == "add") {
    
    if (isset($_POST['product_id']) && isset($_POST['product_name'])  && !empty($_FILES['file']['name']) && isset($_POST['product_category']) && !empty($_POST['product_description'])){
        
        $file = $_FILES['file'];
        
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];
        
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        
        $allowed = array('jpg', 'jpeg', 'png', 'pdf');
        
        if (in_array($fileActualExt, $allowed)){
            if ($fileError === 0 ){
                if ($fileSize < 1000000){
                    $fileNameNew = $product_id.".".$fileActualExt;
                    $target_dir = "http://prak11billy2-com.preview-domain.com/backend/admin/process/uploads/" . $fileNameNew;
                    $sql = "INSERT INTO product (product_id, product_name, product_description, product_picture, product_category) VALUES (?, ?, ?, ?, ?)";
                    $result = $pdo->prepare($sql);
                    $result->execute([$_POST['product_id'], $_POST['product_name'], $_POST['product_description'],$target_dir , $_POST['product_category']]);
                     
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    header("Location: product.php?uploadsuccess");
                }else {
                    header("Location: ../index.php?page=product-form&error=Your file is too big!&action=add");
                }
            }else {
                header("Location: ../index.php?page=product-form&error=There was an error uploading your file!&action=add");
            }
        }else {
            header("Location: ../index.php?page=product-form&error=You cannot upload files of this type!&action=add");
        }
        
        header('Location: ../index.php?page=product');
    }else {
        header("Location: ../index.php?page=product-form&error=Please Fill In All The Fields Required&action=add");
    }
    
    

} else if($_GET['action'] == "edit") {
    
    if (isset($_POST['product_id']) && isset($_POST['product_name'])  && !empty($_FILES['file']['name']) && isset($_POST['product_category']) && !empty($_POST['product_description'])){
        
        $file = $_FILES['file'];
        
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];
        
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        
        $allowed = array('jpg', 'jpeg', 'png', 'pdf');
        
        if (in_array($fileActualExt, $allowed)){
            if ($fileError === 0 ){
                if ($fileSize < 1000000){
                    
                    $fileNameNew = $product_id.".".$fileActualExt;
                    $target_dir = "http://prak11billy2-com.preview-domain.com/backend/admin/process/uploads/" . $fileNameNew;
                    $sql = "UPDATE product
                            SET product_name = ?,
                            product_description = ?,
                            product_picture = ?,
                            product_category = ?
                            WHERE product_id = ?";
                    $result = $pdo->prepare($sql);
                    $result->execute([
                            $_POST['product_name'],
                            $_POST['product_description'],
                            $target_dir,
                            $_POST['product_category'],
                            $_POST['product_id']
                            ]);
        

                     
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    header("Location: product.php?uploadsuccess");
                }else {
                    header("Location: ../index.php?page=product-form&error=Your file is too big!&action=edit&id=" . $_POST['product_id']);


                }
            }else {
                header("Location: ../index.php?page=product-form&error=There was an error uploading your file!&action=edit&id=" . $_POST['product_id']);
            }
        }else {
            header("Location: ../index.php?page=product-form&error=You cannot upload files of this type!&action=edit&id=" . $_POST['product_id']);
        }
        
        header('Location: ../index.php?page=product');
    }else {
        header("Location: ../index.php?page=product-form&error=Please Fill In All The Fields Required&action=edit&id=" . $_POST['product_id']);
    }

} else if($_GET['action'] == "delete") {

    $sql = "DELETE FROM product
            WHERE product_id = ?";
    $result = $pdo->prepare($sql);
    $result->execute([$_GET['id']]);
    header('Location: ../index.php');

} else {

        $data = [
            $_POST['product_id'],
            $_POST['product_name'],
            $_POST['product_description'],
            null,
            $_POST['product_category']
        ];

    $result->execute($data);

    header('Location: ../index.php?page=product');
}    
?>
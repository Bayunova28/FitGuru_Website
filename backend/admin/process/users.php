<?php

require '../function.php';

$pdo = connectionDb();

if($_GET['action'] == "add") {
    
    if (isset($_POST)){
    
    $sql = "INSERT INTO users (fullname, email, phone, address, weight, username, password)
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $result = $pdo->prepare($sql);
    $result->execute([$_POST['fullname'], $_POST['email'], $_POST['phone'], $_POST['address'] ,  $_POST['weight'], $_POST['username'], $_POST['password']]);
    
    header('Location: ../index.php?page=users');
    }else {
        header("Location: ../index.php?page=users-form&error=Please Fill In All The Fields Required&action=add");
    }
    
    
    

} else if($_GET['action'] == "edit") {
    
    if (isset($_POST)){

    $sql = "UPDATE users
            SET fullname = ?,
                email = ?,
                phone = ?,
                address = ?,
                weight = ?,
                password = ?
            WHERE username = ?";
    $result = $pdo->prepare($sql);
    $result->execute([
        $_POST['fullname'],
        $_POST['email'],
        $_POST['phone'],
        $_POST['address'],
        $_POST['weight'],
        $_POST['password'],
        $_POST['username']
    ]);

    header('Location: ../index.php?page=users');
    
    }else {
        header("Location: ../index.php?page=users-form&error=Please Fill In All The Fields Required&action=edit&username=" . $_POST['username']);
    }

} else if($_GET['action'] == "delete") {

    $sql = "DELETE FROM users
            WHERE username = ?";
    $result = $pdo->prepare($sql);
    $result->execute([$_GET['username']]);
    header('Location: ../index.php?page=users');

} else {

        $data = [
            $_POST['fullname'],
            $_POST['email'],
            $_POST['phone'],
            $_POST['address'],
            $_POST['weight'],
            $_POST['username'],
            $_POST['password']
        ];

    $result->execute($data);

    header('Location: ../index.php?page=users');
}    
?>
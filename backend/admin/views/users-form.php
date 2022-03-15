<?php

if($_GET['action'] == "add"){

    $title = "Tambah Users";
    $fullname = "";
    $email = "";
    $phone = "";
    $address = "";
    $weight = "";
    $username = "";
    $password = "";

}else if($_GET['action'] == "edit") {

    require 'function.php';
    $conn = connectionDB();

    $sql = "SELECT * FROM users WHERE username = ?";
    $result = $conn->prepare($sql);
    $result->execute([$_GET['username']]);
    $show = $result->fetch();

    $title = "Edit Users";
    $fullname = $show['fullname'];
    $email = $show['email'];
    $phone = $show['phone'];
    $address = $show['address'];
    $weight = $show['weight'];
    $username = $show['username'];
    $password = $show['password'];
    

}
?>

<h1 class="h2 mt-3"><?= $title; ?></h1>
<form action="process/users.php?action=<?= $_GET['action']; ?>" method="post" enctype="multipart/form-data">
    <?php if (isset($_GET['error'])) { ?>
     	    <p class="error" style="color:red;"><?php echo $_GET['error']; ?></p>
    <?php } ?>
    <div class="form-group">
        <label>Fullname</label>
        <input type="text" name="fullname" value="<?= $fullname; ?>" class="form-control" />
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" value="<?= $email; ?>" class="form-control" />
    </div>
    <div class="form-group">
        <label>Phone</label>
        <input type="number" name="phone" value="<?= $phone; ?>" class="form-control" />
    </div>
    <div class="form-group">
        <label>Address</label>
        <input type="text" name="address" value="<?= $address; ?>" class="form-control" />
    </div>
    <div class="form-group">
        <label>Weight (kg) </label>
        <input type="text" name="weight" value="<?= $weight; ?>" class="form-control" />
    </div>
    <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" value="<?= $username; ?>" class="form-control" />
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" value="<?= $password; ?>" class="form-control" />
    </div>
    
    <button type="submit" type="submit" class="btn btn-success">Save</button>
</form>
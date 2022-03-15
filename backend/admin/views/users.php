<?php

require 'function.php';
$conn = connectionDB();

$sql = "SELECT * FROM users";
$result = $conn->query($sql);



?>


<h1 class="mt-3 h2">Users</h1>
<a href="index.php?page=users-form&action=add" class="btn btn-primary">
<span data-feather="plus"></span>Daftar Users</a>

<div class="table-responsive mt-3">
    <table class="table">
        <tr>
            <th>Fullname</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Weight</th>
            <th>Username</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        <?php 
        // $i = 0;
        while($row = $result->fetch()):
        // $i++; ?>
        <tr>
            <td><?= $row['fullname']; ?></td>
            <td><?= $row['email']; ?></td>
            <td><?= $row['phone']; ?></td>
            <td><?= $row['address']; ?></td>
            <td><?= $row['weight']; ?></td>
            <td><?= $row['username']; ?></td>
            <td><?= $row['password']; ?></td>
            <td>
                <a href="index.php?page=users-form&action=edit&username=<?= $row['username']; ?>" class="btn btn-warning btn-sm">
                <span data-feather="edit-2"></span>Edit</a>
                <a href="process/users.php?action=delete&username=<?= $row['username']; ?>" class="btn btn-danger btn-sm">
                <span data-feather="delete"></span>Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>
<?php

require 'function.php';
$conn = connectionDB();

$sql = "SELECT * FROM contact";
$result = $conn->query($sql);



?>


<h1 class="mt-3 h2">Contact</h1>

<div class="table-responsive mt-3">
    <table class="table">
        <tr>
            <th>Nama</th>
            <th>Email</th></th>
            <th>Subject</th>
            <th>Message</th>
        </tr>
        <?php 
        // $i = 0;
        while($row = $result->fetch()):
        // $i++; ?>
        <tr>
            <td><?= $row['name']; ?></td>
            <td><?= $row['email']; ?></td>
            <td><?= $row['subject']; ?></td>
            <td><?= $row['message']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">BACK</a>
    <table border = 1>
    <tr>
        <th>NIK</th> 
        <th>nama</th> 
        <th>alamat</th> 
        <th>divisi</th> 
        <th>shift</th>
        <th>seting</th>
    </tr>
    <?php
     include "conn-db-web.php";
     $data = mysqli_query ($conn,"select * from karyawan"); 

    while ($post = mysqli_fetch_array($data)) {
         echo "<pre>";
        //   var_dump($post); 
        ?>
        <tr>
            <td><?= $post['NIK']?></td>
            <td><?= $post['nama']?></td>
            <td><?= $post['alamat']?></td>
            <td><?= $post['divisi']?></td>
            <td><?= $post['shift']?></td>
            <td>
                <a href="hapus.php?NIK=<?= $post['NIK']; ?>">HAPUS </a> 
                <a href="edit.php?NIK=<?= $post['NIK']; ?>">EDIT</a>
            </td>

        </tr>
        <?php
        }
         ?>
    </table>
</body>
</html>
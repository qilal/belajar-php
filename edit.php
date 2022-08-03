<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     include 'conn-db-web.php';
     $NIK =  $_GET['NIK'];
     $data = mysqli_query($conn, "SELECT * FROM karyawan WHERE NIK='$NIK'");
    while ($post = mysqli_fetch_array($data)){
    ?>
    <form action="update.php" method="post">
        <table border="1">
        <tr>
            <th>NAMA</th> <td>:</td> <td><input type="text" name="nama" velue="<?= $post['nama']; ?>"></td>
        </tr>

        <tr>
            <th>alamat</th> <td>:</td> <td><input type="text" name="alamat" value="<?= $post ['alamat']?>"></td>
        </tr>

        <tr>
            <th>divisi</th> <td>:</td> 
            <td><select name="divisi" >
             <option value="kasir" <?= $post['divisi'] === 'kasir' ? 'selected' : '' ?>>kasir</option> 
             <option value="gudang" <?= $post['divisi'] === 'gudang' ? 'selected' : '' ?>>gudang</option> 
        </select></td> 
        </tr>
            <th>shift</th> <td>:</td> 
            <td>
                <input type="radio" name="shift" <?= $post ['shift'] === 'pagi' ? 'checked': '' ?>value="pagi">pagi
                <input type="radio" name="shift" <?= $post ['shift'] === 'siang' ? 'checked': '' ?> value="siang">siang
                <input type="radio" name="shift" <?= $post ['shift'] === 'malam' ? 'checked': '' ?>value="malam">malam
            </td>
        <tr>
            <th colspan="3"><button type="submit" value="simpan"> SIMPAN</button> <input type="reset" value="reset"> </th>
        </tr>
        </table>
    </form>
    <?php
    }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="simpankaryawan.php">
    <table border="1">
        <tr>
            <th>NAMA</th> <td>:</td> <td><input type="text" name="nama"></td>
        </tr>

        <tr>
            <th>alamat</th> <td>:</td> <td><input type="text" name="alamat"></td>
        </tr>

        <tr>
            <th>divisi</th> <td>:</td> 
            <td><select name="divisi">
             <option value="kasir" >kasir</option> 
             <option value="gudang">gudang</option> 
        </select></td> 
        </tr>
            <th>shift</th> <td>:</td> 
            <td>
                <input type="radio" name="shift" value="pagi">pagi
                <input type="radio" name="shift" value="siang">siang
                <input type="radio" name="shift" value="malam">malam
            </td>
        <tr>
            <th colspan="3"><button type="submit" value="simpan"> SIMPAN</button> <input type="reset" value="reset"> </th>
        </tr>
    </table>
   </form> 
</body>
</html>
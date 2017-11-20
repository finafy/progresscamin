<!DOCTYPE html>
<html>
<head>
    <title>Tambah Record</title>
</head>
<body>
    <table>
<!-- kalo btn simpan diklik akan diarahkan ke fungsi "insert" melalui "action" dibawah -->
        <form method="post" action="<?php echo base_url()."index.php/start/insert"; ?>">
         <!-- tidak perlu karena auto_increment -->   
         <!--    <tr>
                <td>Nomor Induk</td>
                <td>:</td>
                <td><input required type="text" name="ni" placeholder="Masukkan Nomor Induk.."></td>
            </tr> -->
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" placeholder="Masukkan Nama Anda.."></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea style="resize: none;" name="alamat"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Simpan"></td>
            </tr>
        </form>
    </table>
</body>
</html>
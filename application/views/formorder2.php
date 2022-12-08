<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-20">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM ORDER</title>
</head>
<body text="white" bgcolor="black">
    <form action="formorderout2" method="post">
        <h1 align="center"><div class="logo">
                    <a href="<?php echo base_url() . "pricing.php" ?>"><img src="<?php echo base_url('assets/images/logo.png') ?>" alt="#" /></a></h1>
    
    <table style="margin : 20px auto;">
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td class="center"><input type="text" name="nama1"></td>
        </tr>
        <tr>
            <td>Nomor Telepon </td>
            <td>:</td>
            <td><input type="text" name="notelp"></td>
        </tr>
        <tr>
            <td>Jenis Class</td>
            <td>:</td>
            <td><select name="jenis">
                <option>--Pilih--</option>
                <option>Regular Class A</option>
                <option>Regular Class B</option>
                <option>Advance Class</option>
            
            </select>
        </td>
        </tr>
        <tr>
            <td>Kode Pembayaran</td>
            <td>:</td>
            <td><select name="kodeunik">
                <option>--Pilih--</option>
                <option>R1 (Regular Class A)</option>
                <option>R2 (Regular Class B)</option>
                <option>AD (Advance Class)</option>
            </select>
        </tr>
        <tr>
            <td>Jenis Pembayaran</td>
            <td>:</td>
            <td><select name="metode">
                <option>--Pilih--</option>
                <option>Indomaret</option>
                <option>Alfamart</option>
            </select>
        </td>
        </tr>
    </table>

    <br/>
    <table style="margin : 20px auto;">
    <td><input type="submit" value="Pesan"><input type="reset" value="Batal"></td>
    </form>

</body>
</html>
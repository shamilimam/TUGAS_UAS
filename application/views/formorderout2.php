<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-20">
        <meta name="viewport" content="width=device-width", initial-scale="1.0">
        <title>Bukti Pendaftaran Class</title>
    </head>
    <body text="white" bgcolor="blueviolet">
    
    <?php
    $nama = $_POST['nama1'];
    $notelp = $_POST['notelp'];
    $jenis = $_POST['jenis'];
    $kodeunik = $_POST['kodeunik'];
    $metode = $_POST['metode'];

    switch($jenis) {
        case 'Regular Class A': $jns = 160000;
        break;
        case 'Reguler Class B': $jns = 650000;
        break;
        case 'Advance Class': $jns = 950000;
        break;
        default: $jns ="Tak ada jenis pembayaran";
    }
    switch($kodeunik) {
        case 'R1 (Regular Class A)': $kodeunik = 393821478578;
        break;
        case 'R2 (Regular Class B)': $kodeunik = 148274866984;
        break;
        case 'AD (Advance Class)': $kodeunik = 4849298834282;
        break;
        
        default: $ku ="Tak ada jenis Pembayaran ";
    }
    $total = $jns;
    
    $bayar = $total;
    ?>

        <table style="margin : 20px auto;">
        <tr>
        <h1 align="center"><div class="logo">
                    <a href="<?php echo base_url() . "index.php" ?>"><img src="<?php echo base_url('assets/images/logo.png') ?>" alt="#" /></a></h1>
        </tr>
        <tr>
            <td colspan="3" style="border-top:  1px dashed #000"></td>
        </tr>
        <tr>
            <td>Nama Customer</td>
            <td>:</td>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td>Kode Pembayaran</td>
            <td>:</td>
            <td style="padding-left: ;100px"><?php echo "",$kodeunik; ?></td>
        </tr>
        <tr>
            <td>Metode Pembayaran</td>
            <td>:</td>
            <td><?php echo $metode; ?></td>
        </tr>
        <tr>
            <td>Nomor Telepon</td>
            <td>:</td>
            <td><?php echo $notelp; ?></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td style="padding-left: ;100px"><?php echo "Rp. ",$jns; ?></td>
        </tr>
        <tr>
            <td>Jenis</td>
            <td>:</td>
            <td><?php echo $jenis; ?></td>
        </tr>
        
        <tr>
            <td colspan="3" style="border-top: 1px dashed #000"></td>
        </tr>
        <tr>
            <td>Total Harga</td>
            <td>:</td>
            <td style="padding-left: ;100px"><?php echo "Rp. ",$total; ?></td>
        </tr>
        
        <tr>
            <td>Total Bayar</td>
            <td>:</td>
            <td style="padding-left: ;100px"><?php echo "Rp. ",$bayar; ?></td>
        </tr>
        
    </table>
    <table style="margin : 20px auto;">
    <tr>
            <td>SCREENSHOT DAN SIMPAN BUKTI PEMESANAN INI</td>
    </br>
    </body>

    </html>
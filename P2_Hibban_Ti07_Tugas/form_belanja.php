<?php
if(!empty($_POST['nama_cs'])){
    $Nama_customer = $_POST['nama_cs'];
    $Pilih_Produk = $_POST['produk'];
    $Jumlah = $_POST['jumlah'];
    if ($Pilih_Produk == 'tv'){
        $harga_produk = 4200000 + $Jumlah;
    }
    elseif ($Pilih_Produk == 'kulkas'){
        $harga_produk = 3100000 + $Jumlah;
    }
    else {
        $harga_produk = 3800000 + $Jumlah;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>
    <div class="row m-3">
        <div class="col-8">
            <h2>
                Belanja Online
            </h2>
           <hr>
           <form action="" method="POST">
  <div class="form-group row">
    <label for="masukan nama" class="col-4 col-form-label">Nama Customer</label> 
    <div class="col-8">
      <input id="masukan nama" name="nama_cs" placeholder="Masukan Nama Customer" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
      <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv" required="required">
      <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
      <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas" required="required">
      <label for="produk_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
      <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin cuci" required="required">
      <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="praktikum" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-success">Kirim</button>
    </div>
  </div>
  <div class="col-4">
    <ul class="list-group">
        <li class="list-group-item active">Daftar Harga</li>
        <li class="list-group-item">TV: 4.200.000</li>
        <li class="list-group-item">Kulkas: 3.100.000</li>
        <li class="list-group-item">Mesin Cuci: 3.000.000</li>
        <li class="list-group-item active">Harga Dapat Berubah Setelah</li>
    </ul>
</div>
    </div>
    <hr>
    <?php
    if (!empty($Nama_customer)):
    ?>
    <table>
        <tr>
            <td>Nama Customer&nbsp;:</td>

            <td><?php echo $Nama_customer; ?></td>
        </tr>
        <tr>
            <td>Pilih Produk&nbsp;:</td>
            <td><?php echo $Pilih_Produk; ?></td>
        </tr>
        <tr>
            <td>Jumlah Belanja&nbsp;:</td>
            <td><?php echo $Jumlah; ?></td>
        </tr>
        <tr>
            <td>Total Belanja&nbsp;:</td>
            <td>Rp.<?php echo number_format($harga_produk,0,',','.'); ?></td>
        </tr>
    </table>
<?php
endif;
?>

</body>

</html>
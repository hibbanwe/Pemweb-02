<?php 
require_once '../dbkoneksi.php';

$_id = $_GET['id'];
$sql = "SELECT * FROM pembelian WHERE id = ?";

$st = $dbh->prepare($sql);
$st->execute([$_id]);

$card = $st->fetch();
?>
            
<form method="POST" action="create.php">
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Tanggal</label> 
    <div class="col-8">
      <div class="input-group">
        </div> 
        <input id="kode" name="tanggal" type="text" class="form-control" value="<?= $card['tanggal'] ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nomor</label> 
    <div class="col-8">
      <div class="input-group">
        </div> 
        <input id="nama" name="nomor" type="text" class="form-control" value="<?= $card['nomor'] ?>">
      </div>
    </div>
  </div>
  </div>
  <div class="form-group row">
    <label for="diskon" class="col-4 col-form-label">Produk_Id</label> 
    <div class="col-8">
      <div class="input-group">
        </div> 
        <input id="stok" name="produk_id" value="<?= $card['produk_id'] ?>"
        type="text" class="form-control">
      </div>
    </div>
    </div>
  <div class="form-group row">
    <label for="iuran" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <div class="input-group">
        </div> 
        <input id="iuran" name="jumlah" value="<?= $card['jumlah'] ?>"
        type="number" class="form-control">
      </div>
    </div>
    </div> 

    <input type="hidden" name="id"  value="<?= $card['id'] ?>"> 

  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Update"/>
    </div>
  </div>
</form>

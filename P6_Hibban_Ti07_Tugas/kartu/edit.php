<?php 
require_once '../dbkoneksi.php';

$_id = $_GET['id'];
$sql = "SELECT * FROM kartu WHERE id = ?";

$st = $dbh->prepare($sql);
$st->execute([$_id]);

$card = $st->fetch();
?>
            
<form method="POST" action="create.php">
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <div class="input-group">
        </div> 
        <input id="kode" name="kode" type="text" class="form-control" value="<?= $card['kode'] ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Produk</label> 
    <div class="col-8">
      <div class="input-group">
        </div> 
        <input id="nama" name="nama" type="text" class="form-control" value="<?= $card['nama'] ?>">
      </div>
    </div>
  </div>
  </div>
  <div class="form-group row">
    <label for="diskon" class="col-4 col-form-label">diskon</label> 
    <div class="col-8">
      <div class="input-group">
        </div> 
        <input id="stok" name="diskon" value="<?= $card['diskon'] ?>"
        type="number" class="form-control">
      </div>
    </div>
    </div>
  <div class="form-group row">
    <label for="iuran" class="col-4 col-form-label">Iuran</label> 
    <div class="col-8">
      <div class="input-group">
        </div> 
        <input id="iuran" name="iuran" value="<?= $card['iuran'] ?>"
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

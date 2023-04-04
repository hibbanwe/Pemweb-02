<?php 
require_once '../dbkoneksi.php';

$_id = $_GET['id'];
$sql = "SELECT * FROM vendor WHERE id = ?";

$st = $dbh->prepare($sql);
$st->execute([$_id]);

$card = $st->fetch();
?>
            
<form method="POST" action="create.php">
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">nomor</label> 
    <div class="col-8">
      <div class="input-group">
        </div> 
        <input id="kode" name="nomor" type="text" class="form-control" value="<?= $card['nomor'] ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        </div> 
        <input id="nama" name="nama" type="text" class="form-control" value="<?= $card['nama'] ?>">
      </div>
    </div>
  </div>
  </div>
  <div class="form-group row">
    <label for="diskon" class="col-4 col-form-label">kota</label> 
    <div class="col-8">
      <div class="input-group">
        </div> 
        <input id="stok" name="kota" value="<?= $card['kota'] ?>"
        type="text" class="form-control">
      </div>
    </div>
    </div>
  <div class="form-group row">
    <label for="iuran" class="col-4 col-form-label">kontak</label> 
    <div class="col-8">
      <div class="input-group">
        </div> 
        <input id="iuran" name="kontak" value="<?= $card['kontak'] ?>"
        type="text" class="form-control">
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

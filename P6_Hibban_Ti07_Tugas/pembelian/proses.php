<?php 
require_once '../dbkoneksi.php';
?>
<?php 
   $_tanggal = $_POST['tanggal'];
   $_nomor = $_POST['nomor'];
   $_produk_id = $_POST['produk_id'];
   $_jumlah = $_POST['jumlah'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_tanggal; // ? 1
   $ar_data[]=$_nomor; // ? 2
   $ar_data[]=$_produk_id;// 3
   $ar_data[]=$_jumlah;

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO kartu (tanggal,nomor,produk_id,jumlah) VALUES (?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['id'];// ? 8
    $sql = "UPDATE kartu SET tanggal=?,nomor=?,produk_id=?,jumlah=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:index.php');
?>
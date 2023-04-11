<?php
class Motor 
{
  public $merk;
  public $bensin;
  public $topSpeed;
  public $cc;

  public function __construct($merk, $bensin, $topSpeed, $cc)
  {
    $this->merk = $merk;
    $this->bensin = $bensin;
    $this->topSpeed = $topSpeed;
    $this->cc = $cc;
  }
  public function jalan($jarak) //kilometer
  {
    $jalan = $jarak / 30;
    $waktu = $jarak / $this->topSpeed;
    $this->bensin -= $jalan;
    
    echo "Motor <p>$this->merk $this->cc CC</b> telah berjalan sepanjang <b>$jarak km</b>
     dengan kecepatan<b>$this->topSpeed km/h</b>, sampai ke tempat tujuan dengan waktu <b>$waktu jam</b>
     dan bensin yang tersisa yaitu <b>$this->bensin Liter</b> <hr><br>";

  }
}

$motor = new Motor('Beat', 3, 500, 690);
$motor->Jalan(30);

$motor2 = new Motor('C70', 30, 400, 750);
$motor2->Jalan(30);

$motor3 = new Motor('Vespa', 5, 670, 1800);
$motor3->Jalan(70);

$motor4 = new Motor('Fazio', 6, 40, 20000);
$motor4->jalan(60);

?>
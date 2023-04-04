<?php
class Hero{
    // Attribut / Properties pada class 
    public $name = "Alucard";
    public $health = 3200;
    public $damage = 200;


    // constructor akan dijalankan secara otomatis
    public function __construct($name, $health, $damage)
    {
        $this->name = $name;
        $this->helath = $health;
        $this->damage = $damage;
    }

    // method untuk menampilkan informasi hero
    public function getinfo(){
        echo "Nama Hero: " . $this->name;
        echo "<br> HP: " . $this->health;
        echo "<br> Damage: " . $this->damage;
    }
}

// membuat objek dari class Hero
$hero1 = new Hero ('Alucard', 3200, 200);
$hero2 = new Hero ('Franco', 5000, 50);

// memanggil method
$hero1->getinfo();
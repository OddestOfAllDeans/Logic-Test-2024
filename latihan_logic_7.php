<?php

class Lingkaran {
    private $radiuslingkaran;

    public function __construct($radiuslingkaran) {
        $this->radius = $radiuslingkaran;
    }
    public function cariluas() {
        return pi() * pow($this->radius, 2);
    }
}

$lingkaran = new Lingkaran(4);

echo "Lingkaran: " . $lingkaran->cariluas() . "</br>";

?>
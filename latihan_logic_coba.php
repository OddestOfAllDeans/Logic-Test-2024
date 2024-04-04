<?php

class Bola {
    private $radiuslingkaran;

    public function __construct($radiuslingkaran) {
        $this->radius = $radiuslingkaran;
    }
    public function carivolume( $r) {
        $nilaiphi = 3.14159;
        $volume = (4 / 3) * $nilaiphi * $r * $r * $r;
        return $radiuslingkaran;
    }
}


$radius = new Bola(12); 


$vol = carivolume($radius);

echo ("Volume bola: ");
echo ($vol);

?>
<?php 

    class Statistik {
    public $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function mean() {
        $jumlah = count($this->data);
        $total = array_sum($this->data);
        return $total / $jumlah;
    }

    public function median() {
        sort($this->data);
        $jumlah = count($this->data);
        $tengah = floor($jumlah / 2);

        if ($jumlah % 2 == 0) {
            return ($this->data[$tengah - 1] + $this->data[$tengah]) / 2;
        } else {
            return $this->data[$tengah];
        }
    }

    public function modus() {
        $frekuensi = array_count_values($this->data);
        $modus = array_keys($frekuensi, max($frekuensi));
        return $modus[0];
    }
}

$data = [15, 20, 25, 30, 35, 40, 45, 50, 55, 60];
$statistik = new Statistik($data);

echo "Mean: " . $statistik->mean() . "<br>";
echo "Median: " . $statistik->median() . "<br>";
echo "Modus: " . $statistik->modus() . "<br>";
?>
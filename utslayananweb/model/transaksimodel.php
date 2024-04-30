<?php
class TransaksiModel {
    public function getTransaksi() {
       
        return array(
            array('id' => 1, 'tanggal' => '2024-04-30', 'jumlah' => 3, 'total' => 30000000),
            array('id' => 2, 'tanggal' => '2024-04-29', 'jumlah' => 5, 'total' => 250000),
            array('id' => 3, 'tanggal' => '2024-04-28', 'jumlah' => 10, 'total' => 50000)
        );
    }
}
?>

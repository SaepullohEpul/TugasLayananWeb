<?php
include 'model/transaksimodel.php';
include 'view/transaksiview.php';

class transaksicontroller {
    private $model;

    public function __construct() {
        $this->model = new transaksimodel();
    }

    public function tampilkantransaksi() {
        $data = $this->model->gettransaksi();
        $view = new transaksiview();
        $view->tampilkantransaksi($data);
    }
}
?>

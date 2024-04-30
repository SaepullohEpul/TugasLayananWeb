<?php
include 'model/produkmodel.php';
include 'view/produkview.php';

class produkcontroller {
    private $model;

    public function __construct() {
        $this->model = new produkmodel();
    }

    public function tampilkanproduk() {
        $data = $this->model->getproduk();
        $view = new produkview();
        $view->tampilkanproduk($data);
    }
}
?>

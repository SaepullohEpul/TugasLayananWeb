<?php
include 'model/kategorimodel.php';
include 'view/kategoriview.php';

class kategoricontroller {
    private $model;

    public function __construct() {
        $this->model = new kategorimodel();
    }

    public function tampilkankategori() {
        $data = $this->model->getkategori();
        $view = new kategoriview();
        $view->tampilkankategori($data);
    }
}
?>

<?php
include 'model/suppliermodel.php';
include 'view/supplierview.php';

class suppliercontroller {
    private $model;

    public function __construct() {
        $this->model = new suppliermodel();
    }

    public function tampilkansupplier() {
        $data = $this->model->getsupplier();
        $view = new supplierview();
        $view->tampilkansupplier($data);
    }
}
?>

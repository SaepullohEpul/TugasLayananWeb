<?php
include 'model/kategorimodel.php';
include 'model/produkmodel.php';
include 'model/suppliermodel.php';
include 'model/transaksimodel.php';
include 'view/HalamanUtamaView.php';

class MainController {
    public function tampilkanHalamanUtama() {
        // Mengambil data dari model
        $kategoriModel = new kategorimodel();
        $produkModel = new produkmodel();
        $supplierModel = new suppliermodel();
        $transaksiModel = new transaksimodel();

        $dataKategori = $kategoriModel->getKategori();
        $dataProduk = $produkModel->getProduk();
        $dataSupplier = $supplierModel->getSupplier();
        $dataTransaksi = $transaksiModel->getTransaksi();

        // Render tampilan
        $view = new HalamanUtamaView();
        $view->tampilkanHalamanUtama($dataKategori, $dataProduk, $dataSupplier, $dataTransaksi);
    }
}
?>

<?php


include 'controller/MainController.php';

$controller = new MainController();
$controller->tampilkanHalamanUtama();


include 'controller/kategoricontroller.php';
include 'controller/produkcontroller.php';
include 'controller/suppliercontroller.php';
include 'controller/transaksicontroller.php';


if(isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'produk'; 
}

switch ($page) {
    case 'kategori':
        $controller = new KategoriController();
        $controller->tampilkanKategori();
        break;
    case 'produk':
        $controller = new ProdukController();
        $controller->tampilkanProduk();
        break;
    case 'supplier':
        $controller = new SupplierController();
        $controller->tampilkanSupplier();
        break;
    case 'transaksi':
        $controller = new TransaksiController();
        $controller->tampilkanTransaksi();
        break;
    default:
        echo "404 Halaman tidak ditemukan";
        break;
}
?>


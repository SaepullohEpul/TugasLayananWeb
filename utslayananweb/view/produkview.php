<?php
// Contoh produkview.php
class produkview {
    public function tampilkanproduk($data) {
        echo "<h2>Halaman produk</h2>";
        echo "<ul>";
        foreach ($data as $produk) {
            echo "<li>{$produk['nama_produk']}</li>";
        }
        echo "</ul>";
    }
}

?>

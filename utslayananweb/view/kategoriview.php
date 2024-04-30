<?php
// Contoh KategoriView.php
class kategoriview {
    public function tampilkankategori($data) {
        echo "<h2>Halaman Kategori</h2>";
        echo "<ul>";
        foreach ($data as $kategori) {
            echo "<li>{$kategori['nama_kategori']}</li>";
        }
        echo "</ul>";
    }
}

?>

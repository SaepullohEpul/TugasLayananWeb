<?php
// Contoh supplierview.php
class supplierview {
    public function tampilkansupplier($data) {
        echo "<h2>Halaman supplier</h2>";
        echo "<ul>";
        foreach ($data as $supplier) {
            echo "<li>{$supplier['nama_supplier']}</li>";
        }
        echo "</ul>";
    }
}

?>

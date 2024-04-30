<?php
class KategoriModel {
    public function getKategori() {
        // Implementasi untuk mengambil data kategori dari database
        return array(
            array('id' => 1, 'nama_kategori' => 'Elektronik'),
            array('id' => 2, 'nama_kategori' => 'Pakaian'),
            array('id' => 3, 'nama_kategori' => 'Makanan'),
            array('id' => 4, 'nama_kategori' => 'Minuman')
        );
    }
}
?>

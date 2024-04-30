<?php
class HalamanUtamaView {
    public function tampilkanHalamanUtama($dataKategori, $dataProduk, $dataSupplier, $dataTransaksi) {
        echo "<h1>Selamat Datang di Aplikasi Penjualan</h1>";

        echo "<h2>Kategori</h2>";
        echo "<ul>";
        foreach ($dataKategori as $kategori) {
            echo "<li>{$kategori['nama_kategori']}</li>";
        }
        echo "</ul>";

        echo "<h2>Produk</h2>";
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                </tr>";
        foreach ($dataProduk as $produk) {
            echo "<tr>
                    <td>{$produk['id']}</td>
                    <td>{$produk['nama_produk']}</td>
                    <td>{$produk['harga']}</td>
                  </tr>";
        }
        echo "</table>";

        echo "<h2>Supplier</h2>";
        echo "<ul>";
        foreach ($dataSupplier as $supplier) {
            echo "<li>{$supplier['nama_supplier']} - {$supplier['alamat']}</li>";
        }
        echo "</ul>";

        echo "<h2>Transaksi</h2>";
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Tanggal</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                </tr>";
        foreach ($dataTransaksi as $transaksi) {
            echo "<tr>
                    <td>{$transaksi['id']}</td>
                    <td>{$transaksi['tanggal']}</td>
                    <td>{$transaksi['jumlah']}</td>
                    <td>{$transaksi['total']}</td>
                  </tr>";
        }
        echo "</table>";
    }
}
?>

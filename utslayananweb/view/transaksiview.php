<?php
class transaksiview {
    public function tampilkantransaksi($data) {
        echo "<h2>Halaman transaksi</h2>";
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Tanggal</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                </tr>";
        foreach ($data as $transaksi) {
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

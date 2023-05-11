<?php
$url = 'https://farmasi.mimoapps.xyz/mimoqss2auyqD1EAlkgZCOhiffSsF16QqAEIGtM';
$data = file_get_contents($url);
$inventory = json_decode($data, true);

// data inventory dengan huruf berawalan "L"
$filteredInventory = array_filter($inventory, function ($item) {
    return strtoupper(substr($item['Nama Barang'], 0, 1)) === 'L';
});

// data inventory dalam bentuk tabel
echo '<table>';
echo '<tr><th>Kode Barang</th><th>Nama Barang</th><th>Harga Jual</th><th>Quantity</th></tr>';
foreach ($filteredInventory as $item) {
    echo '<tr>';
    echo '<td>' . $item['Kode Barang'] . '</td>';
    echo '<td>' . $item['Nama Barang'] . '</td>';
    echo '<td>' . $item['Harga Jual'] . '</td>';
    echo '<td>' . $item['Quantity'] . '</td>';
    echo '</tr>';
}
echo '</table>';
?>
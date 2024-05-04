<?php

require_once('DatabaseConnection.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Hewan Ternak</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Data Hewan Ternak</h1>
        <h2>Tabel 1: Hewan Ternak</h2>
        <table>
            <tr>
                <th>id</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Umur (Tahun)</th>
                <th>Harga (Rp)</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Sapi Limosin</td>
                <td>Sapi</td>
                <td>3</td>
                <td>5,000,000</td>
            </tr>
            <tr>
            <td>2</td>
            <td>kambing hitam</td>
            <td>kambing</td>
            <td>5</td>
            <td>10,000,000</td>
            </tr>
            <tr>
            <td>3</td>
            <td>Domba hitam</td>
            <td>Domba</td>
            <td>1</td>
            <td>3,000,000</td>
            </tr>
            <tr>
            <td>4</td>
            <td>Ikan mas</td>
            <td>Ikan</td>
            <td>14</td>
            <td>1,000,000</td>
            </tr>
            <tr>
            <td>5</td>
            <td>Kelinci</td>
            <td>kelinci</td>
            <td>5</td>
            <td>1,000,000</td>
            </tr>

        </table>

        <h2>Tabel 2: Data Lainnya</h2>
        <table>
        <tr>
                <th>Jenis Hewan</th>
                <th>Jumlah</th>
            </tr>
            <tr>
                <td>Sapi</td>
                <td><input type="number" id="jumlah_sapi" value="0" min="0"></td>
            </tr>
            <tr>
                <td>kambing</td>
                <td><input type="number" id="jumlah_ayam" value="0" min="0"></td>
            </tr>
            <tr>
                <td>Domba</td>
                <td><input type="number" id="jumlah_ayam" value="0" min="0"></td>
            </tr>
            <tr>
                <td>Ikan</td>
                <td><input type="number" id="jumlah_ayam" value="0" min="0"></td>
            </tr>
            <tr>
                <td>Kelinci</td>
                <td><input type="number" id="jumlah_ayam" value="0" min="0"></td>
            </tr>
        </table>
        <button onclick="hitungTotal()">Hitung Total</button>
        <p>Total Harga: <span id="total_harga">Rp 0</span></p>
        <p>Rata-rata Umur: <span id="rata_umur">0 tahun</span></p>

        <h2>Tabel 2: Data Lainnya</h2>
        <table id="hasil_perhitungan">
            <tr>
                <th>Total Harga</th>
                <th>Rata-rata Umur</th>
            </tr>
            <tr>
                <td id="total_harga_otomatis">-</td>
                <td id="rata_umur_otomatis">-</td>
            </tr>
        </table>
    </div>

    <script>
        function hitungTotal() {
            var jumlahSapi = parseInt(document.getElementById('jumlah_sapi').value);
            var jumlahkambing = parseInt(document.getElementById('jumlah_ayam').value);
            var jumlahDomba = parseInt(document.getElementById('jumlah_ayam').value);
            var jumlahIkan = parseInt(document.getElementById('jumlah_ayam').value);
            var jumlahKelinci = parseInt(document.getElementById('jumlah_ayam').value);
            
            var totalHarga = (jumlahSapi * 5000000) + (jumlahkambing * 1000000) + (jumlahDomba * 3000000) + (jumlahIkan * 1000000) + (jumlahKelinci * 1000000); // Harga contoh, sesuaikan dengan harga sebenarnya
            var totalUmur = (3 * jumlahSapi + 5 * jumlahkambing + 1 * jumlahDomba + 14 * jumlahIkan + 5 * jumlahKelinci) / (jumlahSapi + jumlahkambing + jumlahDomba + jumlahIkan + jumlahKelinci); // Umur rata-rata, contoh, sesuaikan dengan data sebenarnya
            
            document.getElementById('total_harga').innerText = "Rp " + totalHarga.toLocaleString();
            document.getElementById('rata_umur').innerText = totalUmur.toFixed(1) + " tahun";

            document.getElementById('total_harga_otomatis').innerText = "Rp " + totalHarga.toLocaleString();
            document.getElementById('rata_umur_otomatis').innerText = totalUmur.toFixed(2) + " tahun";
        }
    </script>
</body>
</html>
    </div>
</body>
</html>

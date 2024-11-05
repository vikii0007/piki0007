<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Tambah Data</title>
    <style>
        body {
            font-family: Arial, sans-serif; 
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        nav {
            margin-bottom: 20px;
            background-color: #3498db;
            padding: 10px; 
            border-radius: 5px; 
        }

        nav ul {
            list-style-type: none; 
            padding: 0; 
        }

        nav ul li {
            display: inline; 
            margin-right: 15px; 
        }

        nav ul li a {
            color: white; 
            text-decoration: none; 
            font-weight: bold; 
        }

        nav ul li a:hover {
            text-decoration: underline; 
        }

        h1 {
            color: #2c3e50; 
            text-align: center;
            margin-bottom: 20px;
        }

        #content {
            background-color: white; 
            padding: 20px; 
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); 
        }
    </style>
</head>

<body>

    <h2>Tambah Data</h2>
    <form action="index.php?controller=transaksi&action=store" method="POST">
        <label for="id_transaksi">ID Transaksi:</label>
        <input type="number" name="id_transaksi" required>
        <br>

        <label for="kode_barang">Kode Barang:</label>
        <input type="text" name="kode_barang" required>
        <br>

        <label for="id_pelanggan">ID Pelanggan:</label>
        <input type="text" name="id_pelanggan" required>
        <br>

        <label for="jumlah">Jumlah:</label>
        <input type="number" name="jumlah" required>
        <br>

        <label for="harga_barang">Harga Barang:</label>
        <input type="number" name="harga_barang" required>
        <br>

        <label for="tanggal_transaksi">Tanggal Transaksi:</label>
        <input type="date" name="tanggal_transaksi" required>
        <br>

        <!-- Menampilkan total harga yang dihitung secara otomatis -->
        <p>Total Harga: <span id="total_harga">0</span></p>

        <button type="submit">Simpan</button>
    </form>

    <!-- Script JavaScript untuk menghitung total harga secara otomatis -->
    <script>
        document.querySelector("input[name='jumlah']").addEventListener("input", calculateTotal);
        document.querySelector("input[name='harga_barang']").addEventListener("input", calculateTotal);

        function calculateTotal() {
            let jumlah = parseFloat(document.querySelector("input[name='jumlah']").value) || 0;
            let hargaBarang = parseFloat(document.querySelector("input[name='harga_barang']").value) || 0;
            let total = jumlah * hargaBarang;
            document.getElementById("total_harga").innerText = total;
        }
    </script>
</body>

</html>
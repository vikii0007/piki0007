<head>
    <meta charset="UTF-8">

    <meta charset="UTF-8">
    <title>Halaman Transaksi</title>
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


    <nav>
        <ul>
            <li><a href="index.php?controller=home&action=index">Home</a></li>
            <li><a href="index.php?controller=barang&action=index">Barang</a></li>
            <li><a href="index.php?controller=pelanggan&action=index">Pelanggan</a></li>
            <li><a href="index.php?controller=transaksi&action=index">Transaksi</a></li>
        </ul>
    </nav>
    <title>Daftar Pelanggan</title>
</head>

<h2>Daftar Transaksi</h2>
<a href="index.php?controller=transaksi&action=create">Tambah Data</a>
<table border="1">
    <tr>
        <th>No</th>
        <th>ID Transaksi</th>
        <th>Kode Barang</th>
        <th>ID Pelanggan</th>
        <th>Jumlah</th>
        <th>Total Harga</th>
        <th>Tanggal Transaksi</th>
        <th>Aksi</th>
    </tr>

    <?php foreach ($transaksiList as $key => $transaksi): ?>
        <tr>
            <td><?= $key + 1 ?></td>
            <td><?= $transaksi['id_transaksi'] ?></td>
            <td><?= $transaksi['kode_barang'] ?></td>
            <td><?= $transaksi['id_pelanggan'] ?></td>
            <td><?= $transaksi['jumlah'] ?></td>
            <td><?= $transaksi['total_harga'] ?></td>
            <td><?= $transaksi['tanggal_transaksi'] ?></td>
            <td><a href="index.php?controller=transaksi&action=detail&id=<?= $transaksi['id_transaksi'] ?>">Detail</a></td>

        </tr>
    <?php endforeach; ?>



</table>
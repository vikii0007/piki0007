<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sales Application</title>
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
    <nav>
        <ul>
            <li><a href="index.php?controller=home&action=index">Home</a></li>
            <li><a href="index.php?controller=barang&action=index">Barang</a></li>
            <li><a href="index.php?controller=pelanggan&action=index">Pelanggan</a></li>
            <li><a href="index.php?controller=transaksi&action=index">Transaksi</a></li>
        </ul>
    </nav>

    <h1>Wellcome to Salles Application</h1>

    <div id="content">
        <!-- Konten halaman akan ditampilkan di sini -->
    </div>
</body>

</html>

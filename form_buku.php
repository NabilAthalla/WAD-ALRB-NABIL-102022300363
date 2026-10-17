<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Buku - Perpustakaan Digital</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 40px auto;
            max-width: 600px;
            color: #333;
        }
        .card {
            background-color: #ffffff;
            padding: 25px 30px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-top: 0;
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
        }
        input[type="submit"] {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            font-weight: bold;
        }
        input[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

    <div class="card">
        <h2>Formulir Input Buku Perpustakaan</h2>
        <form action="Index.php" method="POST">
            <div class="form-group">
                <label for="judul">Judul Buku:</label>
                <input type="text" id="judul" name="judul" required placeholder="Contoh: Buku Pemrograman">
            </div>

            <div class="form-group">
                <label for="penulis">Nama Penulis:</label>
                <input type="text" id="penulis" name="penulis" required placeholder="Contoh: Luthfi">
            </div>

            <div class="form-group">
                <label for="kategori">Kategori Buku:</label>
                <!-- Menggunakan input text biasa tanpa dropdown -->
                <input type="text" id="kategori" name="kategori" required placeholder="Contoh: Novel">
            </div>

            <div class="form-group">
                <label for="tahun">Tahun Terbit:</label>
                <input type="number" id="tahun" name="tahun" min="1900" max="2099" value="2024" required>
            </div>

            <div class="form-group">
                <label for="stok">Jumlah Stok:</label>
                <input type="number" id="stok" name="stok" min="1" value="5" required>
            </div>

            <input type="submit" value="Simpan ke Katalog">
        </form>
    </div>

</body>
</html>